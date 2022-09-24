<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use App\Models\Demande;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function inscription(Request $request){

        $request->validate([

        ]);

        // User::create([
        //     'nom'=> $request->nom,
        //     'prenom' => $request->prenom,
        //     // 'telephone' => $request->telephone,
        //     'email' => $request->email,
        // ]);
        return view('inscription');
    }

    public function show($id){
        // $post = Domaine::where('region','=','Cayman Islands')->first();
        
        $post = Domaine::findorfail($id);
        return view('show-post',\compact('post'));
    }
    public function connexion(){
        return view('connexion');
    }

    public function contact(){
        return view('contact');
    }
    public function acheteurs(){
        $users = User::all();
        // $users = User::with('domaines')->get();
        return view('acheteurs',\compact('users'));
    }
    
    public function vendeurs(){
        // $users = User::with('demandes')->get();
        // $users = User::all();
        return view('vendeurs');
    }

    public function domaines(){
        $domaines = Domaine::all();
        return view('domaines',\compact('domaines'));
    }
    public function AddDomaine(Request $request)
    {
        // $post = new Domaine();
        // $post->region = $request->region;
        // $post->ville = $request->ville;
        // $post->quartier = $request->quartier;
        // $post->superficie = $request->superficie;
        // $post->prix = $request->prix;
        // $post->proprio = $request->proprio;
        // $post->description = $request->description;
        // $post->save();
        Domaine::create([
            'region'=> $request->region,
            'ville' => $request->ville,
            'quartier' => $request->quartier,
            'superficie' => $request->superficie,
            'prix' => $request->prix,
            'proprio' => $request->proprio,
            'description' => $request->description
        ]);
        dd('Dommaine ajouté avec succès');
    }

    public function posts(){
        $posts = Domaine::all();
        return view('posts',compact('posts'));
    }
}
