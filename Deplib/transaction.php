<?php
$host="127.0.0.1";
$port=3307;
$socket="";
$user="root";
$password="dep_lib";
$dbname="dep_lib";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $bookId=($_POST['bookid']);
  $STNAME = ($_POST['stname']);
  $STNO = ($_POST['stno']);
}
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
    $s2="-book_list";
    $tab1.=$s2;

$sql = "SELECT * from `$tab1`";
$result = $conn->query($sql);
$flag=0;
if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["ID"]==$bookId && $row["in/out"]==1){
        $id=$row["ID"];
        $BNAME=$row["BOOKNAME"];
        $flag=1;
        
$mysql = "INSERT INTO `$tab2`(BOOKID,BOOKNAME,NAME,ROLLNO) VALUES (  '$id' , '$BNAME' , '$STNAME' , '$STNO' );";
$mysql .= "UPDATE `$tab1` SET `in/out`=0 WHERE ID = '$bookId';";
if ($conn->multi_query($mysql) === TRUE) {
  
  echo "<script>alert('RECORD CREATED SUCCESSFULLY');</script>";
  echo "<script>window.location.replace('bookissue.php?dep=$dep');</script>";
} else {
  echo "Error: " . $mysql . "<br>" . $conn->error;
}
        }
    }
} 
if ($flag==0){
    echo "<script>alert('!...INVALID ID...!');
    window.location.replace('bookissue.php?dep=$dep')</script>";
}


$conn->close();
