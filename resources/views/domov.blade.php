<!DOCTYPE html>
<!-- Špecifikácia jazyka kódu -->
<html lang="en">

<!-- Začiatok hlavičky -->
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Názov stránky -->
    <title>Gitarujeme</title>

    <!-- Project - vytvorený v inkscape -->
    <link rel="icon" href="{{ asset('obrazky/favicon-16x16.png') }}" type="image/x-icon" sizes="16x16">
    <link rel="icon" href="{{ asset('obrazky/favicon.ico') }}" type="image/x-icon" sizes="32x32">
    <link rel="icon" href="{{ asset('obrazky/favicon-32x32.png') }}" type="image/x-icon" sizes="32x32">


    <!-- Pripojenie css -->
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">


</head>
<body>

<div class="vrchStranky">
    <img src="{{ asset('obrazky/1.png') }}" alt="logo" ><h1>DOMOV</h1>
</div>

<!-- Trieda menu ktorá má na starosti buttony  -->

<div class="menu">
    <a class="aktivne" href="{{ route('domov') }}">Domov</a>
    <a href="{{ route('novinky') }}">Novinky</a>
    <a href="{{ route('forum') }}">Fórum</a>
    <a href="{{ route('akordy') }}">Akordy</a>
    <a href="{{ route('uzivatel.create') }}">Registrácia</a>

</div>


</body>
</html>
