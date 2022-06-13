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
<body class="bg-fWhite font-body flex flex-wrap h-screen w-screen pl-40">

    <nav class="mt-16 mb-10 ml-10 p-2 flex flex-col space-y-6 h-5/6 w-24 text-center text-fWhite text-xs" style="background-color: rgb(24,39,46); border-radius: 0px 0px 0px 50px;">
        <ul class="min-h-full flex flex-col">
            <li class="flex flex-col items-center  pb-2 pt-4">
                <a id="toevoegen" href="#"><svg class="w-16" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.42 459.87"><defs><style>.cls-2{fill:#44ba8e;stroke:#44ba8e;stroke-width:3px;}</style></defs><path class="cls-2" d="M398.39,203.73h-132.96V70.77c0-14.55-11.8-26.35-26.35-26.35s-26.35,11.8-26.35,26.35V203.73H79.77c-14.55,0-26.35,11.8-26.35,26.35s11.8,26.35,26.35,26.35H212.73v132.96c0,14.55,11.8,26.35,26.35,26.35s26.35-11.8,26.35-26.35v-132.96h132.96c14.55,0,26.35-11.8,26.35-26.35s-11.8-26.35-26.35-26.35Z"/></svg></a>
                <label style="color:#44ba8e;" for="toevoegen">Korting toevoegen</label>
            </li>
            <li class="flex flex-col items-center">
                <a class="" id="home" href="#"><svg  class="w-14" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 643.35 750.19"><defs><style>.cls-1{fill:#eff0ef;}</style></defs><path class="cls-1" d="M547.35,208.59v-44.42c0-40.16-32.67-72.82-72.82-72.82H150.45c-40.16,0-72.82,32.67-72.82,72.82v44.42c0,28.28,16.22,52.83,39.83,64.89-23.61,12.06-39.83,36.61-39.83,64.89v44.42c0,28.28,16.22,52.83,39.83,64.89-23.61,12.06-39.83,36.61-39.83,64.89v44.42c0,40.16,32.67,72.82,72.82,72.82H474.53c40.16,0,72.82-32.67,72.82-72.82v-44.42c0-28.28-16.22-52.83-39.83-64.89,23.61-12.06,39.83-36.61,39.83-64.89v-44.42c0-28.28-16.22-52.83-39.83-64.89,23.61-12.06,39.83-36.61,39.83-64.89ZM125.62,164.18c0-13.71,11.11-24.82,24.82-24.82H474.53c13.71,0,24.82,11.11,24.82,24.82v44.42c0,13.71-11.11,24.82-24.82,24.82H150.45c-13.71,0-24.82-11.11-24.82-24.82v-44.42Zm348.91,149.37c13.71,0,24.82,11.11,24.82,24.82v44.42c0,13.71-11.11,24.82-24.82,24.82H150.45c-13.71,0-24.82-11.11-24.82-24.82v-44.42c0-13.71,11.11-24.82,24.82-24.82H474.53Zm24.82,243.43c0,13.71-11.11,24.82-24.82,24.82H150.45c-13.71,0-24.82-11.11-24.82-24.82v-44.42c0-13.71,11.11-24.82,24.82-24.82H474.53c13.71,0,24.82,11.11,24.82,24.82v44.42Z"/><circle class="cls-1" cx="180" cy="188.13" r="24.39"/><circle class="cls-1" cx="180" cy="362.32" r="24.39"/><circle class="cls-1" cx="180" cy="531.87" r="24.39"/></svg></a>
                <label class="" for="home">Archief</label>
            </li>
            <li class="flex flex-col items-center pt-4">
                <a id="app" href="../"><svg class="w-16" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.42 459.87"><defs><style>.cls-1{fill:#eff0ef;}</style></defs><path class="cls-1" d="M349.99,83.33c1.1,0,2,1.05,2,2.34V376.52c0,1.29-.9,2.34-2,2.34H144.72c-1.1,0-2-1.05-2-2.34V85.67c0-1.29,.9-2.34,2-2.34h205.27m0-32.23H144.72c-16.26,0-29.44,15.48-29.44,34.58V376.52c0,19.1,13.18,34.58,29.44,34.58h205.27c16.26,0,29.44-15.48,29.44-34.58V85.67c0-19.1-13.18-34.58-29.44-34.58h0Z"/><path class="cls-1" d="M247.36,303.3c-15.17,0-27.46,12.29-27.46,27.46s12.29,27.46,27.46,27.46,27.46-12.29,27.46-27.46-12.29-27.46-27.46-27.46h0Z"/></svg></a>
                <label for="app">Naar applicatie</label>
            </li>
            <li  class="flex flex-col items-center h-full justify-end pb-6">
                <a id="app" href="#"><svg class="w-16" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 643.35 750.19"><defs><style>.cls-1{fill:#eff0ef;}</style></defs><path class="cls-1" d="M288.29,410.44c1.46,.19,2.92,.37,4.39,.53-1.46-.16-2.93-.34-4.39-.53Z"/><path class="cls-1" d="M322.14,411.76c.91-.05,1.81-.12,2.72-.18-.91,.06-1.81,.13-2.72,.18Z"/><path class="cls-1" d="M262.45,405.1c.22,.06,.43,.13,.65,.19-.22-.06-.43-.13-.65-.19Z"/><path class="cls-1" d="M438.35,273.69c5.33-14.47,8.23-30.1,8.23-46.42,0-17.67-3.42-34.54-9.62-49.99,6.2,15.45,9.61,32.32,9.61,49.99,0,16.31-2.91,31.95-8.23,46.41Z"/><path class="cls-1" d="M327.15,411.42c.75-.06,1.5-.14,2.25-.21-.75,.07-1.5,.15-2.25,.21Z"/><path class="cls-1" d="M283.84,409.8c1.3,.2,2.6,.4,3.9,.58-1.3-.18-2.6-.38-3.9-.58Z"/><path class="cls-1" d="M266.64,406.23c.44,.11,.87,.23,1.31,.34-.44-.11-.88-.23-1.31-.34Z"/><path class="cls-1" d="M275.12,408.2c.9,.19,1.8,.38,2.7,.55-.9-.17-1.8-.36-2.7-.55Z"/><path class="cls-1" d="M279.45,409.05c1.11,.2,2.22,.41,3.34,.59-1.11-.18-2.23-.39-3.34-.59Z"/><path class="cls-1" d="M258.23,403.85s.06,.02,.09,.03c-.03,0-.06-.02-.09-.03Z"/><path class="cls-1" d="M77.07,536.32h0s0-.07,0-.1c0,.03,0,.07,0,.1Z"/><path class="cls-1" d="M332.15,410.94c.6-.07,1.19-.14,1.78-.22-.59,.07-1.19,.15-1.78,.22Z"/><path class="cls-1" d="M248.58,400.56c.18,.07,.37,.14,.55,.21-.18-.07-.37-.14-.55-.21Z"/><path class="cls-1" d="M320.57,411.83c-9.26,.42-18.55,.15-27.78-.84,6.38,.68,12.86,1.05,19.43,1.05,2.8,0,5.58-.08,8.36-.21Z"/><path class="cls-1" d="M285.12,358.91h0Z"/><path class="cls-1" d="M235.69,395.24c2.98,1.36,6,2.65,9.06,3.86-3.03-1.2-6.03-2.49-9.01-3.86h-17.58c-5.14,0-10.22,.29-15.22,.82,5-.54,10.07-.82,15.21-.82h17.53Z"/><path class="cls-1" d="M315.68,92.95c.25,0,.49,.02,.73,.03-.25,0-.49-.02-.73-.03Z"/><path class="cls-1" d="M451.54,402.66c55.7,18.87,95.81,71.6,95.81,133.66v43.67c0,27.82-22.57,50.39-50.39,50.39H127.45c-27.82,0-50.39-22.57-50.39-50.39v.03c0,27.83,22.56,50.38,50.39,50.39H496.98c27.83,0,50.38-22.56,50.39-50.39v-43.7c-.02-62.08-40.11-114.79-95.82-133.66Z"/><path class="cls-1" d="M144.91,415.73c-15.47,9.42-28.99,21.73-39.8,36.18,10.81-14.45,24.33-26.76,39.8-36.18Z"/><path class="cls-1" d="M337.16,410.32c.42-.06,.83-.13,1.25-.19-.42,.06-.83,.13-1.25,.19Z"/><path class="cls-1" d="M320.38,93.16c1.48,.09,2.95,.2,4.42,.34-1.47-.14-2.94-.25-4.42-.34Z"/><path class="cls-1" d="M342.16,409.56c.22-.04,.43-.08,.65-.11-.22,.04-.43,.08-.65,.11Z"/><path class="cls-1" d="M426.63,396.7c-6.65-.96-13.45-1.47-20.36-1.47h0c6.91,0,13.71,.51,20.35,1.47Z"/><path class="cls-1" d="M270.86,407.26c.67,.16,1.34,.32,2.02,.47-.67-.15-1.35-.31-2.02-.47Z"/><path class="cls-1" d="M244.74,399.1c1.27,.51,2.55,.99,3.84,1.47-1.28-.48-2.56-.96-3.84-1.47Z"/><path class="cls-1" d="M249.13,400.77c3.01,1.11,6.05,2.13,9.1,3.08-3.07-.95-6.1-1.98-9.1-3.08Z"/><path class="cls-1" d="M77.07,536.22c.03-31.61,10.45-60.79,28.04-84.3-17.59,23.52-28.02,52.7-28.04,84.3Z"/><path class="cls-1" d="M316.42,92.98c1.33,.04,2.64,.1,3.96,.18-1.31-.08-2.63-.14-3.96-.18Z"/><path class="cls-1" d="M312.22,361.64h-.02c-9.28,0-18.33-.94-27.08-2.73,8.75,1.79,17.81,2.73,27.09,2.73,57.9,0,107.24-36.61,126.14-87.96-18.9,51.34-68.24,87.95-126.13,87.95Z"/><path class="cls-1" d="M436.97,177.28c-18.34-45.74-61.11-79.04-112.17-83.79,51.06,4.74,93.83,38.05,112.17,83.79Z"/><path class="cls-1" d="M285.09,358.91c-61.21-12.54-107.25-66.71-107.25-131.63,0-74.21,60.16-134.37,134.37-134.37,1.16,0,2.32,.01,3.47,.04-1.15-.03-2.31-.04-3.47-.04-74.22,0-134.37,60.15-134.37,134.37,0,64.93,46.03,119.09,107.25,131.63Z"/><path class="cls-1" d="M144.91,415.73c17.26-10.51,36.95-17.41,58.03-19.68-21.08,2.26-40.77,9.17-58.03,19.68Z"/><path class="cls-1" d="M388.74,395.24c-14.4,6.62-29.81,11.47-45.93,14.21,15.73-2.67,31.19-7.39,45.96-14.21h-.04Z"/><path class="cls-1" d="M320.57,411.83c.52-.02,1.05-.04,1.57-.07-.52,.03-1.05,.04-1.57,.07Z"/><path class="cls-1" d="M258.32,403.88c1.37,.42,2.75,.83,4.13,1.22-1.38-.39-2.76-.79-4.13-1.22Z"/><path class="cls-1" d="M292.68,410.98s.07,0,.11,.01c-.04,0-.07,0-.11-.01Z"/><path class="cls-1" d="M324.86,411.58c.76-.05,1.53-.1,2.29-.16-.76,.06-1.53,.11-2.29,.16Z"/><path class="cls-1" d="M338.41,410.13c1.25-.18,2.5-.37,3.75-.57-1.25,.21-2.5,.39-3.75,.57Z"/><path class="cls-1" d="M426.63,396.7c8.58,1.24,16.91,3.25,24.92,5.96-8.01-2.71-16.34-4.72-24.92-5.96Z"/><path class="cls-1" d="M333.93,410.72c1.08-.13,2.15-.26,3.23-.4-1.07,.15-2.15,.27-3.23,.4Z"/><path class="cls-1" d="M329.4,411.21c.92-.09,1.84-.17,2.76-.27-.92,.1-1.84,.18-2.76,.27Z"/><path class="cls-1" d="M272.88,407.73c.75,.16,1.5,.32,2.25,.47-.75-.16-1.5-.31-2.25-.47Z"/><path class="cls-1" d="M267.96,406.57c.96,.24,1.93,.46,2.9,.69-.97-.23-1.94-.45-2.9-.69Z"/><path class="cls-1" d="M263.1,405.28c1.18,.33,2.36,.64,3.55,.94-1.19-.31-2.37-.61-3.55-.94Z"/><path class="cls-1" d="M282.79,409.63c.35,.06,.7,.11,1.05,.16-.35-.06-.7-.1-1.05-.16Z"/><path class="cls-1" d="M277.83,408.75c.54,.1,1.08,.2,1.62,.29-.54-.1-1.08-.19-1.62-.29Z"/><path class="cls-1" d="M287.74,410.38c.18,.02,.37,.04,.55,.07-.18-.02-.37-.04-.55-.07Z"/><path class="cls-1" d="M127.45,630.38H496.97c27.82,0,50.39-22.57,50.39-50.39v-43.67c0-62.06-40.11-114.79-95.81-133.66-8.01-2.71-16.34-4.72-24.92-5.96-6.65-.96-13.44-1.47-20.35-1.47h-17.49c-14.78,6.81-30.24,11.54-45.96,14.21-.22,.04-.43,.08-.65,.11-1.25,.21-2.5,.39-3.75,.57-.42,.06-.83,.13-1.25,.19-1.07,.15-2.15,.28-3.23,.4-.59,.07-1.18,.15-1.78,.22-.92,.1-1.84,.18-2.76,.27-.75,.07-1.5,.15-2.25,.21-.76,.06-1.53,.11-2.29,.16-.91,.06-1.81,.13-2.72,.18-.52,.03-1.05,.04-1.57,.07-2.77,.13-5.55,.21-8.36,.21-6.57,0-13.04-.36-19.43-1.05-.04,0-.07,0-.11-.01-1.47-.16-2.93-.34-4.39-.53-.18-.02-.37-.04-.55-.07-1.31-.18-2.61-.38-3.9-.58-.35-.06-.7-.1-1.05-.16-1.12-.18-2.23-.38-3.34-.59-.54-.1-1.08-.19-1.62-.29-.9-.17-1.8-.36-2.7-.55-.75-.16-1.5-.31-2.25-.47-.68-.15-1.35-.31-2.02-.47-.97-.23-1.94-.45-2.9-.69-.44-.11-.88-.23-1.31-.34-1.18-.31-2.37-.61-3.55-.94-.22-.06-.43-.13-.65-.19-1.38-.39-2.75-.79-4.13-1.22-.03,0-.06-.02-.09-.03-3.05-.95-6.09-1.97-9.1-3.08-.18-.07-.37-.14-.55-.21-1.28-.48-2.56-.96-3.84-1.47-3.06-1.21-6.08-2.5-9.06-3.86h-17.53c-5.14,0-10.22,.28-15.21,.82-21.08,2.27-40.78,9.17-58.03,19.68-15.47,9.42-28.99,21.73-39.8,36.18-17.59,23.51-28.01,52.69-28.04,84.3,0,.03,0,.07,0,.1v43.67c0,27.82,22.57,50.39,50.39,50.39Zm-1.83-94.06c0-51.02,41.51-92.53,92.53-92.53h7.57c27.7,11.15,56.74,16.8,86.49,16.8s58.9-5.65,86.52-16.8h7.54c51.02,0,92.53,41.51,92.53,92.53v43.67c0,1.01-.82,1.83-1.83,1.83H127.45c-1.01,0-1.83-.82-1.83-1.83v-43.67Z"/><path class="cls-1" d="M177.85,227.27c0,64.92,46.03,119.09,107.25,131.63h.03c8.75,1.8,17.8,2.74,27.08,2.74h.02c57.9,0,107.24-36.62,126.13-87.95,5.32-14.47,8.23-30.1,8.23-46.41,0-17.67-3.42-34.54-9.61-49.99-18.35-45.74-61.11-79.04-112.17-83.79-1.47-.14-2.94-.25-4.42-.34-1.31-.08-2.63-.14-3.96-.18-.25,0-.49-.02-.73-.03-1.15-.03-2.31-.04-3.47-.04-74.21,0-134.37,60.16-134.37,134.37Zm220.18,0c0,47.32-38.5,85.82-85.82,85.82s-85.81-38.5-85.81-85.82,38.5-85.82,85.81-85.82,85.82,38.5,85.82,85.82Z"/></svg></a>
                <label for="app">Profiel</label>
            </li>
        </ul>
    </nav>

    <main class="w-9/12 bg-white mt-16 pb-20 h-5/6 pl-24 pt-10" style="border-radius: 0px 50px 0px 0px;">
        <!-- <form class="flex flex-col flex-wrap h-full" action="#"> -->
        <form class="grid grid-rows-2 h-full" method="post" action="{{ url('/dashboard/store') }}">
                @csrf

            <div class="grid-area: 1 / 1 / 2 / 2;">
                <div class="w-4/5 pb-4">
                    <label class="w-full" class="pl-1 pr-32" for="name">Naam bedrijf</label><br>
                    <input class="bg-neutral-200 rounded-full p-1 pl-4 w-full" type="text" id="name" name="name" placeholder="Naam bedrijf">
                </div>
                <div class="w-4/5 pb-4">
                    <label class="w-full" for="title">Titel korting</label><br>
                    <input class="bg-neutral-200 rounded-full p-1 pl-4 w-full" type="text" id="title" name="title" placeholder="Titel korting">
                </div>
                <div class="w-4/5 pb-4">
                    <label class="w-full" for="description">Description</label><br>
                    <textarea class="bg-neutral-200 rounded-xl p-1 pl-4 w-full" id="description" rows="4" cols="25" name="description" placeholder="Description"></textarea>
                </div>
                <div class="w-4/5 pb-4">
                <label class="w-full" for="price">Prijs</label><br>
                <input class="bg-neutral-200 rounded-full p-1 pl-4 w-full" type="text" id="price" name="price" placeholder="Prijs"><br>
                </div>
                <div class="w-4/5 pb-4">
                    <label class="w-full" for="discount">Korting</label><br>
                    <input class="bg-neutral-200 rounded-full p-1 pl-4 w-full" type="text" id="discount" name="discount" placeholder="korting in %"><br>
                </div>
                <div class="w-4/5 pb-4">
                    <label class="w-full" for="category">Categorie</label>
                    <select id="category" name="category">
                    <option value="supscription">Supscription</option>
                    <option value="korting">Korting</option>
                    </select>
                </div>
                <input class="rounded-full w-4/5 p-1 text-white" style="background-color: rgb(68,186,142);" type="submit" value="Korting opslaan">
            </div>


            <div style="grid-area: 1 / 2 / 2 / 3;">
                <div class="w-4/5 pb-4">
                    <label class="w-full" for="location">Locatie</label><br>
                    <input class="bg-neutral-200 rounded-full p-1 pl-4 mr-10 w-full" type="text" id="location" name="location" placeholder="Locatie">
                </div>
                <div class="w-4/5 pb-4">
                    <label class="w-full" for="duration ">Kortingsperiode</label><br>
                    <input class="bg-neutral-200 rounded-full p-1 pl-4 mr-10 w-full" type="text" id="duration" name="duration" placeholder="Kortingsperiode">
                </div>
                <div class="w-4/5 pb-4">
                    <label class="w-full" for="logo ">Upload kortings afbeelding</label><br>
                    <input type="file" id="logo" name="logo">
                </div>
                <div class="w-4/5 pb-4">
                <a class="text-blue-600" href="{{ asset('css/contract_fible.pdf') }}" download>Download contract</a>
                </div>
                <input class="rounded-full w-4/5 p-1 text-white" style="background-color: rgb(240,79,90);" type="button" value="Annuleren">
                <!-- <a href="" class="rounded-full w-4/5 p-1 text-white" style="background-color: rgb(240,79,90);">Annuleren</a> -->
            </div>
        </form> 
    </main>
    
</body>
</html>