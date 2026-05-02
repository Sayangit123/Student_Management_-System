<nav class="col-md-2 d-none d-md-block sidebar">
    <div class="sidebar-sticky">
      <h4 class="p-3">Admin</h4>
      <ul class="nav flex-column">
        <li class="nav-item"><a href="{{route('admin.dashboard')}}" class="nav-link">Dashboard</a></li>
        <li class="nav-item"><a href="{{route('admin.users')}}" class="nav-link">Users</a></li>
        <li class="nav-item"><a href="{{route('courses')}}" class="nav-link">Courses</a></li>
        <li class="nav-item"><a href="{{route('placements')}}" class="nav-link">Placements</a></li>
        <li class="nav-item"><a href="{{route('instructors')}}" class="nav-link">Instructors</a></li>
        
        <li class="nav-item"><a href="{{route('logout')}}" class="nav-link">Logout</a></li>
      </ul>
    </div>
  </nav>