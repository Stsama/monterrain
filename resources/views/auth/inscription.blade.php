@extends('layouts.app2')

@section('content2')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="signup-form">
                <form action="{{route('inscription-utlisateur')}} " class="mt-5 border p-4 bg-light shadow" method="POST">
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <h4 class="mb-5 text-secondary">Creer un compte</h4>
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label>Nom complet<span class="text-danger">*</span></label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Ex: John Doe">
                            <span class="text-danger">@error('name') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label>Email<span class="text-danger">*</span></label>
                            <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Ex: Johndoe@gmail.com">
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>

                        <div class="mb-3 col-md-12">
                            <label>Password<span class="text-danger">*</span></label>
                            <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="Entrez le mot de passe">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>
                        <div class="col-md-12">
                           <button class="btn btn-primary float-end">S'inscrire</button>
                        </div>
                    </div>
                </form>
                <p class="text-center mt-3 text-secondary">If you have account, Please <a href="{{route('connexion')}} ">Login Now</a></p>
            </div>
        </div>
    </div>
</div>
@endsection