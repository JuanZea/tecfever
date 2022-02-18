<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([RolesAndPermissionsSeeder::class]);

        User::factory([
            'name' => 'Juan Zea',
            'email' => 'j@admin.com',
        ])->create()->removeRole('user')->assignRole('admin');

        $this->call([ProductsSeeder::class]);
    }
}
