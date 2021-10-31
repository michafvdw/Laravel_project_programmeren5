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

                            <h1>Create Post</h1>
                            <form action="{{ route('posts.store') }}" class="form" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" class="form-control" name="category">
                                </div>
                                <div class="form-group">
                                    <label>body</label>
                                    <textarea class="form-control" name="body" cols="3" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">Save</button>
                                </div>

                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
