 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('welcome.css') }}" >
   
   
</head>
<body>

  
 

  @if (@isset($msg))
{{--       
  <div class="mt-3 mb-4">
    <div class="col-12 d-flex justify-content-end">
      <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
    </div>
  </div> --}}
  
  

  
      
  <div class="container1">
    <h1 class="wel">Welcome: {{$msg->name}}</h1>
  
    <div class="profile">
      <img src="{{asset('images')}}/{{$msg->Profilepic}}" alt=""height="150px" width="150px">
      <div class="info">
        <h1>Course Enrolled: {{$msg->course_name}}</h1>
        <h3>Email Id:  {{$msg->email}}</h3>
        <h3>Registration:  {{$msg->regt_number}}</h3>
        <h3>Duration:  {{$msg->duration}}</h3>
        <h3>Fees:  {{$msg->fee}}</h3>
        <div class="social">
          
        </div>
      </div>
    </div>

    <div class="courses">

      <div class="course-list">
        {{-- <div class="course-item">{{$msg->course_taught}}</div> --}}
      </div>
    </div>
    <div class="mt-3 mb-4">
      <div class="col-12 d-flex justify-content-end">
        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
      </div>
    </div>
 
  </div>
  @endif

</body>
</html> 

{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Welcome Student</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Inter', sans-serif;
}

body {
  background: linear-gradient(to right, #667eea, #764ba2);
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.welcome-container {
  width: 90%;
  max-width: 400px;
}

.card {
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  padding: 2rem;
  text-align: center;
  transition: transform 0.3s ease;
}

.card:hover {
  transform: translateY(-5px);
}

.profile-section {
  margin-bottom: 1.5rem;
}

.profile-pic {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  border: 4px solid #764ba2;
  object-fit: cover;
  margin-bottom: 1rem;
}

h2 {
  font-size: 1.5rem;
  color: #333;
}

.details p {
  font-size: 1rem;
  margin: 0.5rem 0;
  color: #555;
}
  </style>
</head>
<body>
  <div class="welcome-container">
    <div class="card">
      <div class="profile-section">
        <img src="https://via.placeholder.com/120" alt="Profile Picture" class="profile-pic"/>
        <h2>Welcome, John Doe</h2>
      </div>
      <div class="details">
        <p><strong>📧 Gmail:</strong> johndoe@gmail.com</p>
        <p><strong>📚 Course Enrolled:</strong> Full Stack Web Development</p>
        <p><strong>💰 Course Fees:</strong> $1,200</p>
      </div>
    </div>
  </div>
</body>
</html> --}}
