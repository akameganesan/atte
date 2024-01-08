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


            //$a = $atte->users_id;
                    //$item = User::find($a)->name;

            //$user = Auth::user();
            //$attendances = attendances::all();

            
            
            //$attendances = attendances::where('users_id',$users_id)->where('day', $date)->get();
             //$val = attendances::with('attendances')->get();
            //$users_id = $val->users_id;
            //$user = Auth::user();
            //$users_id = a;


           

            // $attendances = attendances::where('users_id',$users_id)->get();
            //$users_id = 1;
            //$date = new DateTime('2023-12-15 00:00:00');
            //$attendances = attendances::where('users_id',$users_id)->where('day', $date)->get();

            //$attendances = attendances::where('day', $date)->where('users_id',$users_id)->get();




        

        
            //$users_id = attendances::where('users_id', $date)->get();
            //$users_id = attendances::where('users_id')->get();

            //$workday = $request;
            //$workday = Carbon::today();
           // if( empty($reqest) ){ 
            //$date = $request->wkday;
            //'end_time' => Carbon::now(),
             //'day' => Carbon::today(),
             //$date = Carbon::today();       
             //$date = new DateTime('2023-12-15 00:00:00');
    
             //////////////////////// $wkday = attendances::where('day', $wkday )->latest()->get()->first();

            //$val = attendances::with('attendances')->latest()->first();
             

             //$date = new DateTime('2023-12-15 00:00:00');
             //$wkday = Carbon::today();
           // }else{
                //$date = $request->wkday;

           // }



            //$request = 2023-12-27 00:00:00;
            //$date = new DateTime('1999-11-02 05:27:42');
            //$date = new DateTime('2023-12-15 00:00:00');
            //$date = new DateTime('$workday');


            //$items = attendances::where('day', 'workday')->get();
            //$item = Attendances::where('day', $request->input)->first();
            //$item = Attendances::where('day', $date)->first();

            //return view('recode',compact('val'));
            //return view('thanks');

           // $val = attendances::with('attendances')->latest()->first();
           // $bil = $val->users_id;

            //$attnd = array(
            //$val = attendances::with('attendances')->latest()->first();
            //$val = attendances::with('attendances')->users_id;
            //$bil => $val->users_id,
           // $workday => attendances::where('users_id', $bil)->get()->where('day', $date)->get()
 

           // );

             //$attendances = attendances::all();
             //$attendances = attendances::simplePaginate(5);
             //$attendances = attendances::Paginate(5);

             //$workday = attendances::where('day', $date)->first();


             //$workday = attendances::where('day', $date)->where('users_id', $bil)->get();


            //$attendances = attendances::Paginate(5);


              // /$timestamp = rests::create([
        //'attendanses_id' => $user->id,//Auth::id(),
        //'attendanses_id' => $attendances->id,//Auth::id(),
        //'attendanses_id' => $val,//Auth::id(),

        //'attendanses_id' => $id,//Auth::id(),
        //'attendances_id' => $kari,//Auth::id(),
        //'attendances_id' => $kari,//Auth::id(),
        //'attendances_id' => $bil,//Auth::id(),

        
        //'attendanses_id' => $form->id,//Auth::id(),
        //'today' => Carbon::today(),
        //'day' => Carbon::today(),
        //'start_time' => Carbon::now(),
        //'start_time' => null,
        //'end_time' => Carbon::now(),
        //'end_time' => null,
        //'created_at' => Carbon::now(),
        //'updated_at' => Carbon::now()]);

                //$attendances = array([

                //]);

                //$users = attendances::find(63);
                
                //$users = attendances::all()->attendances_id;
                //$posts = $users->attendances_id;

                //$users = attendances::with('attendances')->get();
                //$at = $users->id;

                //$val = attendances::with('attendances')->latest()->first();
                //$bil = $val->id;

                   // $val = attendances::with('attendances')->latest()->first();
 

           
           
                    //$hasItems = attendances::has('users_id')->get();
                    //$noItems = attendances::doesntHave('users_id')->get();
                    //$param = ['hasItems' => $hasItems, 'noItems' => $noItems];
                    
                    
                    //$user = Auth::user();
                    //$username = $user->name;                    
                    
                    //$user = users::user();
                    //$username = $user->name;        
                    
                    
                    //$attendances = attendances::all();
                    //$attendances = attendances::all();

                    //$attenid = $attendances->users_id;
                    //$nam = attendances::where('users_id')->get();

                    //$attendance = [
                    //$na = User::find($a)->name,
                    //$na = User::find($attenid)->name,

                    //$st = $attendances->start_time,
                    //$na = users::where('name', '=','nam')->get(),
                    //$st = attendances::where('start_time')->get(),
                    //
                    //$en = attendances::where('end_time')->get(),
                    //$en = $attendances->end_time

                    //];

                        //$ttt

                        //$users = $query->addSelect('age')->get();

                        //$query = DB::table('rests')->get();
                        //$user = DB::table('rests')->where('start_time', 'end_time')->first();
                        //$fi = new Carbon('2023-12-09 12:00:00');                      
                        //$se = new Carbon('2023-12-09 13:00:00');

                        //$user1 = DB::table('rests')->where('start_time', '=', $fi)->first();
                        //$user2 = DB::table('rests')->where('end_time', '=', $se)->first();
                        //$user1->start_time;
                        //$user2->end_time;
                       
                        //$user1 = $user1->toDateString();
                        //$user2 = $user2->toDateString();

                        //$ggg1 = User::select('id', 'name');
                        //$ggg1->where('id', '=', '1');
                        //$ggg2 = attendances::select('id','users_id', 'day', 'start_time', 'end_time')->union($ggg1)->get();
                        //$ggg3 = rests::select('atendances_id','start_time', 'end_time')->union($ggg1)->union($ggg2)->get();



                        // 今月の初めの時間を取得
