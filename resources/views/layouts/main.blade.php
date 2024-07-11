<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('../css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/home.css') }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('../img/logos.svg') }}">
    {{-- <title>KeyFood | {{ $title }} </title> --}}
    {{-- ini diatas, disebelah dikasih title statis --}}
</head>

<body>
    @include('partials.sidebar')

    <div class="container">
        @yield('container')
    </div>
 
    @include('partials.footer')
</body>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
<script src="{{ asset('../js/sidebar.js') }}"></script>
<script src="{{ asset('../js/home.js') }}"></script>

</html>
