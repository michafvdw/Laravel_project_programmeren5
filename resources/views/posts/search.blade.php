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
