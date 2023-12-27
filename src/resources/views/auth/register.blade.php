@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>会員登録</h2>
  </div>
  <!--<form class="form" action="contacts/confirm" method="post">-->
    <form class="form" action="/register" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="name" placeholder="名前" value="{{ old('name') }}" />
        </div>
        <div class="form__error">
          @error('name')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="password" name="password" placeholder="パスワード" value="{{ old('pass') }}" />
        </div>
        <div class="form__error">
          @error('password')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="password" name="password_confirmation" placeholder="確認用パスワード" value="{{ old('pass') }}" />
        </div>
        <div class="form__error">
          @error('password')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>

    <div class="form__button">
      <button class="form__button-submit" type="submit">会員登録</button>
    </div>
  </form>
  <div class="form">
    <di class="under__text ">
      <p>アカウントをお持ち出ない方はこちらから</p>
  </di>
  </div>
  <div class="form">
    <a class="a__under" href="/login">ログイン</a>
  </div>

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