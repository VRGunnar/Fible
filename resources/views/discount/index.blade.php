@extends('layouts/app')

@section('content')
<div class="pb-20 bg-fWhite">
    <div class="w-4/5 m-auto mb-4 mt-10">
            <svg class="w-6 h-6 inline ml-2" id="filter_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.68 16.45"><defs><style>.cls-1{fill:#c72e2e;}</style></defs><path id="Icon_material-filter-list" class="fill-fGrey" d="M9.6,16.45h5.49v-2.74h-5.49v2.74ZM0,0V2.74H24.68V0H0ZM4.11,9.6H20.57v-2.74H4.11v2.74Z"/></svg>
            <!--<p class="inline mr-0 w-1/12 text-fGrey uppercase text-xs relative bottom-0">filter</p>-->

        <input class="inline text-xs p-2 float-right w-10/12 mx-2 rounded-3xl pl-4 ml-0 drop-shadow-[0_3px_6px_rgba(0,0,0,0.16)]" type="text" placeholder="Search for discounts" >
        <svg class="w-5 h-5 absolute right-16 top-10 stroke-0 mt-1.5" xmlns="http://www.w3.org/2000/svg" width="20.591" height="20.496" viewBox="0 0 20.591 20.496">
            <path id="magnifying_glass_icon" data-name="magnifying_glass_icon" d="M18.734,16.423l-3.7-3.7a.89.89,0,0,0-.631-.26h-.6A7.713,7.713,0,1,0,12.465,13.8v.6a.89.89,0,0,0,.26.631l3.7,3.7a.887.887,0,0,0,1.258,0l1.05-1.05a.9.9,0,0,0,0-1.261ZM7.716,12.465a4.748,4.748,0,1,1,4.748-4.748A4.746,4.746,0,0,1,7.716,12.465Z" transform="translate(0.75 0.75)" fill="#707070" stroke="#fff" stroke-width="1.5"/>
        </svg>
        <!-- <svg class="w-5 h-5 absolute right-16 top-28 stroke-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.98 18.99"><defs><style>.cls-1{fill:#707070;}</style></defs><path class="fill-fGrey" id="Icon_awesome-search" class="cls-1" d="M18.72,16.42l-3.7-3.7c-.17-.17-.39-.26-.63-.26h-.6c2.62-3.36,2.02-8.2-1.33-10.83C9.1-.99,4.25-.39,1.63,2.97-.99,6.32-.39,11.17,2.97,13.79c2.79,2.18,6.7,2.18,9.49,0v.6c0,.24,.09,.46,.26,.63l3.7,3.7c.35,.35,.91,.35,1.25,0h0l1.05-1.05c.34-.35,.34-.91,0-1.26h0Zm-11.02-3.96c-2.62,0-4.75-2.13-4.75-4.75,0-2.62,2.13-4.75,4.75-4.75,2.62,0,4.75,2.13,4.75,4.75,0,2.62-2.12,4.75-4.74,4.75h0Z"/></svg>-->  
    </div>

        <div class="text-sm w-4/5 m-auto flex justify-center mb-4 drop-shadow-[0_3px_6px_rgba(0,0,0,0.16)]">
            <button class="btn-active inline bg-white py-2 px-3 rounded-l-2xl pl-4 choice transition-btn" data-for-tab="discounts">Discounts</button>
            <button class="inline bg-white py-2 px-3 choice transition-btn" data-for-tab="subscriptions">Subscriptions</button>
            <button class="inline bg-white py-2 px-3 pr-4 rounded-r-2xl choice transition-btn" data-for-tab="favourites">Favourites</button>
        </div>

    <div class="hidden tab tab-active bg-fWhite" data-tab="discounts">
    @foreach($discount as $d)
    <div class="bg-fWhite">
        <div class="w-80 h-28 bg-white rounded-bl-xl rounded-tr-xl drop-shadow-[0_3px_6px_rgba(0,0,0,0.16)] m-auto my-1 min-h-28">
            <div class="float-left w-3/5">
            <svg class="float-right w-2/6 h-5 relative top-1.5 left-36" id="heart_icon" data-name="Isolation Mode" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 471.7 420.29"><defs><style>.cls-1{fill:#ffffff;}</style></defs><path class="cls-1" d="M433.6,38.5a130.61,130.61,0,0,0-184.7.1L236,51.5,222.9,38.4a130.49,130.49,0,0,0-184.7-.2,130.49,130.49,0,0,0,.2,184.7L226.2,410.7l.19.17,9.46,9.42,13.08-13.2L433.4,223.3a129.82,129.82,0,0,0,38.3-92.38v0A129.21,129.21,0,0,0,433.6,38.5Z"/></svg>
                <h1 class="text-sm w-3/4 m-auto mt-3 h-12">{{$d->title}}</h1>
                <button class="text-white uppercase bg-fGreen border-none text-xs tracking-wide py-2 px-3 rounded-3xl ml-8 w-2/3 mt-2"><a href="/discount/discount/{{ $d->id }}">use discount</a></button>
            </div>
            <div class="float-right w-2/5">
                <img class="w-36 h-28 rounded-tr-xl object-cover" src="{{$d->logo}}" alt="image">
            </div>
        </div>
    </div>
    @endforeach
    </div>

    <div class="hidden tab" data-tab="subscriptions">
        @foreach($subscription as $s)
        <div class="bg-fWhite">
            <div class="w-80 h-28 bg-white rounded-bl-xl rounded-tr-xl drop-shadow-[0_3px_6px_rgba(0,0,0,0.16)] m-auto my-1 min-h-28">
                <div class="float-left w-3/5">
                <svg class="float-right w-2/6 h-5 relative top-1.5 left-36" id="heart_icon" data-name="Isolation Mode" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 471.7 420.29"><defs><style>.cls-1{fill:#ffffff;}</style></defs><path class="cls-1" d="M433.6,38.5a130.61,130.61,0,0,0-184.7.1L236,51.5,222.9,38.4a130.49,130.49,0,0,0-184.7-.2,130.49,130.49,0,0,0,.2,184.7L226.2,410.7l.19.17,9.46,9.42,13.08-13.2L433.4,223.3a129.82,129.82,0,0,0,38.3-92.38v0A129.21,129.21,0,0,0,433.6,38.5Z"/></svg>
                    <h1 class="text-sm w-3/4 m-auto mt-3 h-12">{{$s->title}}</h1>
                    <button class="text-white uppercase bg-fGreen border-none text-xs tracking-wide py-2 px-3 rounded-3xl ml-8 w-2/3 mt-2"><a href="/discount/subscription/{{ $s->id }}">use discount</a></button>

                </div>
                <div class="float-right w-2/5">
                    <img class="w-36 h-28 rounded-tr-xl object-cover" src="{{$s->logo}}" alt="image">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('footer-scripts')
<script src="{{ asset('/js/components/discount.js') }}"></script>
@endsection
