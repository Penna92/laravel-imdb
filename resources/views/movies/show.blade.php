@extends('parts.body')
@section('MainContent')

<h1>{{$movie->name}}</h1>
<img src="{{$movie->img}}" alt="">

<p>{{$movie->description}}</p>
<p>{{$movie->rating}}</p>
<button><a href="">Vota</a></button>
<button><a href="">Guarda</a></button>