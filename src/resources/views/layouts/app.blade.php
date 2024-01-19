<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    @yield('css')
</head>






<body>
    <header clarss="headr__flex">
        <div class="header-page">
            <div class="header-page__size">
                <div class="header__logo">
                    <h2 class="h2__move">Atte</h2>
                </div>
                <div class="header-content__size">
                    <div class="header__between">
                        <nav class="nav__nav">
                            <ul class="ul__ul">
                                <!--<li class="li__li"><a class="a__under" href="リンク先パス">News</a></li>
                                <li class="li__li"><a class="a__under" href="リンク先パス">about</a></li>
                                <li class="li__li"><a class="a__under" href="リンク先パス">Service</a></li>
                                <li class="li__li"><a class="a__under" href="リンク先パス">Blog</a></li>
                                <li class="li__li"><a class="a__under" href="リンク先パス">comoany</a></li>
                                <li class="li__li"><a class="a__under" href="リンク先パス">Content</a></li>-->
                                @if (Auth::check())
                                <!--<li class="li__li"><a class="a__under" href="/">ホーム</a></li>-->
                                <!--<li class="li__li"><a class="a__under" href="/recode">日付一覧</a></li>-->

                                <form class="form" action="/" method="post">
                                    @csrf
                                    <!--<li class="li__li"><a class="a__under" href="/logout">ログアウト</a></li>-->
                                    <button class="header-nav__button">ホーム</button>
                                </form>









                                <!--<form class="form" type="text" name="page" action="/list" method="post" value="5">-->
                                <form class="form" type="text" name="page" action="/list_end" method="post" value="5">
                                    @csrf
                                    <!--<li class="li__li"><a class="a__under" href="/logout">ログアウト</a></li>-->
                                    <button class="header-nav__button">日付一覧</button>
                                </form>





                                <form class="form" action="/logout" method="post">
                                    @csrf
                                    <!--<li class="li__li"><a class="a__under" href="/logout">ログアウト</a></li>-->
                                    <div calass="logout__nowrap">
                                        <button class="header-nav__button">ログアウト</button>
                                </form>
                    </div>
                    @endif
                    <!--<li class="li__li"><a class="a__under" href="リンク先パス">Service</a></li>
                                <li class="li__li"><a class="a__under" href="リンク先パス">Blog</a></li>
                                <li class="li__li"><a class="a__under" href="リンク先パス">comoany</a></li>
                                <li class="li__li"><a class="a__under" href="リンク先パス">Content</a></li>-->
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
        </div>
    </header>



    <main>
        @yield('content')
    </main>
</body>


</html>