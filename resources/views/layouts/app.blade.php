<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Document')</title>

    {{-- ¡ESTA LÍNEA ES LA CLAVE! --}}
    {{-- Permite que los estilos definidos en @section('styles') de las vistas se inserten aquí --}}
    @yield('styles')
</head>
<body>

    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

</body>
</html>
