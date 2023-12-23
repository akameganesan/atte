@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')





<?php

$user = Auth::user();
          //
          $b = Auth::id();
          //echo $b;
          //echo $b;
          //echo $b;
          //echo $b;
          //echo $b;
          //echo $b;
         //echo $b;

?>


<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2><?php $user = Auth::user();?>{{ $user->name }}さんお疲れ様です！</h2>
  </div>

   <form class="form" action="/attendance/index2" method="post">
    @csrf
    <div class="flex__button">
      <div class="form__button">

        <!--<button class="form__button-submit" type="submit">勤務開始</button>-->
        <button  class="form__button-submit" type="submit" name="button1" value="ボタン1">勤務開始</button>

      </div>

      <div class="form__button">

        <!--<button disabled class="form__button-submit-2" type="submit">勤務終了</button>-->
        <!--<button class="form__button-submit" type="submit">勤務終了</button>-->
        <button disabled class="form__button-submit-2" type="submit" name="button2" value="ボタン2" >休憩終了</button>

      </div>
    </div>
    <!--<?php $user = Auth::user();?>-->
   
  </form>



  <form class="form" action="/attendance/index2" method="post">
    @csrf

    <div class="flex__button">

      <div disabled class="form__button">
        <button class="form__button-submit-2" type="submit" name="button1" value="ボタン3">休憩開始</button>
      </div>
      <div class="form__button">
        
        <button disabled class="form__button-submit-2" type="submit" name="button2" value="ボタン4" >休憩終了</button>
      </div>
    </div>
  </form>




  






</div>



<!--<button disabled class="form__button-submit" type="submit">休憩終了</button>-->


<!--
<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>お問い合わせ</h2>
  </div>
  <form class="form" action="contacts/confirm" method="post">

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="name" placeholder="テスト太郎" value="{{ old('name') }}" />
        </div>
        <div class="form__error">

        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
        </div>
        <div class="form__error">

        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="tel" name="tel" placeholder="09012345678" value="{{ old('tel') }}" />
        </div>
        <div class="form__error">

        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="content" placeholder="資料をいただきたいです">{{ old('content') }}</textarea>
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">送信</button>
    </div>
  </form>
</div>-->

<!--
<div class="todo__alert">
     @if(session('message'))
<div class="todo__alert--success">
  {{ session('message') }}
</div>
     @endif
</div>
-->





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