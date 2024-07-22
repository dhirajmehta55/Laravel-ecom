@extends('Backend.app')
@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="card-title">Categories</h3>x
                </div>
                <div>

                    <a href="{{route('category.create')}}"><button class="btn btn-primary">Add Category</button></a>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>S.No</th>
              <th>Category</th>
              <th>image</th>
              <th>Description</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>

                @foreach ($category as $categories )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$categories->category_name}}</td>
                    <td><img src="{{asset($categories->category_image)}}"  height="45px" width="45px" alt="">
                    </td>
                    <td>{{$categories->description}}</td>

                    <td>
                        @if($categories->status == 'active')
                        <a href="{{route('category.deactive',$categories->id)}}" ><Button class="badge badge-success">ONLINE</Button></a>
                        @else
                        <a href="{{route('category.active',$categories->id)}}" ><Button class="badge badge-danger">OFLINE</Button></a>
                        @endif

                    </td>
                    <td>

                        <a href="{{route('carousel.edit',$categories->id)}}"><Button class="btn btn-primary">EDIT</Button></a>
                        <a href="{{route('carousel.delete',$categories->id)}}"><Button class="btn btn-danger">DELETE</Button></a>

                    </td>
                  </tr>


                @endforeach


          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->


      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>

@endsection