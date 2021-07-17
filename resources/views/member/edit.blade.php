@extends('layouts.member')
@section('content')
    
<body class="dark font mt-3">
    <div class="container-fluid">
        <img src="{{ URL('images/logo.png') }}" alt="" width="50px">
        <a class="navbar-brand text-success" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
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
                                    <h3>Update Your Account</h3>
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
                                @foreach ($member as $member)
                                    
                               
                                <form action="update/{{ $member->member_id }}" method="post" enctype="multipart/form-data">

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <div class="form-group row my-2">
                                        <label for="username"
                                            class="col-md-4 col-form-label text-md-right">Username</label>
                                        <div class="col-md-6">
                                            <input id="username" type="text" class="form-control" name="username"
                                                value="{{ $member->Username }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-md-4 col-form-label text-md-right">Firstname</label>
                                        <div class="col-md-6">
                                            <input id="fname" type="text" class="form-control" name="fname"
                                                value="{{ $member->Firstname }}">
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="lname"
                                            class="col-md-4 col-form-label text-md-right">Lastname</label>
                                        <div class="col-md-6">
                                            <input id="lname" type="text" class="form-control" name="lname"
                                                value="{{ $member->Lastname }}">

                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="phone" class="col-md-4 col-form-label text-md-right">Phone
                                            Number</label>
                                        <div class="col-md-6">
                                            <input id="phone" type="text" class="form-control" name="phone"
                                                value="{{ $member->PhoneNumber }}">
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email"
                                                value="{{ $member->emailaddress }}" required autocomplete="email" autofocus disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-3">
                                                    <input type="radio" name="gender" value="female" id="female" {{ ($member->Gender=='female'?'checked':'') }}>
                                                    <label for="female">Female</label>
                                                </div>
                                                <div class="col-4">
                                                    <input type="radio" name="gender" value="male" id="male" {{ ($member->Gender=='male'?'checked':'') }} ><label
                                                        for="male" class="ml-4">Male</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="dob" class="col-md-4 col-form-label text-md-right">Date of
                                            Birth</label>
                                        <div class="col-md-6">
                                            <input id="dob" type="date" class="form-control" name="dob" value="{{ $member->dob }}">
                                        </div>
                                    </div>
                                    <div class="form-group row my-2 pic">
                                        
                                        <label for="pix" class="col-md-4 col-form-label text-md-right">Picture</label>
                                        <div class="col-md-6">
                                            <img src="{{ url('/') }}/uploads/{{ $member->picture }}" class="rounded-circle"
                                        width="100" id="img">
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
                                            <input name="address" class="form-control" value="{{ $member->member_address }}">
                                        </div>
                                    </div>
                                    @endforeach
                               
                                    <div class="form-group row mb-0 mt-5">
                                        <div class="col-md-6 offset-md-4 text-center">
                                            <button type="submit" class="btn mainbutton w-50 signup"><b>Update</b></button>
                                        </div>
                                    </div>
                               
                                </form>
                                @endsection