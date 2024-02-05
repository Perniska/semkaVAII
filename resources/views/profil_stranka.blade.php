<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Gitarujeme</title>

    <link rel="icon" href="{{ asset('obrazky/favicon-16x16.png') }}" type="image/x-icon" sizes="16x16">
    <link rel="icon" href="{{ asset('obrazky/favicon.ico') }}" type="image/x-icon" sizes="32x32">
    <link rel="icon" href="{{ asset('obrazky/favicon-32x32.png') }}" type="image/x-icon" sizes="32x32">

    <link rel="stylesheet" href="{{ asset('css/dmovsky.css') }}">
</head>

<body>
<div class="box">
    <header>
        @if(!session()->has('uzivatel'))
            <div class="wrapper">
                <div class="logo">
                    <a href="{{ route('domov') }}"><img src="{{ asset('obrazky/1.png') }}" alt="logo"></a>
                </div>
                <nav>
                    <a href="{{ route('domov') }}">Domov</a>
                    <a href="{{ route('novinky') }}">Novinky</a>
                    <a href="{{ route('forum') }}">Fórum</a>
                    <a href="{{ route('akordy') }}">Akordy</a>
                    <a class="aktivne" href="{{ route('profil') }}">Prihlásenie</a>
                </nav>
            </div>
        @endif

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
                    <a href="{{ route('novinky', ['uzivatel' => $uzivatel]) }}">Novinky</a>
                    <a href="{{ route('forum', ['uzivatel' => $uzivatel]) }}">Fórum</a>
                    <a href="{{ route('akordy', ['uzivatel' => $uzivatel]) }}">Akordy</a>
                    <a class="active" href="{{ route('profil', ['uzivatel' => $uzivatel]) }}">Profil</a>
                </nav>
            </div>
        @endif
    </header>
</div>


@if(session()->has('uzivatel'))
    @php
        $uzivatel = session('uzivatel');
    @endphp

        <!-- Pripojenie css -->
    <link rel="stylesheet" href="{{ asset('css/pop-up-login.css') }}">
    <form method="post" id=registrationForm action="{{route('uzivatel.update', ['uzivatel' => $uzivatel])}}">
        @csrf
        @method('PUT')
    <div class="center">
        <button id="show-login" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-gear" viewBox="0 0 16 16">
                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
            </svg><label>Upraviť údaje</label></button>
    </div>
    <!-- x -  tlačidlo na zatvoreie fromuláru -->
    <div class="popup" style="  top:10% ;right:10%;">
        <div class="close-button">&times;</div>
        <div class="formular">

            <h2>Zmena údajov</h2>
            <div class="form-element">
                <p>Zadajte nové používateľské meno </p>

                <input type="text" name="meno" id="zmena_mena" placeholder="zadajte nové meno"  value="{{$uzivatel->meno}}"/>
                <span class="text-danger">@error('meno') {{$message}} @enderror </span>
                <p>Zadajte nové používateľské heslo</p>

                <input type="password" id="password" value=""  aria-describedby="requirements"  required name="heslo" placeholder="heslo"/>
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
                <button type="submit" id="submit" ><label>Uložiť</label></button>
                <br>
            </div>
        </div>
    </div>
    </form>



    <form method="post" id=registrationForm action="{{route('uzivatel.destroy', ['uzivatel' => $uzivatel])}}">
        @csrf
        @method('delete')
        <!-- x -  tlačidlo na zatvoreie fromuláru -->
        <div class="popup">
            <!-- Login form in your HTML -->
            <div class="formular">
                <h2>!!Odstránenie účtu!!</h2>
                <div class="form-element">
                    <input type="email" name="email" id="email" value="{{$uzivatel->email}}"  />
                    @error('email')
                    <p class="error">{{ $message }}</p>
                    @enderror

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
    <script defer src="{{ asset('pop-up.js') }}"></script>

        <!-- Váš kód pre prihláseného užívateľa -->
    @include("uzivatelia.profil")
@else
    @include("uzivatelia.prihlasenie_po_r")
@endif

</body>

</html>
