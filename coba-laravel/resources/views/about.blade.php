@extends('Layouts/mainAbout')

@section ('container')

@foreach ($about as $abouts)
    <article>
        <h2>
        <a href ="/about/{{$abouts["slugg"] }}">{{ $abouts["title"] }}</a>
    </h2>
        <h5>By : {{ $abouts["author"] }}</h5>
        <p>{{ $abouts ["body"]}}</p>
    </article>
@endforeach

@endsection