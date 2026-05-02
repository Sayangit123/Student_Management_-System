<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <!-- Bootstrap 4 CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  
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
      @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

      <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <a class="navbar-brand" href="#">Users List</a>
        <div class="ml-auto">
            <a href="{{route('admin.create')}}" class="btn btn-primary">+ Add User</a>
          </div>
      </nav>

      <!-- Dashboard Content -->
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <tr>
              <th>SL No.</th>
              <th>Name</th>
              <th>Email</th>
              <th>Registration Number</th>
              <th>Course Name</th>
              <th>Actions</th>
            </tr>
          </thead>
          @foreach($users as $key=>$user) 
          <tbody>
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$user->name ?? '-' }}</td>
                <td>{{$user->email ?? '=' }}</td>
                <td>{{$user->regt_number ?? '-' }}</td>
                <td>{{$user->course_name ?? '-' }}</td>
                
                <td>
                    <!-- Edit Icon -->
                    <a href="{{ route('admin.edit', $user->id) }}" class="btn btn-sm btn-primary" title="Edit">
                      <i class="fas fa-edit"></i>
                    </a>
              

                    <!-- Delete Button -->
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal-{{ $user->id }}" title="Delete">
                        <i class="fas fa-trash-alt"></i>
                    </button>

                    <!-- Delete Confirmation Modal -->
                    <div class="modal fade" id="deleteModal-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel-{{ $user->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header bg-danger text-white">
                                    <h5 class="modal-title" id="deleteModalLabel-{{ $user->id }}">Confirm Deletion</h5>
                                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    Are you sure you want to delete <strong>{{ $user->name }}</strong>?
                                </div>

                                <div class="modal-footer">
                                    <form action="{{ route('admin.delete', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

  
                  </td>
              
            </tr>
            @endforeach
            
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>
      

    </main>
  </div>
</div>

  

<!-- Bootstrap 4 JS + dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
