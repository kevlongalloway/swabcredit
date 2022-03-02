<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name'     => 'Senetria',
            'email'    => 'senetria@swabcredit.com',
            'password' => '$2y$10$D0RubfnLjXbG0vj.sw//o.9p.0IJI101Uin6UTFfsW30y8OeV519e',
            'is_admin' => '1',
        ]);
    }
}
