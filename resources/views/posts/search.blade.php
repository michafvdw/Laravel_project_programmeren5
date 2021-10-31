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

                            <form action="/search" method="POST" role="search">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input type="text" class="form-control" name="q"
                                           placeholder="Search posts"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
                                </div>
                            </form>


                            <div class="container">
                                @if(isset($details))
                                    <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                                    <h2>Sample Post details</h2>
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Body</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($details as $post)
                                            <tr>
                                                <td>{{$post->title}}</td>
                                                <td>{{$post->body}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




