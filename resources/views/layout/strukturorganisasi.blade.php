<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Font Awesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link rel="icon" class="w-[10rem]" href="{{ asset('logo-al.png') }}" type="image/x-icn">
@vite('resources/css/app.css')
</head>
<body>
    {{-- NavBar --}}
    @include('components.navbar')
    
    {{-- Dekstop --}}
    <div class=" flex flex-col justify-center items-center pt-[5rem] max-md:hidden">
        <h1 class=" text-4xl font-bold">
            Struktur Organisasi TNI-AL
        </h1>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <b>Struktur organisasi TNI Angkatan Laut (TNI AL)</b> adalah kerangka atau susunan hierarkis yang mengatur pembagian tugas, wewenang, tanggung jawab, dan koordinasi antarunit serta personel di lingkungan TNI AL. Struktur ini dirancang untuk mendukung pelaksanaan tugas pokok TNI AL, yaitu mempertahankan kedaulatan dan keamanan negara di wilayah laut Indonesia.
        </p>
        <img class=" w-[30rem] h-auto" src="{{asset('struktur.jpg')}}"/>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <b>1. Pimpinan TNI AL</b>
            <br>- Kepala Staf Angkatan Laut (KASAL)
            <br> Merupakan pucuk pimpinan TNI AL, bertanggung jawab langsung kepada Panglima TNI. KASAL mengoordinasikan seluruh kegiatan operasional dan administratif TNI AL.

            <br>- Wakil Kepala Staf Angkatan Laut (WAKASAL)
            <br>Membantu KASAL dalam menjalankan tugas, baik di bidang operasional maupun administrasi.

            <br><b>2. Komando Utama (Kotama) Operasi</b>
            <br>Kotama ini bertugas dalam pelaksanaan operasi militer di laut. Terdiri atas:

            <br>Komando Armada Republik Indonesia (Koarmada)
            <br>Dibagi menjadi tiga wilayah utama:

            <br>- Koarmada I (Barat): Berbasis di Jakarta. Mengamankan wilayah barat Indonesia.
            <br>- Koarmada II (Tengah): Berbasis di Surabaya. Mengamankan wilayah tengah Indonesia.
            <br>- Koarmada III (Timur): Berbasis di Sorong. Mengamankan wilayah timur Indonesia.
            <br>- Komando Lintas Laut Militer (Kolinlamil)
            <br>- Bertugas melaksanakan operasi lintas laut militer dan mengangkut personel atau logistik.

            <br>- Komando Pasukan Katak (Kopaska)
            <br>Unit khusus dengan tugas sabotase, anti-teror maritim, dan operasi khusus di laut.

            <br><b>3. Komando Utama (Kotama) Pembinaan</b>
            <br>Bertugas untuk melaksanakan pembinaan dan pengembangan kekuatan. Terdiri atas:

            <br>- Pusat Hidrografi dan Oseanografi TNI AL (Pushidrosal)
            <br>Bertugas melakukan survei dan pemetaan laut serta mendukung operasi militer.

            <br>- Komando Pendidikan dan Latihan Angkatan Laut (Kodiklatal)
            <br>Berbasis di Surabaya, berfungsi sebagai pusat pendidikan dan pelatihan personel TNI AL.

            <br>- Komando Pembinaan Doktrin, Pendidikan, dan Latihan TNI AL (Kodiklat)
            <br>Mengembangkan doktrin dan strategi perang laut.

            <br><b>4. Satuan Kerja Lain</b>
            <br>Korps Marinir (Kormar)
            <br>Pasukan tempur darat TNI AL yang beroperasi di wilayah pesisir dan pantai. Terdiri atas tiga divisi, yakni:

            <br>- Pasmar 1 (Surabaya)
            <br>- Pasmar 2 (Jakarta)
            <br>- Pasmar 3 (Sorong)
            <br>Pangkalan Utama TNI AL (Lantamal)
            <br>Pangkalan yang mendukung operasional armada di wilayah masing-masing.

            <br>Satuan Kapal Perang Republik Indonesia (Satlinlamil)
            <br>Mengelola dan mengoperasikan kapal-kapal perang.

            <br><b>5. Staf dan Fungsi Pendukung</b>
            <br>- Staf Operasi (Sopsal): Mengatur dan merencanakan operasi.
            <br>- Staf Intelijen (Sintelal): Melakukan pengumpulan informasi dan pengamanan.
            <br>- Staf Logistik (Slogal): Mengelola logistik dan kebutuhan operasional.
            <br>- Staf Personel (Spersal): Mengelola administrasi dan kesejahteraan personel.
            <br>- Staf Perencanaan dan Anggaran (Srenal): Menyusun anggaran dan perencanaan strategis.
            <br><b>6. Aset Pendukung Operasional</b>
            <br>- Kapal Perang Republik Indonesia (KRI): Kapal perang berbagai jenis, seperti fregat, korvet, dan kapal selam.
            <br>- Pesawat Udara TNI AL (Puspenerbal): Unit udara yang mendukung operasi maritim.
            <br>- Pangkalan Udara Angkatan Laut (Lanudal): Fasilitas untuk pesawat udara militer.
            <br><b>7. Tujuan dan Fungsi Organisasi</b>
            <br>- Pertahanan: Menjaga kedaulatan wilayah laut.
            <br>- Penegakan hukum: Memastikan keamanan maritim, termasuk pemberantasan pencurian ikan, perompakan, dan pelanggaran lainnya.
            <br>- Diplomasi: Menjalin kerja sama internasional untuk keamanan maritim.
            <br>- Pengabdian masyarakat: Mendukung tugas kemanusiaan, seperti operasi SAR dan bantuan bencana.

        </p>
    </div>

    {{-- Mobile --}}
    <div class=" flex flex-col justify-center items-center pt-[5rem] md:hidden">
        <h1 class=" text-2xl font-bold">
            Struktur Organisasi TNI-AL
        </h1>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            <b>Struktur organisasi TNI Angkatan Laut (TNI AL)</b> adalah kerangka atau susunan hierarkis yang mengatur pembagian tugas, wewenang, tanggung jawab, dan koordinasi antarunit serta personel di lingkungan TNI AL. Struktur ini dirancang untuk mendukung pelaksanaan tugas pokok TNI AL, yaitu mempertahankan kedaulatan dan keamanan negara di wilayah laut Indonesia.
        </p>
        <img class=" w-[15rem] h-auto pt-[1.5rem]" src="{{asset('struktur.jpg')}}"/>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            <b>1. Pimpinan TNI AL</b>
            <br>- Kepala Staf Angkatan Laut (KASAL)
            <br> Merupakan pucuk pimpinan TNI AL, bertanggung jawab langsung kepada Panglima TNI. KASAL mengoordinasikan seluruh kegiatan operasional dan administratif TNI AL.

            <br>- Wakil Kepala Staf Angkatan Laut (WAKASAL)
            <br>Membantu KASAL dalam menjalankan tugas, baik di bidang operasional maupun administrasi.

            <br><b>2. Komando Utama (Kotama) Operasi</b>
            <br>Kotama ini bertugas dalam pelaksanaan operasi militer di laut. Terdiri atas:

            <br>Komando Armada Republik Indonesia (Koarmada)
            <br>Dibagi menjadi tiga wilayah utama:

            <br>- Koarmada I (Barat): Berbasis di Jakarta. Mengamankan wilayah barat Indonesia.
            <br>- Koarmada II (Tengah): Berbasis di Surabaya. Mengamankan wilayah tengah Indonesia.
            <br>- Koarmada III (Timur): Berbasis di Sorong. Mengamankan wilayah timur Indonesia.
            <br>- Komando Lintas Laut Militer (Kolinlamil)
            <br>- Bertugas melaksanakan operasi lintas laut militer dan mengangkut personel atau logistik.

            <br>- Komando Pasukan Katak (Kopaska)
            <br>Unit khusus dengan tugas sabotase, anti-teror maritim, dan operasi khusus di laut.

            <br><b>3. Komando Utama (Kotama) Pembinaan</b>
            <br>Bertugas untuk melaksanakan pembinaan dan pengembangan kekuatan. Terdiri atas:

            <br>- Pusat Hidrografi dan Oseanografi TNI AL (Pushidrosal)
            <br>Bertugas melakukan survei dan pemetaan laut serta mendukung operasi militer.

            <br>- Komando Pendidikan dan Latihan Angkatan Laut (Kodiklatal)
            <br>Berbasis di Surabaya, berfungsi sebagai pusat pendidikan dan pelatihan personel TNI AL.

            <br>- Komando Pembinaan Doktrin, Pendidikan, dan Latihan TNI AL (Kodiklat)
            <br>Mengembangkan doktrin dan strategi perang laut.

            <br><b>4. Satuan Kerja Lain</b>
            <br>Korps Marinir (Kormar)
            <br>Pasukan tempur darat TNI AL yang beroperasi di wilayah pesisir dan pantai. Terdiri atas tiga divisi, yakni:

            <br>- Pasmar 1 (Surabaya)
            <br>- Pasmar 2 (Jakarta)
            <br>- Pasmar 3 (Sorong)
            <br>Pangkalan Utama TNI AL (Lantamal)
            <br>Pangkalan yang mendukung operasional armada di wilayah masing-masing.

            <br>Satuan Kapal Perang Republik Indonesia (Satlinlamil)
            <br>Mengelola dan mengoperasikan kapal-kapal perang.

            <br><b>5. Staf dan Fungsi Pendukung</b>
            <br>- Staf Operasi (Sopsal): Mengatur dan merencanakan operasi.
            <br>- Staf Intelijen (Sintelal): Melakukan pengumpulan informasi dan pengamanan.
            <br>- Staf Logistik (Slogal): Mengelola logistik dan kebutuhan operasional.
            <br>- Staf Personel (Spersal): Mengelola administrasi dan kesejahteraan personel.
            <br>- Staf Perencanaan dan Anggaran (Srenal): Menyusun anggaran dan perencanaan strategis.
            <br><b>6. Aset Pendukung Operasional</b>
            <br>- Kapal Perang Republik Indonesia (KRI): Kapal perang berbagai jenis, seperti fregat, korvet, dan kapal selam.
            <br>- Pesawat Udara TNI AL (Puspenerbal): Unit udara yang mendukung operasi maritim.
            <br>- Pangkalan Udara Angkatan Laut (Lanudal): Fasilitas untuk pesawat udara militer.
            <br><b>7. Tujuan dan Fungsi Organisasi</b>
            <br>- Pertahanan: Menjaga kedaulatan wilayah laut.
            <br>- Penegakan hukum: Memastikan keamanan maritim, termasuk pemberantasan pencurian ikan, perompakan, dan pelanggaran lainnya.
            <br>- Diplomasi: Menjalin kerja sama internasional untuk keamanan maritim.
            <br>- Pengabdian masyarakat: Mendukung tugas kemanusiaan, seperti operasi SAR dan bantuan bencana.

        </p>
    </div>
    {{-- footer --}}
    @include('components.footer')
</body>
</html>