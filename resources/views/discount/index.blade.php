@extends('layouts/app')

@section('content')
    <h1 class="text-orange-200">Discount page</h1>

    @foreach($discount as $d)
    <h1>{{$d->title}}</h1>
    <img src="{{$d->logo}}" alt="image">
    <div>{{$d->description}}</div>
    @endforeach
@endsection

