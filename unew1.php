<?php
$conn = new mysqli('localhost','root','','bit');
$sql1='SELECT COUNT(DISTINCT Classroom_no) as cblock FROM info WHERE Block LIKE "%AS%"';
$sql2='SELECT COUNT(DISTINCT Classroom_no) as cblock FROM info WHERE Block LIKE "%IB%"';
$sql3='SELECT COUNT(DISTINCT Classroom_no) as cblock FROM info WHERE Block LIKE "%Sun%"';
$sql4='SELECT COUNT(DISTINCT Classroom_no) as cblock FROM info WHERE Block LIKE "%Mech%"';
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

$r1=round(($get1/47)*100);
$r2=round(($get2/42)*100);
$r3=round(($get3/11)*100);
$r4=round(($get4/16)*100);
settype($get1, "integer");
settype($get2, "integer");
settype($get3, "integer");
settype($get4, "integer");
echo $r1." ".gettype($get1)."<br>";
echo $r2." ".gettype($get2)."<br>";
echo $r3." ".gettype($get3)."<br>";
echo $r4." ".gettype($get4)."<br>";
?>