<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Panel - Ecommerce Store')</title>
    
    <!-- Bootstrap CSS (for Bootstrap classes) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Tailwind Config for Orange Theme -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'orange-custom': '#ff8c42',
                        'orange-dark': '#ff7a1a',
                    }
                }
            }
        }
    </script>
    
    @stack('styles')
</head>
<body class="bg-gray-100">
    <!-- Admin Header -->
    <nav class="bg-gray-900 text-white shadow-lg">
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between align-items-center py-3">
                <div class="d-flex align-items-center gap-3">
                    <a href="{{ route('home') }}" class="text-xl font-bold text-white text-decoration-none">
                        <i class="bi bi-shop"></i> Ecommerce Admin
                    </a>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <a href="{{ route('home') }}" class="text-white text-decoration-none hover:text-orange-500">
                        <i class="bi bi-house"></i> View Site
                    </a>
                    <div class="dropdown">
                        <button class="btn btn-link text-white text-decoration-none dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle"></i> Admin
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="d-flex">
        <!-- Sidebar -->
        <aside class="bg-white shadow-sm" style="width: 250px; min-height: calc(100vh - 60px);">
            <nav class="p-3">
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="#" class="d-flex align-items-center gap-2 px-3 py-2 text-decoration-none text-dark rounded hover:bg-gray-100">
                            <i class="bi bi-speedometer2"></i> Dashboard
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="d-flex align-items-center gap-2 px-3 py-2 text-decoration-none text-dark rounded hover:bg-gray-100">
                            <i class="bi bi-box"></i> Products
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="d-flex align-items-center gap-2 px-3 py-2 text-decoration-none text-dark rounded hover:bg-gray-100">
                            <i class="bi bi-tags"></i> Categories
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="d-flex align-items-center gap-2 px-3 py-2 text-decoration-none text-dark rounded hover:bg-gray-100">
                            <i class="bi bi-cart"></i> Orders
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="d-flex align-items-center gap-2 px-3 py-2 text-decoration-none text-dark rounded hover:bg-gray-100">
                            <i class="bi bi-people"></i> Customers
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="d-flex align-items-center gap-2 px-3 py-2 text-decoration-none text-dark rounded hover:bg-gray-100">
                            <i class="bi bi-chat-dots"></i> Reviews
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="d-flex align-items-center gap-2 px-3 py-2 text-decoration-none text-dark rounded hover:bg-gray-100">
                            <i class="bi bi-bar-chart"></i> Reports
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="d-flex align-items-center gap-2 px-3 py-2 text-decoration-none text-dark rounded hover:bg-gray-100">
                            <i class="bi bi-gear"></i> Settings
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-grow-1 p-4">
            @yield('content')
        </main>
    </div>

    @stack('scripts')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


