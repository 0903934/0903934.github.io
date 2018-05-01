

<!DOCTYPE HTML>

<html>
<head>
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
</head>
<body class="landing">
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


            </ul>
        </nav>
    </header>

    <!-- Banner -->
    <section id="banner">
        <div class="content">
            <form action="uploadfile.php" enctype="multipart/form-data" method="post">
                Select image :
                <input type="file" name="file"><br/>
                <input type="submit" value="Upload" name="Submit1">
                <a href="loginsuccess.html">Back to your home page</a>
            </form>






    <?php

    if(isset($_POST['Submit1']))
    {
        $extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

        if($extension=='jpg' || $extension=='jpeg' || $extension=='png' || $extension=='gif')
        {



        }
        else
        {
            echo "File is not image, please upload a jpg, jpeg or png.";
        }

        $filepath = "fileuploads/" . $_FILES["file"]["name"];

        if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath))
        {
            echo "<img src=".$filepath."   />";

        }
        else
        {
            echo "Error !!";

        }
    }

    ?>

        </div>
    </section>


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

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>


</html>
