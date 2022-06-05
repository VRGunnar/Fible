@extends('layouts/app')

@section('content')
<div class="pb-20 bg-fWhite">
    <div class="text-sm w-4/5 m-auto flex justify-center mb-4 drop-shadow-[0_3px_6px_rgba(0,0,0,0.16)] mb-4 mt-10">
        <button class="btn-active inline bg-white py-2 px-2 rounded-l-2xl pl-4 choice transition-btn" data-for-tab="discounts">Kortingen</button>
        <button class="inline bg-white py-2 px-2 choice transition-btn" data-for-tab="subscriptions">Abonnementen</button>
        <button class="inline bg-white py-2 px-2 pr-4 rounded-r-2xl choice transition-btn" data-for-tab="favourites">Favorieten</button>
    </div>

    <div class="hidden tab tab-active bg-fWhite" data-tab="discounts">
        <livewire:discount-search />
    </div>

    <div class="hidden tab" data-tab="subscriptions">
        <livewire:subscription-search />
    </div>

    <div class="hidden tab" data-tab="favourites">
        @foreach($favorites as $f)
        <div class="bg-fWhite relative">
            <div class="w-80 h-28 bg-white rounded-bl-xl rounded-tr-xl drop-shadow-[0_3px_6px_rgba(0,0,0,0.16)] m-auto my-4 min-h-28">
            <svg class="absolute top-2 right-2 w-5 h-5 {{ $f->fill }}" id="heart_icon" data-name="discount_favourite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 471.7 420.29"><defs><style>.cls-1{fill:#ffffff;}</style></defs><path d="M433.6,38.5a130.61,130.61,0,0,0-184.7.1L236,51.5,222.9,38.4a130.49,130.49,0,0,0-184.7-.2,130.49,130.49,0,0,0,.2,184.7L226.2,410.7l.19.17,9.46,9.42,13.08-13.2L433.4,223.3a129.82,129.82,0,0,0,38.3-92.38v0A129.21,129.21,0,0,0,433.6,38.5Z"/></svg>  
            <div class="float-left w-3/5">
                    <h1 class="text-sm w-3/4 m-auto mt-3 h-12">{{$f->title}}</h1>
                    <button class="text-white uppercase bg-fGreen border-none text-xs tracking-wide py-2 px-3 rounded-3xl ml-8 w-2/3 mt-2"><a href="/discounts/{{ $f->type }}/{{ $f->id }}">gebruik</a></button>
                </div>
                <div class="float-right w-2/5">
                    <img class="w-36 h-28 rounded-tr-xl object-cover" src="{{$f->logo}}" alt="image">
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