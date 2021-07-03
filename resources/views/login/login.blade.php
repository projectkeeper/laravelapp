<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/laravelapp/public/css/login.css">
<title> ログイン  </title>
</head>

<body>

  @if(count($errors) > 0)
  <div>
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
  </div>
  @endif

@if(isset($error_msg))
<div>
    <ul>
        <li>{{$error_msg}}</li>
    </ul>
</div>
@endif
<div class="form-wrapper">
  <h1>Sign In</h1>
    <form method="POST" action='/exe_login'>
@csrf
    <div class="form-item">
      <label for="email"></label>
      <input type="text" name="login_id" required="required" placeholder="ログインID"></input>
    </div>
    <div class="form-item">
      <label for="password"></label>
      <input type="password" name="login_pass" required="required" placeholder="パスワード"></input>
    </div>
<br/>
<input type="submit" class="button" title="Sign In" value="Sign In"></input>
</form>

  <div class="form-footer">
      <p><a href="#">Create an account</a></p>
      <p><a href="#">Forgot password?</a></p>
  </div>
</div>
</body>
</html>
