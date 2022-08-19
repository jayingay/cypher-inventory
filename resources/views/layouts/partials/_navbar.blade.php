<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <p class=" nav-link"><i class="fa fa-user"></i> &nbsp; {{ Auth::user()->name ?? '' }}</p>

        <a href="{{ route('users.logout')}}" class="mr-2 mt-1">
            <button class="btn btn-dark"><i class="fas fa-sign-out-alt"></i>&nbsp; Logout</button>
        </a>
       
    </ul>
</nav>
<!-- /.navbar -->
