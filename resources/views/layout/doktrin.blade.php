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
            Doktrin TNI-AL
        </h1>
        <p class=" tetx-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <b>Doktrin TNI Angkatan Laut</b> adalah pedoman resmi yang berisi prinsip, konsep, dan cara bertindak yang menjadi dasar bagi pengelolaan dan pelaksanaan tugas-tugas TNI AL. Doktrin ini dirancang untuk membentuk pola pikir, pola sikap, dan pola tindak personel TNI AL dalam melaksanakan tugas pertahanan negara di laut.

            Komponen Utama Doktrin TNI Angkatan Laut
            Dasar Hukum dan Filosofi

            Doktrin TNI AL bersandar pada UUD 1945, terutama Pasal 30 tentang pertahanan dan keamanan negara, serta Pasal 25 tentang wilayah perairan Indonesia.
            <br>Filosofinya berdasarkan Pancasila sebagai landasan ideologi bangsa dan Sapta Marga, Sumpah Prajurit, serta Delapan Wajib TNI sebagai pedoman moral prajurit.
            <br>Visi dan Misi TNI AL

            <br><b>Visi:</b> Menjadi komponen utama pertahanan negara di laut yang tangguh, profesional, dan modern.
            <br><b>Misi:</b> Menjaga kedaulatan negara di laut, melindungi kepentingan nasional di wilayah perairan, dan mendukung tugas TNI secara keseluruhan.
            <br><b>Prinsip Operasional Doktrin TNI AL mencakup prinsip-prinsip berikut:</b>

            <br>- Kecepatan dan Mobilitas: TNI AL harus mampu bergerak dengan cepat untuk merespons ancaman di wilayah perairan.
            <br>- Interoperabilitas: Kemampuan untuk bekerja sama dengan TNI AD, TNI AU, dan instansi lain.
            <br>- Keberlanjutan Operasi: Menjamin kemampuan bertahan dalam operasi jangka panjang.
            <br>- Fleksibilitas: Mampu menyesuaikan strategi sesuai situasi.
            
        </p>
        <img class=" w-[30rem] h-auto pt-[1.5rem]" src="{{asset('doktrin.jpg')}}"/>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <b>a. Jenis-Jenis Operasi TNI AL Berdasarkan Doktrin</b>
            <br>- Operasi Militer untuk Perang (OMP):

            Operasi laut dalam menghadapi ancaman militer dari negara lain.
            Termasuk operasi amfibi, operasi pertahanan laut, dan operasi blokade.
            <br>- Operasi Militer Selain Perang (OMSP):

            Operasi penegakan hukum di laut, seperti menangani pembajakan, penyelundupan, dan pencurian ikan (illegal fishing).
            Operasi SAR (Search and Rescue) di perairan.
            Mendukung diplomasi militer untuk menjaga perdamaian internasional.
            <br><b>b. Fungsi Utama Doktrin TNI AL</b>
            Pertahanan Wilayah Laut:
            <br>- Melindungi kedaulatan negara di wilayah perairan Indonesia, termasuk Zona Ekonomi Eksklusif (ZEE) dan landas kontinen.
            Penegakan Hukum:
            <br>- Menjaga keamanan laut dari ancaman seperti pencurian sumber daya alam, perompakan, dan pelanggaran hukum lainnya.
            <br>- Proyeksi Kekuatan:
            Mendukung operasi militer di luar negeri, seperti dalam misi perdamaian atau operasi koalisi internasional.
            <br>- Diplomasi Maritim:
            Menjalankan diplomasi pertahanan, seperti latihan bersama dengan angkatan laut negara sahabat.
            Pilar Utama Doktrin TNI AL
            <br><b>Tri Sila TNI AL:</b>

            <br><b>Jalesveva Jayamahe (Di Laut Kita Jaya):</b> Menekankan pentingnya kekuatan maritim bagi Indonesia.
            Bhineka Eka Bhakti: Menjunjung kesatuan TNI dalam mempertahankan negara.
            Tata Wira Jala: Mematuhi aturan dan etika maritim internasional.
            Konsep Keamanan Maritim TNI AL menerapkan Sea Power (kekuatan laut) untuk menjamin kebebasan navigasi, perlindungan sumber daya laut, dan pengendalian wilayah maritim strategis.

            <br><b>Implementasi Doktrin TNI AL</b>
            Doktrin diterapkan melalui pelatihan rutin, latihan perang, dan pengadaan alutsista modern, seperti kapal selam, frigat, dan pesawat patroli maritim.
            Kerjasama dengan pihak lain, seperti Kementerian Kelautan dan Perikanan, Bea Cukai, dan Polairud untuk pengamanan laut.
        </p>
    </div>

    {{-- Mobile --}}
    <div class=" flex flex-col justify-center items-center pt-[5rem] md:hidden">
        <h1 class=" text-2xl font-bold">
            Doktrin TNI-AL
        </h1>
        <p class=" tetx-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            <b>Doktrin TNI Angkatan Laut</b> adalah pedoman resmi yang berisi prinsip, konsep, dan cara bertindak yang menjadi dasar bagi pengelolaan dan pelaksanaan tugas-tugas TNI AL. Doktrin ini dirancang untuk membentuk pola pikir, pola sikap, dan pola tindak personel TNI AL dalam melaksanakan tugas pertahanan negara di laut.

            Komponen Utama Doktrin TNI Angkatan Laut
            Dasar Hukum dan Filosofi

            Doktrin TNI AL bersandar pada UUD 1945, terutama Pasal 30 tentang pertahanan dan keamanan negara, serta Pasal 25 tentang wilayah perairan Indonesia.
            <br>Filosofinya berdasarkan Pancasila sebagai landasan ideologi bangsa dan Sapta Marga, Sumpah Prajurit, serta Delapan Wajib TNI sebagai pedoman moral prajurit.
            <br>Visi dan Misi TNI AL

            <br><b>Visi:</b> Menjadi komponen utama pertahanan negara di laut yang tangguh, profesional, dan modern.
            <br><b>Misi:</b> Menjaga kedaulatan negara di laut, melindungi kepentingan nasional di wilayah perairan, dan mendukung tugas TNI secara keseluruhan.
            <br><b>Prinsip Operasional Doktrin TNI AL mencakup prinsip-prinsip berikut:</b>

            <br>- Kecepatan dan Mobilitas: TNI AL harus mampu bergerak dengan cepat untuk merespons ancaman di wilayah perairan.
            <br>- Interoperabilitas: Kemampuan untuk bekerja sama dengan TNI AD, TNI AU, dan instansi lain.
            <br>- Keberlanjutan Operasi: Menjamin kemampuan bertahan dalam operasi jangka panjang.
            <br>- Fleksibilitas: Mampu menyesuaikan strategi sesuai situasi.
        </p>
        <img class=" w-[15rem] h-auto pt-[1.5rem]" src="{{asset('doktrin.jpg')}}"/>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            <br><b>a. Jenis-Jenis Operasi TNI AL Berdasarkan Doktrin</b>
            <br>- Operasi Militer untuk Perang (OMP):

            Operasi laut dalam menghadapi ancaman militer dari negara lain.
            Termasuk operasi amfibi, operasi pertahanan laut, dan operasi blokade.
            <br>- Operasi Militer Selain Perang (OMSP):

            Operasi penegakan hukum di laut, seperti menangani pembajakan, penyelundupan, dan pencurian ikan (illegal fishing).
            Operasi SAR (Search and Rescue) di perairan.
            Mendukung diplomasi militer untuk menjaga perdamaian internasional.
            <br><b>b. Fungsi Utama Doktrin TNI AL</b>
            Pertahanan Wilayah Laut:
            <br>- Melindungi kedaulatan negara di wilayah perairan Indonesia, termasuk Zona Ekonomi Eksklusif (ZEE) dan landas kontinen.
            Penegakan Hukum:
            <br>- Menjaga keamanan laut dari ancaman seperti pencurian sumber daya alam, perompakan, dan pelanggaran hukum lainnya.
            <br>- Proyeksi Kekuatan:
            Mendukung operasi militer di luar negeri, seperti dalam misi perdamaian atau operasi koalisi internasional.
            <br>- Diplomasi Maritim:
            Menjalankan diplomasi pertahanan, seperti latihan bersama dengan angkatan laut negara sahabat.
            Pilar Utama Doktrin TNI AL
            <br><b>Tri Sila TNI AL:</b>

            <br><b>Jalesveva Jayamahe (Di Laut Kita Jaya):</b> Menekankan pentingnya kekuatan maritim bagi Indonesia.
            Bhineka Eka Bhakti: Menjunjung kesatuan TNI dalam mempertahankan negara.
            Tata Wira Jala: Mematuhi aturan dan etika maritim internasional.
            Konsep Keamanan Maritim TNI AL menerapkan Sea Power (kekuatan laut) untuk menjamin kebebasan navigasi, perlindungan sumber daya laut, dan pengendalian wilayah maritim strategis.

            <br><b>Implementasi Doktrin TNI AL</b>
            Doktrin diterapkan melalui pelatihan rutin, latihan perang, dan pengadaan alutsista modern, seperti kapal selam, frigat, dan pesawat patroli maritim.
            Kerjasama dengan pihak lain, seperti Kementerian Kelautan dan Perikanan, Bea Cukai, dan Polairud untuk pengamanan laut.
        </p>
    </div>
    {{-- footer --}}
    @include('components.footer')
</body>
</html>