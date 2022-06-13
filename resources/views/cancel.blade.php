@extends('layouts/login')

@section('content')
<div class="bg-white my-auto mx-6 flex flex-col items-center justify-center rounded-xl">
    <svg class="w-32 h-auto my-4" viewBox="0 0 36.74 36.74"><defs><style>.uuid-5cfdb459-8ae0-4ca1-ae05-63c92bf9817f{fill:#f04f5a;}.uuid-4a9f4e13-9352-4718-873e-dd4c76a9c224{fill:#18272e;}.uuid-3fe1f38a-4172-4eab-a60a-457b545b7d59{fill:#fff;stroke:#18272e;stroke-miterlimit:10;stroke-width:.55px;}</style></defs><g><path class="uuid-5cfdb459-8ae0-4ca1-ae05-63c92bf9817f" d="M18.37,36.24c-1.96,0-3.89-.32-5.75-.95C5.35,32.79,.5,26,.5,18.37S5.34,3.96,12.54,1.48c1.94-.66,3.87-.98,5.83-.98,9.85,0,17.87,8.02,17.87,17.87s-8.02,17.87-17.87,17.87Z"/><path class="uuid-4a9f4e13-9352-4718-873e-dd4c76a9c224" d="M18.37,1c9.59,0,17.37,7.78,17.37,17.37s-7.78,17.37-17.37,17.37c-1.96,0-3.83-.33-5.59-.92l-.06-.02C5.9,32.45,1,25.98,1,18.37S5.89,4.3,12.7,1.95l.08-.03c1.75-.6,3.63-.92,5.59-.92m0-1c-2.01,0-4,.33-5.91,.98l-.08,.03C4.97,3.56,0,10.54,0,18.37s4.98,14.82,12.4,17.37l.06,.02c1.91,.65,3.9,.98,5.91,.98,10.13,0,18.37-8.24,18.37-18.37S28.5,0,18.37,0h0Z"/></g><path class="uuid-3fe1f38a-4172-4eab-a60a-457b545b7d59" d="M21.68,18.37l4.49-4.49c.43-.43,.43-1.12,0-1.55l-1.75-1.75c-.43-.43-1.12-.43-1.55,0l-4.49,4.49-4.49-4.49c-.43-.43-1.12-.43-1.55,0l-1.75,1.75c-.43,.43-.43,1.12,0,1.55l4.49,4.49-4.49,4.49c-.43,.43-.43,1.12,0,1.55l1.75,1.75c.43,.43,1.12,.43,1.55,0l4.49-4.49,4.49,4.49c.43,.43,1.12,.43,1.55,0l1.75-1.75c.43-.43,.43-1.12,0-1.55l-4.49-4.49Z"/></svg>
    <div>
        <h1 class="text-center text-sm text-fBlack font-normal p-4">Beste student, er is iets misgelopen bij het plaatsen van jouw order. <br><br> <strong>Onze excuses voor het ongemak!</strong></h1>
        <a href="{{ route('discounts') }}" class="uppercase w-full text-center text-base text-white tracking-widest font-medium bg-fGreen rounded-full py-2 mt-2 mb-8 max-w-xs block m-auto">Terug naar de app</a>
    </div>
</div>
@endsection