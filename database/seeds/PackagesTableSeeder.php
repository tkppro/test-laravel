<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            'name' => 'Package 1',
            'package_id' => '1',
            'tracking_number' => '1',
        ]);

        DB::table('packages')->insert([
            'name' => 'Package 2',
            'package_id' => '2',
            'tracking_number' => '2',
        ]);
        
        DB::table('packages')->insert([
            'name' => 'Package 3',
            'package_id' => '3',
            'tracking_number' => '3',
        ]);

        DB::table('packages')->insert([
            'name' => 'Another pack',
            'package_id' => '4',
            'tracking_number' => '4',
        ]);
    }
}
