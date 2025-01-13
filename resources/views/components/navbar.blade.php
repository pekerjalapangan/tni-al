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
        <a href="/" class="text-black hover:text-yellow-600 hover:underline underline-offset-8 duration-500">
            <p>Beranda</p>
        </a>
        
        {{-- Dropdown Menu "Profil" --}}
        <div class="relative group">
            <a href="#" id="profil-link" class="text-black hover:text-yellow-600 hover:underline underline-offset-8 duration-500">
                <p>Profil</p>
            </a>
            {{-- Dropdown Menu --}}
            <div id="dropdown-profil-content" class="dropdown-content whitespace-nowrap absolute left-0 hidden mt-2 p-2 bg-white shadow-xl rounded-md z-50">
                <a href="/visimisi" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Visi dan Misi</a>
                <a href="/tugas" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Tugas TNI AL</a>
                <a href="/doktrin" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Doktrin</a>
                <a href="/trisila" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Trsila</a>
                <a href="/strukturorganisasi" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Struktur Organisasi</a>
                <a href="/jatidiri" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Jati Diri TNI</a>
                <a href="/saptamarga" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Sapta Marga</a>
                <a href="/sumpahprajurit" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Sumpah Prajurit</a>
                <a href="/8wajibtni" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">8 Wajib TNI</a>
                <a href="/11azaztni" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">11 Azaz Kepemimpinan</a>
                
            </div>
        </div>

        <a href="https://tni.mil.id/" target="_blank" class="text-black hover:text-yellow-600 hover:underline underline-offset-8 duration-500">
            <p>Rekrutmen</p>
        </a>

        {{-- Dropdown Menu "Tentang" --}}
        <div class="relative group">
            <a href="#" id="tentang-link" class="text-black hover:text-yellow-600 hover:underline underline-offset-8 duration-500">
                <p>Tentang</p>
            </a>
            {{-- Dropdown Menu --}}
            <div id="dropdown-content" class="dropdown-content whitespace-nowrap absolute left-0 hidden mt-2 p-2 bg-white shadow-lg rounded-md z-50">
                <a href="/sejarah" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Sejarah</a>
                <a href="/kepangkatan" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Kepangkatan</a>
                <a href="/pasukan-khusus" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Pasukan Khusus</a>
            </div>
        </div>

        <a href="" class="text-black hover:text-yellow-600 hover:underline underline-offset-8 duration-500">
            <p>Service</p>
        </a>
        <a href=" /login">
        <button class=" bg-blue-600 text-white hover:bg-green-600 duration-500 rounded-2xl p-2 px-[2rem] shadow-lg ">
            Login
        </button>
        </a>
        <a>
        <button class=" bg-blue-600 text-white hover:bg-green-600 duration-500 rounded-2xl p-2 px-[2rem] shadow-lg ">
            Register
        </button>
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

{{-- Mobile Sidebar --}} 
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
        
        {{-- Dropdown Menu "Profil" --}}
        <div class="relative">
            <a href="#" id="mobile-profil-link" class="text-white hover:text-yellow-600 hover:underline underline-offset-8 duration-500">
                <p>Profil</p>
            </a>
            <div id="mobile-dropdown-profil-content" class="dropdown-content hidden mt-2 p-2 bg-white shadow-lg rounded-md z-50">
                <a href="/visimisi" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Visi dan Misi</a>
                <a href="/tugas" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Tugas TNI AL</a>
                <a href="/doktrin" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Doktrin</a>
                <a href="/trisila" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Trsila</a>
                <a href="/strukturorganisasi" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Struktur Organisasi</a>
                <a href="/jatidiri" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Jati Diri TNI</a>
                <a href="/saptamarga" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Sapta Marga</a>
                <a href="/sumpahprajurit" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Sumpah Prajurit</a>
                <a href="/8wajibtni" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">8 Wajib TNI</a>
                <a href="/11azaztni" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">11 Azaz Kepemimpinan</a>
                
            </div>
        </div>

        <a href="https://tni.mil.id/" target="_blank" class="text-white hover:text-yellow-600 hover:underline underline-offset-8 duration-500">
            <p>Rekrutmen</p>
        </a>

        {{-- Dropdown Menu "Tentang" --}}
        <div class="relative">
            <a href="#" id="mobile-tentang-link" class="text-white hover:text-yellow-600 hover:underline underline-offset-8 duration-500">
                <p>Tentang</p>
            </a>
            <div id="mobile-dropdown-tentang-content" class="dropdown-content hidden mt-2 p-2 bg-white shadow-lg rounded-md z-50">
                <a href="/sejarah" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Sejarah</a>
                <a href="/kepangkatan" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Kepangkatan</a>
                <a href="/pasukan-khusus" class="block px-4 py-2 text-black hover:bg-blue-600 hover:text-white">Pasukan Khusus</a>
            </div>
        </div>

        

        <a href="#" class="text-white hover:text-yellow-600 hover:underline underline-offset-8 duration-500">
            <p>Service</p>
        </a>
    </div>
</div>


{{-- Script --}}
<script>
    // Desktop "Profil" Dropdown
    const profilLink = document.getElementById('profil-link');
    const dropdownProfilContent = document.getElementById('dropdown-profil-content');

    profilLink.addEventListener('click', (event) => {
        event.preventDefault();
        dropdownProfilContent.classList.toggle('hidden');
    });

    // Mobile "Tentang" Dropdown
    const mobileTentangLink = document.getElementById('mobile-tentang-link');
    const mobileDropdownTentangContent = document.getElementById('mobile-dropdown-tentang-content');

    mobileTentangLink.addEventListener('click', (event) => {
        event.preventDefault();
        mobileDropdownTentangContent.classList.toggle('hidden');
    });


    // Mobile "Profil" Dropdown
    const mobileProfilLink = document.getElementById('mobile-profil-link');
    const mobileDropdownProfilContent = document.getElementById('mobile-dropdown-profil-content');

    mobileProfilLink.addEventListener('click', (event) => {
        event.preventDefault();
        mobileDropdownProfilContent.classList.toggle('hidden');
    });

    // Tentang Dropdown Script (Desktop & Mobile)
    const tentangLink = document.getElementById('tentang-link');
    const dropdownContent = document.getElementById('dropdown-content');
    tentangLink.addEventListener('click', (event) => {
        event.preventDefault();
        dropdownContent.classList.toggle('hidden');
    });

    const menuToggle = document.getElementById('menu-toggle');
    const mobileSidebar = document.getElementById('mobile-sidebar');
    const closeSidebar = document.getElementById('close-sidebar');

    // Toggle sidebar
    menuToggle.addEventListener('click', () => {
        mobileSidebar.classList.toggle('-translate-x-full');
    });

    closeSidebar.addEventListener('click', () => {
        mobileSidebar.classList.add('-translate-x-full');
    });
</script>
