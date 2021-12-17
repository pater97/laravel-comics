<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- header     -->
    @include('partials.header')

    <!-- main -->
    <main id="site_main">
        @yield('content')
    </main>

    <!-- footer -->
    @include('partials.footer')


</body>
</html>