@extends('layouts/app')

@section('content')
<div class="pb-20 bg-fWhite">
    <div class="text-sm w-4/5 m-auto flex justify-center mb-4 drop-shadow-[0_3px_6px_rgba(0,0,0,0.16)] mb-4 mt-10">
        <button class="btn-active inline bg-white py-2 px-2 rounded-l-2xl pl-4 choice transition-btn" data-for-tab="discounts">Kortingen</button>
        <button class="inline bg-white py-2 px-2 choice transition-btn" data-for-tab="subscriptions">Abonnementen</button>
        <button class="inline bg-white py-2 px-2 pr-4 rounded-r-2xl choice transition-btn" data-for-tab="favorites">Favorieten</button>
    </div>

        <div class="hidden tab tab-active bg-fWhite" data-tab="discounts">
        <livewire:discount-search />
        </div>
        
        <div class="hidden tab" data-tab="subscriptions">
        <livewire:subscription-search />
        </div>

        <div class="hidden tab" data-tab="favorites">
        @foreach($favo as $f)
        <div class="bg-fWhite">
        <div class="w-80 h-28 bg-white rounded-bl-xl rounded-tr-xl drop-shadow-[0_3px_6px_rgba(0,0,0,0.16)] m-auto my-1 min-h-28">
            <div class="float-left w-3/5">
                <h1 class="text-sm w-3/4 m-auto mt-3 h-12">{{$f->title}}</h1>
                <button class="text-white uppercase bg-fGreen border-none text-xs tracking-wide py-2 px-3 rounded-3xl ml-8 w-2/3 mt-2"><a href="/discounts/discount/{{ $f->id }}">gebruik</a></button>
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
