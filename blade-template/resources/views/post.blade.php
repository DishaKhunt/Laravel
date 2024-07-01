@extends('layouts.masterlayout')

@section('content')
<div class="container mt-5">
    <h1>Nature Posts</h1>
    <p class="lead">Explore our latest posts about the beauty and wonders of nature.</p>
    
    <div class="row mt-5">
        <div class="col-12 col-md-4 mb-4">
            <div class="card">
                <img src="https://i0.wp.com/picjumbo.com/wp-content/uploads/amazing-stone-path-in-forest-free-photo.jpg?w=600&quality=80"  height="270px" class="card-img-top" alt="Nature Image 1">
                <div class="card-body">
                <h5 class="card-title">Post Title 1</h5>
                <p class="card-text">An excerpt or summary of the first nature-related post.</p>
                <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card">
                <img src="https://img.freepik.com/premium-photo/bright-green-meadow-with-grass_124507-13850.jpg"  height="270px" class="card-img-top" alt="Nature Image 2">
                <div class="card-body">
                <h5 class="card-title">Post Title 2</h5>
                <p class="card-text">An excerpt or summary of the second nature-related post.</p>
                <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card">
                <img src="https://cdn.pixabay.com/photo/2014/02/27/16/10/flowers-276014_640.jpg" class="card-img-top" height="270px" alt="Nature Image 3">
                <div class="card-body">
                <h5 class="card-title">Post Title 3</h5>
                <p class="card-text">An excerpt or summary of the third nature-related post.</p>
                <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-12">
            <h2>Subscribe for More</h2>
            <p>Stay updated with our latest posts and news about nature. Subscribe to our newsletter!</p>
            <form class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter" class="visually-hidden">Email address</label>
              <input id="newsletter" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </form>
        </div>
    </div>
  </div>
@endsection
     
{{-- @section('title')
  Post
@endsection --}}
   
