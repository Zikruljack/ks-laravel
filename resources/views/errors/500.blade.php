@extends('layouts.app')
@section('title', '500 - Internal Server Error')

@section('content')
    <div
        class="min-h-screen bg-gradient-to-r from-yellow-400 to-yellow-600 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow-lg rounded-lg sm:px-10">
                <div class="text-center">
                    <h2 class="text-4xl font-extrabold text-yellow-700">500 - Server Error</h2>
                    <p class="mt-4 text-lg text-gray-700">Sorry, something went wrong on our end. Please try again later.</p>
                    <a href="{{ url('/') }}"
                        class="mt-6 inline-block bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-700">
                        Go Back Home
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
