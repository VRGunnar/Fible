@extends('layouts/app')

@section('content')

    <h1>Discount page</h1>
    <div class="bg-stone-100">
    @foreach($discount as $d)
        <div class="w-80 h-28 bg-white rounded-bl-xl rounded-tr-xl drop-shadow-[0_3px_6px_rgba(0,0,0,0.16)] m-auto my-4 min-h-28">
            <div class="float-left w-3/5">
            <svg class="float-right w-2/6 h-5 relative top-1.5 left-36" id="Isolation_Mode" data-name="Isolation Mode" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 471.7 420.29"><defs><style>.cls-1{fill:#ffffff;}</style></defs><path class="cls-1" d="M433.6,38.5a130.61,130.61,0,0,0-184.7.1L236,51.5,222.9,38.4a130.49,130.49,0,0,0-184.7-.2,130.49,130.49,0,0,0,.2,184.7L226.2,410.7l.19.17,9.46,9.42,13.08-13.2L433.4,223.3a129.82,129.82,0,0,0,38.3-92.38v0A129.21,129.21,0,0,0,433.6,38.5Z"/></svg>
                <h1 class="text-sm w-2/3 m-auto mt-3 h-12">{{$d->title}}</h1>
                <a href="#"><button class="text-white uppercase bg-fGreen border-none text-xs tracking-wide py-2 px-3 rounded-3xl ml-8 w-2/3 mt-2">use discount</button></a>
            </div>
            <div class="float-right w-2/5">
                <img class="w-36 h-28 rounded-tr-xl object-cover" src="{{$d->logo}}" alt="image">
            </div>
        </div>
    @endforeach
    </div>
@endsection

