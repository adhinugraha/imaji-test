<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\UserData;
use App\Models\UserScore;
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
        UserData::create([
            'id' => 1002,
            'name' => 'AAAA',
            'phone' => '1111',
        ]);

        UserData::create([
            'id' => 1003,
            'name' => 'BBBB',
            'phone' => '2222',
        ]);

        UserData::create([
            'id' => 1005,
            'name' => 'CCCC',
            'phone' => '3333',
        ]);

        UserData::create([
            'id' => 1006,
            'name' => 'DDDD',
            'phone' => '4444',
        ]);

        UserData::create([
            'id' => 1008,
            'name' => 'EEEE',
            'phone' => '5555',
        ]);

        UserScore::create([
            'id' => 1002,
            'score' => 1000,
        ]);

        UserScore::create([
            'id' => 1003,
            'score' => 4660,
        ]);

        UserScore::create([
            'id' => 1005,
            'score' => 4500,
        ]);

        UserScore::create([
            'id' => 1006,
            'score' => 8770,
        ]);

        UserScore::create([
            'id' => 1008,
            'score' => 8750,
        ]);
    }
}
