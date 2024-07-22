@extends('Backend.app')
@section('style')
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endsection
@section('content')
    <div class="col-md-12">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Products</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <form action="{{route('product.store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">SKU <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{old('sku')}}" name="sku" id="exampleInputEmail1" placeholder="SKU">
                                @error('sku')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Slug <span class="text-danger">*</span></label>
                                <input type="text" name="slug" class="form-control" value="{{old('slug')}}" id="exampleInputEmail1" placeholder="Slug">
                                @error('slug')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name <span class="text-danger">*</span></label>
                                <input type="text" name="product_name"value="{{old('product_name')}}" class="form-control" id="exampleInputEmail1"
                                    placeholder="Product Name">
                                    @error('product_name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Minimal</label>
                                <select class="form-control select2" name="category_id" style="width: 100%;">
                                    <option selected="selected" disabled>Select Category</option>
                                   @foreach ($category as $categories )
                                   <option value="{{$categories->id}}">{{$categories->category_name}}</option>

                                   @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Discount (%) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{old('discount')}}" name="discount" id="exampleInputEmail1"
                                    placeholder="Discount (%)">
                                    @error('discount')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{old('price')}}" name="price" id="exampleInputEmail1" placeholder="Price">
                                @error('price')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Upload Product Image <span
                                        class="text-danger">*</span></label>
                                <input type="file" accept="image/*" name="product_image" class="form-control" id="exampleInputEmail1"
                                    placeholder="Price">
                                    @error('product_image')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-12">

                            <div>
                                <label for="">Description</label>
                            </div>
                            <textarea name="product_description"  id="summernote" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>


        </div>



    </div>
@endsection
@section('script')
    <script src="/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="/plugins/select2/js/select2.full.min.js"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror

            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });
        });
        //Initialize Select2 Elements
    </script>
@endsection