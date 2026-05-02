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
              <a class="navbar-brand" href="#">Edit Users</a>
            </nav>
      
            <!-- Form Card -->
            <div class="card shadow-sm rounded mb-4">
              <div class="card-header bg-primary text-white">
                <h5 class="mb-0">User Information</h5>
              </div>
              <div class="card-body">
                <form action="{{route('admin.update')}}" method="POST">
                  @csrf
                    <input type="hidden" name="id" value="{{$users->id}}">
                  <div class="form-group mb-3">
                    <label for="fullName"> Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{$users->name ?? '-' }}">
                  </div>
                  @if ($errors->has('name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('name') }}
                    </div>
                 @endif
      
                  <div class="form-group mb-3">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{$users->email ?? '-' }}">
                  </div>
                  @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                 @endif
                 <div class="form-group mb-3">
                    <label for="regt_number">Registration Number</label>
                    <input type="text" class="form-control" id="regt_number" name="regt_number" placeholder="Enter registration number" value="{{$users->regt_number ?? '-' }}">
                </div>
                @if ($errors->has('regt_number'))
                    <div class="alert alert-danger">
                        {{ $errors->first('regt_number') }}
                    </div>
                @endif
                    {{-- @dd($users->course_name) --}}
                    <div class="form-group mb-4">
                        <label for="course_name">Course Name</label>
                        <select class="form-control" id="course_name" name="course_name">
                          <option value="">Select Course name</option>
                          @foreach($courses as $course)
                            <option value="{{ $course->course_name }}"
                              {{ old('course_name', $course->course_name ?? '') == $users->course_name ? 'selected' : '' }}>
                              {{ $course->course_name }}
                            </option>
                          @endforeach
                        </select>
                      </div>
                      
                  @if ($errors->has('course_name'))
                        <div class="alert alert-danger">
                            {{ $errors->first('course_name') }}
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
