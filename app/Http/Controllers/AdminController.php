<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin_index');
    }

    public function posts()
    {
        return view('admin_posts', ['posts' => Post::all()]);
    }

    public function add_post()
    {
        return view('admin_posts');
    }

    public function edit()
    {
    }

    public function delete_post()
    {
        return view('admin_posts');
    }

    public function contacts()
    {
        return view('admin_contacts', ['contacts' => Contact::all()]);
    }

    public function change_status()
    {
        return view('admin_posts');
    }

    public function edit_about()
    {
        return view('admin_posts');
    }

}
