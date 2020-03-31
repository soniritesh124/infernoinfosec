<html>

<head>
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        *,
        html,
        body {}

        header {
            padding-right: 30px;
            font-weight: bold;
            background-color: black;
            height: 112px;
            line-height: 112px;
            position: fixed;
            z-index: 1;
            width: 100%;
        }

        .logo img {
            margin-left: 10px;
            margin-right: 0px;
            height: 50px;
        }

        .logo2 img {
            margin-left: 50px;
            height: 50px;
        }

        header nav {
            float: right;
        }

        header.transparent-nav a {
            padding-right: 30px;
            margin-top: 20px;
            font-weight: bold;
            color: white;
        }

        header nav ul li a:hover {
            text-decoration: none;
            color: orange;
        }

        @media only screen and (max-width: 767px) {
            #nav {
                position: fixed;
                top: 0;
                right: 0;
                width: 0%;
                max-width: 250px;
                height: 100vh;
                background: #FFF;
                -webkit-box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);
                box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);
                padding-top: 80px;
                padding-bottom: 40px;
                -webkit-transform: translateX(100%);
                -ms-transform: translateX(100%);
                transform: translateX(100%);
                -webkit-transition: 0.4s all cubic-bezier(.77, 0, .18, 1);
                transition: 0.4s all cubic-bezier(.77, 0, .18, 1);
                z-index: 9;
            }

            #header.nav-collapse #nav {
                width: 100%;
                -webkit-transform: translateX(0%);
                -ms-transform: translateX(0%);
                transform: translateX(0%);
            }

            .main-menu {
                margin: 0;
            }

            .main-menu li a {
                color: #374050 !important;
                display: inline-block;
                margin-left: 40px;
            }
        }

        /* -- Mobile Toggle Btn -- */
        .navbar-toggle {
            position: fixed;
            right: 0;
            padding: 0;
            height: 40px;
            width: 40px;
            margin-top: 5px;
            z-index: 99;
        }

        .navbar-toggle>span {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: 0.2s background;
            transition: 0.2s background;
        }

        .navbar-toggle>span:before,
        .navbar-toggle>span:after {
            content: '';
            position: absolute;
            left: 0;
            -webkit-transition: 0.2s -webkit-transform;
            transition: 0.2s -webkit-transform;
            transition: 0.2s transform;
            transition: 0.2s transform, 0.2s -webkit-transform;
        }

        .navbar-toggle>span,
        .navbar-toggle>span:before,
        .navbar-toggle>span:after {
            height: 2px;
            width: 25px;
            background-color: #374050;
        }

        .navbar-toggle>span:before {
            top: -10px;
        }

        .navbar-toggle>span:after {
            top: 10px;
        }

        #header.nav-collapse .navbar-toggle>span {
            background: transparent;
        }

        #header.nav-collapse .navbar-toggle>span:before {
            -webkit-transform: translateY(10px) rotate(45deg);
            -ms-transform: translateY(10px) rotate(45deg);
            transform: translateY(10px) rotate(45deg);
        }

        #header.nav-collapse .navbar-toggle>span:after {
            -webkit-transform: translateY(-10px) rotate(-45deg);
            -ms-transform: translateY(-10px) rotate(-45deg);
            transform: translateY(-10px) rotate(-45deg);
        }


        /* -- Mobile Nav -- */
        @media only screen and (max-width: 767px) {
            #nav {
                position: fixed;
                top: 0;
                right: 0;
                width: 0%;
                max-width: 250px;
                height: 100vh;
                background: #FFF;
                -webkit-box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);
                box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);
                padding-top: 80px;
                padding-bottom: 40px;
                -webkit-transform: translateX(100%);
                -ms-transform: translateX(100%);
                transform: translateX(100%);
                -webkit-transition: 0.4s all cubic-bezier(.77, 0, .18, 1);
                transition: 0.4s all cubic-bezier(.77, 0, .18, 1);
                z-index: 9;
            }

            #header.nav-collapse #nav {
                width: 100%;
                -webkit-transform: translateX(0%);
                -ms-transform: translateX(0%);
                transform: translateX(0%);
            }

            .main-menu {
                margin: 0;
            }

            .main-menu li a {
                color: #374050 !important;
                display: inline-block;
                margin-left: 40px;
            }
        }

        /* -- Mobile Toggle Btn -- */
        .navbar-toggle {
            position: fixed;
            right: 0;
            padding: 0;
            height: 40px;
            width: 40px;
            margin-top: 5px;
            z-index: 99;
        }

        .navbar-toggle>span {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: 0.2s background;
            transition: 0.2s background;
        }

        .navbar-toggle>span:before,
        .navbar-toggle>span:after {
            content: '';
            position: absolute;
            left: 0;
            -webkit-transition: 0.2s -webkit-transform;
            transition: 0.2s -webkit-transform;
            transition: 0.2s transform;
            transition: 0.2s transform, 0.2s -webkit-transform;
        }

        .navbar-toggle>span,
        .navbar-toggle>span:before,
        .navbar-toggle>span:after {
            height: 2px;
            width: 25px;
            background-color: #374050;
        }

        .navbar-toggle>span:before {
            top: -10px;
        }

        .navbar-toggle>span:after {
            top: 10px;
        }

        #header.nav-collapse .navbar-toggle>span {
            background: transparent;
        }

        #header.nav-collapse .navbar-toggle>span:before {
            -webkit-transform: translateY(10px) rotate(45deg);
            -ms-transform: translateY(10px) rotate(45deg);
            transform: translateY(10px) rotate(45deg);
        }

        #header.nav-collapse .navbar-toggle>span:after {
            -webkit-transform: translateY(-10px) rotate(-45deg);
            -ms-transform: translateY(-10px) rotate(-45deg);
            transform: translateY(-10px) rotate(-45deg);
        }







        #contect {}

        .bootom-line {
            margin-top: 40px;
            margin-bottom: 40px;
            border: 0;
            border-top: 0px;
            height: 3px;
            width: 40px;
            background-color: #BE9E21;
        }

        .section-padding {
            padding: 120px 0px;
        }

        .loction-info p {
            margin-bottom: 25px;

        }

        .loction-info p i {
            color: #be9e21;
        }

        .loction-info {
            padding: 0px 15px;
            margin-bottom: 15px;
        }






        footer {

            background-size: cover;
            background-attachment: fixed;
            padding-top: 90px;
            padding-bottom: 0px;
            -webkit-background-size: cover;
        }

        .social-icon a {
            margin: 0 16px 20px 16px;
            display: inline-block;
        }

        .social-icon .fa {
            font-size: 20px;
            color: deepskyblue;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: white;
            line-height: 2;
            transition: .3s;
            border: 10px solid skyblue;
            text-align: center;
        }

        .social-icon a:hover .fa {
            border: 10px solid white;
        }

        .copyright {
            margin-top: 10px;

            font-size: 30px;
        }

    </style>
