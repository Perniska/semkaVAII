<?php

namespace App\Http\Controllers;
use App\Models\Odpovede;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{

    public function pridat_comment(Request $request)
    {
        $uzivatel = $request->session()->get('uzivatel');

        if ($uzivatel) {
            $comment = new Comment;
            $comment->meno = $uzivatel->meno;
            $comment->email = $uzivatel->email;
            $comment->comment_body = $request->comment_body;
            $comment->save();

            return redirect()->back();
        } else {

            return redirect()->route('login');
        }
    }
    public function commenty() {
        $comments = Comment::all();
        $replies = Odpovede::all();

        return view('forum', compact('comments', 'replies'));
    }
    public function editComment(Request $request)
    {
        $commentId = $request->input('commentId');
        $editedCommentText = $request->input('editedCommentText');

        $comment = Comment::find($commentId);

        $comment->comment_body = $editedCommentText;
        $comment->save();

        return redirect()->back();
    }





    public function add_reply(Request $request)
    {

        $user = $request->session()->get('uzivatel');

        if ($user) {
            $reply = new Odpovede;
            $reply->meno = $user->meno;
            $reply->email = $user->email;
            $reply->comment_id = $request->commentID;
            $reply->odpoved = $request->odpoved;
            $reply->save();

            return redirect()->back();
        } else {

            return redirect()->route('login');
        }




    }

    public function deleteComment(Request $request)
    {
        $commentId = $request->input('commentId');

        Comment::where('id', $commentId)->delete();
        return response()->json(['success' => true]);
    }
}







