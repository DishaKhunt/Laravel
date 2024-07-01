@extends('layouts.masterlayout')

@section('content')
<div class="container mt-5">
  <h1>About Us</h1>
  <p class="lead">Learn more about our love for nature and our mission to protect it.</p>
  
  <div class="row mt-5">
      <div class="col-12 col-md-6">
          <img src="https://www.w3schools.com/w3images/lights.jpg" class="img-fluid" alt="Nature Image">
      </div>
      <div class="col-12 col-md-6">
          <h2>Our Mission</h2>
          <p>We are dedicated to preserving the natural beauty of our planet. Our mission is to protect wildlife, promote conservation, and educate the public about the importance of nature.</p>
          <h2>Our Vision</h2>
          <p>We envision a world where nature thrives, and people live in harmony with the environment. We believe that through collective effort and awareness, we can make a significant impact.</p>
      </div>
  </div>
  
  <div class="row mt-5">
      <div class="col-12">
          <h2>Our Team</h2>
          <p>Our team is composed of passionate individuals who are experts in their fields. We work together to create initiatives that promote environmental sustainability and conservation.</p>
      </div>
  </div>

  <div class="row mt-5">
      <div class="col-12">
          <h2>Contact Us</h2>
          <p>If you have any questions or would like to get involved, feel free to reach out to us at <a href="mailto:info@naturewebsite.com">info@naturewebsite.com</a>.</p>
      </div>
  </div>
</div>

@verbatim
   <div id="app">{{ message }}</div>
@endverbatim
@endsection


@section('title')
  About
@endsection
    
@push('script')

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>



<script>
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref('Hello vue!')
      return {
        message
      }
    }
  }).mount('#app')
</script>
@endpush

@push('script')
<script src="/jquery.js"></script>
<script src="/example.js"></script>
@endpush

@push('script')
<script src="/jquery.js"></script>

@endpush

  
   
