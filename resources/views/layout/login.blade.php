<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
  <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" class="w-[10rem]" href="{{ asset('logo-al.png') }}" type="image/x-icn">
    <title>tni-al.mil</title>
</head>
<body class="">

    <section class=" flex justify-center items-center pt-[10rem]">
        <div class=" bg-white w-[20rem] h-[25rem] rounded-lg shadow-lg  shadow-blue-600">
            <div class=" flex row justify-center items-center pt-[2rem]">
                <img class=" w-[4rem] " src="{{asset('logo-al.png')}}"/>
            </div>
            <div class=" flex flex-col gap-4 row justify-center items-center pt-[2rem]">
                <input class=" bg-white shadow-md h-[2rem] text-center border-none focus:outline-none focus:ring-0 focus:border-transparent" type="text" name="" id="" placeholder="Username">
                <input class=" bg-white shadow-md h-[2rem] text-center border-none focus:outline-none focus:ring-0 focus:border-transparent" type="password" name="" id="" placeholder="Password">
            </div>
            {{-- Button --}}
            <div class=" flex row justify-center items-center pt-[1.5rem]">
            <button class=" bg-blue-600 hover:bg-green-600  text-white rounded-lg px-[4rem] duration-500 p-2">
                Login
            </button>
            </div>
            <a href="">
            <p class=" text-[1rem] flex row justify-center items-center pt-[1rem]">
                Lupa Kata Sandi?
            </p>
            </a>
            <a href="">
            <p class=" text-[1rem] flex row justify-center items-center pt-[0.5rem]">
                Belum Punya akun?  <span class=" text-blue-600">Registrasi </span>
            </p>
            </a>
        </div>
        </section>
</body>
</html>