 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home.index') }}">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         {{-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> --}}
         <div class="sidebar-brand-text mx-3">Kamuzu Academy</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0" />

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="{{ route('home.index') }}">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider" />

     <!-- Heading -->
     <div class="sidebar-heading">Interface</div>

     <!-- Nav Item - Pages Collapse Menu -->
     @role('admin')
         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                 aria-expanded="true" aria-controls="collapseTwo">
                 <i class="fas fa-fw fa-cog"></i>
                 <span>Administration</span>
             </a>
             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header"></h6>
                     <a class="collapse-item" href="{{ route('roles.index') }}">Roles Management</a>
                     <a class="collapse-item" href="{{ route('permissions.index') }}">Permissions Management</a>
                     <a class="collapse-item" href="{{ route('users.index') }}">User Management</a>
                 </div>
             </div>
         </li>
     @endrole

     <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="{{ route('posts.index') }}">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>News Post</span></a>
     </li>

     <!-- Nav Item - Tables -->
     <li class="nav-item">
         <a class="nav-link" href="{{ route('events.index') }}">
             <i class="fas fa-fw fa-table"></i>
             <span>Events</span></a>
     </li>

   
     <li class="nav-item">
         <a class="nav-link" href="{{ route('documents.index') }}">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>Upload Calendar PDFs</span></a>
     </li>
     
      <li class="nav-item">
         <a class="nav-link" href="{{route('results.index')}}">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>Results</span></a>
     </li>
       <li class="nav-item">
         <a class="nav-link" href="{{route('subjectscontent.index')}}">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>Subjects Content</span></a>
     </li>
     
     
       <li class="nav-item">
         <a class="nav-link" href="{{route('staff.index')}}">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>Staff</span></a>
     </li>
     
      <li class="nav-item">
         <a class="nav-link" href="{{route('leadership.index')}}">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>Leadership Team</span></a>
     </li>
      <li class="nav-item">
         <a class="nav-link" href="{{route('policies.index')}}">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>Policies</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block" />

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>
 </ul>
 <!-- End of Sidebar -->
