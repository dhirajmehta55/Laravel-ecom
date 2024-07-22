@extends('backend.app')
@section('content')
<form action="{{route('setting.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-md-6">
        <div>
            <label for="logo">Upload logo</label>
        </div>
        <div>
            <input type="file" class="form-control" name="logo" id="logo">
        </div>
    </div>
    <div class="col-md-6">
        <div>
            <label for="">upload color</label>
        </div>
        <div>
            <input type="text" class="form-control" placeholder="Enter hexacode"  name="color" id="color">
        </div>
    </div>

</div>
<div class="my-3 float left">
    <button class="btn-btn-primary">Submit</button>
</div>

</form>
    
@endsection