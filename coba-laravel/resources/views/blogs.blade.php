
@extends('layouts.mainBlog')

@section('containeryy')

<article>
<h2>{{ $post ["title"] }}</h2>
<h5>{{ $post["author"] }}</h5>
<p>{{$post ["body"]}}</p>
</article>

<a href = "/blog">Back To Blog</a>
@endsection