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
            'type' => 'Chipper',
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
    }
}
