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

    {{-- Desktop --}}
    <div class=" flex flex-col justify-center items-center pt-[5rem] max-md:hidden">
        <h1 class=" text-4xl font-bold">
            Sapta Marga TNI-AL
        </h1>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <b>Sapta Marga</b> adalah pedoman moral dan etika yang menjadi dasar kehidupan bagi prajurit Tentara Nasional Indonesia (TNI), termasuk TNI Angkatan Laut. Sapta Marga menggambarkan nilai-nilai luhur yang harus dijunjung tinggi oleh setiap prajurit dalam menjalankan tugas dan kehidupannya sebagai abdi negara. Berikut adalah penjelasan secara detail tentang isi dan makna Sapta Marga dalam konteks TNI Angkatan Laut:
        </p>
        <img class=" w-[30rem] h-auto pt-[1.5rem]" src="{{asset('saptamarga.jpg')}}"/>
        <p class=" text-[1rem] w-[55rem] pt-[1.5rem] text-justify">
            <br><b>Isi Sapta Marga:</b>
            <br><b>1. Kami Warga Negara Kesatuan Republik Indonesia yang Bersendikan Pancasila.</b>
            <br>Makna: Prajurit TNI harus menjadikan Pancasila sebagai dasar moral, hukum, dan perilaku, serta mengabdikan dirinya kepada Negara Kesatuan Republik Indonesia (NKRI). Sebagai bagian dari TNI Angkatan Laut, mereka bertugas menjaga kedaulatan di wilayah perairan.

            <br><b>2. Kami Patriot Indonesia, Pendukung serta Pembela Ideologi Negara yang Bertanggung Jawab dan Tidak Mengenal Menyerah.</b>
            <br>Makna: Prajurit TNI Angkatan Laut adalah patriot yang setia kepada negara dan ideologi Pancasila. Mereka siap mempertahankan wilayah perairan Indonesia dari segala ancaman, baik dari dalam maupun luar negeri.

            <br><b>3. Kami Kesatria Indonesia yang Bertakwa Kepada Tuhan Yang Maha Esa, serta Membela Kejujuran, Kebenaran, dan Keadilan.</b>
            <br>Makna: Prajurit TNI Angkatan Laut harus memiliki moral tinggi, menjunjung kejujuran, dan bersikap adil, sesuai dengan keimanan kepada Tuhan Yang Maha Esa.

            <br><b>4. Kami Prajurit Tentara Nasional Indonesia Adalah Bhayangkari Negara dan Bangsa Indonesia.</b>
            <br>Makna: TNI Angkatan Laut bertugas sebagai penjaga keamanan dan kedaulatan negara di lautan, melindungi bangsa dari ancaman militer maupun nonmiliter.

            <br><b>5. Kami Memegang Teguh Disiplin, Patuh, dan Taat Kepada Pimpinan serta Menjunjung Tinggi Sifat Hormat-Menghormati Serta Saling Menghargai.</b>
            <br>Makna: Dalam melaksanakan tugas, prajurit harus mematuhi perintah komando, menghormati rekan sejawat, serta membangun kerja sama yang harmonis.

            <br><b>6. Kami Mengutamakan Kepentingan Negara dan Bangsa di Atas Kepentingan Pribadi.</b>
            <br>Makna: Prajurit TNI Angkatan Laut harus mendahulukan kepentingan nasional dibandingkan kepentingan pribadi atau golongan.

            <br><b>7. Kami Menepati Janji Serta Sumpah Prajurit.</b>
            <br>Makna: Prajurit TNI Angkatan Laut harus selalu menjaga integritas, memenuhi janji, dan menjalankan sumpah prajurit secara konsisten.

        </p>
    </div>

    {{-- Mobile --}}
    <div class=" flex flex-col justify-center items-center pt-[5rem] md:hidden">
        <h1 class=" text-2xl font-bold">
            Sapta Marga TNI-AL
        </h1>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            <b>Sapta Marga</b> adalah pedoman moral dan etika yang menjadi dasar kehidupan bagi prajurit Tentara Nasional Indonesia (TNI), termasuk TNI Angkatan Laut. Sapta Marga menggambarkan nilai-nilai luhur yang harus dijunjung tinggi oleh setiap prajurit dalam menjalankan tugas dan kehidupannya sebagai abdi negara. Berikut adalah penjelasan secara detail tentang isi dan makna Sapta Marga dalam konteks TNI Angkatan Laut:
        </p>
        <img class=" w-[15rem] h-auto pt-[1.5rem]" src="{{asset('saptamarga.jpg')}}"/>
        <p class=" text-[1rem] w-[20rem] pt-[1.5rem] text-justify">
            <br><b>Isi Sapta Marga:</b>
            <br><b>1. Kami Warga Negara Kesatuan Republik Indonesia yang Bersendikan Pancasila.</b>
            <br>Makna: Prajurit TNI harus menjadikan Pancasila sebagai dasar moral, hukum, dan perilaku, serta mengabdikan dirinya kepada Negara Kesatuan Republik Indonesia (NKRI). Sebagai bagian dari TNI Angkatan Laut, mereka bertugas menjaga kedaulatan di wilayah perairan.

            <br><b>2. Kami Patriot Indonesia, Pendukung serta Pembela Ideologi Negara yang Bertanggung Jawab dan Tidak Mengenal Menyerah.</b>
            <br>Makna: Prajurit TNI Angkatan Laut adalah patriot yang setia kepada negara dan ideologi Pancasila. Mereka siap mempertahankan wilayah perairan Indonesia dari segala ancaman, baik dari dalam maupun luar negeri.

            <br><b>3. Kami Kesatria Indonesia yang Bertakwa Kepada Tuhan Yang Maha Esa, serta Membela Kejujuran, Kebenaran, dan Keadilan.</b>
            <br>Makna: Prajurit TNI Angkatan Laut harus memiliki moral tinggi, menjunjung kejujuran, dan bersikap adil, sesuai dengan keimanan kepada Tuhan Yang Maha Esa.

            <br><b>4. Kami Prajurit Tentara Nasional Indonesia Adalah Bhayangkari Negara dan Bangsa Indonesia.</b>
            <br>Makna: TNI Angkatan Laut bertugas sebagai penjaga keamanan dan kedaulatan negara di lautan, melindungi bangsa dari ancaman militer maupun nonmiliter.

            <br><b>5. Kami Memegang Teguh Disiplin, Patuh, dan Taat Kepada Pimpinan serta Menjunjung Tinggi Sifat Hormat-Menghormati Serta Saling Menghargai.</b>
            <br>Makna: Dalam melaksanakan tugas, prajurit harus mematuhi perintah komando, menghormati rekan sejawat, serta membangun kerja sama yang harmonis.

            <br><b>6. Kami Mengutamakan Kepentingan Negara dan Bangsa di Atas Kepentingan Pribadi.</b>
            <br>Makna: Prajurit TNI Angkatan Laut harus mendahulukan kepentingan nasional dibandingkan kepentingan pribadi atau golongan.

            <br><b>7. Kami Menepati Janji Serta Sumpah Prajurit.</b>
            <br>Makna: Prajurit TNI Angkatan Laut harus selalu menjaga integritas, memenuhi janji, dan menjalankan sumpah prajurit secara konsisten.
        </p>
    </div>
    {{-- footer --}}
    @include('components.footer')
</body>
</html>