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

                            <h1>edit Post</h1>

                            <form action="{{ route('posts.update', $post) }}" class="form" method="post">
                                {{ csrf_field() }}
                                @method('PATCH')
                                <div class="form-group">
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$post->title}}">
                                </div>
                                <div class="form-group">
                                    @error('category')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label>Category</label>
                                    <input type="text" class="form-control" name="category" value="{{$post->category}}">
                                </div>
                                <div class="form-group">
                                    @error('body')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label>body</label>
                                    <input type="text" class="form-control" name="body" value="{{$post->body}}">
                                </div>
                                <div class="form-group">

                                    <button type="submit" class="button is-link is-outlined">Update</button>
                                </div>

                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
