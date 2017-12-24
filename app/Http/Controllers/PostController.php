<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [];

        foreach (Post::all() as $key => $post) {
//            if ($key < 3) {
//            $posts[$key]['big_image'] = $post->id . '__big_image.jpg';
//            $posts[$key]['circle_image'] = $post->id . '__circle_image.jpg';
//            $posts[$key]['500_image'] = $post->id . '__500_image.jpg';
                $posts[$key] = $post;
                $posts[$key]['big_image'] = '1__big_image.jpg';
                $posts[$key]['circle_image'] = '1__circle_image.jpg';
                $posts[$key]['500_image'] = '1__500_image.jpg';
//            }
        }


//        error_log(print_r($posts,1));

//        $posts = $posts->all();



//        $result = [
//            'big_image' => $posts,
//            'circle_image' => [],
//            '500_image' => []
//        ];

//        for ($i = 1; $i < count($posts); $i++) {
//            if ($i % 2 === true) {
//                $result['circle_image'] = $posts[$i];
//            } else {
//                $result['500_image'] = $posts[$i];
//            }
//        }
//        $posts = $result;

        return view('home', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
                'title'      => 'required',
                'header'     => 'required',
                'body'       => 'required',
            ]
        );

        $images = [
            'big_image'    => \request()->file('big_image'),
            'circle_image' => \request()->file('circle_image'),
            '500_image'    => \request()->file('500_image'),
        ];

        $post            = \request()->post();
        $post['user_id'] = 1;

        if (isset($post['id'])) {
            $return = Post::find($post['id']);
            $return->title = $post['title'];
            $return->header = $post['header'];
            $return->body = $post['body'];
            $return->save();
        } else {
            $post['is_active'] = 1;
            $post = Post::create($post);
            $post['id'] = $post->id;
        }

        foreach ($images as $key => $image) {
            if ($image) {
                $image->move('images', $post['id'] . '__' . $key . '.jpg');
            }
        }

        return redirect('/posts/' . $post['id']);
    }

    public function show(Post $post)
    {
        return view('post.post', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }

    public function change_status(Post $post)
    {
        $return = Post::find($post->id);
        if ($post->is_active) {
            $return->is_active = 0;
        } else {
            $return->is_active = 1;
        }
        $return->save();

        return redirect('admin/posts');
    }
}
