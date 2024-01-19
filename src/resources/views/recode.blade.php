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









    <!--<caption>-->
    <!--<input type="submit" name="calendar[2020-09*2020-10-24]" value="<<">-->
    <!--2020年10月-->
    <!--2023年12月8日-->
    <!--<input type="submit" name="calendar[2020-11*2020-10-24]" value=">>">-->
    <!--</caption>-->

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
          <th class="table__line">休憩時間(10進法：ｈ表示)</th>
          <th class="table__line">勤務時間(10進法：ｈ表示)</th>

        </tr>

        <?php

                     $v3 = $v2->attendances_id;
                    $v4 = $v2->attendances_id;
                    $sum = 0;
                    $sumDate = 1;
                    $oo = 0;
                    $ooo = 0;
                    $beforeDate = $v2->attendances_id;

                    $v5 = $v2->attendances_id;

   
                  ?>


        @php
        //休憩時間の合計だけあっているver
        @endphp



        @foreach ($sstocks as $res)

        @php
        $v4 = $res->attendances_id;
        @endphp


        @if($v5 == $v4)
        @php
        //echo $res->attendances_id;
        //echo "vv4:";
        //echo $v4. "::";
        //echo "vv5:";
        //echo $v5. "::";

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
        //echo $ooo;

        @endphp

        @else
        @php
        $ooo = 0;
        //echo $ooo;

        //echo $res->attendances_id;
        //echo "vv4:";
        //echo $v4. "::";
        //echo "vv5:";
        //echo $v5. "::";

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
        //echo $ooo;
        @endphp


        @endif

        @php
        $v4 = $res->attendances_id;
        $v5 = $v4;
        $v6 = $v5 + 1;
        @endphp

        @endforeach

        @php
        //休憩時間の合計だけあっているver
        @endphp













        @php
        //休憩時間の合計だけあっているverを編集

        @endphp




        @php

        //
        //$v3 = $v2->attendances_id;
        //$d = $c;

        //$v3 = 1;
        $v3 = $v2->attendances_id;
        $v4 = $v2->attendances_id;
        $vvvvv = $v2->day;
        //echo $vvvvv;
        $sum = 0;
        $sumDate = 1;
        //echo $v3;
        $oo = 0;

        $ooo = 0;

        $beforeDate = $v2->attendances_id;

        $v5 = $v2->attendances_id;

        $tag = $v2->attendances_id + 1;
        $ta = $v2->attendances_id + 1;

        $count = 1;
        $cou = 1;

        $v2AB = $v2ab;
        $V2AB = $v2->attendances_id + $v2AB;



        //$v2AB = $vl2->attendances_id;

        @endphp

        @php
        //休憩時間の合計だけあっているverを編集

        @endphp





        @foreach ($sstocks as $res)

        @php
        $v4 = $res->attendances_id;
        @endphp


        @if($v5 == $v4)
        @php
        //echo $res->attendances_id;
        //echo "vv4:";
        //echo $v4. "::";
        //echo "vv5:";
        //echo $v5. "::";

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
        //echo $ooo;
        $oooo = $ooo;

        @endphp





        @else
        @php
        $ooo = 0;
        //echo $ooo;

        //echo $res->attendances_id;
        //echo "vv4:";
        //echo $v4. "::";
        //echo "vv5:";
        //echo $v5. "::";

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
        //echo $ooo;
        //$oooo = $ooo;
        @endphp




        @endif

        @php
        $v4 = $res->attendances_id;
        $v5 = $v4;
        $v6 = $v5 + 1;
        @endphp

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
        $woooo = $wooo;
        @endphp



        @php
        //$ta = $v4;
        //$tag = $v4 + 1;

        //$ta = 100;

        $vv4 = $v4;
        $vvv4 = $v4 + 1;

        //$tag = $ta + 1;
        @endphp

        @if($v4 == $tag)

        @php
        $list = $v4 - 1;
        @endphp

        @foreach ($sstocks as $re)


        @if($re->attendances_id == $list)

        <tr>

          @php

          //うまくいってたところ
          // $total_bb = $ooo;
          //$total_ww = $wooo_full;

          //$number = explode('.', $total_bb);
          //echo "::整数::";
          //echo $number[0];
          //echo "::少数::";
          //echo $number[1];

          //$number_tt = $number[1] * 60 / 100;
          //echo "::分::";
          //echo $number_tt;
          //$number_t = sprintf('%02d', $number_tt);

          //echo ":時間::";
          //echo sprintf('%02d', $number[0]);
          //$wh = $number[0] * -1;
          //$number_h = sprintf('%02d', $wh);

          //$number_ss = 0;
          // $number_s = sprintf('%02d', $number_ss);





          //合計時間
          //$number1 = explode('.', $total_ww);
          //$number_ww1 = $number1[1] * 60 / 100;
          //$number_ww1_i = sprintf('%02d', $number_ww1);
          //$wh1 = $number1[0] * -1;
          //$number_h1 = sprintf('%02d', $wh1);
          //$number1_ss = 0;
          //$number1_s = sprintf('%02d', $number_ss);

          //うまくいっていたところ


          $ooo_full = $ooo * -1;
          $wooo_full_1 = $wooo_full * -1;


          @endphp

          <td class="confirm-table__text">{{$re->name}}</td>
          <td class="confirm-table__text">{{$re->start_time}}</td>
          <td class="confirm-table__text">{{$re->end_time}}</td>

          <td class="confirm-table__text">{{$ooo_full}}</td>
          <td class="confirm-table__text">{{$wooo_full_1}}</td>




          <!--ここからphpと<td>があった-->

          <!--ここままでphpと<td>があった-->

        </tr>




        @php
        $woooo = 0;
        $oooo = 0;
        //$ooo = 0;
        //$cou = 1;
        @endphp



        @break
        @endif
        @php
        //$cou = $count + 1;
        //$count += ;
        @endphp
        @endforeach
        @endif



        @php
        //$ta = $res->attedances_id;
        //$ta = 100;



        //$tag = $v4 + 1;
        $tag = $vv4 + 1;
        @endphp





        @endforeach

        @php
        //休憩時間の合計だけあっているverを編集

        @endphp

        <!--こんがらがって最悪の状況-->
      </table>

      <!--ここにページネイトを置く-->
      <!--<form class="form" action="/list" method="post">-->
      <!--<input type="text" name="day3" />-->
      {{ $sstocks->appends(request()->query())->links() }}
      <!--</form>-->
    </div>
  </div>







  <!--<form class="form" action="/list" method="post">-->
  <form class="form" action="/list_end_1" method="post">
    @csrf
    <!--<input type="button" onclick="op1.value -= 1;" value="<<">-->
    <p>{{ $dt }}</p>

    <!--<button type="submit" name="day1" value="1000">>></button>-->
    <input class="day__style" type="date" name="day3" value="2023月12月19日" size="10"><!-- ×-->

    <button type="submit" name="day2" value="妥協">日付指定</button>

    <!--<input type="date" name="b" value="0" size="10"> ＝-->
    <!--<output name="op1">0</output>-->
    <!--<input type="button" onclick="op1.value -= -1;" value=">>">-->
    <!--<button type="submit" name="day2" value="$vvv2">>></button>-->
    @error('day')
    {{ $message }}
    @enderror
  </form>



</div>

</div>
</div>

@endsection