<?php session_start(); ?>
<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Information</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <style>
        div.inner {
            height: 90%;
            width: 90%;
            top: 0;
            left: 0;
        }
        
        p {
            text-align: left;
            font-size: 12pt;
        }
        h3{
            font-size: 18pt;
            text-align: left;
        }
        .jumbotron{

        }
    </style>
</head>

<body class="index">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <h1 id="logo"><a href="">ACtivities <span>MANAGEMENT</span></a></h1>
            <nav id="nav">
                <ul>
                    <li class="current"><a href="index2.php">Home</a></li>
                    <li class="submenu">
                        <a href="signin.php">Layouts</a>
                        <ul>             
                            <li><a href="information.php">Information</a></li>
                            <li class="submenu"><a href="#">Activities</a>
                                <ul>
                                    <li><a href="activity_show.php">Recent Activity</a></li>
                                    <li><a href="activity_insert.php">Create New Activitiy</a></li>
                                </ul>
                            </li>
                            <li><a href="feedback.php">Feedback</a></li>
                            <li class="submenu">
                                <a href="#">Contact Us</a>
                                <ul>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <?php
								if(isset($_SESSION['username'])){
								if($_SESSION['username']!=null){
							?>
							<li class="current"><a href="logout.php">Log Out</a></li>
							<li><a href="profile.php" class="button special">
								<?php
									echo $_SESSION['username'];		
									//將資料庫裡的所有會員資料顯示在畫面上
									//$sql = "SELECT * FROM future";
									//$result = $conn->query($sql);
									}}
									else{
										echo '<a href="signin.php"><strong>SIGN IN</strong></a>';
									}
								?>
							</a></li>
                </ul>
            </nav>
        </header>

        <!-- Banner -->
        <section id="banner">

            <!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
            <div class="inner">
                <header>
                    <h2>INFORMATION</h2>
                </header>
                <div class="row 50%">
                    <div class="12u">
                        <h3>選課通知</h3>
                        <p>選課時間：2017年6月9號<br>
                           內容：大家要記得選課喔～</p>
                    </div>
                    <p>------------------------------------</p>
                    <div class="12u">
                        <h3>停課通知</h3>
                        <p>演算法停課<br>
                           時間：2017年5月13日～<br>
                           內容：老師出差，大家這天放假一天！！</p>
                    </div>
                </div>

            </div>



        </section>






    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollgress.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>

</body>

</html>