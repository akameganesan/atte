@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/recode.css') }}">
@endsection

@section('content')




<diV class="contact-form__content">
  <div class="confirm__content">
    <div class="confirm__heading">
          <!--<h2>お問い合わせ内容確認</h2>-->
      <!--<div> <input type="date" name="workday"></div>-->
      <!--<div> <input type="date" name="wkday"></div>-->
      </div>  
        <form class="form" action="/list" method="post">
        <!--<form class="form" action="/list" method="get">-->
          @csrf
           <caption>
    <input type="submit" name="calendar[2020-09*2020-10-24]" value="<<">
    <!--2020年10月-->
    2023年12月8日
    <input type="submit" name="calendar[2020-11*2020-10-24]" value=">>">
  </caption>

        <!--<button disabled class="form__button-submit-2" type="submit">勤務終了</button>-->
        <!--<button class="form__button-submit" type="submit">勤務終了</button>-->
        <!--<button type="submit" name="button2" value="ボタン2" >勤務終了</button>-->


      </div>
      
          <!--<div> <input type="date" name="wkday"></div>-->
          <div class="confirm-table">
            <div class="table__line">
              <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                <tr class="confirm-table__header">
                <th class="table__line">名前</th>
                <th class="table__line">勤務開始</th>
                <th class="table__line">勤務終了</th>
                <th class="table__line">休憩時間</th>
                <th class="table__line">勤務時間</th>

                
              



                

                </tr>

                

                  <?php
                    //
                    //$v3 = $v2->attendances_id;
                    //$d = $c;

                    //$v3 = 1;
                    $v3 = $v2->attendances_id;
                    $v4 = $v2->attendances_id;

                    $sum = 0;
                    $sumDate = 1;
                    //echo $v3;
                    $oo = 0;

                    $ooo = 0;

                     $beforeDate = $v2->attendances_id;

                     $v5 = $v2->attendances_id;

                  ?>

                  
        
                @foreach ($sstocks as $res)

                @php
 
                    $v4 = $res->attendances_id;

                @endphp
                 
                    
                      @if($v5 == $v4)
                @php
		              //echo $res->attendances_id;
                  echo "v4:";
                  echo $v4. "::";
                  echo "v5:";
                  echo $v5. "::";


                  $sta_b = $res->start_time_b;
                    $end_b = $res->end_time_b;

                    

                    $Date = date("Y-m-d");
                    $staTime_b = $Date.$sta_b;
                    $endTime_b = $Date.$end_b;                 

                    $WorkedTime_b = (strtotime($staTime_b) - strtotime($endTime_b))/3600;
                    $WoTime_b = number_format($WorkedTime_b, 2);
                //380の合計
                $ooo += $WoTime_b;
                //$aaa = $res->atendances_id;
                //echo $aaa;
                  echo $ooo;
                @endphp

                    @else

                    
                      @php
                      $ooo = 0;
                      echo $ooo;


                     
		              //echo $res->attendances_id;
                  echo "v4:";
                  echo $v4. "::";
                  echo "v5:";
                  echo $v5. "::";


                  $sta_b = $res->start_time_b;
                    $end_b = $res->end_time_b;

                    

                    $Date = date("Y-m-d");
                    $staTime_b = $Date.$sta_b;
                    $endTime_b = $Date.$end_b;                 

                    $WorkedTime_b = (strtotime($staTime_b) - strtotime($endTime_b))/3600;
                    $WoTime_b = number_format($WorkedTime_b, 2);
                //380の合計
                $ooo += $WoTime_b;
                //$aaa = $res->atendances_id;
                //echo $aaa;
                echo $ooo;
                      @endphp
                @endif

                  @php
                    $v4 = $res->attendances_id;
                    $v5 = $v4;
                    $v6 = $v5 + 1;
                  @endphp
                
                @endforeach

               
               

        
                








                <!--このifの条件だと2回入ってしまう-->
                @foreach ($sstocks as $res)


                @if($res->attendances_id == 380)

                <p>３８０に入っている</p>

                  @php
                    $sta_b = $res->start_time_b;
                    $end_b = $res->end_time_b;

                    

                    $Date = date("Y-m-d");
                    $staTime_b = $Date.$sta_b;
                    $endTime_b = $Date.$end_b;                 

                    $WorkedTime_b = (strtotime($staTime_b) - strtotime($endTime_b))/3600;
                    $WoTime_b = number_format($WorkedTime_b, 2);
                //380の合計
                $oo += $WoTime_b;
                echo "380の合計";
                echo $oo;
                @endphp
                @endif





                @if($v3 == $res->attendances_id)

                  <p>入っている</p>
                  <p>{{ $res->attendances_id }}</p>
                  <p>{{$res->name}}</p>      







                @endif
                
                

               

                @if($v3 == $res->attendances_id)
                @php
                  $sta_b = $res->start_time_b;
                    $end_b = $res->end_time_b;

                    

                    $Date = date("Y-m-d");
                    $staTime_b = $Date.$sta_b;
                    $endTime_b = $Date.$end_b;                 

                    $WorkedTime_b = (strtotime($staTime_b) - strtotime($endTime_b))/3600;
                    $WoTime_b = number_format($WorkedTime_b, 2);
                //380の合計
                $ooo += $WoTime_b;
                $aaa = $res->atendances_id;
                echo $aaa;
                echo "のチャージ中..............";
                echo "休憩時間チャージ中";
                echo $ooo;

                $v3 = $res->attendances_id;
                @endphp
               

                
               
                
                  <!--ここにifがあった-->
                  

                <!--ここまでifがあった-->
                @else

                @php



                 $sta = $res->start_time;
                   $end = $res->end_time;

                   $Date = date("Y-m-d");
                    $staTime = $Date.$sta;
                    $endTime = $Date.$end;

                    $WorkedTime = (strtotime($staTime) - strtotime($endTime))/3600;
                    $WoTime = number_format($WorkedTime, 2);

                    $wooo = $WoTime;

                    $wooo_full = $wooo - $ooo;


                

                @endphp
                 
             

                 <tr>
                  
                  <td class="confirm-table__text">{{$res->name}}</td>
                 <td class="confirm-table__text">{{$res->start_time}}</td>
                  <td class="confirm-table__text">{{$res->end_time}}</td>
                  <td class="confirm-table__text">{{$ooo}}</td>
                  <td class="confirm-table__text">{{$wooo_full}}</td>
                  
                  <td class="confirm-table__text">{{ $res->attendances_id }}</td>
                  <td class="confirm-table__text">{{$res->day}}</td>
                  


                
                  
                  <!--ここからphpと<td>があった-->
                   
                  <!--ここままでphpと<td>があった-->




                     <?php
                  $v3 = $res->attendances_id;
                    ?>


                  




