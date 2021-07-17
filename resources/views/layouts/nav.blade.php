<nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom">
    <div class="container-fluid">
        <a href="" type="button" class="fa fa-bars primary" id="sidebarToggle"></a>
       <!--  <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="btn mainbutton nav-link btn-lg" href="{{route('signup')}}" type="button" style="color:black">Create an Account</a>
                </li>
                <li class="nav-item">
                    <a class="btn outlinebutton nav-link btn-lg" href="{{route('loginprofile')}}" type="button" style="color: #00dd00">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>