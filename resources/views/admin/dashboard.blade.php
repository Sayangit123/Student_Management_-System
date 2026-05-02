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
        <a class="navbar-brand" href="#">Dashboard</a>
      </nav>

      <!-- Dashboard Content -->
      <div class="row">
        <div class="col-md-3 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Users</h5>
              <p class="card-text">{{$users ?? '-' }}</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Placements</h5>
              <p class="card-text">{{$placements ?? '-' }}</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Courses</h5>
              <p class="card-text">{{$courses ?? '-' }}</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Instructor</h5>
              <p class="card-text">{{$instructors ?? '-' }}</p>
            </div>
          </div>
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
