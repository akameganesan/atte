<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\CursorPaginator;




use Illuminate\Http\Request;
use App\Models\attendances;
use App\Models\User;
use Carbon\Carbon;
use App\Models\rests;
use DateTime;
use DateInterval;
use DatePeriod;
use Illuminate\Support\Facades\DB;


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
      'users_id' => $user->id, //Auth::id(),
      //'today' => Carbon::today(),
      'day' => Carbon::today(),
      'start_time' => Carbon::now(),
      //'end_time' => Carbon::now(),
      'end_time' => null,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()

    ]);

    return view('index2')->with('c', $c);
    ;
  }

  public function indexstart(Request $request)
  {
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

  public function indexend(Request $request)
  {

    if ($request->has('button2')) {

      $user = Auth::user();
      //$val = attendances::with('attendances')->latest()->first();
      //$bil = $val->id;

      $timestamp = attendances::create([
        'users_id' => $user->id, //Auth::id(),
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
    } elseif ($request->has('button3')) {

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
        'attendances_id' => $bil, //Auth::id(),


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
        'attendances_id' => $bil, //Auth::id(),


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










  public function indexend2(Request $request)
  {
    //   public function index1(){

    //$work = attencances::all();
    //return view('index', compact('work'));


    if ($request->has('button2')) {
      return view('index2');
    } elseif ($request->has('button3')) {
      $a = 1;
      //return view('index','a');
      //return view('index');
      //return view('index3',['a', $a]);
      return view('indexend')->with('a', $a);


      //$message = 'ボタン1が押されました';
    } elseif ($request->has('button4')) {
      $a = 2;
      return view('indexend', ['a', $a]);
      //return view('index');
      //$message = 'ボタン2が押されました';
    } elseif ($request->has('button3')) {
      $a = 3;
      // return view('index','a');
      // return view('index');
      return view('index3', ['a', $a]);
      //$message = 'ボタン2が押されました';
    } elseif ($request->has('button4')) {
      $a = 4;
      //return view('index');
      // return view('index','a');
      return view('index3', ['a', $a]);
      //$message = 'ボタン2が押されました';
    } elseif ($request->has('button5')) {
      $a = 5;
      //return view('index','a');
      //return view('index');
      return view('index3', ['a', $a]);
      //$message = 'ボタン2が押されました';
    } elseif ($request->has('button6')) {
      $a = 6;
      //return view('index','a');
      //return view('index');
      return view('index3', ['a', $a]);
      //$message = 'ボタン2が押されました';
    } elseif ($request->has('button7')) {
      $a = 7;
      //return view('index','a');
      //return view('index');
      return view('index3', ['a', $a]);
      //$message = 'ボタン2が押されました';
    } else {
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

  public function recode1(Request $request)
  {




    $dt = 1;

    $page1 = $request->page;
    $output1 = $request->day1;
    $output2 = $request->day2;
    $output3 = $request->day3;


    $v2g = $output3;
    $c = strtotime($output3);
    $dc = new Carbon($c);
    $dt = $dc->toDateString();
    $vvv3_1 = date('Y年m月d日', strtotime($dt . '+1 day')); //2019年7月20日

    $v2ag = "一番上のifのelseに入った";



    $v2g = $vvv3_1;

    $dt = $vvv3_1;


    ///////////////////////////////////////////////////////////////////////


    $jikken = 22;



    $v1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2_7 = $v1_7->first();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $vl2_7 = $vl1_7->latest();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2ab = $vl1_7->count();

    //$stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')->get();
    $stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $sstocks = $stocks->get();
    $v2 = $sstocks->first();





    $v1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2_7 = $v1_7->first();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $vl2_7 = $vl1_7->latest();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2ab = $vl1_7->count();

    //$stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')->get();
    $stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt)->first();
    //$sstocks_first = $stocks->first();
    $v2 = $stocks;



    //$old3 = \old($output3);
    if ($request->has('day3')) {
      //$old3 = \old($request->day3);
      $old3 = 44444444444;
    } else {
      $old3 = 33333333333;

    }



    $first = new Carbon('2023-12-09 12:00:00');
    $second = new Carbon('2023-12-09 13:00:00');



    //$dd = 1;



    $query = DB::table('attendances');
    $query->select('attendances.id', 'users.id', 'users.name', 'day', 'start_time', 'end_time');
    $query->join('users', 'attendances.users_id', 'users.id');
    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
    $query->where('day', '=', $dt);
    //$rr = $query->get();
    $result = $query->get();


    $query = DB::table('users');
    $query->select('attendances.id', 'users.id', 'users.name', 'day', 'start_time', 'end_time');
    $query->join('attendances', 'users.id', 'attendances.users_id');
    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
    $query->where('day', '=', $dt);
    //$rr = $query->get();
    $result = $query->get();




    $query = DB::table('rests');
    $query->select('rests.attendances_id', 'attendances.id', 'rests.start_time_b', 'rests.end_time_b', 'attendances.day');
    $query->join('attendances', 'rests.attendances_id', 'attendances.id');
    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
    //$query->where('attendances_id', '=', '95');
    $query->where('day', '=', $dt);
    //$rr = $query->get();
    //$rrresult = $query->get();
    //$rrresult = $query->get();
    $rresult = $query->get();

    $rrresult = $result->union($rresult);



    //$resul = $result->whereDate(2023-12-15)->get();
    //$resul = $result->Carbon::parse('2023-12-15');
    $hoge = Carbon::parse('2023-12-15');
    //$hoges = $result->whereDate($hoge)->get();
    //$resul = $result->whereDate('created_at','>=', '2023-12-15')->get();
    //$resul = $result->whereDate('created_at','2023-12-15')->get();



    $a = 1;

    //$dday = $result->day->get();

    //$result = new LengthAwarePaginator(
    $sstocks = new LengthAwarePaginator(
      $sstocks->forPage($request->page, 12), //([現在のページ番号],[1ページ当たりの表示数]),
      //$result->forPage(1, 5),
      count($sstocks),
      12, //1ページ当たりの表示数
      $request->page,
      //5,
      //1,
      array('path' => $request->url())

    );

    //$dday = $result->day->get();

    //$doll = one();

    $cc = 0000;
    $dc = 00;
    $dcc = 10;
    $dtt = 88;
    $old3 = 1;
    $output11 = 5;
    $rrresult = 5;
    $dd = 6;
    $user1 = 1;
    $user2 = 2;
    $user11 = 3;
    $user22 = 4;
    $ssssss = 55555;
    $eeeee = 55555;
    $sssss = 55555;
    $vl2 = 69;
    $vvv3_1 = 0;
    $v2ag = '希望';



    return view('recode', compact('c', 'dt', 'dd', 'rrresult', 'first', 'second', 'user1', 'user2', 'user11', 'user22', 'sssss', 'eeeee', 'ssssss', 'rresult', 'stocks', 'sstocks', 'v2', 'vl2', 'v2ab', 'jikken', 'cc', 'dcc', 'dtt', 'vvv3_1', 'v2ag'));


  }















  public function recode2(Request $request)
  {


    $dt = 1;

    $page1 = $request->page;
    $output1 = $request->day1;
    $output2 = $request->day2;
    $output3 = $request->day3;

    if ($request->has('day3') and $request->has('page')) {

      $v2ag = "一番上のif入った、これ以上ないうえ";

      $output3 = "2023-12-19";
      $c = strtotime($output3);
      $dc = new Carbon($c);
      $dt = $dc->toDateString();
      $vv3_1 = date('Y年m月d日', strtotime($dt . '+1 day')); //2019年7月20日


    } else {
      $v2ag = "一番上のelse入った、これ以上ないうえ";

    }

    //$output3 = "2023-12-19";
    //$c = strtotime($output3);




    //$v2ag = "一番上のif入った、これ以上ないうえ";

    $output3 = "2023-12-19";
    $c = strtotime($output3);
    $dc = new Carbon($c);
    $dt = $dc->toDateString();
    $vv3_1 = date('Y年m月d日', strtotime($dt . '+1 day')); //2019年7月20日



    $vvv3_1 = $request->day3;

    if ($request->has('day3')) {

      $v2ag = "一番上のifに入った";
    } elseif ($request->has('page')) {
      //値が''（空文字列）でもtrueになる。
      $v2ag = "一番上のelseifに入った";
      if (empty($v2g)) {

        $v2ag = "一番上の中のifに入った";
      } else {
        $v2ag = "一番上の中のifのelseに入った";



      }
      $dt = $dc->toDateString();
      $vvv3_1 = date('Y年m月d日', strtotime($dt . '+1 day')); //2019年7月20日
      $v2g = $vvv3_1;

    }


    $v2g = $vvv3_1;



    $jikken = 22;






    $v1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2_7 = $v1_7->first();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $vl2_7 = $vl1_7->latest();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2ab = $vl1_7->count();

    //$stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')->get();
    $stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $sstocks = $stocks->get();
    $v2 = $sstocks->first();





    $v1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2_7 = $v1_7->first();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $vl2_7 = $vl1_7->latest();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2ab = $vl1_7->count();

    //$stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')->get();
    $stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt)->first();
    //$sstocks_first = $stocks->first();
    $v2 = $stocks;











    //$old3 = \old($output3);
    if ($request->has('day3')) {
      //$old3 = \old($request->day3);
      $old3 = 44444444444;
    } else {
      $old3 = 33333333333;

    }


    $first = new Carbon('2023-12-09 12:00:00');
    $second = new Carbon('2023-12-09 13:00:00');



    //$dd = 1;



    $query = DB::table('attendances');
    $query->select('attendances.id', 'users.id', 'users.name', 'day', 'start_time', 'end_time');
    $query->join('users', 'attendances.users_id', 'users.id');
    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
    $query->where('day', '=', $dt);
    //$rr = $query->get();
    $result = $query->get();


    $query = DB::table('users');
    $query->select('attendances.id', 'users.id', 'users.name', 'day', 'start_time', 'end_time');
    $query->join('attendances', 'users.id', 'attendances.users_id');
    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
    $query->where('day', '=', $dt);
    //$rr = $query->get();
    $result = $query->get();




    $query = DB::table('rests');
    $query->select('rests.attendances_id', 'attendances.id', 'rests.start_time_b', 'rests.end_time_b', 'attendances.day');
    $query->join('attendances', 'rests.attendances_id', 'attendances.id');
    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
    //$query->where('attendances_id', '=', '95');
    $query->where('day', '=', $dt);
    //$rr = $query->get();
    //$rrresult = $query->get();
    //$rrresult = $query->get();
    $rresult = $query->get();

    $rrresult = $result->union($rresult);



    //$resul = $result->whereDate(2023-12-15)->get();
    //$resul = $result->Carbon::parse('2023-12-15');
    $hoge = Carbon::parse('2023-12-15');
    //$hoges = $result->whereDate($hoge)->get();
    //$resul = $result->whereDate('created_at','>=', '2023-12-15')->get();
    //$resul = $result->whereDate('created_at','2023-12-15')->get();



    $a = 1;

    //$dday = $result->day->get();

    //$result = new LengthAwarePaginator(
    $sstocks = new LengthAwarePaginator(
      $sstocks->forPage($request->page, 12), //([現在のページ番号],[1ページ当たりの表示数]),
      //$result->forPage(1, 5),
      count($sstocks),
      12, //1ページ当たりの表示数
      $request->page,
      //5,
      //1,
      array('path' => $request->url())

    );

    //$dday = $result->day->get();

    //$doll = one();

    $cc = 0000;
    $dc = 00;
    $dcc = 10;
    $dtt = 88;
    $old3 = 1;
    $output11 = 5;
    $rrresult = 5;
    $dd = 6;
    $user1 = 1;
    $user2 = 2;
    $user11 = 3;
    $user22 = 4;
    $ssssss = 55555;
    $eeeee = 55555;
    $sssss = 55555;
    $vl2 = 69;



    return view('recode', compact('c', 'dt', 'dd', 'rrresult', 'first', 'second', 'user1', 'user2', 'user11', 'user22', 'sssss', 'eeeee', 'ssssss', 'rresult', 'stocks', 'sstocks', 'v2', 'vl2', 'v2ab', 'jikken', 'cc', 'dcc', 'dtt', 'vvv3_1', 'v2ag'));


  }


  public function recode0(Request $request)
  {





    $page1 = $request->page;
    $output1 = $request->day1;
    $output2 = $request->day2;
    $output3 = $request->day3;




    $jikken = 22;

    $output3 = "2023-12-19";
    $c = strtotime($output3);
    $dc = new Carbon($c);
    $dt = $dc->toDateString();
    $vvv3_1 = date('Y年m月d日', strtotime($dt . '+1 day')); //2019年7月20日

    $dt = $vvv3_1;




    $v1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2_7 = $v1_7->first();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $vl2_7 = $vl1_7->latest();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2ab = $vl1_7->count();

    //$stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')->get();
    $stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $sstocks = $stocks->get();
    //$v2 = $sstocks->first();





    $v1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2_7 = $v1_7->first();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $vl2_7 = $vl1_7->latest();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2ab = $vl1_7->count();

    //$stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')->get();
    $stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt)->first();
    //$sstocks_first = $stocks->first();
    $v2 = $stocks;





    //$old3 = \old($output3);
    if ($request->has('day3')) {
      //$old3 = \old($request->day3);
      $old3 = 44444444444;
    } else {
      $old3 = 33333333333;

    }


    $first = new Carbon('2023-12-09 12:00:00');
    $second = new Carbon('2023-12-09 13:00:00');



    //$dd = 1;



    $query = DB::table('attendances');
    $query->select('attendances.id', 'users.id', 'users.name', 'day', 'start_time', 'end_time');
    $query->join('users', 'attendances.users_id', 'users.id');
    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
    $query->where('day', '=', $dt);
    //$rr = $query->get();
    $result = $query->get();


    $query = DB::table('users');
    $query->select('attendances.id', 'users.id', 'users.name', 'day', 'start_time', 'end_time');
    $query->join('attendances', 'users.id', 'attendances.users_id');
    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
    $query->where('day', '=', $dt);
    //$rr = $query->get();
    $result = $query->get();




    $query = DB::table('rests');
    $query->select('rests.attendances_id', 'attendances.id', 'rests.start_time_b', 'rests.end_time_b', 'attendances.day');
    $query->join('attendances', 'rests.attendances_id', 'attendances.id');
    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
    //$query->where('attendances_id', '=', '95');
    $query->where('day', '=', $dt);
    //$rr = $query->get();
    //$rrresult = $query->get();
    //$rrresult = $query->get();
    $rresult = $query->get();

    $rrresult = $result->union($rresult);



    //$resul = $result->whereDate(2023-12-15)->get();
    //$resul = $result->Carbon::parse('2023-12-15');
    $hoge = Carbon::parse('2023-12-15');
    //$hoges = $result->whereDate($hoge)->get();
    //$resul = $result->whereDate('created_at','>=', '2023-12-15')->get();
    //$resul = $result->whereDate('created_at','2023-12-15')->get();



    $a = 1;

    //$dday = $result->day->get();

    //$result = new LengthAwarePaginator(
    $sstocks = new LengthAwarePaginator(
      $sstocks->forPage($request->page, 12), //([現在のページ番号],[1ページ当たりの表示数]),
      //$result->forPage(1, 5),
      count($sstocks),
      12, //1ページ当たりの表示数
      $request->page,
      //5,
      //1,
      array('path' => $request->url())

    );

    //$dday = $result->day->get();

    //$doll = one();

    $cc = 0000;
    $dc = 00;
    $dcc = 10;
    $dtt = 88;
    $old3 = 1;
    $output11 = 5;
    $rrresult = 5;
    $dd = 6;
    $user1 = 1;
    $user2 = 2;
    $user11 = 3;
    $user22 = 4;
    $ssssss = 55555;
    $eeeee = 55555;
    $sssss = 55555;
    $vl2 = 69;
    $vvv3_1 = 0;
    $v2ag = '希望';

    return view('recode', compact('c', 'dt', 'dd', 'rrresult', 'first', 'second', 'user1', 'user2', 'user11', 'user22', 'sssss', 'eeeee', 'ssssss', 'rresult', 'stocks', 'sstocks', 'v2', 'vl2', 'v2ab', 'jikken', 'cc', 'dcc', 'dtt', 'vvv3_1', 'v2ag'));


  }


  public function recode_end(Request $request)
  {


    $dt = 1;

    $page1 = $request->page;
    $output1 = $request->day1;
    $output2 = $request->day2;
    $output3 = $request->day3;







    if ($request->has('page')) {
      if ($request->has('day3')) {
      } else {
        $v2ag = "上";
        $output3 = "2023-12-19";
        $c = strtotime($output3);
        $dc = new Carbon($c);
        $dt = $dc->toDateString();
        $vvv3_1 = date('Y年m月d日', strtotime($dt . '+1 day')); //2019年7月20日

        //$request->page = 1;
      }
    } else {

      if ($request->has('day3')) {
        $v2ag = "中";
        $output3 = "2023-12-19";
        $c = strtotime($output3);
        $dc = new Carbon($c);
        $dt = $dc->toDateString();
        $vvv3_1 = date('Y年m月d日', strtotime($dt . '+1 day')); //2019年7月20日

        //$request->page = 1;

      } else {
        $v2ag = "下";
        $output3 = "2023-12-19";
        $c = strtotime($output3);
        $dc = new Carbon($c);
        $dt = $dc->toDateString();
        $vvv3_1 = date('Y年m月d日', strtotime($dt . '+1 day')); //2019年7月20日
        //$request->page = 1;
      }

      //$request->page = 1;
    }



    //$request->page = 1;



    $jikken = 22;



    $v1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2_7 = $v1_7->first();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $vl2_7 = $vl1_7->latest();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2ab = $vl1_7->count();

    //$stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')->get();
    $stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $sstocks = $stocks->get();
    $v2 = $sstocks->first();





    $v1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2_7 = $v1_7->first();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $vl2_7 = $vl1_7->latest();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2ab = $vl1_7->count();

    //$stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')->get();
    $stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt)->first();
    //$sstocks_first = $stocks->first();
    $v2 = $stocks;



    //$old3 = \old($output3);
    if ($request->has('day3')) {
      //$old3 = \old($request->day3);
      $old3 = 44444444444;
    } else {
      $old3 = 33333333333;

    }



    $first = new Carbon('2023-12-09 12:00:00');
    $second = new Carbon('2023-12-09 13:00:00');



    //$dd = 1;



    $query = DB::table('attendances');
    $query->select('attendances.id', 'users.id', 'users.name', 'day', 'start_time', 'end_time');
    $query->join('users', 'attendances.users_id', 'users.id');
    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
    $query->where('day', '=', $dt);
    //$rr = $query->get();
    $result = $query->get();


    $query = DB::table('users');
    $query->select('attendances.id', 'users.id', 'users.name', 'day', 'start_time', 'end_time');
    $query->join('attendances', 'users.id', 'attendances.users_id');
    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
    $query->where('day', '=', $dt);
    //$rr = $query->get();
    $result = $query->get();




    $query = DB::table('rests');
    $query->select('rests.attendances_id', 'attendances.id', 'rests.start_time_b', 'rests.end_time_b', 'attendances.day');
    $query->join('attendances', 'rests.attendances_id', 'attendances.id');
    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
    //$query->where('attendances_id', '=', '95');
    $query->where('day', '=', $dt);
    //$rr = $query->get();
    //$rrresult = $query->get();
    //$rrresult = $query->get();
    $rresult = $query->get();

    $rrresult = $result->union($rresult);




    $hoge = Carbon::parse('2023-12-15');



    $a = 1;



    //$result = new LengthAwarePaginator(
    $sstocks = new LengthAwarePaginator(
      $sstocks->forPage($request->page, 12), //([現在のページ番号],[1ページ当たりの表示数]),
      //$result->forPage(1, 5),
      count($sstocks),
      12, //1ページ当たりの表示数
      $request->page,
      //5,
      //1,
      array('path' => $request->url())

    );

    //$dday = $result->day->get();

    //$doll = one();

    $page1 = $request->page;
    $cc = 0000;
    $dc = 00;
    $dcc = 10;
    $dtt = 88;
    $old3 = 1;
    $output11 = 5;
    $rrresult = 5;
    $dd = 6;
    $user1 = 1;
    $user2 = 2;
    $user11 = 3;
    $user22 = 4;
    $ssssss = 55555;
    $eeeee = 55555;
    $sssss = 55555;
    $vl2 = 69;
    //$v2ag = "V2アサルト";
    //$v2ag = 1;


    return view('recode', compact('c', 'dt', 'dd', 'rrresult', 'first', 'second', 'user1', 'user2', 'user11', 'user22', 'sssss', 'eeeee', 'ssssss', 'rresult', 'stocks', 'sstocks', 'v2', 'vl2', 'v2ab', 'jikken', 'cc', 'dcc', 'dtt', 'vvv3_1', 'v2ag', 'page1'));


  }



  //2023-12-8
  public function recode_end_1(Request $request)
  {


    $output3 = $request->day3;
    //$output1 = $request->day1;
    //$output2 = $request->day2;
    //$output3 = $request->day3;
    if ($request->has('day3')) {
      $request->page = 0;
      $v2ag = "一番上のifにはいった";
      $output3 = "2023-12-11";
      //$output3 = $request->day3;
      //$output3 = "2023-12-12";
      $c = strtotime($output3);
      $dc = new Carbon($c);
      $dt = $dc->toDateString();
      $vvv3_1 = date('Y年m月d日', strtotime($dt . '0 day')); //2019年7月20日


    } else {

      if ($request->has('page')) {
        $v2ag = "2023-12-20";
        $output3 = "2023-12-20";
        $c = strtotime($output3);
        $dc = new Carbon($c);
        $dt = $dc->toDateString();
        $vvv3_1 = date('Y年m月d日', strtotime($dt . '0 day')); //2019年7月20日


      } else {
        $v2ag = "最初";
        $output3 = "2023-12-20";
        $c = strtotime($output3);
        $dc = new Carbon($c);
        $dt = $dc->toDateString();
        $vvv3_1 = date('Y年m月d日', strtotime($dt . '0 day')); //2019年7月20日

      }

    }




    $jikken = 22;



    $v1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2_7 = $v1_7->first();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $vl2_7 = $vl1_7->latest();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2ab = $vl1_7->count();

    //$stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')->get();
    $stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $sstocks = $stocks->get();
    $v2 = $sstocks->first();





    $v1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2_7 = $v1_7->first();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $vl2_7 = $vl1_7->latest();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2ab = $vl1_7->count();

    //$stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')->get();
    $stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt)->first();
    //$sstocks_first = $stocks->first();
    $v2 = $stocks;



    //$old3 = \old($output3);
    if ($request->has('day3')) {
      //$old3 = \old($request->day3);
      $old3 = 44444444444;
    } else {
      $old3 = 33333333333;

    }



    $first = new Carbon('2023-12-09 12:00:00');
    $second = new Carbon('2023-12-09 13:00:00');



    //$dd = 1;



    $query = DB::table('attendances');
    $query->select('attendances.id', 'users.id', 'users.name', 'day', 'start_time', 'end_time');
    $query->join('users', 'attendances.users_id', 'users.id');
    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
    $query->where('day', '=', $dt);
    //$rr = $query->get();
    $result = $query->get();


    $query = DB::table('users');
    $query->select('attendances.id', 'users.id', 'users.name', 'day', 'start_time', 'end_time');
    $query->join('attendances', 'users.id', 'attendances.users_id');
    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
    $query->where('day', '=', $dt);
    //$rr = $query->get();
    $result = $query->get();




    $query = DB::table('rests');
    $query->select('rests.attendances_id', 'attendances.id', 'rests.start_time_b', 'rests.end_time_b', 'attendances.day');
    $query->join('attendances', 'rests.attendances_id', 'attendances.id');
    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
    //$query->where('attendances_id', '=', '95');
    $query->where('day', '=', $dt);
    //$rr = $query->get();
    //$rrresult = $query->get();
    //$rrresult = $query->get();
    $rresult = $query->get();

    $rrresult = $result->union($rresult);




    $hoge = Carbon::parse('2023-12-15');



    $a = 1;



    //$result = new LengthAwarePaginator(
    $sstocks = new LengthAwarePaginator(
      $sstocks->forPage($request->page, 12), //([現在のページ番号],[1ページ当たりの表示数]),
      //$result->forPage(1, 5),
      count($sstocks),
      12, //1ページ当たりの表示数
      $request->page,
      //5,
      //1,
      array('path' => $request->url())

    );

    //$dday = $result->day->get();

    //$doll = one();

    $page1 = $request->page;
    $cc = 0000;
    $dc = 00;
    $dcc = 10;
    $dtt = 88;
    $old3 = 1;
    $output11 = 5;
    $rrresult = 5;
    $dd = 6;
    $user1 = 1;
    $user2 = 2;
    $user11 = 3;
    $user22 = 4;
    $ssssss = 55555;
    $eeeee = 55555;
    $sssss = 55555;
    $vl2 = 69;
    //$v2ag = "V2アサルト";
    //$v2ag = 1;


    return view('recode', compact('c', 'dt', 'dd', 'rrresult', 'first', 'second', 'user1', 'user2', 'user11', 'user22', 'sssss', 'eeeee', 'ssssss', 'rresult', 'stocks', 'sstocks', 'v2', 'vl2', 'v2ab', 'jikken', 'cc', 'dcc', 'dtt', 'vvv3_1', 'v2ag', 'page1'));


  }






  public function recode(Request $request)
  {

    $svsv = day__contane()->outp3;


    //public function day_contena2(Request $request){
    //$outp3 = $request->day3;
    //return $outp3;
    // }





    //$val = attendances::with('attendances')->get();
    //$old33 = \old($request->day3);

    //$v2g = day_contena(Request);
    //$v2g = My_func::day_contena();

    $dt = 1;

    $page1 = $request->page;
    $output1 = $request->day1;
    $output2 = $request->day2;
    $output3 = $request->day3;

    if ($request->has('day3') and $request->has('page')) {

      $v2ag = "一番上のif入った、これ以上ないうえ";

      $output3 = "2023-12-19";
      $c = strtotime($output3);
      $dc = new Carbon($c);
      $dt = $dc->toDateString();
      $vv3_1 = date('Y年m月d日', strtotime($dt . '+1 day')); //2019年7月20日


    } else {
      $v2ag = "一番上のelse入った、これ以上ないうえ";

    }

    //$output3 = "2023-12-19";
    //$c = strtotime($output3);




    //$v2ag = "一番上のif入った、これ以上ないうえ";

    $output3 = "2023-12-19";
    $c = strtotime($output3);
    $dc = new Carbon($c);
    $dt = $dc->toDateString();
    $vv3_1 = date('Y年m月d日', strtotime($dt . '+1 day')); //2019年7月20日









    $vvv3_1 = $request->day3;

    if ($request->has('day3')) {

      $v2ag = "一番上のifに入った";
    } elseif ($request->has('page')) {
      //値が''（空文字列）でもtrueになる。
      $v2ag = "一番上のelseifに入った";
      if (empty($v2g)) {

        $v2ag = "一番上の中のifに入った";
      } else {
        $v2ag = "一番上の中のifのelseに入った";



      }
      $output3 = $v2g;
      $v2g = output3;
      $c = strtotime($output3);
      $dc = new Carbon($c);
      $dt = $dc->toDateString();
      $vvv3_1 = date('Y年m月d日', strtotime($dt . '+1 day')); //2019年7月20日
      $v2g = $vvv3_1;
    } else {
      $v2ag = "一番上のifのelseに入った";

    }


    $v2g = $vvv3_1;



    ///////////////////////////////////////////////////////////////////////


    $jikken = 22;



    $v1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2_7 = $v1_7->first();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $vl2_7 = $vl1_7->latest();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2ab = $vl1_7->count();

    //$stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')->get();
    $stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $sstocks = $stocks->get();
    $v2 = $sstocks->first();





    $v1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2_7 = $v1_7->first();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $vl2_7 = $vl1_7->latest();

    $vl1_7 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt);
    $v2ab = $vl1_7->count();

    //$stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')->get();
    $stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')
      ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
      ->where('day', '=', $dt)->first();
    //$sstocks_first = $stocks->first();
    $v2 = $stocks;



    
    //$old3 = \old($output3);
    if ($request->has('day3')) {
      //$old3 = \old($request->day3);
      $old3 = 44444444444;
    } else {
      $old3 = 33333333333;

    }



    $first = new Carbon('2023-12-09 12:00:00');
    $second = new Carbon('2023-12-09 13:00:00');



    //$dd = 1;



    $query = DB::table('attendances');
    $query->select('attendances.id', 'users.id', 'users.name', 'day', 'start_time', 'end_time');
    $query->join('users', 'attendances.users_id', 'users.id');
    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
    $query->where('day', '=', $dt);
    //$rr = $query->get();
    $result = $query->get();


    $query = DB::table('users');
    $query->select('attendances.id', 'users.id', 'users.name', 'day', 'start_time', 'end_time');
    $query->join('attendances', 'users.id', 'attendances.users_id');
    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
    $query->where('day', '=', $dt);
    //$rr = $query->get();
    $result = $query->get();




    $query = DB::table('rests');
    $query->select('rests.attendances_id', 'attendances.id', 'rests.start_time_b', 'rests.end_time_b', 'attendances.day');
    $query->join('attendances', 'rests.attendances_id', 'attendances.id');
    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
    //$query->where('attendances_id', '=', '95');
    $query->where('day', '=', $dt);
    //$rr = $query->get();
    //$rrresult = $query->get();
    //$rrresult = $query->get();
    $rresult = $query->get();

    $rrresult = $result->union($rresult);




    $hoge = Carbon::parse('2023-12-15');



    $a = 1;

    //$dday = $result->day->get();

    //$result = new LengthAwarePaginator(
    $sstocks = new LengthAwarePaginator(
      $sstocks->forPage($request->page, 12), //([現在のページ番号],[1ページ当たりの表示数]),
      //$result->forPage(1, 5),
      count($sstocks),
      12, //1ページ当たりの表示数
      $request->page,
      //5,
      //1,
      array('path' => $request->url())

    );

    //$dday = $result->day->get();

    //$doll = one();

    $cc = 0000;
    $dc = 00;
    $dcc = 10;
    $dtt = 88;
    $old3 = 1;
    $output11 = 5;
    $rrresult = 5;
    $dd = 6;
    $user1 = 1;
    $user2 = 2;
    $user11 = 3;
    $user22 = 4;
    $ssssss = 55555;
    $eeeee = 55555;
    $sssss = 55555;
    $vl2 = 69;



    return view('recode', compact('c', 'dt', 'dd', 'rrresult', 'first', 'second', 'user1', 'user2', 'user11', 'user22', 'sssss', 'eeeee', 'ssssss', 'rresult', 'stocks', 'sstocks', 'v2', 'vl2', 'v2ab', 'jikken', 'cc', 'dcc', 'dtt', 'vvv3_1', 'v2ag'));


  }


  public function day_contena2(Request $request)
  {
    $outp3 = $request->day3;
    return $outp3;
  }


  public function day_contena(Request $request)
  {



    if ($request->has('day3')) {
      $output1 = $request->day1;
      $output2 = $request->day2;
      $output3 = $request->day3;

      $c = strtotime($output3);
      $dc = new Carbon($c);
      $dt = $dc->toDateString();
      $vvv3_1 = date('Y年m月d日', strtotime($dt . '+1 day')); //2019年7月20日
      $v2g = $vvv3_1;
    } elseif ($request->has('page')) {
      //値が''（空文字列）でもtrueになる。
      if (empty($v2g)) {
        $output3 = $v2g;
        $c = strtotime($output3);
        $dc = new Carbon($c);
        $dt = $dc->toDateString();
        $vvv3_1 = date('Y年m月d日', strtotime($dt . '+1 day')); //2019年7月20日
        $v2g = $vvv3_1;
      } else {

        $output3 = $v2g;
        $c = strtotime($output3);
        $dc = new Carbon($c);
        $dt = $dc->toDateString();
        $vvv3_1 = date('Y年m月d日', strtotime($dt . '+1 day')); //2019年7月20日
        $v2g = $vvv3_1;


      }
      $output3 = $v2g;
      $v2g = output3;
      $c = strtotime($output3);
      $dc = new Carbon($c);
      $dt = $dc->toDateString();
      $vvv3_1 = date('Y年m月d日', strtotime($dt . '+1 day')); //2019年7月20日
      $v2g = $vvv3_1;
    } else {
      $v2g = $vvv3_1;
    }


    $v2g = $vvv3_1;
    //$v2g = $vvv_3;

    //$old3 = \ol
    //$jikken = $request->all();
    //$ddt = hiku() - 1;
    //$ddt = 0;
    //return view('recode', compact('ddt'));
    //return view('recode', compact('jikken'));
    //return view('thanks', compact('jikken'));
    return compact('output1', 'vvv3_1', 'output3', 'dt', 'v2g');
    //return (compact('ddt'));
  }







  //public function tasu(Request $request)
  public function tasu(Request $request)
  {
    $output1 = $request->day1;
    $output2 = $request->day2;
    $output3 = $request->day3;

    $dc = new Carbon($output3);
    //$dt = $dc->toDateString();
    //$dt = $dc->toDateString();
    //$dt = $output3;
    $dt = $dc->toDateString();
    //$output1 = $request->day2;
    //$ddt = suji() + 1;
    //$jikken = $request->all();
    //$ddt = 1;
    //return view('recode', compact('ddt'));
    //return view('recode', compact('jikken'));
    //return view('thanks', compact('jikken'));
    return view('thanks', compact('output3', 'dt'));
    //return (compact('ddt'));
  }


  public function hiduke(Request $request)
  {
    $output1 = $request->day1;
    $output2 = $request->day2;
    $output3 = $request->day3;
    //$output1 = $request->day2;
    //$ddt = suji() + 1;
    //$jikken = $request->all();
    //$ddt = 1;
    //return view('recode', compact('ddt'));
    //return view('recode', compact('jikken'));
    //return view('thanks', compact('jikken'));
    return compact('output1', 'output2', 'output3');
    //return (compact('ddt'));
  }

  //public function hiku(Request $request)
  public function hiku()
  {
    //$jikken = $request->all();
    //$ddt = hiku() - 1;
    //$ddt = 0;
    //return view('recode', compact('ddt'));
    //return view('recode', compact('jikken'));
    //return view('thanks', compact('jikken'));
    return view('thanks');
    //return (compact('ddt'));
  }






  public function recodeday(Request $request)
  {
    //$data = $request;






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

  public function atten_1(Request $request)
  {


  }


  public function nation()
  {
    //$authors = attendances::simplePaginate(4);
    $authors = Attendance::Paginate(4);
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






    return view('recode', ['attendance' => $attendance], ['user' => $user]);
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
    if (($oldTimestampDay == $newTimestampDay) && (empty($oldTimestamp->punchOut))) {
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

    if (!empty($timestamp->punchOut)) {
      return redirect()->back()->with('error', '既に退勤の打刻がされているか、出勤打刻されていません');
    }
    $timestamp->update([
      'punchOut' => Carbon::now()
    ]);

    return redirect()->back()->with('my_status', '退勤打刻が完了しました');
  }


}