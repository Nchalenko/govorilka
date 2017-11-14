<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Post;
use Auth;

class CommentController extends Controller
{
    public function comment(Post $post)
    {
        $this->validate(\request(),
            [
                'comment' => 'required',
                'g-recaptcha-response' => 'required'
            ]);

        $comment = [
            'post_id' => intval($post->id) ? $post->id : 0,
            'user_id' => intval(Auth::id()) ? Auth::id() : 0,
            'comment' => \request()->post('comment')
        ];

        Comment::create($comment);

        return ['success' => 'good'];
    }

}
