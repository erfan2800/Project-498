@extends('Layout.app')
@section('content')
    <div class="py-4">
        <div class="container">
            <div class="row">

                <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
                    <div class="box shadow-sm border rounded bg-white mb-3 usdm-share-post">
                        <ul class="nav nav-justified border-bottom usdm-line-tab" id="myTab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="feather-clipboard"></i> Write an article</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="feather-image"></i> Upload a photo</a>

                            </li>

                        </ul>
                        <form action="{{ route('Layout.insertPost') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="userId" value="{{ @Session::get('LoggedUser')->id }}">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="p-3 w-100">
                                        <input type="file" name="photo">
                                        <span class="text-danger">@error ('photo'){{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="p-3 w-100">
                                        <textarea placeholder="Write an article..." name="text" class="form-control border-0 p-0 shadow-none" rows="3"></textarea>
                                        <span class="text-danger">@error ('text'){{ $message }} @enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="border-top p-3 d-flex align-items-center">

                                <div class="flex-shrink-1">
                                    <button type="submit" class="btn btn-primary btn-sm">Post Status</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="mb-3 shadow-sm rounded box bg-white usdm-slider-main">
                        <div class="usdm-slider">
                            <div class="usdm-slider-item">

                            </div>

                        </div>
                    </div>
                    @foreach($data as $v_data)
                        <div class="box mb-3 shadow-sm border rounded bg-white usdm-post">
                            <div class="p-3 d-flex align-items-center border-bottom usdm-post-header">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="{{asset('photos/'.@Session::get('LoggedUser')->photo)}}" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">{{ $v_data->name }}</div>
                                    <div class="small text-gray-500">Student of City University</div>
                                </div>
                                <span class="ml-auto small">3 hours</span>
                            </div>
                            <div class="p-3 border-bottom usdm-post-body">
                                <p>{{ $v_data->text }}</p>
                                <img src="{{asset('photos/'.$v_data->photo)}}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="p-3 border-bottom usdm-post-footer">
                                <a href="#" class="mr-3 text-secondary"><i class="far fa-thumbs-up text-info"></i> 16</a>
                                <a href="#" class="mr-3 text-secondary"><i class="fas fa-comment-alt text-info"></i> 8</a>
                                <a href="#" class="mr-3 text-secondary"><i class="fas fa-share-alt text-info"></i></i> 2</a>
                            </div>
                            <div class="p-3">
                                <textarea placeholder="Add Comment..." class="form-control border-0 p-0 shadow-none" rows="1"></textarea>
                            </div>
                        </div>
                    @endforeach
                </main>
                <aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="box mb-3 shadow-sm border rounded bg-white profile-box text-center">
                        <div class="py-4 px-3 border-bottom">
                            @if(@!Session::get('LoggedUser')->photo)
                                <img src="{{asset('images/demoImg.jpg')}}"   name="photo" class="img-fluid rounded-circle" alt="Responsive image">
                            @else
                                <img src="{{asset('photos/'.@Session::get('LoggedUser')->photo)}}" height="150" width="150"  name="photo" class="img-fluid rounded-circle" alt="Responsive image">
                            @endif
                            <h5 class="font-weight-bold text-dark mb-1 mt-4">{{@Session::get('LoggedUser')->name}}</h5>

                            <p class="mb-0 text-muted">Student</p>
                        </div>
                        <div class="d-flex">


                        </div>

                    </div>


                </aside>
                <aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12">

                    <div class="box shadow-sm border rounded bg-white mb-3 ">
                        <div class="box-title p-3 d-flex align-items-center">
                            <h6 class="m-0">Notice</h6>
                            <a class="ml-auto" href="#">See All </a>
                        </div>
                        <div class="box-body p-3">
                            <div class="gallery-box-main">
                                <ul class="notice">
                                    <li><a href="{{url('/notice')}}" class=" text-white"><marquee scrollamount="2">University Social data management</marquee></a></li>
                                    <li><a href="{{url('/notice')}}" class=" text-white"><marquee scrollamount="2">University Social data management</marquee></a></li>
                                    <li><a href="{{url('/notice')}}" class=" text-white"><marquee scrollamount="2">University Social data management</marquee></a></li>
                                    <li><a href="{{url('/notice')}}" class=" text-white"><marquee scrollamount="2">University Social data management</marquee></a></li>
                                    <li><a href="{{url('/notice')}}" class=" text-white"><marquee scrollamount="2">University Social data management</marquee></a></li>
                                    <li><a href="{{url('/notice')}}" class=" text-white"><marquee scrollamount="2">University Social data management</marquee></a></li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="box shadow-sm border rounded bg-white mb-3 mt-3">
                        <div class="box-title border-bottom p-3 d-flex align-items-center">
                            <h6 class="m-0">Classes</h6>
                            <a class="ml-auto" href="#">See All </a>
                        </div>
                        <div class="box-body p-3">
                            <div class="gallery-box-main">
                                <a href="{{url('class')}}">English</a>
                                <a href="{{url('class')}}">Math</a>
                                <a href="{{url('class')}}">Physics</a>
                                <a href="{{url('class')}}">Computer</a>


                            </div>
                        </div>
                    </div>

                    <div class="box shadow-sm border rounded bg-white mb-3 mt-3">
                        <div class="box-title border-bottom p-3 d-flex align-items-center">
                            <h6 class="m-0">Photos</h6>
                            <a class="ml-auto" href="#">See All </a>
                        </div>
                        <div class="box-body p-3">
                            <div class="gallery-box-main">
                                <div class="gallery-box">
                                    <img class="img-fluid" src="{{asset('images/p4.png')}}" alt="">
                                    <img class="img-fluid" src="{{asset('images/p5.png')}}" alt="">
                                    <img class="img-fluid" src="{{asset('images/p6.png')}}" alt="">
                                </div>
                                <div class="gallery-box">
                                    <img class="img-fluid" src="{{asset('images/p7.png')}}" alt="">
                                    <img class="img-fluid" src="{{asset('images/p8.png')}}" alt="">
                                    <img class="img-fluid" src="{{asset('images/p9.png')}}" alt="">
                                </div>
                                <div class="gallery-box">
                                    <img class="img-fluid" src="{{asset('images/p10.png')}}" alt="">
                                    <img class="img-fluid" src="{{asset('images/p11.png')}}" alt="">
                                    <img class="img-fluid" src="{{asset('images/p12.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="box shadow-sm border rounded bg-white mb-3 mt-3">
                        <div class="box-title border-bottom p-3 d-flex align-items-center">
                            <h6 class="m-0">Videos</h6>
                            <a class="ml-auto" href="#">See All </a>
                        </div>
                        <div class="box-body p-3">
                            <div class="gallery-box-main">
                                <div class="gallery-box">
                                    <img class="img-fluid" src="{{asset('images/p4.png')}}" alt="">
                                    <img class="img-fluid" src="{{asset('images/p5.png')}}" alt="">
                                    <img class="img-fluid" src="{{asset('images/p6.png')}}" alt="">
                                </div>
                                <div class="gallery-box">
                                    <img class="img-fluid" src="{{asset('images/p7.png')}}" alt="">
                                    <img class="img-fluid" src="{{asset('images/p8.png')}}" alt="">
                                    <img class="img-fluid" src="{{asset('images/p9.png')}}" alt="">
                                </div>
                                <div class="gallery-box">
                                    <img class="img-fluid" src="{{asset('images/p10.png')}}" alt="">
                                    <img class="img-fluid" src="{{asset('images/p11.png')}}" alt="">
                                    <img class="img-fluid" src="{{asset('images/p12.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
        </div>
    </div>
@endsection
