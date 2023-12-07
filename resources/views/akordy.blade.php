<!DOCTYPE html >
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
    <img src="{{ asset('obrazky/1.png') }}" alt="logo" ><h1>AKORDY</h1>
</div>

<!-- Trieda menu ktorá má na starosti buttony  -->
<div class="menu">
    <div class="menu">
        <a href="{{ route('domov') }}">Domov</a>
        <a href="{{ route('novinky') }}">Novinky</a>
        <a href="{{ route('forum') }}">Fórum</a>
        <a class="aktivne" href="{{ route('akordy') }}">Akordy</a>
        <a href="{{ route('uzivatel.create') }}">Registrácia</a>
    </div>
</div>

<div class="gitara">
    <img src="{{ asset('obrazky/polka_gitary_vekt_graf.png') }}" alt="gitara vytvorena v innkscape">
    <p>  | | | | | | 1<br>
        - - - - - -  <br>
        | | | | | | 2<br>
        - - - - - -  <br>
        | | | | | | 3<br>
        - - - - - -  <br>
        | | | | | | 4<br>
        - - - - - -  <br>
        | | | | | | 5<br>
        - - - - - -  <br>
        | | | | | | 6<br>
        - - - - - -  <br>
        | | | | | | 7<br>
        - - - - - -  <br>
        | | | | | | 8<br>
        - - - - - -  <br>
        | | | | | | 9<br>
        - - - - - -  <br>
        | | | | | | 10<br>
        - - - - - -  <br>
        | | | | | | 11<br>
        - - - - - -  <br>
        | | | | | | 12<br>
        - - - - - -  <br>
        | | | | | | 13<br>
        - - - - - -  <br>
        | | | | | | 14<br>
        - - - - - -  <br>
        | | | | | | 15<br>
        - - - - - -  <br>
        | | | | | | 16<br>
        - - - - - -  <br>
        | | | | | | 17<br>
        - - - - - -  <br>
        | | | | | | 18<br>
        - - - - - -  <br>
        | | | | | | 19<br>
        E H G D A E  </p>


</div>

<div class="akordy">
    <h1>Akordy pre začiatočníkov</h1>
    <p>S týmito akordami rozhodne zahviezdiš na každej opekačke !<br>
        Prečo ? Obvykle stačia 3 - 4 akordy z tohto zoznamu ,aby sa dala zahrať veľká časť pesničiek.
        Tak neváhaj a pusti sa do učenia!
    </p>
    <img src="{{ asset('obrazky/akord a.jpg') }}"  alt="jednoduche akordy">
    <img src="{{ asset('obrazky/akord c.jpg') }}"  alt="jednoduche akordy">
    <img src="{{ asset('obrazky/akord d.jpg') }}"  alt="jednoduche akordy">
    <img src="{{ asset('obrazky/akord e.jpg') }}"  alt="jednoduche akordy">
    <img src="{{ asset('obrazky/akord g.jpg') }}"  alt="jednoduche akordy">

</div>

</body>
</html>