</head>

<body>
<?php
$servername="localhost";
$username="ritesh";
$password="\$WAppY@ruchi21";
$dbname="infernoinfotech";

$conn = mysqli_connect($servername,$username,$password,$dbname);
function valid_email($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}
function valid_name($str) {
    return (!preg_match("/^[a-z A-Z'-]+$/", $str)) ? FALSE : TRUE;
}
$success = "";
$nm="";
$em="";
if(isset($_POST['submit']))
{
    $nm=$_POST['name'];
    $em=$_POST['email'];
    $tx=$_POST['subject'];
    $me=$_POST['message'];
    if(valid_email($em) && valid_name($nm)){
        $query="INSERT INTO contect(name, email, subject, message) VALUES('$nm','$em','$tx','$me')";
        $data =mysqli_query($conn,$query);
        if($data)
        {
            $success ="yes";
        }else
        {
            $success ="no";
        }
    }
    if(!valid_email($em)) {$em ="invalid";}
    if(!valid_name($nm)) {$nm="invalid";}
}
        $conn->close();
?>
    <header id="header" class="transparent-nav">
        <div class="container">

            <div class="navbar-header">
                <div class="navbar-brand">
                    <a class="logo" href="index.html">
                        <a href="" class="logo"><img src="image/logo.png"></a>

                    </a>
                </div>
                <button class="navbar-toggle">
                    <span></span>
                </button>
            </div>
            <nav id="nav">
                <ul class="main-menu nav navbar-nav navbar-left">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="Aboutus.html">About Us</a></li>
                    <li><a href="ourserive.html">Our Services</a></li>
                    <li><a href="contect.php">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="contect" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center white">
                    <h2 class="service-title">Contact US</h2>
                    <hr class="bootom-line white-bg">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="loction-info white">
                        <h2>Head Office</h2>
                        <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>405, Atlantis, Above SBI bank,<br>NR.Genda Circle,Sarabhai Road,VADODARA-390007</p>
                        <h2>Ahmdabad Office</h2>
                        <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>1,Shivani Avenue, NR.Jawahar Chowk Cross Road<br>Maninager,Ahmedabad-38008</p>
                        <p><i class="fa fa fa-envelope-o fa-fw pull-left fa-2x"></i><h3>infernoinfosec@gmail.com</h3> </p>
                        <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i><h3>+91 9429516991</h3> </p>
                    </div>
                </div>


                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contect-form">
                            <?php if($success === "yes"){?><h5 style="color:green;">Message Sent Successfully</h5><?php }?>
							<?php if($success === "no"){?><h5 style="color:red;">Error!! Message Was'nt Send</h5><?php }?>
                        
                        <form action="contect.php" method="post" role="form" class="contectform">

                            <div class="col-md-6 padding-right-zero">
                                <div class="form-group">
                                    <input class="input" type="text" required id="name" name="name" placeholder="Name">
                                    <?php if($nm === "invalid"){?><h6 style="color:red;">Invalid Name</h6><?php }?>
                                    <span id="Nameerror" class="text-danger font-weight-bold"></span>
                                </div>
                            </div>
                            <div class="col-md-6 padding-right-zero">
                                <div class="form-group">
                                    <input class="input" type="email" required id="email" name="email" placeholder="Email">
								<?php if($em === "invalid"){?><h6 style="color:red;">Invalid Email</h6><?php }?>
								<span id="Emailerror" class="text-danger font-weight-bold"></span>
                                </div>
                            </div>    
                            <div class="col-md-12 padding-right-zero">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12 padding-right-zero">
                                <div class="form-group">
                                    <input type="text" name="message" class="form-control" id="message" placeholder="Message">
                                </div>
                                <button type="submit" class="btn btn-primary btn-submit" name="submit" type="submit" value="Send">Send </button>
                            </div>
                        </form>
                    </div>
                </div>




            </div>
        </div>

    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="social-icon">
                        <a href="https://www.facebook.com/infernoinfosec/"><i class="fa fa-facebook"></i></a>
                                            <a href="https://www.instagram.com/inferno_infosec/"><i class="fa fa-instagram"></i></a>
                                            <a href="https://twitter.com/InfernoInfosec"><i class="fa fa-twitter"></i></a>
                                            <a href="https://www.linkedin.com/in/inferno-infosec-502213191/"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <div class="copyright">
                        <p>&copy;<b> inferno infosec 2019. All Rights Reserved</b>
                        </p>
                    </div>
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        $('.navbar-toggle').on('click', function() {
            $('#header').toggleClass('nav-collapse')
        });

    </script>
</body>





</body>

</html>
