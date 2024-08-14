<!DOCTYPE html>
 <html class="no-js">
    <head>
        <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="icon.ico">
        <title>HOMEPAGE</title>
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
                </div><br>
                <button style="float: right; margin-right: 50px;" ><A href="home.html">LOGOUT</A></button>
            </div>
            <div class="main-header">
                <div class="row">
                    <div class="main-header-left col-md-3 col-sm-6 col-xs-8">
                    </div>
                    <div class='menu-wrapper col-md-9 col-sm-6 col-xs-4'>
                        <a href='#' class='toggle-menu visible-sm visible-xs'><i class='fa fa-bars'></i></a><?php
                        $dep=$_GET["dep"];
                        echo"<ul class='sf-menu hidden-xs hidden-sm'>
                            <li class='active'><a href='homepage.php?dep=$dep'>Home</a></li>
                            <li><a href='bookissue.php?dep=$dep'>Book issue</a></li>
                            <li><a href='BOOKRETURN.php?dep=$dep'>Book return</a></li>
                            <li><a href='booklist.php?dep=$dep'>Book list</a></li>
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
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url(images/login.jpg);">
                    <div class="overlay-s"></div>
                    <div class="slider-caption">
                        <div class="inner-content">
                            <?php
                                $dep=$_GET["dep"];
                                if($dep== "CY"){
                                    $d = "COMPUTER SCIENCE AND ENGINEERING (CYBER SECURITY)";
                                }
                                elseif($dep== "CS"){
                                    $d = "COMPUTER SCIENCE AND ENGINEERING";
                                }
                                elseif($dep== "CT"){
                                    $d = "COMPUTER SCIENCE AND TECHNOLOGY";
                                }
                                elseif($dep== "CD"){
                                    $d = "COMPUTER SCIENCE AND DESIGNING";
                                }
                                elseif($dep== "AI"){
                                    $d = "ARTIFICIAL INTELLIGENCE AND DATA SCIENCE";
                                }
                                elseif($dep== "CD"){
                                    $d = "COMPUTER SCIENCE AND DESIGN";
                                }
                                elseif($dep== "CIVIL"){
                                    $d = "CIVIL ENGINEERING";
                                }
                                elseif($dep== "MECH"){
                                    $d = "MECHANICAL ENGINEERING";
                                }
                                elseif($dep== "IT"){
                                    $d = "INFORMATION TECHNOLOGY";
                                }
                                elseif($dep== "EE"){
                                    $d = "ELECTRICAL AND ELECTRONICS ENGINEERING";
                                }
                                elseif($dep== "EC"){
                                    $d = "ELECTRONICS AND COMMUNICATION ENGINEERING";
                                }
                                elseif($dep== "ET"){
                                    $d = "ELECTRONICS AND TELECOMMUNICATION ENGINEERING";
                                }
                                echo"<center><h2> $d</h2><h2> DEPARTMENT LIBRARY</h2></center>"; 
                            ?>
                            <h2 id="mess"></h2>
                            <p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript">
            $(window).load(function() { 
                $('.loader-item').fadeOut(); 
                    $('#pageloader').delay(350).fadeOut('slow'); 
                $('body').delay(350).css({'overflow-y':'visible'});
            })
        </script>
        
    </body>
</html>
