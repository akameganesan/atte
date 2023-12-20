@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')

<div class="form">
  <div class="contact-form__content">
    <div class="contact-form__heading">
     <h2>登録完了</h2>
   </div>

  <div class="form">
    <a class="a__under" href="http://localhost/attendance">メインページへ</a>
  </div>
</div>
 @if (Auth::check())
    <p>成功</p>
 @endif
@if (Auth::check())
<div class="thanks__content">
  <div class="thanks__heading">
    <h2>ログイン成功</h2>
  </div>
</div>
@else
<!--<p>ログインできていません</p>-->
@endif
<!--<p>ログインできていません</p>-->
@endsection