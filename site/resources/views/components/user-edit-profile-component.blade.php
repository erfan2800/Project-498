<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update Profile
                </div>
                <div class="panel-body">
                    <form action="">
                        <div class="col-md-4">
                            @if($user->profile->image)
                                <img src="{{asset('images/demoImg')}}/{{$user->profile->image}}" width="100%" alt="">
                            @else
                                <img src="{{asset('images/p13')}}" width="100%" alt="erfan">
                            @endif
                            <input type="file" class="form-control">
                        </div>
                        <div class="col-md-8">
                            <p><b>Name: </b><input type="text" class="form-control"></p>
                            <p><b>Id: </b>{{$user->id}}</p>
                            <p><b>Email: </b>{{$user->email}}</p>
                            <hr>
                            <p><b>Phone: </b><input type="text" class="form-control"></p>
                            <p><b>Father's  Name: </b><input type="text" class="form-control"></p>
                            <p><b>Mother's  Name: </b><input type="text" class="form-control"></p>
                            <p><b>Department: </b><input type="text" class="form-control"></p>
                            <p><b>Batch: </b><input type="text" class="form-control"></p>
                            <p><b>Address: </b><input type="text" class="form-control"></p>

                        </div>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>
