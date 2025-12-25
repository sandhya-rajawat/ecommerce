@extends('layouts.app')

@section('title', 'Shop - Ecommerce Store')

@section('content')
<!-- Shop Header -->
<section class="bg-orange-500 text-white py-8">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl md:text-4xl font-bold">Shop</h1>
        <p class="text-lg mt-2">Browse our complete collection of products</p>
    </div>
</section>

<!-- Shop Section -->
<section class="py-12">
    <div class="container mx-auto px-4">
        <!-- Filters and Search -->
        <div class="mb-8 flex flex-col md:flex-row gap-4 items-center justify-between">
            <div class="flex flex-col md:flex-row gap-4 flex-1">
                <input type="text" placeholder="Search products..." class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 w-full md:w-64">
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                    <option>All Categories</option>
                    <option>Electronics</option>
                    <option>Accessories</option>
                    <option>Computers</option>
                    <option>Mobile</option>
                </select>
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                    <option>Sort by: Price</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest First</option>
                </select>
            </div>
        </div>

        <!-- Products Grid -->
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

            <!-- Product Card 9 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
                <div class="bg-gray-100 flex items-center justify-center h-64">
                    <i class="bi bi-keyboard text-6xl text-gray-500"></i>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h5 class="text-xl font-semibold mb-2">Mechanical Keyboard</h5>
                    <p class="text-gray-600 mb-4">RGB backlit mechanical keyboard with tactile switches for gaming and typing.</p>
                    <div class="mt-auto">
                        <p class="text-2xl font-bold text-orange-500 mb-3">$129.99</p>
                        <a href="#" class="block w-full bg-orange-500 hover:bg-orange-600 text-white text-center py-2 px-4 rounded-lg transition-colors flex items-center justify-center gap-2">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 10 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
                <div class="bg-gray-100 flex items-center justify-center h-64">
                    <i class="bi bi-usb-drive text-6xl text-gray-500"></i>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h5 class="text-xl font-semibold mb-2">USB Flash Drive</h5>
                    <p class="text-gray-600 mb-4">High-speed USB 3.0 flash drive with 128GB storage capacity.</p>
                    <div class="mt-auto">
                        <p class="text-2xl font-bold text-orange-500 mb-3">$24.99</p>
                        <a href="#" class="block w-full bg-orange-500 hover:bg-orange-600 text-white text-center py-2 px-4 rounded-lg transition-colors flex items-center justify-center gap-2">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 11 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
                <div class="bg-gray-100 flex items-center justify-center h-64">
                    <i class="bi bi-display text-6xl text-gray-500"></i>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h5 class="text-xl font-semibold mb-2">4K Monitor</h5>
                    <p class="text-gray-600 mb-4">27-inch 4K UHD monitor with HDR support and ultra-slim bezels.</p>
                    <div class="mt-auto">
                        <p class="text-2xl font-bold text-orange-500 mb-3">$399.99</p>
                        <a href="#" class="block w-full bg-orange-500 hover:bg-orange-600 text-white text-center py-2 px-4 rounded-lg transition-colors flex items-center justify-center gap-2">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 12 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
                <div class="bg-gray-100 flex items-center justify-center h-64">
                    <i class="bi bi-router text-6xl text-gray-500"></i>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h5 class="text-xl font-semibold mb-2">WiFi Router</h5>
                    <p class="text-gray-600 mb-4">High-speed dual-band WiFi 6 router with advanced security features.</p>
                    <div class="mt-auto">
                        <p class="text-2xl font-bold text-orange-500 mb-3">$149.99</p>
                        <a href="#" class="block w-full bg-orange-500 hover:bg-orange-600 text-white text-center py-2 px-4 rounded-lg transition-colors flex items-center justify-center gap-2">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center gap-2">
            <a href="#" class="px-4 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 transition-colors">1</a>
            <a href="#" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">2</a>
            <a href="#" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">3</a>
            <a href="#" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">Next</a>
        </div>
    </div>
</section>
@endsection

