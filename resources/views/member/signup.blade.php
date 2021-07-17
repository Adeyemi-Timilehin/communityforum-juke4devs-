@extends('layouts.member')
@section('content')
    
<body class="dark font mt-3">
    <div class="container-fluid">
        <img src="{{ 'images/logo.png' }}" alt="" width="50px">
        <a class="navbar-brand text-success" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <ul class="nav justify-content-end">
            <li class="nav-item active d">
                <a href="{{ route('homepage') }}" class="primary btn btn-outline-success">Home</a>
            </li>
            <li class="nav-item active d">
                <a href="{{ route('loginprofile') }}" class="primary btn btn-outline-success">Login</a>
            </li>
        </ul>
        <div class="row">
            <div class="row">
                <div class="col">

                </div>
                <div class=" justify-content-end">

                    <!-- i've been looking for a way to make this login allign to the right -->
                </div>
            </div>

        </div>

        <main class="py-1 mt-5">
            <div class="container-fluid ">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card primary dark" style="border: 1px solid #00dd00">
                            <div class="card-header">
                                <div class="text-center">
                                    <h3>Create an Account</h3>
                                    <h5> {{ $page_title }} </h5>
                                </div>
                                <?php
                                $value = session('msg');
                                if (isset($value)) {
                                echo " <p class='text-center mb-3  p-3'> " . $value . '</p>';
                                }

                                $r = $errors->all();
                                if (!empty($r)) {
                                echo "<div class='alert alert-danger text-dark'>";
                                    foreach ($r as $key => $value) {
                                    echo "<p>$value</p>";

                                    # code...
                                    }
                                    echo '</div>';
                                }
                                ?>
                            </div>
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <div class="form-group row my-2">
                                        <label for="username"
                                            class="col-md-4 col-form-label text-md-right">Username</label>
                                        <div class="col-md-6">
                                            <input id="username" type="text" class="form-control" name="username"
                                                value="{{ old('username') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-md-4 col-form-label text-md-right">Firstname</label>
                                        <div class="col-md-6">
                                            <input id="fname" type="text" class="form-control" name="fname"
                                                value="{{ old('fname') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="lname"
                                            class="col-md-4 col-form-label text-md-right">Lastname</label>
                                        <div class="col-md-6">
                                            <input id="lname" type="text" class="form-control" name="lname"
                                                value="{{ old('lname') }}">

                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="phone" class="col-md-4 col-form-label text-md-right">Phone
                                            Number</label>
                                        <div class="col-md-6">
                                            <input id="phone" type="text" class="form-control" name="phone"
                                                value="{{ old('phone') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-3">
                                                    <input type="radio" name="gender" value="female" id="female">
                                                    <label for="female">Female</label>
                                                </div>
                                                <div class="col-4">
                                                    <input type="radio" name="gender" value="male" id="male"><label
                                                        for="male" class="ml-4">Male</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="dob" class="col-md-4 col-form-label text-md-right">Date of
                                            Birth</label>
                                        <div class="col-md-6">
                                            <input id="dob" type="date" class="form-control" name="dob">
                                        </div>
                                    </div>
                                    <div class="form-group row my-2 pic">
                                        <label for="pix" class="col-md-4 col-form-label text-md-right">Picture</label>
                                        <div class="col-md-6">
                                            <div class="input-group ">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"
                                                        id="inputGroupFileAddon01">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                        aria-describedby="inputGroupFileAddon01" name="pix">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="address"
                                            class="col-md-4 col-form-label text-md-right">Address</label>
                                        <div class="col-md-6">
                                            <input name="address" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row my-2">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-right">Password</label>
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="password2" class="col-md-4 col-form-label text-md-right">Confirm
                                            Password</label>
                                        <div class="col-md-6">
                                            <input id="password2" type="password" class="form-control" name="password2">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0 mt-5">
                                        <div class="col-md-6 offset-md-4 text-center">
                                            <button type="submit" class="btn mainbutton w-50 signup"><b>Sign
                                                    Up</b></button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <p class="col-6 mx-auto mt-3">Already have an account? <a
                                                href="{{ route('loginprofile') }}" class="text-light">Login here</a>
                                        </p>
                                        <div class="ml-5">
                                            By signing up, signing in or continuing, I agree to
                                            Juke4dev’s <a href="#" class="text-light">Terms of Use</a> and <a href="#"
                                                class="text-light">Privacy Policy.</a>
                                        </div>
                                    </div>
                                </form>
                                @endsection