<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wods')->insert([
            'type' => 'RFT',
            'content' => '8 RDS for Time' . PHP_EOL . '50 DUs' . PHP_EOL . '5 Power Clusters @40kg',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now'),
            'published_at' => new DateTime('now'),
        ]);

        DB::table('wods')->insert([
            'type' => 'Couplet',
            'content' => '21-15-9' . PHP_EOL . 'HSPU' . PHP_EOL . 'T2B',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now'),
            'published_at' => new DateTime('now'),
        ]);

        DB::table('wods')->insert([
            'type' => 'RFT',
            'content' => 'Buy-In 50cal row' . PHP_EOL . '5 RDS of 12 GHDs' . PHP_EOL . '10 HSPU' . PHP_EOL . '8 Overhead SQ' . PHP_EOL . 'Cash-Out 50cal row',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now'),
            'published_at' => new DateTime('now'),
        ]);

        DB::table('wods')->insert([
            'type' => 'EMOM',
            'content' => 'EMOM 36mins' . PHP_EOL . 'Min 1: 30sec AAB' . PHP_EOL . 'Min 2: 30 DUs' . PHP_EOL . 'Min 3: 30sec row' . PHP_EOL . 'Min 4: 30sec Ski' . PHP_EOL . 'Min 5: 20 Hollow-Rocks' . PHP_EOL . 'Min 6: 10 Burpees',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now'),
            'published_at' => new DateTime('now'),
        ]);

        DB::table('wods')->insert([
            'type' => 'EMOM',
            'content' => 'EMOM 30min' . PHP_EOL . '45sec row' . PHP_EOL . '45sec burpees' . PHP_EOL . '45sec bike',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now'),
            'published_at' => new DateTime('now'),
        ]);

        DB::table('wods')->insert([
            'type' => 'RFT',
            'content' => '5 RFT' . PHP_EOL . '100x DUs' . PHP_EOL . '30 Burpee box jump overs @24"',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now'),
            'published_at' => new DateTime('now'),
        ]);

        DB::table('wods')->insert([
            'type' => 'Couplet',
            'content' => '30 DUs before each set' . PHP_EOL . '10-8-6-4-2 Cleans' . PHP_EOL . 'with increasing weight' . PHP_EOL . '(70-75-80-85-92.5kg)',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now'),
            'published_at' => new DateTime('now'),
        ]);

        DB::table('wods')->insert([
            'type' => 'Freestyle',
            'content' => 'Warm-Up to 1RM Power Clean' . PHP_EOL . 'Then go for 3 rounds' . PHP_EOL . '3x 3 Power Cleans + 3 FSQ @70%' . PHP_EOL . '3x 3 Power Cleans + 3 FSQ @73%' . PHP_EOL . '3x 3 Power Cleans + 3 FSQ @75%',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now'),
            'published_at' => new DateTime('now'),
        ]);

        DB::table('wods')->insert([
            'type' => 'Freestyle',
            'content' => 'Warm-Up to 1RM complex of' . PHP_EOL . 'Clean' . PHP_EOL . 'Hang Clean' . PHP_EOL . 'Front Squat',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now'),
            'published_at' => new DateTime('now'),
        ]);

        DB::table('wods')->insert([
            'type' => 'EMOM',
            'content' => 'EMOM every 2min' . PHP_EOL . '3x Front Squats at your 1RM',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now'),
            'published_at' => new DateTime('now'),
        ]);

        DB::table('wods')->insert([
            'type' => 'FUFU',
            'content' => '2 Rounds' . PHP_EOL . '30 DB HIP Thrusts' . PHP_EOL . '25 DB Deep Trains' . PHP_EOL . '30 DB Arnold Press' . PHP_EOL . '50 DB Russian Twists',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now'),
            'published_at' => new DateTime('now'),
        ]);

        DB::table('wods')->insert([
            'type' => 'Freestyle',
            'content' => 'Every 2min' . PHP_EOL . '5x3 Snatch Balance',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now'),
            'published_at' => new DateTime('now'),
        ]);

        DB::table('wods')->insert([
            'type' => 'EMOM',
            'content' => '10min EMOM' . PHP_EOL . '1 Snatch + 1 Overhead Squat @80-85 of 1RM',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now'),
            'published_at' => new DateTime('now'),
        ]);

        DB::table('wods')->insert([
            'type' => 'AMRAP',
            'content' => '12min AMRAP' . PHP_EOL . '12 cal row' . PHP_EOL . '10 GHD' . PHP_EOL . '8 Box jumps' . PHP_EOL . '6 HSPU',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now'),
            'published_at' => new DateTime('now'),
        ]);

        DB::table('wods')->insert([
            'type' => 'TABATA',
            'content' => '3 Rounds, 20" on - 10" off' . PHP_EOL . 'Russian Twists' . PHP_EOL . 'V-Ups' . PHP_EOL . 'Plank hold' . PHP_EOL . 'Air Squats',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now'),
            'published_at' => new DateTime('now'),
        ]);
    }
}
