<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Juke4Devs</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">
        <link href="css/styles.css" rel="stylesheet"/>
        
        <link href="{{asset('assets/style/styles.css')}}" rel="stylesheet"/>
        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,300&display=swap" rel="stylesheet">

        <style type="text/css" media="screen">

        .font{
            font-family: 'Roboto Mono', monospace;
        }

        .primary{
            color: #00dd00;
        }

        #primary{
            background-color: #212529;
        }  

        .secondary{
            color: white;
        }  
        
        .mainbutton{
            border: 1px solid #00dd00;
            background-color: #00dd00;
            color: #000000;
        }

        .outlinebutton{
            color: #00dd00;
            background-color: #212529;
            border-color: #00dd00;

        }

        .dark{
            background-color: #212529;
        }

        li{
            margin-right: 20px;
        }

        .user{
            style="height: 200px;
        }

        .user p{
            font-size: 13px;
        }

        a{
            color:white;
            text-decoration: none;
        }

       a:hover{
        color:#00dd00; 
    }

        </style>
    </head>
    <body id="primary" class="font">
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-dark" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-dark primary">  <img src="{{ 'images/logo.png' }}" alt="" width="100px"></div>
                <div class="list-group list-group-flush">
                    <a class="bg-dark  primary list-group-item list-group-item-action list-group-item-light p-3" href="#!"><span class="fa fa-home"></span> Home</a>
                    <a class="bg-dark primary list-group-item list-group-item-action list-group-item-light p-3" href="#!"><span class="fa fa-pen"></span> Write Something</a>
                   <!--  <a class="bg-dark primary list-group-item list-group-item-action list-group-item-light p-3" href="#!"><span class="fa fa-bars"></span> All Posts</a> -->
                    <a class="bg-dark primary list-group-item list-group-item-action list-group-item-light p-3" href="#!"><span class="fa fa-compass"></span> Explore</a>
                    <a class="bg-dark  primary list-group-item list-group-item-action list-group-item-light p-3" href="#!"><span class="fa fa-search"></span> Search</a>
                    <a class="bg-dark primary list-group-item list-group-item-action list-group-item-light p-3" href="#!"><span class="fa fa-bell"></span> Notifications</a>
                    <div class="card">
                        <div class="card-body dark secondary rounded-bottom rounded-top pb-0">
                            <p><b class="primary">Juke4Devs</b> is a large community of designers,developers, and Tech-enthausiast across Nigeria.<br><b>You are not ALONE!</b></p> 
                            <a href="{{route('signup')}}" class="btn mainbutton" ><b> Create an Account</b></a>
                             <a href="{{route('loginprofile')}}" class="btn primary justify-content-center"><b> Login</b></a>
                        </div>
                    </div>      
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="container-fluid">
                        <a href="" type="button" class="fa fa-bars primary" id="sidebarToggle"></a>
                       <!--  <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button> -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                    <a class="btn mainbutton nav-link btn-lg" href="{{route('signup')}}" type="button" style="color:black"><b>Create an Account</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn outlinebutton nav-link btn-lg" href="{{route('loginprofile')}}" type="button" style="color: #00dd00">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
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
                                                <a href="user_login.html"><span><span class="far fa-heart primary"></span> 40 Reactions </span></a>
                                                <a href="user_login.html"><span><span class="fas fa-message primary"></span> 120 comments </span></a>
                                                <a href="user_login.html"><span><span class="fas fa-flag primary"></span> Flag </span></a>    
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
                                                <a href="user_login.html"><span><span class="far fa-heart primary"></span> 40 Reactions </span></a>
                                                <a href="user_login.html"><span><span class="fas fa-message primary"></span> 120 comments </span></a>
                                                <a href="user_login.html"><span><span class="fas fa-flag primary"></span> Flag </span></a>    
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
                                                <a href="user_login.html"><span><span class="far fa-heart primary"></span> 40 Reactions </span></a>
                                                <a href="user_login.html"><span><span class="fas fa-message primary"></span> 120 comments </span></a>
                                                <a href="user_login.html"><span><span class="fas fa-flag primary"></span> Flag </span></a>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"> 
                          <div class="mt-4">
                              <h5 class="secondary text-center my-4"><b> Popular Tags<b></h5>
                              <div class="secondary">
                                    <p> #Javascript</p>
                                    <p> #Python</p>
                                    <p> #Jquery</p>
                                    <p> #Html</p>
                                    <p> #CSS</p>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="{{asset('js/app.js') }}" defer></script>
        <script src="{{asset('assets/script/scripts.js')}}" defer></script>
    </body>
</html>
