<?php
 $host="127.0.0.1";
 $port=3307;
 $socket="";
 $user="root";
 $password="dep_lib";
 $dbname="dep_lib";
 
 $conn = new mysqli($host, $user, $password, $dbname, $port, $socket);
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 $bookId=($_GET["variable1"]);
 $dep=$_GET["dep"];
    $s1="-book_list";
    $tab=$dep;
    $tab.=$s1;
// sql to delete a record
$sql = "DELETE FROM `$tab` WHERE ID='$bookId'";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Record deleted successfully');</script>";
  echo "<script>window.location.replace('remove book.php?dep=$dep');</script>";
} else {
  echo "<script>alert('Error deleting record:  . $conn->error');</script>";
}

$conn->close();


