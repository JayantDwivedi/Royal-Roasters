<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Royal Roasters</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!-- <link href="css/business-casual.css" rel="stylesheet"> -->

    <link href="css/index.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="row header-sec">
        <div class="col-lg-2 col-md-6">
            <div class="logo">
                <img src="img/logo.PNG" class="img-logo" alt="logo">
            </div>
        </div>
        <div class="col-lg-10 col-md-6">
            <div class="brand comp-name">Royal Roasters</div>
            <div class="address-bar">Balaji Puram | Ashram Road | Mainpuri 205001</div>
        </div>
    </div>

    <?php

    if (isset($_GET["logout"])) {

        if ($_GET["logout"] == "true") { ?>

            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>You have been logged out of the system.</strong>
            </div>

    <?php
        }
    }
    ?>


    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/ismael-trevino-e4eVrCnkA6M-unsplash.jpg" alt="coffee carousel img 1">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/louis-hansel-shotsoflouis-Unz1DfQUUuQ-unsplash.jpg" alt="coffee carousel img 2">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/enis-yavuz-STG2uXKqvmE-unsplash.jpg" alt="coffee carousel img 3">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small class="small-txt">Welcome to</small>
                    </h2>
                    <h1 class="brand-name comp-name">Royal Roasters</h1>
                    <hr class="tagline-divider" color="white">
                    <h2>
                        <small class="small-txt">By
                            <strong>Jayant</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center small-txt">HOW TO MAKE
                        <strong class="small-txt">Bold Brew Cup of Coffee</strong>
                    </h2>
                    <hr>
                    <img style="border: 2px solid #6e481a;" class="img-responsive img-border img-left" src="img/mike-kenneally-tNALoIZhqVM-unsplash (1).jpg" alt="">
                    <hr class="visible-xs">
                    <p>Making the perfect cup of coffee can be challenging! With so many unique flavours and recipes to choose from, where do you begin? Our website provides you with the best recipes from around the world. Whether you prefer your coffee hot and mild or bracingly cold and strong - we are sure to have what you are looking for. For access to unlimited recipes you must register! Registration is free.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Made with &#10084; by Jayant</p>
                    <div class="icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                    <p>Copyright &copy; <em> Royal Roasters</em> 2020</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 3000 //changes the speed miliseconds
        })
    </script>

</body>

</html>