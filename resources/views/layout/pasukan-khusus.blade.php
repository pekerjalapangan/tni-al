<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Font Awesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.navbar')
    {{-- Desktop --}}
    <!-- Judul dan Pengertian -->
    <section class=" max-md:hidden">
    <div class=" flex justify-center items-center flex flex-col pt-[5rem]">
        <h1 style=" text-shadow: 2px 2px 4px" class=" text-3xl font-bold">
            Pasukan Khusus Tni AL
        </h1>
        <p class=" text-[1rem] w-[45rem] text-justify pt-[2rem]">
            <b>Pasukan Khusus TNI Angkatan Laut (TNI AL)</b> adalah unit-unit elit yang dirancang untuk melakukan misi-misi khusus yang memerlukan keterampilan, keahlian, dan pelatihan tinggi di lingkungan maritim dan pesisir. Unit-unit ini memiliki peran penting dalam operasi-operasi militer yang kompleks dan berisiko tinggi. Berikut adalah penjelasan lengkap tentang Pasukan Khusus TNI AL:
        </p>
     </div>
     <!-- Macam Macam Pasukan Khuus -->
      <!-- Taifib Tni al -->
       <div class=" flex justify-center items-center pt-[10rem] flex flex-col">
        <h1 class=" text-2xl font-extrabold">
            1. YONTAIFIB
        </h1>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[2rem]">
            <b>Yontaifib adalah singkatan dari "Yon Taifib"</b> yang merupakan singkatan dari <b>"Batalyon Tempur Infanteri Berat"</b> dalam TNI Angkatan Laut (TNI AL). Yontaifib adalah unit tempur yang berada di bawah naungan Korps Marinir TNI AL dan memiliki peran khusus dalam melaksanakan operasi-operasi infanteri berat.Batalyon Tempur Infanteri Berat, adalah unit elite dalam TNI AL yang memiliki kemampuan dan keterampilan khusus dalam melaksanakan operasi tempur berat di lingkungan maritim dan pesisir. Dengan pelatihan yang intensif dan peralatan yang canggih, Yontaifib berfungsi untuk memperkuat kapasitas tempur Korps Marinir dan menjaga kedaulatan negara serta keamanan wilayah strategis. 
        </p>
        <img class=" w-[20rem] pt-[2rem]" src=" {{('taifib-al.png')}}"/>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[2rem]">
            Yontaifib TNI AL merupakan bagian dari upaya TNI Angkatan Laut untuk meningkatkan kemampuannya dalam menghadapi berbagai tantangan modern, termasuk ancaman dari darat dan laut. Unit ini dibentuk sebagai respons terhadap kebutuhan untuk memiliki kekuatan infanteri yang mampu melakukan operasi amfibi dan mempertahankan wilayah pesisir.

            <b>Batalyon Tempur Infanteri TNI AL (Yontaifib) secara resmi didirikan pada 18 September 1975</b>, sebagai bagian dari upaya organisasi TNI AL untuk mengembangkan kemampuan tempur dan amfibi yang lebih terintegrasi. Unit ini merupakan bagian dari perubahan doktrin dan strategi angkatan laut yang berfokus pada operasi terpadu antara laut dan darat.

            Seiring waktu, Yontaifib TNI AL mengalami berbagai pengembangan dalam hal struktur, peralatan, dan pelatihan. Mereka terus beradaptasi dengan kebutuhan operasional dan tantangan strategis yang dihadapi oleh TNI AL, termasuk modernisasi peralatan tempur dan peningkatan kemampuan personel.
        </p>
        <!-- Video tentang yontaifib -->
         <div class=" flex justify-center items-center pt-[4rem]">
            <iframe class=" w-[35rem] h-[20rem]" src="https://www.youtube.com/embed/IIG5HPjk_GI?si=x5pkdqXTVibYlWOs">

            </iframe>
         </div>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[4rem]">
            <b>Tugas Yontaifib TNI AL:</b>
            <br><b>a. Operasi Tempur Amfibi:</b>

            <br>- Pendaratan Amfibi: Yontaifib memiliki tugas utama dalam operasi pendaratan amfibi, yaitu mengintegrasikan kekuatan dari laut ke darat. Mereka melakukan serangan dari laut, biasanya dalam konteks operasi militer untuk menguasai wilayah pesisir dan pelabuhan.
            <br>- Pertahanan Pantai: Mereka bertanggung jawab untuk mempertahankan pantai dan wilayah pesisir dari ancaman musuh, termasuk melindungi infrastruktur kritis dan pos-pos strategis.
            <br><b>b. Pertahanan dan Penegakan Hukum:</b>

            <br>- Keamanan Laut: Yontaifib turut serta dalam menjaga keamanan dan penegakan hukum di wilayah perairan Indonesia, termasuk operasi pengawasan dan patroli untuk mencegah kegiatan ilegal seperti perompakan atau penyelundupan.
            <br>- Penanggulangan Terorisme: Mereka dapat terlibat dalam operasi untuk menanggulangi ancaman terorisme yang mempengaruhi wilayah pesisir atau pelabuhan.
            <br><b>c. Operasi Gabungan:</b>

            <br>- Kolaborasi: Yontaifib sering beroperasi dalam kerjasama dengan satuan TNI Angkatan Darat (AD) dan TNI Angkatan Udara (AU) dalam operasi militer gabungan yang melibatkan berbagai cabang angkatan bersenjata.
            <br><b>d. Latihan dan Pengembangan:</b>

            <br>- Pelatihan Khusus: Anggota Yontaifib menjalani pelatihan khusus untuk menguasai teknik tempur amfibi dan infanteri, termasuk penggunaan senjata berat, teknik bertahan hidup, dan operasi dalam berbagai kondisi medan.
        </p>
       </div>
       <!-- Kopaska -->
        <div class=" flex justify-center items-center pt-[10rem] flex flex-col">
            <h1 class=" text-2xl font-extrabold">
                2. KOPASKA
            </h1>
            <p class=" text-[1rem] w-[55rem] text-justify pt-[2rem]">
                <b>Kopaska TNI AL adalah singkatan dari “Komando Pasukan Katak TNI Angkatan Laut”.</b> Ini adalah unit khusus di bawah Tentara Nasional Indonesia Angkatan Laut (TNI AL) yang memiliki spesialisasi dalam operasi khusus, terutama yang berkaitan dengan aspek laut,Kopaska adalah unit elit yang fokus pada operasi khusus di lingkungan laut. Mereka dikenal sebagai pasukan katak, yang merupakan terminologi untuk prajurit yang dilatih khusus dalam berbagai keterampilan tempur dan penyelaman. Kopaska TNI AL memiliki kemampuan untuk melaksanakan berbagai operasi rahasia dan berisiko tinggi, baik di permukaan maupun bawah air.
            </p>
            <img class=" w-[20rem] pt-[2rem]" src="{{asset('kopaska-al.png')}}"/> 
            <p class=" text-[1rem] w-[55rem] text-justify pt-[2rem] ">
                <b>Kopaska TNI AL dibentuk pada 31 Agustus 1962 dengan nama awal "Komando Pasukan Khusus Angkatan Laut".</b> Pembentukan unit ini berawal dari kebutuhan TNI AL untuk memiliki pasukan elit yang mampu melakukan operasi khusus di laut, termasuk penyusupan, sabotase, dan aksi-aksi khusus lainnya.
                Seiring waktu, unit ini mengalami berbagai perubahan dalam hal struktur, nama, dan kemampuan. <b>Pada tahun 1966, unit ini resmi dikenal dengan nama Komando Pasukan Katak (Kopaska).</b>,
                Kopaska telah melalui berbagai fase pengembangan dan modernisasi. Mereka sering terlibat dalam latihan dan operasi baik di dalam negeri maupun internasional, untuk meningkatkan keterampilan dan kemampuan tempur mereka.
                Seiring berjalannya waktu, Kopaska mendapatkan pengakuan sebagai salah satu unit operasi khusus yang terlatih dengan baik di dunia, dengan kemampuan di bidang penyelaman dan operasi laut yang sangat tinggi.
            </p>
            <!-- Video tentang kopaska -->
             <div class=" flex justify-center items-center pt-[4rem]">
                <iframe class=" w-[35rem] h-[20rem]" src="https://www.youtube.com/embed/MSoOR26FBkk?si=6wpSVqh92qm3CmL0">

                </iframe>
             </div>
             <p class=" text-[1rem] w-[55rem] text-justify pt-[4rem]">
                <b>Tugas Kopaska TNI AL:</b>
            <br><b>a. Operasi Khusus:</b>

            <br>- Penyusupan dan Sabotase: Salah satu tugas utama Kopaska adalah melaksanakan operasi penyusupan ke wilayah musuh, melakukan sabotase, dan menghancurkan target penting seperti fasilitas militer, infrastruktur, atau peralatan strategis.
            <br>- Operasi Penyelamatan: Mereka juga terlibat dalam operasi penyelamatan, baik dalam konteks penyelamatan kru kapal yang terdampar atau korban bencana di laut.
            <br><b>b. Intelijen dan Pengintaian:</b>

            <br>- Pengumpulan Informasi: Kopaska terlibat dalam pengumpulan informasi dan intelijen melalui operasi pengintaian yang melibatkan penyelaman dan infiltrasi ke area musuh.
            <br>- Operasi Rahasia: Melaksanakan misi rahasia yang memerlukan tingkat kerahasiaan dan keamanan yang tinggi.
            <br><b>c. Dukungan Operasi Amfibi:</b>

            <br>- Pendaratan Amfibi: Kopaska mendukung operasi amfibi dengan melakukan infiltrasi dan aksi-aksi tempur di area pendaratan.
            <br>- Dukungan Tempur: Memberikan dukungan tempur untuk operasi amfibi dengan kemampuan khusus yang mereka miliki.
            <br><b>d. Latihan dan Pengembangan:</b>

            <br>- Latihan Khusus: Anggota Kopaska menjalani pelatihan intensif dan khusus, termasuk latihan penyelaman, teknik tempur khusus, penggunaan alat dan senjata canggih, serta latihan di berbagai medan, baik laut maupun darat.
            <br>- Pengembangan Teknologi: Mereka juga terlibat dalam pengembangan dan pengujian teknologi baru yang dapat meningkatkan kemampuan operasi khusus mereka.
             </p>
             <!-- Denjaka -->
              <div class=" flex justify-center items-center pt-[10rem] flex flex-col">
                <h1 class=" text-2xl font-extrabold">
                    3. DENJAKA
                </h1>
                <p class=" text-[1rem] w-[55rem] text-justify pt-[2rem]">
                    Denjaka TNI AL adalah singkatan dari “Detasemen Jala Mangkara TNI Angkatan Laut”. Unit ini adalah bagian dari TNI Angkatan Laut yang memiliki spesialisasi dalam operasi khusus dan kontraterorisme.Denjaka adalah unit elit dalam struktur TNI Angkatan Laut yang dirancang untuk melakukan operasi khusus, terutama dalam konteks kontraterorisme, penyelamatan sandera, dan misi-misi khusus lainnya. Mereka dikenal karena keterampilan tinggi dalam misi-misi yang memerlukan kerahasiaan dan keahlian khusus, serta kemampuan untuk menangani situasi ekstrem.
                </p>
                <img class=" w-[20rem] pt-[2rem]" src="{{asset('denjaka-al.png')}}"/>
                <p class=" text-[1rem] w-[55rem] text-justify pt-[2rem]">
                    <b>Denjaka didirikan pada 1 Oktober 1982.</b> Pembentukan unit ini merupakan bagian dari upaya TNI Angkatan Laut untuk meningkatkan kemampuan dalam operasi khusus dan kontraterorisme.
                    Denjaka dibentuk sebagai respons terhadap kebutuhan akan unit yang dapat menangani situasi kontraterorisme dan operasi khusus yang kompleks, terutama yang melibatkan ancaman terhadap aset atau personel TNI Angkatan Laut.
                    <b>1980-an Sejak awal berdirinya, Denjaka telah menjalani berbagai pelatihan dan pengembangan untuk meningkatkan kemampuannya dalam operasi khusus. Unit ini mulai dikenal karena keahliannya dalam menangani situasi krisis dan misi-misi berisiko tinggi.
                    1990-an dan 2000-an</b> Denjaka terus berkembang dengan modernisasi peralatan dan teknik operasional. Mereka terlibat dalam berbagai latihan internasional dan domestik, memperkuat kemampuannya dalam berbagai aspek operasi khusus.
                    Denjaka tetap menjadi salah satu unit khusus yang paling terlatih dalam TNI Angkatan Laut, dengan keterampilan dan peralatan mutakhir untuk melaksanakan misi-misi khusus dan kontraterorisme.
                </p>
                <!-- video tentang denjaka -->
                 <div class=" flex justify-center items-center pt-[4rem]">
                    <iframe class=" w-[35rem] h-[20rem]" src="https://www.youtube.com/embed/YTVkV4IJ_lU?si=w5AoS4hygiCeWog7">

                    </iframe>
                 </div>
                 <p class=" text-[1rem] w-[55rem] text-justify pt-[4rem]">
                    <b>Tugas Denjaka TNI AL:</b>
            <br><b>a. Operasi Khusus dan Kontraterorisme:</b>

            <br>- Penyelamatan Sandera: Salah satu tugas utama Denjaka adalah melaksanakan operasi penyelamatan sandera, baik di laut maupun di darat. Mereka dilatih untuk menangani situasi sandera dengan cara yang aman dan efektif.
            <br>- Penanggulangan Terorisme: Denjaka bertugas dalam penanggulangan ancaman teroris yang berpotensi mengancam keamanan nasional, terutama yang melibatkan ancaman terhadap aset atau fasilitas milik TNI AL.
            <br><b>b. Pengamanan dan Pertahanan:</b>

            <br>- Pengamanan Infrastruktur: Mereka terlibat dalam pengamanan infrastruktur kritis, termasuk pelabuhan dan fasilitas militer penting dari ancaman musuh atau kelompok ekstremis.
            <br>- Pertahanan dan Intelijen: Denjaka melakukan operasi intelijen dan pengumpulan informasi untuk mendukung upaya pertahanan dan keamanan nasional.
            <br><b>c. Operasi Penyusupan dan Sabotase:</b>

            <br>- Penyusupan: Melaksanakan misi penyusupan ke wilayah musuh atau area yang dianggap penting untuk mengumpulkan informasi atau melakukan tindakan strategis.
            <br>- Sabotase: Mereka juga terlatih dalam melakukan sabotase terhadap target-target yang dapat merugikan musuh atau mengganggu operasi mereka.
            <br><b>d. Dukungan Operasi Amfibi dan Gabungan:</b>

            <br>- Operasi Amfibi: Denjaka memberikan dukungan dalam operasi amfibi, terutama yang melibatkan infiltrasi dari laut ke darat.
            <br>- Kerja Sama Operasional: Bekerja sama dengan unit-unit lain dalam operasi militer gabungan untuk mencapai tujuan bersama.
            <br><b>e. Latihan dan Pengembangan:</b>

            <br>- Pelatihan Intensif: Anggota Denjaka menjalani pelatihan intensif dalam berbagai keterampilan operasi khusus, termasuk teknik penyelaman, taktik tempur, dan penggunaan senjata canggih.
            <br>- Inovasi dan Teknologi: Mereka terus memperbarui dan mengembangkan teknologi serta peralatan untuk mendukung operasi mereka, termasuk alat-alat penyelaman dan perangkat tempur canggih.
                 </p>
              </div>
        </div>
    </section>



        {{-- Mobile --}}
    <!-- Judul dan Pengertian -->
    <section class=" md:hidden">
    <div class=" flex justify-center items-center flex flex-col pt-[5rem]">
        <h1  class=" text-2xl font-bold">
            Pasukan Khusus Tni AL
        </h1>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[2rem]">
            <b>Pasukan Khusus TNI Angkatan Laut (TNI AL)</b> adalah unit-unit elit yang dirancang untuk melakukan misi-misi khusus yang memerlukan keterampilan, keahlian, dan pelatihan tinggi di lingkungan maritim dan pesisir. Unit-unit ini memiliki peran penting dalam operasi-operasi militer yang kompleks dan berisiko tinggi. Berikut adalah penjelasan lengkap tentang Pasukan Khusus TNI AL:
        </p>
     </div>
     <!-- Macam Macam Pasukan Khuus -->
      <!-- Taifib Tni al -->
       <div class=" flex justify-center items-center pt-[10rem] flex flex-col">
        <h1 class=" text-2xl font-extrabold">
            1. YONTAIFIB
        </h1>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[2rem]">
            <b>Yontaifib adalah singkatan dari "Yon Taifib"</b> yang merupakan singkatan dari <b>"Batalyon Tempur Infanteri Berat"</b> dalam TNI Angkatan Laut (TNI AL). Yontaifib adalah unit tempur yang berada di bawah naungan Korps Marinir TNI AL dan memiliki peran khusus dalam melaksanakan operasi-operasi infanteri berat.Batalyon Tempur Infanteri Berat, adalah unit elite dalam TNI AL yang memiliki kemampuan dan keterampilan khusus dalam melaksanakan operasi tempur berat di lingkungan maritim dan pesisir. Dengan pelatihan yang intensif dan peralatan yang canggih, Yontaifib berfungsi untuk memperkuat kapasitas tempur Korps Marinir dan menjaga kedaulatan negara serta keamanan wilayah strategis. 
        </p>
        <img class=" w-[15rem] pt-[2rem]" src=" {{('taifib-al.png')}}"/>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[2rem]">
            Yontaifib TNI AL merupakan bagian dari upaya TNI Angkatan Laut untuk meningkatkan kemampuannya dalam menghadapi berbagai tantangan modern, termasuk ancaman dari darat dan laut. Unit ini dibentuk sebagai respons terhadap kebutuhan untuk memiliki kekuatan infanteri yang mampu melakukan operasi amfibi dan mempertahankan wilayah pesisir.

            <b>Batalyon Tempur Infanteri TNI AL (Yontaifib) secara resmi didirikan pada 18 September 1975</b>, sebagai bagian dari upaya organisasi TNI AL untuk mengembangkan kemampuan tempur dan amfibi yang lebih terintegrasi. Unit ini merupakan bagian dari perubahan doktrin dan strategi angkatan laut yang berfokus pada operasi terpadu antara laut dan darat.

            Seiring waktu, Yontaifib TNI AL mengalami berbagai pengembangan dalam hal struktur, peralatan, dan pelatihan. Mereka terus beradaptasi dengan kebutuhan operasional dan tantangan strategis yang dihadapi oleh TNI AL, termasuk modernisasi peralatan tempur dan peningkatan kemampuan personel.
        </p>
        <!-- Video tentang yontaifib -->
         <div class=" flex justify-center items-center pt-[4rem]">
            <iframe class=" w-[20rem] h-[15rem]" src="https://www.youtube.com/embed/IIG5HPjk_GI?si=x5pkdqXTVibYlWOs">

            </iframe>
         </div>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[4rem]">
            <b>Tugas Yontaifib TNI AL:</b>
            <br><b>a. Operasi Tempur Amfibi:</b>

            <br>- Pendaratan Amfibi: Yontaifib memiliki tugas utama dalam operasi pendaratan amfibi, yaitu mengintegrasikan kekuatan dari laut ke darat. Mereka melakukan serangan dari laut, biasanya dalam konteks operasi militer untuk menguasai wilayah pesisir dan pelabuhan.
            <br>- Pertahanan Pantai: Mereka bertanggung jawab untuk mempertahankan pantai dan wilayah pesisir dari ancaman musuh, termasuk melindungi infrastruktur kritis dan pos-pos strategis.
            <br><b>b. Pertahanan dan Penegakan Hukum:</b>

            <br>- Keamanan Laut: Yontaifib turut serta dalam menjaga keamanan dan penegakan hukum di wilayah perairan Indonesia, termasuk operasi pengawasan dan patroli untuk mencegah kegiatan ilegal seperti perompakan atau penyelundupan.
            <br>- Penanggulangan Terorisme: Mereka dapat terlibat dalam operasi untuk menanggulangi ancaman terorisme yang mempengaruhi wilayah pesisir atau pelabuhan.
            <br><b>c. Operasi Gabungan:</b>

            <br>- Kolaborasi: Yontaifib sering beroperasi dalam kerjasama dengan satuan TNI Angkatan Darat (AD) dan TNI Angkatan Udara (AU) dalam operasi militer gabungan yang melibatkan berbagai cabang angkatan bersenjata.
            <br><b>d. Latihan dan Pengembangan:</b>

            <br>- Pelatihan Khusus: Anggota Yontaifib menjalani pelatihan khusus untuk menguasai teknik tempur amfibi dan infanteri, termasuk penggunaan senjata berat, teknik bertahan hidup, dan operasi dalam berbagai kondisi medan.
        </p>
       </div>
       <!-- Kopaska -->
        <div class=" flex justify-center items-center pt-[10rem] flex flex-col">
            <h1 class=" text-2xl font-extrabold">
                2. KOPASKA
            </h1>
            <p class=" text-[1rem] w-[20rem] text-justify pt-[2rem]">
                <b>Kopaska TNI AL adalah singkatan dari “Komando Pasukan Katak TNI Angkatan Laut”.</b> Ini adalah unit khusus di bawah Tentara Nasional Indonesia Angkatan Laut (TNI AL) yang memiliki spesialisasi dalam operasi khusus, terutama yang berkaitan dengan aspek laut,Kopaska adalah unit elit yang fokus pada operasi khusus di lingkungan laut. Mereka dikenal sebagai pasukan katak, yang merupakan terminologi untuk prajurit yang dilatih khusus dalam berbagai keterampilan tempur dan penyelaman. Kopaska TNI AL memiliki kemampuan untuk melaksanakan berbagai operasi rahasia dan berisiko tinggi, baik di permukaan maupun bawah air.
            </p>
            <img class=" w-[15rem] pt-[2rem]" src="{{asset('kopaska-al.png')}}"/> 
            <p class=" text-[1rem] w-[20rem] text-justify pt-[2rem] ">
                <b>Kopaska TNI AL dibentuk pada 31 Agustus 1962 dengan nama awal "Komando Pasukan Khusus Angkatan Laut".</b> Pembentukan unit ini berawal dari kebutuhan TNI AL untuk memiliki pasukan elit yang mampu melakukan operasi khusus di laut, termasuk penyusupan, sabotase, dan aksi-aksi khusus lainnya.
                Seiring waktu, unit ini mengalami berbagai perubahan dalam hal struktur, nama, dan kemampuan. <b>Pada tahun 1966, unit ini resmi dikenal dengan nama Komando Pasukan Katak (Kopaska).</b>,
                Kopaska telah melalui berbagai fase pengembangan dan modernisasi. Mereka sering terlibat dalam latihan dan operasi baik di dalam negeri maupun internasional, untuk meningkatkan keterampilan dan kemampuan tempur mereka.
                Seiring berjalannya waktu, Kopaska mendapatkan pengakuan sebagai salah satu unit operasi khusus yang terlatih dengan baik di dunia, dengan kemampuan di bidang penyelaman dan operasi laut yang sangat tinggi.
            </p>
            <!-- Video tentang kopaska -->
             <div class=" flex justify-center items-center pt-[4rem]">
                <iframe class=" w-[20rem] h-[15rem]" src="https://www.youtube.com/embed/MSoOR26FBkk?si=6wpSVqh92qm3CmL0">

                </iframe>
             </div>
             <p class=" text-[1rem] w-[20rem] text-justify pt-[4rem]">
                <b>Tugas Kopaska TNI AL:</b>
            <br><b>a. Operasi Khusus:</b>

            <br>- Penyusupan dan Sabotase: Salah satu tugas utama Kopaska adalah melaksanakan operasi penyusupan ke wilayah musuh, melakukan sabotase, dan menghancurkan target penting seperti fasilitas militer, infrastruktur, atau peralatan strategis.
            <br>- Operasi Penyelamatan: Mereka juga terlibat dalam operasi penyelamatan, baik dalam konteks penyelamatan kru kapal yang terdampar atau korban bencana di laut.
            <br><b>b. Intelijen dan Pengintaian:</b>

            <br>- Pengumpulan Informasi: Kopaska terlibat dalam pengumpulan informasi dan intelijen melalui operasi pengintaian yang melibatkan penyelaman dan infiltrasi ke area musuh.
            <br>- Operasi Rahasia: Melaksanakan misi rahasia yang memerlukan tingkat kerahasiaan dan keamanan yang tinggi.
            <br><b>c. Dukungan Operasi Amfibi:</b>

            <br>- Pendaratan Amfibi: Kopaska mendukung operasi amfibi dengan melakukan infiltrasi dan aksi-aksi tempur di area pendaratan.
            <br>- Dukungan Tempur: Memberikan dukungan tempur untuk operasi amfibi dengan kemampuan khusus yang mereka miliki.
            <br><b>d. Latihan dan Pengembangan:</b>

            <br>- Latihan Khusus: Anggota Kopaska menjalani pelatihan intensif dan khusus, termasuk latihan penyelaman, teknik tempur khusus, penggunaan alat dan senjata canggih, serta latihan di berbagai medan, baik laut maupun darat.
            <br>- Pengembangan Teknologi: Mereka juga terlibat dalam pengembangan dan pengujian teknologi baru yang dapat meningkatkan kemampuan operasi khusus mereka.
             </p>
             <!-- Denjaka -->
              <div class=" flex justify-center items-center pt-[10rem] flex flex-col">
                <h1 class=" text-2xl font-extrabold">
                    3. DENJAKA
                </h1>
                <p class=" text-[1rem] w-[20rem] text-justify pt-[2rem]">
                    Denjaka TNI AL adalah singkatan dari “Detasemen Jala Mangkara TNI Angkatan Laut”. Unit ini adalah bagian dari TNI Angkatan Laut yang memiliki spesialisasi dalam operasi khusus dan kontraterorisme.Denjaka adalah unit elit dalam struktur TNI Angkatan Laut yang dirancang untuk melakukan operasi khusus, terutama dalam konteks kontraterorisme, penyelamatan sandera, dan misi-misi khusus lainnya. Mereka dikenal karena keterampilan tinggi dalam misi-misi yang memerlukan kerahasiaan dan keahlian khusus, serta kemampuan untuk menangani situasi ekstrem.
                </p>
                <img class=" w-[15rem] pt-[2rem]" src="{{asset('denjaka-al.png')}}"/>
                <p class=" text-[1rem] w-[20rem] text-justify pt-[2rem]">
                    <b>Denjaka didirikan pada 1 Oktober 1982.</b> Pembentukan unit ini merupakan bagian dari upaya TNI Angkatan Laut untuk meningkatkan kemampuan dalam operasi khusus dan kontraterorisme.
                    Denjaka dibentuk sebagai respons terhadap kebutuhan akan unit yang dapat menangani situasi kontraterorisme dan operasi khusus yang kompleks, terutama yang melibatkan ancaman terhadap aset atau personel TNI Angkatan Laut.
                    <b>1980-an Sejak awal berdirinya, Denjaka telah menjalani berbagai pelatihan dan pengembangan untuk meningkatkan kemampuannya dalam operasi khusus. Unit ini mulai dikenal karena keahliannya dalam menangani situasi krisis dan misi-misi berisiko tinggi.
                    1990-an dan 2000-an</b> Denjaka terus berkembang dengan modernisasi peralatan dan teknik operasional. Mereka terlibat dalam berbagai latihan internasional dan domestik, memperkuat kemampuannya dalam berbagai aspek operasi khusus.
                    Denjaka tetap menjadi salah satu unit khusus yang paling terlatih dalam TNI Angkatan Laut, dengan keterampilan dan peralatan mutakhir untuk melaksanakan misi-misi khusus dan kontraterorisme.
                </p>
                <!-- video tentang denjaka -->
                 <div class=" flex justify-center items-center pt-[4rem]">
                    <iframe class=" w-[20rem] h-[15rem]" src="https://www.youtube.com/embed/YTVkV4IJ_lU?si=w5AoS4hygiCeWog7">

                    </iframe>
                 </div>
                 <p class=" text-[1rem] w-[20rem] text-justify pt-[4rem]">
                    <b>Tugas Denjaka TNI AL:</b>
            <br><b>a. Operasi Khusus dan Kontraterorisme:</b>

            <br>- Penyelamatan Sandera: Salah satu tugas utama Denjaka adalah melaksanakan operasi penyelamatan sandera, baik di laut maupun di darat. Mereka dilatih untuk menangani situasi sandera dengan cara yang aman dan efektif.
            <br>- Penanggulangan Terorisme: Denjaka bertugas dalam penanggulangan ancaman teroris yang berpotensi mengancam keamanan nasional, terutama yang melibatkan ancaman terhadap aset atau fasilitas milik TNI AL.
            <br><b>b. Pengamanan dan Pertahanan:</b>

            <br>- Pengamanan Infrastruktur: Mereka terlibat dalam pengamanan infrastruktur kritis, termasuk pelabuhan dan fasilitas militer penting dari ancaman musuh atau kelompok ekstremis.
            <br>- Pertahanan dan Intelijen: Denjaka melakukan operasi intelijen dan pengumpulan informasi untuk mendukung upaya pertahanan dan keamanan nasional.
            <br><b>c. Operasi Penyusupan dan Sabotase:</b>

            <br>- Penyusupan: Melaksanakan misi penyusupan ke wilayah musuh atau area yang dianggap penting untuk mengumpulkan informasi atau melakukan tindakan strategis.
            <br>- Sabotase: Mereka juga terlatih dalam melakukan sabotase terhadap target-target yang dapat merugikan musuh atau mengganggu operasi mereka.
            <br><b>d. Dukungan Operasi Amfibi dan Gabungan:</b>

            <br>- Operasi Amfibi: Denjaka memberikan dukungan dalam operasi amfibi, terutama yang melibatkan infiltrasi dari laut ke darat.
            <br>- Kerja Sama Operasional: Bekerja sama dengan unit-unit lain dalam operasi militer gabungan untuk mencapai tujuan bersama.
            <br><b>e. Latihan dan Pengembangan:</b>

            <br>- Pelatihan Intensif: Anggota Denjaka menjalani pelatihan intensif dalam berbagai keterampilan operasi khusus, termasuk teknik penyelaman, taktik tempur, dan penggunaan senjata canggih.
            <br>- Inovasi dan Teknologi: Mereka terus memperbarui dan mengembangkan teknologi serta peralatan untuk mendukung operasi mereka, termasuk alat-alat penyelaman dan perangkat tempur canggih.
                 </p>
              </div>
        </div>
    </section>

        
        

</body>
</html>