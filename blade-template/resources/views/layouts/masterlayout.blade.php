<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Nature - @yield('title', 'website')</title>
    @stack('style')
</head>
<body>
    @include('pages/header')

    @hasSection('content')
        @yield('content')
    @else
        <h2>No found Content</h2>
    @endif

  
     

      @include('pages/footer')

     @stack('script')
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
