@extends('Backend.app')
@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="card-title">Setting</h3>
                </div>
                <div>
                    @if(empty($setting))
                    <a href="{{route('setting.create')}}"><button class="btn btn-primary">Add Setting</button></a>
                    @else
                    <p>setting</p>
                    @endif
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              {{-- <th>S.No</th> --}}
              <th>Logo</th>
              <th>Nav Color</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>

                {{-- @foreach ($carousel as $carousels ) --}}
                @if(empty($setting))
                <span>No Data</span>
                @else


                <tr>
                    <td><img src="{{asset($setting->logo)}}"  height="45px" width="45px" alt="">
                    </td>
                    <td>
                        <div style="height: 40px; width: 40px; background-color: {{$setting->nav_color}}">

                        </div>


                    </td>

                    <td>

                        <a href="{{route('setting.edit',$setting->id)}}"><Button class="btn btn-primary">EDIT</Button></a>
                        {{-- <a href="{{route('carousel.delete',$carousels->id)}}"><Button class="btn btn-danger">DELETE</Button></a> --}}

                    </td>
                  </tr>
                  @endif


                {{-- @endforeach --}}


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