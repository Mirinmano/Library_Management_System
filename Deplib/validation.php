
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Username =($_POST["USERNAME"]);
  $Password =($_POST["PASSWORD"]);
}


$sql = "SELECT UN, PW, dep FROM `Dep_login_data`";
$result = $conn->query($sql);
$flag=0;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($Username == $row["UN"] and $Password == $row["PW"])
    {
      $dep=$row["dep"];
        echo "<script> window.location.replace('homepage.php?dep=$dep')</script>";
        $flag=1;
    }
  }
} 
if($flag!=1){
 
    echo '<script type="text/javascript">';
echo ' alert("Invalid username or password")';  //not showing an alert box.
echo '</script>';
echo "<script> window.location.replace('home.html')</script>";
}
$conn->close();
?>
  </body>
</html>