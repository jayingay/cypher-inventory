<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials._head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('layouts.partials._sidebar')
        @include('layouts.partials._navbar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="vue-app">
            @include('flash::message')
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        @include('layouts.partials._footer')
    </div>

    <!-- ./wrapper -->
    @include('layouts.partials._footer-script')
</body>

</html>
