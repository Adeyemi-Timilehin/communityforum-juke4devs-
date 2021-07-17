@extends('layouts.userLayout')
@section('content')
    



    
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="container-fluid">
                    <a href="" type="button" class="fa fa-bars primary" id="sidebarToggle"></a>
                    <!--  <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            @foreach ($details as $detail)
                        </ul>
                        <img src="{{ url('/') }}/uploads/{{ $detail->picture }}" class="rounded-circle"
                            width="50" id="img">

                    </div>
                </div>
            </nav>
            @endforeach

            <!-- Page content-->
            <div class="container-fluid">
                <div class="row">
                
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6 primary">
                                <h5>Posts</h5>
                            </div>
                            <div class="col-md-6 primary">
                                <h5> All Feeds </h5>
                            </div>
                        </div>
                        <div class="row user">
                            
                            <div class="col-md-12">
                                @foreach ($post as $post)
                        
                           
                                <div class="card user my-3">
                                    <div class="card-body dark secondary">
                                        <div style="display: flex">
                                            <div>
                                                <img src="{{ url('/') }}/uploads/{{ $post->picture }}" width="50" alt="username">
                                            </div>
                                            <div class="mx-2">
                                                <span class="primary"><b> {{ $post->Username }}</b></span>
                                                <p> {{ $post->created_at }}</p>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <h4 class="primary"><b><a href="show/{{ $post->post_id }}">{{ $post->post_title }}</a></b></h4>
                                            <p>{{ $post->post_description }}</p>
                                        </div>
                                        <div class="mt-3 ">
                                            <a href="user_login.html"><span><span class="far fa-heart primary"></span>
                                                    40 Reactions </span></a>
                                            <a href="user_login.html"><span><span class="fas fa-message primary"></span>
                                                    120 comments </span></a>
                                            <a href="user_login.html"><span><span class="fas fa-flag primary"></span>
                                                    Flag </span></a>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="card user my-3">
                                    <div class="card-body dark secondary">
                                        <div style="display: flex">
                                            <div>
                                                <img src="images/default_user.jpeg" width="50" alt="username">
                                            </div>
                                            <div class="mx-2">
                                                <span class="primary"><b> Username</b></span>
                                                <p> Date Posted</p>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h4 class="primary"><b>Things you can do with Bootstrap 5.0</b></h4>
                                        </div>
                                        <div class="mt-3 ">
                                            <a href="user_login.html"><span><span class="far fa-heart primary"></span>
                                                    40 Reactions </span></a>
                                            <a href="user_login.html"><span><span class="fas fa-message primary"></span>
                                                    120 comments </span></a>
                                            <a href="user_login.html"><span><span class="fas fa-flag primary"></span>
                                                    Flag </span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card user my-3">
                                    <div class="card-body dark secondary">
                                        <div style="display: flex">
                                            <div>
                                                <img src="images/default_user.jpeg" width="50" alt="username">
                                            </div>
                                            <div class="mx-2">
                                                <span class="primary"><b> Username</b></span>
                                                <p> Date Posted</p>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h4 class="primary"><b>Things you can do with Bootstrap 5.0</b></h4>
                                        </div>
                                        <div class="mt-3 ">
                                            <a href="user_login.html"><span><span class="far fa-heart primary"></span>
                                                    40 Reactions </span></a>
                                            <a href="user_login.html"><span><span class="fas fa-message primary"></span>
                                                    120 comments </span></a>
                                            <a href="user_login.html"><span><span class="fas fa-flag primary"></span>
                                                    Flag </span></a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mt-4">
                            <h5 class="secondary text-center my-4"><b> Popular Tags<b></h5>
                               
                                @foreach ($category as $category)
                                <div class="secondary text-center">
                                    <p> {{ $category->category_name }}</p>
                                  
                                </div>
                                @endforeach
                             
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12 mt-5 d-none" id="set" >
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success"> {{ strtoUpper($detail->Username)  }}
                        {{ '@' . $detail->Firstname }}_{{ $detail->Lastname }}</li>
                    <li class="list-group-item list-group-item-success">Dashboard</li>
                    <li class="list-group-item list-group-item-success"><a href="edit/{{$detail->member_id  }}">Settings</a></li>
                    <li class="list-group-item list-group-item-success"><form action="{{ route('logout') }}" method="post">@csrf <button class="btn mainbutton" type="submit">Logout</button></form></li>
                </ul>
            </div>
            <div class="col-md-8 shadow-lg p-3 list-group mb-5 bg-white d-none  rounded" id="dash">
                <h3>Dashboard</h3>
                <div class="dashbord">
                    <div class="border p-2 border-success">
                        <h3>Total Post</h3>
                        <p class="text-center">Value</p>
                    </div>
                    <div class="border p-2 border-success">
                        <h3>Total Post view</h3>
                        <p class="text-center">Value</p>
                    </div>
                    <div class="border p-2 border-success">
                        <h3>Total Comments</h3>
                        <p class="text-center">Value</p>
                    </div>
                </div>
          
            </div>
           
            
        </div>
   
        @endsection