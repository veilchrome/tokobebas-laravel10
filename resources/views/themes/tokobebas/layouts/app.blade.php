<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">
    <title>Tokobebas Shop's More</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/views/themes/tokobebas/assets/css/main.css', 'resources/views/themes/tokobebas/assets/plugins/jqueryui/jquery-ui.css', 'resources/views/themes/tokobebas/assets/js/main.js', 'resources/views/themes/tokobebas/assets/plugins/jqueryui/jquery-ui.min.js'])
</head>

<body>
    @include('themes.tokobebas.shared.header')
    @yield('content')
    @include('themes.tokobebas.shared.footer')

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
</body>

</html>
