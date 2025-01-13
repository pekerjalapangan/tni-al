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
    {{-- Navbar --}}
    @include('components.navbar')
    
    {{-- Desktop --}}
    <div class=" flex flex-col justify-center items-center pt-[5rem] max-md:hidden">
        <h1 class=" text-4xl font-bold">
            Visi Misi TNI-AL
        </h1>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <b>Visi dan misi TNI Angkatan Laut</b> merupakan pedoman dan tujuan utama yang menjadi dasar operasional serta arah kebijakan organisasi tersebut. Berikut penjelasan detailnya:

            <br><b>Pengertian Visi TNI Angkatan Laut</b>
            Visi adalah gambaran masa depan yang ingin dicapai oleh TNI AL. Visi ini mencerminkan tujuan besar jangka panjang, idealisme, dan cita-cita strategis organisasi. Dalam konteks TNI AL, visinya berhubungan erat dengan peran mereka dalam menjaga kedaulatan laut Indonesia serta mendukung keamanan nasional dan internasional.

            <br><b>Contoh visi TNI AL (sesuai dokumen resmi yang berlaku, dapat diperbarui sesuai kebijakan):</b>  
            "Menjadi kekuatan pertahanan laut yang profesional dan tangguh dalam menjaga kedaulatan negara di laut serta mendukung terciptanya stabilitas kawasan regional.

            <br>Pengertian Misi TNI Angkatan Laut
            Misi adalah langkah atau upaya yang dilakukan untuk mencapai visi. Misi mencerminkan tindakan nyata, tugas pokok, dan tanggung jawab yang diemban TNI AL untuk mewujudkan visi mereka.
        </p>
        <img class=" w-[25rem] h-auto pt-[1.5rem]" src="{{asset('visi-misi.jpg')}}"/>
        <p class=" text-[1rem] w-[55rem] text-justify pt-[1.5rem]">
            <br><b>Misi utama TNI AL mencakup:</b>
            <br><b>1. Menjaga dan mempertahankan kedaulatan NKRI di laut:</b> 
            TNI AL bertugas melindungi wilayah perairan Indonesia dari ancaman militer maupun non-militer.
            
            <br><b>2. Menegakkan hukum dan keamanan di perairan yurisdiksi nasional:</b>  
            Memberantas pelanggaran hukum di laut, seperti perompakan, pencurian ikan (illegal fishing), penyelundupan, serta kejahatan lintas batas.

            <br><b>3. Mendukung diplomasi pertahanan:</b>  
            Melalui latihan bersama, operasi kemanusiaan, dan kerja sama internasional, TNI AL berperan dalam memperkuat hubungan baik dengan negara lain.

            <br><b>4. Melakukan operasi militer selain perang:</b>  
            Berperan dalam penanggulangan bencana, bantuan kemanusiaan, dan misi perdamaian dunia.

            <br><b>5. Meningkatkan profesionalisme prajurit dan modernisasi alat utama sistem senjata (alutsista):</b> 
            Dengan mengadopsi teknologi canggih serta melatih personel yang kompeten, TNI AL terus meningkatkan kapabilitasnya untuk menghadapi tantangan masa depan.

            <br>Makna Strategis Visi dan Misi TNI AL
            <br>- Kedaulatan Negara: Visi dan misi TNI AL menegaskan pentingnya laut sebagai bagian integral dari pertahanan dan kedaulatan Indonesia, mengingat negara ini adalah negara kepulauan terbesar di dunia.
            <br>- Keamanan Regional: Peran TNI AL juga mencakup menjaga stabilitas kawasan di tengah dinamika geopolitik internasional.
            <br>- Pembangunan Nasional: Laut merupakan jalur utama perdagangan dan sumber daya. Dengan menjaga keamanan laut, TNI AL mendukung pembangunan ekonomi nasional.

            Visi dan misi TNI AL selalu disesuaikan dengan tantangan zaman dan prioritas strategis pemerintah, sehingga dapat memberikan kontribusi optimal dalam menjaga keutuhan dan keamanan NKRI.
        </p>
        
    </div>
    

    {{-- Mobile --}}
    <div class=" flex flex-col justify-center items-center pt-[5rem] md:hidden">
        <h1 class=" text-2xl font-bold">
            Visi Misi TNI-AL
        </h1>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            <b>Visi dan misi TNI Angkatan Laut</b> merupakan pedoman dan tujuan utama yang menjadi dasar operasional serta arah kebijakan organisasi tersebut. Berikut penjelasan detailnya:

            <br><b>Pengertian Visi TNI Angkatan Laut</b>
            Visi adalah gambaran masa depan yang ingin dicapai oleh TNI AL. Visi ini mencerminkan tujuan besar jangka panjang, idealisme, dan cita-cita strategis organisasi. Dalam konteks TNI AL, visinya berhubungan erat dengan peran mereka dalam menjaga kedaulatan laut Indonesia serta mendukung keamanan nasional dan internasional.

            <br><b>Contoh visi TNI AL (sesuai dokumen resmi yang berlaku, dapat diperbarui sesuai kebijakan):</b>  
            "Menjadi kekuatan pertahanan laut yang profesional dan tangguh dalam menjaga kedaulatan negara di laut serta mendukung terciptanya stabilitas kawasan regional.

            <br>Pengertian Misi TNI Angkatan Laut
            Misi adalah langkah atau upaya yang dilakukan untuk mencapai visi. Misi mencerminkan tindakan nyata, tugas pokok, dan tanggung jawab yang diemban TNI AL untuk mewujudkan visi mereka.
        </p>
        <img class=" w-[15rem] h-auto pt-[1.5rem]" src="{{asset('visi-misi.jpg')}}"/>
        <p class=" text-[1rem] w-[20rem] text-justify pt-[1.5rem]">
            <br><b>Misi utama TNI AL mencakup:</b>
            <br><b>1. Menjaga dan mempertahankan kedaulatan NKRI di laut:</b> 
            TNI AL bertugas melindungi wilayah perairan Indonesia dari ancaman militer maupun non-militer.
            
            <br><b>2. Menegakkan hukum dan keamanan di perairan yurisdiksi nasional:</b>  
            Memberantas pelanggaran hukum di laut, seperti perompakan, pencurian ikan (illegal fishing), penyelundupan, serta kejahatan lintas batas.

            <br><b>3. Mendukung diplomasi pertahanan:</b>  
            Melalui latihan bersama, operasi kemanusiaan, dan kerja sama internasional, TNI AL berperan dalam memperkuat hubungan baik dengan negara lain.

            <br><b>4. Melakukan operasi militer selain perang:</b>  
            Berperan dalam penanggulangan bencana, bantuan kemanusiaan, dan misi perdamaian dunia.

            <br><b>5. Meningkatkan profesionalisme prajurit dan modernisasi alat utama sistem senjata (alutsista):</b> 
            Dengan mengadopsi teknologi canggih serta melatih personel yang kompeten, TNI AL terus meningkatkan kapabilitasnya untuk menghadapi tantangan masa depan.

            <br>Makna Strategis Visi dan Misi TNI AL
            <br>- Kedaulatan Negara: Visi dan misi TNI AL menegaskan pentingnya laut sebagai bagian integral dari pertahanan dan kedaulatan Indonesia, mengingat negara ini adalah negara kepulauan terbesar di dunia.
            <br>- Keamanan Regional: Peran TNI AL juga mencakup menjaga stabilitas kawasan di tengah dinamika geopolitik internasional.
            <br>- Pembangunan Nasional: Laut merupakan jalur utama perdagangan dan sumber daya. Dengan menjaga keamanan laut, TNI AL mendukung pembangunan ekonomi nasional.

            Visi dan misi TNI AL selalu disesuaikan dengan tantangan zaman dan prioritas strategis pemerintah, sehingga dapat memberikan kontribusi optimal dalam menjaga keutuhan dan keamanan NKRI.
        </p>
        
    </div>
    {{-- footer --}}
    @include('components.footer')
</body>
</html>