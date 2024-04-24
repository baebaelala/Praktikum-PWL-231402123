<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>To Do List</title>
  @vite('resources/css/app.css')
</head>

<body class="h-screen">
<body class="h-screen flex flex-col">
  {{-- navbar --}}
  @include('layouts.navbar')
  {{-- akhir navbar --}}
  {{-- content --}}
  @yield('contect')
  {{-- akhir content --}}
  {{-- Footer --}}
  @include('layouts.footer')
  {{-- Footer End --}}
</body>
</html>
