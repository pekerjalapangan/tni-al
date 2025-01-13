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
            8 Wajib TNI-AL
        </h1>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <b>8 Wajib TNI Angkatan Laut adalah</b> pedoman moral, etika, dan perilaku yang wajib dipatuhi oleh setiap prajurit TNI Angkatan Laut (TNI AL). Pedoman ini mencerminkan nilai-nilai dasar TNI AL dalam menjalankan tugasnya sebagai penjaga kedaulatan maritim Indonesia serta sebagai bagian dari masyarakat yang mengayomi dan melindungi rakyat.

            <br>8 Wajib TNI AL memiliki tujuan untuk memastikan bahwa setiap prajurit memiliki sikap yang profesional, berintegritas, humanis, dan menjunjung tinggi martabat bangsa. Pedoman ini mengatur hubungan prajurit dengan rakyat dan sesama anggota, baik dalam situasi resmi maupun kehidupan sehari-hari.
        </p>
        <img class=" w-[30rem] h-auto pt-[1.5rem]" src="{{asset('8wajibtni.jpg')}}"/>
        <p class=" text-[1rem] w-[55rem] pt-[1.5rem] text-justify">
            <br><b>1. Bersikap ramah-tamah terhadap rakyat</b>
            <br>Makna:
            <br>Prajurit TNI AL harus menjaga hubungan yang baik dengan masyarakat, menunjukkan sikap hormat, ramah, dan tidak arogan. Rakyat adalah bagian dari keluarga besar bangsa, sehingga hubungan harmonis perlu dijaga untuk memperkuat kepercayaan masyarakat terhadap TNI.
            <br><b>2. Bersikap sopan santun terhadap rakyat</b>
            <br>Makna:
            <br>Prajurit wajib menjaga tata krama, berbicara dengan santun, dan memperlakukan rakyat dengan hormat. Ini penting untuk mencerminkan profesionalisme TNI AL sebagai penjaga keamanan maritim yang berbudaya.
            <br><b>3. Menjunjung tinggi kehormatan wanita</b>
            <br>Makna:
            <br>TNI AL ditekankan untuk menghormati martabat dan hak perempuan, tidak melakukan tindakan yang merendahkan, melecehkan, atau merugikan perempuan, baik secara fisik maupun verbal. Hal ini adalah bagian dari etika profesional seorang prajurit.
            <br><b>4. Menjaga kehormatan diri di muka umum</b>
            <br>Makna:
            <br>Setiap prajurit harus menjaga sikap dan perilaku yang mencerminkan kehormatan TNI AL di mata masyarakat. Hindari tindakan yang dapat mencemarkan nama baik institusi, seperti perbuatan tercela atau pelanggaran hukum.
            <br><b>5. Senantiasa menjadi contoh dalam sikap dan kesederhanaan</b>
            <br>Makna:
            <br>Prajurit harus menjadi teladan bagi masyarakat dalam perilaku sehari-hari, seperti hidup sederhana, rendah hati, dan menjauhi gaya hidup hedonis. Sikap ini menunjukkan kedekatan dengan rakyat dan komitmen terhadap pengabdian.
            <br><b>6. Tidak sekali-kali merugikan rakyat</b>
            <br>Makna:
            <br>TNI AL tidak boleh melakukan tindakan yang menyakiti atau merugikan masyarakat, baik secara langsung (fisik, materi) maupun tidak langsung (kebijakan atau tindakan yang tidak adil).
            <br><b>7. Tidak sekali-kali menakuti dan menyakiti hati rakyat</b>
            <br>Makna:
            <br>Setiap prajurit harus menghindari tindakan intimidasi, kekerasan, atau ucapan yang dapat melukai perasaan rakyat. Hubungan antara TNI AL dan masyarakat harus dibangun atas dasar kepercayaan dan penghormatan.
            <br><b>8. Menjadi contoh dan mempelopori usaha-usaha untuk mengatasi kesulitan rakyat sekelilingnya</b>
            <br>Makna:
            <br>Prajurit TNI AL harus berperan aktif membantu masyarakat dalam mengatasi masalah, seperti memberikan bantuan saat bencana alam, memelopori pembangunan daerah, atau membantu kegiatan sosial. Hal ini menunjukkan keberadaan TNI AL sebagai pengayom rakyat.
        </p>

    </div>

    {{-- Mobile --}}
    <div class=" flex flex-col justify-center items-center pt-[5rem] md:hidden">
        <h1 class=" text-2xl font-bold">
            8 Wajib TNI-AL
        </h1>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            <b>8 Wajib TNI Angkatan Laut adalah</b> pedoman moral, etika, dan perilaku yang wajib dipatuhi oleh setiap prajurit TNI Angkatan Laut (TNI AL). Pedoman ini mencerminkan nilai-nilai dasar TNI AL dalam menjalankan tugasnya sebagai penjaga kedaulatan maritim Indonesia serta sebagai bagian dari masyarakat yang mengayomi dan melindungi rakyat.

            <br>8 Wajib TNI AL memiliki tujuan untuk memastikan bahwa setiap prajurit memiliki sikap yang profesional, berintegritas, humanis, dan menjunjung tinggi martabat bangsa. Pedoman ini mengatur hubungan prajurit dengan rakyat dan sesama anggota, baik dalam situasi resmi maupun kehidupan sehari-hari.
        </p>
        <img class=" w-[15rem] h-auto pt-[1.5rem]" src="{{asset('8wajibtni.jpg')}}"/>
        <p class=" text-[1rem] w-[20rem] pt-[1.5rem] text-justify">
            <b>1. Bersikap ramah-tamah terhadap rakyat</b>
            <br>Makna:
            <br>Prajurit TNI AL harus menjaga hubungan yang baik dengan masyarakat, menunjukkan sikap hormat, ramah, dan tidak arogan. Rakyat adalah bagian dari keluarga besar bangsa, sehingga hubungan harmonis perlu dijaga untuk memperkuat kepercayaan masyarakat terhadap TNI.
            <br><b>2. Bersikap sopan santun terhadap rakyat</b>
            <br>Makna:
            <br>Prajurit wajib menjaga tata krama, berbicara dengan santun, dan memperlakukan rakyat dengan hormat. Ini penting untuk mencerminkan profesionalisme TNI AL sebagai penjaga keamanan maritim yang berbudaya.
            <br><b>3. Menjunjung tinggi kehormatan wanita</b>
            <br>Makna:
            <br>TNI AL ditekankan untuk menghormati martabat dan hak perempuan, tidak melakukan tindakan yang merendahkan, melecehkan, atau merugikan perempuan, baik secara fisik maupun verbal. Hal ini adalah bagian dari etika profesional seorang prajurit.
            <br><b>4. Menjaga kehormatan diri di muka umum</b>
            <br>Makna:
            <br>Setiap prajurit harus menjaga sikap dan perilaku yang mencerminkan kehormatan TNI AL di mata masyarakat. Hindari tindakan yang dapat mencemarkan nama baik institusi, seperti perbuatan tercela atau pelanggaran hukum.
            <br><b>5. Senantiasa menjadi contoh dalam sikap dan kesederhanaan</b>
            <br>Makna:
            <br>Prajurit harus menjadi teladan bagi masyarakat dalam perilaku sehari-hari, seperti hidup sederhana, rendah hati, dan menjauhi gaya hidup hedonis. Sikap ini menunjukkan kedekatan dengan rakyat dan komitmen terhadap pengabdian.
            <br><b>6. Tidak sekali-kali merugikan rakyat</b>
            <br>Makna:
            <br>TNI AL tidak boleh melakukan tindakan yang menyakiti atau merugikan masyarakat, baik secara langsung (fisik, materi) maupun tidak langsung (kebijakan atau tindakan yang tidak adil).
            <br><b>7. Tidak sekali-kali menakuti dan menyakiti hati rakyat</b>
            <br>Makna:
            <br>Setiap prajurit harus menghindari tindakan intimidasi, kekerasan, atau ucapan yang dapat melukai perasaan rakyat. Hubungan antara TNI AL dan masyarakat harus dibangun atas dasar kepercayaan dan penghormatan.
            <br><b>8. Menjadi contoh dan mempelopori usaha-usaha untuk mengatasi kesulitan rakyat sekelilingnya</b>
            <br>Makna:
            <br>Prajurit TNI AL harus berperan aktif membantu masyarakat dalam mengatasi masalah, seperti memberikan bantuan saat bencana alam, memelopori pembangunan daerah, atau membantu kegiatan sosial. Hal ini menunjukkan keberadaan TNI AL sebagai pengayom rakyat.
        </p>
    </div>
    {{-- footer --}}
    @include('components.footer')
</body>
</html>