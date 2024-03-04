
<?php
session_start();
$preference = $_POST['preference'];
$need = $_POST['need'];
$capacity=$_POST['capacity'];
$projectors=$_POST['projectors'];
$speakers=$_POST['speakers'];
$fromdate = $_POST['fromdate'];
$todate = $_POST['todate'];
$fromtime = $_POST['fromtime'];
$totime = $_POST['totime'];
$facultyid = $_POST['facultyid'];
// $preference = $_SESSION['preference'];
// $need = $_SESSION['need'];
// $capacity=$_SESSION['capacity'];
// $projectors=$_SESSION['projectors'];
// $speakers=$_SESSION['speakers'];
// $fromdate = $_SESSION['fromdate'];
// $todate = $_SESSION['todate'];
// $fromtime = $_SESSION['fromtime'];
// $totime = $_SESSION['totime'];
// $facultyid = $_SESSION['facultyid'];
echo $preference."<br>".$need."<br>".$capacity."<br>".$projectors."<br>".$speakers."<br>".$fromdate."<br>".$todate."<br>".$fromtime."<br>".$totime."<br>".$facultyid."<br>";
$conn = new mysqli('localhost','root','','bit');
if($conn->connect_error){

    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} 
else{
    $check="SELECT * from info";
    $result = $conn->query($check);
    $sql="SELECT * FROM classroom_details WHERE Hall_type='".$preference."' AND Capacity>=".$capacity." AND Projectors='".$projectors."' AND Speakers='".$speakers."'";
    $result1= $conn->query($sql);
    $get=array();
    $get1=array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {                                    
            if(($fromdate>=$row['fromdate'] && $fromdate<=$row['todate']) || ($todate>=$row['fromdate'] && $todate<=$row['todate'])){
                if(($fromtime>=$row['fromtime'] && $fromtime<=$row['totime']) || ($totime>=$row['fromtime'] && $totime<=$row['totime'])){
                    if($row['Availability']=='Booked'){
                        continue;
                        // echo $row['facultyid'].' : '.$row['Classroom_no'].'; ';
                        // echo"Slot overlapping<br>";
                        
                    }
                    else{
                        
                        array_push($get,$row['Classroom_no']);
                        //  echo $row['facultyid'].' : '.$row['Classroom_no'].'; ';
                        // echo"Slot is fine with booking<br>";
                        
                    }
                }
                else{
                    array_push($get,$row['Classroom_no']);
                    //  echo $row['facultyid'].' : '.$row['Classroom_no'].'; ';
                    // echo"Slot is fine with timing<br>";
                   
                }
                
            }
            
            else{
                array_push($get,$row['Classroom_no']);
                // echo $row['facultyid'].' : '.$row['Classroom_no'].'; ';
                // echo"Slot is fine<br>";
                
            }
            
        }
    }
    
    if ($result1->num_rows > 0) {
        while($row1 = $result1->fetch_assoc()){
            array_push($get1,$row1["Classroom_no"]);       
        }
    }
    echo json_encode($get);
    echo json_encode($get1);

    if ($result1->num_rows > 0) {
        while($row = $result1->fetch_assoc()) {                                             
            echo  "<br>Classroom_no: ".$row["Classroom_no"]."<br>Classroom number: ".$row["Classroom_no"]."<br>Block:  ".$row["Block"]."<br>Floor: ".$row["Floor"];
        }
    }

    echo "<form><select>
        <option value=' ' disabled selected hidden>SELECT ANY FROM THE LISTED VENUES</option>
        <option>Check1</option>
        <option>Check2</option>
        <option>Check3</option>";
        if ($result1->num_rows > 0) {
            while($row = $result1->fetch_assoc()) {                                             
                echo  '<option value="'.$row["Classroom_no"].'">Classroom number: '.$row["Classroom_no"].' , Block:  '.$row["Block"].' , Floor: '.$row["Floor"].'</option>' ;
            }
        }
                                            
    echo "</select> </form> ";

}

?>
<!-- <form>
    <select>
        <option value=" " disabled selected hidden>SELECT ANY FROM THE LISTED VENUES</option>
        <!?php
            // for ($i=0 ;$i<=count($get); $i++){
            //     for($j=0 ;$j<=count($get1); $j++){
            //         if ($get[$i]==$get1[$j]){
            //             continue;
            //         }
            //         else{
            //             $sql3="SELECT * FROM classroom_details WHERE Hall_type='".$preference."' AND Capacity>=".$capacity." AND Projectors='".$projectors."' AND Speakers='".$speakers."'";
            //             $result3=$conn->query();
            //             if ($result3->num_rows > 0) {
            //                 while($row = $result3->fetch_assoc()) {                                             
            //                     echo  '<option value="'.$row["Classroom_no"].'">Classroom number: '.$row["Classroom_no"].' , Block:  '.$row["Block"].' , Floor: '.$row["Floor"].'</option>' ;
            //                 }
            //             }
            //         }
            //     }
            // }
            $sql3="SELECT * FROM classroom_details WHERE Hall_type='".$preference."' AND Capacity>=".$capacity." AND Projectors='".$projectors."' AND Speakers='".$speakers."'";
                        $result3=$conn->query();
                        if ($result3->num_rows > 0) {
                            while($row = $result3->fetch_assoc()) {                                             
                                echo  '<option value="'.$row["Classroom_no"].'">Classroom number: '.$row["Classroom_no"].' , Block:  '.$row["Block"].' , Floor: '.$row["Floor"].'</option>' ;
                            }
                        }
        ?-->
    <!--/select>
</form> -->