@extends('Layouts/mainHome')

@section ('containerss')
    
@foreach ($home as $homes)
    <article>
        <h2>
            <a href ="/home/{{$homes["slug"] }}">{{ $homes["title"] }}</a>
        </h2>
        <h5>{{ $homes["author"] }}</h5>
        <p>{{ $homes ["body"]}}</p>
    </article>
@endforeach
@endsection
