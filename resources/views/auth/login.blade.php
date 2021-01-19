<!DOCTYPE html>
<html>
<head>
    <title>goRamp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h3 class="login-heading mb-4">Go ramp task</h3>
    <form action="{{ route('auth.postLogin') }}" method="POST" id="logForm">
        {{ csrf_field() }}
        <div class="form-label-group">
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >
            <label for="inputEmail">Email address</label>
            @if ($errors->has('email'))
                <span style="color: red;">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-label-group">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
            <label for="inputPassword">Password</label>
            @if ($errors->has('password'))
                <span style="color: red;">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign In</button>
    </form>
</body>
</html>
