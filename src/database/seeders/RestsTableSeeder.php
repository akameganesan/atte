<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $param = [
            'attendances_id' => 1,
            //'start_time' => 12.00,
            //'end_time' => 13.00,
            'start_time' => 120000,
            'end_time' => 130000
    
        ];
        DB::table('rests')->insert($param);

         $param = [
            'attendances_id' => 2,
            //'start_time' => 12.00,
            //'end_time' => 13.00
            'start_time' => 120000,
            'end_time' => 130000
        ];
        DB::table('rests')->insert($param);

         $param = [
            'attendances_id' => 3,
            //'start_time' => 12.00,
            //'end_time' => 13.00
            'start_time' => 120000,
            'end_time' => 130000
        ];
        DB::table('rests')->insert($param);

        $param = [
            'attendances_id' => 4,
            //'start_time' => 12.00,
            //'end_time' => 13.00,
            'start_time' => 120000,
            'end_time' => 130000,
        ];
        DB::table('rests')->insert($param);

         $param = [
            'attendances_id' => 5,
            //'start_time' => 12.00,
            //'end_time' => 13.00,
            'start_time' => 120000,
            'end_time' => 130000
        ];
        DB::table('rests')->insert($param);

         $param = [
            'attendances_id' => 1,
            //'start_time' => 15.30,
            //'end_time' => 15.40,
            'start_time' => 120000,
            'end_time' => 130000
        ];
        DB::table('rests')->insert($param);

                 $param = [
            'attendances_id' => 2,
            //'start_time' => 15.30,
            //'end_time' => 15.50
            'start_time' => 120000,
            'end_time' => 130000
        ];
        DB::table('rests')->insert($param);

        $param = [
            'attendances_id' => 3,
            //'start_time' => 15.40,
            //'end_time' => 16.00
            'start_time' => 120000,
            'end_time' => 130000
        ];
        DB::table('rests')->insert($param);

        $param = [
            'attendances_id' => 4,
            //'start_time' => 15.50,
            //'end_time' => 16.00
            'start_time' => 120000,
            'end_time' => 130000
        ];
        DB::table('rests')->insert($param);

        $param = [
            'attendances_id' => 5,
            //'start_time' => 15.50,
            //'end_time' => 16.30
            'start_time' => 120000,
            'end_time' => 130000
        ];
        DB::table('rests')->insert($param);
    }
}
