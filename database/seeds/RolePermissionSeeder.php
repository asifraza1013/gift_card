<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usr = User::create([
            'first_name'=> 'Super',
            'last_name'=> 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'admin',
            'type' => 1,
            'email_verified_at' => now(),
        ]);
    }
}
