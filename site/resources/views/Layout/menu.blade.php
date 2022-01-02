<nav class="navbar navbar-expand navbar-dark bg-dark usdm-nav-top p-0">
    <div class="container">
        <a class="navbar-brand mr-2" href="{{url('/')}}"><img class="rounded-circle" width="34"  src="{{asset('images/Cityuinv-logo.png')}}" alt="">
        </a>
        <form class="d-none d-sm-inline-block form-inline mr-auto my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control shadow-none border-0" placeholder="Search people & post..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <ul class="navbar-nav ml-auto d-flex align-items-center">

            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <i class="fas fa-search mr-2"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-right p-3 shadow-sm animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control border-0 shadow-none" placeholder="Search people, jobs and more..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}"><span class="d-none d-lg-inline">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="attendance.html"><span class="d-none d-lg-inline">Attendance</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('/privacy')}}"><span class="d-none d-lg-inline">Privacy</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('blog')}}"><span class="d-none d-lg-inline">Blog</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact.html"><span class="d-none d-lg-inline">Contact</span></a>
            </li>

            <li class="nav-item dropdown no-arrow mx-1 usdm-list-dropdown">
                <a class="nav-link dropdown-toggle" href="{{url('/message')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope"></i>
                    <span class="badge badge-danger badge-counter">8</span>
                </a>

                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow-sm">
                    <h6 class="dropdown-header">
                        Message Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="{{url('/message')}}">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="{{asset('images/erfan.jpg')}}" alt="">
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="font-weight-bold overflow-hidden">
                            <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                            <div class="small text-gray-500">Erfan · 58m</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="{{url('/message')}}">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="{{asset('images/atikur.jpg')}}" alt="">
                            <div class="status-indicator"></div>
                        </div>
                        <div class="overflow-hidden">
                            <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                            <div class="small text-gray-500">Atik · 1d</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="{{url('/message')}}">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="{{asset('images/erfan.jpg')}}" alt="">
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="font-weight-bold overflow-hidden">
                            <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                            <div class="small text-gray-500">Erfan · 58m</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="{{url('/message')}}">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="{{asset('images/atikur.jpg')}}" alt="">
                            <div class="status-indicator"></div>
                        </div>
                        <div class="overflow-hidden">
                            <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                            <div class="small text-gray-500">Atik · 1d</div>
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="{{url('/message')}}">Read More Messages</a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1 usdm-list-dropdown">
                <a class="nav-link dropdown-toggle" href="notifications.html"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-bell"></i>

                    <span class="badge badge-info badge-counter">6</span>
                </a>

                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow-sm">
                    <h6 class="dropdown-header">
                        Alerts Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="notifications.html">
                        <div class="mr-3">
                            <div class="icon-circle bg-primary">

                                <i class="feather-download-cloud text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 12, 2021</div>
                            <span class="font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, libero!</span>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="notifications.html">
                        <div class="mr-3">
                            <div class="icon-circle bg-success">
                                <i class="feather-edit text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 7, 2021</div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, nisi!
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="notifications.html">
                        <div class="mr-3">
                            <div class="icon-circle bg-warning">
                                <i class="feather-folder text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 2, 2021</div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, quas.
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="notifications.html">Show All Alerts</a>
                </div>
            </li>

            <li class="nav-item dropdown no-arrow ml-1 usdm-profile-dropdown">
                <a class="nav-link dropdown-toggle pr-0" href="{{url('/profile')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(@!Session::get('LoggedUser')->photo)
                        <img src="{{asset('images/demoImg.jpg')}}" height="30" width="30" name="photo" class="img-fluid rounded-circle" alt="Responsive image">
                    @else
                        <img src="{{asset('photos/'.@Session::get('LoggedUser')->photo)}}" height="30" width="30"  name="photo" class="img-fluid rounded-circle" alt="Responsive image">
                    @endif
                </a>

                <div class="dropdown-menu dropdown-menu-right shadow-sm">
                    <div class="p-3 d-flex align-items-center">
                        <div class="dropdown-list-image mr-3">
                            @if(@!Session::get('LoggedUser')->photo)
                                <img src="{{asset('images/demoImg.jpg')}}"   name="photo" class="img-fluid rounded-circle" alt="Responsive image">
                            @else
                                <img src="{{asset('photos/'.@Session::get('LoggedUser')->photo)}}" height="30" width="30"  name="photo" class="img-fluid rounded-circle" alt="Responsive image">
                            @endif
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="font-weight-bold">
                            <div class="text-truncate">{{@Session::get('LoggedUser')->name}}</div>

                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href=" {{url('/editProfile')}}"><i class="feather-user mr-1"></i> Edit Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{asset('/login')}}"><i class="feather-log-out mr-1"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
