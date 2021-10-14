<?php
?>
<html>
<head>
    <title>
        Edit Post
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <h1>edit Post</h1>

        <form action="{{ route('post.update', $post) }}" class="form" method="post">
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
</body>
</html>

