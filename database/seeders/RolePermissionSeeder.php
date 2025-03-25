<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing roles and permissions to avoid duplicates
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('role_has_permissions')->truncate();
        DB::table('model_has_roles')->truncate();
        DB::table('model_has_permissions')->truncate();
        DB::table('roles')->truncate();
        DB::table('permissions')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Define permissions
        $permissions = [
            // Customer Permissions
            'view_restaurants',
            'make_reservation',
            'cancel_reservation',
            'write_review',
            'edit_profile',

            // Restaurant Owner Permissions
            'manage_restaurant_profile',
            'manage_restaurant_menu',
            'manage_restaurant_reservations',
            'view_restaurant_analytics',
            'respond_to_reviews',

            // Super Admin Permissions
            'manage_users',
            'manage_all_restaurants',
            'system_configuration',
            'view_system_analytics',
            'manage_roles_and_permissions'
        ];

        // Create permissions
        foreach ($permissions as $permissionName) {
            Permission::create(['name' => $permissionName]);
        }

        // Create Roles
        $customerRole = Role::create(['name' => 'customer']);
        $restaurantOwnerRole = Role::create(['name' => 'restaurant_owner']);
        $superAdminRole = Role::create(['name' => 'super_admin']);

        // Assign Permissions to Roles
        // Customer Role Permissions
        $customerRole->givePermissionTo([
            'view_restaurants',
            'make_reservation',
            'cancel_reservation',
            'write_review',
            'edit_profile'
        ]);

        // Restaurant Owner Role Permissions
        $restaurantOwnerRole->givePermissionTo([
            'manage_restaurant_profile',
            'manage_restaurant_menu',
            'manage_restaurant_reservations',
            'view_restaurant_analytics',
            'respond_to_reviews'
        ]);

        // Super Admin Role Permissions
        $superAdminRole->givePermissionTo($permissions);
    }
}
