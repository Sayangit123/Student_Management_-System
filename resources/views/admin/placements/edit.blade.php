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
              <a class="navbar-brand" href="#">Edit Placement</a>
            </nav>
      
            <!-- Form Card -->
            <div class="card shadow-sm rounded mb-4">
              <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Placement Information</h5>
              </div>
              <div class="card-body">
                <form action="{{route('placements.update')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <input type="hidden" name="id" value="{{$placements->id}}">
                  <div class="form-group mb-3">
                    <label for="fullName"> Student Name</label>
                    <input type="text" class="form-control" id="student" name="student" placeholder="Enter student name" value="{{$placements->student ?? '-' }}">
                  </div>
                  @if ($errors->has('student'))
                    <div class="alert alert-danger">
                        {{ $errors->first('student') }}
                    </div>
                 @endif
      
                  <div class="form-group mb-3">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="Enter company" value="{{$placements->company ?? '-' }}">
                  </div>
                  @if ($errors->has('company'))
                    <div class="alert alert-danger">
                        {{ $errors->first('company') }}
                    </div>
                 @endif
      
                  <div class="form-group mb-3">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{$placements->date ?? '-' }}">
                  </div>
                    @if ($errors->has('date'))
                        <div class="alert alert-danger">
                            {{ $errors->first('date') }}
                        </div>
                    @endif


                    <div class="form-group mb-3">
                        <label for="time">Time</label>
                        <input type="time" class="form-control" id="time" name="time" value="{{$placements->time ?? '-' }}">
                      </div>
                        @if ($errors->has('time'))
                            <div class="alert alert-danger">
                                {{ $errors->first('time') }}
                            </div>
                        @endif

                        <div class="form-group mb-3">
                            <label for="mode">Mode</label>
                            <select name="mode" id="mode" class="form-control">
                                <option value="">Select mode</option>
                                <option value="online" {{ $placements->mode == 'online' ? 'selected' : '' }}>Online</option>
                                <option value="offline" {{ $placements->mode == 'offline' ? 'selected' : '' }}>Offline</option>
                            </select>
                            
                            
                          </div>
                            @if ($errors->has('mode'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('mode') }}
                                </div>
                            @endif

                            <div class="form-group mb-3">
                                <label for="address">Address</label>
                                <textarea type="text" class="form-control" id="address" name="address">{{$placements->address ?? '-'}}</textarea>
                              </div>
                                @if ($errors->has('address'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('address') }}
                                    </div>
                                @endif
                            
                                <div class="form-group mb-3">
                                    <label for="stud_images">Student Image</label>
                                   <input type="file" name="student_pic" id="student_pic" class="form-control">
                                    
                                  </div>
                                    @if ($errors->has('student_pic'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('student_pic') }}
                                        </div>
                                    @endif

                                    <div class="form-group mb-3">
                                        <label for="stud_images">Company Image</label>
                                       <input type="file" name="company_pic" id="company_pic" class="form-control">
                                        
                                      </div>
                                        @if ($errors->has('company_pic'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('company_pic') }}
                                            </div>
                                        @endif
    
                  <button type="submit" class="btn btn-primary">Update</button>
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