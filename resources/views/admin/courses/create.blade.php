<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <!-- Bootstrap 4 CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      min-height: 100vh;
    }
    .sidebar {
      min-height: 100vh;
      background-color: #343a40;
      color: white;
    }
    .sidebar a {
      color: white;
      display: block;
      padding: 10px;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .content {
      padding: 20px;
    }
  </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
          <!-- Sidebar -->
          @include('admin.partials.sidebar')
      
          <!-- Main Content -->
          <main class="col-md-10 ml-sm-auto col-lg-10 px-4 content">
            <!-- Top Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
              <a class="navbar-brand" href="#">Add Course</a>
            </nav>
      
            <!-- Form Card -->
            <div class="card shadow-sm rounded mb-4">
              <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Course Information</h5>
              </div>
              <div class="card-body">
                <form action="{{route('courses.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
      
                  <div class="form-group mb-3">
                    <label for="fullName"> Student Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter student name">
                  </div>
                  @if ($errors->has('name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('name') }}
                    </div>
                 @endif

                 <div class="form-group mb-3">
                    <label for="course_name"> Course Name</label>
                    <input type="text" class="form-control" id="course_name" name="course_name" placeholder="Enter course name">
                  </div>
                  @if ($errors->has('course_name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('course_name') }}
                    </div>
                 @endif
      
                  <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter description"></textarea>
                  </div>
                  @if ($errors->has('description'))
                    <div class="alert alert-danger">
                        {{ $errors->first('description') }}
                    </div>
                 @endif
      
                  <div class="form-group mb-3">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control" id="duration" name="duration">
                  </div>
                    @if ($errors->has('duration'))
                        <div class="alert alert-danger">
                            {{ $errors->first('duration') }}
                        </div>
                    @endif


                    <div class="form-group mb-3">
                        <label for="fee">Fee</label>
                        <input type="text" class="form-control" id="fee" name="fee">
                      </div>
                        @if ($errors->has('fee'))
                            <div class="alert alert-danger">
                                {{ $errors->first('fee') }}
                            </div>
                        @endif

                        <div class="form-group mb-3">
                            <label for="training">Training</label>
                            <input type="text" class="form-control" id="training" name="training">
                          </div>
                            @if ($errors->has('training'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('training') }}
                                </div>
                            @endif

                            <div class="form-group mb-3">
                                <label for="course_structure">Course Structure</label>
                                <input type="text" class="form-control" id="course_structure" name="course_structure">
                              </div>
                                @if ($errors->has('course_structure'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('course_structure') }}
                                    </div>
                                @endif


                                <div class="form-group mb-3">
                                    <label for="structure">Structure</label>
                                    <input type="text" class="form-control" id="structure" name="structure">
                                  </div>
                                    @if ($errors->has('structure'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('structure') }}
                                        </div>
                                    @endif

                                    <div class="form-group mb-3">
                                        <label for="module">Module</label>
                                        <input type="text" class="form-control" id="module" name="module">
                                      </div>
                                        @if ($errors->has('module'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('module') }}
                                            </div>
                                        @endif
                                    
                                        <div class="form-group mb-3">
                                            <label for="module_details">Module Details</label>
                                            <input type="text" class="form-control" id="module_details" name="module_details">
                                          </div>
                                            @if ($errors->has('module_details'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('module_details') }}
                                                </div>
                                            @endif

                                            <div class="form-group mb-3">
                                                <label for="module1">Module (1)</label>
                                                <input type="text" class="form-control" id="module1" name="module1">
                                              </div>
                                                @if ($errors->has('module1'))
                                                    <div class="alert alert-danger">
                                                        {{ $errors->first('module1') }}
                                                    </div>
                                                @endif

                                                <div class="form-group mb-3">
                                                    <label for="module1_details">Module Details (1)</label>
                                                    <input type="text" class="form-control" id="module1_details" name="module1_details">
                                                  </div>
                                                    @if ($errors->has('module1_details'))
                                                        <div class="alert alert-danger">
                                                            {{ $errors->first('module1_details') }}
                                                        </div>
                                                    @endif

                                                    <div class="form-group mb-3">
                                                        <label for="module2">Module (2)</label>
                                                        <input type="text" class="form-control" id="module2" name="module2">
                                                      </div>
                                                        @if ($errors->has('module2'))
                                                            <div class="alert alert-danger">
                                                                {{ $errors->first('module2') }}
                                                            </div>
                                                        @endif

                                                        <div class="form-group mb-3">
                                                            <label for="module2_details">Module Details(2)</label>
                                                            <input type="text" class="form-control" id="module2_details" name="module2_details">
                                                          </div>
                                                            @if ($errors->has('module2_details'))
                                                                <div class="alert alert-danger">
                                                                    {{ $errors->first('module2_details') }}
                                                                </div>
                                                            @endif
                        

                           
                            
                                <div class="form-group mb-3">
                                    <label for="stud_images">Profile Image</label>
                                   <input type="file" name="Profilepic" id="Profilepic" class="form-control">
                                    
                                  </div>
                                    @if ($errors->has('Profilepic'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('Profilepic') }}
                                        </div>
                                    @endif

                                    
    
                  <button type="submit" class="btn btn-primary">Add</button>
                </form>
              </div>
            </div>
          </main>
        </div>
      </div>
      

<!-- Bootstrap 4 JS + dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>