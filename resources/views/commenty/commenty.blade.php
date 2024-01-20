<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/komenty.css') }}">
</head>
<body>


<div class="comments">
    <form action="{{ route('comments.store') }}" method="post">
        @csrf
        <h1>Komentáre</h1>
        <textarea name="comment_body" placeholder="Napíšte nám čo máte na mysli..."></textarea>
        <input type="email" name="email" id="email" value="{{$uzivatel->email}}"/>
        <label for="post_id">Post ID:</label>
        <input type="text" name="post_id" value="12344045"> <!-- Replace with your actual post ID -->
    </form>
    <button type="submit" class="btn">Komentovať</button>
    <div class="reply">
        <h1>Všetky komentáre</h1>
    </div>

    <div >
        <b>Yamin</b>
        <p>Toto je môj prvý komentár</p>
        <a href="javascript:void(0);" onclick="reply(this)">Odpovedať</a>

    </div>

    <div >
        <b>Shakil</b>
        <p>Toto je môj druhý komentár</p>
        <a href="javascript:void(0);" onclick="reply(this)">Odpovedať</a>

    </div>

    <div >
        <b>Yamin</b>
        <p>Toto je môj tretí komentár</p>
        <a href="javascript:void(0);" onclick="reply(this)">Odpovedať</a>

    </div>

    <div style="display: none" class="odpoved">
        <textarea style="height: 100px; width: 500px;" placeholder="Napíš čo máš na srdiečku"></textarea>
        <br>
        <button type="submit" class="btn">Odpovedať</button>
    </div>

</div>

<script type="text/javascript">

    function reply(caller){
        $('.odpoved').insertAfter($(caller)).show();
    }

</script>




</body>
</html>
