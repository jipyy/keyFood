<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('../css/style.css') }}">
    <title>SaveHome |  </title>
    {{-- ini diatas, disebelah dikasih title statis --}}
</head>
<body>
@include('partials.sidebar')

<div class="container mt-4">
    @yield('container')
</div>

</body>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="{{ asset('../js/sidebar.js') }}">
</script>
</html>