<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Demande;
use App\Models\Domaine;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;
use DB;

class PostController extends Controller
{
    //

    public function index(){
        return view('index');
    }

    public function inscription(Request $request){

        $request->validate([

        ]);
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

    public function domaines(){

        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }
        

        $domaines = Domaine::all();
        return view('domaines',\compact('domaines','data'));
    }
    public function AddDomaine(Request $request)
    {
         $request->validate([
            'region'=> 'required',
            'ville'=> 'required',
            'quartier'=> 'required',
            'superficie'=> 'required',
            'prix'=> 'required',
            'proprio'=> 'required',
            'description'=> 'required',
            'image'=> 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
         ]);
        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('imagess'), $file_name);

         $domaine = new Domaine();
         $domaine->region = $request->region;
         $domaine->ville = $request->ville;
         $domaine->quartier = $request->quartier;
         $domaine->superficie = $request->superficie;
         $domaine->prix = $request->prix;
         $domaine->proprio = $request->proprio;
         $domaine->description = $request->description;
         $domaine->image = $file_name;

         $domaine->save();
         
        return redirect('domaines')->with('succes', 'Domaine Addedd!');

        // $requestData = $request->all();
        // $fileName = time().$request->file('image')->getClientOriginalName();
        // $path = $request->file('image')->storeAs('images', $fileName, 'public');
        // $requestData["image"] = 'storage/'.$path;
        // Domaine::create($requestData);
        // return redirect('domaines')->with('flash_message', 'Employee Addedd!');

    }



    public function posts(){
        $posts = Domaine::all();
        return view('posts',compact('posts'));
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('connexion');
        }
    }

    // pour le crud


    public function afficher($id)
    {
        $domaine = Domaine::findorfail($id);
        return view('affiche',\compact('domaine'));
    }

    public function editpost($id)
    {
        $domaine = Domaine::find($id);
        return view('edit-post',\compact('domaine'));
    }
    public function updatepost(Request $request, $id)
    {
        $domaine = Domaine::find($id);
        $input = $request->all();
        $domaine->update($input);
        return redirect('domaines')->with('flash_message', 'domaine Updated!');
    }
    public function deletepost($id)
    {
        Domaine::destroy($id);
        return \back();
    }
    public function users ()
    {
        $users = User::all();
        return view('utilisateurs',compact('users'));
    }

    public function deleteuser($id)
    {
        User::destroy($id);
        return \back();
    }
    
}
