@extends('Backend.app')
@section('content')
<form action="{{route('setting.update',$settings->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div>
                <label for="logo">Upload Logo</label>
            </div>
            <div>
                <input type="file" class="form-control" name="logo" id="logo">
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <label for="">Upload Color</label>
            </div>
            <div>
                <input type="text" class="form-control" value="{{$settings->nav_color}}" placeholder="Enter Hexacode" name="nav_color" id="">
            </div>
        </div>
    </div>
    <div class="my-3 float-right">

        <button class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection