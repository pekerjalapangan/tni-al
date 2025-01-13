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
            Sumpah Prajurit TNI-AL
        </h1>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <b>Sumpah Prajurit TNI Angkatan Laut (TNI AL)</b> adalah janji yang diucapkan oleh setiap prajurit TNI AL sebagai komitmen terhadap tugas, tanggung jawab, serta nilai-nilai luhur yang dijunjung tinggi oleh Tentara Nasional Indonesia. Sumpah ini merupakan bagian integral dari pembentukan karakter prajurit, membangun loyalitas kepada negara, serta memastikan kepatuhan terhadap hukum dan etika militer.

            <br><b>Isi Sumpah Prajurit TNI (Termasuk TNI AL)</b>
            <br>Secara umum, isi sumpah prajurit TNI, yang juga berlaku untuk TNI AL, adalah sebagai berikut:
        </p>
        <img class=" w-[30rem] h-auto pt-[1.5rem]" src="{{asset('sumpahprajurit.jpg')}}"/>
        <p class=" text-[1rem] w-[55rem] pt-[1.5rem] text-justify ">
            <b>1. Setia kepada Negara Kesatuan Republik Indonesia (NKRI) yang berdasarkan Pancasila dan UUD 1945.</b>
            <br><b>2. Taat kepada atasan dengan tidak membantah perintah atau putusan.</b>
            <br><b>3. Menjalankan segala kewajiban dengan penuh tanggung jawab kepada TNI dan NKRI.</b>
            <br><b>4. Memegang rahasia tentara sekeras-kerasnya</b>.
            <br><b>5. Menjunjung tinggi sikap dan kehormatan tentara serta memegang teguh kejujuran.</b>
            <br><b>6. Mempertanggungjawabkan segala tindakan kepada bangsa dan negara sesuai dengan prinsip kemiliteran.</b>
            <br><b>Makna Sumpah Prajurit:</b>
            <br>- Ketaatan kepada Pancasila dan UUD 1945: Menegaskan komitmen prajurit untuk menjunjung nilai-nilai ideologi negara, yang menjadi dasar kehidupan bermasyarakat, berbangsa, dan bernegara.
            <br>- Loyalitas kepada NKRI: TNI AL, sebagai bagian dari komponen pertahanan negara, diwajibkan untuk menjaga kedaulatan wilayah laut Indonesia.
            <br>- Disiplin dan Kepatuhan: Menunjukkan pentingnya hierarki, kepemimpinan, dan disiplin sebagai pilar utama dalam organisasi militer.
            <br>- Kejujuran dan Kehormatan: Membangun karakter moral yang mulia, sehingga setiap tindakan prajurit dapat dipercaya dan dihormati oleh masyarakat.
            <br>- Tanggung Jawab dan Pengabdian: Menanamkan kesadaran bahwa setiap tindakan dan keputusan seorang prajurit berdampak pada negara dan masyarakat.
            <br><b>Konsep dalam Kehidupan TNI AL:</b>
            <br>- Kesetiaan kepada Samudera: Sebagai prajurit matra laut, mereka dituntut memahami pentingnya menjaga kedaulatan maritim Indonesia.
            <br>- Profesionalisme dan Kesiapsiagaan: TNI AL harus selalu siap menghadapi tantangan di laut, baik dalam bentuk ancaman eksternal maupun bencana.
            <br>- Solidaritas dan Kebersamaan: Budaya gotong royong dan kerja tim sangat ditekankan untuk mencapai misi yang diemban bersama.
            <br><b>Implementasi Sumpah Prajurit dalam TNI AL:</b>
            <br>- Operasi Militer untuk Perang (OMP): Melindungi dan mempertahankan wilayah laut Indonesia dari ancaman luar.
            <br>- Operasi Militer Selain Perang (OMSP): Membantu tugas kemanusiaan, misalnya penanganan bencana, penyelamatan, atau pengamanan laut.
            <br>- Pembinaan Karakter dan Disiplin: Melalui latihan rutin, pendidikan militer, dan penanaman nilai-nilai keprajuritan sejak masa pelatihan.
            <br><b>Sumpah ini menjadi landasan moral, etika, dan profesionalisme seorang prajurit TNI AL, menjadikannya prajurit yang setia kepada bangsa dan negara, serta siap melindungi kedaulatan maritim Indonesia.</b>
        </p>
    </div>

    {{-- Mobile --}}
    <div class=" flex flex-col justify-center items-center pt-[5rem] md:hidden">
        <h1 class=" text-2xl font-bold">
            Sumpah Prajurit TNI-AL
        </h1>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            <b>Sumpah Prajurit TNI Angkatan Laut (TNI AL)</b> adalah janji yang diucapkan oleh setiap prajurit TNI AL sebagai komitmen terhadap tugas, tanggung jawab, serta nilai-nilai luhur yang dijunjung tinggi oleh Tentara Nasional Indonesia. Sumpah ini merupakan bagian integral dari pembentukan karakter prajurit, membangun loyalitas kepada negara, serta memastikan kepatuhan terhadap hukum dan etika militer.

            <br><b>Isi Sumpah Prajurit TNI (Termasuk TNI AL)</b>
            <br>Secara umum, isi sumpah prajurit TNI, yang juga berlaku untuk TNI AL, adalah sebagai berikut:
        </p>
        <img class=" w-[15rem] h-auto pt-[1.5rem]" src="{{asset('sumpahprajurit.jpg')}}"/>
        <p class=" text-[1rem] w-[20rem] pt-[1.5rem] text-justify">
            <b>1. Setia kepada Negara Kesatuan Republik Indonesia (NKRI) yang berdasarkan Pancasila dan UUD 1945.</b>
            <br><b>2. Taat kepada atasan dengan tidak membantah perintah atau putusan.</b>
            <br><b>3. Menjalankan segala kewajiban dengan penuh tanggung jawab kepada TNI dan NKRI.</b>
            <br><b>4. Memegang rahasia tentara sekeras-kerasnya</b>.
            <br><b>5. Menjunjung tinggi sikap dan kehormatan tentara serta memegang teguh kejujuran.</b>
            <br><b>6. Mempertanggungjawabkan segala tindakan kepada bangsa dan negara sesuai dengan prinsip kemiliteran.</b>
            <br><b>Makna Sumpah Prajurit:</b>
            <br>- Ketaatan kepada Pancasila dan UUD 1945: Menegaskan komitmen prajurit untuk menjunjung nilai-nilai ideologi negara, yang menjadi dasar kehidupan bermasyarakat, berbangsa, dan bernegara.
            <br>- Loyalitas kepada NKRI: TNI AL, sebagai bagian dari komponen pertahanan negara, diwajibkan untuk menjaga kedaulatan wilayah laut Indonesia.
            <br>- Disiplin dan Kepatuhan: Menunjukkan pentingnya hierarki, kepemimpinan, dan disiplin sebagai pilar utama dalam organisasi militer.
            <br>- Kejujuran dan Kehormatan: Membangun karakter moral yang mulia, sehingga setiap tindakan prajurit dapat dipercaya dan dihormati oleh masyarakat.
            <br>- Tanggung Jawab dan Pengabdian: Menanamkan kesadaran bahwa setiap tindakan dan keputusan seorang prajurit berdampak pada negara dan masyarakat.
            <br><b>Konsep dalam Kehidupan TNI AL:</b>
            <br>- Kesetiaan kepada Samudera: Sebagai prajurit matra laut, mereka dituntut memahami pentingnya menjaga kedaulatan maritim Indonesia.
            <br>- Profesionalisme dan Kesiapsiagaan: TNI AL harus selalu siap menghadapi tantangan di laut, baik dalam bentuk ancaman eksternal maupun bencana.
            <br>- Solidaritas dan Kebersamaan: Budaya gotong royong dan kerja tim sangat ditekankan untuk mencapai misi yang diemban bersama.
            <br><b>Implementasi Sumpah Prajurit dalam TNI AL:</b>
            <br>- Operasi Militer untuk Perang (OMP): Melindungi dan mempertahankan wilayah laut Indonesia dari ancaman luar.
            <br>- Operasi Militer Selain Perang (OMSP): Membantu tugas kemanusiaan, misalnya penanganan bencana, penyelamatan, atau pengamanan laut.
            <br>- Pembinaan Karakter dan Disiplin: Melalui latihan rutin, pendidikan militer, dan penanaman nilai-nilai keprajuritan sejak masa pelatihan.
            <br><b>Sumpah ini menjadi landasan moral, etika, dan profesionalisme seorang prajurit TNI AL, menjadikannya prajurit yang setia kepada bangsa dan negara, serta siap melindungi kedaulatan maritim Indonesia.</b>
        </p>
    </div>
    {{-- footer --}}
    @include('components.footer')
</body>
</html>