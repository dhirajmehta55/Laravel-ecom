@extends('frontend.app')
@section('frontend')
<section>
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($carousel as $carousels)
            
        <div class="carousel-item active">
          <img src="{{asset($carousels->carousel_image)}}" class="d-block w-100" alt="...">
        </div>
        @endforeach
      {{-- <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div> --}}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<section>
  <div class="container">
    <div class="my-5 d-flex justify-content-center">
      <h2>Our Services</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <img src="https://www.thedigitalsalesinstitute.com/wp-content/uploads/2018/09/what-is-selling-definition.jpeg" height="250px" alt="">
      </div>
      <div class="col-md-6">
        <h2>Selling product</h2>
        <div>
          What is selling and the definition of selling is a question is a valid question often asked by newer people to the profession. Selling involves many different activities and actions which depend on the customers situation and where in the sales journey you are at.
        </div>
      </div>

      <div class="col-md-6">
        <h2>Curior Services</h2>
        <div class="my-3">
          What is selling and the definition of selling is a question is a valid question often asked by newer people to the profession. Selling involves many different activities and actions which depend on the customers situation and where in the sales journey you are at.
        </div>
      </div>
      <div class="col-md-6 my-3">
        <img src="https://www.namastecargonepal.com/storage/posts/eqxsZna1UyMkP1LYxCEZZLa3WpaPcMlGOSJucLjE.jpg" height="250px" alt="">
      </div>

    </div>
  </div>
</section>
    
@endsection

  {{-- CATEGORY SECTION START --}}

  <section class=" my-3 bg-light">
    <div class="container">
        <div class="d-flex justify-content-center">
            <h2>Categories</h2>
        </div>

        <div>
            <div class="row my-4">
                @foreach ($category  as $categories)
                    <div class="col-md-3">
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

    </div>




</section>
{{-- CATEGORY SECTION END --}}