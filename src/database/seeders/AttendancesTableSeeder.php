<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendancesTableSeeder extends Seeder
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
            'users_id' => 1,
            'day' => 20231208,
            //'start_time' => 8.00,
             //'end_time' => 18.00
            //'start_time' => 28800,
            //'end_time' => 64800
            'start_time' => 80000,
            'end_time' => 180000

        ];
        DB::table('attendances')->insert($param);

         $param = [
            'users_id' => 2,
            'day' => 20231208,
            //'start_time' => 9.00,
            //'end_time' => 19.00
            //'start_time' => 28800,
            //'end_time' => 64800
            //'start_time' => 80000,
            //'end_time' => 180000
            'start_time' => 90000,
            'end_time' => 190000
        ];
        DB::table('attendances')->insert($param);

         $param = [
            'users_id' => 3,
            'day' => 20231208,
            //'start_time' => 8.30,
            //'end_time' => 17.00
            //'start_time' => 28800,
            //'end_time' => 64800
            //'start_time' => 80000,
            //'end_time' => 180000
            'start_time' => 83000,
            'end_time' => 170000
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'users_id' => 4,
            'day' => 20231208,
            //'start_time' => 8.40,
            //'end_time' => 17.30
            //'start_time' => 28800,
            //'end_time' => 64800
            //'start_time' => 80000,
            //'end_time' => 180000
            'start_time' => 84000,
            'end_time' => 173000
        ];
        DB::table('attendances')->insert($param);

         $param = [
            'users_id' => 5,
            'day' => 20231208,
            //'start_time' => 8.30,
            //'end_time' => 18.20
            //'start_time' => 28800,
            //'end_time' => 64800
            //'start_time' => 80000,
            //'end_time' => 180000
            'start_time' => 83000,
            'end_time' => 182000
        ];
        DB::table('attendances')->insert($param);
    }
}
