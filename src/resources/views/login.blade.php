@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>ログイン</h2>
  </div>
  <form class="form" action="/login" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <!--<span class="form__label--item">お名前</span>
        <span class="form__label--required">必須</span>-->
      </div>
      <!--<div class="form__group-content">-->
        <div class="form__input--text">
          <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      <!--</div>-->
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <!--<span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">必須</span>-->
      </div>
      <!--<div class="form__group-content">-->
        <div class="form__input--text">
          <input type="password" name="password" placeholder="パスワード" value="{{ old('pass') }}" />
        </div>
        <div class="form__error">
          @error('password')
          {{ $message }}
          @enderror
        </div>
      <!--</div>-->
    </div>
    <!--<div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="tel" name="tel" placeholder="09012345678" value="{{ old('tel') }}" />
        </div>
        <div class="form__error">
          @error('tel')
          {{ $message }}
          @enderror
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
    </div>--> 
        
    <div class="form__button">

        <button class="form__button-submit" type="submit">ログイン</button>

    </div>
  </form>
  <div class="form">
    <div class="under__text ">
      <p>アカウントをお持ち出ない方はこちらから</p>
    </div>
  </div>
  <div class="form">
    <a class="a__under" href="http://localhost/register">会員登録</a>
  </div>
  <!--<div class="copyright">
    <div class="resize">
        <div class="copyright-page__size">
            <div class="copyright__contaner">
               <small>copyright &copy; estra.inc All rights Reserved</small>
             </div>
        </div>
    </div>
  </div>-->

 


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