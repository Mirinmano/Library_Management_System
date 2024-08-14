<?php
$host="127.0.0.1";
$port=3307;
$socket="";
$user="root";
$password="dep_lib";
$dbname="dep_lib";

$bookId=$_GET["var1"];
$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('Could not connect to the database server' . mysqli_connect_error());


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$dep=$_GET["dep"];
    $s1="-transaction";
    $tab2=$dep;
    $tab2.=$s1;
    $tab1=$dep;
    $dep1.="-book_list";
$sql = "SELECT * from `$tab2`";
$result = $conn->query($sql);
$flag=0;
if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["BOOKID"]==$bookId && $row["SUBMISSION_DATE"]==null){
        $flag= 1;

        $dt=date("Y-m-d");
$mysql = "UPDATE `$tab2` SET `SUBMISSION_DATE`='$dt' WHERE BOOKID = '$bookId';";
$mysql .= "UPDATE `$tab1` SET `in/out`=1 WHERE ID = '$bookId';";
if ($conn->multi_query($mysql) === TRUE) {
  
  echo "<script>alert('RETURNED SUCCESSFULLY');</script>";
  echo "<script>window.location.replace('BOOKRETURN.php?dep=$dep');</script>";
} else {
  echo "Error: " . $mysql . "<br>" . $conn->error;
}
        }
    }
} 
if ($flag==0){
    echo "<script>alert('!...INVALID ID...!');
    window.location.replace('searchbook.php?dep=$dep')</script>";
}


$conn->close();
