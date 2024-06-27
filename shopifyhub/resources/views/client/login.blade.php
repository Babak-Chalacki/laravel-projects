@extends('template')
@section('content')
<style>
    body{
        background-color: rgb(155, 169, 221)
    }
</style>
@section('title')
shopify-hub login
@endsection
<div class="row m-5">
    <div class="col m-5"></div>
</div>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                    <form method="POST" action="{{ url("/login") }}">
                        @csrf
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right"> mobile or email <i class="fas fa-user"></i></label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="ume_of_user" required autocomplete="username" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password <i class="fas fa-lock"></i></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label" for="remember">Remember Me</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Login</button>

                                <a class="btn btn-link" href="#">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row m-5">
    <div class="col m-5"></div>
</div>


@endsection


{{--
 $data = request()->all();
 $user = User::where('email', $data['email'])->first();
 if ($user) {
     if (password_verify($data['password'], $user->password)) {
         session()->put('user', $user);
         return redirect()->route('home');
     } else {
         return redirect()->back()->with('error', 'Password is incorrect');
     }
 } --}}
