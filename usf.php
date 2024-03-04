<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blocks-SF</title>
<?php session_start(); ?>
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    
    <style>
    .popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
  }
  
  .popup-content {
    background-color: #4e73df;
    color:#fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  }
  
  .popup-content h2 {
    margin-top: 0;
  }
  
  .popup-content label {
    display: block;
    margin-bottom: 10px;
  }
  
  .popup-content input[type="text"],
  .popup-content input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  .popup-content input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .popup-content input[type="submit"]:hover {
    background-color: #3e8e41;
  }
  
  #closeBtn {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: #f44336;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
  }
  
  #closeBtn:hover {
    background-color: #d32f2f;
  }
</style>
</head>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://www.bitsathy.ac.in" target="_blank">
                <div class="sidebar-brand-icon">
                    <img src="https://upload.wikimedia.org/wikipedia/en/7/77/Bannari_Amman_Institute_of_Technology_logo.png" width="68px" height="68px">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="uindex2.php">
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
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <img src="buildings1.png" width="20px" height="20px">
                    <b><span>BLOCKS</span></b>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"><a href="usf.php">SUN FLOWER:</a></h6>
                        <a class="collapse-item" >IT</a>
                        <a class="collapse-item" >CSE</a>
                    </div>
                
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"><a href="uas.php">AS:</a></h6>
                        <a class="collapse-item" >TEXTILE</a>
                        <a class="collapse-item" >FOOD TECH</a>
                        <a class="collapse-item" >FASHION TECH</a>
                        <a class="collapse-item" >ECE</a>
                        <a class="collapse-item" >CIVIL</a>
                        <a class="collapse-item" >BIO MEDICAL</a>
                    </div>
                
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"><a href="uib.php">IB:</a></h6>
                        <a class="collapse-item" >AGRI</a>
                        <a class="collapse-item" >EIE</a>
                        <a class="collapse-item" >CT</a>
                        <a class="collapse-item" >AIDS</a>
                        <a class="collapse-item" >EEE</a>
                        <a class="collapse-item" >BIOTECH</a>
                    </div>
                
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"><a href="umech.php">MECH:</a></h6>
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
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage"
                    aria-expanded="true" aria-controls="collapsePage">
                    <img src="booking.png" width="20px" height="20px">
                    <b><span>Booking</span></b>
                </a>
                <div id="collapsePage" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header"><a href="urequests-out.php">Regular Booking</a></h6>
                    <h6 class="collapse-header"><a href="ubulkbook-out.html">Bulk Booking</a></h6>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="ucomplaints-out.html">
                <img src="report.png" width="20px" height="20px">
                    <b><span>Register Complaint</span></b>
                </a>
            </li>

            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="urequests-in.php">
                <img src="requests1.png" width="20px" height="20px">
                    <b><span>Requests</span></a></b>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="ucomplaints-in.php">
                <img src="complaint.png" width="20px" height="20px">
                    <b><span>Complaints List</span></b>
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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

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
                                
                                <div class="dropdown-divider"></div>
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
                <form action="ubook.php" method="POST">
                <div class="container-fluid">                       
                        
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">School Of Computing Venues</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <?php
                            // Database connection
                            $conn = new mysqli('localhost','root','','bit');
                            if($conn->connect_error){
                                echo "$conn->connect_error";
                                die("Connection Failed : ". $conn->connect_error);
                            } 
                            else {
                               
                                $sql = "SELECT * FROM classroom_details WHERE Block Like '%Sunflower%' ";
                                $result = $conn->query($sql); 
                            if ($result->num_rows > 0) {
                                echo'<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>';
                                    echo" <tr>
                                    <th>BLOCK</th>
                                    <th>FLOOR</th>
                                    <th>CLASSROOM NO</th>
                                    <th>HALL TYPE</th>
                                    <th>Computer Availability</th>
                                    <th>Speaker Availability</th>
                                    <th>Projector Availability</th>
                                    <th>Capacity</th> 
                                    <th>Book</th>     
                                    </tr>
                                    </thead>
                                    <tfoot>";
                                    echo" <tr>
                                    <th>BLOCK</th>
                                    <th>FLOOR</th>
                                    <th>CLASSROOM NO</th>
                                    <th>HALL TYPE</th>
                                    <th>Computer Availability</th>
                                    <th>Speaker Availability</th>
                                    <th>Projector Availability</th>
                                    <th>Capacity</th>  
                                    <th>Book</th>  
                                    </tr>
                                    </tfoot>
                                    <tbody>";
                                    $book="Book";
                                    while($row = $result->fetch_assoc()) {                                    
                                        echo "<tr> <td>". $row["Block"]."</td>" ;
                                        echo "<td>   " . $row["Floor"].  "</td>";
                                        echo "<td>    " . $row["Classroom_no"].  "</td>";
                                        echo "<td>    " . $row["Hall_type"].  "</td>";
                                        echo "<td>  " . $row["Computers"].  "</td>";
                                        echo "<td>  " . $row["Speakers"].  "</td>";
                                        echo "<td>   " . $row["Projectors"].  "</td>";
                                        echo "<td>  " . $row["Capacity"].  "</td>";
                                        echo "<td> 
                                        <button id='loginBtn' style='border:none;color:#858796;text-decoration: none;'>Book</button>

    <div class='popup'>
        <div class='popup-content'>
            <h2>Book </h2>
            <form>
                <label for='event'><b>Event</b></label>
    <input type='text' placeholder='Event' name='event' required>
 
    <label for='facultyid'><b>Facultyid</b></label>
    <input type='text' placeholder='Facultyid' name='facultyid' required>
    <label for='preference'><b>Preference</b></label>
    <input type='text' placeholder='Preference' name='preference' required>

    <label for='fromtime'><b>From Time</b></label>
    <input type='text' id='fromtime' name='fromtime' placeholder='HH:MM:SS'
    onfocus='(this.type='time')'' required>
    <label for='totime'><b>To Time</b></label>
    <input type='text' id='totime' name='totime' placeholder='HH:MM:SS'
    onfocus='(this.type='time')'' required>
    <label for='fromdate'><b>From Date</b></label>
    <input type='text' id='fromdate' name='fromdate' placeholder='YYYY/DD/MM/'
    onfocus='(this.type='date')'' required>

    <label for='todate'><b>From Date</b></label>
    <input type='text' id='todate' name='todate' placeholder='YYYY/DD/MM/'
    onfocus='(this.type='date')'' required>

                <input type='submit' value='Book'>
            </form>
            <button id='closeBtn'>Close</button>
        </div>
    </div>
                                        </td>";
                                        
                                       
                                        echo "</tr>";  
                                        $_SESSION['Block']= $row["Block"]; 
                                        $_SESSION['Floor']= $row["Floor"]; 
                                        $_SESSION['Classroom_no']= $row["Classroom_no"];                  
                                        $_SESSION['Hall_type']= $row["Hall_type"]; 
                                        $_SESSION['Computers']= $row["Computers"]; 
                                        $_SESSION['Speakers']= $row["Speakers"]; 
                                        $_SESSION['Projectors']= $row["Projectors"]; 
                                        $_SESSION['Capacity']= $row["Capacity"]; 
                                        }
                                    echo"</tbody>
                                </table>";}}
                            echo'</div> 
                        </div>
                    </div>';
                    ?>
                </div>
                                  
                <!-- /.container-fluid -->

            </div>
                                    </form>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="script.js"></script>
    <script>
        const loginBtn = document.getElementById('loginBtn');
        const popup = document.querySelector('.popup');
const closeBtn = document.getElementById('closeBtn');

loginBtn.addEventListener('click', () => {
  popup.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
  popup.style.display = 'none';
});

    </script>

</body>

</html>