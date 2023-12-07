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



<form method="post" id=registrationForm action="{{route('uzivatel.destroy', ['uzivatel' => $uzivatel])}}">
    @csrf
    @method('delete')
    <div class="center">
        <button id="show-login" type="button"><label>Vymazať</label></button>
    </div>
    <!-- x -  tlačidlo na zatvoreie fromuláru -->
    <div class="popup">
        <div class="close-button">&times;</div>
        <!-- Login form in your HTML -->
        <div class="formular">
            <h2>Prihlásenie</h2>
            <div class="form-element">
                <input type="email" name="email" id="email" value="{{$uzivatel->email}}"  />
                @error('email')
                <p class="error">{{ $message }}</p>
                @enderror

                <label for="meno">Meno</label>
                <input type="text" name="meno" id="meno" value="{{$uzivatel->meno}}"  />
                @error('meno')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>




            <div class="submit-container">
                <button type="submit" id="submit"  value="Update"><label>Vymazanie</label></button>
            </div>
        </div>

    </div>
</form>





<script src="{{ asset('pop-up.js') }}"></script>

</body>


</html>
