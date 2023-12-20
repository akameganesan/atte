@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/recode.css') }}">
@endsection

@section('content')
<diV class="contact-form__content">
<div class="confirm__content">
  <div class="confirm__heading">
    <!--<h2>お問い合わせ内容確認</h2>-->
   <div> <input type="date" name="birthday"></div>
  </div>  
  <form class="form" action="/list" method="post">
    @csrf
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
       
         @foreach ($attendance as $attendance)
       <tr class="confirm-table__row">          
        <td class="confirm-table__text">{{$attendance->users_id}}</td>
        <td class="confirm-table__text">{{$attendance->start_time}}</td>
        <td class="confirm-table__text">{{$attendance->end_time}}</td>      
        <td class="confirm-table__text">sss</td>
        <td class="confirm-table__text">aaa</td>
        </tr>
        @endforeach

        <!--
          <tr>
          <td>aaaa</td>
          <td>aaa</td>
          <td>aaa</td>
          <td>aaa</td>
          <td>aaa</td>
        </tr>          
          <tr>     
          <td>aaaa</td>
          <td>aaa</td>
          <td>aaa</td>
          <td>aaa</td>
          <td>aaa</td>
        </tr>
        <tr>
          <td>aaaaa</td>
          <td>aaa</td>
          <td>aaa</td>
          <td>aaa</td>
          <td>aaa</td>
        </tr>
        <tr>         
          <td>aaaa</td>
          <td>aaa</td>
          <td>aaa</td>
          <td>aaa</td>
          <td>aaa</td>
        </tr>-->        
      </table>
<!--</div>-->
    </div>
    <!--
    <div class="form__button">
      <button class="form__button-submit" type="submit">送信</button>
    </div>
-->
  </form>
</div>
</div>


@endsection