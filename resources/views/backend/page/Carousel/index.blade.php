@extends('backend.app')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="card-title">DataTable with minimal features & hover style</h3>

                </div>
                <div>
                    <a href="{{route('carousel.create')}}"><button class="btn btn-primary">Add</button></a>
                </div>
            </div>
         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>S.No</th>
              <th>Carousel</th>
              <th>Status</th>
              <th>Action</th>
              
            </tr>
            </thead>
            <tbody>
              @foreach ($carousel as $carousels )
                
              
            <tr>
              <td>1</td>
              <td><img src="{{asset($carousels->carousel_image)}}" height="45px" width="45px" alt="">
              </td>
              <td>
                @if ($carousels->status == 'active')
                <a href="{{route('carousel.deactive',$carousels->id)}}" ><Button class="badge badge-success">ONLINE</Button></a>
                @else
                <a href="{{route('carousel.active',$carousels->id)}}" ><Button class="badge badge-danger">OFLINE</Button></a>
                @endif
              </td>
              <td> 
                <a href="{{route('carousel.edit',$carousels)}}"><Button class="btn btn-primary">EDIT</Button></a>
                <a href="{{route('carousel.delete',$carousels)}}"><Button class="btn btn-danger">DELETE</Button></a>
              </td>
              
            </tr>
            @endforeach
           
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
    
@endsection