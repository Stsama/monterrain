<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $posts = [
            "mon super titre n°1",
            "mon super titre n°2"
        ];
        return view('index',\compact('posts'));
    }

    public function inscription(){
        return view('inscription');
    }

    public function show($id){
        $posts = [
            1 =>"mon super titre premier",
            2=> "mon super titre second"
        ];
        $post = $post[$id] ?? 'pas de titre';
        return view('show-post',\compact('post'));
    }
    public function connexion(){
        return view('connexion');
    }

    public function contact(){
        return view('contact');
    }
    public function acheteurs(){
        return view('acheteurs');
    }
    
    public function vendeurs(){
        return view('vendeurs');
    }

    public function domaines(){
        return view('domaines');
    }
}
