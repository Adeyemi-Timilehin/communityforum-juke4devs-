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
            
                    <a class="bg-dark primary list-group-item list-group-item-action list-group-item-light p-3" href="#" id="dashboard">DASHBOARD</a>
                    <a class="bg-dark primary list-group-item list-group-item-action list-group-item-light p-3" href="#" id="reg">REGISTERED USERS</a>
                    <a class="bg-dark primary list-group-item list-group-item-action list-group-item-light p-3" href="#" id="post">VIEW POST</a>
                    <a class="bg-dark primary list-group-item list-group-item-action list-group-item-light p-3" href="#" id="cat">ADD CATEGORY</a>
                        
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
               
                <div class="container-fluid">
<h2 class="text-center primary">ADMIN DASHBOARD</h2>
<div class="text-success">
  @if (isset($message))
  {{ $message }}     
  @endif
 
</div>
<div class="container-fluid">
    <div class="row mt-5">
       
        <div class="col-md-8 shadow-lg p-3 list-group mb-5 bg-white d-none rounded" id="dash">
           <div class="dashbord">
           <div class="border p-2 border-success">
            <h3>Total Users</h3>
            <p class="text-center">Value</p>
           </div>
           <div class="border p-2 border-success">
           <h3>Total Post</h3>
           <p class="text-center">Value</p>
           </div>
            <div class="border p-2 border-success">
            <h3>Total Comments</h3>
            <p class="text-center">Value</p>
            </div>
            <div class="border p-2 border-success">
            <h3>Total Questions</h3>
            <p class="text-center">Value</p>
            </div>
        </div>
        </div>
        <div id="view" class="d-none col-md-8 shadow-lg p-3 list-group mb-5 bg-white rounded">
            <h3 class="bg-dark primary p-3 mb-4 text-center">Registered Users</h3>
            <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Users</th>
                    <th scope="col">Activate</th>
                    <th scope="col">Deactivate</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div id="user" class="col-md-8 shadow-lg p-3 list-group d-none mb-5 bg-white rounded ">
            <h3 class="bg-dark primary p-3 mb-4 text-center">View Post</h3>
            <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Delete</th>
                    <th scope="col">View</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
        </div>
      <form action="/cat" method="POST" id="category" class="d-none">
        @csrf
      <label class="primary">Category</label>
      <input type="text" class="form-control mb-2" name="category">
      <div class="col-8 mx-auto">
      <button type="submit" class="btn btn-success w-50">Add Category</button> 
    </div>
      </form> 
</div>
    </div>

</div>
<script src="js/js/jquery-3.6.0.js"></script>
    <script src="js/js/popper.min.js"></script>
    <script src="js/js/bootstrap.js"></script>

    <script>
        $(document).ready(function(){
            $("#dashboard").click(function(){
          
                $("#dash").removeClass("d-none");
                $("#user").addClass("d-none");
                $("#view").addClass("d-none");
                $("#category").addClass("d-none");
            })
            $("#reg").click(function(){
              $("#dash").addClass("d-none");
                $("#view").addClass("d-none");
                $("#category").addClass("d-none");
                $("#user").removeClass("d-none");
            })
            $("#post").click(function(){
              $("#dash").addClass("d-none");
                $("#user").addClass("d-none");
                $("#view").removeClass("d-none");
                $("#category").addClass("d-none");
                
            })
            $("#cat").click(function(){
              $("#category").removeClass("d-none");
              $("#dash").addClass("d-none");
                $("#user").addClass("d-none");
                $("#view").addClass("d-none");
              
            })
        })
        </script>
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
