<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <!-- Font Awesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<title>tni-al.mil</title>
</head>
<body class="">
    {{-- NavBar --}}
    @include('components.navbar')
    {{-- Header --}}
    @include('components.header')
    {{-- Main --}}
    @include('components.main')

    
    
</body>
</html>