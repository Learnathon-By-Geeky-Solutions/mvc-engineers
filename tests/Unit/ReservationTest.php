<?php

namespace Tests\Unit;

use App\Models\Reservation;
use App\Models\Table;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReservationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_reservation()
    {
        $user = User::factory()->create();
        $table = Table::factory()->create();

        $reservationData = [
            'user_id' => $user->id,
            'table_id' => $table->id,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'sit_required' => 4,
            'note' => 'Window seat preferred',
            'status' => 'pending'
        ];

        $reservation = Reservation::create($reservationData);

        $this->assertInstanceOf(Reservation::class, $reservation);
        $this->assertEquals('John Doe', $reservation->name);
        $this->assertEquals($user->id, $reservation->user_id);
        $this->assertEquals($table->id, $reservation->table_id);
    }

    /** @test */
    public function it_generates_unique_five_digit_id()
    {
        $reservation1 = Reservation::factory()->create();
        $reservation2 = Reservation::factory()->create();

        $this->assertMatchesRegularExpression('/^\d{5}$/', $reservation1->id);
        $this->assertMatchesRegularExpression('/^\d{5}$/', $reservation2->id);
        $this->assertNotEquals($reservation1->id, $reservation2->id);
    }

    /** @test */
    public function it_belongs_to_a_user()
    {
        $user = User::factory()->create();
        $reservation = Reservation::factory()->create(['user_id' => $user->id]);

        $this->assertInstanceOf(User::class, $reservation->user);
        $this->assertEquals($user->id, $reservation->user->id);
    }

    /** @test */
    public function it_belongs_to_a_table()
    {
        $table = Table::factory()->create();
        $reservation = Reservation::factory()->create(['table_id' => $table->id]);

        $this->assertInstanceOf(Table::class, $reservation->table);
        $this->assertEquals($table->id, $reservation->table->id);
    }

    /** @test */
    public function it_can_be_soft_deleted()
    {
        $reservation = Reservation::factory()->create();
        $reservationId = $reservation->id;
        
        $reservation->delete();

        $this->assertSoftDeleted('reservations', ['id' => $reservationId]);
    }
} 