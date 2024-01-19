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

        $param = [
            'users_id' => 1,
            'day' => 20231209,
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
            'day' => 20231209,
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
            'day' => 20231209,
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
            'day' => 20231209,
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
            'day' => 20231209,
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

        $param = [
            'users_id' => 1,
            'day' => 20231210,
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
            'day' => 20231210,
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
            'day' => 20231210,
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
            'day' => 20231210,
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
            'day' => 20231210,
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

        $param = [
            'users_id' => 1,
            'day' => 20231211,
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
            'day' => 20231211,
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
            'day' => 20231211,
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
            'day' => 20231211,
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
            'day' => 20231211,
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

        $param = [
            'users_id' => 1,
            'day' => 20231212,
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
            'day' => 20231212,
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
            'day' => 20231212,
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
            'day' => 20231212,
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
            'day' => 20231212,
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

        $param = [
            'users_id' => 1,
            'day' => 20231212,
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
            'day' => 20231213,
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
            'day' => 20231213,
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
            'day' => 20231213,
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
            'day' => 20231213,
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

        $param = [
            'users_id' => 1,
            'day' => 20231214,
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
            'day' => 20231214,
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
            'day' => 20231214,
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
            'day' => 20231214,
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
            'day' => 20231214,
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

        $param = [
            'users_id' => 1,
            'day' => 20231215,
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
            'day' => 20231215,
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
            'day' => 20231215,
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
            'day' => 20231215,
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
            'day' => 20231215,
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

        $param = [
            'users_id' => 8,
            'day' => 20231216,
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
        $param = [
            'users_id' => 9,
            'day' => 20231216,
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


        $param = [
            'users_id' => 1,
            'day' => 20231217,
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
        $param = [
            'users_id' => 2,
            'day' => 20231217,
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

        $param = [
            'users_id' => 3,
            'day' => 20231217,
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
        $param = [
            'users_id' => 4,
            'day' => 20231217,
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
        $param = [
            'users_id' => 5,
            'day' => 20231217,
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

        $param = [
            'users_id' => 8,
            'day' => 20231217,
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

        $param = [
            'users_id' => 9,
            'day' => 20231217,
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

        $param = [
            'users_id' => 10,
            'day' => 20231217,
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

        $param = [
            'users_id' => 11,
            'day' => 20231217,
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

        $param = [
            'users_id' => 12,
            'day' => 20231217,
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

        $param = [
            'users_id' => 13,
            'day' => 20231217,
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

        $param = [
            'users_id' => 14,
            'day' => 20231217,
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

        $param = [
            'users_id' => 15,
            'day' => 20231217,
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

        $param = [
            'users_id' => 16,
            'day' => 20231217,
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

        $param = [
            'users_id' => 17,
            'day' => 20231217,
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

        $param = [
            'users_id' => 18,
            'day' => 20231217,
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

        $param = [
            'users_id' => 19,
            'day' => 20231217,
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

        $param = [
            'users_id' => 20,
            'day' => 20231217,
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

        $param = [
            'users_id' => 21,
            'day' => 20231217,
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

        $param = [
            'users_id' => 22,
            'day' => 20231217,
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

        $param = [
            'users_id' => 23,
            'day' => 20231217,
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

        $param = [
            'users_id' => 24,
            'day' => 20231217,
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

        $param = [
            'users_id' => 25,
            'day' => 20231217,
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

        $param = [
            'users_id' => 26,
            'day' => 20231217,
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

        $param = [
            'users_id' => 27,
            'day' => 20231217,
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

        $param = [
            'users_id' => 28,
            'day' => 20231217,
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

        $param = [
            'users_id' => 29,
            'day' => 20231217,
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

        $param = [
            'users_id' => 30,
            'day' => 20231217,
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

        $param = [
            'users_id' => 31,
            'day' => 20231217,
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

        $param = [
            'users_id' => 32,
            'day' => 20231217,
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

        $param = [
            'users_id' => 33,
            'day' => 20231217,
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

        $param = [
            'users_id' => 34,
            'day' => 20231217,
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

        $param = [
            'users_id' => 35,
            'day' => 20231217,
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

        $param = [
            'users_id' => 36,
            'day' => 20231217,
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

        $param = [
            'users_id' => 37,
            'day' => 20231217,
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

        $param = [
            'users_id' => 38,
            'day' => 20231217,
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

        $param = [
            'users_id' => 39,
            'day' => 20231217,
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

        $param = [
            'users_id' => 40,
            'day' => 20231217,
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

        $param = [
            'users_id' => 41,
            'day' => 20231217,
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

        $param = [
            'users_id' => 42,
            'day' => 20231217,
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

        $param = [
            'users_id' => 43,
            'day' => 20231217,
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

        $param = [
            'users_id' => 44,
            'day' => 20231217,
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

        $param = [
            'users_id' => 45,
            'day' => 20231217,
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

        $param = [
            'users_id' => 46,
            'day' => 20231217,
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

        $param = [
            'users_id' => 47,
            'day' => 20231217,
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

        $param = [
            'users_id' => 48,
            'day' => 20231217,
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

        $param = [
            'users_id' => 49,
            'day' => 20231217,
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

        $param = [
            'users_id' => 50,
            'day' => 20231217,
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

        $param = [
            'users_id' => 51,
            'day' => 20231217,
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

        $param = [
            'users_id' => 52,
            'day' => 20231217,
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

        $param = [
            'users_id' => 53,
            'day' => 20231217,
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

        $param = [
            'users_id' => 54,
            'day' => 20231217,
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

        $param = [
            'users_id' => 55,
            'day' => 20231217,
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

        $param = [
            'users_id' => 56,
            'day' => 20231217,
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

        $param = [
            'users_id' => 57,
            'day' => 20231217,
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

        $param = [
            'users_id' => 58,
            'day' => 20231217,
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

        $param = [
            'users_id' => 59,
            'day' => 20231217,
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

        $param = [
            'users_id' => 60,
            'day' => 20231217,
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

        $param = [
            'users_id' => 61,
            'day' => 20231217,
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

        $param = [
            'users_id' => 62,
            'day' => 20231217,
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

        $param = [
            'users_id' => 63,
            'day' => 20231217,
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

        $param = [
            'users_id' => 1,
            'day' => 20231218,
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
        $param = [
            'users_id' => 2,
            'day' => 20231218,
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

        $param = [
            'users_id' => 3,
            'day' => 20231218,
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
        $param = [
            'users_id' => 4,
            'day' => 20231218,
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
        $param = [
            'users_id' => 5,
            'day' => 20231218,
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

        $param = [
            'users_id' => 8,
            'day' => 20231218,
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

        $param = [
            'users_id' => 9,
            'day' => 20231218,
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

        $param = [
            'users_id' => 10,
            'day' => 20231218,
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

        $param = [
            'users_id' => 11,
            'day' => 20231218,
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

        $param = [
            'users_id' => 12,
            'day' => 20231218,
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

        $param = [
            'users_id' => 13,
            'day' => 20231218,
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

        $param = [
            'users_id' => 14,
            'day' => 20231218,
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

        $param = [
            'users_id' => 15,
            'day' => 20231218,
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

        $param = [
            'users_id' => 16,
            'day' => 20231218,
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

        $param = [
            'users_id' => 17,
            'day' => 20231218,
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

        $param = [
            'users_id' => 18,
            'day' => 20231218,
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

        $param = [
            'users_id' => 19,
            'day' => 20231218,
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

        $param = [
            'users_id' => 20,
            'day' => 20231218,
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

        $param = [
            'users_id' => 21,
            'day' => 20231218,
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

        $param = [
            'users_id' => 22,
            'day' => 20231218,
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

        $param = [
            'users_id' => 23,
            'day' => 20231218,
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

        $param = [
            'users_id' => 24,
            'day' => 20231218,
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

        $param = [
            'users_id' => 25,
            'day' => 20231218,
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

        $param = [
            'users_id' => 26,
            'day' => 20231218,
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

        $param = [
            'users_id' => 27,
            'day' => 20231218,
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

        $param = [
            'users_id' => 28,
            'day' => 20231218,
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

        $param = [
            'users_id' => 29,
            'day' => 20231218,
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

        $param = [
            'users_id' => 30,
            'day' => 20231218,
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

        $param = [
            'users_id' => 31,
            'day' => 20231218,
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

        $param = [
            'users_id' => 32,
            'day' => 20231218,
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

        $param = [
            'users_id' => 33,
            'day' => 20231218,
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

        $param = [
            'users_id' => 34,
            'day' => 20231218,
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

        $param = [
            'users_id' => 35,
            'day' => 20231218,
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

        $param = [
            'users_id' => 36,
            'day' => 20231218,
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

        $param = [
            'users_id' => 37,
            'day' => 20231218,
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

        $param = [
            'users_id' => 38,
            'day' => 20231218,
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

        $param = [
            'users_id' => 39,
            'day' => 20231218,
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

        $param = [
            'users_id' => 40,
            'day' => 20231218,
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

        $param = [
            'users_id' => 41,
            'day' => 20231218,
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

        $param = [
            'users_id' => 42,
            'day' => 20231218,
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

        $param = [
            'users_id' => 43,
            'day' => 20231218,
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

        $param = [
            'users_id' => 44,
            'day' => 20231218,
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

        $param = [
            'users_id' => 45,
            'day' => 20231218,
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

        $param = [
            'users_id' => 46,
            'day' => 20231218,
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

        $param = [
            'users_id' => 47,
            'day' => 20231218,
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

        $param = [
            'users_id' => 48,
            'day' => 20231218,
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

        $param = [
            'users_id' => 49,
            'day' => 20231218,
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

        $param = [
            'users_id' => 50,
            'day' => 20231218,
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

        $param = [
            'users_id' => 51,
            'day' => 20231218,
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

        $param = [
            'users_id' => 52,
            'day' => 20231218,
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

        $param = [
            'users_id' => 53,
            'day' => 20231218,
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

        $param = [
            'users_id' => 54,
            'day' => 20231218,
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

        $param = [
            'users_id' => 55,
            'day' => 20231218,
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

        $param = [
            'users_id' => 56,
            'day' => 20231218,
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

        $param = [
            'users_id' => 57,
            'day' => 20231218,
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

        $param = [
            'users_id' => 58,
            'day' => 20231218,
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

        $param = [
            'users_id' => 59,
            'day' => 20231218,
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

        $param = [
            'users_id' => 60,
            'day' => 20231218,
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

        $param = [
            'users_id' => 61,
            'day' => 20231218,
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

        $param = [
            'users_id' => 62,
            'day' => 20231218,
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

        $param = [
            'users_id' => 63,
            'day' => 20231218,
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

        $param = [
            'users_id' => 1,
            'day' => 20231219,
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
        $param = [
            'users_id' => 2,
            'day' => 20231219,
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

        $param = [
            'users_id' => 3,
            'day' => 20231219,
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
        $param = [
            'users_id' => 4,
            'day' => 20231219,
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
        $param = [
            'users_id' => 5,
            'day' => 20231219,
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

        $param = [
            'users_id' => 8,
            'day' => 20231219,
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

        $param = [
            'users_id' => 9,
            'day' => 20231219,
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

        $param = [
            'users_id' => 10,
            'day' => 20231219,
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

        $param = [
            'users_id' => 11,
            'day' => 20231219,
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

        $param = [
            'users_id' => 12,
            'day' => 20231219,
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

        $param = [
            'users_id' => 13,
            'day' => 20231219,
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

        $param = [
            'users_id' => 14,
            'day' => 20231219,
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

        $param = [
            'users_id' => 15,
            'day' => 20231219,
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

        $param = [
            'users_id' => 16,
            'day' => 20231219,
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

        $param = [
            'users_id' => 17,
            'day' => 20231219,
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

        $param = [
            'users_id' => 18,
            'day' => 20231219,
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

        $param = [
            'users_id' => 19,
            'day' => 20231219,
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

        $param = [
            'users_id' => 20,
            'day' => 20231219,
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

        $param = [
            'users_id' => 21,
            'day' => 20231219,
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

        $param = [
            'users_id' => 22,
            'day' => 20231219,
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

        $param = [
            'users_id' => 23,
            'day' => 20231219,
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

        $param = [
            'users_id' => 24,
            'day' => 20231219,
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

        $param = [
            'users_id' => 25,
            'day' => 20231219,
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

        $param = [
            'users_id' => 26,
            'day' => 20231219,
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

        $param = [
            'users_id' => 27,
            'day' => 20231219,
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

        $param = [
            'users_id' => 28,
            'day' => 20231219,
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

        $param = [
            'users_id' => 29,
            'day' => 20231219,
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

        $param = [
            'users_id' => 30,
            'day' => 20231219,
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

        $param = [
            'users_id' => 31,
            'day' => 20231219,
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

        $param = [
            'users_id' => 32,
            'day' => 20231219,
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

        $param = [
            'users_id' => 33,
            'day' => 20231219,
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

        $param = [
            'users_id' => 34,
            'day' => 20231219,
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

        $param = [
            'users_id' => 35,
            'day' => 20231219,
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

        $param = [
            'users_id' => 36,
            'day' => 20231219,
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

        $param = [
            'users_id' => 37,
            'day' => 20231219,
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

        $param = [
            'users_id' => 38,
            'day' => 20231219,
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

        $param = [
            'users_id' => 39,
            'day' => 20231219,
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

        $param = [
            'users_id' => 40,
            'day' => 20231219,
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

        $param = [
            'users_id' => 41,
            'day' => 20231219,
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

        $param = [
            'users_id' => 42,
            'day' => 20231219,
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

        $param = [
            'users_id' => 43,
            'day' => 20231219,
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

        $param = [
            'users_id' => 44,
            'day' => 20231219,
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

        $param = [
            'users_id' => 45,
            'day' => 20231219,
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

        $param = [
            'users_id' => 46,
            'day' => 20231219,
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

        $param = [
            'users_id' => 47,
            'day' => 20231219,
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

        $param = [
            'users_id' => 48,
            'day' => 20231219,
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

        $param = [
            'users_id' => 49,
            'day' => 20231219,
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

        $param = [
            'users_id' => 50,
            'day' => 20231219,
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

        $param = [
            'users_id' => 51,
            'day' => 20231219,
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

        $param = [
            'users_id' => 52,
            'day' => 20231219,
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

        $param = [
            'users_id' => 53,
            'day' => 20231219,
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

        $param = [
            'users_id' => 54,
            'day' => 20231219,
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

        $param = [
            'users_id' => 55,
            'day' => 20231219,
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

        $param = [
            'users_id' => 56,
            'day' => 20231219,
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

        $param = [
            'users_id' => 57,
            'day' => 20231219,
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

        $param = [
            'users_id' => 58,
            'day' => 20231219,
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

        $param = [
            'users_id' => 59,
            'day' => 20231219,
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

        $param = [
            'users_id' => 60,
            'day' => 20231219,
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

        $param = [
            'users_id' => 61,
            'day' => 20231219,
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

        $param = [
            'users_id' => 62,
            'day' => 20231219,
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

        $param = [
            'users_id' => 63,
            'day' => 20231219,
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
