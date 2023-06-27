<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login</span></div>
        @if (session('success'))
            <p style="text-align:center; color:green;">{{ session('success') }}</p>
        @endif
        @if ($errors->any())
           @foreach ($errors->all() as $err)
               <p style="text-align: center; color:red;margin-top:20px;">{{ $err }}</p>
           @endforeach
        @endif
        <form action="/login" method="post">
          @csrf
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" autofocus required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required>
          </div>
          <div class="row button">
            <input type="submit" value="Login" name="login">
            <center>
              <h5 class="text-decoration-none">belum punya akun ?
                <a href="/register" value="register" name="register">Register.</a></h5>
            </center>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>