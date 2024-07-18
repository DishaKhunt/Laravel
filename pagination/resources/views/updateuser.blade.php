<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>Update User Form</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center d-flex">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="fw-bold">Update User Data</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.user', $data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" value="{{ $data->name }}" 
                                name="username" placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" value="{{ $data->email }}" name="useremail" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="text" class="form-control" id="age" value="{{ $data->age }}" name="userage" placeholder="age">
                            </div>
                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" value="{{ $data->city }}" name="usercity" placeholder="City">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Update</button>
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
