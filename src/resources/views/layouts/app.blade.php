<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flea-market</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAABkCAMAAABjCSjjAAAAWlBMVEX///8BJTABIi0EP0kYNkAJKTQQLjnv8fLb4OLI0NJkeYARnaJWbXXn6+wxS1X3+PkSmqQkQEkBHCdKY2vR2NqUo6hxhIu2wMOir7OElZo+WGEUmKa+x8qqtrpXr8XvAAADcElEQVRoge2X63LkJhBGEQGECKAgLrpEev/XzNcaz87Y3pm1t1LJ/OjjKg/m0jqCbmwLwTAMwzAMwzAMwzAMwzAM87t0LwTLPIJlHvFBRsrPU6T80fu++bHz8kHf5Ru3xt08eZv3TEZKtXl3wxuE64xSpqOVslNovgUx6LwswrjS6NRnjzZKa/WGNpdPQ7GvcS4rMeepjDR+Dv0ds0IIN1s7O4Uoqe3WLpke3MVlOOKptdViS0vd5EtVNDBvfh9OjtQujdUg9mHt3ozU69A0lu2HeSIjVe3f30FVo0+EGYoIF4/R7qXvGwVxsKaY2tt+OMo4x8kJko+l934vVoylHKmKvoBqzBoojqhGH+OKhbm3n7bmJiPNOr53GdvU+WBdSs0OEcNDTnEdy4bzWkIdD3r2PtaktsG2OxkTo+vtFpOs4oggyWxDU8mVspkFMlL+QiYXIeyxEDNtka1JYuWCLDHeqTj0bZJTKj1iRTtkCysJ2ThJubkNMntUKtveT5dnSTlVsaQz0WBFZ55dQkjoK/dUhjbGeqOJzQqB45BdmgW2h9JvyoG2ROoKva6NVeENO93G4cxtTHCiR3qUsffyegqQCZQzTe7jai7zIEN9VjyRkWoW5z5TPeaAjdlgkfYfMr5/kxGLMjNe3/V70ji7y3hHMuUnMuWUGc5E+bIMnivsSgWt8OJCDFQsMFzpzZWCYPATMmseq4kBo3EIeWpjofpHuZ7HlBId073MEVNMajqQumccfR5TSk+PSWLbcTYhhOJxFIJyBcWCN4/TFOc5QnZR08WpjYuiBas8U2TSdXfylsD3MqhIAtIb4qDuv57ABBK+XEoJxGGcmxvo4c6Oh1ttX+mUWkflXZKpPbazjiVPP5cZVuBUmsfBubnflV6+UtraDwG3RziUwm1i83ml6W22IdgakeEO42imaSs7fkZZY1KqNL57PbkA4y7uhVZmO5AMbheMhjnJ7aB5uChNtafMOeGRDGyib2DTxrXmr/djys5t5zoaR1PK5DONmuwjjndDmiWNpPMbHqKyP29rnzX5+hMaSLm5nKTUG1ZdJzyUoZKguqZU0fquV19/qWH88+83efaesp+io4++9Ic4j3jlPyH+X1jmEa8lI18I8ccLIf78Nn99g7+/xX/yLzTDMAzDMAzDMAzDMAzDMP8a/wB8DUwF+JJRpwAAAABJRU5ErkJggg==" alt="代替テキスト" width="250" height="150">
                <nav>
                    <ul class="header-nav">
                        <li class="header-nav__item-search">
                            <form class="search-form">
                                <div class="search-form__item">
                                    <input class="search-form__item-input" type="text" placeholder="なにをお探しですか？" />
                                </div>
                            </form>
                        </li>
                        @guest
                        <li class="header-nav__item-login">
                            <a class="header-nav__link" href="/login">ログイン</a>
                        </li>
                        <li class="header-nav__item-register">
                            <a class="header-nav__link" href="/register">会員登録</a>
                        </li>
                        @endguest
                        @if (Auth::check())
                        <li class="header-nav__item-logout">
                            <form class="logout-form" action="/logout" method="post">
                                @csrf
                                <button class="logout__button">ログアウト</button>
                            </form>
                        </li>
                        <li class="header-nav__item-mypage">
                            <a class="mypage__link" href="/mypage">マイページ</a>
                        </li>
                        @endif
                        <li class="header-nav__item-list">
                            <a class="header-nav__link-list" href="/list">出品</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
            
</body>
</html>