<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>All students</title>
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-center text-green-800 text-3xl font-bold my-4">All Students Data</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border rounded-lg border-gray-200">
                <thead>
                    <tr class="bg-green-700 text-xl text-white">
                        <th class="py-4 px-4 border-b">Id</th>
                        <th class="py-4 px-4 border-b">Name</th>
                        <th class="py-4 px-4 border-b">Email</th>
                        <th class="py-4 px-4 border-b">Age</th>
                        <th class="py-4 px-4 border-b">City</th>
                        <th class="py-4 px-4 border-b">City Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $data)
                    <tr class="text-center border-green-200 border-b-2 bg-green-50 text-xl p-5">
                        <td class="py-4 px-4 border-b">{{ $data->id }}</td>
                        <td class="py-4 px-4 border-b">{{ $data->name }}</td>
                        <td class="py-4 px-4 border-b">{{ $data->email }}</td>
                        <td class="py-4 px-4 border-b">{{ $data->age }}</td>
                        <td class="py-4 px-4 border-b">{{ $data->city }}</td>
                        <td class="py-4 px-4 border-b">{{ $data->city_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>    
</body>
</html>
