@extends('backend.app')
@section('content')
<form action="{{route('carousel.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <input type="file" name="carousel_image" class="form-control w-50" name="" id="">
    </div>
    <div class="my-3">
        <button class="btn btn-primary">Upload</button>
    </div>
</form>

    
@endsection