<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Eloquent ORM CRUD</title>
</head>
<body>
    <div class="container mx-auto p-4 border-slate-300">
        <h1 class="text-center font-bold text-3xl border-slate-300 border-b-2 pb-4">Eloquent CRUD</h1>

        <div class="row justify-content-center d-flex p-5">
            <div class="col-md-6">
                <div class="card border p-5 rounded">
                    <div class="card-header text-center bg-black">
                        <h1 class="text-center text-3xl text-white font-semibold my-4 p-3">
                            @yield('title')
                        </h1>
                    </div>

                    <div class="card-body">
                        <div>
                            @if (session('status'))
                            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 border border-green-600" role="alert">
                                <span class="font-medium">
                                    {{ session('status') }}
                                </span> 
                              </div>
                                
                            @endif
                        </div>
                        <div class="overflow-x-auto mt-5 pt-5">
                            @yield('content')
                         </div>
                    </div>
                </div>
            </div>
        </div>
        

      
       
    </div>    
</body>
</html>


