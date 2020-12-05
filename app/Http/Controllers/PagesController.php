<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function login(){
        return view('pages.login');
    }

    public function register(){
        return view('pages.register');
    }

    public function newsfeed(){
        return view('pages.newsfeed');
    }

    public function content(){
        return view('pages.content');
    }

    public function article(){
        return view('pages.article');
    }

    public function readonly(){
        return view('pages.readonly');
    }

}

?>