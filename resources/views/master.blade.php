<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/motion-tailwind.css">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <!-- Include Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script defer="" src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
    <script defer="" src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer="" src="https://unpkg.com/@alpinejs/focus@3.10.5/dist/cdn.min.js"></script>
    <script defer="" src="https://unpkg.com/@alpinejs/ui@3.10.5-beta.7/dist/cdn.min.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-P9M5S0890F"></script>
    <script src="https://d1w019qw3bn26k.cloudfront.net/assets/application-96366d9fa3d37bdeb995460f55f39f1fa737e0bd3cd5db696f70c202d85715f1.js" data-turbo-track="reload" defer="defer"></script>

    @yield('head')
</head>

<body>
    @yield('content')
    <script src="{{ asset('js/darkmode.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>

</html>