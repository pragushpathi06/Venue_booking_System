<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Booking</title>
    
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="formstyle.css" rel="stylesheet">
    
    <?php session_start(); ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://www.bitsathy.ac.in" target="_blank">
                <div class="sidebar-brand-icon">
                <img src="https://upload.wikimedia.org/wikipedia/en/7/77/Bannari_Amman_Institute_of_Technology_logo.png" width="100px" height="auto" class="mt-5">
                </div>
            </a><br><br>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index2.php">
                <img src="dashboard1.png" width="20px" height="20px">
                    <b><span>Dashboard</span></b></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Resources
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <img src="buildings1.png" width="20px" height="20px">
                    <b><span>BLOCKS</span></b>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"><a href="sf.php">SUN FLOWER:</a></h6>
                        <a class="collapse-item" >IT</a>
                        <a class="collapse-item" >CSE</a>
                    </div>
                
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"><a href="as.php">AS:</a></h6>
                        <a class="collapse-item" >TEXTILE</a>
                        <a class="collapse-item" >FOOD TECH</a>
                        <a class="collapse-item" >FASHION TECH</a>
                        <a class="collapse-item" >ECE</a>
                        <a class="collapse-item" >CIVIL</a>
                        <a class="collapse-item" >BIO MEDICAL</a>
                    </div>
                
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"><a href="ib.php">IB:</a></h6>
                        <a class="collapse-item" >AGRI</a>
                        <a class="collapse-item" >EIE</a>
                        <a class="collapse-item" >CT</a>
                        <a class="collapse-item" >AIDS</a>
                        <a class="collapse-item" >EEE</a>
                        <a class="collapse-item" >BIOTECH</a>
                    </div>
                
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"><a href="mech.php">MECH:</a></h6>
                        <a class="collapse-item" >AUTO MOBILE</a>
                        <a class="collapse-item" >MECHANICAL</a>
                        <a class="collapse-item" >MECHATRONICS</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <img src="conference1.png" width="20px" height="20px">
                  <b><span>SEMINAR HALLS</span></b>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">EEE SEMINAR HALL</h6>
                        <h6 class="collapse-header">OLD MECH SEMINAR HALL</h6>
                        <h6 class="collapse-header">BIOTECH SEMINAR HALL</h6>
                        <h6 class="collapse-header">CIVIL CONFERENCE HALL</h6>
                        <h6 class="collapse-header">SCHOOL OF COMPUTING - CSE</h6>
                        <h6 class="collapse-header">SCHOOL OF COMPUTING - IT</h6>
                        <h6 class="collapse-header">SEMINAR HALL 2</h6>
                    </div>
                </div>

            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <img src="auditorium.png" width="20px" height="20px">
                    <b><span>AUDITORIUMS</span></b>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">MAIN AUDITORIUM</h6>
                        <h6 class="collapse-header">VEDANAYAGAM AUDITORIUM</h6>
                    </div>
                </div>
            </li>

              <hr class="sidebar-divider">
              <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage"
                    aria-expanded="true" aria-controls="collapsePage">
                    <img src="booking.png" width="20px" height="20px">
                    <b><span>Booking</span></b>
                </a>
                <div id="collapsePage" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header"><a href="requests-out.php">REGULAR BOOKING</a></h6>
                    <h6 class="collapse-header"><a href="bulkbook-out.html">BULK BOOKING</a></h6>
                    <h6 class="collapse-header"><a href="emergency-out.html">EMERGENCY BOOKING</a></h6>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="complaints-out.html">
                <img src="report.png" width="20px" height="20px">
                    <b><span>REGISTER COMPLAINT</span></b>
                </a>
            </li>

            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="requests-in.php">
                <img src="requests1.png" width="20px" height="20px">
                    <b><span>REQUESTS</span></a></b>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="emergency-in.php">
                <img src="requests1.png" width="20px" height="20px">
                    <b><span>EMERGENCY REQUESTS</span></a></b>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="complaints-in.php">
                <img src="complaint.png" width="20px" height="20px">
                    <b><span>COMPLAINTS LIST</span></b>
                </a>
            </li>

            <!-- Divider -->

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
                <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                
                <!-- Begin Page Content -->
             
                    
                    <div class="container-fluid" >
                        <div class="container">
                            <form action="new.php" method="post">
                                <div class="row">
                                    <h4>REQUIREMENTS</h4>
                                    <div class="input-group input-group-icon">
                                        
                                        <select name="preference" id="preference" required>
                                            <option value="" disabled selected hidden>Select your Preference</option>
                                            <option value="classroom">Classroom</option>
                                            <option value="Seminar Hall">Seminar Hall</option>
                                            <option value="Auditorium">Auditorium</option>
                                        </select>
                                    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-group input-group-icon">
                                        <select name="need" id="need" required>
                                            <option value="" disabled selected hidden>Type of Event</option>
                                            <option value="ACADEMIC CLASSES">ACADEMIC CLASSES</option>
                                            <option value="SPECIAL LAB TRAINING">SPECIAL LAB TRAINING</option>
                                            <option value="CLUB ACTIVITY">CLUB ACTIVITY</option>
                                            <option value="WORKSHOP">WORKSHOP</option>
                                            <option value="FACULTY INITIATIVE">FACULTY INITIATIVE</option>
                                            <option value="SKILL">SKILL TRAINING</option>
                                            <option value="HANDS-ON">HANDS ON TRAINING</option>
                                        </select>    
                                    </div>
                                </div>
                                <div class="row">
                        
                                    <div class="input-group">
                                        <input type="text" id="facultyid" name="facultyid" placeholder="Faculty ID" required>    
                                    </div>
                                
                                </div>
                                <div class="row">
                        
                                    <div class="input-group">
                                        <input type="number" placeholder="Capacity" name="capacity" min="1" max="500" required/>    
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-half">
                                        <h4>From Date </h4>
                                        <div class="input-group">
                                            <input type="date" name="fromdate" required>
                                        </div>
                                    </div>
                                
                                    <div class="col-half">
                                        <h4>To Date</h4>
                                        <div class="input-group">
                                            <input type="date" name="todate" required>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="col-half">
                                        <h4>From Time </h4>
                                        <div class="input-group">
                                            <input type="time" name="fromtime" required>
                                        </div>
                                    </div>
                                
                                    <div class="col-half">
                                        <h4>To Time</h4>
                                        <div class="input-group">
                                            <input type="time" name="totime" required>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="row">
                                    <div class="col-half">
                                        <h4>Projectors</h4>
                                        <div class="input-group">
                                            <input id="Projector-Yes" type="radio" name="projectors" value="Yes" required />
                                            <label for="Projector-Yes">Yes</label>
                                            <input id="Projector-No" type="radio" name="projectors" value="No" required />
                                            <label for="Projector-No">No</label>
                                        </div>
                                    </div>
                                
                                    <div class="col-half">
                                        <h4>Speakers</h4>
                                        <div class="input-group">
                                        <input id="Speakers-Yes" type="radio" name="speakers" value="Yes" required/>
                                        <label for="Speakers-Yes">Yes</label>
                                        <input id="Speakers-No" type="radio" name="speakers" value="No" required/>
                                        <label for="Speakers-No">No</label>
                                        </div>
                                    </div>
                                </div>
                                <br>                        
                                <div>                                    
                                    <center><input type="submit" value="Apply" class="submit" name="submit"></center>                                    
                                </div>                                
                            </form>                  
                        </div>
                    </div>
                <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div>
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; BIT 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
                
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="log.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
