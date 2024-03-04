<?php
$facultyid=$_POST['facultyid'];
$Classroom_no=$_POST['Classroom_no'];
$Complaint=$_POST['Complaint'];

$conn = new mysqli('localhost','root','','bit');

$stmt = $conn->prepare("insert into complaints(facultyid,Classroom_no,complaint) values(?,?,?)");
$stmt->bind_param("sss",$facultyid,$Classroom_no,$Complaint);
$execval = $stmt->execute();
echo '<script>alert("values inserted")
    window.location.href = "complaints-in.php";
    </script>';


$stmt->close();



?>