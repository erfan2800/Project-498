<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USDMS</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-theme8.css')}}">
</head>
<body>
<div class="form-body">
    @csrf
    <div class="website-logo">
        <a href="{{url('/login')}}">
            <div class="logo">
                <img class="logo-size" src="{{asset('images/logo-light.svg')}}" alt="">
            </div>
        </a>
    </div>
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
                <h1 class="text-center">University social data management system</h1>

            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <div class="website-logo-inside">
                        <a href="{{url('/login')}}">
                            <div class="logo">

                            </div>
                        </a>
                    </div>
                    <div class="page-links">
                        <a href="{{url('/login')}}">Login</a><a href="{{url('/registerTeacher')}}" class="">Teachers Register</a><a href="{{url('/registerStudent')}}" class="">Students Register</a>
                    </div>

                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif

                    @if(Session::get('fail'))
                        <div class="alert alert-success">
                            {{Session::get('fail')}}
                        </div>
                    @endif


                    <form action="{{route('Layout.save')}}" method="post" >
                        @csrf
                        <input class="form-control" type="text" name="name" placeholder="Full Name" value="{{old('name')}}" >
                          <span class="text-danger">@error ('name'){{ $message }} @enderror</span>

                        <input class="form-control" type="email" name="email" placeholder="E-mail Address" value="{{old('email')}}" >
                        <span class="text-danger">@error ('email'){{ $message }} @enderror</span>

                        <input class="form-control" type="text" name="stdId" placeholder="Student Id" value="{{old('stdId')}}" >
                        <span class="text-danger">@error ('stdId'){{ $message }} @enderror</span>

                        <input class="form-control" type="password" name="password" placeholder="Password" >
                        <span class="text-danger">@error ('password'){{ $message }} @enderror</span>
                        <div class="form-button">
                            <button id="submit" type="submit" class="ibtn">Register</button>
                        </div>
                    </form>
                    <div class="other-links">


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/register8.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Oct 2021 14:24:57 GMT -->
</html>
