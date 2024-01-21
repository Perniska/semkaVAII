<?php

namespace App\Http\Controllers;
use App\Models\Odpovede;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{

    public function pridat_comment(Request $request)
    {
        // Získání údajů o uživateli z session
        $uzivatel = $request->session()->get('uzivatel');

        // Pokud $uzivatel není null, můžete pokračovat
        if ($uzivatel) {
            $comment = new Comment;
            $comment->meno = $uzivatel->meno;
            $comment->email = $uzivatel->email;
            $comment->comment_body = $request->comment_body; ///tohoto nemchytat...to jedine funguje :D
            $comment->save();

            return redirect()->back();
        } else {
            // Uživatel není přihlášen, můžete přijmout další opatření
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

        // Find the comment by ID
        $comment = Comment::find($commentId);

        // Update the comment text
        $comment->comment_body = $editedCommentText;

        // Save the changes
        $comment->save();

        return redirect()->back();
    }





    public function add_reply(Request $request)
    {
        // Validation

        // Get user data from session
        $user = $request->session()->get('uzivatel');

        // If $user is not null, continue
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
        // Implement logic to delete the comment from the database
        Comment::where('id', $commentId)->delete();
        return response()->json(['success' => true]);
    }
}







