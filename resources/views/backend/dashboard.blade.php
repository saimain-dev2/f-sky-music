@extends('backend.template.layout')

@section('title','Dashboard')
@section('page-heading','Dashboard')
@section('css')

<link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

@endsection
@section('main-content')
<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Songs
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$songs->count()}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-list-music fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Albums
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$albums->count()}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-album fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Categories</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$categories->count()}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fab fa-typo3 fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Users
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$users->count()}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fad fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4 d-none d-md-block">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Songs Overview</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Song Name</th>
                        <th>Artist</th>
                        <th>Album</th>
                        <th>Category</th>
                        <th>Uploaded</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Song Name</th>
                        <th>Artist</th>
                        <th>Album</th>
                        <th>Category</th>
                        <th>Uploaded</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($songs as $song)
                    @php
                    $song_album = App\Model\Album::where('id', '=', $song->album_id)->get();
                    $song_category = App\Model\Category::where('id', '=', $song->category_id)->get();
                    @endphp
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$song->name}}</td>
                        <td>{{$song->artist}}</td>
                        <td>{{$song_album[0]->name}}</td>
                        <td>{{$song_category[0]->name}}</td>
                        <td>{{ date('d M y', strtotime($song->updated_at)) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row">


</div>

@endsection


@section('js')
<!-- Page level plugins -->
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('js/demo/datatables-demo.js')}}"></script>

<script>
    $(document).ready(function() {
        $('.player').on('click', function() {
            $(this).
        })


    })
</script>
@endsection