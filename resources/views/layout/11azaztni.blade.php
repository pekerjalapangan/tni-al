<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            11 Azaz TNI-AL
        </h1>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <b>11 Azas TNI Angkatan Laut adalah</b> serangkaian prinsip dasar atau nilai-nilai etika yang menjadi pedoman moral bagi setiap prajurit TNI Angkatan Laut (TNI AL). Azas ini dirancang untuk memastikan bahwa setiap anggota TNI AL menjalankan tugasnya dengan tanggung jawab, profesionalisme, dan integritas tinggi, sekaligus menjaga kehormatan institusi dan bangsa. Berikut adalah penjelasan mendalam mengenai setiap azas:
        </p>
        <img class=" w-[30rem] h-auto pt-[1.5rem]" src="{{asset('11azaz.jpg')}}"/>
        <p class=" text-[1rem] w-[55rem] pt-[1.5rem] text-justify">
            <br><b>1.Taqwa kepada Tuhan Yang Maha Esa</b>
            <br>- Azas ini menegaskan pentingnya keimanan dan ketakwaan kepada Tuhan Yang Maha Esa sebagai fondasi moral. Dalam konteks ini, setiap prajurit harus menjalankan tugasnya dengan kejujuran, moralitas yang tinggi, serta selalu memohon petunjuk dan kekuatan dari Tuhan.
            <br><b>2.Cinta Tanah Air dan Bangsa</b>
            <br>- Azas ini menggarisbawahi kewajiban prajurit untuk mencintai dan melindungi tanah air serta bangsa Indonesia. Semangat patriotisme menjadi pendorong utama dalam menjaga kedaulatan negara di wilayah maritim.
            <br><b>3. Setia kepada Pancasila dan UUD 1945</b>
            <br>- Kesetiaan kepada Pancasila sebagai ideologi negara dan UUD 1945 sebagai dasar hukum negara adalah prinsip mutlak. Hal ini berarti setiap tindakan prajurit harus sejalan dengan nilai-nilai yang terkandung dalam kedua landasan tersebut.
            <br><b>4. Berani, Rela Berkorban, dan Pantang Menyerah</b>
            <br>- Prajurit TNI AL dituntut untuk memiliki keberanian menghadapi segala risiko, kesediaan untuk berkorban demi kepentingan bangsa, dan semangat pantang menyerah dalam situasi apa pun, terutama dalam menjaga keamanan dan kedaulatan maritim.
            <br><b>5. Disiplin yang Tinggi</b>
            <br>- Disiplin adalah kunci keberhasilan dalam setiap pelaksanaan tugas. Prajurit diharapkan menjalankan tugas dengan penuh ketaatan terhadap aturan dan perintah, tanpa kompromi terhadap pelanggaran.
            <br><b>6. Tanggap, Tanggon, dan Trengginas</b>
            <br>- Tanggap: Mampu merespons dengan cepat setiap situasi atau perubahan yang terjadi.
            <br>- Tanggon: Memiliki ketangguhan fisik dan mental dalam menghadapi tantangan.
            <br>- Trengginas: Bekerja secara cerdas, lincah, dan efektif.
            <br>Kombinasi dari ketiga sifat ini membantu prajurit bertindak tepat dalam berbagai kondisi.
            <br><b>7. Loyalitas Tegak Lurus</b>
            <br>- Loyalitas tegak lurus berarti kesetiaan mutlak kepada atasan, institusi, dan negara, tanpa adanya penyimpangan atau kepentingan pribadi yang mengganggu hierarki dan komando yang sah.
            <br><b>8. Kekompakan dan Kesetiakawanan</b>
            <br>- Dalam menjalankan tugas, prajurit TNI AL harus mampu bekerja sama dengan anggota lainnya. Solidaritas dan kesetiakawanan memperkuat kohesi tim, menciptakan efisiensi, dan memudahkan pencapaian tujuan bersama.
            <br><b>9. Semangat Gotong Royong</b>
            <br>- TNI AL menanamkan nilai gotong royong sebagai bagian dari budaya Indonesia. Kerja sama kolektif antara prajurit, masyarakat, dan pemangku kepentingan lainnya diperlukan untuk menyelesaikan tugas-tugas secara maksimal.
            <br><b>10. Menjunjung Tinggi Kehormatan dan Harga Diri</b>
            <br>- Setiap prajurit harus menjaga martabat pribadi, kehormatan institusi TNI AL, serta nama baik bangsa dan negara. Hal ini berarti tidak hanya menghindari perilaku tercela, tetapi juga menjadi teladan dalam kehidupan bermasyarakat.
            <br><b>11. Kesadaran Hukum dan Keinsafan Politik</b>
            <br>- Prajurit TNI AL harus memahami dan mematuhi hukum yang berlaku, baik nasional maupun internasional. Selain itu, mereka harus memiliki kesadaran politik yang sehat, menjunjung netralitas, dan tidak terlibat dalam politik praktis.
        </p>
    </div>

    {{-- Mobile --}}
    <div class=" flex flex-col justify-center items-center pt-[5rem] md:hidden">
        <h1 class=" text-2xl font-bold">
            11 Azaz TNI-AL
        </h1>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            <b>11 Azas TNI Angkatan Laut adalah</b> serangkaian prinsip dasar atau nilai-nilai etika yang menjadi pedoman moral bagi setiap prajurit TNI Angkatan Laut (TNI AL). Azas ini dirancang untuk memastikan bahwa setiap anggota TNI AL menjalankan tugasnya dengan tanggung jawab, profesionalisme, dan integritas tinggi, sekaligus menjaga kehormatan institusi dan bangsa. Berikut adalah penjelasan mendalam mengenai setiap azas:
        </p>
        <img class=" w-[15rem] h-auto pt-[1.5rem]" src="{{asset('11azaz.jpg')}}"/>
        <p class=" text-[1rem] w-[20rem] pt-[1.5rem] text-justify">
            <br><b>1.Taqwa kepada Tuhan Yang Maha Esa</b>
            <br>- Azas ini menegaskan pentingnya keimanan dan ketakwaan kepada Tuhan Yang Maha Esa sebagai fondasi moral. Dalam konteks ini, setiap prajurit harus menjalankan tugasnya dengan kejujuran, moralitas yang tinggi, serta selalu memohon petunjuk dan kekuatan dari Tuhan.
            <br><b>2.Cinta Tanah Air dan Bangsa</b>
            <br>- Azas ini menggarisbawahi kewajiban prajurit untuk mencintai dan melindungi tanah air serta bangsa Indonesia. Semangat patriotisme menjadi pendorong utama dalam menjaga kedaulatan negara di wilayah maritim.
            <br><b>3. Setia kepada Pancasila dan UUD 1945</b>
            <br>- Kesetiaan kepada Pancasila sebagai ideologi negara dan UUD 1945 sebagai dasar hukum negara adalah prinsip mutlak. Hal ini berarti setiap tindakan prajurit harus sejalan dengan nilai-nilai yang terkandung dalam kedua landasan tersebut.
            <br><b>4. Berani, Rela Berkorban, dan Pantang Menyerah</b>
            <br>- Prajurit TNI AL dituntut untuk memiliki keberanian menghadapi segala risiko, kesediaan untuk berkorban demi kepentingan bangsa, dan semangat pantang menyerah dalam situasi apa pun, terutama dalam menjaga keamanan dan kedaulatan maritim.
            <br><b>5. Disiplin yang Tinggi</b>
            <br>- Disiplin adalah kunci keberhasilan dalam setiap pelaksanaan tugas. Prajurit diharapkan menjalankan tugas dengan penuh ketaatan terhadap aturan dan perintah, tanpa kompromi terhadap pelanggaran.
            <br><b>6. Tanggap, Tanggon, dan Trengginas</b>
            <br>- Tanggap: Mampu merespons dengan cepat setiap situasi atau perubahan yang terjadi.
            <br>- Tanggon: Memiliki ketangguhan fisik dan mental dalam menghadapi tantangan.
            <br>- Trengginas: Bekerja secara cerdas, lincah, dan efektif.
            <br>Kombinasi dari ketiga sifat ini membantu prajurit bertindak tepat dalam berbagai kondisi.
            <br><b>7. Loyalitas Tegak Lurus</b>
            <br>- Loyalitas tegak lurus berarti kesetiaan mutlak kepada atasan, institusi, dan negara, tanpa adanya penyimpangan atau kepentingan pribadi yang mengganggu hierarki dan komando yang sah.
            <br><b>8. Kekompakan dan Kesetiakawanan</b>
            <br>- Dalam menjalankan tugas, prajurit TNI AL harus mampu bekerja sama dengan anggota lainnya. Solidaritas dan kesetiakawanan memperkuat kohesi tim, menciptakan efisiensi, dan memudahkan pencapaian tujuan bersama.
            <br><b>9. Semangat Gotong Royong</b>
            <br>- TNI AL menanamkan nilai gotong royong sebagai bagian dari budaya Indonesia. Kerja sama kolektif antara prajurit, masyarakat, dan pemangku kepentingan lainnya diperlukan untuk menyelesaikan tugas-tugas secara maksimal.
            <br><b>10. Menjunjung Tinggi Kehormatan dan Harga Diri</b>
            <br>- Setiap prajurit harus menjaga martabat pribadi, kehormatan institusi TNI AL, serta nama baik bangsa dan negara. Hal ini berarti tidak hanya menghindari perilaku tercela, tetapi juga menjadi teladan dalam kehidupan bermasyarakat.
            <br><b>11. Kesadaran Hukum dan Keinsafan Politik</b>
            <br>- Prajurit TNI AL harus memahami dan mematuhi hukum yang berlaku, baik nasional maupun internasional. Selain itu, mereka harus memiliki kesadaran politik yang sehat, menjunjung netralitas, dan tidak terlibat dalam politik praktis.
        </p>
    </div>
    {{-- footer --}}
    @include('components.footer')
</body>
</html>