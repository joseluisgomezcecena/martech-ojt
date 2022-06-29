<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-dark-s sidebar sidebar-dark accordion toggled" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        
        <!--<div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>-->
        <img class="img-fluid" src="views/assets/img/Martechlogo.png">
        <!--
        <div class="sidebar-brand-text mx-3">Lean Suite<sup>v1</sup></div>
        -->
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-desktop"></i>
        <span>View</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Trained Personnel:</h6>
            <a class="collapse-item" href="index.php?page=trained">View All</a>
            <a class="collapse-item" href="index.php?page=trained_supervisor">View by Supervisor</a>

          </div>
        </div>
      </li>

      <?php if($_SESSION['ojt_user_level'] >  0):  ?>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-database"></i>
          <span>App Data</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Import to Database:</h6>
            <a class="collapse-item" href="index.php?page=importcsv">Import SOP to DB</a>
            <a class="collapse-item" href="index.php?page=importcsvpersonnel">Import Personnel to DB</a>

            
            <h6 class="collapse-header">Manual Data:</h6>
            <a class="collapse-item" href="index.php?page=cells">Cell Data</a>
            <a class="collapse-item" href="index.php?page=cell_op">Ops Data</a>
            <a class="collapse-item" href="index.php?page=assign_sop_menu">Assign SOP's</a>
            <a class="collapse-item" href="index.php?page=corrective_reports">Ergonomic Data</a>
          </div>
        </div>
      </li>


      

      <!-- Divider 
      <hr class="sidebar-divider">

      <!-- Heading 
      <div class="sidebar-heading">
        Config
      </div>

       <!-- Nav Item - Utilities Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMachines" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-users"></i>
          <span>Users & Groups</span>
        </a>
        <div id="collapseMachines" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Authentication:</h6>
            <a class="collapse-item" href="index.php?page=user_list">Users</a>
            <a class="collapse-item" href="#">Groups (Development)</a>
          </div>
        </div>
      </li>

      <?php endif; ?>

     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
