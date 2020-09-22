<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Royal Roaster - Blog</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/blog.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

        <!-- Icons -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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

        <!-- Navigation -->
        <?php require_once 'nav.php'; ?>

        <div class="container">

            <div class="row">
                <div class="box">
                    <div class="col-lg-12">

                        <h2 class="text-center">Welcome
                            <?php echo $fname;
                            echo " ";
                            echo $lname;
                            ?>
                            - <a href="logout.php">Logout</a>
                        </h2>

                        <hr>
                        <h2 class="intro-text text-center">Royal Roasters
                            <strong>blog</strong>
                        </h2>
                        <hr>
                    </div>
                    <div class="col-lg-12 text-center">
                        <img class="img-responsive img-border img-full" src="img/mocha.jpg" alt="mocha">
                        <h2>Mocha
                            <br>
                            <small>JULY 9, 2020</small>
                        </h2>
                        <p>Coffee and chocolate-the inventor of mocha should be sainted.</p>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                        <hr>
                    </div>
                    <div class="col-lg-12 text-center">
                        <img class="img-responsive img-border img-full" src="img/latte.jpg" alt="latte">
                        <h2>Latte
                            <br>
                            <small>JULY 13, 2020</small>
                        </h2>
                        <p>Your friendship means a Latte to me</p>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                        <hr>
                    </div>
                    <div class="col-lg-12 text-center">
                        <img class="img-responsive img-border img-full" src="img/oreo-milk-shake.jpg" alt="Oreo milk shake">
                        <h2>Oreo Milk Shake
                            <br>
                            <small>JULY 18, 2020</small>
                        </h2>
                        <p>No need to Twist, Lick and Dunk Oreo. It's time to Drink Oreo.</p>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                        <hr>
                    </div>
                    <div class="col-lg-12 text-center">
                        <ul class="pager">
                            <li class="previous"><a href="blog.php">&larr; Older</a>
                            </li>
                            <!-- <li class="next"><a href="#">Newer &rarr;</a> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

        <!-- Modal 1 -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Mocha</h4>
                    </div>
                    <div class="modal-body">
                        <p>Happy Thursday! I’m going to keep things short today since I’m sure we’re all still recovering from Monday, and today’s recipe is such a simple delight that I don’t feel like it needs a ton of selling.
                            It’s chocolate and coffee. What more do you need to know?
                            That’s right. Before healthy January starts, I’m sharing one last quick and easy morning treat, my homemade mocha!
                        </p>
                        <br><br>
                        <h5>Ingridients</h5>
                        <ul>
                            <li>1 cup hot coffee</li>
                            <li><sup>1</sup>&frasl;<sub>4</sub> cup milk</li>
                            <li>1/2 cup warm coconut milk</li>
                            <li>1 tablespoon (5g) unsweetened cocoa powder</li>
                            <li>1 to 2 tablespoons (12g to 25g) granulated sugar </li>
                            <li>1 tablespoon heavy cream</li>
                        </ul>
                        <br>
                        <h5>Instructions</h5>
                        <ol>
                            <li>Combine all ingredients except the optional whipped cream in a mason jar.</li>
                            <li>Screw on lid and wrap top with the towel (in case your jar leaks). Give a few very good shakes, until everything is well-mixed and milk is foamy.</li>
                            <li>Pour into a mug and microwave for 30 seconds or until steaming. </li>
                            <li>Top with whipped cream if desired. Enjoy!</li>
                        </ol>
                        <br>
                        <h5>Nutrition</h5>
                        <p> Please note that the nutrition label provided is an estimate based on an online nutrition calculator. It will vary based on the specific ingredients you use.</p>
                        <!-- <br> -->
                        <p>Serving: 1 | Calories: 168 Kcal; | Carbohydrates: 5.5g | Fat: 11g | Sodium: 37.3mg | Sugar: 15.9g </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal 2 -->
        <div id="myModal2" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Latte</h4>
                    </div>
                    <div class="modal-body">
                        <p>We love our iced coffee in the summer, 
                            but fall and winter belong to the latte. 
                            We love to sit inside on a chilly day with a hot,
                             frothy latte or cappuccino. But a latte shouldn’t just be a 
                             coffee shop treat. Even without an espresso machine, a milk frother, or other toys of the trade, you can make a pretty decent latte at home — and yes, 
                            it will have a beautiful cap of foam.
                        </p>
                        <br><br>
                        <h5>Ingridients</h5>
                        <ul>
                            <li>Espresso or strongly brewed coffee</li>
                            <li>2% or nonfat milk</li>
                            <li>1 tsp packed brown sugar</li>
                            <li>Cocoa powder, to garnish</li>
                        </ul>
                        <br>
                        <h5>Equipments</h5>
                        <ul>
                            <li>Wide, shallow coffee cup</li>
                            <li>Jar with lid</li>
                            <li>Spoon</li>
                        </ul>
                        <br>
                        <h5>Instructions</h5>
                        <ol>
                            <li>Make your espresso or strongly brewed coffee.</li>
                            <li>Froth the milk: Pour milk into the jar. Fill no more than halfway. Screw the lid on tightly, and shake the jar as hard as you can  for 30-60 seconds.</li>
                            <li>Microwave the milk: Take the lid off the jar and microwave uncovered for 30 seconds. The foam will rise to the top of the milk and the heat from the microwave will help stabilize it.</li>
                            <li>Pour warm milk into the espresso: Pour the espresso or coffee into a wide, shallow coffee cup. Use a large spoon to hold back the milk foam, and pour as much warm milk as you would like into the espresso.</li>
                            <li>Add foam: Spoon as much milk foam as you would like onto your latte (or perhaps it's a cappuccino at this point!). </li>
                            <li>Garnish, if desired, with a sprinkle of cocoa powder or nutmeg on top of the foam. Sip immediately!</li>
                        </ol>
                        <br>
                        <br>
                        <h5>Nutrition</h5>
                        <p> Please note that the nutrition label provided is an estimate based on an online nutrition calculator. It will vary based on the specific ingredients you use.</p>
                        <!-- <br> -->
                        <p>Serving: 1 | Calories: 136 J | Carbohydrates: 11g | Fat: 7g | Fibre: 0g | Protein: 1g</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal 3 -->
        <div id="myModal3" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Oreo Milk Shake</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Milkshakes are a classic American frosty treat.
                            A creamy combination of ice cream and milk, they're served at diners
                            dairy shops, including fast food favorites like Dairy Queen and
                            Sonic. And while they're a delicious treat to order alongside your,
                            you can easily make them at home and save a few dollars.
                            All you need are a few simple ingredients and a blender.
                        </p>
                        <br><br>
                        <h5>Ingridients</h5>
                        <ul>
                            <li>1 pint vanilla icecream</li>
                            <li>1 cup milk</li>
                            <li>10 Oreo cookies</li>
                            <li>1 tsp chocolate sauce</li>
                        </ul>
                        <br>
                        <h5>Instructions</h5>
                        <ol>
                            <li>Gather the ingredients</li>
                            <li>Place the vanilla ice cream, milk, 8 of the Oreo cookies, and the chocolate sauce in a blender and puree until smooth.</li>
                            <li>Crush the remaining Oreo cookies by placing them in a zip-top plastic bag and pounding on them a few times with a rolling pin until they crumble.</li>
                            <li>Pour the milkshakes into 2 tall glasses and top each with the crushed Oreo cookie crumbs.</li>
                            <li> Garnish with a straw.</li>
                        </ol>
                        <br>
                        <br>
                        <h5>Nutrition</h5>
                        <p> Please note that the nutrition label provided is an estimate based on an online nutrition calculator. It will vary based on the specific ingredients you use.</p>
                        <!-- <br> -->
                        <p>Serving: 1 | Calories: 220 J | Carbohydrates: 38g | Fat: 6g | Fiber: 4.2g | Protein: 3g </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>Made with &#10084; by Jayant</p>
                        <div class="icons">
                            <ul>
                                <li><i class="fa fa-facebook"></i></li>
                                <li><i class="fa fa-twitter"></i></li>
                                <li><i class="fa fa-google-plus"></i></li>
                                <li><i class="fa fa-linkedin"></i></li>
                                <li><i class="fa fa-dribbble"></i></li>
                            </ul>
                        </div>
                        <p>Copyright &copy; <em>Royal Roasters </em> 2020</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

    </html>

<?php

} else {
    header("location:login.php ");
}
?>