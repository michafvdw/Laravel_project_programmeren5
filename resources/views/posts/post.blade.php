@extends('layouts.app')

@section('content')

    <div>
            <a
                href="{{ route('posts.edit',$post, [$post->slug])}}"
                class="button is-info is-outlined"
            >
                Edit
            </a>

        <a
            href="{{ route('posts.destroy',$post, [$post->slug])}}"
            class="button is-info is-outlined"
        >
            Delete
        </a>


            <h1> {{ $post->title }} </h1>
            <p> {{ $post->body }} </p>

    </div>

@endsection
