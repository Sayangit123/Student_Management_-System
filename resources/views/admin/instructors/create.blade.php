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
              <a class="navbar-brand" href="#">Add Instructor</a>
            </nav>
      
            <!-- Form Card -->
            <div class="card shadow-sm rounded mb-4">
              <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Instructor Information</h5>
              </div>
              <div class="card-body">
                <form action="{{route('instructors.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
      
                  <div class="form-group mb-3">
                    <label for="fullName"> Instructor Name</label>
                    <input type="text" class="form-control" id="instructor" name="instructor" placeholder="Enter instructor name">
                  </div>
                  @if ($errors->has('instructor'))
                    <div class="alert alert-danger">
                        {{ $errors->first('instructor') }}
                    </div>
                 @endif
      
                  <div class="form-group mb-3">
                    <label for="experience">Experience</label>
                    <input type="text" class="form-control" id="experience" name="experience" placeholder="Enter experience">
                  </div>
                  @if ($errors->has('experience'))
                    <div class="alert alert-danger">
                        {{ $errors->first('experience') }}
                    </div>
                 @endif
      
                  <div class="form-group mb-3">
                    <label for="position">Position</label>
                    <input type="text" class="form-control" id="position" name="position">
                  </div>
                    @if ($errors->has('position'))
                        <div class="alert alert-danger">
                            {{ $errors->first('position') }}
                        </div>
                    @endif


                    <div class="form-group mb-3">
                        <label for="course_taught">Courses Taught</label>
                        <input type="text" class="form-control" id="course_taught" name="course_taught">
                      </div>
                        @if ($errors->has('course_taught'))
                            <div class="alert alert-danger">
                                {{ $errors->first('course_taught') }}
                            </div>
                        @endif

                        {{-- <div class="form-group mb-3">
                            <label for="mode">Mode</label>
                            <select name="mode" id="mode" class="form-control">
                                <option value="">Select mode</option>
                                <option value="online">Online</option>
                                <option value="offline">Offline</option>
                            </select>
                            
                          </div>
                            @if ($errors->has('mode'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('mode') }}
                                </div>
                            @endif

                            <div class="form-group mb-3">
                                <label for="address">Address</label>
                                <textarea type="text" class="form-control" id="address" name="address"></textarea>
                              </div>
                                @if ($errors->has('address'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('address') }}
                                    </div>
                                @endif --}}
                            
                                <div class="form-group mb-3">
                                    <label for="instrucutor_images">Instructor Image</label>
                                   <input type="file" name="profilepic" id="profilepic" class="form-control">
                                    
                                  </div>
                                    @if ($errors->has('profilepic'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('profilepic') }}
                                        </div>
                                    @endif

                                    {{-- <div class="form-group mb-3">
                                        <label for="stud_images">Company Image</label>
                                       <input type="file" name="company_pic" id="company_pic" class="form-control">
                                        
                                      </div>
                                        @if ($errors->has('company_pic'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('company_pic') }}
                                            </div>
                                        @endif --}}
    
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