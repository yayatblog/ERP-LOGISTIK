<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $judul;?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/vendor/dark-mode.css');?>" rel="stylesheet" type="text/css">

  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">


  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/css/sb-admin-2.min.css');?>" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script> -->


  
  <style>
    .nav-item{
      margin-top:-10px;
    }
    /* .navbar-custom {
    color: #FFFFFF;
    background-color: #CC3333; */
}
  </style>
  <!-- <script>
      function tema1(){
        document.bgColor = "lightblue";
      }
      function tema2(){
        document.bgColor = "lightgreen";
      }
  </script> -->
  <!-- <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url().'assets/css/jquery.datatables.min.css'?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.css'?>" rel="stylesheet" type="text/css"/> -->
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-primary sidebar sidebar-dark custom" id="accordionSidebar">
    

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard');?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <!-- <i class="fas fa-laugh-wink"></i> -->
        </div>
        <!-- <div class="sidebar-brand-text mx-2">ERP EKSPEDISI</div> -->
        <i class="fa fa-truck-moving" style="font-size:30px;"></i>
        <img src="<?= base_url('assets/img/logo.png');?>" class="light-logo" alt="homepage" style="width:110px;height:60px;">

        <!-- <button class="rounded-circle border-0" id="sidebarToggle"></button> -->
      </a>
      <!-- Divider -->
      <!-- <hr class="sidebar-divider my-0"> -->

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('dashboard');?>">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Nav Item - Dashboard -->
      <!-- <li class="nav-item active ml-3">
      <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="darkSwitch">
            <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
          </div>
        </li> -->
      <!-- Divider -->
      <!-- <hr class="sidebar-divider"> -->

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Interface
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      
<!-- 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fa fa-th-large"></i>
          <span>Next Update</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub Menu:</h6>
            <a class="collapse-item" href="<?=base_url('orders');?>">Orders</a>
            <a class="collapse-item" href="<?=base_url('delivery');?>">Delivery</a>
            <a class="collapse-item" href="<?=base_url('truck_assigment');?>">Truck Assigment</a>
          </div>
        </div>
      </li> -->

      <!-- <div class="jumbotron">
        <h1 class="display-3">Hello World</h1>
        <p class="lead-3">Lore</p>
      </div> -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fa fa-th-large"></i>
          <span>Master</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub Menu:</h6>
            <a class="collapse-item" href="<?=base_url('cities');?>">City</a>
            <a class="collapse-item" href="<?=base_url('group_truck');?>">Group Truck</a>
            <a class="collapse-item" href="<?=base_url('route');?>">Route</a>
            <a class="collapse-item" href="<?=base_url('cost_center');?>">Cost Center</a>
            <a class="collapse-item" href="<?=base_url('cost');?>">Cost</a>
            <a class="collapse-item" href="<?=base_url('maintenance');?>">Maintenace</a>
            <a class="collapse-item" href="<?=base_url('truck');?>">Truck</a>
            <a class="collapse-item" href="<?=base_url('driver');?>">Driver</a>
            <a class="collapse-item" href="<?=base_url('kernet');?>">Kernet</a>
            <a class="collapse-item" href="<?=base_url('customer');?>">Customer</a>
            <a class="collapse-item" href="<?=base_url('branch');?>">Branch</a>
            <a class="collapse-item" href="<?=base_url('bank');?>">Bank</a>


          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fa fa-truck-moving"></i>
          <span>Transaction</span>
          
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub Menu:</h6>
            <a class="collapse-item" href="<?=base_url('rent');?>">Rent</a>
            <a class="collapse-item" href="<?=base_url('invoice');?>">Invoice</a>
            <a class="collapse-item" href="<?=base_url('payment');?>">Payment</a>
            <a class="collapse-item" href="<?=base_url('repair');?>">Repair</a>
            <a class="collapse-item" href="<?=base_url('expense');?>">Expense</a>
            <a class="collapse-item" href="<?=base_url('revenue');?>">Revenue</a>
            <a class="collapse-item" href="<?=base_url('loan');?>">Loan</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTools" aria-expanded="true"
          aria-controls="collapseTools">
          <i class="fa fa-truck-loading"></i>
          <span>Tools</span>
        </a>
        <div id="collapseTools" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub Menu:</h6>
            <a class="collapse-item" href="<?=base_url('module');?>">Module</a>
            <a class="collapse-item" href="<?=base_url('user_config');?>">User Config</a>
            <a class="collapse-item" href="<?=base_url('user_config/role');?>">Role</a>
            <a class="collapse-item" href="<?=base_url('users');?>">User</a>
            <a class="collapse-item" href="<?=base_url('user/user_config');?>">User Config</a>


          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fa fa-book"></i>
          <span>Report</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub Menu:</h6>
            <a class="collapse-item" href="<?=base_url('external');?>">External</a>
            <a class="collapse-item" href="<?=base_url('external');?>">External(Cost)</a>
            <a class="collapse-item" href="<?=base_url('external');?>">External(Revenue)</a>
          </div>
        </div>
      </li>

      

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseManagement" aria-expanded="true"
          aria-controls="collapse">
          <i class="fa fa-comments-dollar"></i>
          <span>Users Management</span>
        </a>
        <div id="collapseManagement" class="collapse" aria-labelledby="headingTwo data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub Menu:</h6>
            <a class="collapse-item" href="<?=base_url('users/tambah');?>">Add Users</a>
            <a class="collapse-item" href="<?=base_url('users');?>">List Users</a>
          </div>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="" data-target="" aria-expanded="true"
          aria-controls="collapseTwo">REPORT
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Kendaraan" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fa fa-truck-moving"></i>
          <span>Kendaraan</span>
          
        </a>
        <div id="Kendaraan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub Menu:</h6>
            <a class="collapse-item" href="<?=base_url('');?>">Biaya Borongan Per<br>Kendaraan</a>
            <a class="collapse-item" href="<?=base_url('invoice');?>">Omset Per Kendaraan<br>(Rekap)</a>
            <a class="collapse-item" href="<?=base_url('payment');?>">Omset Per Kendaraan<br>(Detail)</a>
            <a class="collapse-item" href="<?=base_url('repair');?>">Laba Rugi Per Kendaraan</a>
            <a class="collapse-item" href="<?=base_url('expense');?>">Perbaikan Kendaraan</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Konsumen" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fa fa-user"></i>
          <span>Konsumen</span>
          
        </a>
        <div id="Konsumen" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub Menu:</h6>
            <a class="collapse-item" href="<?=base_url('');?>">Kredit Limit Per Konsumen</a>
            <a class="collapse-item" href="<?=base_url('invoice');?>">Piutang Dagang Per<br>Konsumen</a>
            <a class="collapse-item" href="<?=base_url('payment');?>">Rekap Omset Per<br>Konsumen</a>
            <a class="collapse-item" href="<?=base_url('repair');?>">Laba Rugi Perkonsumen</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Sewa" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-money-bill-alt"></i>
          <span>Sewa</span>
          
        </a>
        <div id="Sewa" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub Menu:</h6>
            <a class="collapse-item" href="<?=base_url('');?>">Laporan Harian</a>
            <a class="collapse-item" href="<?=base_url('invoice');?>">Rekap Hutang Supir</a>
            <a class="collapse-item" href="<?=base_url('payment');?>">Laporan Pemakaian<br>Sparepart</a>
            <a class="collapse-item" href="<?=base_url('repair');?>">Sisa Borongan</a>
            <a class="collapse-item" href="<?=base_url('repair');?>">Sisa Borongan</a>
            <a class="collapse-item" href="<?=base_url('repair');?>">Mutasi Kas</a>
            <a class="collapse-item" href="<?=base_url('repair');?>">Rekap Total Omset Per<br>Customer</a>
            <a class="collapse-item" href="<?=base_url('repair');?>">Laporan Outstanding Per<br>Customer</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#cetakan" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fa fa-print"></i>
          <span>Cetakan</span> 
        </a>
        <div id="cetakan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub Menu:</h6>
            <a class="collapse-item" href="<?=base_url('');?>">SPJ</a>
            <a class="collapse-item" href="<?=base_url('invoice');?>">SPUJ</a>
            <a class="collapse-item" href="<?=base_url('payment');?>">Invoice</a>
            <a class="collapse-item" href="<?=base_url('repair');?>">Faktur</a>
            <a class="collapse-item" href="<?=base_url('repair');?>">Kwitansi</a>
           
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('auth/logout')?>">
          <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
          <span>Log Out</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-orange topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <h1 class="text-primary" style="text-transform: uppercase;text-decoration:b;">VITRANS System</h1>
              <!-- <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div> -->
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <h2>Winstralink Media Computindo</h2>
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been
                      having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them
                      sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so
                      far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people
                      say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="https://ecs7.tokopedia.net/img/cache/200-square/attachment/2019/9/13/43737554/43737554_4d214606-56d5-4fcb-9407-69f26faab85f.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('auth/logout');?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->