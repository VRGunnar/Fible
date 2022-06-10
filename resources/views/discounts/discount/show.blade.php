@extends('layouts/app')

@section('content')
<div class="bg-white">
        <svg class="ml-6 mt-3 sm:hidden" xmlns="http://www.w3.org/2000/svg" width="12.838" height="12.512" viewBox="0 0 12.838 12.512" onClick="history.go(-1)">
        <path id="Icon_awesome-arrow-left" data-name="Icon awesome-arrow-left" d="M7.376,14.322l-.636.636a.685.685,0,0,1-.971,0L.2,9.391a.685.685,0,0,1,0-.971l5.57-5.57a.685.685,0,0,1,.971,0l.636.636a.688.688,0,0,1-.011.983L3.912,7.757h8.235a.686.686,0,0,1,.688.688v.917a.686.686,0,0,1-.688.688H3.912l3.453,3.289A.683.683,0,0,1,7.376,14.322Z" transform="translate(0.004 -2.647)" fill="#707070"/>
        </svg>
            <div class="w-12/12 bg-navBlack sm:w-11/12 m-auto">
                <img class="m-auto w-11/12 h-64 bg-navBlack object-contain mt-3 mb-14 bg-white sm:w-11/12 sm:m-auto sm:mb-20 sm:mt-3 sm:max-w-2xl" src="{{$discount->logo}}" alt="image">
            </div>
            <div class="bg-fWhite rounded-tr-[60px] relative h-11/12 sm:w-11/12 m-auto">
            <div class=" w-9/12 m-auto max-w-xl">
                @livewire('favorite-live', ['type' => 'Discount', 'typeId' => $discount->id, 'fill' => $discount->fill])
                <h1 class="text-2xl text-fBlack pt-10 mb-10 w-10/12">{{ $discount->title }}</h1>
                <p class=" text-sm mb-16">{{ $discount->description }}</p>
                <a class="" href=""><button class="text-base w-11/12 text-white uppercase bg-fGreen border-none text-xs tracking-wide py-2 px-3 rounded-3xl mb-8 max-w-sm block m-auto text-center">gebruiken</button></a>
                <div class="pb-32">
                {!! $shareComponent !!}
                </div>
            </div>
        </div>
    </div>
@endsection