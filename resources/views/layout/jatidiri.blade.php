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
            Jati Diri TNI-AL
        </h1>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <b>Jati Diri TNI Angkatan Laut (TNI AL)</b> adalah inti dan identitas yang menjadi dasar pelaksanaan tugas, fungsi, serta tanggung jawab prajurit TNI AL. Jati diri ini mencakup karakteristik, nilai-nilai, serta pedoman moral yang membedakan TNI AL dari elemen lain dalam masyarakat. Berikut penjelasan detailnya:
        </p>
        <img class=" w-[30rem] h-auto pt-[1.5rem]" src="{{asset('jatidirial.jpg')}}"/>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <br><b>1. Sebagai Tentara Nasional</b>
            Militer Rakyat: TNI AL adalah bagian dari TNI yang berasal dari rakyat, berakar pada perjuangan bangsa, dan didukung oleh rakyat. Konsep ini mengandung makna bahwa TNI AL bertugas melindungi dan melayani rakyat.
            Militer Pejuang: Memiliki semangat juang yang tinggi untuk mempertahankan kedaulatan dan keutuhan wilayah Indonesia.
            Militer Profesional: Menguasai ilmu dan teknologi kemaritiman serta memiliki kemampuan khusus di bidang kelautan yang terus diasah.
            <br><b>2. Sebagai Alat Pertahanan Negara di Laut</b>
            TNI AL berperan sebagai komponen utama dalam menjaga kedaulatan wilayah laut Indonesia dari ancaman eksternal.
            Melaksanakan tugas pertahanan laut dengan patroli, operasi militer, dan pengamanan wilayah laut.
            Mampu beradaptasi dengan perkembangan teknologi pertahanan modern untuk menjaga superioritas maritim.
            <br><b>3. Berbasis pada Nilai-Nilai Keprajuritan</b>
            Sumpah Prajurit dan Sapta Marga: Menjadi pedoman moral dan etika dalam kehidupan sehari-hari prajurit TNI AL.
            Disiplin Tinggi: Prajurit TNI AL dikenal dengan disiplin ketat dalam menjalankan tugas di medan laut yang penuh tantangan.
            Semangat Korps: Menjunjung tinggi solidaritas, persaudaraan, dan kebersamaan antar anggota korps.
            <br><b>4. Sebagai Penjaga Keamanan dan Ketertiban di Laut</b>
            TNI AL memiliki tugas melindungi jalur laut internasional (sea lane of communication) dan memerangi kejahatan transnasional, seperti perompakan, penyelundupan, dan perdagangan ilegal.
            Mengawasi pelanggaran hukum di wilayah yurisdiksi laut Indonesia, termasuk eksploitasi sumber daya laut secara ilegal.
            <br><b>5. Pilar Kedaulatan Maritim Indonesia</b>
            TNI AL mendukung kebijakan Poros Maritim Dunia dengan menjaga perairan Indonesia sebagai jalur perdagangan strategis.
            Berperan aktif dalam diplomasi maritim untuk menjaga perdamaian di kawasan.

            <br><b>6. Komitmen terhadap Trisila TNI AL</b>
            Trisila TNI AL adalah panduan etika yang meliputi:

            Disiplin: Melaksanakan tugas dengan penuh tanggung jawab.
            Hierarki: Mematuhi garis komando dalam struktur organisasi.
            Kehormatan Militer: Menjaga integritas, kehormatan, dan martabat sebagai prajurit TNI AL.
            <br><b>7. Peran dalam Operasi Militer Selain Perang (OMSP)</b>
            Bantuan kemanusiaan, seperti dalam bencana alam.
            Misi penjaga perdamaian internasional.
            Dukungan logistik dalam situasi darurat.
            Melalui identitas ini, TNI AL tidak hanya berperan sebagai penjaga pertahanan negara, tetapi juga sebagai simbol kedaulatan, pelindung kekayaan laut, dan penggerak cita-cita maritim bangsa.
        </p>
    </div>

    {{-- Mobile --}}
    <div class=" flex flex-col justify-center items-center pt-[5rem] md:hidden">
        <h1 class=" text-2xl font-bold">
            Jati Diri TNI-AL
        </h1>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            <b>Jati Diri TNI Angkatan Laut (TNI AL)</b> adalah inti dan identitas yang menjadi dasar pelaksanaan tugas, fungsi, serta tanggung jawab prajurit TNI AL. Jati diri ini mencakup karakteristik, nilai-nilai, serta pedoman moral yang membedakan TNI AL dari elemen lain dalam masyarakat. Berikut penjelasan detailnya:
        </p>
        <img class=" w-[15rem] h-auto pt-[1.5rem]" src="{{asset('jatidirial.jpg')}}"/>
        <p class=" text-[1rem] w-[20rem] pt-[1.5rem] text-justify">
            <br><b>1. Sebagai Tentara Nasional</b>
            Militer Rakyat: TNI AL adalah bagian dari TNI yang berasal dari rakyat, berakar pada perjuangan bangsa, dan didukung oleh rakyat. Konsep ini mengandung makna bahwa TNI AL bertugas melindungi dan melayani rakyat.
            Militer Pejuang: Memiliki semangat juang yang tinggi untuk mempertahankan kedaulatan dan keutuhan wilayah Indonesia.
            Militer Profesional: Menguasai ilmu dan teknologi kemaritiman serta memiliki kemampuan khusus di bidang kelautan yang terus diasah.
            <br><b>2. Sebagai Alat Pertahanan Negara di Laut</b>
            TNI AL berperan sebagai komponen utama dalam menjaga kedaulatan wilayah laut Indonesia dari ancaman eksternal.
            Melaksanakan tugas pertahanan laut dengan patroli, operasi militer, dan pengamanan wilayah laut.
            Mampu beradaptasi dengan perkembangan teknologi pertahanan modern untuk menjaga superioritas maritim.
            <br><b>3. Berbasis pada Nilai-Nilai Keprajuritan</b>
            Sumpah Prajurit dan Sapta Marga: Menjadi pedoman moral dan etika dalam kehidupan sehari-hari prajurit TNI AL.
            Disiplin Tinggi: Prajurit TNI AL dikenal dengan disiplin ketat dalam menjalankan tugas di medan laut yang penuh tantangan.
            Semangat Korps: Menjunjung tinggi solidaritas, persaudaraan, dan kebersamaan antar anggota korps.
            <br><b>4. Sebagai Penjaga Keamanan dan Ketertiban di Laut</b>
            TNI AL memiliki tugas melindungi jalur laut internasional (sea lane of communication) dan memerangi kejahatan transnasional, seperti perompakan, penyelundupan, dan perdagangan ilegal.
            Mengawasi pelanggaran hukum di wilayah yurisdiksi laut Indonesia, termasuk eksploitasi sumber daya laut secara ilegal.
            <br><b>5. Pilar Kedaulatan Maritim Indonesia</b>
            TNI AL mendukung kebijakan Poros Maritim Dunia dengan menjaga perairan Indonesia sebagai jalur perdagangan strategis.
            Berperan aktif dalam diplomasi maritim untuk menjaga perdamaian di kawasan.

            <br><b>6. Komitmen terhadap Trisila TNI AL</b>
            Trisila TNI AL adalah panduan etika yang meliputi:

            Disiplin: Melaksanakan tugas dengan penuh tanggung jawab.
            Hierarki: Mematuhi garis komando dalam struktur organisasi.
            Kehormatan Militer: Menjaga integritas, kehormatan, dan martabat sebagai prajurit TNI AL.
            <br><b>7. Peran dalam Operasi Militer Selain Perang (OMSP)</b>
            Bantuan kemanusiaan, seperti dalam bencana alam.
            Misi penjaga perdamaian internasional.
            Dukungan logistik dalam situasi darurat.
            Melalui identitas ini, TNI AL tidak hanya berperan sebagai penjaga pertahanan negara, tetapi juga sebagai simbol kedaulatan, pelindung kekayaan laut, dan penggerak cita-cita maritim bangsa.
        </p>
    </div>
    {{-- footer --}}
    @include('components.footer')
</body>
</html>