

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
