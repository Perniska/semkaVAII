<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/komenty.css') }}">
</head>
<body>

<div class="comments">
    @if(session()->has('uzivatel'))
        @php
            $uzivatel = session('uzivatel');
        @endphp
        <form action="{{ route('pridat_comment')}}" onsubmit='console.log("Form comment submitted");' method="post">
            @csrf
            <h1>Komentáre</h1>
            <textarea style="border-radius:10px; resize: none;" name="comment_body" placeholder="Napíšte nám čo máte na mysli..."></textarea>
            <button type="submit" class="btn">Komentovať</button>
        </form>
    @endif

    <div class="reply">
        <h1>Všetky komentáre:</h1>
    </div>

    @foreach ($comments as $comment)
        <div style="padding-right: 70%">
            <br>
            <p style="font-size: 15px;">email: <b>{{ $comment->email }}</b></p>
            <p id="comment_{{ $comment->id }}" style="border-radius:10px; text-align:left; min-height:50px; background-color: white; display: block; font-family: 'Consolas', sans-serif; width: 800px; height: fit-content">{{ $comment->comment_body }}</p>
            @if(session()->has('uzivatel'))
            <div style="float: right">
                <a style="padding: 5px 5px 5px ; cursor:pointer; font-size: 15px ;border-radius:10px; color: white ;background-color: #4CAF50; width: fit-content " onclick="odkrySkryFormular('{{ $comment->id }}')">Odpovedať</a>
            </div>
                @if($uzivatel->email==$comment->email)
            <div style="float: left">
                <a style="padding: 5px 5px 5px ; cursor:pointer; font-size: 15px ;border-radius:10px; color: white ;background-color: darkred; width: fit-content " onclick="editComment('{{ $comment->id }}')">Editovať</a>
            </div>
                <br>
                @endif
                <br>
            @endif

        </div>

        <form class="formularNaSkrytie" action="{{ route('add_reply') }}" onsubmit='console.log("Form reply submitted");' method="post" id="odpovedFormular_{{ $comment->id }}">
            @csrf
            <div class="odpovede">
                <input type="hidden" id="commentID" name="commentID" value="{{ $comment->id }}">
                <textarea style="border-radius:10px ;resize: none;" name="odpoved"  placeholder="Napíš čo máš na srdiečku"></textarea>
                <button  type="submit" class="btn">Odpovedať</button>
            </div>
        </form>
            @if(session()->has('uzivatel'))
                @if($uzivatel->email==$comment->email)
             <form id="editCommentForm" action="{{ route('edit_comment') }}" method="post" onclick="odkrySkryFormular('{{ $comment->id }}')" style="display: none;" >

            @csrf

            <input type="hidden" name="commentId" id="editedCommentId">
            <textarea style="border-radius:10px ;resize: none;" name="editedCommentText" id="editedCommentText"></textarea>
            <button style="padding: 5px 5px 5px ; cursor:pointer; font-size: 15px ;border-radius:10px; color: white ;background-color: cadetblue; width: fit-content "  type="submit">Uložiť zmeny</button>
            </form>
                @endif
            @endif

            <!-- Add this block inside your foreach loop where you display comments -->
            @if(session()->has('uzivatel'))
                @if($uzivatel->email==$comment->email)
                    <div style="float: right ;margin-top: -40px">
                        <a style="padding: 5px 5px 5px ; cursor:pointer; font-size: 15px ;border-radius:10px; color: white ;background-color: #ff6347; width: fit-content " onclick="deleteComment('{{ $comment->id }}')">Vymazať</a>
                    </div>
                @endif
            @endif

        @foreach ($replies as $reply)
            @if($reply->comment_id==$comment->id)
                <div style="padding-right: 50% ;padding-bottom: 20px">
                    <br>
                    <p style="font-size: 15px;">email:<b>{{ $reply->email }}</b></p>
                    <p style="border-radius:10px; margin-left:80px; font-size: 15px; text-align:left; min-height:50px; background-color: white ; display: block; font-family: 'Consolas', sans-serif; width: 500px ;height: fit-content">{{ $reply->odpoved }}</p>
                </div>
            @endif
        @endforeach
    @endforeach
</div>

<script>
    function odkrySkryFormular(commentId) {
        var formular = document.getElementById('odpovedFormular_' + commentId);
        if (formular.style.display === 'none') {
            formular.style.display = 'block';
        } else {
            formular.style.display = 'none';
        }
    }
</script>

<script>
    function editComment(commentId) {
        // text komentára, ktorý chcem editovať
        var commentText = document.getElementById('comment_' + commentId).innerText;

        // editačný formulár a nastavenie aktuálneho textu komentára
        document.getElementById('editCommentForm').style.display = 'block';
        document.getElementById('editedCommentId').value = commentId;
        document.getElementById('editedCommentText').value = commentText;
    }
</script>

<script>
    function editAndReply(commentId) {

        editComment(commentId);

        odkrySkryFormular(commentId);
    }
</script>

<script>
    function deleteComment(commentId) {
        if (confirm('Naozaj chcete odstániť tento komentár?')) {
            $.ajax({
                url: "{{ route('delete_comment') }}",
                type: 'POST',
                data: { _token: '{{ csrf_token() }}', commentId: commentId },
                success: function(response) {
                    if (response.success) {

                        $('#comment_' + commentId).remove();
                    }
                },
                error: function(xhr) {

                }
            });
        }
    }
</script>

</body>
</html>



