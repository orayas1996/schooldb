@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title">Post</h1>
  <p class="lead blog-description">All posts should belong here.</p>
  @foreach ($posts as $post)
    <a href="/posts/{{ $post->id }}"><p>This is post id: {{ $post->id }}, {{ $post->title }}</p></a>
  @endforeach
</div>
@endsection