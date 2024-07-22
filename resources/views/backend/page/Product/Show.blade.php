@extends('Backend.app')
@section('style')
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="card-title">Product Details</h3>
                        </div>
                        <div>
                            <a href="{{route('product.create')}}">
                                <button class="btn btn-success">Edit</button>
                            </a>
                        </div>

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <img src="{{asset($product->product_image)}}" height="400px"  width="600px" style="object-fit: contain" alt="">

                            </div>


                        </div>
                        <div class="col-md-6">

                            <div>
                                <div class="d-flex">
                                    <span class="">Product Name:</span>
                                    <span class="px-2"><b>{{$product->product_name}}</b></span>
                                </div>
                                <div class="d-flex my-4">
                                    <span>Category:</span>
                                    <span class="px-2"><b>{{$product->category->category_name}}</b></span>
                                </div>
                                <div class="d-flex my-4">
                                    <span>slug:</span>
                                    <span class="px-2"><b>{{$product->slug}}</b></span>
                                </div>
                                <div class="d-flex my-4">
                                    <span>Sku:</span>
                                    <span class="px-2"><b>{{$product->sku}}</b></span>
                                </div>
                                <div class="d-flex my-4">
                                    <span>Discount(%): </span>
                                    <span class="px-2"><b>{{$product->discount}} %</b></span>
                                </div>
                                <div class="d-flex my-4">
                                    <span>Selling Price:</span>
                                    <span class="px-2"><b>{{$product->selling_price}}</b></span>
                                </div>
                                <div class="d-flex my-4">
                                    <span>Description   :</span>
                                    <span class="px-2">{!!$product->product_description!!}</span>
                                </div>
                                <div class="d-flex my-4">
                                    <span>Featured Status:</span>
                                    @if($product->is_featured == 'active')
                                    <a href="{{route('featured.deactive',$product->id)}}" class="px-2" onclick="return confirm('Are you sure want to disable {{$product->product_name}}')"><button class="badge bg-success" ><b>Active</b></button></a>
                                   @else
                                   <a href="{{route('featured.active',$product->id)}}" class="px-2" onclick="return confirm('Are you sure want to enable {{$product->product_name}}')"><button class="badge bg-danger" ><b>Deactive</b></button></a>
                                   @endif
                                </div>
                                <div class="d-flex my-4">
                                    <span>Active Status:</span>
                                    @if($product->is_active == 'active')

                                   <a href="" class="px-2" onclick="return confirm('Are you sure want to enable {{$product->product_name}}')"><button class="badge bg-success" ><b>{{$product->is_active}}</b></button></a>
                                   @else
                                   <a href="" class="px-2" onclick="return confirm('Are you sure want to enable {{$product->product_name}}')"><button class="badge bg-danger" ><b>{{$product->is_active}}</b></button></a>

                                   @endif
                                </div>
                            </div>

                        </div>

                    </div>



                </div>
                <!-- /.card-body -->
            </div>

        </div>


    </div>
@endsection
@section('script')
    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>
@endsection