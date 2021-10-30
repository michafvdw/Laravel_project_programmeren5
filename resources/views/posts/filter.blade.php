<div class =container">
    <select name="" id="" onchange="location = this.value;">
        @foreach ($users as $user)
            <option value="/user/{{$user->id}}"> {{$user->email}}</option>
        @endforeach
    </select>
</div>
