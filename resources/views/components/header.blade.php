<header class="h-[36rem] max-md:h-[27rem] bg-white relative overflow-hidden">
    {{-- Gambar --}}
    <div id="carousel" class="w-full h-full">
        <img src="{{ asset('al-1.jpeg') }}" class="w-full h-full object-cover absolute transition-opacity duration-1000 opacity-100" alt="Image 1">
        <img src="{{ asset('al-2.jpg') }}" class="w-full h-full object-cover absolute transition-opacity duration-1000 opacity-0" alt="Image 2">
        <img src="{{ asset('al-3.jpg') }}" class="w-full h-full object-cover absolute transition-opacity duration-1000 opacity-0" alt="Image 3">
    </div>

    {{-- Logo --}}
    <div  class="absolute top-0 left-0 right-0 bottom-0 flex justify-center items-center z-20">
        <img class="w-[15rem] max-md:w-[10rem] object-contain" src="{{ asset('logo-al.png') }}" alt="Logo"/>
    </div>
</header>

<script>
    let currentIndex = 0;
    const images = document.querySelectorAll('#carousel img');
    
    function changeImage() {
        // Menyembunyikan gambar yang aktif saat ini
        images[currentIndex].classList.remove('opacity-100');
        images[currentIndex].classList.add('opacity-0');
        
        // Menghitung index gambar berikutnya
        currentIndex = (currentIndex + 1) % images.length;
        
        // Menampilkan gambar berikutnya
        images[currentIndex].classList.remove('opacity-0');
        images[currentIndex].classList.add('opacity-100');
    }

    // Mengubah gambar setiap 5 detik
    setInterval(changeImage, 5000);
</script>



