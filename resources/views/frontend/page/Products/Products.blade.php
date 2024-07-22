@extends('Frontend.app')
@section('frontend')
<div class="container">


    <div class="row">

        <div class="col-md-3 my-2">
          <div class="card">

            <div class="card-body">

                <div class="d-flex justify-content-center">
                    <h4 style="text-decoration: underline">Categories
                    </h4>
                </div>
                <div class="d-flex justify-content-center">
                    <ul >
                        @foreach ($category as $categories )
                        <li class="my-2" style="list-style-type: none"><a href="{{route('product.category',$categories->id)}}" class="text-black" style="text-decoration: none">{{$categories->category_name}}</a></li>

                        @endforeach
                       </ul>

                </div>


            </div>
          </div>


        </div>
        <div class="col-md-9 my-2">
            <div class="row">
                @foreach ($product as $products )
                                <div class="col-md-3 mx-4">

                                    <div class="card shadow" style="width: 18rem;">
                                        <img src="{{asset($products->product_image)}}" height="200px" style="object-fit: contain" class="card-img-top py-2" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$products->product_name}}</h5>

                                            <div>
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <del>
                                                            Rs.{{$products->price}}
                                                        </del>
                                                    </div>
                                                    <div class="text-danger">
                                                        {{$products->discount}} %
                                                    </div>

                                                </div>
                                                <div>
                                                    Rs.{{$products->selling_price}}
                                                </div>

                                            </div>
                                            {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                                the card's content.</p> --}}
                                            <a href="#" class="btn btn-primary">Add to cart</a>
                                        </div>
                                    </div>


                                </div>

                @endforeach


            </div>


        </div>
    </div>

</div>


@endsection