//$now = Carbon::now()->startOfMonth();
// 日付けあふれなしで翌月から1秒引いた時間を取得
//$next = Carbon::now()->startOfMonth()->addMonthNoOverflow()->subSecond(1);
// 取得
//$data = $this->whereBetween('updated_at', array($now, $next))->get();






                        $c = strtotime('2023-12-19');
                    //$dc = new Carbon('2023-12-10');
                    //$dc = new Carbon('2023-12-17');
                    $dc = new Carbon('2023-12-19');
                    //$dt = $dc->toDateString();
                    $dt = $dc->toDateString();


                        $v1 = User::join('attendances', 'users.id', '=', 'attendances.users_id')
                        ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
                        ->where('day', '=', $dt);
                        $v2 = $v1->first();

                        


                        //$stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')->get();
                        $stocks = User::join('attendances', 'users.id', '=', 'attendances.users_id')
                        ->join('rests', 'rests.attendances_id', '=', 'attendances.id')
                        ->where('day', '=', $dt);
                        $sstocks = $stocks->get();

                        //$num = $sstocks->value('start_time_b');


                        $zz = $sstocks;
                        //$zzz = zz->count();
                        //$zz->select('start_time_b');

                        $zzz = 1 + 1;
                        
                        //$z = $sstocks->where('attendances_id', '=', '95' )->first();
                        //$d = new Carbon($z);
                        $d = 999;

                        //$sstocks = 777;
                        $stocks = 777;

                        //$res = rest::all();










                        $user1 = 111;
                        $user2 = 111;
                        $user11 = 100;
                        $user22 = 100;
                        //$user1->start_time;
                        //$user2->end_time;
                        //$user1->start_time;
                        //$user1->end_time;
                        //$first = new Carbon($user1);                      
                        //$second = new Carbon($user2);
                        //$dddd = $user1->diffInMinutes($user2);
                        //$dddd = $first->diffInMinutes($second);
                        //$dddd = $user1->diffInMinutes($user2);
                        //$trests = rests::all();
                        //$query = DB::table('rests');
                        //$query->select('start_time');
                        //$query->where('start_time', '=', $ccc);
                        //$tfirst = $trests->id;
                        //$tsecond = $trests->id;
                        //$query->where('attendances_id', '=', '111');
                        //$sssss = $query->get();
                        ///$sssss = new Carbon($ssss);
                        $sssss = 0;   


                        //$query = DB::table('rests');
                        //$query->select('end_time');
                        //$query->where('start_time', '=', $ccc);
                        //$tfirst = $trests->id;
                        //$tsecond = $trests->id;
                        //$query->where('attendances_id', '=', '111');
                        //$eeeee = $query->get();
                        $eeeee = 888;

                        //$ttttt = $sssss->diffInMinutes($eeeee);


                        //$query = DB::table('rests');
                        //$query->select('attendances_id','end_time');
                        //$query->where('start_time', '=', $ccc);
                        //$tfirst = $trests->id;
                        //$tsecond = $trests->id;
                        //$query->where('attendances_id', '=', '111');

                        //$ssssss = $query->get();
                        $ssssss = 11;
                        //$ssssss->start_time;
                        //$s = new Carbon($sssss);   

                        
                        
                        //$rests = new rests;
                        //$ttttttttt = $ssssss->totalRests();

                        //$query = DB::table('rests');
                        //$query->select('attendances_id','start_time', 'end_time');
                        //$query->where('start_time', '=', $ccc);
                        //$tfirst = $trests->id;
                        //$tsecond = $trests->id;
                        //$query->where('attendances_id', '=', '95');
                        //$rrr = $query->get();
                        $rrr = 22;















                        $dddd = 1;

                         $ccc = new Carbon('2023-12-09 12:00:00');     

                        //$trests = rests::all();
                        //$query = DB::table('rests');
                        //$query->select('attendances_id','start_time', 'end_time');
                        //$query->where('start_time', '=', $ccc);
                        //$tfirst = $trests->id;
                        //$tsecond = $trests->id;
                        //$query->where('attendances_id', '=', '95');
                        //$rrr = $query->get();
                        $rrr = 33;






                        




                        
                        //$first = DB::table('rests')->start_time->get();
                        //$second = DB::table('rests')->end_time->get();

                        
                        
                        $first = new Carbon('2023-12-09 12:00:00');                      
                        $second = new Carbon('2023-12-09 13:00:00');

                        
                        
                        
                        //$dd = $first->diffInMinutes($second);
                        $dd = 1;
                    




                    

                    //$dd = 1;

                    
                    
                    
                    
                    
                    
                    $query = DB::table('attendances');
                    $query->select('attendances.id', 'users.id','users.name', 'day','start_time', 'end_time');
                    $query->join('users', 'attendances.users_id', 'users.id');
                    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
                    $query->where('day', '=', $dt);
                    //$rr = $query->get();
                    $result = $query->get();


                    $query = DB::table('users');
                    $query->select('attendances.id', 'users.id','users.name', 'day','start_time', 'end_time');
                    $query->join('attendances', 'users.id', 'attendances.users_id');
                    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
                    $query->where('day', '=', $dt);
                    //$rr = $query->get();
                    $result = $query->get();

                    
                    
                    
                    
                    
                    
                    
                    $query = DB::table('rests');
                    $query->select('rests.attendances_id', 'attendances.id','rests.start_time_b','rests.end_time_b','attendances.day');
                    $query->join('attendances', 'rests.attendances_id', 'attendances.id');
                    //$query->join('rests', 'attendances.id', 'rests.attendances_id');
                    //$query->where('attendances_id', '=', '95');
                    $query->where('day', '=', $dt);
                    //$rr = $query->get();
                    //$rrresult = $query->get();
                    //$rrresult = $query->get();
                    $rresult = $query->get();
                    
                    $rrresult = $result->union($rresult);


                    //$c = strtotime('2023-12-10');
                    //$dc = new Carbon('2023-12-10');
                    //$dt = $dc->toDateString();
                    //$dd = 1;


                    //$hogege = attendances::whereDate('created_at', '2023-12-15')->get();
                    //$this = attendances::whereDate('created_at', '2023-12-15')->get();


                    
                    
                    
                    
                    
                    
                    
                    
                    //////////////////////////////////////////////
                    //$this->attendances = new attendances;
                    //$result = $this->attendances->getUserNameById();
                    //////////////////////////////////////////////












                    //$rresult = $this->attendances->getUserNameById();

                    //$dd = $this->attendances->getUserNameById()->where('name','=', '佐藤')->get();
                    //$dd = $this->attendances->getUserNameById()->where('day','=','dt')->get();
                    //$dd = $this->attendances->getUserNameById()->where('day','=','dt')->get();
                    //$dd = $result->where('day','=','dt')->get();
                    //$dd = $result->where('day','=','dt')->all();

                    //$dd = $result->where('day','like','%12')->get();
                    
                    
                    //$result = $rresult->where('day','=','dt')->all();
                    //$result = $rresult->where('day','=','dt')->get();


                    //$result = $this->attendances->getUserNameById()->where('day','=', 'c')->get();
                    //$result = $this->attendances->getUserNameById()->where('day','=', 'dt')->get();
                    //$result = $this->attendances->getUserNameById()->where('day','=', '2023-12-10')->get();
                    //$result = $this->attendances->getUserNameById()->where('day','=', 'c')->first();

                    //$resul = $result->whereDate(2023-12-15)->get();
                    //$resul = $result->Carbon::parse('2023-12-15');
                    $hoge = Carbon::parse('2023-12-15');
                    //$hoges = $result->whereDate($hoge)->get();
                    //$resul = $result->whereDate('created_at','>=', '2023-12-15')->get();
                    //$resul = $result->whereDate('created_at','2023-12-15')->get();

                    
                    
                    //$data = $result->paginate(5);

                    //$coll = collect($result);
           
            $a = 1;
                    //$item = attendances::select('users_id')->get();
                    //$user = User::find($item);
              
                    //$attendances = attendances::all();
                   //$attendancea = $result;
                    //$result = attendances::Paginate(5);

                    //$query = $result; 
                    //$result = $result->paginate(12);
                    
                    //$result = $result->whereDate('created_at','>=', '2023-12-15')->get();

                    //$result = attendances::whereDate('created_at','>=', '2023-12-09')->get();
                    //$c = strtotime('2023-12-10');

                    //$rresult = attendances::where('day','=', 'c')->get();

                    //$dday = $result->day->get();

                    //$result = new LengthAwarePaginator(
                    $sstocks = new LengthAwarePaginator(
                        $sstocks->forPage($request->page , 150),//([現在のページ番号],[1ページ当たりの表示数]),
                        //$result->forPage(1, 5),
                        count($sstocks),
                        150,//1ページ当たりの表示数
                        $request->page,
                        //5,
                        //1,
                        array('path' => $request->url())
                    
                    );

                    //$dday = $result->day->get();

                    //$doll = one();



                    //$result = $result->whereDate('created_at','>=', '2023-12-15')->get();




                    //$this->attendances = new attendances;

                    //$result = $this->attendances->getUserNameById();

                //$item = attendances::select('attendances.id', 'day', 'start_time', 'end_time');
                //$item->where('id', '=', '105');
                //$rrreslult = rests::select('attendances_id', 'start_time', 'end_time')->union($item)->get();
                //$rrreslult = rests::select('start_time', 'end_time')->union($item)->get();
                //$rrrrreslult = rests::select('attendances_id', 'start_time', 'end_time');
                //$rrrrreslult->where('attendances_id', '=', '105');
                //$rrreslult = $rrrrreslult->union($item)->get();
                //$rrreslult = 555;


                    
           
                   //return view('recode',['attendances'=> $attendances]);
            //return view('recode',compact('attendances','workday','val'));
            //return view('recode',compact('attendances','user'));
            return view('recode',compact('result','c', 'dt', 'dd','rrresult', 'dddd', 'first', 'second', 'user1', 'user2', 'user11', 'user22', 'sssss', 'eeeee', 'ssssss', 'rresult','stocks','sstocks', 'd', 'v2'));
    
    
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

     Public function atten_1(Request $request) {


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