<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Session;

class authentification extends Controller
{
    public function connexion()
    {
        return view('auth.connexion');
    }
    public function inscription()
    {
        return view('auth.inscription');
    }
    public function registerUser(Request $request)
    {   
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:5|max:12'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $resultat = $user->save();
        if($resultat){
            return back()->with('success','you have registed successfuly');
        }else{
            return back()->with('fail','Somthing wrong ');

        }
    }

    public function LoginUser(Request $request){
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:5|max:12'
        ]);

        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('domaines');
            }else{
                return back()->with('fail','this password is not correct');
            };
        }else{
            return back()->with('fail','this email is not registered');
        }
    }
    public function handle(Request $request, Closure $next){
        if(!Session()->has('loginId')){
            return \redirect('auth.connexion')->with('fail','You have to login first');
        }
        return $next($request);
    }
}
