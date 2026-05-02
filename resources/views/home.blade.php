<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iAcademy - Student Course Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('index.css') }}" >
    <link rel="stylesheet" href="{{ asset('hamburger2.css') }}" >
    <link rel="stylesheet" href="{{ asset('nav.css') }}" >
  
   
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


    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h2>Help Students Reach Their Potential.</h2>
            <p>iAcademy is an online platform offering courses in software development, web development, and UI/UX design. It provides interactive lessons, video tutorials, and hands-on exercises. The platform focuses on practical, project-based learning. iAcademy caters to learners of all levels, from beginners to professionals. Its goal is to equip students with the skills needed for careers in tech.</p>
            <a href="{{'/courses'}}" class="learn-more">Learn More</a>
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/studentpic.png') }}" alt="Student Holding Books">
            <div class="course-circles">
                <div class="circle" style="top: 20%; left: 70%;"><a class="anker1" href="https://react.dev/">React Js</a></div>
                <div class="circle" style="top: 35%; left: 70%;"><a class="anker1" href="https://deadsimplechat.com/blog/mern-stack-the-complete-guide/">Mern Stack</a></div>
                <div class="circle" style="top: 5%; left: 70%;"><a class="anker1" href="https://www.mongodb.com/resources/languages/mean-stack">Mean Stack</a></div>
                <div class="circle" style="top: 10%; left: 10%;"><a class="anker1" href="https://www.figma.com/community/file/944644388375583520/ux-documentation">UI/UX</a></div>
                <div class="circle" style="top: 25%; left: 10%;"><a class="anker1" href="https://www.datascience-pm.com/documentation-best-practices/">Data Science</a></div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
          <p>  &copy; 2024 I ACADEMY. All rights reserved.</p>
          <ul class="footer-links">
            <li><a href="{{'/privacy'}}">Privacy Policy</a></li>
            <li><a href="{{'/terms'}}">Terms of Service</a></li>
          
          </ul>
        </div>
      </footer>
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


    {{-- </script> --}}
    <script>
    

    document.getElementById('hamburger').addEventListener('click', function () {
        document.getElementById('nav-menu').classList.toggle('active');
    });



    </script>

</body>
</html>