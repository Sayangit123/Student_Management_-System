<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
   
          
        <div class="login-container">
            <h2>Login</h2>
            <form method="POST" action="{{url('/login2')}}">
                @csrf
              <div class="form-group">
                <label for="username">Username or Email</label>
                <input type="text" id="username" name="u1" placeholder="Enter your username">
              </div>
              @if ($errors->has('u1'))
                  <div class="alert alert-danger">
                      {{ $errors->first('u1') }}
                  </div>
              @endif
        
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="pass1" placeholder="Enter your password">
              </div>

              @if ($errors->has('pass1'))
                  <div class="alert alert-danger">
                      {{ $errors->first('pass1') }}
                  </div>
              @endif
        
              <button type="submit" class="login-button">Login</button>
        
              <div class="signup-link">
                <p>Don't have an account? <a href="{{url('/signup')}}">Register</a></p>

                @if(session()->has('message'))
                @if(session()->get('message')=='login_error')
                <div style="color: red" >Wrong Cridentials !!</div>
                @elseif(session()->get('message')=='logout_done')
                <div style="color: red">You have successfully Logged Out !!</div>
                
                @endif 
             @endif 
              </div>
             
            </form>
          </div>
</body>
</html>
