@extends('layout')

@section('title')
   User Detail
@endsection

@section('content')

<table class="mx-auto border border-gray-200 rounded-lg">

    <tr class="bg-white text-base">
        <th class="w-1/4 py-4 px-4 border border-gray-200 text-left">Name:</th>
        <td class="py-4 px-4 border-b border-gray-200">{{ $users->name }}</td>
    </tr>
    <tr class="bg-gray-100 text-base">
        <th class="w-1/4 py-4 px-4 border border-gray-200 text-left">Email:</th>
        <td class="py-4 px-4 border-b border-gray-200">{{ $users->email }}</td>
    </tr>
    <tr class="bg-white text-base">
        <th class="w-1/4 py-4 px-4 border border-gray-200 text-left">Age:</th>
        <td class="py-4 px-4 border-b border-gray-200">{{ $users->age }}</td>
    </tr>
    <tr class="bg-gray-100 text-base">
        <th class="w-1/4 py-4 px-4 border border-gray-200 text-left">City:</th>
        <td class="py-4 px-4 border-b border-gray-200">{{ $users->city }}</td>
    </tr>
    
</table>

<div class="flex items-center justify-center mt-5">
    <a href="{{ route('user.index') }}" class="bg-red-500 text-white py-2 px-4 rounded">Back</a>
</div>



@endsection
