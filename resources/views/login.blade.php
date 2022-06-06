@extends('layouts/login')

@section('content')
<div class="mx-8 my-auto p-8 bg-white flex flex-col items-center rounded-tr-[5rem] rounded-bl-[5rem]">
<img class="w-40 h-auto mb-5 mt-0" src="/images/logo_fible.svg" alt="">
    <form method="post" action="{{ url('/login') }}">
        @csrf
        <div class="text-fBlack mb-4">
            <label class="text-base text-fBlack" for="email">Email address</label>
            <input class="w-full text-sm text-fGrey bg-fWhite px-2 py-1 rounded-xl" type="email" name="email" id="email" placeholder="r1234567@student.thomasmore.be">
        </div>
        <div class="text-fBlack mb-4">
            <label class="text-base text-fBlack" for="password">Password</label>
            <input class="w-full text-sm text-fGrey bg-fWhite px-2 py-1 rounded-xl" type="password" name="password" id="password" placeholder="Password">
        </div>
        <button class="w-full py-2 my-4 bg-fGreen rounded-full text-white uppercase font-medium tracking-widest" type="submit">Log in</button>
    </form>
</div>
@endsection