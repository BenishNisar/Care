 <!-- partial:partials/_navbar.html -->
 <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" style="width:200px"href="index.php">
            <img src="images/carelogore.png" alt="logo"
            class="logo" style="width:200px; height: 90px;margin-left:-50px;">
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.php">
            <img src="images/carelogore.png" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text"  id="greeting"> <span class="text-black fw-bold"></span>
    
          </h1>
            <h3 class="welcome-sub-text" id="slogan">"Your Health, Our Priority at Care Hospital."</h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3" >
                <p class="mb-0 font-weight-medium float-left">Select category</p>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Bootstrap Bundle </p>
                  <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Angular Bundle</p>
                  <p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular projects</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">VUE Bundle</p>
                  <p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">React Bundle</p>
                  <p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin Dashboard</p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="icon-mail icon-lg"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-alert m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                  <p class="fw-light small-text mb-0"> Just now </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-settings m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                  <p class="fw-light small-text mb-0"> Private message </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-airballoon m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                  <p class="fw-light small-text mb-0"> 2 days ago </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown"> 
            <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-bell"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="images/profilelogo.avif" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                
                <p class="mb-1 mt-3 font-weight-semibold">Benish Nisar</p>
                <p class="fw-light text-muted mb-0">benishnisarkhan56@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
              <a class="dropdown-item" href="logout.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="">
        <ul class="nav">

       
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
        
          
         
          <li class="nav-item">
            <a class="nav-link" href="appointementfetch.php">
           
              <span class="menu-title" >Appointement</span>
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="diseasesfetch.php">
            
              <span class="menu-title">Diseases</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="medicalnewsfetch.php">
              
  <span class="menu-title">MedicalNews</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="medicalinventionsfetch.php">
            
              <span class="menu-title">MedicalInventions</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="citiesfetch.php">
            
              <span class="menu-title">Cities</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="websiteinformationfetch.php">
            
              <span class="menu-title">Website Information </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="availabilityfetch.php">
            
              <span class="menu-title">Availability</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="doctoraccountfetch.php">
            
              <span class="menu-title">Doctor Accounts</span>
            </a>
          </li>

        
          <li class="nav-item">
            <a class="nav-link" href="patientrecordfetch.php">
            
              <span class="menu-title">Patient Record</span>
            </a>
          </li>
        
       
          <li class="nav-item">
            <a class="nav-link" href="usersfetch.php">
             
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hospitalsfetch.php">
             
              <span class="menu-title">Hospitals</span>
            </a>
          </li>
          
       
          <li class="nav-item">
            <a class="nav-link" href="sliderfetch.php">
             
              <span class="menu-title">Slider</span>
            </a>
          </li>
          

          <li class="nav-item">
            <a class="nav-link" href="contactfetch.php">
             
              <span class="menu-title">Contact</span>
            </a>
          </li>
          
    


          <li class="nav-item">
            <a class="nav-link" href="hospitaldatafetch.php">
             
              <span class="menu-title">Hospital Data</span>
            </a>
          </li>

         
          <li class="nav-item">
            <a class="nav-link" href="servicefetch.php">
             
              <span class="menu-title">Services</span>
            </a>
          </li>

        


          <li class="nav-item">
            <a class="nav-link" href="clientfetch.php">
             
              <span class="menu-title">Client</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="openinghoursfetch.php">
             
              <span class="menu-title">Opening Hours</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="doctorloginfetch.php">
             
              <span class="menu-title">Doctor Login</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="newsletterfetch.php">
             
              <span class="menu-title">News Letter</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="aboutfetch.php">
             
              <span class="menu-title">About</span>
            </a>
          </li>

          
      </ul>
      </nav>
      <!-- partial -->
    
    
      <!-- main-panel ends -->
    
    <!-- page-body-wrapper ends -->
  