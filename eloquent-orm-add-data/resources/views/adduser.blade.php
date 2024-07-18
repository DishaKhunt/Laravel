@extends('layout')

@section('title')
    Add New User
@endsection

@section('content')

<form action="{{ route('user.store') }}" method="POST" class="max-w-md mx-auto mt-8">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="username" placeholder="Enter your name">
    </div>
    <div class="mb-4">
        <label for="email" class="block text-gray-700 font-bold mb-2">Email address</label>
        <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="useremail" placeholder="Enter your email">
    </div>
    <div class="mb-4">
        <label for="age" class="block text-gray-700 font-bold mb-2">Age</label>
        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="age" name="userage" placeholder="Age">
    </div>
    <div class="mb-4">
        <label for="city" class="block text-gray-700 font-bold mb-2">City</label>
        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="city" name="usercity" placeholder="City">
    </div>
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save</button>
    </div>
</form>

@endsection
