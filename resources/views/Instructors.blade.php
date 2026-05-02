<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <title>iAcademy - Instructor Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('instructor.css') }}" >
    <link rel="stylesheet" href="{{ asset('nav.css') }}" >
    <link rel="stylesheet" href="{{ asset('hamburger2.css') }}" >
   
</head>
<body>
  {{-- <header class="header">
    <div class="container">
        <div class="logo-div">
            <img src="{{asset('images/Logo1.png')}}" class="logo" alt="">
        </div>

        <!-- Hamburger Icon -->
        <div class="hamburger" id="hamburger">&#9776;</div>

        <nav id="nav-menu" class="nav-menu">
            <ul>
                <li><a href="{{'/home'}}">Home</a></li>
                <li><a href="{{'/about'}}">About Us</a></li>
                <li><a href="{{'/courses'}}">Courses</a></li>
                <li><a href="{{'/instructor'}}">Instructors</a></li>
                <li><a href="{{'/placements'}}">Placements</a></li>
            </ul>
        </nav>

        <div class="auth-buttons">
            <button class="login"><a class="anker2" href="{{'/login'}}">Login</a></button>
            <button class="register"><a class="anker2" href="{{'/signup'}}">Register</a></button>
        </div>
    </div>
</header> --}}
<header class="header">
  <div class="container">
      <div class="logo-div">
          <img src="{{asset('images/Logo1.png')}}" class="logo" alt="">
      </div>

      <!-- Hamburger Icon -->
      <div class="hamburger" id="hamburger">&#9776;</div>

      <nav id="nav-menu" class="nav-menu">
          <ul>
              <li><a href="{{'/home'}}">Home</a></li>
              <li><a href="{{'/about'}}">About Us</a></li>
              <li><a href="{{'/courses'}}">Courses</a></li>
              <li><a href="{{'/instructor'}}">Instructors</a></li>
              <li><a href="{{'/placements'}}">Placements</a></li>
          </ul>

          <!-- Auth buttons inside nav for mobile -->
          <div class="auth-buttons-mobile">
              <a class="anker2" href="{{'/login'}}"><button class="btn btn-success">Login</button></a>
              <a class="anker2" href="{{'/signup'}}"><button class="btn btn-primary">Register</button></a>
          </div>
      </nav>

      <!-- Desktop Auth buttons -->
      <div class="auth-buttons-desktop">
          <button class="btn btn-success"><a class="anker2" href="{{'/login'}}">Login</a></button>
          <button class="btn btn-primary"><a class="anker2" href="{{'/signup'}}">Register</a></button>
      </div>
  </div>
</header>

  @foreach ($msg as $item)
      
  <div class="container1">
  
    <div class="profile">
      <img src="{{asset('images')}}/{{$item->profilepic}}" alt=""height="150px" width="150px">
      <div class="info">
        <h1>{{$item->name}}</h1>
        <h3>Position:  {{$item->position}}</h3>
        <p>Experience:  {{$item->experience}}</p>
        <div class="social">
          <a href="#">🌐</a>
          <a href="#">📧</a>
          <a href="#">💼</a>
        </div>
      </div>
    </div>

    <div class="courses">
      <h2>Courses Taught</h2>
      <div class="course-list">
        <div class="course-item">{{$item->course_taught}}</div>
      </div>
    </div>
 
  </div>
  @endforeach

  {{-- <script>
    document.addEventListener("DOMContentLoaded", function () {
const circles = document.querySelectorAll(".circle");

circles.forEach(circle => {
    circle.addEventListener("mouseenter", () => {
        circle.style.transform = "scale(1.1)";
        circle.style.transition = "0.3s ease-in-out";
    });

    circle.addEventListener("mouseleave", () => {
        circle.style.transform = "scale(1)";
    });
});
});


document.getElementById('hamburger').addEventListener('click', function () {
    document.getElementById('nav-menu').classList.toggle('active');
});
</script> --}}
<script>
    

  document.getElementById('hamburger').addEventListener('click', function () {
      document.getElementById('nav-menu').classList.toggle('active');
  });



  </script>
    
</body>
</html>
