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

</div>
@endsection

@section('footer-scripts')
<script src="{{ asset('/js/components/discount.js') }}"></script>
@endsection
