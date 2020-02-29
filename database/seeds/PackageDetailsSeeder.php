<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('package_details')->insert([
            'name' => 'Detail 1',
            'price' => '1000',
            'qty' => '2',
            'weight' => '1.92',
            'package_id' => '1',
        ]);

        DB::table('package_details')->insert([
            'name' => 'Detail 1',
            'price' => '1000',
            'qty' => '2',
            'weight' => '1.92',
            'package_id' => '1',
        ]);

        DB::table('package_details')->insert([
            'name' => 'Detail 2',
            'price' => '22000',
            'qty' => '51',
            'weight' => '3.922',
            'package_id' => '2',
        ]);

        DB::table('package_details')->insert([
            'name' => 'Detail 3',
            'price' => '4000',
            'qty' => '11',
            'weight' => '5.92',
            'package_id' => '3',
        ]);
    }
}
