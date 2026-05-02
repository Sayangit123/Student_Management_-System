<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
  integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Courses</title>
  <link rel="stylesheet" href="{{ asset('course.css') }}">
  <link rel="stylesheet" href="{{ asset('nav.css') }}">
  <link rel="stylesheet" href="{{ asset('hamburger2.css') }}">



        <!-- jQuery -->
{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
crossorigin="anonymous"></script>

<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
crossorigin="anonymous"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" 
integrity="sha384-+YQ4/1GLm2ue1mC9Ij5z1YjKU1zpZsdKxVRgPyEbrLthz92d6u38skPXzAQ5zO9T" 
crossorigin="anonymous"></script> --}}


{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2LcO9Oe4paTgFEa5BZ2xjC6F3eMv7KgqJk5tBT1V5Q" 
        crossorigin="anonymous"></script>


<!-- Correct script imports - remove the duplicates above -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2LcO9Oe4paTgFEa5BZ2xjC6F3eMv7KgqJk5tBT1V5Q" 
        crossorigin="anonymous"></script> --}}

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

  <div class="py-4 px-3 px-sm-5 header-2 text-center text-sm-left">
    <h1 class="courses_name">COURSES</h1>
    <p class="courses_name">Explore our top-rated training programs</p>
  </div>

  <div class="container">
    <div class="row">
      @foreach ($msg as $item)
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="course-card">
          <img src="{{asset('images')}}/{{$item->Profilepic}}" alt="{{$item->course_name}}" class="course-image">
          <div class="course-content">
            <div class="course-title">
              <a href="{{url('/details')}}/{{$item->id}}">{{$item->course_name}}</a>
            </div>
            <div class="course-desc">{{$item->description}}</div>
            <div class="course-info">{{$item->duration}}<br>{{$item->fee}}</div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

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
