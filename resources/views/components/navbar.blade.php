<nav class="bg-sky-800 shadow-sm">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Logo/Brand -->
            <a href="/" class="text-xl font-semibold text-white hover:text-sky-100 transition">
                Prak PWL
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex space-x-1">
                <a href="/user"
                    class="px-4 py-2 text-sm font-medium text-sky-100 hover:text-white hover:bg-sky-700 rounded-lg transition {{ request()->is('user*') ? 'bg-sky-700 text-white' : '' }}">
                    User
                </a>
                <a href="/matakuliah"
                    class="px-4 py-2 text-sm font-medium text-sky-100 hover:text-white hover:bg-sky-700 rounded-lg transition {{ request()->is('matakuliah*') ? 'bg-sky-700 text-white' : '' }}">
                    Matakuliah
                </a>
            </div>

            <!-- Mobile menu button -->
            <button type="button"
                class="md:hidden p-2 text-sky-100 hover:text-white hover:bg-sky-700 rounded-lg transition"
                onclick="toggleMobileMenu()">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobileMenu" class="hidden md:hidden pb-4">
            <div class="flex flex-col space-y-1">
                <a href="/user"
                    class="px-4 py-2 text-sm font-medium text-sky-100 hover:text-white hover:bg-sky-700 rounded-lg transition {{ request()->is('user*') ? 'bg-sky-700 text-white' : '' }}">
                    User
                </a>
                <a href="/matakuliah"
                    class="px-4 py-2 text-sm font-medium text-sky-100 hover:text-white hover:bg-sky-700 rounded-lg transition {{ request()->is('matakuliah*') ? 'bg-sky-700 text-white' : '' }}">
                    Matakuliah
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobileMenu');
        menu.classList.toggle('hidden');
    }
</script>
