<?php
$host="127.0.0.1";
$port=3307;
$socket="";
$user="root";
$password="dep_lib";
$dbname="dep_lib";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('Could not connect to the database server' . mysqli_connect_error());
    $dep=$_GET["dep"];
    $s1="-book_list";
    $tab=$dep;
    $tab.=$s1;
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $bname = ($_POST['BNAME']);
  $id = ($_POST['ID']);
  $aname = ($_POST['ANAME']);
  $year = ($_POST['YEAR']);
  $price=($_POST['PRICE']);
}
$sql = "INSERT INTO `$tab`(BOOKNAME,ID,AUTHORNAME,YEAR,PRICE) VALUES (  '$bname' , '$id' , '$aname' , '$year' , '$price' );";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('RECORD CREATED SUCCESSFULLY');</script>";
  echo "<script>window.location.replace('addbook.php?dep=$dep');</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
