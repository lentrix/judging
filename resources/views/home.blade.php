@extends('base')

@section('content')

<div class="row">
    <div class="col">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('images/slide1.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/slide2.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/slide3.jpg')}}" class="d-block w-100" alt="...">
              </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body bg-dark text-white d-flex align-items-center justify-content-center" style="min-height: 240px">
                <h1>Simple Judging System</h1>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <p class="mt-4 fs-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, recusandae rem! Nesciunt minus consequuntur reprehenderit eveniet magnam iste minima dicta sed. Inventore harum veritatis cumque unde ea perferendis quia. Rem.
        </p>
    </div>
</div>

@endsection
