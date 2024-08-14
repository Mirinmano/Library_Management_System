<!DOCTYPE html>
 <html class="no-js">
    <head>
        <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="icon.ico">
        <title>Remove Book</title>
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
                            <li><a href='booklist.php?dep=$dep'>Book list</a></li>
                            <li><a href='addbook.php?dep=$dep'>Add book</a></li>
                            <li class='active'><a href='#'>Remove book</a></li>
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
                    <div class="section-header col-md-12">
                        <h2>Enter the Book details:</h2><br>
                        <SPAN>Enter the book id and click "Search" to get the book details.</SPAN><br>
                        <span>Once the book details has been verified click "Remove" to remove the book from the database</SPAN>
                    </div> 
                </div> 
                <div class="contact-form">
                    <div class="box-content col-md-12">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="contact-form-inner"><?php
                                $dep=$_GET["dep"];
                                    echo"<form method='post' action='search.php?dep=$dep' name='contactform' id='contactform'>
                                       
                                        <p>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <label for='name'>Book ID:</label>
                                            <input name='bookid' type='text' id='name'>
                                        </p>
                                        <br>
                                        <input type='submit' class='mainBtn' id='submit' value='Search' /><br><br><br><br><br>
                                    </form>";
                                    ?>
                                </div>
                                <div id="message"></div>
                            </div> 
                            <div class="col-md-5">
                                <H2>BOOK DETAILS:</H2>
                                <div class="googlemap-wrapper">
                                    <h2>_________BOOK ID_________</h2><P>WILL BE DISPLAYED HERE:</P><BR>
                                    <h2>_________BOOK NAME_________</h2><P> WILL BE DISPLAYED HERE:</P><BR>
                                        <h2>_________AUTHOR'S NAME_________</h2><P> WILL BE DISPLAYED HERE:</P><BR>
                                        <h2>_________YEAR OF PUBLICATION_________</h2><P> WILL BE DISPLAYED HERE:</P><BR>
                                        <h2>_________PRICE_________</h2><P> WILL BE DISPLAYED HERE:</P>
                                </div>
                                
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div>
        </div>
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script> 
        <script type="text/javascript">
         
            $(window).load(function() {
                $('.loader-item').fadeOut(); 
                    $('#pageloader').delay(350).fadeOut('slow'); 
                $('body').delay(350).css({'overflow-y':'visible'});
            })
          
        </script>

    </body>
</html>
