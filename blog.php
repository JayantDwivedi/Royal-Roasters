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
            <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
            <h2>COCONUT OIL COFFEE
              <br>
              <small>JUNE 24, 2020</small>
            </h2>
            <p>Start your morning off with this great recipe for hot coffee with coconut oil and butter.</p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
            <hr>
          </div>
          <div class="col-lg-12 text-center">
            <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
            <h2>IRISH COFFEE
              <br>
              <small>JUNE 27, 2020</small>
            </h2>
            <p>Take the edge off with a Fresh hot cup of coffee made with Irish whiskey and Irish Cream.</p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
            <hr>
          </div>
          <div class="col-lg-12 text-center">
            <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
            <h2>FROZEN CARAMEL LATTE
              <br>
              <small>JULY 4, 2020</small>
            </h2>
            <p>Sweetened with caramel sauce and topped with whipped cream, this will make you happy any time of day.</p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
            <hr>
          </div>
          <div class="col-lg-12 text-center">
            <ul class="pager">
              <li class="previous"><a href="blog-previous.php">&larr; Previous</a>
              </li>
              <li class="next"><a href="blog-next.php">Next &rarr;</a>
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
            <h4 class="modal-title">Coconut Oil Coffee</h4>
          </div>
          <div class="modal-body">
            <p>This coconut oil coffee is not something new, and has been around for a long time,
              but it was recently made popular again because of the creation of Bulletproof Coffee.
              That’s basically coffee supplemented with MCT oil. And here’s the cool thing: MCT oil is
              actually extracted from coconut oil so there are benefits of using both types of oils in your
              coffee for that boost of energy.
            </p>
            <br><br>
            <h5>Ingridients</h5>
            <ul>
              <li>1 cup coffee</li>
              <li>1<sup>1</sup>&frasl;<sub>2</sub> tsp coconut oil</li>
              <li><sup>1</sup>&frasl;<sub>2</sub>cup warm coconut milk</li>
              <li>1 pinch cinnamon</li>
              <li>1 pinch caynne pepper (optional)</li>
              <li>Whole clove</li>
              <li>Cocunut cream</li>
              <li>Star anise</li>
            </ul>
            <br>
            <h5>Instructions</h5>
            <ol>
              <li>Make a cup of coffee as you normally would and pour into a blender.</li>
              <li>Add the coconut oil to the blender and blend for 1-2 minutes until the mixture lightens in color and becomes frothy.</li>
              <li>Add any extras you'd like including warm coconut milk, cinnamon and or cayenne pepper and give it a quick blend for 10-20 seconds.</li>
              <li>Pour into a mug, top with coconut cream, and grind fresh cloves over the cream, if desired.</li>
              <li>Garnish with star anise, and enjoy warm.</li>
            </ol>
            <br>
            <h5>Storage</h5>
            <p>
              If you make extra, you can store any unused coconut oil coffee in the fridge for up to 3 days. Enjoy it cold afterwards or heat it in the microwave.
            </p>
            <br>
            <h5>Nutrition</h5>
            <p> Please note that the nutrition label provided is an estimate based on an online nutrition calculator. It will vary based on the specific ingredients you use.</p>
            <!-- <br> -->
            <p>Serving: 1 | Calories: 61kcal | Carbohydrates: 0.1g | Fat: 6.7g | Saturated Fat: 5.6g | Sodium: 1.2mg</p>
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
			<h4 class="modal-title">Irish Coffee</h4>
		  </div>
		  <div class="modal-body">
			<p>Irish coffee is a cocktail of sweetened coffee, 
            Irish whiskey, and whipped cream that is not only 
            acceptable but also expected as a morning treat on
             holidays. Sure, St. Paddy’s Day sees a lot of Irish 
             coffees, but we also enjoy them on Black Friday 
             (staying home, skipping shopping) and on both Christmas
              Eve and Christmas morning.
            </p>
            <br><br>
            <h5>Ingridients</h5>
            <ul>
              <li>1 cup hot, freshly brewed coffee</li>
              <li>1 tsp granulated sugar</li>
              <li>1 tsp packed brown sugar</li>
              <li>10ml Irish Wishkey</li>
              <li>Freshly whipped cream</li>
            </ul>
            <br>
            <h5>Instructions</h5>
            <ol>
              <li>Preheat your mug, then fill with coffee. Pour hot water into a mug or heatproof glass to take the chill off. Pour out the water.Fill the mug about 3/4 full with the coffee.</li>
              <li>Add sweetener. Add the granulated and brown sugars and stir until fully dissolved.</li>
              <li>Add Irish whiskey. Add the whiskey and stir to incorporate.</li>
              <li>Top with whipped cream. If using lightly whipped cream, pour it slowly over a warm spoon onto the coffee, being careful not to break the coffee's surface.</li>
              <li>Garnish on your own way and enjoy hot.</li>
            </ol>
            <br>
            <br>
            <h5>Nutrition</h5>
            <p> Please note that the nutrition label provided is an estimate based on an online nutrition calculator. It will vary based on the specific ingredients you use.</p>
            <!-- <br> -->
            <p>Serving: 1 | Calories: 878kJ | Carbohydrates: 8g | Fat: 9g | Fibre: 0g | Protein: 0g</p>
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
            <h4 class="modal-title">Frozen Caramel Latte</h4>
          </div>
          <div class="modal-body">
          <p> 
            This frothy, blended espresso drink will wake you up and make
            you happy any time of day. Sweetened with caramel sauce
            and topped with whipped cream,this is one delicious frozen latte.
            </p>
            <br><br>
            <h5>Ingridients</h5>
            <ul>
              <li>30 ml brewed espresso</li>
              <li>1 tsp caramel sauce</li>
              <li>2 tsp white sugar</li>
              <li><sup>3</sup>&frasl;<sub>4</sub> cup milk</li>
              <li> 1<sup>1</sup>&frasl;<sub>2</sub> cup ice cubes</li>
              <li>2 tsp whipped cream</li>
            </ul>
            <br>
            <h5>Instructions</h5>
            <ol>
              <li>Place the espresso, caramel sauce, and sugar into a blender pitcher.</li>
              <li>Blend on high until the caramel and sugar dissolve into the espresso.</li>
              <li>Add Irish whiskey. Add the whiskey and stir to incorporate.</li>
              <li>Pour in the milk and add the ice; continue blending until smooth and frothy.</li>
              <li>Garnish and served with love.</li>
            </ol>
            <br>
            <br>
            <h5>Nutrition</h5>
            <p> Please note that the nutrition label provided is an estimate based on an online nutrition calculator. It will vary based on the specific ingredients you use.</p>
            <!-- <br> -->
            <p>Serving: 1 | Calories: 293.4 J | Carbohydrates: 47.5g | Fat: 9.3g | Dietary Fiber: 0.2g | Protein: 6.8g | Cholesterol: 35.4mg | Sodium: 164.1mg | Potassium: 400.9mg </p>
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