<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\attendances;
use App\Models\users;

class AttendanceController extends Controller
{
     
    
    public function login()
    {
        return view('login');
    }

    public function attendance()
    {
        return view('attendance');
    }

    public function register()
    {
        return view('register');
    }

    public function recode()
    {
        return view('recode');
    }

    public function thanks()
    {
        
        return view('thanks');
    }

    public function atten(Request $request) 
    //public function atten() 
    { 
        //現在時刻をミリ秒に変更（"2020-08-04 12:45:07.105"のような形式になる）
    //$now = Carbon::now()->format('Y-m-d H:i:s.v');
    
     //return redirect('/information');




        /*$post = new attendances();

        $post->users_id = $reques->users_id;

        $now = Carbon::now()->format('Y-m-d');
        
        $post->day = $request->$now;

        $now = Carbon::now()->format('H:i:s.v');

        $post->start_time = $request->$now;
        $post->end_time = $request->now;;
        $post->save();*/

       

        //return view('thanks');


        //$post = new attendances();
        //$post->users_id = $reques->users_id;
        //$post->users_id = $reques->users_id;

        //$now = Carbon::now()->format('Y-m-d');
        
        //$post->day = $request->$now;

        //$now = Carbon::now()->format('H:i:s.v');

        //$post->start_time = $request->$now;
        //$post->end_time = $request->now;;
        //$post->save();

        //return redirect('/information');

        $contact = $request->only(['user_id', 'start_time', 'end_time']);
        attendances::create($contact);




        return view('thanks');

     }

     Public function atten_1(Request $request) {


     }


     public function nation()
  {
    //$authors = attendances::simplePaginate(4);
    $authors = attendances::Paginate(4);
    return view('recode', ['authors' => $authors]);
  }
     
  public function work_time()
  {
    
    //return view('recode', ['authors' => $authors]);


    $attendance = attendances::all();
    $user = users::all();


    //$attendance = attendances::where('users_id', $usersId)->get();
    //$user = users::all();





    //$a = $attendance->start_time;

    //$user = attendances::table('users')->find($id);


    //$start_time = attendances::where('start_time',1)->first();
   // $start_time_1 = attendances::where('start_time',1)->first();
    //$start_time_2 = attendances::where('end_time',1)->first();
    //$a = $start_time_2 - $start_time_1;

    //$users_id = attendances::where('users_id',1)->first();
    //$user_id = attendances::where('user_id',1)->first();
    //$user_id = attendances::where('user_id',1)->first();

    
    




    
    //$attendance_time = attendances::where('id', $times['id'])->first();
    //$work_tiime = $item['end_time'] - $item['start_time'];
   // $work_tiime_1 = attendances::where('end_time', $times1['end_time'])->first();
    //$work_tiime_2 = attendances::where('start_time', $times2['start_time'])->first();

    //$work_tiime_1 = attendances::where('end_time');
    //$work_tiime_2 = attendances::where('start_time');
    //$a = $work_time_1 - $work_time_2;

    

    
    
    
    return view('recode',['attendance' => $attendance],['user' => $user]);
    //return view('recode',['attendance' => $attendance],['user' => $user],['a' => $a]);
    //return view('recode',['users_id' => $users_id],['start_time_1' => $start_time_1],['start_time_2' => $start_time_2],['a' => $a]);
    
  }




}