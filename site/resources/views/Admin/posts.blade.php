@extends('Admin.app')
@section('adminContent')

    <body class="fix-header fix-sidebar ">

    <div class="container">
        <div class="row">
            <div class="col-md-12 p-5 ml-5">
                <table id="VisitorDt" class="table table-striped table-sm table-bordered " cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">Id</th>
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Email</th>
                        <th class="th-sm">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th class="th-sm">{{ $post->id }}</th>
                            <th class="th-sm">{{ $post->name }} </th>
                            <th class="th-sm">{{ $post->email }}</th>
                            <th class="th-sm">
                                @if($post->status == 1)
                                    <a href="{{ route('userPost', $post->id) }}">Active</a>
                                @else
                                    <a href="{{ route('userPost', $post->id) }}">InActive</a>
                                @endif
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>




    </div>
    </div>

    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/mdb.min.js')}}"></script>
    <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('js/sidebarmenu.js')}}"></script>
    <script src="{{asset('js/sticky-kit.min.js')}}"></script>
    <script src="{{asset('js/custom.min-2.js')}}"></script>
    <script src="{{asset('js/datatables.min.js')}}"></script>
    <script src="{{asset('js/datatables-select.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/axios.min.js')}}"></script>
    </body>


@endsection
