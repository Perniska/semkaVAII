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
                    <a href="{{ route('domov') }}"><img src="{{ asset('obrazky/1.png') }}" alt="logo" ></a>
                </div>

                <nav>
                    <a class="aktivne" href="{{ route('domov') }}">Domov</a>
                    <a href="{{ route('novinky') }}">Novinky</a>
                    <a href="{{ route('forum') }}">Fórum</a>
                    <a href="{{ route('akordy') }}">Akordy</a>
                    <a href="{{ route('profil') }}">Prihlásenie</a>
                </nav>
            </div>
        @endif

            @if(session()->has('uzivatel'))
                @php
                    $uzivatel = session('uzivatel');
                @endphp
                <div class="wrapper">
                    <div class="logo">
                        <a href="{{ route('domov', ['uzivatel' => $uzivatel]) }}"><img src="{{ asset('obrazky/1.png') }}" alt="logo" ></a>
                    </div>

                    <nav>
                        <a class="aktivne" href="{{ route('domov', ['uzivatel' => $uzivatel]) }}">Domov</a>
                        <a href="{{ route('novinky', ['uzivatel' => $uzivatel]) }}">Novinky</a>
                        <a href="{{ route('forum', ['uzivatel' => $uzivatel]) }}">Fórum</a>
                        <a href="{{ route('akordy', ['uzivatel' => $uzivatel]) }}">Akordy</a>
                        <a href="{{ route('profil', ['uzivatel' => $uzivatel]) }}">Profil</a>
                    </nav>
                </div>
            @endif

    </header>

    <div class="banner">
        <h2> Nehrá to ako má? zmeň to s Gitarujeme! </h2>
    </div>

    <div class="content">
        <div class="wrapper">
            <h2>História gitary:</h2>
            <div class="obkec">
            <p>Gitara je brnkací strunový hudobný nástroj, ktorý má vypasované telo s bokmi prehnutými dovnútra v páse gitary. Gitara ako brnkací strunový nástroj vznikol podľa znalcov dejín gitary až niekedy v 15. storočí. <br> Samotná gitara teda prešla svojským vývojom. Pôvod gitary je zaznamenaný v Prednej Ázii, kde prvý hudobný nástroj podobný gitare tzv. kinor bol pozorovaný u Sumerov. <br> Gitara sa dá zhotoviť z hocičoho, otázka je, akú kvalitu dosiahneme. Gitary sa robia prevažne na báze dreva, ako to bolo odjakživa. Existujú však gitary na báze syntetických materiálov (uhlíkové vlákno so svojimi dobrými elastickými vlastnosťami – RainSong Graphite Guitars) alebo sa využíva kov – oceľ na stavbu tela gitary (rezofonické gitary, napríklad Dobro, Lap–steel). <br>Bola skonštruovaná dokonca aj gitara s mramorovým telom.</p>
            </div>
            <h2>Typy gitár:</h2>

            <p><strong>Akustická gitara</strong> – je tvorená rezonančnou skrinkou v podobe korpusu, ktorý má za úlohu zvuk zosilniť a vyžiariť do prostredia s adekvátnym zafarbením tónu. Podľa názoru niektorých historikov vznikla gitara v stredovekom Španielsku prestavbou starej fiduly na brnkací nástroj. Akustické gitary sa delia na klasické, inak prezývané aj "španielky" (struny z nylonu (v minulosti zo zvieracích čriev), v počte od 6 vyššie) a gitary s kovovými strunami (obvykle 6 alebo 12). Akustické gitary s kovovými strunami môžeme ďalej rozdeliť na: 1.Jumbo 2.Dreadnought alebo tiež niekedy nazývané Western.</p>
            <div class="obr1"><img src="{{ asset('obrazky/9-2-acoustic-guitar-png-clipart.png') }}" alt="akusticka gitara" ></div>
            <p><strong>Elektrická gitara</strong> – podstatu tóno-tvorného zariadenia tejto gitary tvoria struny z feromagnetického materiálu, ktorých kmitanie je zachytávané snímačmi, ktoré sú prepojené s tzv. efektom (nie nutne), zosilňovačom a reproduktorom. Najčastejšie má 6, 7 alebo 12 strún.</p>
            <div class="obr2"><img src="{{ asset('obrazky/electric_guitar_PNG16.png') }}" alt="elektricka gitara" ></div>
            <p><strong>Basová gitara (basgitara)</strong> – Delia sa taktiež na elektrické a akustické. Basgitara má štyri a viac strún naladených o oktávu nižšie ako na bežnej gitare s primárnym účelom rozširovať zvuk o hlboké tóny.</p>
            <div class="obr3"><img src="{{ asset('obrazky/6-2-bass-guitar-transparent.png') }}" alt="elektricka gitara" ></div>

            <p><strong>Elektro-akustická gitara</strong> – akustická gitara, ktorá je vybavená magnetickým snímačom, mikrofónom alebo piezzo-elektrickým snímačom (väčšinou sa nachádza pod vložkou kobylky – konštrukcia akustickej gitary) z ktorého sú zosnímané vibrácie prenesené cez kábel na výstupný jack gitary alebo častejšie do zabudovaného predzosilňovača v gitare. Ovládacie prvky na predzosilňovači sú – hlasitosť, korekcie (väčšinou basy, stredy a výšky), PHASE (fázovanie) a kontrolná LED dióda pre stav batérie. Tento typ gitary sa využíva v rôznych hudobných žánroch, kde sa vyžaduje zvuk akustickej gitary, no najmä pri živých vystúpeniach, kde je potrebný väčší objem hlasitosti.</p>



            <h2>Údržba gitary:</h2>

            <p>Gitary sa obvykle vyrábajú z materiálov ktoré majú vlastnosť dilatovať (vplyvom tepla a vlhkosti sa sťahujú a rozťahujú. Ideálom preto je, mať gitary v rovnakej teplote na rovnakom mieste kde sa podmienky nemenia (npr: u seba v izbe na svojom mieste a premiestňovať iba za účelom hrania). Realita je ale veľmi ďaleko od ideálu, pretože málokto si gitaru kúpi ako dekoráciu do izby, väčšina ľudí má na nej v pláne hrať, nosiť ju zo sebou... Preto existujú rôzne puzdra na gitaru od lacnejších platených až po pevne neohybné puzdra (záleží na cene). Dobrá rada znie po príchode na miesto hrania je dobre nechať gitaru aspoň 30min nerušene stať (aklimatizovať)... toto zmierni efekt dilatácie a prípadného praskania strún. Vo všeobecnosti sa však neodporúča vystavovať gitaru zvýšenej vlhkosti. Suché drevo ju môže nasať a časom sa môže gitara vydúvať, alebo plesnivieť (nezvrátiteľný stav).</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/KkngvnDeF00" frameborder="0" allowfullscreen></iframe>

            <h2>Opotrebenie gitary:</h2>

            <p>Opotrebenie sa nevyhneme. Na nástroji na ktorom sa hrá bude vždy vidno opotrebenie. Sú komponenty, ktoré vieme vymeniť (struny, ladenie, elektronika) a sú tu tie ktoré sa vymeniť nedajú (telo, hmatník)... V prípade nevymeniteľných komponentov však vieme opotrebenie oddialiť pravidelnou starostlivosťou (čistenie gitary NIE VODOU, ale na sucho.... leštenie hmatníka (sú rôzne prípravky s kyselinou citrónovou, ktorá pomôže hmatník vyčistiť od usadenín a zároveň mu neublíži.</p>

            <h2>Vybavenie:</h2>

            <p><strong>Struny</strong> – je ich veľa druhov a každá gitara má určené v rôznych hrúbkach, ktoré struny môžeme použiť. Vyrábajú sa vo viacerých materiáloch, ako nylon, alebo rôzne pokovené varianty.</p>
            <div class="obr5"><img src="{{ asset('obrazky/23APBNWL3P.png') }}" alt="struny" ></div>

            <p><strong>Kapodaster</strong> – je šikovne zariadenie pripomínajúce štipec, a umožňuje nám transponovať tóninu gitary vyššie bez znalosti stupníc. Upevňuje sa na jednotlivé pražce gitary od vrchu smerom dolu, pri čom platí jeden pražec – o pol tónu vyššia tónina.</p>
            <div class="obr4"><img src="{{ asset('obrazky/whyCapo4.png') }}" alt="capo" ></div>

            <p><strong>Drsátka</strong> – poznáme rôzne druhy podľa materiálu, tvaru a hrúbky. Výber drsátka je individuálny a záleží na tom aké sa vám hodí do ruky, obvykle sa ale hrubšie drsátka používajú na hrubšie struny a naopak.</p>
            <div class="obr6"><img src="{{ asset('obrazky/custom-printed-guitar-picks.png') }}" alt="picks" ></div>

            <p><strong>Kombo</strong> – ide o reproduktor využívaný väčšinou pre gitary. Poznáme aktívne/ pasívne. Pri aktívnom nám stačí elektrická gitara/ elektro-akustická gitara/ basgitara, a kábel. Stačí sa pripojiť a vyladiť zvuk. Pri pasívnom je postup rovnaký, ale v prepojení medzi gitarou a kombom musí byť zosilovač. Medzi ďalšie doplnky patrí obľúbený šlapací pedál, vďaka, ktorému vieme meniť zvuky.</p>
            <div class="obr7"><img src="{{ asset('obrazky/guitar-music-city-cairns-6.png') }}" alt="picks" ></div>

            <p><strong>Aparatúra</strong> – jedná sa už o viacdielné hudobné vybavenie, ktoré v základe pozostáva z: Repro-bední (reproduktorov), ktoré môžu byť aktívne (majú v sebe zabudovanú elektroniku a teoreticky nepotrebujú zosilovač) a pasívnych (musia byť pripojené na zosilovač). Ďalej sú to samozrejme káble, najkvalitnejšie sú tie pozlátené, v dnešnej dobe sa už využíva aj bluetooth prepojenie, ktoré ocenia hlavne muzikanti pohybujúci sa po pódiu. Dôležitou súčasťou je tak isto zosilovač (pri pasívnych reproduktoroch je nevyhnutný), výborný je vo forme mix pultu, kde si vieme zosúladiť a hlasovo vyladiť všetky stopy (spev, gitara, klavír...). Pokiaľ máte speváka bude mikrofón samozrejmosťou, mikrofónov je obrovská škála a je len na vás koľko ste ochotný investovať. Nakoniec Vám chýbajú už len hudobné nástroje a máte základnú aparatúru zostavenú. (doplnky môžu byť: osvetlenie, paro-stroje, kombá, zosilovače...)</p>

        </div>
    </div>

     @if(session()->has('uzivatel'))
         @php
             $uzivatel = session('uzivatel');
         @endphp

             <!-- Váš kód pre prihláseného užívateľa -->
         @include("uzivatelia.profil")
     @else
         <!-- Váš kód pre neprihláseného užívateľa -->
         @include("uzivatelia.registracia")
         @include("uzivatelia.prihlasenie_po_r")
     @endif



 </div>

</body>
</html>
