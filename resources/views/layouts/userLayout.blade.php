@include('layouts.component.header')
<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-dark" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-dark primary"> <img src="{{ URL('images/logo.png' )}}" alt=""
                width="100px"></div>
        <div class="list-group list-group-flush">
            <a class="bg-dark  primary list-group-item list-group-item-action list-group-item-light p-3"
                href="{{ route('homepage') }}"><span class="fa fa-home"></span> Home</a>
            <a class="bg-dark primary list-group-item list-group-item-action list-group-item-light p-3"
                href="{{ route('post') }}"><span class="fa fa-pen"></span> Write Something</a>
            <a class="bg-dark  primary list-group-item list-group-item-action list-group-item-light p-3"
                href="#!"><span class="fa fa-search"></span> Search</a>

            <div class="card">
                <div class="card-body dark secondary rounded-bottom rounded-top pb-0">
                    <p><b class="primary">Juke4Devs</b> is a large community of designers,developers, and
                        Tech-enthausiast across Nigeria.<br><b>You are not ALONE!</b></p>
                   
                </div>
            </div>
        </div>
    </div>
@yield('content')
@include('layouts.component.footer')