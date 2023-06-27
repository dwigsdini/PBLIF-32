<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Change Password</span></div>
        @if (session('success'))
            <p style="text-align:center; color:green; padding-top:3px">Password Changed!</p>
        @endif
        @if ($errors->any())
           @foreach ($errors->all() as $err)
               <p style="text-align: center; color:red;">{{ $err }}</p>
           @endforeach
        @endif
        <form action="{{ route('password.action') }}" method="post">
          @csrf

          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Old Password" name="old_password">
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="New Password" name="new_password">
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="New Password Confirm" name="new_password_confirmation">
          </div>
          <div class="row button">
            <input type="submit" value="Change">
          </div>


          <a href="/dashboard-admin" style="text-align: center; text-decoration:none;">Kembali</a>
          
                        
        </form>
      </div>
    </div>

  </body>
</html>
