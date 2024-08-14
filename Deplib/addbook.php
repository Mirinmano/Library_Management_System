<!DOCTYPE html>
 <html class="no-js">
    <head>
        <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="icon.ico">
        <title>Add book</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,300,500,500italic,700,900">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo-misc.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script>
            function htmlEncode(value) {
            return $('<div/>').text(value)
                .html();
            }
        
            $(function () {
            $('#generate').click(function () {
                let finalURL =
        'https://chart.googleapis.com/chart?cht=qr&chl=' +
                htmlEncode($('#qr').val()) +
                '&chs=160x160&chld=L|0'
                $('.qr-code').attr('src', finalURL);
                htmlEncode($('#qr').val()) +
                '&chs=160x160&chld=L|0'
                $('.qr-code').attr('href', finalURL);
            });
            });
        </script>
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
                            <li class='active'><a href='#'>Add book</a></li>
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
                    <div class="section-header col-md-12">
                        <h2>Enter the Book details:</h2><br>
                        <SPAN>Enter the given book details and click "GENERATE QR CODE" to generate the qr code.</SPAN><br>
                        <span>left click the code to download it. Then click "Submit" button.</SPAN>
                    </div> 
                </div> 
                <div class="contact-form">
                    <div class="box-content col-md-12">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="contact-form-inner">
                                    <?php
                                     $dep=$_GET["dep"];
                                    echo"<form method='post' action='INSERT.php?dep=$dep' name='contactform' id='contactform'>
                                        <p>
                                            <label for='ID'>Book ID:</label>
                                            <input name='ID' type='text' id='qr' required>
                                        </p>
                                        <p>
                                            <label for='BNAME'>Book Name:</label>
                                            <input name='BNAME' type='text' id='bookname' required>
                                        </p>
                                        <p>
                                            <label for='ANAME'>Author Name:</label>
                                            <input name='ANAME' type='text' id='authorname' required>
                                        </p>
                                        <p>
                                            <label for='YEAR'>Year of Publication:</label>
                                            <input name='YEAR' type='text' id='YOP' required>
                                        </p>
                                        <p>
                                            <label for='PRICE'>Price:</label>
                                            <input name='PRICE' type='text' id='price' required>
                                        </p>
                                        <input type='submit' class='mainBtn' id='submit' value='Submit' />
                                    </form>";
                                    ?>
                                </div>
                                <div id="message"></div>
                            </div> 
                            <div class="col-md-5">
                                <H2>QR CODE:</H2>
                                <div class="googlemap-wrapper">
                                    <a href="" class="qr-code img-thumbnail img-responsive" download><img 
                                        class="qr-code img-thumbnail img-responsive" ></a>
                                        <button id="generate">GENERATE QR CODE</button>
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
