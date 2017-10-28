@extends('layouts.main')

@section('title', 'Post dal blog')

@section('content')

    @foreach($posts as $post) 
        <div class="col-md-8 col-md-offset-2">
            <h3>
                <a href="{!! route('posts.show', ['id' => $post->id]) !!}">{{ $post->title }}</a>
            </h3>
            <p>{{ substr($post->body, 0, env('SUMMARY', 150)) }}</h3>
            <p class="text-right">{{ $post->author->fullname }}</p>
        </div>
    @endforeach

@endsection