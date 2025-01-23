<?php

namespace Database\Seeders;

use App\Models\Campaign;
use App\Models\CampaignAudience;
use App\Models\CampaignContent;
use App\Models\Category;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderAddress;
use App\Models\PaymentMethod;
use App\Models\Reservation;
use App\Models\Table;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Table::factory(10)->create();
        Reservation::factory(10)->create();
        PaymentMethod::factory(10)->create();
        Order::factory(10)->create();
        OrderAddress::factory(10)->create();
        Category::factory(10)->create();
        Item::factory(10)->create();
        Campaign::factory(10)->create();
        CampaignContent::factory(10)->create();
        CampaignAudience::factory(10)->create();
    }
}
