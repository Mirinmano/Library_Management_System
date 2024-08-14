<!DOCTYPE html>
 <html class="no-js">
    <head>
        <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="icon.ico">
        <title>BOOKLIST</title>
        <style>
            #box-style {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
              }
              
              #box-style td, #box-style th {
                border: 1px solid #ddddddcf;
                padding: 8px;
              }
              
              #box-style tr:nth-child(even){background-color: #E0F4FF;}
              
              #box-style tr:hover {background-color: #A9B388;}
              
              #box-style th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #d75a3a;
                color: white;
              }
        </style>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,300,500,500italic,700,900">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo-misc.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="icon" type="image/x-icon" href="icon.png">
        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <section id="pageloader">
            <div class="loader-item fa fa-spin colored-border"></div>
        </section> 
        <header class="site-header container-fluid">
            <div class="top-header">
                <div class="logo col-md-6 col-sm-6">
                    <img src="images/karpagam logo.png" style="width: 30%;height: 30%; ">
                </div>
            </div> 
            <div class="main-header">
                <div class="row">
                    <div class="main-header-left col-md-3 col-sm-6 col-xs-8">
                    </div>
                    <div class="menu-wrapper col-md-9 col-sm-6 col-xs-4">
                        <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a><?php
                        $dep=$_GET["dep"];
                        echo"<ul class='sf-menu hidden-xs hidden-sm'>
                            <li><a href='homepage.php?dep=$dep'>Home</a></li>
                            <li><a href='bookissue.php?dep=$dep'>Book issue</a></li>
                            <li><a href='BOOKRETURN.php?dep=$dep'>Book return</a></li>
                            <li class='active'><a href='#'>Book list</a></li>
                            <li><a href='addbook.php?dep=$dep'>Add book</a></li>
                            <li><a href='remove book.php?dep=$dep'>Remove book</a></li>
                            <li><a href='report.php?dep=$dep'>Book Report</a></li>
                        </ul>";
                        ?>
                    </div> 
                </div> 
            </div> 
            <?php
                 $dep=$_GET["dep"];
            echo"<div id='responsive-menu'>
                <ul>
                    <li><a href='bookissue.php?dep=$dep'>Book issue</a></li>
                    <li><a href='BOOKRETURN.php?dep=$dep'>Book return</a></li>
                    <li><a href='booklist.php?dep=$dep'>Book list</a></li>
                    <li><a href='addbook.php?dep=$dep'>Add book</a></li>
                    <li><a href='remove book.php?dep=$dep'>Remove book</a></li>
                    <li><a href='report.php?dep=$dep'>Book Report</a></li>
                </ul>
            </div>";
            ?>
        </header>

        <div class="content-wrapper">
            <div class="inner-container container">
                <div class="row">
                    <div class="section-header col-md-12" style="float: right;" >
                    <?php
                    $dep=$_GET["dep"];
                        echo"<h2>$dep</h2><H2> DEPARTMENT BOOK LIST:</h2>";
                        ?>
                        <BR>
                        <div>
                        <center>
                            <?php 
    $host="127.0.0.1";
    $port=3307;
    $socket="";
    $user="root";
    $password="dep_lib";
    $dbname="dep_lib";
    
    $mysqli = new mysqli($host, $user, $password, $dbname, $port, $socket)
        or die ('Could not connect to the database server' . mysqli_connect_error());
    
    //$con->close();
    $dep=$_GET["dep"];
    $s1="-book_list";
   $tab=$dep;
   $tab.=$s1;
$query = "SELECT * FROM `$tab` ORDER BY ID";


echo '<table id="box-style" > 
      <tr> 
          <th> <font face="Arial">S.no</font> </th> 
          <th> <font face="Arial">BOOKNAME</font> </th> 
          <th> <font face="Arial">ID</font> </th> 
          <th> <font face="Arial">AUTHORNAME</font> </th> 
          <th> <font face="Arial">PRICE</font> </th> 
          <th> <font face="Arial">YEAR</font> </th>
      </tr>';
      $field1name = 1;
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
       
        $field2name = $row["BOOKNAME"];
        $field3name = $row["ID"];
        $field4name = $row["AUTHORNAME"];
        $field5name = $row["PRICE"];
        $field6name = $row["YEAR"];

        echo '<tr> 
                  <td>'.$field1name++.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td>
                  <td>'.$field6name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
                        </center>
                        </div>
                    </div> 
                </div>  
            </div>
        </div>
        
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.loader-item').fadeOut(); 
                    $('#pageloader').delay(350).fadeOut('slow'); 
                $('body').delay(350).css({'overflow-y':'visible'});
            })   
        </script>
    </body>
</html>
