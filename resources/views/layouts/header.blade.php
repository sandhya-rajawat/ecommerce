<!-- Navbar -->
<nav class="bg-gray-900 text-white">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-4">
            <a href="{{ route('home') }}" class="text-xl font-bold flex items-center gap-2">
                <i class="bi bi-shop"></i> Ecommerce Store
            </a>
            <button class="md:hidden text-white" id="mobile-menu-button">
                <i class="bi bi-list text-2xl"></i>
            </button>
            <ul class="hidden md:flex items-center gap-6" id="navbar-menu">
                <li>
                    <a href="{{ route('home') }}" class="hover:text-orange-500 transition-colors flex items-center gap-1">
                        <i class="bi bi-house"></i> Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('shop') }}" class="hover:text-orange-500 transition-colors flex items-center gap-1">
                        <i class="bi bi-grid"></i> Shop
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:text-orange-500 transition-colors flex items-center gap-1">
                        <i class="bi bi-cart"></i> Cart
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:text-orange-500 transition-colors flex items-center gap-1">
                        <i class="bi bi-gear"></i> Admin
                    </a>
                </li>
            </ul>
        </div>
        <!-- Mobile Menu -->
        <div class="hidden md:hidden pb-4" id="mobile-menu">
            <ul class="flex flex-col gap-3">
                <li>
                    <a href="{{ route('home') }}" class="hover:text-orange-500 transition-colors flex items-center gap-1">
                        <i class="bi bi-house"></i> Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('shop') }}" class="hover:text-orange-500 transition-colors flex items-center gap-1">
                        <i class="bi bi-grid"></i> Shop
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:text-orange-500 transition-colors flex items-center gap-1">
                        <i class="bi bi-cart"></i> Cart
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:text-orange-500 transition-colors flex items-center gap-1">
                        <i class="bi bi-gear"></i> Admin
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu?.classList.toggle('hidden');
    });
</script>

