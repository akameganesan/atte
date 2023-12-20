<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         $param = [
            'name' => '佐藤',
            'email' => 'test@yahoo.co.jp',
            'password' => '123456789'
        ];
        DB::table('users')->insert($param);

         $param = [
            'name' => '鈴木',
            'email' => 'test1@yahoo.co.jp',
            'password' => '1234567890'
        ];
        DB::table('users')->insert($param);

         $param = [
            'name' => '伊藤',
            'email' => 'test2@yahoo.co.jp',
            'password' => '12345678901'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '遠藤',
            'email' => 'test3@yahoo.co.jp',
            'password' => '123456789012'
        ];
        DB::table('users')->insert($param);

         $param = [
            'name' => '加藤',
            'email' => 'test4@yahoo.co.jp',
            'password' => '1234567890123'
        ];
        DB::table('users')->insert($param);
    }

}
