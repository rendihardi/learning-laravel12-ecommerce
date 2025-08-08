<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="css/main.css">
    <title>IndoToko: Official Site</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/views/themes/ecommerce/assets/css/main.css', 'resources/views/themes/ecommerce/assets/plugins/jqueryui/jquery-ui.css', 'resources/views/themes/ecommerce/assets/js/main.js', 'resources/views/themes/ecommerce/assets/plugins/jqueryui/jquery-ui.min.js'])
</head>

<body>
    @include('themes.ecommerce.shared.header')
    @yield('content')
    @include('themes.ecommerce.shared.footer')

    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
    {{-- <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script> --}}
</body>

</html>
