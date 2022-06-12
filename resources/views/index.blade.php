@extends('layouts/app')

@section('content')
<img class="w-60 h-auto my-4 m-auto" src="/images/logo_fible.svg" alt="">

<div class="mb-6 w-11/12 m-auto mt-0 max-w-sm">
    <h1 class="uppercase w-10/12 m-auto">Hot deals</h1>

    @foreach($hot_discount as $d)
        <div class="bg-fWhite relative mb-4 m-auto block">
            <div class="w-80 h-28 bg-white rounded-bl-xl rounded-tr-xl drop-shadow-[0_3px_6px_rgba(0,0,0,0.16)] m-auto my-2 min-h-28">
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

<div class="pb-12 w-11/12 mt-0 m-auto max-w-sm">
    <h1 class="uppercase w-10/12 m-auto">Hot subscriptions</h1>

    @foreach($hot_subscription as $s)
        <div class="bg-fWhite relative mb-4">
            <div class="w-80 h-28 bg-white rounded-bl-xl rounded-tr-xl drop-shadow-[0_3px_6px_rgba(0,0,0,0.16)] m-auto my-2 min-h-28">
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