<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/komenty.css') }}">
    <title>Gitarujeme</title>

    <link rel="icon" href="{{ asset('obrazky/favicon-16x16.png') }}" type="image/x-icon" sizes="16x16">
    <link rel="icon" href="{{ asset('obrazky/favicon.ico') }}" type="image/x-icon" sizes="32x32">
    <link rel="icon" href="{{ asset('obrazky/favicon-32x32.png') }}" type="image/x-icon" sizes="32x32">

    <link rel="stylesheet" href="{{ asset('css/dmovsky.css') }}">
</head>

<body>
<div class="box">
<header>
    @if(session()->has('uzivatel'))
        @php
            $uzivatel = session('uzivatel');
        @endphp
    <div class="wrapper">
        <div class="logo">
            <a href="{{ route('domov', ['uzivatel' => $uzivatel]) }}"><img src="{{ asset('obrazky/1.png') }}" alt="logo"></a>
        </div>
        <nav>
            <a href="{{ route('domov', ['uzivatel' => $uzivatel]) }}">Domov</a>
            <a class="aktivne" href="{{ route('novinky', ['uzivatel' => $uzivatel]) }}">Novinky</a>
            <a href="{{ route('forum', ['uzivatel' => $uzivatel]) }}">Fórum</a>
            <a href="{{ route('akordy', ['uzivatel' => $uzivatel]) }}">Akordy</a>
            <a href="{{ route('profil', ['uzivatel' => $uzivatel]) }}">Profil</a>
        </nav>
    </div>
    @endif

        @if(!session()->has('uzivatel'))
            <div class="wrapper">
                <div class="logo">
                    <a href="{{ route('domov') }}"><img src="{{ asset('obrazky/1.png') }}" alt="logo"></a>
                </div>
                <nav>
                    <a href="{{ route('domov') }}">Domov</a>
                    <a class="aktivne" href="{{ route('novinky') }}">Novinky</a>
                    <a href="{{ route('forum') }}">Fórum</a>
                    <a href="{{ route('akordy') }}">Akordy</a>
                    <a href="{{ route('profil') }}">Prihlásenie</a>
                </nav>
            </div>
        @endif
</header>
</div>
<div style=" margin-top: 17vh ;font-size: 13px ; position: absolute ;width: 400px">
    <h1 style="background-color: #dddddd ;">Zoznam Interpretov :</h1>
    <ul>
        @foreach($interprets as $interpret)
            <li><a  style=" text-decoration: none;color: ghostwhite ;font-size: 25px" href="{{ route('interpret.piesne', ['interpret' => $interpret]) }}">{{ $interpret->name }}</a></li>
        @endforeach
    </ul>
</div>


@if(session()->has('uzivatel'))
    @php
        $uzivatel = session('uzivatel');
    @endphp


    @include("uzivatelia.profil")
@else

@endif

</body>
</html>

