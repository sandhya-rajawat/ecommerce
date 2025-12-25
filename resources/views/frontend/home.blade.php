@extends('layouts.app')

@section('title', 'Home - Ecommerce Store')

@section('content')
<!-- Hero Section -->
<section class="bg-orange-500 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-8">
            <div class="lg:w-1/2">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to Our Store</h1>
                <p class="text-lg md:text-xl mb-6">Discover amazing products at unbeatable prices. Shop the latest trends and find everything you need in one place.</p>
                <a href="{{ route('shop') }}" class="inline-flex items-center gap-2 bg-white text-orange-500 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                    <i class="bi bi-bag"></i> Shop Now
                </a>
            </div>
            <div class="lg:w-1/2 text-center">
                <i class="bi bi-shop-window text-[15rem] opacity-30"></i>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="py-12">
    <div class="container mx-auto px-4">
        <div class="mb-10 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-2">Featured Products</h2>
            <p class="text-gray-600">Check out our most popular items</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Product Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
                <div class="bg-gray-100 flex items-center justify-center h-64">
                    <i class="bi bi-phone text-6xl text-gray-500"></i>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h5 class="text-xl font-semibold mb-2">Smartphone Pro</h5>
                    <p class="text-gray-600 mb-4">Latest technology with advanced features and stunning design.</p>
                    <div class="mt-auto">
                        <p class="text-2xl font-bold text-orange-500 mb-3">$599.99</p>
                        <a href="#" class="block w-full bg-orange-500 hover:bg-orange-600 text-white text-center py-2 px-4 rounded-lg transition-colors flex items-center justify-center gap-2">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
                <div class="bg-gray-100 flex items-center justify-center h-64">
                    <i class="bi bi-laptop text-6xl text-gray-500"></i>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h5 class="text-xl font-semibold mb-2">Laptop Ultra</h5>
                    <p class="text-gray-600 mb-4">Powerful performance for work and entertainment on the go.</p>
                    <div class="mt-auto">
                        <p class="text-2xl font-bold text-orange-500 mb-3">$1,299.99</p>
                        <a href="#" class="block w-full bg-orange-500 hover:bg-orange-600 text-white text-center py-2 px-4 rounded-lg transition-colors flex items-center justify-center gap-2">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
                <div class="bg-gray-100 flex items-center justify-center h-64">
                    <i class="bi bi-headphones text-6xl text-gray-500"></i>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h5 class="text-xl font-semibold mb-2">Wireless Headphones</h5>
                    <p class="text-gray-600 mb-4">Premium sound quality with noise cancellation technology.</p>
                    <div class="mt-auto">
                        <p class="text-2xl font-bold text-orange-500 mb-3">$199.99</p>
                        <a href="#" class="block w-full bg-orange-500 hover:bg-orange-600 text-white text-center py-2 px-4 rounded-lg transition-colors flex items-center justify-center gap-2">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
                <div class="bg-gray-100 flex items-center justify-center h-64">
                    <i class="bi bi-smartwatch text-6xl text-gray-500"></i>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h5 class="text-xl font-semibold mb-2">Smart Watch</h5>
                    <p class="text-gray-600 mb-4">Track your fitness, receive notifications, and stay connected on the go.</p>
                    <div class="mt-auto">
                        <p class="text-2xl font-bold text-orange-500 mb-3">$249.99</p>
                        <a href="#" class="block w-full bg-orange-500 hover:bg-orange-600 text-white text-center py-2 px-4 rounded-lg transition-colors flex items-center justify-center gap-2">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
                <div class="bg-gray-100 flex items-center justify-center h-64">
                    <i class="bi bi-tablet text-6xl text-gray-500"></i>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h5 class="text-xl font-semibold mb-2">Tablet Pro</h5>
                    <p class="text-gray-600 mb-4">Perfect for work, entertainment, and creative projects with stunning display.</p>
                    <div class="mt-auto">
                        <p class="text-2xl font-bold text-orange-500 mb-3">$449.99</p>
                        <a href="#" class="block w-full bg-orange-500 hover:bg-orange-600 text-white text-center py-2 px-4 rounded-lg transition-colors flex items-center justify-center gap-2">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
                <div class="bg-gray-100 flex items-center justify-center h-64">
                    <i class="bi bi-camera text-6xl text-gray-500"></i>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h5 class="text-xl font-semibold mb-2">Digital Camera</h5>
                    <p class="text-gray-600 mb-4">Capture stunning photos and videos with professional quality imaging.</p>
                    <div class="mt-auto">
                        <p class="text-2xl font-bold text-orange-500 mb-3">$799.99</p>
                        <a href="#" class="block w-full bg-orange-500 hover:bg-orange-600 text-white text-center py-2 px-4 rounded-lg transition-colors flex items-center justify-center gap-2">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 7 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
                <div class="bg-gray-100 flex items-center justify-center h-64">
                    <i class="bi bi-speaker text-6xl text-gray-500"></i>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h5 class="text-xl font-semibold mb-2">Bluetooth Speaker</h5>
                    <p class="text-gray-600 mb-4">Portable wireless speaker with rich bass and crystal clear sound.</p>
                    <div class="mt-auto">
                        <p class="text-2xl font-bold text-orange-500 mb-3">$89.99</p>
                        <a href="#" class="block w-full bg-orange-500 hover:bg-orange-600 text-white text-center py-2 px-4 rounded-lg transition-colors flex items-center justify-center gap-2">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 8 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
                <div class="bg-gray-100 flex items-center justify-center h-64">
                    <i class="bi bi-mouse text-6xl text-gray-500"></i>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h5 class="text-xl font-semibold mb-2">Wireless Mouse</h5>
                    <p class="text-gray-600 mb-4">Ergonomic design with precision tracking and long battery life.</p>
                    <div class="mt-auto">
                        <p class="text-2xl font-bold text-orange-500 mb-3">$39.99</p>
                        <a href="#" class="block w-full bg-orange-500 hover:bg-orange-600 text-white text-center py-2 px-4 rounded-lg transition-colors flex items-center justify-center gap-2">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


