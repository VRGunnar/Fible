@extends('layouts/app')

@section('content')
        <svg class="ml-6 mt-3" xmlns="http://www.w3.org/2000/svg" width="12.838" height="12.512" viewBox="0 0 12.838 12.512">
        <path id="Icon_awesome-arrow-left" data-name="Icon awesome-arrow-left" d="M7.376,14.322l-.636.636a.685.685,0,0,1-.971,0L.2,9.391a.685.685,0,0,1,0-.971l5.57-5.57a.685.685,0,0,1,.971,0l.636.636a.688.688,0,0,1-.011.983L3.912,7.757h8.235a.686.686,0,0,1,.688.688v.917a.686.686,0,0,1-.688.688H3.912l3.453,3.289A.683.683,0,0,1,7.376,14.322Z" transform="translate(0.004 -2.647)" fill="#707070"/>
        </svg>

        <img class="w-5/5 h-64 object-cover mt-3 mb-24" src="{{$discount->logo}}" alt="image">
        <div class="bg-stone-200 rounded-tr-[60px] relative h-11/12">
            <div class="w-9/12 m-auto">
                <svg class="absolute right-16 top-8 w-5 h-5 ml-4 inline stroke-2 stroke-fGrey" id="heart_icon" data-name="discount_favourite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 471.7 420.29"><defs><style>.cls-1{fill:#ffffff;}</style></defs><path class="fill-fRed" d="M433.6,38.5a130.61,130.61,0,0,0-184.7.1L236,51.5,222.9,38.4a130.49,130.49,0,0,0-184.7-.2,130.49,130.49,0,0,0,.2,184.7L226.2,410.7l.19.17,9.46,9.42,13.08-13.2L433.4,223.3a129.82,129.82,0,0,0,38.3-92.38v0A129.21,129.21,0,0,0,433.6,38.5Z"/></svg>
                <svg class="absolute right-8 top-8 w-5 h-5 ml-4 inline" xmlns="http://www.w3.org/2000/svg" width="17.308" height="19.065" viewBox="0 0 17.308 19.065"><path id="share_icon" data-name="sharing_icon" d="M-3573.652-4316a2.622,2.622,0,0,1,.36-1.331l-5.988-3.49a2.634,2.634,0,0,1-2.276,1.308,2.635,2.635,0,0,1-2.635-2.635,2.635,2.635,0,0,1,2.635-2.636,2.633,2.633,0,0,1,2.277,1.309l5.986-3.493a2.622,2.622,0,0,1-.359-1.329,2.635,2.635,0,0,1,2.635-2.634,2.635,2.635,0,0,1,2.635,2.634,2.634,2.634,0,0,1-2.635,2.635,2.635,2.635,0,0,1-2.276-1.306l-5.986,3.493a2.624,2.624,0,0,1,.358,1.327,2.623,2.623,0,0,1-.358,1.327l5.988,3.49a2.633,2.633,0,0,1,2.274-1.3,2.635,2.635,0,0,1,2.635,2.635,2.634,2.634,0,0,1-2.635,2.635A2.634,2.634,0,0,1-3573.652-4316Z" transform="translate(3584.94 4331.685)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                <h1 class="text-2xl text-fBlack mt-6 mb-8 w-10/12">{{ $discount->title }}</h1>
                <p class="text-sm mb-64">{{ $discount->description }}</p>
                <a class="" href=""><button class="text-base w-11/12 text-white uppercase bg-fGreen border-none text-xs tracking-wide py-2 px-3 rounded-3xl mb-12 ml-3">gebruiken</button></a>
            </div>
        </div>
    </div>
@endsection
