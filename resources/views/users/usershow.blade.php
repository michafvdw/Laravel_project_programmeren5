<h1>{{$name}}</h1>

<div class =container">
    <select name="" id="" onchange="location = this.value;">
        @foreach ($users as $user)
            <option value="/user/{{$user->id}}"> <a href="{{route('users.view_post', $post)}}">{{$user->email}}</a> {{$user->email}}</option>
        @endforeach
    </select>
</div>

