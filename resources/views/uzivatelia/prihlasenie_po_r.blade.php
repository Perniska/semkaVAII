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
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <title>Gitarujeme</title>

</head>
<body>

<form method="post" id="loginForm" action="{{route('login-user')}}">
    @csrf

    <div class="static">
        <!-- Login form in your HTML -->
        <div class="formular_2">
            <div class="form-element">
                <input type="email" name="email" id="email_1" placeholder="email"   value="{{old('email')}}"/>
                <span class="text-danger">@error('email') {{$message}} @enderror </span>

                <span class="text-danger">@error('heslo') {{$message}} @enderror </span>
                <input type="password" name="heslo" id="heslo_1" placeholder="heslo" value="{{old('heslo')}}"/>

            </div>

            <div class="submit-container-login">
                <button type="submit" id="submit_1" value="Update">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                    </svg>
                    <label>Prihlásiť</label>
                </button>
            </div>
        </div>
    </div>
</form>


</body>
</html>
