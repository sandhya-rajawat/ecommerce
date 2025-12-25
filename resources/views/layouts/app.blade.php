<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Ecommerce Store')</title>
    
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
<body>
    @include('layouts.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    
    @stack('scripts')
</body>
</html>

