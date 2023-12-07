<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Project - vytvorený v inkscape -->
    <link rel="icon" href="{{ asset('obrazky/favicon-16x16.png') }}" type="image/x-icon" sizes="16x16">
    <link rel="icon" href="{{ asset('obrazky/favicon.ico') }}" type="image/x-icon" sizes="32x32">
    <link rel="icon" href="{{ asset('obrazky/favicon-32x32.png') }}" type="image/x-icon" sizes="32x32">

    <!-- Pripojenie css -->
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">


    <!-- Pripojenie css -->
    <link rel="stylesheet" href="{{ asset('css/pop-up-login.css') }}">

    <title>Gitarujeme</title>

</head>
<body>
<div class="vrchStranky">
    <img src="{{ asset('obrazky/1.png') }}" alt="logo" ><h1>REGISTRÁCIA</h1>
</div>

<!-- Trieda menu ktorá má na starosti buttony  -->
<div class="menu">
    <div class="menu">
        <a href="{{ route('domov') }}">Domov</a>
        <a href="{{ route('novinky') }}">Novinky</a>
        <a href="{{ route('forum') }}">Fórum</a>
        <a href="{{ route('akordy') }}">Akordy</a>
        <a class="aktivne" href="{{ route('uzivatel.create') }}">Registrácia</a>
    </div>
</div>

<!-- Formulár na pridanie užívateľov do databázy-->

<form method="post" id=registrationForm action="{{route('uzivatel.store')}}">
   @csrf
    @method('post')
    <div class="center">
        <button id="show-login" type="button"><label>Registrovať</label></button>
    </div>
<!-- x -  tlačidlo na zatvoreie fromuláru -->
    <div class="popup">
    <div class="close-button">&times;</div>
    <div class="formular">
      <!--  <label>meno</label>
        <input type="text" name="meno" placeholder="login"/>
        -->
        <h2>Registrácia</h2>
        <div class="form-element">

            <label>e-mail</label>
            <input type="email" name="email" required placeholder="e-mail"/>

            <label>heslo</label>
            <input type="password" id="password"  aria-describedby="requirements"  required name="heslo" placeholder="heslo"/>

            <button class="show-password" id="show-password" type="button" role="switch" aria-checked="false" aria-label="Show password">Ukáž heslo
            </button>

            <div class="password-requirements">
                <p class="requirement" id="length">Musí obsahovať minimálne 8 znakov</p>
                <p class="requirement" id="lowercase">Musí obsahovať malé písmeno</p>
                <p class="requirement" id="uppercase">Musí obsahovať veľké písmeno</p>
                <p class="requirement" id="number">Musí obsahovať číslo</p>
                <p class="requirement" id="characters">Musí obsahovať špeciálny znak: #.-?!@$%^&*</p>
            </div>

            <div class="input-container">
                <label for="confirm-password">Heslo znova</label>
                <input type="password" id="confirm-password" placeholder="heslo znova" required />
            </div>

            <div class="password-requirements">
                <p class="requirement" id="match">Heslá sa musia zhodovať</p>
            </div>

        </div>

        <div class="submit-container" >
        <button type="submit" id="submit" ><label>Registrovať</label></button>
        </div>

    </div>
    </div>
</form>

<script src="{{ asset('pop-up.js') }}"></script>
</body>
</html>
