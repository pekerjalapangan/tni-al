{{-- NavBar --}}
<nav class="flex justify-between items-center p-4 shadow-lg">
    {{-- Logo/Brand --}}
    <div class="flex items-center gap-2">
        <img class="w-[4rem]" src="{{asset('logo-al.png')}}" alt="Logo"/>
        <p class="font-bold">
            <span class=" text-yellow-600">TNI</span> <span class="text-black max-md:text-black">ANGKATAN</span> <span class="text-yellow-600">LAUT</span>
        </p>
    </div>

    {{-- Navigation Menu --}}
    <div class="hidden md:flex items-center gap-6 relative"> <!-- Menyembunyikan menu pada mobile -->
        <a href="/" class="text-black font- hover:text-yellow-600 hover:underline underline-offset-8 duration-500">
            <p>Beranda</p>
        </a>
        <a href="#" class="text-black hover:text-yellow-600 hover:underline underline-offset-8 duration-500">
            <p>Profil</p>
        </a>

        <a href="https://tni.mil.id/" target="_blank" class="text-black hover:text-yellow-600 hover:underline underline-offset-8 hover:underline">
            <p>Rekrutmen</p>
        </a>

        {{-- Dropdown Menu "Tentang" --}}
        <div class="relative group">
            <a href="#" id="tentang-link" class="text-black hover:text-yellow-600 hover:underline underline-offset-8 duration-500">
                <p>Tentang</p>
            </a>
            {{-- Dropdown Menu --}}
            <div id="dropdown-content" class="dropdown-content absolute left-0 hidden mt-2 p-2 bg-white shadow-lg rounded-md z-50">
                <a href="/sejarah" class="block px-4 py-2 text-black hover:text-yellow-600">Sejarah</a>
                <a href="/kepangkatan" class="block px-4 py-2 text-black hover:text-yellow-600">Kepangkatan</a>
                <a href="/pasukan-khusus" class="block px-4 py-2 text-black hover:text-yellow-600">Pasukan Khusus</a>
            </div>
        </div>

        
        <a href="#" class="text-black hover:text-yellow-600 hover:underline underline-offset-8 duration-500">
            <p>Service</p>
        </a>
    </div>

    {{-- Hamburger Menu (Mobile) --}}
    <div class="md:hidden flex items-center">
        <button id="menu-toggle" class="text-black">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
</nav>

{{-- Mobile Sidebar (Hidden by default) --}}
<div id="mobile-sidebar" class="md:hidden fixed top-0 left-0 h-full w-3/4 bg-black shadow-lg z-50 transform -translate-x-full transition-transform duration-300">
    
    {{-- Close Button --}}
    <button id="close-sidebar" class="text-white absolute top-4 right-4">
        <i class="fas fa-times w-6 h-6"></i>
    </button>
    
    {{-- Logo --}}
    <div class="flex justify-center pt-8 pb-4">
        <img class="w-20 h-auto" src="{{asset('logo-al.png')}}" alt="Logo" />
    </div>

    {{-- Menu Items --}}
    <div class="flex flex-col gap-6 p-6">
        <a href="/" class="text-white hover:text-yellow-600 hover:underline underline-offset-8 duration-500">
            <p>Beranda</p>
        </a>
        <a href="#" class="text-white hover:text-yellow-600 hover:underline underline-offset-8 duration-500">
            <p>Profil</p>
        </a>

        <a href="https://tni.mil.id/" target="_blank" class="text-white hover:text-yellow-600 hover:underline underline-offset-8 duration-500">
            <p>Rekrutmen</p>
        </a>

        {{-- Dropdown Menu "Tentang" --}}
        <div class="relative">
            <a href="#" id="mobile-tentang-link" class="text-white hover:text-yellow-600 hover:underline underline-offset-8 duration-500">
                <p>Tentang</p>
            </a>
            {{-- Dropdown Menu --}}
            <div id="mobile-dropdown-content" class="dropdown-content hidden mt-2 p-2 bg-white shadow-lg rounded-md z-50">
                <a href="/sejarah" class="block px-4 py-2 text-black hover:text-yellow-600">Sejarah</a>
                <a href="/kepangkatan" class="block px-4 py-2 text-black hover:text-yellow-600">Kepangkatan</a>
                <a href="/pasukan-khusus" class="block px-4 py-2 text-black hover:text-yellow-600">Pasukan Khusus</a>
            </div>
        </div>

        
        <a href="#" class="text-white hover:text-yellow-600 hover:underline underline-offset-8 duration-500">
            <p>Service</p>
        </a>
    </div>

    {{-- Social Media Icons --}}
    <div class="flex justify-center gap-4 py-4">
        <!-- Facebook Icon -->
        <a href="https://facebook.com/tniangakatanlaut" target="_blank" class="text-white hover:text-yellow-600">
            <i class="fab fa-facebook-f w-6 h-6"></i>
        </a>

        <!-- Twitter Icon -->
        <a href="https://twitter.com/tni_angkatanlaut" target="_blank" class="text-white hover:text-yellow-600">
            <i class="fab fa-twitter w-6 h-6"></i>
        </a>

        <!-- Instagram Icon -->
        <a href="https://instagram.com/tni_angkatanlaut" target="_blank" class="text-white hover:text-yellow-600">
            <i class="fab fa-instagram w-6 h-6"></i>
        </a>
    </div>

    {{-- Copyright Text --}}
    <div class="text-center text-white text-sm pb-4">
        <p>&copy; TNI Angkatan Laut 2024</p>
    </div>
</div>

{{-- Script to toggle sidebar --}}
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileSidebar = document.getElementById('mobile-sidebar');
    const closeSidebar = document.getElementById('close-sidebar');

    // Toggle sidebar when the hamburger icon is clicked
    menuToggle.addEventListener('click', () => {
        mobileSidebar.classList.toggle('-translate-x-full'); // Show the sidebar
    });

    // Close sidebar when the close button (X) is clicked
    closeSidebar.addEventListener('click', () => {
        mobileSidebar.classList.add('-translate-x-full'); // Hide the sidebar
    });
</script>

{{-- Script for "Tentang" dropdown toggle --}}
<script>
    // Menangani event klik pada menu "Tentang" untuk Desktop
    const tentangLink = document.getElementById('tentang-link');
    const dropdownContent = document.getElementById('dropdown-content');

    tentangLink.addEventListener('click', (event) => {
        event.preventDefault(); // Mencegah default action (misalnya reload halaman)
        dropdownContent.classList.toggle('hidden'); // Toggle visibilitas submenu
    });

    // Menangani event klik pada menu "Tentang" untuk Mobile
    const mobileTentangLink = document.getElementById('mobile-tentang-link');
    const mobileDropdownContent = document.getElementById('mobile-dropdown-content');

    mobileTentangLink.addEventListener('click', (event) => {
        event.preventDefault(); // Mencegah default action (misalnya reload halaman)
        mobileDropdownContent.classList.toggle('hidden'); // Toggle visibilitas submenu
    });
</script>

{{-- Additional CSS for Dropdown --}}
<style>
    /* Submenu secara default tersembunyi */
    .dropdown-content {
        display: none;
    }

    /* Menampilkan submenu ketika kelas "hidden" tidak ada */
    .dropdown-content:not(.hidden) {
        display: block;
    }

    /* Efek hover pada menu "Tentang" */
    .group:hover > a {
        color: #F59E0B; /* Ubah warna teks saat hover pada elemen induk */
    }
</style>
