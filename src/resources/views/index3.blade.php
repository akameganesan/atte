@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<p class="p__mini-size">{{$a}}</p>

<?php


          //
          $b = $a;
          //echo $b;
          //echo $b;
          //echo $b;
          //echo $b;
          //echo $b;
          //echo $b;
         //echo $b;

?>

@if ($b === 1)


<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>
      <?php $user = Auth::user();?>{{ $user->name }}さんお疲れ様です！
    </h2>
  </div>

  <form class="form" action="/attendance" method="post">
    @csrf
    <div class="flex__button">
      <div class="form__button">

        <!--<button class="form__button-submit" type="submit">勤務開始</button>-->
        <button disabled class="form__button-submit-2" type="submit" name="button1" value="ボタン1">勤務開始</button>

      </div>

      <div class="form__button">

        <!--<button disabled class="form__button-submit-2" type="submit">勤務終了</button>-->
        <!--<button class="form__button-submit" type="submit">勤務終了</button>-->
        <button class="form__button-submit" type="submit" name="button2" value="ボタン2">勤務終了</button>

      </div>
    </div>


  </form>



  <form class="form" action="/attendance" method="post">
    <div class="flex__button">

      <div class="form__button">
        <button class="form__button-submit" type="submit" name="button3" value="ボタン3">休憩開始</button>
      </div>
      <div class="form__button">

        <button disabled class="form__button-submit-2" type="submit" name="button4" value="ボタン4">休憩終了</button>
      </div>
    </div>
  </form>

  @elseif ($b === 2)


  <div class="contact-form__content">
    <div class="contact-form__heading">
      <h2>山田太郎さんお疲れ様です！</h2>
    </div>

    <form class="form" action="/attendance" method="post">
      @csrf
      <div class="flex__button">
        <div class="form__button">

          <!--<button class="form__button-submit" type="submit">勤務開始</button>-->
          <button disabled class="form__button-submit-2" type="submit" name="button1" value="ボタン1">勤務開始</button>

        </div>

        <div class="form__button">

          <!--<button disabled class="form__button-submit-2" type="submit">勤務終了</button>-->
          <!--<button class="form__button-submit" type="submit">勤務終了</button>-->
          <button class="form__button-submit" type="submit" name="button2" value="ボタン2">勤務終了</button>

        </div>
      </div>


    </form>



    <form class="form" action="/attendance" method="post">
      <div class="flex__button">

        <div class="form__button">
          <button class="form__button-submit-2" type="submit" name="button3" value="ボタン3">休憩開始</button>
        </div>
        <div class="form__button">

          <button class="form__button-submit" type="submit" name="button4" value="ボタン4">休憩終了</button>
        </div>
      </div>
    </form>





    @endif



  </div>


  <div class="news">
    <div class="resize">
      <div class="news-page__size">
        <div class="news__absolute">
          <!--<p class="p-news__style">news</p>-->
          <h4 class="h3_news__margin">Atte,inc.</h4>
        </div>
      </div>
    </div>
  </div>



  @endsection