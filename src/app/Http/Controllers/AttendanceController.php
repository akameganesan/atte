<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\attendances;
use App\Models\users;
use App\Models\User;
use Carbon\Carbon;
use App\Models\rests;
use DateTime;
use DateInterval;
use DatePeriod;


class AttendanceController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function index2()
    {
        /*attendance::create([  
        "users_id" => $request->user_id,
        "day" => $request->day,
        "start_time" => $request->start_time,
        "end_time" => $request->end_time,
        ]);*/
        
        
        $user = Auth::user();

        $c = 5;
        
        
        
        //$user = Auth::user();

        ///$use = $user->id;





        /*$oldTimestamp = Timestamp::where('user_id', $user->id)->latest()->first();*/
        
        //$newTimestampDay = Carbon::today();
         $timestamp = attendances::create([
        'users_id' => $user->id,//Auth::id(),
        //'today' => Carbon::today(),
        'day' => Carbon::today(),
        'start_time' => Carbon::now(),
        //'end_time' => Carbon::now(),
        'end_time' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()

        ]);
        
        return view('index2')->with('c', $c);;
    }

     public function indexstart(Request $request){
            //   public function index1(){
        
        //$work = attencances::all();
        //return view('index', compact('work'));



        

        if ($request->has('button1')) {
            $a = 1;

           // return view('index3')->with('a', $a);
            return view('indexend')->with('a', $a);


      //$message = 'ボタン1が押されました';
    } elseif ($request->has('button2')) {
        $a = 2;
        // return view('index3')->with('a', $a);
            //return view('indexstart')->with('a', $a);
            return view('index');

    

    } else {
        return view('indexend');
      //$message = 'ボタンは押されませんでした';
    }

    }

     public function indexend(Request $request){      
       
            if ($request->has('button2')) {

            $user = Auth::user();
            //$val = attendances::with('attendances')->latest()->first();
            //$bil = $val->id;
   
         $timestamp = attendances::create([
        'users_id' => $user->id,//Auth::id(),
        //'today' => Carbon::today(),
        'day' => Carbon::today(),
        //'start_time' => Carbon::now(),
        'start_time' => null,
        'end_time' => Carbon::now(),
        //'end_time' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()

        ]);
        return view('index');
           }         
        elseif ($request->has('button3')) {
            
            $a = 1;
            $c = 5;

            //$user = Auth::user();
            //$attendances = attendances::all();

            //$val = rests::with('attendances')->where('id', $id)->first();

            //$val = rests::with('attendances')->where('id')->first();
            //$val = rests::with('attendances')->first();
            //$val = rests::with('attendances')->latest()->first();
            $val = attendances::with('attendances')->latest()->first();
            $bil = $val->id;
            
            
            
            
            //$this->validate($request, rests::$rules);
            //$form = $request->all();
            //$id = $form->id;
            $kari = 1;


   
         $timestamp = rests::create([
        //'attendanses_id' => $user->id,//Auth::id(),
        //'attendanses_id' => $attendances->id,//Auth::id(),
        //'attendanses_id' => $val,//Auth::id(),

        //'attendanses_id' => $id,//Auth::id(),
        //'attendances_id' => $kari,//Auth::id(),
        //'attendances_id' => $kari,//Auth::id(),
        'attendances_id' => $bil,//Auth::id(),

        
        //'attendanses_id' => $form->id,//Auth::id(),
        //'today' => Carbon::today(),
        //'day' => Carbon::today(),
        'start_time' => Carbon::now(),
        //'start_time' => null,
        //'end_time' => Carbon::now(),
        'end_time' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()

        ]);

           // return view('index3')->with('a', $a);
            return view('indexend')->with('a', $a)->with('c', $c)->with('bil', $bil)->with('val', $val);


      //$message = 'ボタン1が押されました';
        } elseif ($request->has('button4')) {
        $a = 2;
        $c = 1;

            //$user = Auth::user();
            //$attendances = attendances::all();

            //$val = rests::with('attendances')->where('id', $id)->first();

            //$val = rests::with('attendances')->where('id')->first();
            //$val = rests::with('attendances')->first();
            //$val = rests::with('attendances')->latest()->first();
            $val = attendances::with('attendances')->latest()->first();
            $bil = $val->id;
            
            
            
            
            //$this->validate($request, rests::$rules);
            //$form = $request->all();
            //$id = $form->id;
            $kari = 1;



   
         $timestamp = rests::create([
        //'attendanses_id' => $user->id,//Auth::id(),
        //'attendanses_id' => $attendances->id,//Auth::id(),
        //'attendanses_id' => $val,//Auth::id(),

        //'attendanses_id' => $id,//Auth::id(),
        //'attendances_id' => $kari,//Auth::id(),
        //'attendances_id' => $kari,//Auth::id(),
        'attendances_id' => $bil,//Auth::id(),

        
        //'attendanses_id' => $form->id,//Auth::id(),
        //'today' => Carbon::today(),
        //'day' => Carbon::today(),
        //'start_time' => Carbon::now(),
        'start_time' => null,
        'end_time' => Carbon::now(),
        //'end_time' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()

        ]);

           // return view('index3')->with('a', $a);
            
             return view('indexend')->with('a', $a)->with('c', $c)->with('bil', $bil)->with('val', $val);
      //$message = 'ボタンは押されませんでした';
        }
    }

        
    
    
    
        




     public function indexend2(Request $request){
     //   public function index1(){
        
        //$work = attencances::all();
        //return view('index', compact('work'));

        
        if ($request->has('button2')) {
            return view('index2');
        }
        elseif ($request->has('button3')) {
            $a = 1;
            //return view('index','a');
            //return view('index');
            //return view('index3',['a', $a]);
            return view('indexend')->with('a', $a);


      //$message = 'ボタン1が押されました';
    } elseif ($request->has('button4')) {
        $a = 2;
        return view('indexend',['a', $a]);
        //return view('index');
      //$message = 'ボタン2が押されました';
      }
      elseif ($request->has('button3')) {
        $a = 3;
       // return view('index','a');
       // return view('index');
        return view('index3',['a', $a]);
      //$message = 'ボタン2が押されました';
      }
      elseif ($request->has('button4')) {
        $a = 4;
        //return view('index');
       // return view('index','a');
        return view('index3',['a', $a]);
      //$message = 'ボタン2が押されました';
      }
      elseif ($request->has('button5')) {
        $a = 5;
        //return view('index','a');
        //return view('index');
        return view('index3',['a', $a]);
      //$message = 'ボタン2が押されました';
      }
      elseif ($request->has('button6')) {
        $a = 6;
        //return view('index','a');
        //return view('index');
        return view('index3',['a', $a]);
      //$message = 'ボタン2が押されました';
      }
      elseif ($request->has('button7')) {
        $a = 7;
        //return view('index','a');
        //return view('index');
        return view('index3',['a', $a]);
      //$message = 'ボタン2が押されました';
      }
    else {
        return view('index3');
      //$message = 'ボタンは押されませんでした';
    }
 
    
    
    
    
    
    
    //return $message;
    //return view('index', 'message');
    //return view('auth.index');
    return view('index');





    }

     
     
    
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

    public function recode(Request $request)
    {
        //$val = attendances::with('attendances')->get();
            
            //$workday = $request;
            //$workday = Carbon::today();



            //$request = 2023-12-27 00:00:00;
            //$date = new DateTime('1999-11-02 05:27:42');
            $date = new DateTime('2023-12-27 00:00:00');

            //$items = attendances::where('day', 'workday')->get();
            //$item = Attendances::where('day', $request->input)->first();
            //$item = Attendances::where('day', $date)->first();

            //return view('recode',compact('val'));
            //return view('thanks');


             //$attendances = attendances::all();
             //$attendances = attendances::simplePaginate(5);
             $attendances = attendances::Paginate(5);

             //$workday = attendances::where('day', $date)->first();
             $workday = attendances::where('day', $date)->get();




            //return view('recode',['attendances'=> $attendances]);
            return view('recode',compact('attendances','workday'));
    
    }

    public function thanks()
    {
        //$authors = attendances::simplePaginate(5);
        //return view('thanks',['authors' => $authors]);
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
  

    public function punchIn()
    {
        $user = Auth::users();

        /**
         * 打刻は1日一回までにしたい 
         * DB
         */
        $oldTimestamp = Timestamp::where('user_id', $user->id)->latest()->first();
        if ($oldTimestamp) {
            $oldTimestampPunchIn = new Carbon($oldTimestamp->punchIn);
            $oldTimestampDay = $oldTimestampPunchIn->startOfDay();
        }

        $newTimestampDay = Carbon::today();

        /**
         * 日付を比較する。同日付の出勤打刻で、かつ直前のTimestampの退勤打刻がされていない場合エラーを吐き出す。
         */
        if (($oldTimestampDay == $newTimestampDay) && (empty($oldTimestamp->punchOut))){
            return redirect()->back()->with('error', 'すでに出勤打刻がされています');
        }

        $timestamp = Timestamp::create([
            'user_id' => $user->id,
            'punchIn' => Carbon::now(),
        ]);

        return redirect()->back()->with('my_status', '出勤打刻が完了しました');
    }

    public function punchOut()
    {
        $user = Auth::user();
        $timestamp = Timestamp::where('user_id', $user->id)->latest()->first();

        if( !empty($timestamp->punchOut)) {
            return redirect()->back()->with('error', '既に退勤の打刻がされているか、出勤打刻されていません');
        }
        $timestamp->update([
            'punchOut' => Carbon::now()
        ]);

        return redirect()->back()->with('my_status', '退勤打刻が完了しました');
    }


}