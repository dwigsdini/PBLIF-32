<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        
        <div class="title"><span>Register</span></div>
       {{-- @if ($errors->any())
           @foreach ($errors->all() as $err)
               <p style="text-align: center; color:red;">{{ $err }}</p>
           @endforeach
       @endif --}}
        <form action="/register" method="post">
            @csrf
          <div class="row">
            <i class="fas fa-user"></i>
            <input  type="text" placeholder="name" name="name" value="{{ old('name') }}" required>
            </div>
            @error('name')
            <div class="feedback-error " style="color:red; padding-bottom:30px">
             {{ $message }}
            </div>
            @enderror
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="username" name="username" value="{{ old('username') }}" required>
          </div>

          @error('username')
          <div class="feedback-error " style="color:red; padding-bottom:30px">
             {{ $message }}
            </div>
          @enderror

          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required>
          </div>

          @error('password')
          <div class="feedback-error " style="color:red; padding-bottom:30px">
             {{ $message }}
            </div>
          @enderror

          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" name="password_confirm" required>
          </div>

          @error('password_confirm')
          <div class="feedback-error " style="color:red; padding-bottom:30px">
             {{ $message }}
            </div>
          @enderror

          <div class="row button">
            <input type="submit" value="Register">
          </div>
        </form>
      </div>
    </div>

  </body>
</html>
