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
                            <h2>Click on email to inspect</h2>

                            @foreach($users as $user)
                                <h2><a href="{{route('users.edit',$user)}}">{{$user->email}}</a></h2>
                            @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




