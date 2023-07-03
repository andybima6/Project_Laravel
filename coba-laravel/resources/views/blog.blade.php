@extends('Layouts/mainBlog')

@section ('containeryy')
    
@foreach ($blog as $blogs)
    <article>
        <h2>
            <a href ="/blog/{{$blogs["slug"] }}">{{ $blogs["title"] }}</a>
        </h2>
        <h5>{{ $blogs["author"] }}</h5>
        <p>{{ $blogs ["body"]}}</p>
    </article>
@endforeach
@endsection
