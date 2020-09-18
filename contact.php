<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Royal Roasters - Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/contact.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

     <!-- Icons -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#contact").click(function() {

                fname = $("#fname").val();
                email = $("#email").val();
                message = $("#message").val();

                $.ajax({
                    type: "POST",
                    url: "sendmsg.php",
                    data: "fname=" + fname + "&email=" + email + "&message=" + message,
                    success: function(html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Message Sent!</strong> \ \
                                                 </div>');

                        } else if (html == 'fname_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must cannot exceed 50 characters. \ \
                                                 </div>');

                        } else if (html == 'fname_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must exceed 2 characters. \ \
                                                 </div>');

                        } else if (html == 'email_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must cannot exceed 50 characters. \ \
                                                 </div>');

                        } else if (html == 'email_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must exceed 2 characters. \ \
                                                 </div>');

                        } else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> format incorrect. \ \
                                                 </div>');

                        } else if (html == 'message_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must cannot exceed 50 characters. \ \
                                                 </div>');

                        } else if (html == 'message_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must exceed 2 characters. \ \
                                                 </div>');


                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again. \ \
                                                 </div>');
                        }
                    },
                    beforeSend: function() {
                        $("#add_err2").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>

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
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Royal Roasters</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="750" height="420" id="gmap_canvas" src="https://maps.google.com/maps?q=gla%20university&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 420px;
                                width: 700px;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 420px;
                                width: 750px;
                                border: 5px solid #6E481A;
                            }
                        </style>
                    </div>
                </div>
                <div class="col-md-4 cont-info">
                    <p><a href="tel:7060561783"><strong>Phone:7060561783</strong></a></p>
                    <p><a href="mailto:jayant.gla_cs18@gmail.com"><strong>Email: info@royalroasters.com</a></strong>
                    </p>
                    <p>Address:
                        Bala Ji Puram Ashram Road
                            <br>Mainpuri , UP 205001
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Feedback
                        <strong>Form</strong>
                    </h2>
                    <hr>
                    <div id="add_err2"></div>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Feedback</label>
                                <textarea class="form-control" id="message" name="message" maxlength="100" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" id="contact" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
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
                    <p>Copyright &copy; <em> Royal Roasters </em> 2020</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>