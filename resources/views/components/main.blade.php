{{-- Konten1 Desktop --}}
<div class="text-center pt-[10rem] flex justify-center items-center max-md:hidden">
    <div class="w-[50%] text-left pr-[2rem]">
        <h1 class="text-4xl text-black mb-[1rem] font-bold">
            Tentang TNI-AL
        </h1>

        <p class="w-[32rem] text-[1.2rem] text-justify">
            <b>Tentara Nasional Indonesia Angkatan Laut (TNI AL)</b> didirikan pada 10 September 1945, tak lama setelah proklamasi kemerdekaan Indonesia. Awalnya, TNI AL dikenal sebagai "Tentara Keamanan Rakyat Laut" (TKR Laut), yang dibentuk untuk menghadapi ancaman dari pasukan kolonial Belanda dan menjaga keamanan perairan Indonesia.
            Seiring waktu, organisasi ini berkembang dan pada 15 November 1945, namanya diubah menjadi <b>"Angkatan Laut Republik Indonesia" (ALRI).</b> Pada 1947, ALRI resmi bergabung dengan angkatan bersenjata Indonesia lainnya di bawah naungan <b>Tentara Nasional Indonesia (TNI).</b>
        </p>
    </div>
    <div>
        <img class="w-[23rem]" src="{{asset('group4.png')}}" alt="TNI-AL Image">
    </div>
</div>

{{-- Konten1 Mobile --}}
<div class="text-center pt-[10rem] flex flex-col justify-center items-center md:hidden">
    <div class="flex justify-center items-center mb-6">
        <img class="w-[23rem]" src="{{asset('group4.png')}}" alt="TNI-AL Image">
    </div>
    <div class="w-[90%] max-w-[32rem] text-center">
        <h1 class="text-2xl text-black mb-[1rem] font-bold">
            Tentang TNI-AL
        </h1>

        <p class="text-justify text-[1rem] mx-auto">
            <b>Tentara Nasional Indonesia Angkatan Laut (TNI AL)</b> didirikan pada 10 September 1945, tak lama setelah proklamasi kemerdekaan Indonesia. Awalnya, TNI AL dikenal sebagai "Tentara Keamanan Rakyat Laut" (TKR Laut), yang dibentuk untuk menghadapi ancaman dari pasukan kolonial Belanda dan menjaga keamanan perairan Indonesia.
            Seiring waktu, organisasi ini berkembang dan pada 15 November 1945, namanya diubah menjadi <b>"Angkatan Laut Republik Indonesia" (ALRI).</b> Pada 1947, ALRI resmi bergabung dengan angkatan bersenjata Indonesia lainnya di bawah naungan <b>Tentara Nasional Indonesia (TNI).</b>
        </p>
    </div>
</div>





{{-- Konten2 Desktop --}}
<section class=" max-md:hidden">
<div class="  flex flex-col justify-center items-center pt-[10rem]">
    <h1 class=" text-4xl text-black font-bold ">
        Siapa Pemimpin Tni AL?
    </h1>
    <p class=" w-[55rem] text-[1rem] pt-[1.5rem] text-justify ">
        Tentara Nasional Indonesia Angkatan Laut (TNI AL) dipimpin oleh seorang Panglima Angkatan Laut. Panglima TNI AL adalah posisi tertinggi dalam struktur komando TNI AL dan bertanggung jawab langsung kepada Panglima Tentara Nasional Indonesia (TNI).

Posisi Panglima TNI AL dipegang oleh seorang <b>KASAL ( Kepala Staf Angkatan Laut)</b>, yang ditunjuk oleh Presiden Indonesia berdasarkan rekomendasi Panglima TNI.
    </p>
