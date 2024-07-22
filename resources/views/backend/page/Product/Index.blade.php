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
                            <h3 class="card-title">Products</h3>
                        </div>
                        <div>
                            <a href="{{route('product.create')}}">
                                <button class="btn btn-success">Add Product</button>
                            </a>
                        </div>

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>Products</th>
                                <th>Category</th>
                                <th>Active Status</th>
                                <th>Images</th>
                                <th>Discount(%)</th>
                                <th>Price</th>
                                <th>Sellin Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        @foreach ($product as $index => $products )
                        <tbody>
                            <tr>
                                <td>{{++$index}}</td>
                                <td>{{$products->product_name}}
                                </td>
                                <td>{{$products->category->category_name}}</td>
                                <td>
                                    @if($products->is_active == 'active')
                                    <a href="" ><button class="badge bg-success">Active</button></a>
                                    @else
                                    <a href="" ><button class="badge bg-danger">Deactive</button></a>

                                    @endif
                                </td>
                                <td><img src="{{asset($products->product_image)}}" style="object-fit: contain"
                                        height="50px" width="50px" alt=""></td>
                                <td>10 %</td>
                                <td>100000</td>
                                <td>90000</td>
                                <td>
                                    <a href="{{route('product.show',$products->id)}}" class="h6">
                                        <button class="btn btn-success"><i class="fas fa-eye"></i></button>
                                    </a>
                                    <a href="" class="h6">
                                        <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    </a>
                                    <a href="" class="h6"><button class="btn btn-danger"><i
                                                class="fas fa-trash"></i></button></a>
                                </td>
                            </tr>
                        </tbody>

                        {{--
                            product1 [0]
                            product2 [1]
                            product3 [2]
                            --}}

                        @endforeach


                    </table>
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