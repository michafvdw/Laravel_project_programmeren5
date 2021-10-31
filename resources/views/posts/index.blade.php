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

                            <h1>{{$name}}</h1>
                            <div class="btn-block">
                                <a href="/search">search for posts</a>
                            </div>


                            @foreach($posts as $post)
                                <h2><a href="{{route('posts.show',$post)}}">{{$post->title}}</a></h2>
                                <p>{{$post->body}}</p>
                                <p class="text-xs">Posted
                                    <time>{{$post->created_at}}</time>
                                </p>
                                <p class="text-xs">Last updated
                                    <time>{{$post->updated_at}}</time>
                                </p>
                            @endforeach



                            <section class="col-span-8  col-start-5 mt-10 space-y-6">
                                <x-post-comment/>
                                <x-post-comment/>
                            </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
