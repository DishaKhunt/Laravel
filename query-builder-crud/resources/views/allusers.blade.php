<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>All USers</title>
</head>
<body>
    <div class="container">
     
            
                <h1 class="text-center mb-4">All Users List</h1>
                <table class="table mx-auto table-borderd table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>View</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($data as $id => $user)
                    <tr>
                        <td >{{ $user->id }} </td>
                        <td>{{ $user->name }} </td>
                        <td> {{ $user->email }}</td>
                        <td> {{ $user->age }} </td>
                        <td> {{ $user->city }} </td>
                        <td><a href="{{route('view.user', $user->id)}}" class="btn btn-primary brn-sm">View</a></td>
                        <td><a href="{{route('delete.user', $user->id)}}" class="btn btn-danger brn-sm">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
          
      
    </div>    
</body>
</html>





