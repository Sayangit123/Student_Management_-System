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
        <h2>Register</h2>
        <form method="POST" action="{{url('/submit')}}">
            @csrf
            
          <div class="form-group">
            <label for="username">Name:</label>
            <input type="text" id="username" name="t1" placeholder="Enter your username">
          </div>
          @if ($errors->has('t1'))
                  <div class="alert alert-danger">
                      {{ $errors->first('t1') }}
                  </div>
              @endif
          <div class="form-group">
            <label for="regt_number">Registration Number:</label>
            <input type="text" id="regt_number" name="t3" placeholder="Enter your register number">
          </div>
          @if ($errors->has('t3'))
                  <div class="alert alert-danger">
                      {{ $errors->first('t3') }}
                  </div>
              @endif
    
          <div class="form-group">
            <label for="email"> Email:</label>
            <input type="text" id="text" name="t2" placeholder="Enter your email">

            @if ($errors->has('t2'))
                  <div class="alert alert-danger">
                      {{ $errors->first('t2') }}
                  </div>
              @endif

            <label for="password"> Password:</label>
            <input type="password" id="password" name="p1" placeholder="Enter your password">
            @if ($errors->has('p1'))
                  <div class="alert alert-danger">
                      {{ $errors->first('p1') }}
                  </div>
              @endif
          </div>

          <div class="form-group">
            <div class="dropdown">

  <div class="dropdown-container">
   
  </div>



</div>
</div>


<button type="submit" class="login-button" onclick="show()">Submit</button>

<div class="signup-link">
  <p>Login your account? <a href="{{url('/login')}}">login</a></p>

  @if(session()->has('message'))
  @if(session()->get('message')=='signup_success')
  <div style="color: green">Signup successfully</div>
  @elseif(session()->get('message')=='signup_error')
  <div style="color: red">Something went wrong please register again</div>
  @endif     
@endif
</div>

</form>
</div>

 {{-- <script>
       

        function show(){
        const dropdown = document.getElementById('key-dropdown').value;
        //   console.log(dropdown);
        document.getElementById('t4').innerHTML=dropdown;
        }

    
    
    
        dropdown.addEventListener('change', function () {
          const selected = dropdown.options[dropdown.selectedIndex].text;
          display.textContent = You selected: ${selected};
        });
      </script> --}}


          
</body>
</html>
