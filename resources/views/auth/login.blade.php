@extends('layouts.app')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-md">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Welcome Back
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Please sign in to your account
            </p>
        </div>
        <form class="mt-8 space-y-6" method="POST" action="{{ url('/login') }}">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input id="email" name="email" type="email" required 
                        class="appearance-none relative block w-full px-3 py-2 border border-gray-300 
                        placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-green-500 
                        focus:border-green-500 focus:z-10 sm:text-sm mt-1">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required 
                        class="appearance-none relative block w-full px-3 py-2 border border-gray-300 
                        placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-green-500 
                        focus:border-green-500 focus:z-10 sm:text-sm mt-1">
                </div>
            </div>

            <div>
                <button type="submit" 
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent 
                    text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 
                    transition duration-150 ease-in-out">
                    Sign in
                </button>
            </div>
        </form>
        <p class="text-center text-sm text-gray-600">
            Don't have an account? 
            <a href="{{ route('register') }}" class="font-medium text-green-600 hover:text-green-500">
                Register here
            </a>
        </p>
    </div>
</div>
@endsection