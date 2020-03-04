@extends('backend.template.layout')

@section('title','Dashboard')
@section('page-heading','Dashboard')
@section('css')

<link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('css/select2-bootstrap4.css')}}">
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
                    </div>

                </div>
                <div class="row no-gutters align-items-center">
                    <div class="col">
                        <div class="h6 mb-0 font-weight-bold text-gray-800">{{$songs->count()}}</div>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#add_song">Add
                            Song</button>
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
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Album
                        </div>
                    </div>

                </div>
                <div class="row no-gutters align-items-center">
                    <div class="col">
                        <div class="h6 mb-0 font-weight-bold text-gray-800">{{$albums->count()}}</div>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-sm btn-success">Add Album</button>
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
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Categories
                        </div>
                    </div>

                </div>
                <div class="row no-gutters align-items-center">
                    <div class="col">
                        <div class="h6 mb-0 font-weight-bold text-gray-800">{{$categories->count()}}</div>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-sm btn-info">Add Category</button>
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

@if($songs->count() > 0)
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
@else
<div class="text-center mt-5">
    <p>No Song Data</p>
</div>
@endif


<!-- Content Row -->
<div class="row">


</div>


<!-- Add Song Modal -->
<div class="modal fade" id="add_song" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase text-md font-weight-bold" id="staticBackdropLabel">Add New Song
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <input class="form-control" type="text" placeholder="Song Name">
                    <br>
                    <select name="" id="" class="form-control select-category" style="width: 100%">
                        <option value="" disabled selected>Song Artist</option>
                        @foreach($artists as $artist)
                        <option value="{{$artist->id}}">{{$artist->name}}</option>
                        @endforeach
                    </select>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <select name="" id="" class="form-control select-category" style="width: 100%">
                                <option value="" disabled selected>Category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select name="" id="" class="form-control select-category" style="width: 100%">
                                <option value="" disabled selected>Album</option>
                                @foreach($albums as $album)
                                <option value="{{$album->id}}">{{$album->name}}</option>
                                @endforeach
                            </select>
                        </div>


                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

@endsection


@section('js')
<!-- Page level plugins -->
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('js/demo/datatables-demo.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.player').on('click', function() {

        });
        $('.select-category').select2({
            theme: 'bootstrap4',
        });
    });
</script>
@endsection