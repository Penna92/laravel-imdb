@extends('parts.body')
@section('MainContent')

<main>
    @foreach($movies as $movie)
    <div>
        <p>{{$movie['name']}}</p>
        <img src="{{$movie['img']}}" alt="">
    </div>
    @endforeach
</main>