@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <form action="" class="mt-5 border p-4 bg-light shadow">
                        <h4 class="mb-5 text-secondary">Creer un compte</h4>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label>Nom complet<span class="text-danger">*</span></label>
                                <input type="text" name="fname" class="form-control" placeholder="Ex: John Doe">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label>Telephone<span class="text-danger">*</span></label>
                                <input type="tel" name="Lname" class="form-control" placeholder="Ex: +228 92 00 00 00">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label>Email<span class="text-danger">*</span></label>
                                <input type="email" name="Lname" class="form-control" placeholder="Ex: Johndoe@gmail.com">
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Password<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" placeholder="Entrez le mot de passe">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label>Confirm Password<span class="text-danger">*</span></label>
                                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirmez le mot de passe">
                            </div>
                            <div class="col-md-12">
                            <button class="btn btn-primary float-end">S'inscrire</button>
                            </div>
                        </div>
                    </form>
                    <p class="text-center mt-3 text-secondary">If you have account, Please <a href="#">Login Now</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection