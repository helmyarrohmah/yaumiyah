<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\User::create([
            'name'      =>  'Helmy Hidayat',
            'email'     =>  'helmyhidayat@arrohmah.co.id',
            'password'  =>  Hash::make('password'),
        ]);

        // \App\Models\Hafalan::factory(2000)->create();
    }
}
