
<h2>User: {{ $user->id }} - {{ $user->email }}</h2>
<br/>
<h2>Posts:</h2>

<div class="dropdown">
    <button class="dropbtn">Dropdown</button>

    <div class="dropdown-content">
        <a href="http://127.0.0.1:8000/userpost/2">michellevdwilligen@gmail.com</a>
        <a href="http://127.0.0.1:8000/userpost/1">owensemail@gmail.com</a>

    </div>
</div>

@foreach($posts AS $post)
    <p> {{ $post->id }}: {{ $post->body }}</p>
@endforeach
