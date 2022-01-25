<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([RolesAndPermissionsSeeder::class]);

        User::factory([
            'name' => 'Juan Zea',
            'email' => 'j@admin.com',
        ])->create()->removeRole('user')->assignRole('admin');
    }
}
