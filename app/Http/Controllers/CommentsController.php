<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentsFormRequest;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function newComment(CommentsFormRequest $request) {
        $comment = new Comment(array(
            'post_id' => $request->get('post_id'),
            'content' => $request->get('content'),
            'user_id' => -1
        ));

        $comment->save();

        return redirect()->back()->with('status', '¡Su comentario se creó satisfactoriamente!');
    }
}
