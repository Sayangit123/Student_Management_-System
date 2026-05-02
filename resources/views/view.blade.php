<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('courseview.css') }}">
    <style>
      .details-of-course {
  padding: 2rem;
  background-color: #f9fafb;
  border-radius: 1rem;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
  font-family: 'Segoe UI', sans-serif;
}

.benefits-of-course {
  display: flex;
  flex-direction: column;
  font-size: 1rem;

  gap: 1.5rem;
}

.de {
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
  

}

.de div {
  position: relative;
  padding-left: 1.5rem;
  line-height: 1.5;
  font-size: 1.3rem; /* ~18px */
  font-weight: 500;
  color: #333;
}

.de div::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0.5rem;
  width: 0.5rem;
  height: 0.5rem;
  background-color: #2563eb; /* blue */
  border-radius: 50%;
}

@media (min-width: 768px) {
  .benefits-of-course {
    flex-direction: row;
    justify-content: space-between;
  }

  .de {
   
    width: 30%;
  }
}

.course-desc {
  font-size: 10 rem;
  color: #444;
  line-height: 1.6;
  margin-bottom: 1.5rem;
  padding: 1rem;
  background-color: #f8fafc;
  border-radius: 0.75rem;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.duration {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 1rem;
  padding: 1rem;
  background-color: #f1f5f9;
  border-radius: 0.75rem;
}

.course-info, 
.course-info1 {
  max-width: 500px;
  height: 100px;
  flex: 1 1 45%;
  background-color: #e9ac06;
  padding: 1rem;
  border-radius: 0.5rem;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
  font-size: 10 rem;
  text-align: center;
}

.course-info p,
.course-info1 p {
  margin: 0;
  color: #1e293b;
  font-weight: 500;
}


    </style>
</head>
<body>
  
        @if (@isset($msg))
    
    <div class="container">
        
        <div class="course-grid">
          <!-- Course 1 -->
          <div class="course-card">
            {{-- <img src="{{asset('uploads')}}/{{$msg->Profilepic}}" alt="PHP Course", class="course-image"> --}}
            <div  class="course-name-bk" ><div class="course-name">{{$msg->course_name}}</div></div>
            
            <div class="course-content" >

              <div class="details-of-course">
                <div class="benefits-of-course">
                  <div class="de">
                      <div>Industry Oriented Training</div>
                      <div>Highly Experienced Faculties</div>
                  </div>
                  <div class="de">
                      <div>Real-Life Project & Live Hosting</div>
                      <div>Unlimited JOB Opportunities</div>
                  </div>
                  <div class="de">
                      <div>Hybrid Classes with Class Recordings</div>
                      <div>Fully AI Implemented Training</div>
                  </div>
                </div>
                
              </div>
              
              <div class="course-desc">
                {{$msg->description}}
              </div>
              
              <div>
                <h3>Training Duration</h3>
              </div>
              
              <div class="duration">
                <div class="course-info">
                  <p>{{$msg->training}}</p>
                </div>
                <div class="course-info1">
                  <p>Course Fee <br>{{$msg->fee}}</p>
                </div>
              </div>
              

              {{-- drop --}}
              <h3>Course Structure</h3>
              <details>
                <summary>📘{{$msg->course_structure}}</summary>
                <div class="description">
                    {{$msg->structure}}
                </div>
              </details>
              <details>
                <summary>📘{{$msg->module}}</summary>
                <div class="description">
                    {{$msg->module_details}}
                </div>
              </details>
              <details>
                <summary>📘{{$msg->module1}}</summary>
                <div class="description">
                    {{$msg->module1_details}}
                </div>
              </details>
              <details>
                <summary>📘{{$msg->module2}}</summary>
                <div class="description">
                    {{$msg->module2_details}}
                </div>
              </details>
              
             
              
            </div>

          </div>
        </div>
    </div>
    @endif
    
</body>
</html>