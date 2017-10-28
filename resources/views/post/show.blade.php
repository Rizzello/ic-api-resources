@extends('layouts.main')

@section('title', $post->title)

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <h2>{{ $post->title }}</h2>
        <h3>{{ $post->subtitle }}</h3>
        <p>{{ $post->body }}</p>
        <p class="text-right">{{ $post->author->fullname }}</p>
    </div>
@endsection