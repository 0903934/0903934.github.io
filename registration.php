

<?php
require('dbConnect.php');
// If the values are posted, insert them into the database.
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];


    $sql = "SELECT * FROM `users` WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        $smsg = "This Username Already Exists.  Please Choose Another One.";

    } else {
        if ($_POST['password'] != $_POST['repeat_password']) {
            echo "Oops! Password did not match! Try again. ";
        } else {
            $query = "INSERT INTO `users` (username, password, email) VALUES ('$username', '$password', '$email')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                $smsg = "Your account has been created.  You can now log in!";
            } else {
                $fmsg = "User Already Exists, Please Choose Another Username";
            }
        }
    }

}
?>

<title>Fantasy Clash</title>
<meta charset="utf-8" />
<!-- favicon added to the tab on webpage -->
<link rel="shortcut icon" type="image/png" href="images/favdragon.png"/>
<!-- Used for changing the view on different devices -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<script src="assets/js/ie/html5shiv.js"></script>
<link rel="stylesheet" href="assets/css/main.css" />
<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

<body>

<div id="page-wrapper">

    <!-- Header -->
    <header id="header">
        <h1 id="logo"><a href="index.html">Fantasy Clash</a></h1>
        <nav id="nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>
                    <a href="#">The Races</a>
                    <ul>
                        <li><a href="#">Aliens</a></li>
                        <li><a href="#">Humans</a></li>
                        <li><a href="#">Orcs</a></li>
                        <li><a href="#">Dragons</a></li>
                        <li><a href="#">Aegyptus</a></li>

                    </ul>
                </li>
                <li><a href="#">How it Works</a></li>
                <li><a href="#two">About Us</a></li>
                <li><a href="login.html" class="button special">Login</a></li>
                <li><a href="registration.php" class="button special">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <div id="main" class="wrapper style1">
        <div class="container">
        <form class="form-signin" method="POST">
        <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
        <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <h2 class="form-signin-heading">Please Register</h2>
            <div class="row uniform 50%">
                <div class="6u 12u$(xsmall)">
            <span class="input-group-addon" id="basic-addon1"></span>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
                <div class="6u 12u$(xsmall)">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                </div>
                <div class="6u 12u$(xsmall)">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                </div>
                <div class="6u 12u$(xsmall)">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="repeat_password" id="inputPassword" class="form-control" placeholder="Repeat Password" required>
                </div>
            <ul class="actions">
                <li><input type="submit" value="Register!" class="special" /></li>
                <li><a href="login.html">Already a Member? Login Here</a></li>

            </ul>
            </div>
    </form>
</div>

        <!-- Footer -->
        <footer id="footer">
            <ul class="icons">
                <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
                <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
                <li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; Fantasy Clash. All rights reserved.</li>
            </ul>
        </footer>

    </div>
</body>