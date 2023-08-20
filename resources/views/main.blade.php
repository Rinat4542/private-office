<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <script src="{{asset('assets/js/bootstrap.min.js') }}"></script>
    <title>Laravel</title>
</head>
<header>
    @include('components.navbar')
</header>
<body>
    <main>
        <div class="container-fluid">
            @yield('main')
        </div>
    </main>
</body>
</html>