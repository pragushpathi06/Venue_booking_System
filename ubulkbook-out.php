<?php

$conn = mysqli_connect("localhost","root","","bit");

if(isset($_POST["import"])){
    $fileName = $_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"] > 0){
        $file = fopen($fileName, "r");

        while(($column = fgetcsv($file, 1000, ","))!==FALSE){
            $sqlInsert = "Insert into info (Classroom_no,Block,Floor,preference, need, capacity, projectors, speakers, fromdate, todate, fromtime, totime, facultyid,Availability) values('" .$column[1] ."', '" .$column[2] ."', '" .$column[3] ."', '" .$column[4] ."' , '" .$column[5] ."' , '" .$column[6] ."' , '" .$column[7] ."', '" .$column[8] ."', '" .$column[9] ."', '" .$column[10] ."', '" .$column[11] ."', '" .$column[12] ."', '" .$column[13] ."','Booked')";
            $result = mysqli_query($conn , $sqlInsert);

            
        }
    }
}
$sql2='DELETE FROM info WHERE s_no="s_no" ';
$conn->query($sql2);

echo '<script>alert("Data inserted")</script>';
echo '<script>
    window.location.href = "urequests-in.php";
    </script>';

?>

        
    




