<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
      <!-- Sidebar user panel -->
     @if (auth()->user())
       
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ asset('assets/plugins/admin-lte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            {{-- <p>{{ currentUser.name | uppercase }}</p> --}}
            {{ strtoupper(auth()->user()->name) }}
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <!-- <li class="header">LABELS</li> -->
          <li><a href="{{ route('admin.home') }}"><i class="fa fa-circle-o text-aqua"></i> <span>Admin Home Page</span></a></li>
          <li class="header">MAIN NAVIGATION</li>
          
          <li class="active treeview">
            <a href="">
              <i class="fa fa-dashboard"></i> <span> Aplications</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li class=""><a href="{{ route('admin.contacts.index') }}"><i class="fa fa-circle-o"></i> Contacts</a></li>
              <li class=""><a href="{{ route('admin.messages.index') }}"><i class="fa fa-circle-o"></i> Menssages</a></li>
              <li class=""><a href="{{ route('admin.todos.index') }}"><i class="fa fa-circle-o"></i> Tasks</a></li>
            </ul>
          </li>


          <li class="treeview">
            <a href="#">
              <i class="fa fa-cogs"></i> <span> Admin Section</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li class=""><a href="{{ route('admin.roles.index') }}"><i class="fa fa-circle-o"></i> Roles</a></li>
              <li class=""><a href="{{ route('admin.users.index') }}"><i class="fa fa-circle-o"></i> Users</a></li>
            </ul>
          </li>
          
          <li class="header">SESSION CONTROL</li>
          <li><a href="{{ url('auth/logout') }}"><i class="fa fa-circle-o text-red"></i> <span>Log Out</span></a></li>
        </ul>
     @else
       {{-- false expr --}}
     @endif

      
  </section>
  <!-- /.sidebar -->
</aside>