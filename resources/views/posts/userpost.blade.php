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

                            <h2>User: {{ $user->id }} - {{ $user->email }}</h2>
                            <br/>
                            <h2>Posts:</h2>

                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    filter
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="http://127.0.0.1:8000/userpost/1">michellevdwilligen@gmail.com</a>
                                    <a href="http://127.0.0.1:8000/userpost/2">owensemail@gmail.com</a>
                                    <a href="http://127.0.0.1:8000/userpost/3">validatie@gmail.com</a>
                                </div>
                            </div>




                            @foreach($posts AS $post)
                                <p> {{ $post->id }}: {{ $post->body }}</p>
                            @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

