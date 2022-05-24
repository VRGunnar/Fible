@extends('layouts/app')

@section('content')
<h1 class="uppercase text-2xl text-center mt-10 mb-6 tracking-[0.5em] font-normal">Profiel</h1>
<div class="w-full p-6">
    <a href="" class="text-fGrey">Tap to flip</a>
    <div class="w-full bg-gradient-to-br from-black to-fGrey rounded-xl mt-2 p-4 drop-shadow-xl	 grid grid-cols-2 grid-rows-2">
        <svg class="w-20 h-auto col-start-1 col-end-3 row-start-1 row-end-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76.39 52.94">
            <defs>
                <style>
                    .uuid-d230ab54-c2d3-471d-be5f-ae44ef439d21 {
                        fill: #fff;
                    }

                    .uuid-10ff891a-baed-4988-9eb1-0af8e897c529 {
                        fill: #0593a7;
                    }

                    .uuid-3ae0b50f-8048-46d3-bd44-5c98ac33f77f {
                        fill: #f04c25;
                    }
                </style>
            </defs>
            <rect class="uuid-3ae0b50f-8048-46d3-bd44-5c98ac33f77f" x="0" y="0" width="76.39" height="52.94" rx="10" ry="10" />
            <g>
                <path id="uuid-e6cc6622-8b56-4d60-872c-f936a40e4180" class="uuid-d230ab54-c2d3-471d-be5f-ae44ef439d21" d="M68.91,22.75c-.37,.12-.75,.18-1.14,.17-1.32-.01-2.64-.02-3.96,0-1.76,0-3.23,1.35-3.38,3.1-.24,2.26-.13,4.53-.09,6.79,.03,1.68,1.32,3.58,3.57,3.63,1.35,.03,2.69,.05,4.04,.07,.33,0,.68-.04,.97,.19v1.18c-2.3,.23-4.63,.37-6.85-.31-2.21-.68-3.11-2.53-3.22-4.67-.13-2.18-.12-4.37,.05-6.55,.27-3.14,1.96-4.83,5.11-5.04,1.37-.09,2.76-.01,4.14-.02,.28,0,.55,.11,.77,.28v1.18Z" />
                <path id="uuid-af6a76b6-acd8-47a6-adc2-d1fa545bccb3" class="uuid-d230ab54-c2d3-471d-be5f-ae44ef439d21" d="M26.39,14.8c.3,.43,.16,.92,.17,1.38,.02,1.06,0,2.13,0,3.19,0,.26,.03,.54-.36,.51-.31-.02-.3-.27-.3-.5,.03-.9-.03-1.81-.16-2.7-.45,.91-.9,1.82-1.34,2.73-.1,.21-.17,.44-.43,.45-.29,.01-.34-.26-.43-.45-.44-.96-.95-1.89-1.53-2.78,0,.94,0,1.87,0,2.81,0,.21-.01,.42-.27,.44-.29,.02-.39-.16-.39-.43,0-1.37,.01-2.74,0-4.12,0-.28,.22-.36,.31-.55h.17c.24,.22,.43,.49,.57,.78,.5,1.06,1.02,2.11,1.56,3.21,.82-1.29,1.23-2.76,2.1-3.99h.34Z" />
                <path id="uuid-a21904db-15fb-4768-bf0e-6ce2818c7128" class="uuid-d230ab54-c2d3-471d-be5f-ae44ef439d21" d="M18.79,14.8c.98,.61,1.75,1.35,1.71,2.63,0,1.25-.9,2.32-2.13,2.55-1.11,.22-2.32-.46-2.78-1.56-.46-1.12-.11-2.42,.86-3.16,.22-.16,.44-.31,.65-.46h1.69Zm1.05,2.6c0-1.18-.77-1.98-1.9-1.97-1.12,0-1.91,.84-1.9,1.99,.01,1.1,.81,1.92,1.88,1.94,1.14,.02,1.92-.78,1.92-1.96" />
                <path id="uuid-ab2412de-a3a5-45d8-9e46-d8f82954f459" class="uuid-d230ab54-c2d3-471d-be5f-ae44ef439d21" d="M14.22,14.8c.21,.18,.32,.45,.3,.72-.02,1.25,0,2.51-.01,3.77,0,.23,.09,.57-.28,.6-.45,.03-.32-.35-.34-.6,0-.08,0-.17,0-.25,0-1.38,0-1.35-1.36-1.37-.55,0-.77,.14-.7,.7,.03,.28,.03,.56,0,.84-.02,.28,.12,.7-.36,.69-.44,0-.29-.4-.29-.65,0-1.48,0-2.96,0-4.43h.34c.49,.33,.35,.85,.3,1.28-.1,.82,.2,1.03,1.01,1.02,.8,0,1.22-.14,1.07-1.04-.07-.41-.01-.84-.02-1.26h.34Z" />
                <path id="uuid-7dac168c-9995-4596-8f0d-f783368bb1e5" class="uuid-d230ab54-c2d3-471d-be5f-ae44ef439d21" d="M29.6,14.8c.67,.84,.88,1.9,1.34,2.84,.27,.55,.47,1.13,.7,1.7,.07,.17,.23,.37-.03,.5-.25,.13-.43,0-.53-.24-.05-.1-.09-.2-.13-.31-.18-.81-.66-1.05-1.5-1.02-.72,.03-1.17,.16-1.34,.89-.05,.22-.15,.42-.28,.6-.11,.13-.31,.16-.46,.07-.1-.04-.15-.16-.11-.27h0c.76-1.58,1.17-3.31,2.16-4.78h.17Zm-.09,1.07c-.26,.67-.58,1.17-.67,1.78h1.38l-.71-1.78" />
                <path id="uuid-0186aa2c-adca-4de6-ba6a-6fdcc27223d7" class="uuid-d230ab54-c2d3-471d-be5f-ae44ef439d21" d="M34.33,14.8c.26,.27,.64,.45,.74,.86,.05,.21,.2,.45-.08,.58-.27,.12-.37-.1-.49-.3-.36-.58-.89-.69-1.29-.3-.38,.37-.3,.92,.21,1.17,.35,.17,.75,.23,1.1,.4,.66,.33,.91,.9,.75,1.61-.17,.71-.82,1.2-1.55,1.18-.67,0-1.25-.46-1.42-1.11-.06-.18-.16-.47,.16-.56,.3-.08,.4,.16,.46,.37,.16,.52,.51,.72,1.03,.63,.38-.05,.67-.36,.69-.74,.05-.55-.3-.8-.77-.93-.27-.07-.53-.16-.79-.28-1.04-.51-1.01-1.56,.06-2.58h1.18Z" />
                <path id="uuid-49b11b57-d4e2-46a3-b44c-f4c483f0e66c" class="uuid-d230ab54-c2d3-471d-be5f-ae44ef439d21" d="M68.91,29.98c-1.12,.33-2.27,.11-3.41,.14-.38,.01-.49-.3-.48-.65,0-.34,0-.79,.41-.79,1.16-.01,2.34-.23,3.48,.13v1.18Z" />
                <path id="uuid-31dcbec8-7dfe-4fa8-a862-5bd383b7e082" class="uuid-d230ab54-c2d3-471d-be5f-ae44ef439d21" d="M9.07,24.76c0,4.12,0,8.24,0,12.35,0,.58-.06,.95-.8,.96-.76,0-.8-.4-.8-.96,0-4.96,0-9.92,0-14.88,0-.4-.13-.94,.5-.97,.57-.03,1.21-.24,1.59,.55,1.43,2.97,2.91,5.92,4.38,8.88,.77,1.55,1.54,3.1,2.34,4.72,.47-.51,.66-1.13,.94-1.69,1.94-3.91,3.88-7.82,5.81-11.73,.35-.71,.97-.96,1.72-.73,.35,.1,.39,.36,.39,.65,0,5.16,0,10.31,0,15.47,0,.59-.28,.68-.78,.69-.6,.02-.78-.22-.78-.8,.02-3.81,0-7.62,0-11.43v-1.09c-.36-.04-.33,.28-.41,.45-2.01,4.03-4,8.06-6,12.1-.18,.36-.28,.77-.86,.77s-.67-.41-.85-.78c-1.97-3.98-3.95-7.97-5.92-11.95-.11-.22-.23-.42-.35-.63l-.14,.05Z" />
                <path id="uuid-55193d6c-b8cb-47c8-9a19-b8e189fb0a02" class="uuid-d230ab54-c2d3-471d-be5f-ae44ef439d21" d="M52.08,32.08c1.19,1.67,2.3,3.22,3.39,4.77,.24,.34,.79,.79,.21,1.1-.44,.23-1.14,.34-1.58-.29-1.24-1.76-2.52-3.51-3.74-5.28-.32-.47-1.02-.91-.78-1.47,.27-.63,1.06-.27,1.62-.3,3.51-.22,5.25-3.03,3.68-5.96-.69-1.29-1.82-1.78-3.18-1.84-1.26-.06-2.53-.03-3.8-.05-.66-.01-.43,.46-.43,.76-.01,4.54-.01,9.07,0,13.61,0,.5,.03,.93-.71,.95-.68,.02-.87-.21-.87-.86,.02-5.01,.02-10.02,0-15.04,0-.69,.21-.95,.92-.92,1.83,.08,3.65-.05,5.48,.13,2.43,.24,4.2,1.75,4.59,4.18,.34,2.15-.15,4.06-1.91,5.51-.79,.64-1.74,.85-2.86,1.01" />
                <path id="uuid-de853aa4-14f2-45b2-9d1e-5f0423c3c569" class="uuid-10ff891a-baed-4988-9eb1-0af8e897c529" d="M44.1,29.63c0,4.56-3.49,8.23-8.01,8.42-4.83,.21-8.57-3-9-7.73-.03-.38-.37-.99,.5-1.04,.72-.04,1.01,.13,1.07,.93,.23,3.29,2.57,5.78,5.84,6.31,3.1,.53,6.17-1.11,7.44-3.99,1.91-4.37-.71-9.65-5.99-9.91-.74-.04-.91-.3-.87-.96,.03-.46,.22-.58,.63-.54,5.58,.44,8.35,4.14,8.38,8.51" />
                <path id="uuid-42af1e4e-bff0-485b-a645-a76d6118735a" class="uuid-d230ab54-c2d3-471d-be5f-ae44ef439d21" d="M8.65,17.68c0-.42-.02-.84,0-1.26,.04-.6,.04-1.15-.84-.97-.14,.04-.29-.03-.33-.17,0-.03-.01-.06-.01-.09,0-.23,.16-.28,.33-.28,.79,0,1.58,0,2.36,0,.17,0,.34,.06,.33,.29,0,.15-.13,.27-.28,.27-.03,0-.05,0-.08-.01-.91-.19-.83,.41-.82,.98,.01,.95,0,1.9,0,2.85,0,.24,.06,.56-.3,.58-.45,.03-.36-.33-.36-.6,0-.53,0-1.06,0-1.6" />
            </g>
        </svg>
        <div class="col-start-1 col-end-3 row-start-2 row-end-3 flex flex-row justify-between">
            <div class="font-base text-fWhite">
                <p>Gunnar Van Remoortere</p>
                <p class="uppercase">Student</p>
                <p>2021-2022</p>
            </div>
            <svg class="w-20 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 95.05 106.38"><defs><style>.uuid-a3703663-07da-41b0-a5ea-9af3fe8c2e35{fill:#f5f5f4;}</style></defs><path class="uuid-a3703663-07da-41b0-a5ea-9af3fe8c2e35" d="M47.62,62.82c13.96,0,25.29-11.6,25.29-25.9s-11.33-25.9-25.29-25.9-25.29,11.6-25.29,25.9,11.33,25.9,25.29,25.9Z"/><path class="uuid-a3703663-07da-41b0-a5ea-9af3fe8c2e35" d="M85.05,0H10C4.5,0,0,4.5,0,10V96.38c0,5.5,4.5,10,10,10H85.05c5.5,0,10-4.5,10-10V10c0-5.5-4.5-10-10-10ZM10,3H85.05c3.86,0,7,3.14,7,7V86.68c-2.2-10.35-11.19-18.1-21.96-18.1h-9.67c-8.08,3.84-17.52,3.84-25.6,0h-9.67c-11.11,0-20.32,8.24-22.15,19.07V10c0-3.86,3.14-7,7-7Z"/></svg>
        </div>
    </div>
</div>

<div class="bg-fGreyApp mt-3 p-6 flex flex-grow flex-col rounded-tr-[3em]">
    <div class="flex flex-row justify-center mb-4">
        <button class="btn-active uppercase text-sm text-fBlack font-medium bg-white py-2 px-14 rounded-l-lg choice transition-btn" data-for-tab="Profile">Profiel</button>
        <button class="uppercase text-sm text-fBlack font-medium bg-white py-2 px-9 rounded-r-lg choice transition-btn" data-for-tab="Settings">Instellingen</button>
    </div>   
    <div class="hidden tab tab-active" data-tab="Profile">
        <div class="bg-white p-3 flex flex-row items-center justify-between rounded-2xl border-2 border-b-fGreen">
            <div>
                <h2 class="font-base text-fBlack text-base">Abonnement Spotify</h2>
                <p class="font-base text-fBlack text-xs">Tot 10-12-2022</p>
            </div>
            <button class="uppercase font-normal tracking-widest text-sm text-fWhite bg-fRed h-8 px-6 rounded-full">Stop</button>
        </div>
        <div class="bg-white p-3 flex flex-row items-center justify-between rounded-2xl border-2 border-b-fRed">
            <div>
                <h2 class="font-base text-fBlack text-base">Abonnement Kinepolis</h2>
                <p class="font-base text-fBlack text-xs">Verlopen</p>
            </div>
            <button class="uppercase font-normal tracking-widest text-sm text-fWhite bg-fGreen h-8 px-3 rounded-full">Vernieuw</button>
        </div>
    </div>
    <div class="hidden tab px-3" data-tab="Settings">
        <div class="flex flex-row items-center justify-between mb-2">
            <h3 class="text-base text-fBlack font-normal">Notificaties</h3>
            <svg class="w-14 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43 23"><defs><style>.uuid-90674127-0958-4e76-b2c7-1c4f52c08ce2{fill:#f5f5f4;}.uuid-8cf2d64e-2461-4a1f-a1d1-6e33e0426d71{fill:#2dc692;}</style></defs><path id="uuid-56bedc15-8202-4d0f-84ba-81cf3334400f" class="uuid-8cf2d64e-2461-4a1f-a1d1-6e33e0426d71" d="M10.5,1H31.5c5.8,0,10.5,4.7,10.5,10.5h0c0,5.8-4.7,10.5-10.5,10.5H10.5C4.7,22,0,17.3,0,11.5H0C0,5.7,4.7,1,10.5,1Z"/><g transform="matrix(1, 0, 0, 1, 0, 0)"><path id="uuid-bc7b99d0-b025-4674-ab16-578eb6c9a90e" class="uuid-90674127-0958-4e76-b2c7-1c4f52c08ce2" d="M30.5,0h1c6.35,0,11.5,5.15,11.5,11.5h0c0,6.35-5.15,11.5-11.5,11.5h-1c-6.35,0-11.5-5.15-11.5-11.5h0C19,5.15,24.15,0,30.5,0Z"/></g></svg>
        </div>
        <div class="flex flex-row justify-between mb-2">
            <h3 class="text-base text-fBlack font-normal">Automatisch updaten</h3>
            <svg class="w-14 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43 23"><defs><style>.uuid-90674127-0958-4e76-b2c7-1c4f52c08ce2{fill:#f5f5f4;}.uuid-8cf2d64e-2461-4a1f-a1d1-6e33e0426d71{fill:#2dc692;}</style></defs><path id="uuid-56bedc15-8202-4d0f-84ba-81cf3334400f" class="uuid-8cf2d64e-2461-4a1f-a1d1-6e33e0426d71" d="M10.5,1H31.5c5.8,0,10.5,4.7,10.5,10.5h0c0,5.8-4.7,10.5-10.5,10.5H10.5C4.7,22,0,17.3,0,11.5H0C0,5.7,4.7,1,10.5,1Z"/><g transform="matrix(1, 0, 0, 1, 0, 0)"><path id="uuid-bc7b99d0-b025-4674-ab16-578eb6c9a90e" class="uuid-90674127-0958-4e76-b2c7-1c4f52c08ce2" d="M30.5,0h1c6.35,0,11.5,5.15,11.5,11.5h0c0,6.35-5.15,11.5-11.5,11.5h-1c-6.35,0-11.5-5.15-11.5-11.5h0C19,5.15,24.15,0,30.5,0Z"/></g></svg>
        </div>
        <div class="flex flex-row justify-between mb-2">
            <h3 class="text-base text-fBlack font-normal">Donkere modus</h3>
            <svg class="w-14 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43 23"><defs><style>.uuid-90674127-0958-4e76-b2c7-1c4f52c08ce2{fill:#f5f5f4;}.uuid-8cf2d64e-2461-4a1f-a1d1-6e33e0426d71{fill:#2dc692;}</style></defs><path id="uuid-56bedc15-8202-4d0f-84ba-81cf3334400f" class="uuid-8cf2d64e-2461-4a1f-a1d1-6e33e0426d71" d="M10.5,1H31.5c5.8,0,10.5,4.7,10.5,10.5h0c0,5.8-4.7,10.5-10.5,10.5H10.5C4.7,22,0,17.3,0,11.5H0C0,5.7,4.7,1,10.5,1Z"/><g transform="matrix(1, 0, 0, 1, 0, 0)"><path id="uuid-bc7b99d0-b025-4674-ab16-578eb6c9a90e" class="uuid-90674127-0958-4e76-b2c7-1c4f52c08ce2" d="M30.5,0h1c6.35,0,11.5,5.15,11.5,11.5h0c0,6.35-5.15,11.5-11.5,11.5h-1c-6.35,0-11.5-5.15-11.5-11.5h0C19,5.15,24.15,0,30.5,0Z"/></g></svg>
        </div>
        <div class="flex flex-row justify-between">
            <h3 class="text-base text-fBlack font-normal">Taal</h3>
            <p class="text-base text-fBlack font-normal">Nederlands</p>
        </div>
    </div>
    <a class="uppercase w-full text-center text-base text-white tracking-widest font-medium bg-fGreen rounded-full py-2 mt-8" href="#">Uitloggen</a>     
</div>
@endsection

@section('footer-scripts')
    <script src="{{ asset('/js/components/profile.js') }}"></script>
@endsection