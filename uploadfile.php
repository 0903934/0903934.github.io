

<!DOCTYPE HTML>

<html>
<head>
    <title>Fantasy Clash</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
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
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="file" name="image" />
                <input type="submit"/>
                <a href="loginsuccess.html"> Back to your homepage</a>
                <?php
                if(isset($_FILES['image'])){
                    $errors= array();
                    $file_name = $_FILES['image']['name'];
                    $file_size =$_FILES['image']['size'];
                    $file_tmp =$_FILES['image']['tmp_name'];
                    $file_type=$_FILES['image']['type'];
                    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

                    $expensions= array("jpeg","jpg","png");

                    if(in_array($file_ext,$expensions)=== false){
                        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                    }

                    if($file_size > 2097152){
                        $errors[]='File size must be excately 2 MB';
                    }

                    if(empty($errors)==true){
                        move_uploaded_file($file_tmp,"fileuploads/".$file_name);
                        echo "Your file has been successfully uploaded!";
                    }else{
                        print_r($errors);
                    }
                }
                ?>
            </form>
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
            <li>&copy; Untitled. All rights reserved.</li><li>Design:</li>
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
