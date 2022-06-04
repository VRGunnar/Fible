<!DOCTYPE html>
<html lang="en" class="h-screen">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fible | Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ URL::asset('/css/favicon_2.png') }}" type="image/x-icon"/>
</head>
<body class="bg-fWhite font-body flex flex-col h-screen">
    <nav class="bg-red-600 flex flex-col space-y-6 h-screen w-20">
        <ul>
            <li>
                <a id="home" href="#"><?xml version="1.0" encoding="UTF-8"?><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.42 459.87"><defs><style>.cls-1{fill:#f5f5f4;}</style></defs><path class="cls-1" d="M383.58,192.31l-119.55-117.24c-13.76-13.39-35.31-13.38-49.08,.02l-119.08,116.77c-6.48,6.35-10.09,14.84-10.18,23.91-.09,9.07,3.36,17.63,9.72,24.1l.52,.52c5.78,5.66,13.3,9.11,21.02,9.8v78.22c.24,21.4,17.75,38.68,39.04,38.68,.11,0,.22,0,.34,0h46.65c8.97,0,16.32-7.25,16.4-16.32v-67.25c.04-3.43,2.85-6.21,6.35-6.21h27.65c3.43,0,6.24,2.77,6.27,6.13v67.42c.09,9.04,7.47,16.34,16.49,16.24h46.84c21.35,0,38.86-17.28,39.1-38.77v-78.12c7.91-.77,15.27-4.19,21-9.82,13.4-13.08,13.64-34.63,.49-48.09Zm-130.01,52.36c-.11,0-.22,0-.34,0h-27.74c-21.35,0-38.87,17.28-39.11,38.76v51.02h-30.14c-3.66,.09-6.3-2.76-6.34-6.12v-94.35c-.09-8.99-7.43-16.24-16.33-16.24h-13.19c-.48,0-.93-.19-1.28-.54-.6-.58-.61-1.55,.02-2.19l119.01-116.69c.75-.73,1.97-.74,2.71-.02l119.04,116.71c.37,.37,.45,.79,.45,1.07,0,.29-.07,.71-.38,1.03l-.3,.29c-.32,.23-.69,.35-1.1,.35h-13.06c-8.97,0-16.32,7.25-16.4,16.32v94.16c-.04,3.44-2.85,6.21-6.35,6.21h-30.13v-51.1c-.24-21.4-17.75-38.68-39.04-38.68Z"/></svg></a>
                <label for="home">Home</label>
            </li>
            <li>
                <a id="toevoegen" href="#"><?xml version="1.0" encoding="UTF-8"?><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.42 459.87"><defs><style>.cls-2{fill:#44ba8e;stroke:#44ba8e;stroke-width:3px;}</style></defs><path class="cls-2" d="M398.39,203.73h-132.96V70.77c0-14.55-11.8-26.35-26.35-26.35s-26.35,11.8-26.35,26.35V203.73H79.77c-14.55,0-26.35,11.8-26.35,26.35s11.8,26.35,26.35,26.35H212.73v132.96c0,14.55,11.8,26.35,26.35,26.35s26.35-11.8,26.35-26.35v-132.96h132.96c14.55,0,26.35-11.8,26.35-26.35s-11.8-26.35-26.35-26.35Z"/></svg></a>
                <label for="toevoegen">Korting toevoegen</label>
            </li>
            <li class="">
                <a id="app" href="#"><?xml version="1.0" encoding="UTF-8"?><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.42 459.87"><defs><style>.cls-1{fill:#eff0ef;}</style></defs><path class="cls-1" d="M349.99,83.33c1.1,0,2,1.05,2,2.34V376.52c0,1.29-.9,2.34-2,2.34H144.72c-1.1,0-2-1.05-2-2.34V85.67c0-1.29,.9-2.34,2-2.34h205.27m0-32.23H144.72c-16.26,0-29.44,15.48-29.44,34.58V376.52c0,19.1,13.18,34.58,29.44,34.58h205.27c16.26,0,29.44-15.48,29.44-34.58V85.67c0-19.1-13.18-34.58-29.44-34.58h0Z"/><path class="cls-1" d="M247.36,303.3c-15.17,0-27.46,12.29-27.46,27.46s12.29,27.46,27.46,27.46,27.46-12.29,27.46-27.46-12.29-27.46-27.46-27.46h0Z"/></svg></a>
                <label for="app">Naar applicatie</label>
            </li>
        </ul>
    </nav>
    
</body>
</html>