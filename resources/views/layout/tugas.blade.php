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
            Tugas TNI-AL
        </h1>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <b>Tugas utama TNI Angkatan Laut (TNI AL)</b> adalah menjaga dan melindungi kedaulatan wilayah laut Indonesia. Sebagai salah satu cabang Tentara Nasional Indonesia (TNI), TNI AL memiliki tanggung jawab yang sangat penting dalam pertahanan negara, terutama karena Indonesia merupakan negara kepulauan dengan wilayah laut yang sangat luas. Berikut adalah penjelasan detail mengenai tugas-tugas TNI AL:
        </p>
        <img class=" w-[30rem] h-auto pt-[1.5rem]" src=" tugas-tni.jpg "/>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <b><span class=" text-blue-600">1. Tugas Utama</span></b>
        <br><b>a. Menegakkan Kedaulatan Negara di Laut</b>
            <br>- TNI AL bertugas menjaga dan melindungi wilayah perairan Indonesia dari segala bentuk ancaman yang dapat mengganggu kedaulatan, baik dari dalam maupun luar negeri.
            <br>- Melaksanakan operasi militer di laut untuk menangkal dan mengatasi ancaman terhadap keamanan nasional.

        <br><b>b. Melindungi Kepentingan Maritim</b>
            <br>- Menjamin keselamatan jalur pelayaran (Sea Lines of Communication atau SLOC) dan menjaga alur laut kepulauan Indonesia (ALKI).
            <br>- Memberikan perlindungan terhadap kekayaan laut seperti sumber daya ikan, tambang bawah laut, dan aset-aset ekonomi lainnya.

        <br><b>c. Pertahanan Wilayah Laut</b>
            <br>- Membangun dan menjaga pangkalan-pangkalan angkatan laut untuk mendukung operasi pertahanan.
            <br>- Melakukan patroli rutin di perairan teritorial, zona ekonomi eksklusif (ZEE), dan perairan internasional yang menjadi bagian dari tanggung jawab Indonesia.

        ---

        <br><b><span class=" text-blue-600">2. Tugas dalam Operasi Militer</span></b>
        <br><b>a. Operasi Militer untuk Perang (OMP)</b>
            <br>- Melaksanakan peperangan laut untuk mempertahankan kedaulatan negara.
            <br>- Mendukung operasi gabungan TNI dalam perang di laut, udara, dan darat.

        <br><b>b. Operasi Militer Selain Perang (OMSP)</b>
            <br>- Memberantas pembajakan, perompakan, dan penyelundupan.
            <br>- Mendukung penegakan hukum di laut, seperti mengatasi illegal fishing, penyelundupan narkoba, atau perdagangan manusia.
            <br>- Melakukan bantuan kemanusiaan dalam bencana alam atau krisis lainnya, seperti evakuasi dan distribusi bantuan melalui jalur laut.
            <br>- Berperan dalam operasi SAR (Search and Rescue) untuk menyelamatkan jiwa di laut.

        ---

        <br><b><span class=" text-blue-600">3. Peran Diplomasi</span></b>
        <br>- Mendukung hubungan diplomasi internasional melalui latihan bersama angkatan laut negara lain (Naval Diplomacy).
        <br>- Menjalankan misi perdamaian dunia melalui operasi penjaga perdamaian di bawah mandat PBB.
        <br>- Berpartisipasi dalam acara internasional seperti Fleet Review untuk memperkuat hubungan antarnegara.

        ---

        <br><b> <span class=" text-blue-600">4. Pembinaan Potensi Maritim</span></b>
        <br>- Membina dan memberdayakan potensi maritim nasional melalui program-program kemaritiman.
        <br>- Mendukung pengembangan industri maritim dan pengelolaan sumber daya kelautan secara berkelanjutan.
        <br>- Mengembangkan kesadaran masyarakat akan pentingnya laut bagi kehidupan bangsa.

        ---

        <br><b> <span class=" text-blue-600">5. Peralatan dan Sarana yang Digunakan</span></b>
        <br>Untuk menjalankan tugas-tugas tersebut, TNI AL dilengkapi dengan berbagai fasilitas seperti:
        <br>- Kapal perang, termasuk kapal fregat, korvet, kapal selam, dan kapal patroli.
        <br>- Pangkalan angkatan laut di berbagai wilayah strategis.
        <br>- Pesawat udara untuk patroli maritim.
        <br>- Pasukan khusus seperti Marinir dan Komando Pasukan Katak (Kopaska) untuk operasi khusus.

        ---

        <br><b> <span class=" text-blue-600">6. Hubungan dengan Institusi Lain</span></b>
        <br>- Berkoordinasi dengan Badan Keamanan Laut (Bakamla), Kepolisian Laut, dan instansi lainnya untuk menjaga keamanan maritim.
        <br>- Mendukung kementerian kelautan dan perikanan dalam pengawasan sumber daya laut.

        <br>Dengan cakupan tugas yang luas, TNI AL tidak hanya berperan sebagai alat pertahanan, tetapi juga sebagai penjaga keamanan dan stabilitas maritim yang menjadi kunci bagi kemajuan dan kesejahteraan Indonesia sebagai negara maritim.
        </p>
    </div>

    {{-- Mobile --}}
    <div class=" flex flex-col justify-center items-center pt-[5rem] md:hidden">
        <h1 class=" text-4xl font-bold">
            Tugas TNI-AL
        </h1>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            <b>Tugas utama TNI Angkatan Laut (TNI AL)</b> adalah menjaga dan melindungi kedaulatan wilayah laut Indonesia. Sebagai salah satu cabang Tentara Nasional Indonesia (TNI), TNI AL memiliki tanggung jawab yang sangat penting dalam pertahanan negara, terutama karena Indonesia merupakan negara kepulauan dengan wilayah laut yang sangat luas. Berikut adalah penjelasan detail mengenai tugas-tugas TNI AL:
        </p>
        <img class=" w-[20rem] h-auto pt-[1.5rem]" src=" tugas-tni.jpg "/>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            <b><span class=" text-blue-600">1. Tugas Utama</span></b>
        <br><b>a. Menegakkan Kedaulatan Negara di Laut</b>
            <br>- TNI AL bertugas menjaga dan melindungi wilayah perairan Indonesia dari segala bentuk ancaman yang dapat mengganggu kedaulatan, baik dari dalam maupun luar negeri.
            <br>- Melaksanakan operasi militer di laut untuk menangkal dan mengatasi ancaman terhadap keamanan nasional.

        <br><b>b. Melindungi Kepentingan Maritim</b>
            <br>- Menjamin keselamatan jalur pelayaran (Sea Lines of Communication atau SLOC) dan menjaga alur laut kepulauan Indonesia (ALKI).
            <br>- Memberikan perlindungan terhadap kekayaan laut seperti sumber daya ikan, tambang bawah laut, dan aset-aset ekonomi lainnya.

        <br><b>c. Pertahanan Wilayah Laut</b>
            <br>- Membangun dan menjaga pangkalan-pangkalan angkatan laut untuk mendukung operasi pertahanan.
            <br>- Melakukan patroli rutin di perairan teritorial, zona ekonomi eksklusif (ZEE), dan perairan internasional yang menjadi bagian dari tanggung jawab Indonesia.

        ---

        <br><b><span class=" text-blue-600">2. Tugas dalam Operasi Militer</span></b>
        <br><b>a. Operasi Militer untuk Perang (OMP)</b>
            <br>- Melaksanakan peperangan laut untuk mempertahankan kedaulatan negara.
            <br>- Mendukung operasi gabungan TNI dalam perang di laut, udara, dan darat.

        <br><b>b. Operasi Militer Selain Perang (OMSP)</b>
            <br>- Memberantas pembajakan, perompakan, dan penyelundupan.
            <br>- Mendukung penegakan hukum di laut, seperti mengatasi illegal fishing, penyelundupan narkoba, atau perdagangan manusia.
            <br>- Melakukan bantuan kemanusiaan dalam bencana alam atau krisis lainnya, seperti evakuasi dan distribusi bantuan melalui jalur laut.
            <br>- Berperan dalam operasi SAR (Search and Rescue) untuk menyelamatkan jiwa di laut.

        ---

        <br><b><span class=" text-blue-600">3. Peran Diplomasi</span></b>
        <br>- Mendukung hubungan diplomasi internasional melalui latihan bersama angkatan laut negara lain (Naval Diplomacy).
        <br>- Menjalankan misi perdamaian dunia melalui operasi penjaga perdamaian di bawah mandat PBB.
        <br>- Berpartisipasi dalam acara internasional seperti Fleet Review untuk memperkuat hubungan antarnegara.

        ---

        <br><b> <span class=" text-blue-600">4. Pembinaan Potensi Maritim</span></b>
        <br>- Membina dan memberdayakan potensi maritim nasional melalui program-program kemaritiman.
        <br>- Mendukung pengembangan industri maritim dan pengelolaan sumber daya kelautan secara berkelanjutan.
        <br>- Mengembangkan kesadaran masyarakat akan pentingnya laut bagi kehidupan bangsa.

        ---

        <br><b> <span class=" text-blue-600">5. Peralatan dan Sarana yang Digunakan</span></b>
        <br>Untuk menjalankan tugas-tugas tersebut, TNI AL dilengkapi dengan berbagai fasilitas seperti:
        <br>- Kapal perang, termasuk kapal fregat, korvet, kapal selam, dan kapal patroli.
        <br>- Pangkalan angkatan laut di berbagai wilayah strategis.
        <br>- Pesawat udara untuk patroli maritim.
        <br>- Pasukan khusus seperti Marinir dan Komando Pasukan Katak (Kopaska) untuk operasi khusus.

        ---

        <br><b> <span class=" text-blue-600">6. Hubungan dengan Institusi Lain</span></b>
        <br>- Berkoordinasi dengan Badan Keamanan Laut (Bakamla), Kepolisian Laut, dan instansi lainnya untuk menjaga keamanan maritim.
        <br>- Mendukung kementerian kelautan dan perikanan dalam pengawasan sumber daya laut.

        <br>Dengan cakupan tugas yang luas, TNI AL tidak hanya berperan sebagai alat pertahanan, tetapi juga sebagai penjaga keamanan dan stabilitas maritim yang menjadi kunci bagi kemajuan dan kesejahteraan Indonesia sebagai negara maritim.
        </p>
    </div>
    {{-- footer --}}
    @include('components.footer')
</body>
</html>