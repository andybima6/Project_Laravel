
@extends('layouts.mainAbout')

@section('container')
<article>
<h2>{{ $anjay ["title"] }}</h2>
<h5>{{ $anjay["author"] }}</h5>
<p>{{ $anjay ["body"]}}</p>
</article>

<a href = "/about">Back To Blog</a>
@endsection 