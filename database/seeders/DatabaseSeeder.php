<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
            'password' => Hash::make('password'),
            'is_admin' => '1',
        ]);

        $this->call([
            ServicesSeeder::class,
        ]);

        if (env('APP_ENV') == 'local') {
            User::factory()->count(25)->create();
        }
        
    }
}
