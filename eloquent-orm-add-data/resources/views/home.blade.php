@extends('layout')

@section('title')
    All USers Data
@endsection

@section('content')
<a href="{{ route('user.create') }}" class="btn btn-green bg-green-600 rounded border boder-green-800 text-white px-3 py-2 my-3">Add New</a>
        
<div class="overflow-x-auto mt-5">
    <table class="min-w-full bg-white border rounded-lg border-gray-200">
        <thead>
            <tr class="bg-black text-base text-white">
                <th class="py-4 px-4 border-b">Id</th>
                <th class="py-4 px-4 border-b">Name</th>
                <th class="py-4 px-4 border-b">Email</th>
                <th class="py-4 px-4 border-b">Age</th>
                <th class="py-4 px-4 border-b">City</th>
                <th class="py-4 px-4 border-b">View</th>
                <th class="py-4 px-4 border-b">Delete</th>
                <th class="py-4 px-4 border-b">Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="text-center border-slate-300 border-b-2 bg-slate-200 text-base p-5">
                <td class="py-4 px-4 border-b">{{ $user->id }}</td>
                <td class="py-4 px-4 border-b">{{ $user->name }}</td>
                <td class="py-4 px-4 border-b">{{ $user->email }}</td>
                <td class="py-4 px-4 border-b">{{ $user->age }}</td>
                <td class="py-4 px-4 border-b">{{ $user->city }}</td>
                <td><a href="{{ route('user.show', $user->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded">View</a></td>

                <td>
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
                    </form>
                </td>

                <td><a href="{{ route('user.edit', $user->id) }}" class="bg-yellow-400 text-white py-2 px-4 rounded">Update</a></td>                  
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
