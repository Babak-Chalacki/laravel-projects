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
    <div class="col m-3"></div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>

                <div class="card-body">
                    <form method="POST" action="{{ url("/register") }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name <i class="fas fa-user"></i></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email <i class="fas fa-envelope"></i></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Username <i class="fas fa-user"></i></label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" required autocomplete="username">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password <i class="fas fa-lock"></i></label>

                                <div class="col">
                                    <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                                </div>
                                <div class="col">
                                    <input id="password" type="password" class="form-control" name="password2" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city_id" class="col-md-4 col-form-label text-md-right">City <i class="fas fa-map-marker-alt"></i></label>

                            <div class="col-md-6">
                                <select id="city_id" class="form-control" name="city_id" required>
                                    @foreach ($cities as $city)
                                    <!-- Add city options here -->
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    <!--... -->
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Address <i class="fas fa-map"></i></label>

                            <div class="col-md-6">
                                <textarea id="address" class="form-control" name="address" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile_number" class="col-md-4 col-form-label text-md-right">Mobile Number <i class="fas fa-mobile-alt"></i></label>

                            <div class="col-md-6">
                                <input id="mobile_number" type="tel" class="form-control" name="mobile_number" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Register</button>
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


