<h1><b>Your Profile</b></h1>
<form action="{{ route('users.update', $user) }}" class="form" method="post">

    <div class="form-group hidden">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PATCH">
    </div>
    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="email" class="control-label"><b>Name:</b></label>
        <input type="text" name="name" placeholder="Please enter your email here" class="form-control" value="{{ $user->name }}"/>


        <span class="help-block">
            <strong>{{$errors->first('name')}}</strong>
        </span>


    </div>
    <div class="form-group ">
        <label for="email" class="control-label"><b>Email:</b></label>
        <input type="text" name="email" placeholder="Please enter your email here" class="form-control" value="{{ $user->email }}"/>


        <span class="help-block">
            <strong>{{$errors->first('email')}}</strong>
        </span>


    </div>

    <div class="form-group {{ $errors->has('about') ? ' has-error' : '' }}">
        <label for="about" class="control-label"><b>about:</b></label>
        <input type="text" name="about" placeholder="Please enter your email here" class="form-control" value="{{ $user->about }}"/>


        <span class="help-block">
            <strong>{{$errors->first('about')}}</strong>
        </span>


    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default"> Submit </button>
    </div>
</form>
