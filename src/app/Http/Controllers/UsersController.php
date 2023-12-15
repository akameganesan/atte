<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    //

    public function login()
    {
        //$item = Item::get();
        $item = users::all();
        return view('login');
    }

    public function create(Request $request) 
    { 
        return view('register');
     }

         public function mirudake() 
    { 
        return view('thanks');
     }



    public function register(UserRequest $request) 
    { 

        $post = new users();
        $post->name = $request->name;
        $post->email = $request->email;
        $post->password = $request->password;
        $post->password = $request->password2;

        //if($request->password == $request->password2){           
            if($request->password == $request->password2){ 
            $post->save();
            return view('thanks');
        }
        else{

            return view('register');
        }
        //$post->password = $request->password;
        //$post->save();

        //return redirect('/information');

        //return view('thanks');

     }



        public function data()
    {
        //$item = Item::get();
        $item = users::all();
        return view('thanks', compact('item'));


    }

        public function thanks()
    {   
        $param = [
            'name' => '佐藤',
            'email' => 'test@yahoo.co.jp',
            'password' => '123456789'
        ];
        DB::table('users')->insert($param);
        return view('thanks');
    }

    // public function register()
    //{
        //return view('register');
    //}


}
