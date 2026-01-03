@extends('layouts.admin')

@section('title', 'Dashboard - Admin Panel')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="bg-white rounded-lg shadow p-6">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Dashboard</h1>
        <p class="text-gray-600">Welcome back! Here's what's happening with your store today.</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Sales Card -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-medium">Total Sales</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">$45,231</p>
                    <p class="text-green-600 text-sm mt-1">
                        <i class="bi bi-arrow-up"></i> 12.5% from last month
                    </p>
                </div>
                <div class="bg-orange-100 rounded-full p-3">
                    <i class="bi bi-currency-dollar text-2xl text-orange-500"></i>
                </div>
            </div>
        </div>

        <!-- Total Orders Card -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-medium">Total Orders</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">1,234</p>
                    <p class="text-green-600 text-sm mt-1">
                        <i class="bi bi-arrow-up"></i> 8.2% from last month
                    </p>
                </div>
                <div class="bg-blue-100 rounded-full p-3">
                    <i class="bi bi-cart text-2xl text-blue-500"></i>
                </div>
            </div>
        </div>

        <!-- Total Products Card -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-medium">Total Products</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">567</p>
                    <p class="text-green-600 text-sm mt-1">
                        <i class="bi bi-arrow-up"></i> 3 new today
                    </p>
                </div>
                <div class="bg-green-100 rounded-full p-3">
                    <i class="bi bi-box text-2xl text-green-500"></i>
                </div>
            </div>
        </div>

        <!-- Total Customers Card -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-medium">Total Customers</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">8,901</p>
                    <p class="text-green-600 text-sm mt-1">
                        <i class="bi bi-arrow-up"></i> 15 new today
                    </p>
                </div>
                <div class="bg-purple-100 rounded-full p-3">
                    <i class="bi bi-people text-2xl text-purple-500"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Orders and Quick Actions -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Orders -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-xl font-bold text-gray-900">Recent Orders</h2>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex items-center justify-between pb-4 border-b border-gray-200">
                        <div>
                            <p class="font-semibold text-gray-900">Order #1234</p>
                            <p class="text-sm text-gray-600">John Doe - $299.99</p>
                        </div>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Completed</span>
                    </div>
                    <div class="flex items-center justify-between pb-4 border-b border-gray-200">
                        <div>
                            <p class="font-semibold text-gray-900">Order #1235</p>
                            <p class="text-sm text-gray-600">Jane Smith - $149.99</p>
                        </div>
                        <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">Pending</span>
                    </div>
                    <div class="flex items-center justify-between pb-4 border-b border-gray-200">
                        <div>
                            <p class="font-semibold text-gray-900">Order #1236</p>
                            <p class="text-sm text-gray-600">Mike Johnson - $599.99</p>
                        </div>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Processing</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="font-semibold text-gray-900">Order #1237</p>
                            <p class="text-sm text-gray-600">Sarah Williams - $89.99</p>
                        </div>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Completed</span>
                    </div>
                </div>
                <div class="mt-6">
                    <a href="#" class="text-orange-500 hover:text-orange-600 no-underline font-medium">
                        View All Orders <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-xl font-bold text-gray-900">Quick Actions</h2>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-2 gap-4">
                    <a href="#" class="flex flex-col items-center justify-center p-6 border-2 border-gray-200 rounded-lg hover:border-orange-500 hover:bg-orange-50 transition-colors">
                        <i class="bi bi-plus-circle text-3xl text-orange-500 mb-2"></i>
                        <span class="text-gray-700 font-medium">Add Product</span>
                    </a>
                    <a href="#" class="flex flex-col items-center justify-center p-6 border-2 border-gray-200 rounded-lg hover:border-orange-500 hover:bg-orange-50 transition-colors">
                        <i class="bi bi-tags text-3xl text-orange-500 mb-2"></i>
                        <span class="text-gray-700 font-medium">Add Category</span>
                    </a>
                    <a href="#" class="flex flex-col items-center justify-center p-6 border-2 border-gray-200 rounded-lg hover:border-orange-500 hover:bg-orange-50 transition-colors">
                        <i class="bi bi-bar-chart text-3xl text-orange-500 mb-2"></i>
                        <span class="text-gray-700 font-medium">View Reports</span>
                    </a>
                    <a href="#" class="flex flex-col items-center justify-center p-6 border-2 border-gray-200 rounded-lg hover:border-orange-500 hover:bg-orange-50 transition-colors">
                        <i class="bi bi-gear text-3xl text-orange-500 mb-2"></i>
                        <span class="text-gray-700 font-medium">Settings</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

