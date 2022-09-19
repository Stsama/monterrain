@extends('layouts.app2')

@section('content2')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="mb-3">
                <h3>Connexion</h3>
            </div>
            <form accept="" class="shadow p-4">                  
                <div class="mb-3">
                    <label for="username">Email</label>
                    <input type="email" class="form-control" name="username" id="username" placeholder="Ex: johndoe@gmail.com">
                </div>

                <div class="mb-3">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" name="password" id="Password" placeholder="Ex: mot de passe">
                </div>

                <label class="mb-3">
                    <input type="checkbox" name="RememberMe"> Remember Me
                </label>

                <a href="#" class="float-end text-decoration-none">Reset Password</a>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>

                <hr>

                <p class="text-center mb-0">If you have not account <a href="{{route('inscription')}} ">Register Now</a></p>
                
            </form>
        </div>
    </div>
</div>
<div class="maskerrrr"></div>
@endsection