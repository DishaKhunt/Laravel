<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>Add User Form</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center d-flex">
            <div class="col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="fw-bold">Registration</h4>
                    </div>
                    {{-- @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li class=''>{{ $error }}</li>
                            
                        @endforeach
                    </ul>
                    @endif
                    --}}
                   
                    <div class="card-body">
                        <form action="{{ route('addUser') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" value="{{ old('username') }}" class="form-control @error('username')
                                    is-invalid
                                @enderror" id="name" 
                                name="username" placeholder="Enter your name">
                                <span class="text-danger">
                                    @error('username')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" value="{{ old('useremail') }}" class="form-control @error('useremail')
                                    is-invalid
                                @enderror" id="email" name="useremail" placeholder="Enter your email">
                                <span class="text-danger">
                                    @error('useremail')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" value="{{ old('userpass') }}" class="form-control @error('userpass')
                                    is-invalid
                                @enderror" id="password" name="userpass" placeholder="Enter your password">
                                <span class="text-danger">
                                    @error('userpass')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="text" value="{{ old('userage') }}" class="form-control @error('userage')
                                    is-invalid
                                @enderror" id="age" name="userage" placeholder="age">
                                <span class="text-danger">
                                    @error('userage')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                               <select name="usercity" value="{{ old('usercity') }}"class="form-control" id="">
                                <option value="rajkot">Rajkot</option>
                                <option value="ahamdabad">Ahamdabad</option>
                                <option value="Surat">Surat</option>
                                <option value="mumbai">Mumbai</option>
                                <option value="pune">Pune</option>
                               </select>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
