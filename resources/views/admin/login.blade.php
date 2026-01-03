@extends('layouts.admin')

@section('title', 'Admin Login - Ecommerce Store')

@section('content')
<div class="flex items-center justify-center" style="min-height: calc(100vh - 200px);">
    <div class="max-w-md w-full bg-white rounded-lg shadow-lg p-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Admin Login</h1>
            <p class="text-gray-600">Sign in to access the admin panel</p>
        </div>

        <form method="POST" action="#">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">
                    <i class="bi bi-envelope"></i> Email Address
                </label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    placeholder="admin@example.com"
                    required
                >
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-semibold mb-2">
                    <i class="bi bi-lock"></i> Password
                </label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    placeholder="Enter your password"
                    required
                >
            </div>

            <div class="mb-6 flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="mr-2">
                    <span class="text-gray-600">Remember me</span>
                </label>
                <a href="#" class="text-orange-500 hover:text-orange-600 no-underline text-sm">Forgot Password?</a>
            </div>

            <button 
                type="submit" 
                class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-4 rounded-lg transition-colors flex items-center justify-center gap-2"
            >
                <i class="bi bi-box-arrow-in-right"></i> Sign In
            </button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-gray-600">
                <a href="{{ route('home') }}" class="text-orange-500 hover:text-orange-600 no-underline">
                    <i class="bi bi-arrow-left"></i> Back to Website
                </a>
            </p>
        </div>
    </div>
</div>
@endsection

