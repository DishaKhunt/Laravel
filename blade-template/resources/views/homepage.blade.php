@extends('layouts.masterlayout')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="height: 500px">
      <img src="https://i0.wp.com/picjumbo.com/wp-content/uploads/beautiful-nature-mountain-scenery-with-flowers-free-photo.jpg?w=600&quality=80" class="d-block w-100" height="500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/free-photo/wide-angle-shot-single-tree-growing-clouded-sky-during-sunset-surrounded-by-grass_181624-22807.jpg" class="d-block w-100" height="500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_1280.jpg" class="d-block w-100" height="500px" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container mt-5" id="home">
   <h1>Nature Details</h1>
  <div class="row">
      <div class="col-12 col-md-4 mt-5">
          <div class="card" style="width: ;">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUPIfiGgUML8G3ZqsNLHfaCnZK3I5g4tJabQ&s" height="300px" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Read more</a>
              </div>
          </div>
      </div>
      <div class="col-12 col-md-4 mt-5" id="about">
          <div class="card" >
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbpdV5eKcBMzjs7ltDev4YxvWvnNxcFk7wUg&s" height="300px" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Read more..</a>
              </div>
          </div>
      </div>
      <div class="col-12 col-md-4 mt-5" id="post">
          <div class="card">
              <img src="https://5.imimg.com/data5/SELLER/Default/2023/3/TF/BK/UW/103578143/3d-nature-wallpaper-500x500.jpg" class="card-img-top" height="300px" alt="...">
              <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Read More..</a>
              </div>
          </div>
      </div>
    </div>   
</div>
  
@endsection

@section('title')
  Home
@endsection

@push('script')
   <script src="/example.js"></script>
@endpush

@push('style')
  <link rel="stylesheet" href="css/style.css">
@endpush

@prepend('style')
  <style>
    body{
      background: rgb(217, 214, 214) !important;
    }
  </style>
@endprepend