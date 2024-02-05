<!doctype html>
<html lang="en">
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Gitarujeme</title>

    <link rel="icon" href="{{ asset('obrazky/favicon-16x16.png') }}" type="image/x-icon" sizes="16x16">
    <link rel="icon" href="{{ asset('obrazky/favicon.ico') }}" type="image/x-icon" sizes="32x32">
    <link rel="icon" href="{{ asset('obrazky/favicon-32x32.png') }}" type="image/x-icon" sizes="32x32">


    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
</head>
<body>

<div class="profil" >
        <div class="wrapper_1">
            <div class="oslovenie">
                <p>Vitajte, {{ $uzivatel->email }}!</p>
            </div>

            <div class="tlacidlo">
                <button><a href="logout">Odhlásenie</a></button>
            </div>
        </div>

    </div>




</body>
</html>