</div>
<!-- card kasal -->
<div class="flex mt-12 items-center justify-center  ">
    <div class="relative flex w-full max-w-[48rem] flex-row rounded-xl bg-black bg-clip-border text-gray-700 shadow-lg hover:shadow-black">
    
      <!-- card gambar kiri -->
      <div class="relative m-0 w-2/5 shrink-0 overflow-hidden rounded-xl rounded-r-none bg-blue-600 bg-clip-border text-gray-700 ">
          <div class=" flex row justify-center items-center">
        <img
          src="{{asset('kasal.png')}}"
          alt="image"
          class=" w-[13rem]  pt-[2.2rem] flex row justify-center items-center"
        />
        </div>
      </div>
      <!-- Dekripsi kanan -->
      <div class="text-white">
        <h2 class=" text-white text-lg pl-5 font-bold flex justify-center items-center mt-6">
          Laksamana TNI Dr. Muhammad Ali, S.E., M.M., M.Tr.Opsla.,
        </h2>
        <p class=" w-[28rem] text-[1rem] pl-5 text-justify p-2 pt-[1rem]">
          - Nama Lengkap: Laksamana TNI Muhammad Ali
  
          <br>- Tempat/Tanggal Lahir: 4 Agustus 1966
  
          <br>- Pendidikan Militer:
  
          <br>Lulus dari Akademi Angkatan Laut (AAL) pada tahun 1988
          <br>Pendidikan dan pelatihan lanjutan di berbagai institusi militer baik dalam maupun luar negeri
        </p>
      </div>
    </div>
  </section>


  {{-- Konten2 Mobile --}}
<section class=" md:hidden">
<div class="  flex flex-col justify-center items-center pt-[10rem]">
  <h1 class=" text-2xl text-black font-bold ">
      Siapa Pemimpin Tni AL?
  </h1>
  <p class=" w-[21rem] text-[1rem] pt-[1.5rem] text-justify ">
      Tentara Nasional Indonesia Angkatan Laut (TNI AL) dipimpin oleh seorang Panglima Angkatan Laut. Panglima TNI AL adalah posisi tertinggi dalam struktur komando TNI AL dan bertanggung jawab langsung kepada Panglima Tentara Nasional Indonesia (TNI).

Posisi Panglima TNI AL dipegang oleh seorang <b>KASAL ( Kepala Staf Angkatan Laut)</b>, yang ditunjuk oleh Presiden Indonesia berdasarkan rekomendasi Panglima TNI.
  </p>
</div>
<!-- Card Kasal -->
<div class="flex mt-12 items-center justify-center px-4">
  <div class="relative flex flex-col w-full max-w-xs sm:max-w-md md:max-w-lg lg:max-w-xl rounded-xl bg-black bg-clip-border text-gray-700 shadow-lg hover:shadow-black">
  
    <!-- Card Gambar - Mobile dan Tablet -->
    <div class="relative w-full overflow-hidden rounded-t-xl bg-blue-600 bg-clip-border text-gray-700">
      <div class="flex justify-center items-center py-4">
        <img
          src="{{asset('kasal.png')}}"
          alt="image"
          class="w-32 h-auto mb-[-1rem]"
        />
      </div>
    </div>
    
    <!-- Deskripsi -->
    <div class="text-white px-4 pb-4">
      <h2 class="text-lg font-bold text-center mt-4">
        Laksamana TNI Dr. Muhammad Ali, S.E., M.M., M.Tr.Opsla.
      </h2>
      <p class="text-sm text-justify mt-2">
        - Nama Lengkap: Laksamana TNI Muhammad Ali
        <br>- Tempat/Tanggal Lahir: 4 Agustus 1966
        <br>- Pendidikan Militer:
        <br>Lulus dari Akademi Angkatan Laut (AAL) pada tahun 1988
        <br>Pendidikan dan pelatihan lanjutan di berbagai institusi militer baik dalam maupun luar negeri
      </p>
    </div>
  </div>
</div>
</section>




{{-- Konten3 Desktop --}}

<!-- quoetes-->
<div class=" bg-black w-full h-[25rem] mt-[10.5rem] flex justify-center items-center">
  <div class=" flex items-center justify-center px-5 py-5">
<div class="w-full mx-auto rounded-lg bg-white shadow-lg px-5 pt-5 pb-10 text-gray-800" style="max-width: 500px">
  <div class="w-full pt-1 pb-5">
      <div class="overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg">
          <img src="{{asset('soedirman.jpg')}}" alt="">
      </div>
  </div>
  <div class="w-full mb-10">
      <div class="text-3xl text-indigo-500 text-left leading-tight h-3">“</div>
      <p class="text-[1.2rem] text-black font-medium text-center px-5">“Kadang kita terlalu sibuk memikirkan kesulitan-kesulitan sehingga kita tidak punya waktu untuk mensyukuri rahmat Tuhan.”</p>
      <div class="text-3xl text-indigo-500 text-right leading-tight h-3 -mt-3">”</div>
  </div>
  <div class="w-full">
      <p class="text-md text-indigo-500 font-bold text-center">Jendral Soedirman</p>
      
  </div>
</div>
</div>

</div>






    



    


