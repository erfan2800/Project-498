@extends('Layout.app')
@section('content')


    <div class="py-4">
        <div class="container">
            <div class="row">
                <form action="{{route('Layout.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <aside class="col-md-4 float-left">
                        <div class="mb-3 border rounded bg-white profile-box text-center w-10">
                            <div class="p-4 d-flex align-items-center">
                                @if(@!Session::get('LoggedUser')->photo)
                                    <img src="{{asset('images/demoImg.jpg')}}"   name="photo" class="img-fluid rounded-circle" alt="Responsive image">
                                @else
                                    <img src="{{asset('photos/'.@Session::get('LoggedUser')->photo)}}" height="150" width="150"  name="photo" class="img-fluid rounded-circle" alt="Responsive image">
                                @endif
                                <div class="p-4">
                                    <label data-toggle="tooltip" data-placement="top" data-original-title="Upload New Picture" class="btn btn-info m-0" for="fileAttachmentBtn">
                                        <i class="feather-image"></i>
                                        <input id="fileAttachmentBtn" name="photo" type="file" class="d-none">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded bg-white mb-3">
                            <div class="box-body">
                                <div class="p-3 border-bottom">

                                    <div class="form-group mb-4">

                                        <label class="mb-1">BIO</label>
                                        <div class="position-relative">
                                            <textarea class="form-control" rows="4" name="bio" placeholder="Enter Bio">{{@Session::get('LoggedUser')->bio}}</textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </aside>
                    <main class="col-md-8 float-left">

                        <div class="border rounded bg-white mb-3">
                            <div class="box-title border-bottom p-3">
                                <h6 class="m-0">Edit Basic Info</h6>
                            </div>
                            <div class="box-body p-3">
                                <form class="js-validate" novalidate="novalidate">
                                    <div class="row">

                                        <div class="col-sm-6 mb-2">
                                            <div class="js-form-message">
                                                <label id="nameLabel" class="form-label">
                                                    Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" value="{{@Session::get('LoggedUser')->name}}" placeholder="Enter your name" aria-label="Enter your name" required="" aria-describedby="nameLabel" data-msg="Please enter your name." data-error-class="u-has-error" data-success-class="u-has-success">
                                                    <input type="hidden" name="id" value="{{@Session::get('LoggedUser')->id}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-2">
                                            <div class="js-form-message">
                                                <label id="usernameLabel" class="form-label">
                                                    Sudent Id
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="stdId" value="{{@Session::get('LoggedUser')->stdId}}" placeholder="Enter your username" aria-label="Enter your username" required="" aria-describedby="usernameLabel" data-msg="Please enter your username." data-error-class="u-has-error" data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 mb-2">
                                            <div class="js-form-message">
                                                <label id="nameLabel" class="form-label">
                                                    Father Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="fatherName" value="{{@Session::get('LoggedUser')->fatherName}}" placeholder="Enter your father name" aria-label="Enter your name" required="" aria-describedby="nameLabel" data-msg="Please enter your name." data-error-class="u-has-error" data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-2">
                                            <div class="js-form-message">
                                                <label id="nameLabel" class="form-label">
                                                    Mother Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="motherName" value="{{@Session::get('LoggedUser')->motherName}}" placeholder="Enter your Mother name" aria-label="Enter your name" required="" aria-describedby="nameLabel" data-msg="Please enter your name." data-error-class="u-has-error" data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-sm-6 mb-2">
                                            <label class="form-label">
                                                Birth date
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="date" name="dateOfBirth" value="{{@Session::get('LoggedUser')->dateOfBirth}}" class="">
                                        </div>

                                        <div class="col-sm-6 mb-2">
                                            <label class="form-label">
                                                Gender
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">
                                                <label class="form-check-label " for="flexRadioDefault1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Female
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" value="others" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Others
                                                </label>

                                            </div>
                                        </div>
                                        <div class="row mt-5 mb-3" >

                                            <div class="col-sm-6 mb-2">
                                                <div class="js-form-message">
                                                    <label id="emailLabel" class="form-label">
                                                        Email address
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" value="{{@Session::get('LoggedUser')->email}}" placeholder="Enter your email address" aria-label="Enter your email address" required="" aria-describedby="emailLabel" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-sm-6 mb-2">
                                                <div class="js-form-message">
                                                    <label id="locationLabel" class="form-label">
                                                        Address
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="address" value="{{@Session::get('LoggedUser')->address}}" placeholder="Enter your Address" aria-label="Enter your location" required="" aria-describedby="locationLabel" data-msg="Please enter your location." data-error-class="u-has-error" data-success-class="u-has-success">
                                                        <span class="text-danger">@error ('address'){{ $message }} @enderror</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <label id="locationLabel" class="form-label mt-5 mb-3 ml-5 ">
                                                Batch
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-4 mb-3 mb-sm-6 ">
                                                <div class="js-form-message">
                                                    <div class="form-group">
                                                        <select class="form-control custom-select mt-5 mb-5" required="" style="width: 100px;" name="batch" data-msg="Please select year." data-error-class="u-has-error" data-success-class="u-has-success">
                                                            <option @if(@Session::get('LoggedUser')->batch == '44th') selected @endif value="44th">44th</option>
                                                            <option @if(@Session::get('LoggedUser')->batch == '45th') selected @endif value="45th">45th</option>
                                                            <option @if(@Session::get('LoggedUser')->batch == '46th') selected @endif value="46th">46th</option>
                                                            <option @if(@Session::get('LoggedUser')->batch == '47th') selected @endif value="47th">47th</option>
                                                            <option @if(@Session::get('LoggedUser')->batch == '48th') selected @endif value="48th">48th</option>
                                                            <option @if(@Session::get('LoggedUser')->batch == '49th') selected @endif value="49th">49th</option>
                                                            <option @if(@Session::get('LoggedUser')->batch == '50th') selected @endif value="50th">50th</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mb-2">
                                                <div class="js-form-message">
                                                    <label id="phoneNumberLabel" class="form-label">
                                                        Phone number
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="form-group">
                                                        <input class="form-control" type="tel" name="phone" value="{{@Session::get('LoggedUser')->phone}}" placeholder="Enter your phone number" aria-label="Enter your phone number" required="" aria-describedby="phoneNumberLabel" data-msg="Please enter a valid phone number" data-error-class="u-has-error" data-success-class="u-has-success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mb-2">
                                                <div class="js-form-message">
                                                    <label class="form-label ">
                                                        Department
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="form-group">
                                                        <select class="form-control custom-select " required="" name="department" data-msg="Please select year." data-error-class="u-has-error" data-success-class="u-has-success">

                                                            <option @if(@Session::get('LoggedUser')->department == 'CSE') selected @endif value="CSE">CSE</option>
                                                            <option @if(@Session::get('LoggedUser')->department == 'EEE') selected @endif value="EEE">EEE</option>
                                                            <option @if(@Session::get('LoggedUser')->department == 'English') selected @endif value="English">English</option>
                                                            <option @if(@Session::get('LoggedUser')->department == 'LLB') selected @endif value="LLB">LLB</option>
                                                            <option @if(@Session::get('LoggedUser')->department == 'Mathmethic') selected @endif value="Mathmethic">Mathmethic</option>
                                                            <option @if(@Session::get('LoggedUser')->department == 'Economy') selected @endif value="Economy">Economy</option>
                                                            <option @if(@Session::get('LoggedUser')->department == 'BBA') selected @endif value="BBA">BBA</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                </form>
                            </div>
                        </div>

                        <div class="mb-3 text-right">
                            <a class="font-weight-bold btn btn-link rounded p-3" href="#"> &nbsp;&nbsp;&nbsp;&nbsp; Cancel &nbsp;&nbsp;&nbsp;&nbsp; </a>
                            <button type="submit" class="font-weight-bold btn btn-primary rounded p-3"> &nbsp;&nbsp;&nbsp;&nbsp; Sava Chenges &nbsp;&nbsp;&nbsp;&nbsp; </button>
                        </div>

                    </main>
                </form>
            </div>

        </div>
    </div>

@endsection
