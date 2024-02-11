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
    <link rel="stylesheet" href="{{ asset('css/pop-up-login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Gitarujeme</title>

</head>
<body>


<!-- Formulár na pridanie užívateľov do databázy-->

<form method="post" id=registrationForm action="{{route('register-user')}}">
    @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
        @if(Session::has('fail'))
            <div class="alert alert-fail">{{Session::get('fail')}}</div>
        @endif
   @csrf
    @method('post')
        <div class="">
            <button id="show-login" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                </svg><label> Registrovať</label></button>
        </div>
<!-- x -  tlačidlo na zatvoreie fromuláru -->
    <div class="popup">
    <div class="close-button">&times;</div>
    <div class="formular">

        <h2>Registrácia</h2>
        <div class="form-element">

            <label>e-mail</label>
            <input type="email" name="email" value="{{old('email')}}" required placeholder="e-mail"/>
             <span class="text-danger">@error('email') {{$message}} @enderror </span>
            <label>heslo</label>
            <input type="password" id="password"  value="{{old('password')}}"  aria-describedby="requirements"  required name="heslo" placeholder="heslo"/>
            <span class="text-danger">@error('password') {{$message}} @enderror </span>
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
            <br>
        </div>

    </div>
    </div>
</form>

    <script defer src="{{ asset('pop-up.js') }}"></script>


</body>
</html>
