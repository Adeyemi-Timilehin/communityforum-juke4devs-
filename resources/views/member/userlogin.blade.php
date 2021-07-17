@extends('layouts.member')
@section('content')

    <div class="container-fluid">

        <img src="{{ 'images/logo.png' }}" alt="" width="60px">
        <a class="navbar-brand text-success" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <ul class="nav justify-content-end">
            <li class="nav-item active d">
                <a href="{{ route('homepage') }}" class="primary btn btn-outline-success">Home</a>
            </li>
            <li class="nav-item active d">
                <a href="{{ route('signup') }}" class="primary btn btn-outline-success">Register</a>
            </li>
        </ul>

        <main class="py-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card primary dark" style="border: 1px solid #00dd00">
                            <div class="card-header">
                                <h5 class="text-center">Welcome Back Dev. Login to get Started!</h5>
                               @if (isset($message))
                                   {{ $message }}
                               @endif
                                <?php
                                $value = session('msg');
                                if (isset($value)) {
                                    echo "   <p class='text-center mb-3  p-3'> " .   $value . "</p>" ;
            
                                }
            
            ?>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <div class="form-group row">

                                        <div class="form-group row my-2">
                                            <label for="username"
                                                class="col-md-4 col-form-label text-md-right">Username</label>
                                            <div class="col-md-7">
                                                <input id="username" type="text" class="form-control" name="username"
                                                    value="{{ old('username') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row my-2">
                                            <label for="password"
                                                class="col-md-4 col-form-label text-md-right">Password</label>
                                            <div class="col-md-7">
                                                <input id="password" type="password" class="form-control" name="password">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0 mt-2">
                                            <div class="col-md-6 offset-md-1 text-center">
                                                <button type="submit" class="btn mainbutton"><b>Login</b></button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
