
<?php
session_start();

$_SESSION['selectedvenue']=$_POST['selectedvenue'];
$conn = new mysqli('localhost','root','','bit');
$sql="SELECT Block , Floor From classroom_details WHERE Classroom_no='".$_SESSION['selectedvenue']."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//echo json_encode($row);
$stmt = $conn->prepare("insert into emergency_venue_booking(Classroom_no,Block,Floor, fromdate, todate, fromtime, totime, facultyid) values(?,?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssisssss",$_SESSION['selectedvenue'],$row['Block'],$row['Floor'],$_SESSION['fromdate'],$_SESSION['todate'],$_SESSION['fromtime'],$_SESSION['totime'],$_SESSION['facultyid']);
$execval = $stmt->execute();

echo '<script>
    window.location.href = "emergency-in.php";
    </script>';


$stmt->close();



?>