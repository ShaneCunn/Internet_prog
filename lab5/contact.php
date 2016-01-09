<?php
if (isset($_POST["submit"])) {
    //variables taken in from the contact form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Demo Contact Form';
    $to = 'shanecunningham@live.ie'; //email address to sent the contact form message to
    $subject = $_POST['subject'];

    $at = strpos($email, "@");
    $dot = strpos($email, ".");
    $subject = strpos($subject, "Default");


    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    // Check if name is greater than 10 letters long
    if (strlen($name) <= 10) {
        $errName = 'Please enter your name and is longer than 10 characters';
    }
// Check if name has been entered
    if (strlen($email) <= 10) {
        $errEmail = 'Your message needs to be 10 letters or more';
    }

    // Check if email the @ symbol has been entered
    if ($at === false) {
        $errEmail = 'E-mail address require @ symbol';
    }

    // Check if email the . symbol has been entered
    if ($dot === false) {
        $errEmail = 'E-mail address require a dot in it';
    }

    // Check if the default subject has been entered
    if ($subject === 'Default') {
        $errSubject = 'Please select a subject';
    } else {
        $errSubject = '';
    }

    // Check if message is greater than 25 letters long
    if (strlen($message) <= 25) {
        $errMessage = 'Your message needs to be 25 letters or more';
    }
    //Check if simple anti-bot test is correct
    if ($human !== 5) {
        $errHuman = 'Your anti-spam is incorrect';
    }

// If there are no errors, send the email
    if (!$errName && !$errEmail && !$errSubject && !$errMessage && !$errHuman) {
        if (mail($to, $subject, $body, $from)) {
            $result = '<div class="alert alert-success">Thank You! I will be in touch</div>';
        } else {
            $result = '<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="description" name="Internet programming lab1 built using the Bootstrap framework">
    <meta content="Author" name="Shane Cunningham">
    <meta content="Course" name="h.Dip SDD industry stream">
    <meta content="Student ID" name="15104623">

    <title>NUIG Shop</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
   <!-- <link href="css/shop-homepage.css" rel="stylesheet">-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
   <!-- <script src="js/html5shiv.js"></script>-->


    <!--<link rel="stylesheet" href="css/form.css" type="text/css"/>-->


    <!-- <script>
         function formValidation() {
             var uname = document.contact.username;
             var uemail = document.contact.email;
             var usubject = document.contact.subject;
             var umessage = document.contact.message;
             if (allLetter(uname)) {
                 if (ValidateEmail(uemail)) {
                     if (subjectSelect(usubject)) {
                         if (validmessage(umessage)) {
                         }
                     }
                 }
             }
             return false;
         }

         function allLetter(uname) {
             var letters = /^[A-Za-z]{10,}$/;
             if (uname.value.match(letters)) {
                 return true;
             }
             else {
                 alert('Your name must have alphabet characters only and be at least 10 letters long');
                 uname.focus();
                 return false;
             }
         }

         function ValidateEmail(uemail) {
             var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
             if (uemail.value.match(mailformat)) {
                 return true;
             }
             else {
                 alert("You have entered an invalid email address!");
                 uemail.focus();
                 return false;
             }
         }

         function subjectSelect(usubject) {
             if (usubject.value == "Default") {
                 alert('Select your subject from the list');
                 usubject.focus();
                 return false;
             }
             else {
                 return true;
             }
         }

         function validmessage(umessage) {
             var letters = /^[0-9a-zA-Z]{25,}$/;
             if (umessage.value.match(letters)) {
                 alert('Your Question Will Be Answered Soon!');
                 window.location.reload();
                 return true;
             }
             else {
                 alert('Message must be alphanumeric characters only and at least 25 letters');
                 umessage.focus();
                 return false;
             }
         }


     </script>-->

    <![endif]-->
</head>


<!--<body onload="document.contact.username.focus();">-->
<body>

<!-- Navigation -->

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->

        <div class="navbar-header">
            <button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse"
                    type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">National University of Ireland Galway</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.html">Home</a>
                </li>

                <li>
                    <a href="about.html">About</a>
                </li>

                <li>
                    <a href="contact.html">Contact</a>
                </li>

                <li>
                    <a href="special_offers.html">Special Offers</a>
                </li>

                <li>
                    <a href="links.html">Useful links</a>
                </li>
                <li>
                    <a href="clock.html">Clock</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Page Content -->


<div class="row">
    <div class="col-md-3">
        <p class="lead">NUIG Shop</p>

        <div class="list-group">
            <a class="list-group-item" href="index.html">Home</a>
            <a class="list-group-item" href="about.html">About</a>
            <a class="list-group-item" href="contact.html">Contact</a>
            <a class="list-group-item" href="special_offers.html">Special Offers</a> <a class="list-group-item"
                                                                                        href="links.html">Useful
                links</a>
            <a class="list-group-item" href="clock.html">Clock</a>
        </div>
    </div>

    <div class="col-md-9">

        <!-- Team Members Row -->

        <div class="col-lg-9">
            <h2 class="page-header">Our Team</h2>
        </div>
        <div class="col-lg-4 col-sm-6 text-center">
            <img class="img-circle img-responsive img-center" src="./images/contact1.jpg" alt="">

            <h3>John Smith
                <small>Fulfilment Executive</small>
            </h3>
            <ul class="pull-left">
                <li>Phone: 091 500001</li>
                <li>Email: test@nuigalway.ie</li>
            </ul>


        </div>
        <div class="col-lg-4 col-sm-6 text-center">
            <img class="img-circle img-responsive img-center" src="./images/contact2.jpg" alt="">

            <h3>John Smith
                <small>Marketing Officer</small>
            </h3>
            <ul class="pull-left">
                <li>Phone: 091 500001</li>
                <li>Email: test@nuigalway.ie</li>
            </ul>


        </div>
        <div class="col-lg-4 col-sm-6 text-center">
            <img class="img-circle img-responsive img-center" src="./images/contact3.jpg" alt="">

            <h3>John Smith
                <small>Secretary</small>
            </h3>
            <ul class="pull-left">
                <li>Phone: 091 500001</li>
                <li>Email: test@nuigalway.ie</li>
            </ul>


            <!-- /.container -->
            <!-- Form Content -->





        </div>
        <div class="col-sm-9 col-md-6 col-lg-8">
            <h2 >Contact us</h2>
            <!-- <form name='contact' onSubmit="return formValidation();">-->
            <form class="form-horizontal" role="form" method="post" action="contact.php">
                <div class="form-group">
                    <label for="name" >Name:</label>

                        <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name"
                               value="<?php echo htmlspecialchars($_POST['name']); ?>">
                        <?php echo "<p class='text-danger'>$errName</p>"; ?>

                </div>
                <div class="form-group">
                    <label for="email" >Email:</label>

                        <input type="email" class="form-control" id="email" name="email"
                               placeholder="example@domain.com"
                               value="<?php echo htmlspecialchars($_POST['email']); ?>">
                        <?php echo "<p class='text-danger'>$errEmail</p>"; ?>

                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>

                        <select class="form-control" id="subject" name="subject">

                            <option value="Sales">Sales</option>
                            <option value="Returns">Returns</option>
                            <option value="Shipping">Shipping</option>
                            <option value="Support">Support</option>
                        </select>
                        <?php echo "<p class='text-danger'>$errSubject</p>"; ?>


                </div>

                <div class="form-group">
                    <label for="message">Message:</label>

                <textarea class="form-control" rows="4"
                          name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days."><?php echo htmlspecialchars($_POST['message']); ?></textarea>
                        <?php echo "<p class='text-danger'>$errMessage</p>"; ?>

                </div>
                <div class="form-group">
                    <label for="human" class="control-label">2 + 3 = ?</label>

                        <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                        <?php echo "<p class='text-danger'>$errHuman</p>"; ?>

                </div>
                <div class="form-group">

                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">

                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <?php echo $result; ?>
                    </div>
                </div>
            </form>

        </div>
        <!-- Address content -->


        <div class="col-sm-3 col-md-6 col-lg-4">
            <address>
                <h3>Office Location</h3>

                <p class="lead"><a href="https://goo.gl/maps/rCFeodD6YvK2">National University of
                        Ireland Galway<br>
                        University Rd, Galway</a>
                    <br> Phone: 091-524-411<br>
                    Email: <a href="mailto:info@nuigalway.ie">info@nuigalway.ie</a></p>
            </address>
        </div>





</div>

</div>

<!-- /.container -->

<div class="container">
    <hr>
    <!-- Footer -->

    <footer>

        <div class="col-lg-12">
            <p>Copyright &copy; Shane Cunningham 2015</p>
        </div>
</div>
</footer>

<!-- /.container -->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Form validation   -->
<!--<script src="js/valid.js"></script>-->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap-select.min.js"></script>


</body>

</html>