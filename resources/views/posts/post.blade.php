@extends('layouts.app')

@section('content')

    <div>
            <a
                href="{{ route('posts.edit', [$post->slug])}}"
                class="button is-info is-outlined"
            >
                Edit
            </a>
            <h1> {{ $post->title }} </h1>
            <p> {{ $post->body }} </p>

    </div>

@endsection
