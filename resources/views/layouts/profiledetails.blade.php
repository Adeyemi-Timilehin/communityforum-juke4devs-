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
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fontawesome/css/all.css')}}">
        <link href="{{asset('assets/style/styles.css')}}" rel="stylesheet"/>
        <style type="text/css" media="screen">

        .primary{
            color: #00dd00;
        }

        #primary{
            background-color: #212529;
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

        </style>
    </head>
    <body id="primary">
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-dark" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-dark primary">
     
                        <img src="{{('images/logo.png')}}" alt="" width="70px">
                 Juke4Devs
                </div>
                <div class="list-group list-group-flush">
            
                    <a class="bg-dark primary list-group-item list-group-item-action list-group-item-light p-3" href="#!">All Posts</a>
                    <a class="bg-dark primary list-group-item list-group-item-action list-group-item-light p-3" href="#!">Explore</a>
                    <a class="bg-dark primary list-group-item list-group-item-action list-group-item-light p-3" href="#!">Search</a>
                    <a class="bg-dark primary list-group-item list-group-item-action list-group-item-light p-3" href="#!">Notifications</a>
                        
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
         
                <!-- Page content-->
                <div class="container-fluid">
              @yield('contents')
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{asset('assets/script/scripts.js')}}" defer></script>
    </body>
</html>
