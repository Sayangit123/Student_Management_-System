<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('placements.css') }}">
    <link rel="stylesheet" href="{{ asset('nav.css') }}">
    <link rel="stylesheet" href="{{ asset('hamburger2.css') }}">
   
</head>
<body>
  
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

    

      <section class="hero">
        <div class="container">
          <h2  class=" courses_name">Upcoming Interviews</h2>
          <p  class=" courses_name">Explore our Company for your dream career</p>
        </div>
      </section>
  
      <section class="events container">
        <div class="event-card">
           
         
          <h3>Tata Consultancy Services</h3>
          <p><strong>Date:</strong> April 25, 2025</p>
          <p><strong>Time:</strong> 11 AM - 4 PM</p>
          <p><strong>Mode:</strong> Offline </p>
          <p><strong>Address:</strong> plot no.54 &55, Street Number 18, DN Block, Sector V, Bidhannagar, Kolkata, West Bengal 700091</p>
        </div>
        
    
        <div class="event-card">
          <h3>Accenture</h3>
          <p><strong>Date:</strong> May 2, 2025</p>
          <p><strong>Time:</strong> 3 PM - 6 PM</p>
          <p><strong>Mode:</strong> Offline</p>
          <p><strong>Address:</strong>Unitech Hi-Tech Structures Limited (It/Ites Sez), Block No. Dh Plot. DH1, DH2, DH3, next to Gate No:3, Action Area I, Rajarhat, New Town, Kolkata, West Bengal 700156 </p>
        
        </div>
      </section>
      <div class="hiring">
     
      <div class="heding1">Hiring Companies</div>
    </div>
      <section class="hiring-companies container">
        @if (@isset($row1))
         @foreach ($row1 as $item1) 
            
        <div class="company-logos">
          <div>
            <img src="{{asset('uploads')}}/{{$item1->company_pic}}">
            <p>{{$item1->company}}</p>
          </div>
        </div>
        @endforeach
          @endif
       
      </section>
    
      <section class="placed-students container">
        <div class="heding2">Students Placed</div>
       
        <div class="students">
            @if (@isset($row))
              @foreach ($row as $item)       
           
          <div class="student-card">
            <img src="{{asset('images')}}/{{$item->student_pic}}">
            <p><strong>{{$item->student}}</strong></p>
            <img src="{{asset('images')}}/{{$item->company_pic}}">
            <p>{{$item->company}}</p>
          </div>
          @endforeach
          @endif
         
      </section>

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