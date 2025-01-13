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
            Trisila TNI-AL
        </h1>
        <p class=" text-[1rem w-[55rem] text-justify pt-[1.5rem]">
            <b>Trisila TNI Angkatan Laut adalah</b> pedoman moral dan etika yang menjadi landasan perilaku, sikap, dan tindakan prajurit TNI Angkatan Laut (TNI AL). Trisila ini berfungsi untuk menjaga kehormatan dan martabat TNI AL sebagai institusi pertahanan negara di bidang maritim. Trisila TNI AL terdiri dari tiga nilai utama:
        </p>
        <img class=" w-[30rem] h-auto pt-[1.5rem]" src="{{asset('trisila.jpg')}}"/>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <b>1. Disiplin</b>
            <br><b>a. Makna:</b> Disiplin mencerminkan ketaatan penuh terhadap aturan, perintah, dan prosedur yang berlaku. Disiplin adalah fondasi utama dalam militer, terutama untuk TNI AL yang sering menghadapi situasi dinamis di laut.
            <br><b>b. Implementasi:</b>
            <br>- Melaksanakan perintah atasan tanpa keraguan dan sesuai standar operasi.
            <br>- Mematuhi peraturan militer dan hukum yang berlaku, baik di dalam maupun di luar tugas.
            <br>- Mampu menjaga ketertiban diri, kapal, maupun lingkungan kerja.
            <br><b>2. Hierarki</b>
            <br><b>a. Makna:</b> Hierarki menegaskan pentingnya struktur organisasi dan rantai komando dalam pelaksanaan tugas di TNI AL. Setiap anggota harus memahami dan menghormati posisi, tanggung jawab, dan kewenangan masing-masing dalam organisasi.
            <br><b>b.Implementasi:</b>
            <br>- Menghormati dan menaati perintah dari atasan yang sah.
            <br>- Memimpin bawahan dengan tanggung jawab dan memberikan contoh yang baik.
            <br>- Tidak melewati rantai komando dalam melaksanakan tugas atau melaporkan permasalahan.
            <br><b>3. Kehormatan Militer</b>
            <br><b>a. Makna:</b> Kehormatan militer mencakup integritas, loyalitas, dan dedikasi tinggi terhadap negara dan TNI AL. Nilai ini juga menggarisbawahi pentingnya menjaga citra baik TNI AL di mata masyarakat dan dunia internasional.
            <br><b>b. Implementasi:</b>
            <br>- Bertindak jujur, adil, dan bertanggung jawab dalam setiap keputusan.
            <br>- Menjunjung tinggi nama baik TNI AL melalui sikap profesional dan bermoral.
            <br>- Menghormati hak asasi manusia serta menunjukkan sikap patriotisme yang nyata.
            <br><b>Fungsi Trisila TNI AL:</b>
            <br>- Sebagai pedoman hidup: Setiap prajurit TNI AL diharapkan menjadikan Trisila sebagai dasar sikap dan tindakan, baik dalam tugas maupun kehidupan sehari-hari.
            <br>- Sebagai alat pemersatu: Trisila menjadi nilai bersama yang memperkuat solidaritas dan kerja sama antar prajurit.
            <br>- Sebagai penguat karakter: Dengan mengamalkan Trisila, prajurit TNI AL membangun karakter yang tangguh, berwibawa, dan profesional.
            <br><b>Penerapan Trisila dalam Operasi dan Kehidupan Sehari-hari:</b>
            <br>- Dalam operasi militer, disiplin dan hierarki memastikan kelancaran pelaksanaan misi, sementara kehormatan militer menjaga hubungan baik dengan masyarakat, bangsa, dan komunitas internasional. Dalam kehidupan sehari-hari, Trisila mengajarkan prajurit TNI AL untuk menjadi teladan di tengah masyarakat, menunjukkan sikap profesional, dan memperkuat kepercayaan publik terhadap institusi pertahanan negara.

            <br>- Dengan menjalankan Trisila, TNI Angkatan Laut diharapkan dapat terus menjadi kekuatan yang terpercaya dalam menjaga kedaulatan dan keutuhan Negara Kesatuan Republik Indonesia, terutama di wilayah laut.
        </p>
    </div>

    {{-- Mobile --}}
    <div class=" flex flex-col justify-center items-center pt-[5rem] md:hidden">
        <h1 class=" text-2xl font-bold">
            Trisila TNI-AL
        </h1>
        <p class=" text-[1rem w-[20rem] text-justify pt-[1.5rem]">
            <b>Trisila TNI Angkatan Laut adalah</b> pedoman moral dan etika yang menjadi landasan perilaku, sikap, dan tindakan prajurit TNI Angkatan Laut (TNI AL). Trisila ini berfungsi untuk menjaga kehormatan dan martabat TNI AL sebagai institusi pertahanan negara di bidang maritim. Trisila TNI AL terdiri dari tiga nilai utama:
        </p>
        <img class=" w-[15rem] h-auto pt-[1.5rem]" src="{{asset('trisila.jpg')}}"/>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            <br><b>1. Disiplin</b>
            <br><b>a. Makna:</b> Disiplin mencerminkan ketaatan penuh terhadap aturan, perintah, dan prosedur yang berlaku. Disiplin adalah fondasi utama dalam militer, terutama untuk TNI AL yang sering menghadapi situasi dinamis di laut.
            <br><b>b. Implementasi:</b>
            <br>- Melaksanakan perintah atasan tanpa keraguan dan sesuai standar operasi.
            <br>- Mematuhi peraturan militer dan hukum yang berlaku, baik di dalam maupun di luar tugas.
            <br>- Mampu menjaga ketertiban diri, kapal, maupun lingkungan kerja.
            <br><b>2. Hierarki</b>
            <br><b>a. Makna:</b> Hierarki menegaskan pentingnya struktur organisasi dan rantai komando dalam pelaksanaan tugas di TNI AL. Setiap anggota harus memahami dan menghormati posisi, tanggung jawab, dan kewenangan masing-masing dalam organisasi.
            <br><b>b.Implementasi:</b>
            <br>- Menghormati dan menaati perintah dari atasan yang sah.
            <br>- Memimpin bawahan dengan tanggung jawab dan memberikan contoh yang baik.
            <br>- Tidak melewati rantai komando dalam melaksanakan tugas atau melaporkan permasalahan.
            <br><b>3. Kehormatan Militer</b>
            <br><b>a. Makna:</b> Kehormatan militer mencakup integritas, loyalitas, dan dedikasi tinggi terhadap negara dan TNI AL. Nilai ini juga menggarisbawahi pentingnya menjaga citra baik TNI AL di mata masyarakat dan dunia internasional.
            <br><b>b. Implementasi:</b>
            <br>- Bertindak jujur, adil, dan bertanggung jawab dalam setiap keputusan.
            <br>- Menjunjung tinggi nama baik TNI AL melalui sikap profesional dan bermoral.
            <br>- Menghormati hak asasi manusia serta menunjukkan sikap patriotisme yang nyata.
            <br><b>Fungsi Trisila TNI AL:</b>
            <br>- Sebagai pedoman hidup: Setiap prajurit TNI AL diharapkan menjadikan Trisila sebagai dasar sikap dan tindakan, baik dalam tugas maupun kehidupan sehari-hari.
            <br>- Sebagai alat pemersatu: Trisila menjadi nilai bersama yang memperkuat solidaritas dan kerja sama antar prajurit.
            <br>- Sebagai penguat karakter: Dengan mengamalkan Trisila, prajurit TNI AL membangun karakter yang tangguh, berwibawa, dan profesional.
            <br><b>Penerapan Trisila dalam Operasi dan Kehidupan Sehari-hari:</b>
            <br>- Dalam operasi militer, disiplin dan hierarki memastikan kelancaran pelaksanaan misi, sementara kehormatan militer menjaga hubungan baik dengan masyarakat, bangsa, dan komunitas internasional. Dalam kehidupan sehari-hari, Trisila mengajarkan prajurit TNI AL untuk menjadi teladan di tengah masyarakat, menunjukkan sikap profesional, dan memperkuat kepercayaan publik terhadap institusi pertahanan negara.

            <br>- Dengan menjalankan Trisila, TNI Angkatan Laut diharapkan dapat terus menjadi kekuatan yang terpercaya dalam menjaga kedaulatan dan keutuhan Negara Kesatuan Republik Indonesia, terutama di wilayah laut.
        </p>
    </div>
    {{-- footer --}}
    @include('components.footer')
</body>
</html>