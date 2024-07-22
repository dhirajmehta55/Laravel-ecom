@extends('Frontend.app')
@section('frontend')

<div class="container">
    <div class="row my-5">
        @foreach ($category as $categories )

        <div class="col-md-3 my-2">
            <div class="card shadow" style="width: 18rem;">
                <img src="{{ asset($categories->category_image) }}" height="200px" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $categories->category_name }}</h5>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    <a href="" class="btn btn-primary">View Products</a>
                </div>
            </div>

        </div>
        @endforeach

    </div>



</div>


@endsection