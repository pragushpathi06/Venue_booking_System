<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <style>
    .info {
        color: dodgerblue;
        border-style: solid;
        }
    </style>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
      

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <?php
    session_start();
    ?>
    

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
            </a>
                <br><br>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
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

            
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage"
                    aria-expanded="true" aria-controls="collapsePage">
                    <img src="booking.png" width="20px" height="20px">
                    <b><span>BOOKING</span></b>
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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-0 static-top shadow">

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
                <div class="container-fluid">
                    <br>
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-primary">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                          <a href="as.php">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-2xl font-weight-bold text-danger text-uppercase mb-1">
                                                AS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="undraw_feeling_proud_qne1.svg" width="70px" height="70px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                        <a href="ib.php">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-2xl font-weight-bold text-success text-uppercase mb-1">IB
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                                </div>
                                                <div class="col">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="IB.svg" width="70px" height="70px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </a>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="sf.php">
                              <div class="card border-left-warning shadow h-100 py-2">
                                  <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">
                                              <div class="text-2xl font-weight-bold text-warning text-uppercase mb-1">
                                                  SUNFLOWER</div>
                                              <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                          </div>
                                          <div class="col-auto">
                                              <img src="SUNFLOWER.svg" width="70px" height="70px">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </a>
                        </div>
                        
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                          <a href="mech.php">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-2xl font-weight-bold text-dark text-uppercase mb-1">
                                                MECHANICAL</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="Gear-PNG-Download-Image.png" width="70px" height="70px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </a>
                    </div>

                    <!-- Content Row -->
                    
     
                         <!-- Content Row -->
                        <?php
                            $conn = new mysqli('localhost','root','','bit');                   
                            $sql1='SELECT COUNT(DISTINCT Classroom_no) as cblock FROM info WHERE Block LIKE "%AS%" AND Availability="Booked"';
                            $sql2='SELECT COUNT(DISTINCT Classroom_no) as cblock FROM info WHERE Block LIKE "%IB%" AND Availability="Booked"';
                            $sql3='SELECT COUNT(DISTINCT Classroom_no) as cblock FROM info WHERE Block LIKE "%Sun%" AND Availability="Booked"';
                            $sql4='SELECT COUNT(DISTINCT Classroom_no) as cblock FROM info WHERE Block LIKE "%Mech%" AND Availability="Booked"';
                            $result1=$conn->query($sql1);
                            $result2=$conn->query($sql2);
                            $result3=$conn->query($sql3);
                            $result4=$conn->query($sql4);
                            if ($result1->num_rows > 0) {
                                while($row1 = $result1->fetch_assoc()){
                                    $get1=$row1["cblock"];       
                                }
                            }
                            if ($result2->num_rows > 0) {
                                while($row1 = $result2->fetch_assoc()){
                                    $get2=$row1["cblock"];    
                                }
                            }
                            if ($result3->num_rows > 0) {
                                while($row1 = $result3->fetch_assoc()){
                                    $get3=$row1["cblock"];    
                                }
                            }
                            if ($result4->num_rows > 0) {
                                while($row1 = $result4->fetch_assoc()){
                                    $get4=$row1["cblock"];    
                                }
                            }
                            settype($get1, "integer");
                            settype($get2, "integer");
                            settype($get3, "integer");
                            settype($get4, "integer");
                            $r1=round(($get1/47)*100);
                            $r2=round(($get2/42)*100);
                            $r3=round(($get3/11)*100);
                            $r4=round(($get4/16)*100);
                            echo '<!-- Content Row -->
                            <div class="row">
     
                             <!-- Content Column -->
                             <div class="col-lg-8 mb-4">
     
                                 <!-- Project Card Example -->
                                 <div class="card shadow mb-4">
                                     <div class="card-header py-3">
                                         <h6 class="m-0 font-weight-bold text-primary">BLOCK WISE ALLOTMENT</h6>
                                     </div>
                                     <div class="card-body">
                                         <h4 class="small font-weight-bold">AS BLOCK <span
                                                 class="float-right">'.$r1.'%</span></h4>
                                         <div class="progress mb-4">
                                             <div class="progress-bar bg-danger" role="progressbar" style="width: '.$r1.'%"
                                                 aria-valuenow="'.$r2.'" aria-valuemin="0" aria-valuemax="100"></div>
                                         </div>
                                         <h4 class="small font-weight-bold">IB BLOCK <span
                                                 class="float-right">'.$r2.'%</span></h4>
                                         <div class="progress mb-4">
                                             <div class="progress-bar bg-success" role="progressbar" style="width: '.$r2.'%"
                                                 aria-valuenow="'.$r3.'" aria-valuemin="0" aria-valuemax="100"></div>
                                         </div>
                                         <h4 class="small font-weight-bold">SF BLOCK <span
                                                 class="float-right">'.$r3.'%</span></h4>
                                         <div class="progress mb-4">
                                             <div class="progress-bar bg-warning" role="progressbar" style="width: '.$r3.'%"
                                                 aria-valuenow="'.$r4.'" aria-valuemin="0" aria-valuemax="100"></div>
                                         </div>
                                         <h4 class="small font-weight-bold">MECHANICAL BLOCK <span
                                                 class="float-right">'.$r4.'%</span></h4>
                                         <div class="progress mb-4">
                                             <div class="progress-bar bg-dark" role="progressbar" style="width: '.$r4.'%"
                                                 aria-valuenow="'.$r3.'" aria-valuemin="0" aria-valuemax="100"></div>
                                         </div>
                                         
                                     </div>
                                 </div>';
                        ?>
                             </div>
                             <div class="col-xl-3 col-md-6 mb-4">
                                 <div class="card border-left-info shadow h-95 py-2">
                                     <div class="card-body">
                                         <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                     Active complaints
                                                </div>
                                                 
                                             </div>
                                             
                                             <div class="col-auto">
                                                 <i class="fas fa-comments fa-2x text-gray-300"></i>
                                             </div>
                                         </div>

                                         <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <p style="font-size: 150px;">
                                                <?php
                                                // Database connection
                                                $conn = new mysqli('localhost','root','','bit');
                                                $sql = "SELECT COUNT(`status`) as activecount FROM complaints WHERE status='Active'";
                                                $result = $conn->query($sql);
                                                while($row = $result->fetch_assoc()){
                                                    echo"".$row["activecount"]."";
                                                }
                                                ?>
                                            </p>
                                        </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-xl-3 col-md-6 mb-4">
                                 <div class="card border-left-info shadow h-95 py-2">
                                     <div class="card-body">
                                         <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                     Pending Requests
                                                </div>
                                                 
                                             </div>
                                             
                                             <div class="col-auto">
                                                 <i class="fas fa-comments fa-2x text-gray-300"></i>
                                             </div>
                                         </div>

                                         <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <p style="font-size: 150px;">
                                                <?php
                                                // Database connection
                                                $conn = new mysqli('localhost','root','','bit');
                                                $sql1 = "SELECT COUNT(`Availability`) as activecount FROM info WHERE Availability='Initiated'";
                                                $result1 = $conn->query($sql1);
                                                while($row = $result1->fetch_assoc()){
                                                    echo"".$row["activecount"]."";
                                                }
                                                ?>
                                            </p>
                                        </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                    <!-- Content Row -->
                   
                    <!-- Footer -->
           <br><br><br><br><br><br>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
        <footer class="sticky-footer static bg-white">
            <div>
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; BIT 2023</span>
                </div>
            </div>
        </footer>
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
    <script type="text/javascript">
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"147fd4f71030e87db3f633ca51151e873","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>


</body>

</html>
