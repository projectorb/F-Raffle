<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center " href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Raffle</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Divider --> 
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item {{ (request()->RouteIs('generate.index')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('generate.index') }}">
          <i class="fas fa-fw fa-code"></i>
          <span>Generate Code</span>
        </a>
      </li>
      <li class="nav-item {{(request()->RouteIs('prize.index')) ? 'active' : ''  }}">
        <a class="nav-link" href="{{ route('prize.index') }}">
          <i class="fas fa-fw fa-gift"></i>
          <span>Prizes</span>
        </a>
      </li>
      <li class="nav-item {{ (request()->RouteIs('winner.index')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('winner.index') }}">
          <i class="fas fa-fw fa-award"></i>
          <span>Winners</span>
        </a>
      </li>
      <li class="nav-item {{ (request()->RouteIs('draw.index')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('draw.index') }}">
          <i class="fas fa-fw fa-bars"></i>
          <span>Draw Logs</span>
        </a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">

      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>