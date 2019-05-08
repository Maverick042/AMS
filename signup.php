<?php

include_once './db_functions.php';

if (isset($_POST['signUpButton'])) {
    $firstname = mysql_real_escape_string($_POST['first_Name']);
    $lastname = mysql_real_escape_string($_POST['last_name']);
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['password']);
    $gender = mysql_real_escape_string($_POST['gender']);

    $addUser = new DB_Functions();

    $addUser -> storeUser($firstname, $lastname, $gender, $email, $password);

    echo '<script>alert("You have succesfully registered");</script>';
}

?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMS | AIRLINES MANAGEMENT SYSTEM</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">A M S</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">ABOUT</a>
                    </li>

                    <li>
                        <a href="portfolio-2-col.html">DESTINATION</a>
                    </li>

                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">BOOKING<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="makeabooking.html">Book A Flight</a>
                            </li>
                            <li>
                                <a href="timetable.html">Time Table</a>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">OTHERS <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-2.html">Special Offers</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact Us</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Career</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <div id="navbar" class="navbar-collapse collapse">

                            <form class="navbar-form navbar-right">
                                <div class="form-group">
                                    <input type="text" placeholder="Email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success" click="signInClicked()">Sign in</button>
                            </form>
                        </div>
                    </li>
                    <li>
                        <a href="signup.html">SIGN UP</a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="index.php">HOME</a>
                    </li>
                    <li class="active">SIGN UP</li>
                </ol>
                <h1 class="page-header">SIGN UP
                </h1>

            </div>
        </div>




        <form class="form-horizontal" data-toggle="validator" role="form" method="post">
        <fieldset>

            <div class="form-group">
                <label for="first_Name" class="col-lg-2 control-label">First Name</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="first_Name" placeholder="First Name"  name="first_Name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="last_Name" class="col-lg-2 control-label">Last Name</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="last_Name" placeholder="Last Name"  name="last_name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="user_email" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="user_email"  placeholder="Email" name="email"required>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10">
                    <input type="password" class="form-control" id="password"  placeholder="Password" name="password" required>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Gender</label>
                    <div class="col-lg-10">
                        <div class="radio-inline">
                            <label>
                                <input type="radio" name="gender" id="optionsRadios1"  value="Male">Male
                            </label>
                        </div>
                        <div class="radio-inline">
                            <label>
                                <input type="radio" name="gender" id="optionsRadios2"  value="Female">Female
                            </label>
                        </div>
                    </div>
                </div>
                </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary" name="signUpButton">Submit</button>
                    <button type="reset" class="btn btn-default">Cancel</button>
                </div>
            </div>
       <!--/.form-->




            <br>
            <br>
            <hr>
            <br>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; AMS 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
