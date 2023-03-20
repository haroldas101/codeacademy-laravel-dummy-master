<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mano puslapiakas</title>
</head>

<body>
    @include('partials.header')
    <div class="flex justify-center w-full my-10">
        @yield('content')
    </div>
    @include('partials.footer')
</body>

</html>