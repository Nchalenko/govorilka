<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Post;
use Auth;

class CommentController extends Controller
{

    public         $secret       = '6LcsqTgUAAAAANyv7ohJrVsvapxEuuMl37OXsxe_';

    public function comment(Post $post)
    {
        error_log(print_r(\request()->post(),1));

        $post = \request()->post();
        $ip = \request()->ip();

        $recaptcha = new \ReCaptcha\ReCaptcha($this->secret, new \ReCaptcha\RequestMethod\CurlPost());

        $response = $recaptcha->verify($post['g_recaptcha_response'], $ip);


        if (!$response->isSuccess()) {
            throw new \Exception('ReCaptcha was not validated.');
        }
//
//        $this->validate(\request(),
//            [
//                'comment' => 'required',
//                '_token' => 'required',
////                'g-recaptcha-response' => 'required'
//            ]);

        $comment = [
            'post_id' => intval($post->id) ? $post->id : 0,
            'user_id' => intval(Auth::id()) ? Auth::id() : 0,
            'comment' => \request()->post('comment')
        ];

        Comment::create($comment);

        return ['success' => 'good'];
    }

}
