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
            <img class="img-responsive img-border img-full" src="img/black-coffee.jpg" alt="black coffee">
            <h2>Black Coffee
              <br>
              <small>MAY 30, 2020</small>
            </h2>
            <p>Black Coffee is a beverage that puts one to sleep when not drank.</p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
            <hr>
          </div>
          <div class="col-lg-12 text-center">
            <img class="img-responsive img-border img-full" src="img/cappuccino.jpg" alt="cappuccino">
            <h2>Cappunicco
              <br>
              <small>JUNE 16, 2020</small>
            </h2>
            <p>Beige is the atmoshpere. It's bisque, it's ivory, it's cream, it's stone, it's cappuccino, it's magic.</p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
            <hr>
          </div>
          <div class="col-lg-12 text-center">
            <img class="img-responsive img-border img-full" src="img/espresso.jpg" alt="Espresso">
            <h2>Espresso
              <br>
              <small>JULY 17, 2020</small>
            </h2>
            <p>Espresso is a miracle of chemistry in a cup.</p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
            <hr>
          </div>
          <div class="col-lg-12 text-center">
            <ul class="pager">
              <!-- <li class="previous"><a href="">&larr; Older</a> -->
              </li>
              <li class="next"><a href="blog.php">Next &rarr;</a>
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
            <h4 class="modal-title">Black Coffee</h4>
          </div>
          <div class="modal-body">
            <p>
            Black coffee is so much better and healthier than regular milk coffee. It has so many health properties in them like:
            Rich in antioxidants, helps in weight loss, good for heart, cleanses stomach good for liver, improve memory and so many of 
            advantages.
            </p>
            <br><br>
            <h5>Ingridients</h5>
            <ul>
              <li>1 cup Water</li>
              <li><sup>1</sup>&frasl;<sub>2</sub> tsp instant coffee </li>
              <li>1 tsp brown sugar</li>
            </ul>
            <br>
            <h5>Instructions</h5>
            <ol>
              <li>Bring water to a boil.</li>
              <li>Take coffee and sugar in a cup, add little hot water and mix well.</li>
              <li>Now add more water and mix well.</li>
              <li>Serve hot.</li>
            </ol>
            <br>
            <h5>Nutrition</h5>
            <p> Please note that the nutrition label provided is an estimate based on an online nutrition calculator. It will vary based on the specific ingredients you use.</p>
            <!-- <br> -->
            <p>Serving: 1 | Potassium: 4% | Carbohydrates: 0g | Fat: 0g | Sodium: 0mg</p>
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
			<h4 class="modal-title">Cappuccino</h4>
		  </div>
		  <div class="modal-body">
			<p>Tuesday was National Cappuccino Day and today is Thirsty 
        Tuesday, so what better way to celebrate than with some
        tasty Cappuccino Recipes to warm you up?
            </p>
            <br><br>
            <h5>Ingridients</h5>
            <ul>
              <li>2 shots Espresso</li>
              <li>2 tsp Organic maple syrup or 1/8 tsp. Maple Extract</li>
              <li>15ml  skim or almond milk</li>
              <li>1 tsp. cinnamon</li>
              <li>1 tsp. stevia</li>
            </ul>
            <br>
            <h5>Instructions</h5>
            <ol>
              <li>Mix all ingredients except espresso/coffee together.</li>
              <li>Heat spiced milk until warm but not boiling.</li>
              <li>Pour Hot espresso into your coffee cup.</li>
              <li>Pour foamed milk into it.</li>
              <li>Get creative if you want and make a design.</li>
            </ol>
            <br>
            <h5>Nutrition</h5>
            <p> Please note that the nutrition label provided is an estimate based on an online nutrition calculator. It will vary based on the specific ingredients you use.</p>
            <!-- <br> -->
            <p>Serving: 1 | Calories:  51.9J | Carbohydrates: 4.8g | Fat: 2.5g | Fibre: 0g | Protein: 2.5g | Potassium: 121.9mg</p>
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
            <h4 class="modal-title">Espresso</h4>
          </div>
          <div class="modal-body">
          <p> 
          A trip to the ice cream parlor used to mean 
          a single scoop of ice cream atop a sugar cone,
           a perfect little 200-calorie treat. Now, at places 
           like Royal Roasters, Baskin-Robbins, and Cold Stone—where 
           serving sizes have grown out of control and high-calorie 
           add-ins are the standard—that same trip to the scoop shop 
           may set you back 1,000 calories. When it comes to dessert, 
           it's best to stay in—especially if you learn to make granitas
            frozen desserts that are every bit as satisfying as ice cream 
            and easy enough for a 6-year-old to make.
           And that's where our espresso granita comes in.
            </p>
            <br><br>
            <h5>Ingridients</h5>
            <ul>
              <li>2 cups espresso</li>
              <li><sup>1</sup>&frasl;<sub>2</sub> sugar</li>
              <li>Light whipped topping </li>
              <li><sup>1</sup>&frasl;<sub>2</sub> cup saved dark chocolate</li>
            </ul>
            <br>
            <h5>Instructions</h5>
            <ol>
              <li>Combine the espresso with the sugar and stir until the sugar dissolves.</li>
              <li>Pour the mixture into a shallow metal baking pan (there should be about an inch of liquid) and place in the freezer.</li>
              <li>After 15 to 20 minutes, just as the mix has begun to freeze, remove the dish from the freezer and use a fork to scrape the ice crystals developing on the surface.</li>
              <li>Careful scraping will help you achieve a light, almost creamy granita, rather than a chunky, icy one. Repeat this step once every 30 to 45 minutes until the granita is entirely frozen.</li>
              <li>Garnish and served with love.</li>
            </ol>
            <br>
            <br>
            <h5>Nutrition</h5>
            <p> Please note that the nutrition label provided is an estimate based on an online nutrition calculator. It will vary based on the specific ingredients you use.</p>
            <!-- <br> -->
            <p>Serving: 1 | Calories: 170 J | Fat: 8g | Sugar: 15g </p>
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