<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <style>
        .pointer {
            cursor:pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Laravel Change Status Using Toggle Button </h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <form action="{{ route('users.change_status', $user) }}" class="form" method="post">
                                {{ csrf_field() }}
                                @method('PATCH')
                                <label>body</label>
                                <input type="checkbox" class="form-control" name="status" value="1" @if($user->status) checked @endif >
                                <div class="form-group">
                                    <button type="submit" class="button is-link is-outlined" value="{{$user->status}}" >Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>

</html>
