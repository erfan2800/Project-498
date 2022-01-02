<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('admin/css/mdb.min.css')}}" rel="stylesheet" >
    <link href="{{asset('admin/css/sidenav.css')}}" rel="stylesheet" >
    <link href="{{asset('admin/admin/css/style.css')}}" rel="stylesheet" >
    <link href="{{asset('admin/css/responsive.css')}}" rel="stylesheet" >
    <link href="{{asset('admin/css/datatables.min.css')}}" rel="stylesheet" >
    <link href="{{asset('admin/css/datatables-select.min.css')}}" rel="stylesheet" >


</head>
<body class="fix-header fix-sidebar">
<div id="main-wrapper" class="">
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-collapse">
                <ul class="navbar-nav mr-auto mt-md-0">
                    <li class="nav-item "> <a class="nav-link nav-toggler  hidden-md-up  waves-effect waves-dark" href="javascript:void(0)"><i class="fas  fa-bars"></i></a></li>
                    <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="fas fa-bars"></i></a> </li>
                    <li class="nav-item mt-3">ADMIN</li>
                </ul>
                <ul class="navbar-nav my-lg-0">
                    <li class="nav-item"><a href="{{url('/admin-login')}}" class="btn btn-sm btn-danger">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="left-sidebar pr-5">
        <div class="scroll-sidebar">
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-devider mt-0" style="margin-bottom: 5px"></li>

                    <li> <a href="{{url('/dashboard')}}" ><span> <i class="fas fa-home"></i> </span><span class="hide-menu">Home</span></a></li>


                    <li> <a href="{{url('/visitors')}}" ><span> <i class="fas fa-users"></i> </span><span class="hide-menu">Users</span></a></li>


                    <li> <a href="{{url('/posts')}}" ><span> <i class="fas fa-book-open"></i> </span><span class="hide-menu">Posts</span></a></li>

                </ul>
            </nav>
        </div>
    </aside>
@yield('adminContent')

</div>

<script type="text/javascript" src="{{asset('admin/js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/jquery.slimscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/sidebarmenu.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/sticky-kit.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/custom.min-2.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/datatables-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/axios.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/custom.js')}}"></script>


@yield('script')

</body>
</html>
