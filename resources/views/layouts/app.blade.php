<!DOCTYPE html>
<html lang="en" class="h-screen">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fible | The app</title>
    <link rel="icon" type="image/svg+xml" href="images/favicon.svg">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> <!-- social buttons -->
    @livewireStyles
</head>
<body class="bg-fWhite font-body flex flex-col h-screen sm:overflow-y-scroll">
    
    @yield('content')

    @include('components.nav')
    
    @yield('footer-scripts')
    @livewireScripts
</body>
</html>