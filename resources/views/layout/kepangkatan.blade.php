<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    {{-- NavBar --}}
    @include('components.navbar')
    {{-- Desktop --}}
    <div class=" flex flex-col justify-center items-center pt-[5rem] max-md:hidden">
        <h1 class=" text-3xl font-bold text-black">
            Kepangkatan Dalam Tni AL
        </h1>
        <p class=" text-[1rem] w-[55rem] pt-[1.5rem] leading-normal text-justify">
            <b>Kepangkatan TNI Angkatan Laut</b> adalah sistem jenjang pangkat yang digunakan untuk mengatur struktur organisasi, pembinaan karier, serta pembagian tugas dan tanggung jawab anggota TNI Angkatan Laut (TNI AL). Pangkat dalam TNI AL mengindikasikan posisi atau kedudukan seorang prajurit, bintara, perwira, hingga perwira tinggi dalam hierarki militer.

            Sistem kepangkatan ini dibagi menjadi beberapa kategori berdasarkan posisi dan fungsi dalam organisasi TNI Angkatan Laut. Secara garis besar, pangkat di TNI AL terbagi menjadi tiga kelompok utama: Pangkat Tamtama, Pangkat Bintara, dan Pangkat Perwira.

            <br><b>Fungsi Kepangkatan:</b>
            <br><b>Kepangkatan di TNI Angkatan Laut memiliki beberapa fungsi utama, yaitu:</b>
            <br><b>- Pengaturan Struktur Organisasi:</b> Sistem pangkat ini mengatur siapa yang berhak memimpin, siapa yang bertanggung jawab dalam tugas-tugas tertentu, dan siapa yang harus mengikuti perintah. Hal ini sangat penting untuk menciptakan kedisiplinan dan kinerja yang efisien.
            <br><b>- Penilaian Kinerja dan Pembinaan Karier:</b> Pangkat juga mencerminkan pengalaman, keterampilan, serta keahlian seseorang. Peningkatan pangkat didasarkan pada penilaian terhadap kinerja, kemampuan, serta loyalitas dalam menjalankan tugas.
            <br><b>- Pembagian Tugas dan Tanggung Jawab:</b> Pangkat menentukan tingkatan tanggung jawab dalam setiap jabatan. Seorang perwira memiliki wewenang lebih besar dibandingkan dengan seorang bintara atau tamtama.
            <br><b>- Sistem Penghargaan dan Kenaikan Pangkat:</b> Seiring dengan prestasi dan pengabdian yang diberikan, anggota TNI Angkatan Laut berhak mendapatkan kenaikan pangkat yang memberikan penghargaan atas dedikasi mereka dalam menjalankan tugas.
            
        </p>
        <p class=" text-[1rem] w-[55rem]  pt-[1.5rem]">
            Tugas dan tanggung jawab masing-masing kepangkatan TNI Angkatan Laut (TNI AL) memiliki peran yang sangat spesifik dalam struktur organisasi dan hierarki militer. Berikut adalah penjelasan detil mengenai tugas masing-masing pangkat TNI AL, yang dibagi berdasarkan kelompok: Perwira, Bintara, dan Tamtama.
        </p>
        <img class=" h-auto w-[24rem] pt-[1.5rem]" src="{{asset('pangkat.jpg')}}"/>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <br><b>1.Laksamana TNI</b>
            Pangkat tertinggi di TNI AL.
            Bertanggung jawab atas komando strategis di Angkatan Laut, memimpin seluruh operasi dan kebijakan Angkatan Laut Indonesia.
            Laksamana TNI adalah pejabat yang memegang kendali atas kebijakan operasional, personel, dan anggaran angkatan laut secara keseluruhan.
            Tugasnya termasuk memberikan pengarahan dan kebijakan kepada jajaran bawahannya dan bekerja sama dengan pemimpin militer lainnya dalam pengambilan keputusan strategis.
            <br><b>2. Laksamana Madya (Laksdya) TNI</b>
            Pangkat yang berada satu tingkat di bawah Laksamana TNI.
            Bertanggung jawab atas komando daerah atau wilayah tertentu, seperti komando armada atau pangkalan angkatan laut.
            Biasanya menjabat sebagai pejabat senior dalam operasi-operasi besar atau menjadi kepala staf dalam organisasi TNI AL.
            Laksamana Madya memimpin divisi besar dalam angkatan laut dan bertugas merumuskan kebijakan strategis serta memastikan implementasi yang efektif.
            <br><b>3. Laksamana Muda (Laksda) TNI</b>
            Bertanggung jawab untuk memimpin komando operasi angkatan laut di tingkat lebih operasional.
            Sering kali memimpin operasi militer besar atau bertanggung jawab atas koordinasi dan eksekusi operasi taktis dan strategi di lapangan.
            Laksamana Muda juga memiliki tugas administratif tinggi, mengelola anggaran dan personel untuk komando-komando tertentu.
            <br><b>4. Laksamana Pertama (Laksma) TNI</b>
            Pangkat ini berada di bawah Laksamana Muda dan umumnya memimpin satuan-satuan besar seperti flotilla atau komando angkatan laut di level yang lebih spesifik.
            Laksamana Pertama bertugas mengawasi jalannya operasi-operasi angkatan laut dalam ruang lingkup yang lebih kecil atau lebih terfokus, misalnya satuan armada atau pangkalan militer.
            Juga berfungsi sebagai komandan dalam pertempuran atau operasi maritim besar.
            <br><b>5. Kolonel TNI</b>
            Kolonel adalah pangkat perwira senior yang memimpin unit-unit besar seperti batalyon atau bagian dari armada laut.
            Biasanya bertanggung jawab atas pelaksanaan kebijakan angkatan laut di lapangan, serta mengelola operasi militer di tingkat regional atau unit.
            Kolonel juga memegang peran administratif tinggi dalam pengelolaan personel dan logistik.
        </p>
        <img class="w-[35rem] h-[20rem]" src="{{asset('pangkat1.jpg')}}"/>
        <img class="w-[35rem] h-[20rem] pt-[1.5rem]" src="{{asset('pangkat2.jpg')}}"/>
        <img class="w-[35rem] h-[20rem] pt-[1.5rem]" src="{{asset('pangkat3.jpg')}}"/>
        <p class="text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <br><b>6. Letnan Kolonel TNI</b>
            Letnan Kolonel adalah pangkat perwira menengah yang mengawasi satuan lebih kecil, seperti resimen atau unit spesial.
            Memiliki tanggung jawab besar dalam pelaksanaan perencanaan dan operasi militer di lapangan serta sering bertindak sebagai penghubung antara komando tinggi dan bawahannya.
            <br><b>7. Mayor TNI</b>
            Mayor adalah perwira menengah yang bertugas memimpin unit-unit lebih kecil di bawah komando resimen atau divisi.
            Mayor bertugas merencanakan dan melaksanakan misi operasi serta menjaga disiplin dan kesejahteraan prajurit di bawah komandonya.
            Juga bertanggung jawab untuk memastikan bahwa personel terlatih dengan baik dan siap untuk bertugas.
            <br><b>8. Kapten TNI</b>
            Kapten adalah perwira yang memimpin unit lebih kecil, seperti kapal atau kompi, dalam operasi-operasi harian.
            Bertanggung jawab untuk melatih dan membimbing anggotanya, serta melaksanakan operasi-operasi taktis dalam misi tertentu.
            Kapten juga mengawasi logistik dan memastikan semua sumber daya digunakan dengan efisien.
            <br><b>9. Letnan Satu TNI</b>
            Letnan Satu merupakan pangkat perwira pertama yang bertanggung jawab atas sejumlah anggota atau unit di bawah komandonya.
            Umumnya bertugas sebagai komandan sekoci atau pelaksana operasi tertentu, dan bekerja untuk memastikan disiplin serta pelaksanaan tugas secara efektif.
            Sebagai perwira pemula, Letnan Satu juga sering terlibat dalam pelatihan dan pengembangan anggota di bawah komandonya.
            <br><b>10. Letnan Dua TNI</b>
            Letnan Dua adalah pangkat perwira paling junior dan umumnya merupakan lulusan dari Akademi Angkatan Laut (AAL).
            Sebagai perwira pertama, Letnan Dua sering bertugas sebagai komandan kelompok atau pelaksana tugas operasional tertentu.
            Tugasnya meliputi pengawasan personel, serta memastikan bahwa prosedur dan peraturan militer diikuti dengan ketat.
        </p>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            Pangkat Bintara TNI AL
            <br><b>1. Pembantu Letnan Satu</b>
            Pangkat Bintara tertinggi, bertugas mengawasi dan memimpin kelompok yang lebih kecil dalam operasi.
            Sebagai pembantu perwira, mereka sering kali bertanggung jawab langsung dalam pelaksanaan tugas teknis dan operasional.
            Pembantu Letnan Satu juga bertugas memberikan arahan langsung kepada Sersan dan anggota di bawahnya.
            <br><b>2. Pembantu Letnan Dua</b>
            Pembantu Letnan Dua adalah pangkat Bintara yang lebih junior dan umumnya memimpin tim atau kelompok kecil.
            Mereka bertanggung jawab untuk melaksanakan perintah dari atasan dan memastikan operasional di lapangan berjalan sesuai prosedur.
            <br><b>3. Sersan Mayor</b>
            Sersan Mayor adalah pangkat Bintara tertinggi setelah Pembantu Letnan Satu.
            Bertugas memimpin kelompok atau bagian dari satuan dalam operasi tertentu.
            Sersan Mayor juga bertanggung jawab atas pelatihan dan pembinaan prajurit, serta bertindak sebagai penghubung antara perwira dan tamtama.
        </p>
        <img class=" w-[35rem] h-[20rem] pt-[1.5rem]" src="{{asset('pangkat4.jpg')}}"/>
        <img class=" w-[35rem] h-[20rem] pt-[1.5rem]" src="{{asset('pangkat5.jpg')}}"/>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <b>4. Sersan Kepala</b>
            Bertugas memimpin regu atau kelompok di bawah satuan.
            Sebagai bagian dari lini tengah, Sersan Kepala memastikan bahwa tugas harian dilaksanakan dengan disiplin dan sesuai dengan standar yang ditetapkan.
            <br><b>5. Sersan Satu</b>
            Memimpin kelompok lebih kecil dalam satuan tertentu dan bertugas memastikan bahwa perintah dilaksanakan dengan benar oleh prajurit di bawahnya.
            <br><b>6. Sersan Dua</b>
            Sersan Dua bertugas sebagai pelaksana utama dalam operasi-operasi lapangan dan bertanggung jawab langsung kepada atasan untuk pelaksanaan tugas yang diberikan.
        </p>


        <p class="text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            Pangkat Tamtama TNI AL
            <br><b>1. Kopral Kepala</b>
            Pangkat tamtama yang memimpin regu kecil atau sebagai bagian dari tim dalam operasional.
            Bertanggung jawab atas disiplin, pelaksanaan perintah, serta kesejahteraan anggota yang berada di bawah komandonya.
            <br><b>2. Kopral Satu</b>
            Memiliki tanggung jawab dalam menjaga disiplin dan operasional unit dalam skala lebih kecil.
            Mengawasi tamtama yang lebih junior serta memastikan keberhasilan pelaksanaan tugas.
            <br><b>3. Kopral Dua</b>
            Tugasnya sebagai pelaksana dalam unit, dengan tanggung jawab untuk melaksanakan perintah dari atasannya serta berkoordinasi dengan anggota di bawahnya.
        </p>
        <img class=" w-[35rem] h-[20rem] pt-[1.5rem]" src="{{asset('pangkat6.jpg')}}"/>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <b>4. Kelasi Kepala</b>
            Pangkat tamtama yang bertugas di kapal atau dalam satuan yang lebih kecil.
            Kelasi Kepala bertanggung jawab untuk menjalankan tugas-tugas teknis atau operasional yang lebih spesifik.
            <br><b>5. Kelasi Satu</b>
            Kelasi Satu berperan dalam melaksanakan tugas dasar operasional di kapal atau unit militer.
            Bertanggung jawab langsung untuk pelaksanaan tugas sehari-hari di bawah komando Kelasi Kepala.
            <br><b>6. Kelasi Dua</b>
            Pangkat paling rendah di Tamtama, bertugas sebagai pelaksana tugas operasional dan siap mengikuti instruksi dari atasan.
        </p>
    </div>



    
    {{-- Mobile --}}
    <div class=" flex flex-col justify-center items-center pt-[5rem] md:hidden">
        <h1 class=" text-2xl font-bold text-black">
            Kepangkatan Dalam Tni AL
        </h1>
        <p class=" text-[1rem] w-[20rem] pt-[1.5rem] leading-normal text-justify">
            <b>Kepangkatan TNI Angkatan Laut</b> adalah sistem jenjang pangkat yang digunakan untuk mengatur struktur organisasi, pembinaan karier, serta pembagian tugas dan tanggung jawab anggota TNI Angkatan Laut (TNI AL). Pangkat dalam TNI AL mengindikasikan posisi atau kedudukan seorang prajurit, bintara, perwira, hingga perwira tinggi dalam hierarki militer.

            Sistem kepangkatan ini dibagi menjadi beberapa kategori berdasarkan posisi dan fungsi dalam organisasi TNI Angkatan Laut. Secara garis besar, pangkat di TNI AL terbagi menjadi tiga kelompok utama: Pangkat Tamtama, Pangkat Bintara, dan Pangkat Perwira.

            <br><b>Fungsi Kepangkatan:</b>
            <br><b>Kepangkatan di TNI Angkatan Laut memiliki beberapa fungsi utama, yaitu:</b>
            <br><b>- Pengaturan Struktur Organisasi:</b> Sistem pangkat ini mengatur siapa yang berhak memimpin, siapa yang bertanggung jawab dalam tugas-tugas tertentu, dan siapa yang harus mengikuti perintah. Hal ini sangat penting untuk menciptakan kedisiplinan dan kinerja yang efisien.
            <br><b>- Penilaian Kinerja dan Pembinaan Karier:</b> Pangkat juga mencerminkan pengalaman, keterampilan, serta keahlian seseorang. Peningkatan pangkat didasarkan pada penilaian terhadap kinerja, kemampuan, serta loyalitas dalam menjalankan tugas.
            <br><b>- Pembagian Tugas dan Tanggung Jawab:</b> Pangkat menentukan tingkatan tanggung jawab dalam setiap jabatan. Seorang perwira memiliki wewenang lebih besar dibandingkan dengan seorang bintara atau tamtama.
            <br><b>- Sistem Penghargaan dan Kenaikan Pangkat:</b> Seiring dengan prestasi dan pengabdian yang diberikan, anggota TNI Angkatan Laut berhak mendapatkan kenaikan pangkat yang memberikan penghargaan atas dedikasi mereka dalam menjalankan tugas.
            
        </p>
        <p class=" text-[1rem] w-[20rem]  pt-[1.5rem]">
            Tugas dan tanggung jawab masing-masing kepangkatan TNI Angkatan Laut (TNI AL) memiliki peran yang sangat spesifik dalam struktur organisasi dan hierarki militer. Berikut adalah penjelasan detil mengenai tugas masing-masing pangkat TNI AL, yang dibagi berdasarkan kelompok: Perwira, Bintara, dan Tamtama.
        </p>
        <img class=" h-auto w-[15rem] pt-[1.5rem]" src="{{asset('pangkat.jpg')}}"/>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            <br><b>1.Laksamana TNI</b>
            Pangkat tertinggi di TNI AL.
            Bertanggung jawab atas komando strategis di Angkatan Laut, memimpin seluruh operasi dan kebijakan Angkatan Laut Indonesia.
            Laksamana TNI adalah pejabat yang memegang kendali atas kebijakan operasional, personel, dan anggaran angkatan laut secara keseluruhan.
            Tugasnya termasuk memberikan pengarahan dan kebijakan kepada jajaran bawahannya dan bekerja sama dengan pemimpin militer lainnya dalam pengambilan keputusan strategis.
            <br><b>2. Laksamana Madya (Laksdya) TNI</b>
            Pangkat yang berada satu tingkat di bawah Laksamana TNI.
            Bertanggung jawab atas komando daerah atau wilayah tertentu, seperti komando armada atau pangkalan angkatan laut.
            Biasanya menjabat sebagai pejabat senior dalam operasi-operasi besar atau menjadi kepala staf dalam organisasi TNI AL.
            Laksamana Madya memimpin divisi besar dalam angkatan laut dan bertugas merumuskan kebijakan strategis serta memastikan implementasi yang efektif.
            <br><b>3. Laksamana Muda (Laksda) TNI</b>
            Bertanggung jawab untuk memimpin komando operasi angkatan laut di tingkat lebih operasional.
            Sering kali memimpin operasi militer besar atau bertanggung jawab atas koordinasi dan eksekusi operasi taktis dan strategi di lapangan.
            Laksamana Muda juga memiliki tugas administratif tinggi, mengelola anggaran dan personel untuk komando-komando tertentu.
            <br><b>4. Laksamana Pertama (Laksma) TNI</b>
            Pangkat ini berada di bawah Laksamana Muda dan umumnya memimpin satuan-satuan besar seperti flotilla atau komando angkatan laut di level yang lebih spesifik.
            Laksamana Pertama bertugas mengawasi jalannya operasi-operasi angkatan laut dalam ruang lingkup yang lebih kecil atau lebih terfokus, misalnya satuan armada atau pangkalan militer.
            Juga berfungsi sebagai komandan dalam pertempuran atau operasi maritim besar.
            <br><b>5. Kolonel TNI</b>
            Kolonel adalah pangkat perwira senior yang memimpin unit-unit besar seperti batalyon atau bagian dari armada laut.
            Biasanya bertanggung jawab atas pelaksanaan kebijakan angkatan laut di lapangan, serta mengelola operasi militer di tingkat regional atau unit.
            Kolonel juga memegang peran administratif tinggi dalam pengelolaan personel dan logistik.
        </p>
        <img class="w-[20rem] h-[15rem]" src="{{asset('pangkat1.jpg')}}"/>
        <img class="w-[20rem] h-[15rem] pt-[1.5rem]" src="{{asset('pangkat2.jpg')}}"/>
        <img class="w-[20rem] h-[15rem] pt-[1.5rem]" src="{{asset('pangkat3.jpg')}}"/>
        <p class="text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            <br><b>6. Letnan Kolonel TNI</b>
            Letnan Kolonel adalah pangkat perwira menengah yang mengawasi satuan lebih kecil, seperti resimen atau unit spesial.
            Memiliki tanggung jawab besar dalam pelaksanaan perencanaan dan operasi militer di lapangan serta sering bertindak sebagai penghubung antara komando tinggi dan bawahannya.
            <br><b>7. Mayor TNI</b>
            Mayor adalah perwira menengah yang bertugas memimpin unit-unit lebih kecil di bawah komando resimen atau divisi.
            Mayor bertugas merencanakan dan melaksanakan misi operasi serta menjaga disiplin dan kesejahteraan prajurit di bawah komandonya.
            Juga bertanggung jawab untuk memastikan bahwa personel terlatih dengan baik dan siap untuk bertugas.
            <br><b>8. Kapten TNI</b>
            Kapten adalah perwira yang memimpin unit lebih kecil, seperti kapal atau kompi, dalam operasi-operasi harian.
            Bertanggung jawab untuk melatih dan membimbing anggotanya, serta melaksanakan operasi-operasi taktis dalam misi tertentu.
            Kapten juga mengawasi logistik dan memastikan semua sumber daya digunakan dengan efisien.
            <br><b>9. Letnan Satu TNI</b>
            Letnan Satu merupakan pangkat perwira pertama yang bertanggung jawab atas sejumlah anggota atau unit di bawah komandonya.
            Umumnya bertugas sebagai komandan sekoci atau pelaksana operasi tertentu, dan bekerja untuk memastikan disiplin serta pelaksanaan tugas secara efektif.
            Sebagai perwira pemula, Letnan Satu juga sering terlibat dalam pelatihan dan pengembangan anggota di bawah komandonya.
            <br><b>10. Letnan Dua TNI</b>
            Letnan Dua adalah pangkat perwira paling junior dan umumnya merupakan lulusan dari Akademi Angkatan Laut (AAL).
            Sebagai perwira pertama, Letnan Dua sering bertugas sebagai komandan kelompok atau pelaksana tugas operasional tertentu.
            Tugasnya meliputi pengawasan personel, serta memastikan bahwa prosedur dan peraturan militer diikuti dengan ketat.
        </p>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            Pangkat Bintara TNI AL
            <br><b>1. Pembantu Letnan Satu</b>
            Pangkat Bintara tertinggi, bertugas mengawasi dan memimpin kelompok yang lebih kecil dalam operasi.
            Sebagai pembantu perwira, mereka sering kali bertanggung jawab langsung dalam pelaksanaan tugas teknis dan operasional.
            Pembantu Letnan Satu juga bertugas memberikan arahan langsung kepada Sersan dan anggota di bawahnya.
            <br><b>2. Pembantu Letnan Dua</b>
            Pembantu Letnan Dua adalah pangkat Bintara yang lebih junior dan umumnya memimpin tim atau kelompok kecil.
            Mereka bertanggung jawab untuk melaksanakan perintah dari atasan dan memastikan operasional di lapangan berjalan sesuai prosedur.
            <br><b>3. Sersan Mayor</b>
            Sersan Mayor adalah pangkat Bintara tertinggi setelah Pembantu Letnan Satu.
            Bertugas memimpin kelompok atau bagian dari satuan dalam operasi tertentu.
            Sersan Mayor juga bertanggung jawab atas pelatihan dan pembinaan prajurit, serta bertindak sebagai penghubung antara perwira dan tamtama.
        </p>
        <img class=" w-[20rem] h-[15rem] pt-[1.5rem]" src="{{asset('pangkat4.jpg')}}"/>
        <img class=" w-[20rem] h-[15rem] pt-[1.5rem]" src="{{asset('pangkat5.jpg')}}"/>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            <b>4. Sersan Kepala</b>
            Bertugas memimpin regu atau kelompok di bawah satuan.
            Sebagai bagian dari lini tengah, Sersan Kepala memastikan bahwa tugas harian dilaksanakan dengan disiplin dan sesuai dengan standar yang ditetapkan.
            <br><b>5. Sersan Satu</b>
            Memimpin kelompok lebih kecil dalam satuan tertentu dan bertugas memastikan bahwa perintah dilaksanakan dengan benar oleh prajurit di bawahnya.
            <br><b>6. Sersan Dua</b>
            Sersan Dua bertugas sebagai pelaksana utama dalam operasi-operasi lapangan dan bertanggung jawab langsung kepada atasan untuk pelaksanaan tugas yang diberikan.
        </p>


        <p class="text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            Pangkat Tamtama TNI AL
            <br><b>1. Kopral Kepala</b>
            Pangkat tamtama yang memimpin regu kecil atau sebagai bagian dari tim dalam operasional.
            Bertanggung jawab atas disiplin, pelaksanaan perintah, serta kesejahteraan anggota yang berada di bawah komandonya.
            <br><b>2. Kopral Satu</b>
            Memiliki tanggung jawab dalam menjaga disiplin dan operasional unit dalam skala lebih kecil.
            Mengawasi tamtama yang lebih junior serta memastikan keberhasilan pelaksanaan tugas.
            <br><b>3. Kopral Dua</b>
            Tugasnya sebagai pelaksana dalam unit, dengan tanggung jawab untuk melaksanakan perintah dari atasannya serta berkoordinasi dengan anggota di bawahnya.
        </p>
        <img class=" w-[20rem] h-[15rem] pt-[1.5rem]" src="{{asset('pangkat6.jpg')}}"/>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            <b>4. Kelasi Kepala</b>
            Pangkat tamtama yang bertugas di kapal atau dalam satuan yang lebih kecil.
            Kelasi Kepala bertanggung jawab untuk menjalankan tugas-tugas teknis atau operasional yang lebih spesifik.
            <br><b>5. Kelasi Satu</b>
            Kelasi Satu berperan dalam melaksanakan tugas dasar operasional di kapal atau unit militer.
            Bertanggung jawab langsung untuk pelaksanaan tugas sehari-hari di bawah komando Kelasi Kepala.
            <br><b>6. Kelasi Dua</b>
            Pangkat paling rendah di Tamtama, bertugas sebagai pelaksana tugas operasional dan siap mengikuti instruksi dari atasan.
        </p>
    </div>
</body>
</html>