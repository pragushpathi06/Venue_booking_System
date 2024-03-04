<?php 
session_start(); 

$event=$_POST['event'];
$facultyid=$_POST['facultyid'];
$preference=$_POST['preference'];
$fromtime=$_POST['fromtime'];
$totime=$_POST['totime'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$conn = new mysqli('localhost','root','','bit');
echo  $_SESSION['Classroom_no'];

//echo json_encode($row);
$stmt = $conn->prepare("insert into info(Classroom_no,Block,Floor,preference, need, capacity, projectors, speakers, fromdate, todate, fromtime, totime, facultyid) values(?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)");
$stmt->bind_param("sssssisssssss",$_SESSION['Classroom_no'],$_SESSION['Block'],$_SESSION['Floor'], $preference,$event,$_SESSION['Capacity'],$_SESSION['Projectors'],$_SESSION['Speakers'],$fromdate,$todate,$fromtime,$totime,$facultyid);
$execval = $stmt->execute();

echo '<script>
    window.location.href = "requests-in.php";
    </script>';


$stmt->close();





?>