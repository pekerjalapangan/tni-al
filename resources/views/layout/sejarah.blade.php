<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sejarah TNI Angkatan Laut</title>
      <!-- Font Awesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    {{-- NavBar --}}
    @include('components.navbar')

    {{-- Desktop --}}
    <div class=" flex flex-col justify-center items-center text-justify pt-[5rem] max-md:hidden">
        <h1 class=" text-4xl text-black font-bold">
           Sejarah Tni Angkatan Laut 
        </h1>
        <p class=" text-[1rem] w-[55rem]  pt-[1.5rem] ">
            <b>TNI Angkatan Laut (AL) Republik Indonesia (RI)</b> memiliki sejarah yang panjang dan berperan penting dalam perjuangan kemerdekaan Indonesia. Berikut adalah rangkuman singkat sejarahnya:
    
    <br><b>1.Awal Pembentukan:</b> Pada masa penjajahan Jepang, 1942, Indonesia sudah mulai memiliki angkatan laut yang dikenal dengan nama "Kaigun" di bawah pemerintahan Jepang. Namun, setelah Jepang menyerah pada 1945, Indonesia merdeka, dan kebutuhan akan angkatan laut yang independen muncul.
    
    <br><b>2.Proklamasi Kemerdekaan:</b> Pada 22 Agustus 1945, beberapa kapal perang yang ada di Indonesia beralih ke tangan rakyat Indonesia, membentuk cikal bakal TNI Angkatan Laut. Tanggal 10 September 1945 kemudian diperingati sebagai hari lahirnya TNI AL, saat terbentuknya organisasi "Tentara Keamanan Rakyat Laut" (TKRL).
    
    <br><b>3.Perjuangan Kemerdekaan:</b> Selama masa Revolusi Nasional Indonesia (1945-1949), TNI AL berperan aktif dalam perjuangan melawan Belanda, termasuk pertempuran di laut dan operasi-operasi laut di seluruh Indonesia.
    
    <br><b>4.Pascakemerdekaan:</b> Setelah Indonesia merdeka, TNI AL terus berkembang. Pada 1950-an, TNI AL mulai mendapat modernisasi dengan pembelian kapal-kapal perang baru, dan memperkuat posisinya dalam mempertahankan wilayah Indonesia yang luas.
    
    <br><b>5.Peran Penting:</b> Seiring waktu, TNI AL memainkan peran strategis dalam menjaga kedaulatan maritim Indonesia, menghadapi berbagai ancaman di perairan, serta berpartisipasi dalam operasi perdamaian internasional dan kerjasama militer global.
    
    Hingga saat ini, TNI AL terus bertransformasi untuk menghadapi tantangan global dan menjaga keamanan laut Indonesia.
        </p>
    </div>

    
    {{-- Mobile --}}
    <div class=" flex flex-col justify-center items-center text-justify    pt-[5rem]  md:hidden">
        <h1 class=" text-2xl text-black font-bold">
           Sejarah Tni Angkatan Laut 
        </h1>
        <p class=" text-[1rem] w-[20rem]  pt-[1.5rem] ">
            <b>TNI Angkatan Laut (AL) Republik Indonesia (RI)</b> memiliki sejarah yang panjang dan berperan penting dalam perjuangan kemerdekaan Indonesia. Berikut adalah rangkuman singkat sejarahnya:
    
    <br><b>1.Awal Pembentukan:</b> Pada masa penjajahan Jepang, 1949, Indonesia  sudah mulai memiliki angkatan laut yang dikenal dengan nama "Kaigun" di bawah pemerintahan Jepang. Namun, setelah Jepang menyerah pada 1945, Indonesia merdeka, dan kebutuhan akan angkatan laut yang independen muncul.
    
    <br><b>2.Proklamasi Kemerdekaan:</b> Pada 22 Agustus 1945, beberapa kapal perang yang ada di Indonesia beralih ke tangan rakyat Indonesia, membentuk cikal bakal TNI Angkatan Laut. Tanggal 10 September 1945 kemudian diperingati sebagai hari lahirnya TNI AL, saat terbentuknya organisasi "Tentara Keamanan Rakyat Laut" (TKRL).
    
    <br><b>3.Perjuangan Kemerdekaan:</b> Selama masa Revolusi Nasional Indonesia (1945-1949), TNI AL berperan aktif dalam perjuangan melawan Belanda, termasuk pertempuran di laut dan operasi-operasi laut di seluruh Indonesia.
    
    <br><b>4.Pascakemerdekaan:</b> Setelah Indonesia merdeka, TNI AL terus berkembang. Pada 1950-an, TNI AL mulai mendapat modernisasi dengan pembelian kapal-kapal perang baru, dan memperkuat posisinya dalam mempertahankan wilayah Indonesia yang luas.
    
    <br><b>5.Peran Penting:</b> Seiring waktu, TNI AL memainkan peran strategis dalam menjaga kedaulatan maritim Indonesia, menghadapi berbagai ancaman di perairan, serta berpartisipasi dalam operasi perdamaian internasional dan kerjasama militer global.
    
    Hingga saat ini, TNI AL terus bertransformasi untuk menghadapi tantangan global dan menjaga keamanan laut Indonesia.
        </p>
    </div>



    {{-- Video Sejarah Desktop --}}
    <div class=" flex justify-center items-center pt-[3rem] max-md:hidden">
    <iframe class=" w-[35rem] h-[20rem]" src="https://www.youtube.com/embed/gcF1CnxgNn8?si=tNqxk03PhoqKGVYx">
    </iframe>
    </div>

    {{-- Video Sejarah Mobile --}}
    <div class=" flex justify-center items-center pt-[3rem] md:hidden">
        <iframe class=" w-[20rem] h-[15rem]" src="https://www.youtube.com/embed/gcF1CnxgNn8?si=tNqxk03PhoqKGVYx">
        </iframe>
        </div>
</body>
</html>