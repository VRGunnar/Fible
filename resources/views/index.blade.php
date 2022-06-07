@extends('layouts/app')

@section('content')
<img class="w-60 h-auto my-8 m-auto" src="/images/logo_fible.svg" alt="">

<div class="mb-6 w-11/12 m-auto mt-0 max-w-sm">
    <h1 class="uppercase w-10/12 m-auto">Hot deals</h1>

    @foreach($hot_discount as $d)
        <div class="bg-fWhite relative mb-4">
            <div class="w-80 h-28 bg-white rounded-bl-xl rounded-tr-xl drop-shadow-[0_3px_6px_rgba(0,0,0,0.16)] m-auto my-2 min-h-28">
            <svg class="absolute top-2 right-2 w-5 h-5 {{ $d->fill }}" id="heart_icon" data-name="discount_favourite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 471.7 420.29"><defs><style>.cls-1{fill:#ffffff;}</style></defs><path d="M433.6,38.5a130.61,130.61,0,0,0-184.7.1L236,51.5,222.9,38.4a130.49,130.49,0,0,0-184.7-.2,130.49,130.49,0,0,0,.2,184.7L226.2,410.7l.19.17,9.46,9.42,13.08-13.2L433.4,223.3a129.82,129.82,0,0,0,38.3-92.38v0A129.21,129.21,0,0,0,433.6,38.5Z"/></svg>  
            <div class="float-left w-3/5">
                    <h1 class="text-sm w-3/4 m-auto mt-3 h-12">{{$d->title}}</h1>
                    <button class="text-white uppercase bg-fGreen border-none text-xs tracking-wide py-2 px-3 rounded-3xl ml-8 w-2/3 mt-2"><a href="/discounts/discount/{{ $d->id }}">gebruik</a></button>
                </div>
                <div class="float-right w-2/5">
                    <img class="w-36 h-28 rounded-tr-xl object-cover" src="{{$d->logo}}" alt="image">
                </div>
            </div>
        </div>
        @endforeach

</div>

<div class="mb-6 w-11/12 m-auto mt-0 max-w-sm">
    <h1 class="uppercase w-10/12 m-auto">Hot subscriptions</h1>

    @foreach($hot_subscription as $s)
        <div class="bg-fWhite relative mb-4">
            <div class="w-80 h-28 bg-white rounded-bl-xl rounded-tr-xl drop-shadow-[0_3px_6px_rgba(0,0,0,0.16)] m-auto my-2 min-h-28">
            <svg class="absolute top-2 right-2 w-5 h-5 {{ $d->fill }}" id="heart_icon" data-name="subscription_favorite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 471.7 420.29"><defs><style>.cls-1{fill:#ffffff;}</style></defs><path d="M433.6,38.5a130.61,130.61,0,0,0-184.7.1L236,51.5,222.9,38.4a130.49,130.49,0,0,0-184.7-.2,130.49,130.49,0,0,0,.2,184.7L226.2,410.7l.19.17,9.46,9.42,13.08-13.2L433.4,223.3a129.82,129.82,0,0,0,38.3-92.38v0A129.21,129.21,0,0,0,433.6,38.5Z"/></svg>  
            <div class="float-left w-3/5">
                    <h1 class="text-sm w-3/4 m-auto mt-3 h-12">{{$s->title}}</h1>
                    <button class="text-white uppercase bg-fGreen border-none text-xs tracking-wide py-2 px-3 rounded-3xl ml-8 w-2/3 mt-2"><a href="/discounts/subscription/{{ $s->id }}">gebruik</a></button>
                </div>
                <div class="float-right w-2/5">
                    <img class="w-36 h-28 rounded-tr-xl object-cover" src="{{$s->logo}}" alt="image">
                </div>
            </div>
        </div>
        @endforeach

</div>
@endsection