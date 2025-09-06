<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function add()
    {
        return 'add blog form';
    }

    public function store()
    {
        return 'store';
    }

    public function edit()
    {
        return 'edit';
    }

    public function update()
    {
        'return update';
    }

    public function delete()
    {
        'return delete';
    }
}