</tr>
               
               
                  @php
                  //ifで3回目以降に挑戦
                  $ooo = 0;
                  @endphp


                 @endif

                  <?php
                  //失敗
                   //$sum = 0;
                    ?>

                     <?php
                //$v3 = $res->attendances_id + 1;
                //echo $v3;
                $sumDate++;

                //２回目まではこの位置でうまくいった

              


                //２回目まではこの位置でうまくいった
                $sum = 0;
                ?>


                @endforeach              
                

              </table>



              
              <!--ここにページネイトを置く-->
              {{ $sstocks->appends(request()->query())->links() }}
              
            



              </div>
          </div>

        </form>

@php
                   

                  

                    $Date = date("Y-m-d");
                    $InTime = $Date." 10:00:00";
                    $OutTime = $Date." 18:00:00";

                    $WorkTime = (strtotime($OutTime) - strtotime($InTime))/3600;
                    echo number_format($WorkTime, 1);

 @endphp


                {{ $v2->attendances_id }}

<?php
          //
          $v3 = $v2->attendances_id;
          //$d = $c;

?>

{{ $v3 }}

{{ $d }}
{{ $stocks }}


{{ $rrresult }}
{{ $rresult }}


@php



echo strtotime('2023-12-10');
echo strtotime("tomorrow");

$nday = strtotime('2023-12-15');
$dday = strtotime('2023-12-15');

if($nday == $dday)

echo "どうですか";

@endphp


{{ $dd }}





{{ $c }}
{{ $dt }}


<!--現在のページに表示されている件数:-->
{{ $sstocks->count() }}
<!--現在のページ数:--> 
{{ $sstocks->currentPage() }}
<!--現在のページの最初の要素:--> 
{{ $sstocks->firstItem() }}
<!--次のページがあるかどうか:--> 
{{ $sstocks->hasMorePages() }}
<!--現在のページの最後の要素:--> 
{{ $sstocks->lastItem() }}
<!--最後のページ数: -->
{{ $sstocks->lastPage() }}
<!--次のページのURL:--> 
{{ $sstocks->nextPageUrl() }}
<!--1ページに表示する件数:--> 
{{ $sstocks->perPage() }}
<!--前のページのURL:--> 
{{ $sstocks->previousPageUrl() }}
<!--合計件数:--> 
{{ $sstocks->total() }}





{{ $dddd }}
{{ $first }}
{{ $second }}
{{ $user1 }}
{{ $user2 }}
{{ $sssss }}
{{ $eeeee }}

{{ $ssssss }}








 
      </div>
      
  </div>
</div>

@endsection