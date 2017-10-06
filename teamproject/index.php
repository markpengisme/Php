<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>課後心得分享平台</title>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
    <script src="js/respond.min.js"></script> <![endif]-->      
        <!-- Place favicon.ico in the root directory -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css2/normalize.css">
        <link rel="stylesheet" href="css2/main.css">
        <link rel="stylesheet" href="css2/owl.carousel.css">
        <link rel="stylesheet" href="css2/responsive.css">

        
        <link rel="stylesheet" type="text/css" href="css4/easy-responsive-tabs.css " />
        <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
        

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
                width: 75%;
                margin: auto;
            }
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                padding: 20px;
                text-align: left;
                border-bottom: 1px solid black;
            }
            footer{
                background-color:white;
               
            }
            .login_text{
                color: #ffffff;
            }
            .sngl_tstm {
            display : table-cell;
            height : 100%;
            text-align : center;
            vertical-align : middle;
            }
            .sngl_tstm i {
            font-size : 25px;
            color : #fff;
            }
            .sngl_tstm h3 {
            color : #fff;
            font-size : 24px;
            letter-spacing : 1px;
            text-transform : uppercase;
            }
            .sngl_tstm p {
            color : #ffffff;
            font-size : 16px;
            line-height : 30px;
            }
            .sngl_tstm h6 {
            font-size : 12px;
            text-transform : uppercase;
            color : #fff;
            }

            agileits_copyright{
    text-align: center;
}
.agileits_copyright p{
    font-size: 1em;
    color:#fff;
    line-height: 1.8em;
    padding: 0 1em;
    text-transform: capitalize;
    margin-top: 2em;
}
.agileits_copyright p a {
    color:#4bba9f;
    text-decoration: underline;
}
.agileits_copyright p a:hover{
    color:#fff;
}
input[type="submit"],a{
    transition:.5s ease-in;
    -webkit-transition:.5s ease-in;
    -moz-transition:.5s ease-in;
    -o-transition:.5s ease-in;
    -ms-transition:.5s ease-in;
}
.main{
    padding:3em 0;
}
.main h1{
    text-align: center;
    color: #fff;
    font-size: 2.8em;
    margin: 0em 0 1em;
    text-transform: uppercase;
    letter-spacing: 5px;
    font-weight: 700;
}
/*-- //main --*/
.w3_agile_main_grids{
    width: 120%;
    margin: 0 auto;
    background: url() no-repeat 0px 0px;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
}
.w3layouts_main_grid{
    padding:1.5em 3em;
    background:rgba(0, 0, 0, 0.46);
}
.w3layouts_main_grid_left{
    float:left;
    width:50%;
}
.w3layouts_main_grid_left h2{
    font-size: 1.5em;
    color: #fff;
    font-weight: 700;
}
.w3layouts_main_grid_left p{
    font-size:14px;
    color:#999;
    margin:.5em 0 0;
}
.w3layouts_main_grid_left h3{
    font-size: 1em;
    color: #fff;
    font-weight: bold;
    margin:3em 0 .5em;
}
.w3layouts_main_grid_left h4{
    font-size:3.5em;
    color:#fff;
    font-weight:bold;
}
.w3layouts_main_grid_left h4 span{
    font-size: .5em;
    vertical-align: top;
}
.w3layouts_main_grid_right{
    float: right;
    width: 50%;
    text-align: center;
    margin-top: 2em;
}
.agile_main_grid_left{
    float: left;
    width: 40%;
    background: rgba(95, 252, 204, 0.69);
    min-height: 322px;
}
.wthree_main_grid_left_grid{
    padding:2.8em 1.5em;
}
.agileinfo_main_grid_right_grid{
    padding:1.5em;
}
.w3_agileits_main_grid_right{
    float:right;
    width:60%;
    background:rgba(255, 8, 8, 0.6);
}
.w3l_main_grid_left_grid1_left{
    float:left;
    width:50%;
}
.w3l_main_grid_left_grid1_left h3{
    text-transform: uppercase;
    font-size: .9em;
    font-weight: 600;
    color: #212121;
    letter-spacing: 1px;
}
.w3l_main_grid_left_grid1_left p{
    font-size: 2em;
    color: #1b4e3f;
    font-weight: 600;
}
.w3l_main_grid_left_grid1_left p span{
    font-size: .5em;
}
.w3l_main_grid_left_grid1_right{
    float:right;
    width:50%;
    text-align:right;
}
.w3ls_main_grid_left_grid1:nth-child(2){
    margin:2em 0;
}
.w3_main_grid_right_grid1_left{
    float:left;
    width:50%;
    text-align: center;
}
.w3_main_grid_right_grid1_left p,.w3_main_grid_right_grid1_right p{
    font-size:1em;
    color:#fff;
    font-weight:600;
}
.w3_main_grid_right_grid1_right{
    float:right;
    width:30%;
}
.w3_main_grid_right_grid1_right p i{
    font-style:normal;
}
.w3_main_grid_right_grid1_right p span{
    display:block;
    font-size:.8em;
}
.w3_main_grid_right_grid1{
    margin-bottom:1.5em;
}
.w3_main_grid_right_grid1:last-child{
    margin:0;
}
#w3time {
    font-size: 2em;
    margin: 1em 0 .5em;
    color: #4bba9f;
    font-weight: 600;
    text-align:right;
}
.w3layouts_date_year {
    font-size: 1.1em;
    color:#fff;
    text-align:right;
}
/*-- start-responsive-design --*/
@media (max-width:1366px){
    .w3_agile_main_grids {
        width: 55%;
    }
}
@media (max-width:1280px){
    .w3l_main_grid_left_grid1_right {
        width: 22%;
    }
    .w3l_main_grid_left_grid1_left {
        width: 78%;
    }
}
@media (max-width: 1080px){
    .w3_agile_main_grids {
        width: 70%;
    }
}
@media (max-width: 900px){
    .main h1 {
        font-size: 2.5em;
        letter-spacing: 3px;
    }
    .w3layouts_main_grid_left h2 {
        font-size: 1.3em;
    }
}
@media (max-width: 800px){
    .w3_agile_main_grids {
        width: 80%;
    }
}
@media (max-width: 768px){
    .w3_main_grid_right_grid1_left p, .w3_main_grid_right_grid1_right p {
        font-size: .9em;
    }
    .w3_main_grid_right_grid1_left {
        text-align: left;
    }
    #w3time {
        margin: .5em 0;
    }
    .w3ls_main_grid_left_grid1:nth-child(2) {
        margin: 3em 0;
    }
    .wthree_main_grid_left_grid {
        padding: 4em 1.5em 0;
    }
    .agile_main_grid_left {
        min-height: 300px;
    }
}
@media (max-width: 736px){
    .w3_agile_main_grids {
        width: 85%;
    }
}
@media (max-width: 667px){
    .w3layouts_main_grid {
        padding: 1.5em 2em;
    }
    .w3layouts_main_grid_left h2 {
        font-size: 1.2em;
    }
    .w3layouts_main_grid_left h3 {
        margin: 2em 0 .5em;
    }
    .w3layouts_main_grid_left h4 {
        font-size: 3em;
    }
    .main h1 {
        font-size: 2.3em;
    }
}
@media (max-width: 640px){
    .w3layouts_date_year {
        font-size: 1em;
    }
    .w3layouts_main_grid_left h2 {
        font-size: 1.1em;
    }
}
@media (max-width: 600px){
    .w3l_main_grid_left_grid1_left h3 {
        letter-spacing: 0px;
    }
    .main h1 {
        font-size: 2.1em;
    }
}
@media (max-width: 568px){
    canvas#sleet {
        width: 50px;
        height: 50px;
    }
    .w3layouts_main_grid_left h2 {
        font-size: 1em;
    }
    .w3layouts_date_year {
        font-size: .9em;
    }
    .agile_main_grid_left {
        min-height: auto;
        float: none;
        width: 100%;
    }
    .wthree_main_grid_left_grid {
        padding: 3em;
    }
    .w3ls_main_grid_left_grid1:nth-child(2) {
        margin: 2em 0;
    }
    .w3_agileits_main_grid_right {
        float: none;
        width: 100%;
    }
    .agileits_copyright p {
        font-size: 14px;
    }
}
@media (max-width: 480px){
    .main h1 {
        font-size: 1.8em;
        letter-spacing: 2px;
    }
    .main {
        padding: 2em 0;
    }
    .w3layouts_main_grid {
        padding: 1.5em;
    }
    .w3layouts_main_grid_left h2 {
        font-size: .85em;
    }
    #w3time {
        font-size: 1.8em;
    }
    .w3layouts_date_year {
        font-size: .8em;
    }
    .w3layouts_main_grid_right {
        margin-top: 1em;
    }
    .w3l_main_grid_left_grid1_right canvas{
        width:30px;
        height:30px;
    }
    .w3l_main_grid_left_grid1_left p {
        font-size: 1.7em;
    }
    .w3l_main_grid_left_grid1_left h3 {
        font-size: .8em;
    }
    .w3ls_main_grid_left_grid1:nth-child(2) {
        margin: 1.5em 0;
    }
    .wthree_main_grid_left_grid {
        padding: 2em;
    }
}
@media (max-width: 414px){
    .main h1 {
        font-size: 1.6em;
    }
    .w3_agile_main_grids {
        width: 95%;
    }
}
@media (max-width: 384px){
    .main h1 {
        letter-spacing: 1px;
    }
}
@media (max-width: 375px){
    .main h1 {
        font-size: 1.5em;
    }
    #w3time {
        font-size: 1.6em;
        margin: 0 0 .3em;
    }
}
@media (max-width: 320px){
    .main h1 {
        font-size: 1.3em;
    }
    .w3layouts_main_grid_left h4 {
        font-size: 2.5em;
    }
    .w3layouts_main_grid_left h3,.w3layouts_main_grid_left h2 {
        font-size: .8em;
    }
    .w3layouts_main_grid_left p,.w3_main_grid_right_grid1_left p, .w3_main_grid_right_grid1_right p,.agileits_copyright p {
        font-size: 13px;
    }
    .w3_main_grid_right_grid1 {
        margin-bottom: 1em;
    }
    canvas#sleet {
        width: 40px;
        height: 40px;
    }
    #w3time {
        font-size: 1.5em;
    }
    .w3layouts_main_grid {
        padding: 1.5em 1.5em 1em;
    }
    .wthree_main_grid_left_grid {
        padding: 1.5em;
    }
}

.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{ vertical-align:baseline;}/* vertical align baseline */
.vertical-top{  vertical-align:top;}/* vertical align top */
nav.vertical ul li{ display:block;}/* vertical menu */
nav.horizontal ul li{   display: inline-block;}
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default" style="background-color:#4F4F4F">
        
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="nav navbar-header-1">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="img/logo.png" width="125px" height="80px" align="left">
                <a class="navbar-brand" href="index.php"> <h1>Tiger Duck 剋星</h1></a> 
                     <a class="navbar-brand" href=http://www.gwoguang.byethost6.com/SASD/01SASD.html?i=1><h3>系統分析教學</h3></a>
                     <a class="navbar-brand" href="http://140.118.109.127/"><h3>師徒職涯探索平台</h3></a>
                     
                    <? if(!isset($_SESSION['id'])){
                    ?>
                  <ul class="nav navbar-nav navbar-right">
                        <li><a href="membership.php"><h3>會員註冊</h3></a></li>
                  </ul>
                <?}else{?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a><h3><?=$_SESSION['name']?>,你好</h3></a></li>
                    </ul>
                <?}
                    ?>


                 
            </div>

                   <br>

            
    
           
    
    
            <!-- Collect the nav links, forms, and other content for toggling -->
 
        
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               
                <ul class="nav navbar-nav ">
                     
                        <li>
                            <a href="course.php"><h4 style="color:#FFFFFF">課程查詢系統</h4></a>
                        </li>
                        <li>
                            <a href="comments.php"><h4 style="color:#FFFFFF">課後心得分享</h4></a>
                        </li>
                        <li>
                            <a href="message.php"><h4 style="color:#FFFFFF">台科趣事隨便聊</h4></a>
                        </li>
                        <li>
                            <a href="Q&A.html"><h4 style="color:#FFFFFF">Q&A問題專區</h4></a>
                        </li>
                        
                     

                </ul>
                   
                   
                    <ul class="nav navbar-nav navbar-right">

                          <form class="navbar-form navbar-right" role="search">

                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Search</button>
                          </form>

                            
                    </ul>
                 
            <!-- /.navbar-collapse -->
          
        </div>
        <!-- /.container -->
    </nav>

<!--/smarty/templates/shs_member.htm-->
        <!--/smarty/templates/shs_features.htm-->
            

         <div class="row">
             
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                
                
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                              
                        </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox" >
                              
                              <div class="item active">
                                  <img src="img/3.jpg" alt="ntust" width="400" height="200">
                              </div>
                  
                              <div class="item">
                                  <img src="img/2.jpg" alt="ntust" width="400" height="200">
                              </div>

                               <div class="item">
                                  <img src="img/1.jpg" alt="ntust" width="400" height="200">
                              </div>

                            
                          </div>

                              <!-- Left and right controls -->
                          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                 
                <!-- Controls -->
               
           </div>
        
           
    </div>
    <br>
    <br>
    <br>
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    <div class="container1">
        <?if(!isset($_SESSION['id']))
            {?>
            <h1 class="login">會員登入</h1>
                <form name="loginform" class="queryform" method="post" action="/action.php">
                 
                    <div>
                        <label><h3>帳號 </h3></label>
                        <input type="text" name="account" id="account" />
                        <!-- <input type="hidden" name="p" value="user_login">
                        <input type="hidden" name="redirect_url" value="/"> -->
                    </div>
                    <div>
                        <!--<label>密碼 </label><input type="password" name="user_password" id="user_password" />-->
                        <label><h3>密碼</h3> </label><input type="password" name="password" id="password" />
                    </div>
                    <div>
                        <a href="#" onclick="MM_openBrWindow('/queryhint.php','QUserInfo','width=500,height=300'); return false;">查詢我的密碼</a>
                        <input type="hidden" name="action" value="sign_in"></input>
                        <button onclick="chkData()"/>Sign in</button>
                    </div>
                </form>     
        <? }else{?>
            <p class='login_text'>你已成功登入</p>
            <button onclick="location.href = '/logout.php'">Log out</button>
        <?}?>
                
       <script language="JavaScript">
            function chkData() {
                if (loginform.account.value == '' || loginform.password.value == '') {
                    alert("請輸入您的帳號與密碼");
                    return;
                }
                else{
                   loginform.submit();
                }
            }
        </script>
                
    </div> 
    <br>
    <br>
    <div class="list">
               <a class="list-group-item" href="about.html" style="background-color:#4F4F4F"><h1>各系學生專區</h1></a>
            <a class="list-group-item" href="course.html" style="background-color:#4F4F4F"><h3 style="text-align: center;">資管系專區</h3></a>
            <a class="list-group-item" href="article.html" style="background-color:#4F4F4F"><h3 style="text-align: center;">工管系專區</h3></a>
            <a class="list-group-item" href="movie.html" style="background-color:#4F4F4F"><h3 style="text-align: center;">企管系專區</h3></a>
            <a class="list-group-item" href="movie.html" style="background-color:#4F4F4F"><h3 style="text-align: center;">管不分專區</h3></a>
            
        
    </div>
    
 
       

</div>


    <!-- Page Content -->
    <BODY onload="startTime()">
    <div class="container">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
        <!-- Marketing Icons Section -->
        <div class="row" >

            <div class="col-lg-12">
                <h1 class="page-header">
                    歡迎來到台科管院學生專屬的網站
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 style="color:#272727"><i class="fa fa-fw fa-check"></i> New fashion </h4>
                    </div>
                    <div class="panel-body">
                        <p>不同於以往的課程分享</p>
                        <p>跳脫舊有思維,給你全新的平台享受</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 style="color:#272727"><i class="fa fa-fw fa-gift"></i>Experience & Source</h4>
                    </div>
                    <div class="panel-body">
                        <p>我們提供一個學長姊分享上課經驗的討論區,</p>
                        <p>讓大家都能得到滿滿的大收穫</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 style="color:#272727"><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                    </div>
                    <div class="panel-body">
                        <p>我們擁有便利化的設計,</p>
                        <p>讓大家都能輕鬆上手</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
   
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
             <div class="row"> 
             <div class="col-lg-12">
                <h1 class="page-header">
                    這是屬於台科管院學生專屬的網站                             今日天氣
                </h1>
               
            </div> 

            
    
        <div class="w3_agile_main_grids">
            <div class="w3layouts_main_grid">
                <div class="w3layouts_main_grid_left">
                    <h2>台灣, 台灣科技大學.</h2>
                    <p>Mostly Rainy</p>
                    <h3>Now</h3>
                    <h4>25<span>°c</span></h4>
                </div>
                <div class="w3layouts_main_grid_right">
                    <canvas id="sleet" width="70" height="70"> </canvas>
                    <div id="w3time"></div>
                    <div class="w3layouts_date_year">
                        <!-- date -->
                            <script type="text/javascript">
                               var mydate=new Date()
                               var year=mydate.getYear()
                               if(year<1000)
                                 year+=1900
                                 var day=mydate.getDay()
                                 var month=mydate.getMonth()
                                 var daym=mydate.getDate()
                               if(daym<10)
                                 daym="0"+daym
                                 var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
                                 var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
                                 document.write(""+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+"")
                            </script>
                        <!-- //date -->
                    </div>
                </div>
                <div class="clear"> </div>
            </div>
            
            <div class="agileits_w3layouts_main_grid">
                <div class="agile_main_grid_left">
                    <div class="wthree_main_grid_left_grid">
                        <div class="w3ls_main_grid_left_grid1">
                            <div class="w3l_main_grid_left_grid1_left">
                                <h3>Partly Sunny</h3>
                                <p>3 <span>%</span></p>
                            </div>
                            <div class="w3l_main_grid_left_grid1_right">
                                <canvas id="partly-cloudy-day" width="45" height="45"></canvas>
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <div class="w3ls_main_grid_left_grid1">
                            <div class="w3l_main_grid_left_grid1_left">
                                <h3>Cloud</h3>
                                <p>38 <span>%</span></p>
                            </div>
                            <div class="w3l_main_grid_left_grid1_right">
                                <canvas id="cloudy" width="45" height="45"></canvas>
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <div class="w3ls_main_grid_left_grid1">
                            <div class="w3l_main_grid_left_grid1_left">
                                <h3>Wind</h3>
                                <p>14 <span>Km/h</span></p>
                            </div>
                            <div class="w3l_main_grid_left_grid1_right">
                                <canvas id="wind" width="45" height="45"></canvas>
                            </div>
                            <div class="clear"> </div>
                        </div>
                    </div>
                </div>
                <div class="w3_agileits_main_grid_right">
                    <div class="agileinfo_main_grid_right_grid">
                        <div id="parentHorizontalTab">
                            <ul class="resp-tabs-list hor_1">
                                <li>Today</li>
                                <li>Week</li>
                                <li>Month</li>
                            </ul>
                            <div class="resp-tabs-container hor_1">
                                <div class="w3_agileits_tabs">
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>10 AM</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>15<i>°c</i><span>Cloudy</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>11 AM</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>16<i>°c</i><span>Clear</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>12 PM</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>18<i>°c</i><span>Cear</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>2 PM</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>12<i>°c</i><span>Partly Cloudy</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                </div>
                                <div class="w3_agileits_tabs">
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>Monday</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>14<i>°c</i><span>Clear</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>Tuesday</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>16<i>°c</i><span>Cloudy</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>Wednesday</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>11<i>°c</i><span>Rainy</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>Thursday</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>18<i>°c</i><span>Sunny</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                </div>
                                <div class="w3_agileits_tabs">
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>January</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>18<i>°c</i><span>Cloudy</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>February</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>14<i>°c</i><span>Clear</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>March</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>18<i>°c</i><span>Cear</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>April</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>12<i>°c</i><span>Partly Cloudy</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
      



            </div>
            </div>
        
      

        <!-- Portfolio Section -->
        

        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">網站主要 資管系 企管系 工管系  課程分享為主</h2>
            </div>
            <div class="col-md-6">
            <h4>
                <strong><p>各系系所的課程</p><strong>
                <br>
                <p>Course example:</p>
                <ul>
                    <li>資料庫系統</li>
                    <li>行銷管理</li>
                    <li>人力資源管理</li>
                    <li>生產與作業管理</li>
                    <li>人因工程學+實習</li>
                </ul>
                <p>藉由學長姊的分享,能讓學弟妹們對於本系的課程能有更深的了解,陌生的科目也能在我們平台的幫助下,達到最好的效果</p>
            </h4>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/image1.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

            

      
        
        <div class="row">
         <section id="ltd_map_sec">
            
               
                     
                    <div class="col-lg-12">
                        <div class="map">                       
                       <h2 class="page-header">我們在這裡</h2><a href="" class="show_hide" rel="#slidingDiv"><i class="fa fa-angle-up"></i></a>
                        <div id="slidingDiv">
                            <div class="map_area">
                                <div id="googleMap" style="width:100%;height:300px;"></div>
                            </div>
                        </div>  
                    </div>
                    
                </div>
            
            </section>
        </div>

        <div class="col-lg-12">
          <section id="tm_sec">
    
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                     <h2 class="page-header">團隊成員</h2>
                    <h3>我們因系統分析這門課而聚在一起,希望能開發出一個能為台科學生謀福利的網站</h3>
                </div>          
            </div>      
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12">
                <div class="all_team">
                    <div class="sngl_team">                     
                        <img src="img/per1.png" alt=""/>  
                        <h3> 四資管二 <span>高聖哲</span></h3>
                        <p>組長</p>                     
                    </div>                  
                    <div class="sngl_team">                     
                        <img src="img/per2.png" alt=""/>  
                        <h3>四資管二 <span> 賴俞潔 </span></h3>
                        <p>組員</p>                     
                    </div>              
                    <div class="sngl_team">                     
                      <img src="img/per3.png" alt=""/>  
                        <h3> 四資管二 <span>彭聖貿</span></h3>
                        <p>組員</p>                     
                    </div>              
                    <div class="sngl_team">                     
                        <img src="img/per4.png" alt=""/>  
                        <h3>四不分二<span> 李依純 </span></h3>
                        <p>組員</p>                     
                    </div>                  
                    <div class="sngl_team">                     
                        <img src="img/per5.png" alt=""/>  
                        <h3> 四資管二 <span>李東丞</span></h3>
                        <p>組員</p>                     
                    </div>                  
                    <div class="sngl_team">                     
                        <img src="img/per6.png" alt=""/>
                        <h3>四管不分二 <span> 賴靖雯 </span></h3>  
                        <p>組員</p>                     
                    </div>              
                   
            </div>
        
    </div>
   </section>


    
        
       


    
     

     

          <footer>

            
                <div class="col-lg-12">
                    <p>本網頁由第二組組員全體製作</p>
                </div>
            


        <div class="share">
            <div class="row">
                    <div class="col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
                                <ul>
                    <li style="float:left;list-style-type:none;width:47px"><!--Facebook分享按鈕-->
                        <a target="_blank" href="http://www.facebook.com/share.php?u=https://www.youtube.com">
                        <img title="分享到臉書！" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDQ4IDQ4IiBpZD0iTGF5ZXJfMSIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgNDggNDgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxjaXJjbGUgY3g9IjI0IiBjeT0iMjQiIGZpbGw9IiM0RTcxQTgiIHI9IjI0Ii8+PHBhdGggZD0iTTI5LjksMTkuNWgtNHYtMi42YzAtMSwwLjctMS4yLDEuMS0xLjJjMC41LDAsMi44LDAsMi44LDB2LTQuNGwtMy45LDBjLTQuNCwwLTUuMywzLjMtNS4zLDUuM3YyLjloLTIuNVYyNCAgaDIuNWMwLDUuOCwwLDEyLjcsMCwxMi43aDUuM2MwLDAsMC03LDAtMTIuN2gzLjZMMjkuOSwxOS41eiIgZmlsbD0iI0ZGRkZGRiIvPjwvc3ZnPg==" border="0" width="40" /></a>
                    </li>
                    <li style="float:left;list-style-type:none;width:47px"><!--Google+分享按鈕-->
                        <a target="_blank" href="https://plus.google.com/share?url=https://www.youtube.com">
                        <img title="分享到Google+！" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDQ4IDQ4IiBpZD0iTGF5ZXJfMSIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgNDggNDgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxjaXJjbGUgY3g9IjI0IiBjeT0iMjQiIGZpbGw9IiNFMzQxMUYiIHI9IjI0Ii8+PGc+PHBhdGggZD0iTTI0LjgsMjUuOGMtMC43LTAuNS0yLTEuNy0yLTIuM2MwLTAuOCwwLjItMS4yLDEuNC0yLjJjMS4yLTEsMi4xLTIuMywyLjEtMy45YzAtMS45LTAuOC0zLjctMi40LTQuNGgyLjQgICBsMS43LTEuMmgtNy41Yy0zLjQsMC02LjYsMi42LTYuNiw1LjVjMCwzLDIuMyw1LjUsNS43LDUuNWMwLjIsMCwwLjUsMCwwLjcsMGMtMC4yLDAuNC0wLjQsMC45LTAuNCwxLjRjMCwwLjgsMC41LDEuNSwxLDIuMSAgIGMtMC40LDAtMC45LDAtMS4zLDBjLTQuMiwwLTcuNCwyLjctNy40LDUuNGMwLDIuNywzLjUsNC40LDcuNyw0LjRjNC44LDAsNy40LTIuNyw3LjQtNS40QzI3LjQsMjguNiwyNi44LDI3LjIsMjQuOCwyNS44eiAgICBNMjAuNywyMi4xYy0xLjktMC4xLTMuOC0yLjItNC4xLTQuN2MtMC4zLTIuNiwxLTQuNSwyLjktNC40YzEuOSwwLjEsMy44LDIuMSw0LjEsNC43QzI0LDIwLjEsMjIuNywyMi4xLDIwLjcsMjIuMXogTTIwLDM1ICAgYy0yLjksMC01LTEuOC01LTRjMC0yLjIsMi42LTQsNS41LTMuOWMwLjcsMCwxLjMsMC4xLDEuOSwwLjNjMS42LDEuMSwyLjcsMS43LDMsM2MwLjEsMC4zLDAuMSwwLjUsMC4xLDAuOEMyNS41LDMzLjIsMjQsMzUsMjAsMzV6ICAgIiBmaWxsPSIjRkZGRkZGIi8+PHBvbHlnb24gZmlsbD0iI0ZGRkZGRiIgcG9pbnRzPSIzMi44LDIyLjMgMzIuOCwxOS40IDMwLjQsMTkuNCAzMC40LDIyLjMgMjcuNSwyMi4zIDI3LjUsMjQuNiAzMC40LDI0LjYgMzAuNCwyNy42IDMyLjgsMjcuNiAgICAzMi44LDI0LjYgMzUuNywyNC42IDM1LjcsMjIuMyAgIi8+PC9nPjwvc3ZnPg==" border="0" width="40" /></a>
                    </li>
                    <li style="float:left;list-style-type:none;width:47px">
                        <!--Twitter分享按鈕-->
                        <a target="_blank" href="http://twitter.com/home/?status=https://www.youtube.com">
                        <img title="分享到推特！" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDQ4IDQ4IiBpZD0iTGF5ZXJfMSIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgNDggNDgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxjaXJjbGUgY3g9IjI0IiBjeT0iMjQiIGZpbGw9IiMxQ0I3RUIiIHI9IjI0Ii8+PGc+PGc+PHBhdGggZD0iTTM2LjgsMTUuNGMtMC45LDAuNS0yLDAuOC0zLDAuOWMxLjEtMC43LDEuOS0xLjgsMi4zLTMuMWMtMSwwLjYtMi4xLDEuMS0zLjQsMS40Yy0xLTEuMS0yLjMtMS44LTMuOC0xLjggICAgYy0yLjksMC01LjMsMi41LTUuMyw1LjdjMCwwLjQsMCwwLjksMC4xLDEuM2MtNC40LTAuMi04LjMtMi41LTEwLjktNS45Yy0wLjUsMC44LTAuNywxLjgtMC43LDIuOWMwLDIsMC45LDMuNywyLjMsNC43ICAgIGMtMC45LDAtMS43LTAuMy0yLjQtMC43YzAsMCwwLDAuMSwwLDAuMWMwLDIuNywxLjgsNSw0LjIsNS42Yy0wLjQsMC4xLTAuOSwwLjItMS40LDAuMmMtMC4zLDAtMC43LDAtMS0wLjEgICAgYzAuNywyLjMsMi42LDMuOSw0LjksMy45Yy0xLjgsMS41LTQuMSwyLjQtNi41LDIuNGMtMC40LDAtMC44LDAtMS4zLTAuMWMyLjMsMS42LDUuMSwyLjYsOC4xLDIuNmM5LjcsMCwxNS04LjYsMTUtMTYuMSAgICBjMC0wLjIsMC0wLjUsMC0wLjdDMzUuMiwxNy42LDM2LjEsMTYuNiwzNi44LDE1LjR6IiBmaWxsPSIjRkZGRkZGIi8+PC9nPjwvZz48L3N2Zz4=" border="0" width="40" /></a>
                    </li>
                    <li style="float:left;list-style-type:none;width:47px">
                        <!--微博分享按鈕-->
                        <a target="_blank" href="http://service.weibo.com/share/share.php?title=https://www.youtube.com">
                        <img title="分享到微博！" src=data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGhlaWdodD0iMjU2cHgiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDI1NiAyNTY7IiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAyNTYgMjU2IiB3aWR0aD0iMjU2cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnIGlkPSJCYWNrZ3JvdW5kXzFfIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3ICAgIDsiPjxnIGlkPSJCYWNrZ3JvdW5kIj48Zz48cGF0aCBkPSJNMjQ5LjQyMiwzMC42OGMtMi43MjEtNC45ODYtNS44MTYtOS41MzctOS43OTMtMTMuNTIxICAgICBjLTMuOTkyLTMuOTk4LTguNzA5LTcuNTg3LTEzLjcwMy0xMC4zMTRjLTguMzgxLTQuNTc2LTE4Ljc4OC02Ljg1NS0yOS4wMDItNi44NTVINTkuMDc1Yy0xMC40NDQsMC0yMC41NDIsMi4zNDQtMjkuMjY1LDYuOTQ4ICAgICBjLTUuMDIyLDIuNjQ5LTkuNTg4LDYuMTQ2LTEzLjUwMiwxMC4xMjZjLTMuOTMyLDMuOTk4LTcuNDkxLDguNDg4LTEwLjA0NiwxMy41NzJjLTQuMjg5LDguNTMzLTYuMjc0LDE4LjQ3OC02LjI3NCwyOC42NXYxMzcuNDMgICAgIGMwLDEwLjMyNiwxLjY3MSwyMC42NzgsNi4yOTYsMjkuMTM0YzIuNjgxLDQuOSw2LjE5MSw5Ljg2LDEwLjA4NywxMy43OTVjMy45MzQsMy45Nyw4LjU4Myw3LjIyNSwxMy41MDMsOS45NTUgICAgIGM4LjQ2NSw0LjcsMTguODQyLDYuNDEzLDI5LjIwMSw2LjQxM2gxMzcuODQ5YzEwLjU2OCwwLDIwLjM5OS0xLjUyMywyOC45ODItNi40MDFjNC43MzktMi42OTIsOS44NzktNi4xMTMsMTMuNjg3LTkuOTY2ICAgICBjMy45MjMtMy45NjgsNy4yLTguODUxLDkuODg2LTEzLjc5OWM0LjU2Ni04LjQxNSw2LjUzMy0xOC44NzQsNi41MzMtMjkuMTMxVjU5LjI4NUMyNTYuMDEyLDQ4Ljk3OCwyNTQuMDMxLDM5LjEyNCwyNDkuNDIyLDMwLjY4ICAgICB6IiBzdHlsZT0iZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojRkZFNTkxOyIvPjwvZz48L2c+PC9nPjxnIGlkPSJTaGFwZV80XzFfIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3ICAgIDsiPjxnIGlkPSJTaGFwZV80Ij48Zz48cGF0aCBkPSJNMTY5LjIxNywxNTEuMDc0Yy0yLjA4OC0yMC44NjYtMjkuODYxLTM1LjIzOS02Mi4wNC0zMi4wOTUgICAgIGMtMzIuMTcxLDMuMTQ1LTU2LjU2OCwyMi42MTEtNTQuNDc4LDQzLjQ3OWMyLjA5LDIwLjg3NiwyOS44NjUsMzUuMjQ4LDYyLjAzOSwzMi4xMSAgICAgQzE0Ni45MTYsMTkxLjQyNSwxNzEuMzAzLDE3MS45NTcsMTY5LjIxNywxNTEuMDc0eiIgc3R5bGU9ImZpbGwtcnVsZTpldmVub2RkO2NsaXAtcnVsZTpldmVub2RkO2ZpbGw6I0ZGRkZGRjsiLz48L2c+PC9nPjwvZz48ZyBpZD0iU2hhcGVfM18xXyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAgICA7Ij48ZyBpZD0iU2hhcGVfMyI+PGc+PHBhdGggZD0iTTE3OS4wOTIsMTI1LjI3NmMtMi43MzgtMC44MTItNC42MTUtMS4zNjEtMy4xOC00LjkxNyAgICAgYzMuMTA0LTcuNzE1LDMuNDI1LTE0LjM3MiwwLjA1OS0xOS4xMjFjLTYuMzExLTguOTA4LTIzLjU3Mi04LjQyNy00My4zNTktMC4yMzljMC0wLjAxMS02LjIxMiwyLjY4Ny00LjYyNS0yLjE4NCAgICAgYzMuMDQ0LTkuNjcsMi41ODUtMTcuNzcxLTIuMTUxLTIyLjQ0NGMtMTAuNzM2LTEwLjYxNi0zOS4yODQsMC4zOTktNjMuNzY0LDI0LjU4NWMtMTguMzMzLDE4LjEyLTI4Ljk3OSwzNy4zMjUtMjguOTc5LDUzLjkyOCAgICAgYzAsMzEuNzYsNDEuMjE1LDUxLjA3LDgxLjUzNiw1MS4wN2M1Mi44NTgsMCw4OC4wMTktMzAuMzQ1LDg4LjAxOS01NC40NDNDMjAyLjY0OCwxMzYuOTUyLDE5MC4yMzksMTI4LjY5MiwxNzkuMDkyLDEyNS4yNzZ6ICAgICAgTTExNC43MzgsMTk0LjU2OWMtMzIuMTc0LDMuMTM4LTU5Ljk0OS0xMS4yMzQtNjIuMDM5LTMyLjExYy0yLjA5LTIwLjg2OCwyMi4zMDctNDAuMzM1LDU0LjQ3OC00My40NzkgICAgIGMzMi4xNzktMy4xNDUsNTkuOTUyLDExLjIyOSw2Mi4wNCwzMi4wOTVDMTcxLjMwMywxNzEuOTU3LDE0Ni45MTYsMTkxLjQyNSwxMTQuNzM4LDE5NC41Njl6IiBzdHlsZT0iZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojQ0QyMDFGOyIvPjwvZz48L2c+PC9nPjxnIGlkPSJTaGFwZV8yXzFfIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3ICAgIDsiPjxnIGlkPSJTaGFwZV8yIj48Zz48cGF0aCBkPSJNMTE3LjU3MiwxMzQuNDQxYy0xNS4zMTktMy45MDUtMzIuNjM2LDMuNTczLTM5LjI5LDE2LjgwMiAgICAgYy02Ljc3NywxMy40ODMtMC4yMjUsMjguNDU2LDE1LjI1NCwzMy4zNTRjMTYuMDMyLDUuMDYzLDM0LjkzLTIuNzAxLDQxLjUtMTcuMjU1ICAgICBDMTQxLjUxNiwxNTMuMTA3LDEzMy40MjYsMTM4LjQ1NCwxMTcuNTcyLDEzNC40NDF6IE0xMDUuODc0LDE2OC44ODljLTMuMTE1LDQuODYzLTkuNzgzLDYuOTk2LTE0LjgwNiw0Ljc0OSAgICAgYy00Ljk0OS0yLjIwNC02LjQxMS03Ljg2MS0zLjI5Ni0xMi42MDRjMy4wNzYtNC43MjksOS41Mi02LjgzNCwxNC41MDUtNC43ODVDMTA3LjMyMSwxNTguMzU0LDEwOC45MzEsMTYzLjk2OSwxMDUuODc0LDE2OC44ODl6ICAgICAgTTExNi4xMzEsMTU1Ljk4NWMtMS4xMjUsMS44ODctMy42MTUsMi43OTQtNS41NjUsMi4wMDdjLTEuOTE3LTAuNzcyLTIuNTE4LTIuODc4LTEuNDI5LTQuNzM1ICAgICBjMS4xMjItMS44NDQsMy41MTMtMi43NDQsNS40MjctMS45OTlDMTE2LjUwOCwxNTEuOTUyLDExNy4yMDYsMTU0LjA4NiwxMTYuMTMxLDE1NS45ODV6IiBzdHlsZT0iZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojMjMyMzIzOyIvPjwvZz48L2c+PC9nPjxnIGlkPSJTaGFwZV8xXzFfIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3ICAgIDsiPjxnIGlkPSJTaGFwZV8xIj48Zz48cGF0aCBkPSJNMjEyLjExMSw2Ny4zMDhjLTEyLjQ4LTE0LjQwMy0zMC44OTEtMTkuODk0LTQ3Ljg4Mi0xNi4xMzMgICAgIGgtMC4wMDdjLTMuOTMyLDAuODc2LTYuNDM4LDQuOTAxLTUuNTk4LDguOTg2YzAuODM5LDQuMDg5LDQuNzA2LDYuNzAxLDguNjM5LDUuODI5YzEyLjA4OC0yLjY3MiwyNS4xNjgsMS4yMzYsMzQuMDQzLDExLjQ2NyAgICAgYzguODYzLDEwLjIzLDExLjI3MSwyNC4xODUsNy40NzUsMzYuNDE2bDAuMDAyLDAuMDA0Yy0xLjIzNiwzLjk4NiwwLjg1Niw4LjI0Nyw0LjY4OSw5LjUzNWMzLjgxNywxLjI4OCw3LjkyMi0wLjg5MSw5LjE2LTQuODY0ICAgICBjMC0wLjAwOCwwLTAuMDIyLDAuMDAzLTAuMDNDMjI3Ljk2NSwxMDEuMzExLDIyNC41OTUsODEuNjk2LDIxMi4xMTEsNjcuMzA4eiBNMTY5LjYyMSw3Ny40NjQgICAgIGMtMy4zODMsMC43NTEtNS41NCw0LjIxOC00LjgxNSw3Ljc0M2MwLjcyNiwzLjUxLDQuMDUyLDUuNzY3LDcuNDI5LDUuMDAxdjAuMDA3YzQuMDQ4LTAuODksOC40MzYsMC40MDksMTEuNDA0LDMuODMxICAgICBjMi45NzUsMy40MywzLjc3Myw4LjEwNCwyLjQ5NywxMi4yMDNoMC4wMDdjLTEuMDYxLDMuNDIyLDAuNzM4LDcuMTAzLDQuMDMsOC4yMTRjMy4yOTIsMS4wOTcsNi44MjMtMC43NzMsNy44ODQtNC4yMDMgICAgIGMyLjYwMy04LjM4MywwLjk3Ny0xNy45MzYtNS4xMTEtMjQuOTVDMTg2Ljg3MSw3OC4yOTYsMTc3LjkwMSw3NS42MzIsMTY5LjYyMSw3Ny40NjR6IiBzdHlsZT0iZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojREQ4ODBDOyIvPjwvZz48L2c+PC9nPjwvc3ZnPg== border="0" width="40" /></a>
                    </li>
                </ul>
            </div>
            </div>
        </div>    
        
        </div> 
        </footer>
            
      
     
     
        
   
    <!-- /.container -->
     <!-- Google -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/jquery-1.11.2.min.js"></script>

<script src="js/isotope.pkgd.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/appear.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/showHide.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>
<script src="js/plugins.js"></script>
<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
              var mapOptions = {
                zoom: 14,
                scrollwheel: false,
                center: new google.maps.LatLng(25.0130727, 121.5394628)
              };
              var map = new google.maps.Map(document.getElementById('googleMap'),
                  mapOptions);
              var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation:google.maps.Animation.BOUNCE,
                icon: 'img/map-marker.png',
                map: map
              });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
<script src="js/main.js"></script>

<script src="showHide.js" type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function(){


   $('.show_hide').showHide({            
        speed: 1000,  // speed you want the toggle to happen    
        easing: '',  // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
        changeText: 1, // if you dont want the button text to change, set this to 0
        showText: 'View',// the button text to show when a div is closed
        hideText: 'Close' // the button text to show when a div is open
                     
    }); 


});

</script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>

<script>

  //Hide Overflow of Body on DOM Ready //
$(document).ready(function(){
    $("body").css("overflow", "hidden");
});

// Show Overflow of Body when Everything has Loaded 
$(window).load(function(){
    $("body").css("overflow", "visible");        
    var nice=$('html').niceScroll({
    cursorborder:"5",
    cursorcolor:"#00AFF0",
    cursorwidth:"3px",
    boxzoom:true, 
    autohidemode:true
    });

});
</script>

<script src="js/skycons.js"></script>
        <script>
         var icons = new Skycons({"color": "#999999"}),
              list  = [
                "sleet"
              ],
              i;

          for(i = list.length; i--; )
            icons.set(list[i], list[i]);

          icons.play();
        </script>
        <script>
             var icons = new Skycons({"color": "#f5f5f5"}),
                  list  = [
                    "clear-night", "partly-cloudy-day",
                    "partly-cloudy-night", "cloudy", "rain", "clear-day", "snow", "wind",
                    "fog"
                  ],
                  i;

              for(i = list.length; i--; )
                icons.set(list[i], list[i]);

              icons.play();
        </script>
    <!-- //sky-icons -->
    <!-- tabs -->
        <script src="js/easyResponsiveTabs.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                //Horizontal Tab
                $('#parentHorizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion
                    width: 'auto', //auto or any width like 600px
                    fit: true, // 100% fit in a container
                    tabidentify: 'hor_1', // The tab groups identifier
                    activate: function(event) { // Callback function if tab is switched
                        var $tab = $(this);
                        var $info = $('#nested-tabInfo');
                        var $name = $('span', $info);
                        $name.text($tab.text());
                        $info.show();
                    }
                });
            });
        </script>
    <!-- //tabs -->
    <!-- time -->
        <script>
            function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('w3time').innerHTML =
                h + ":" + m + ":" + s;
                var t = setTimeout(startTime, 500);
            }
            function checkTime(i) {
                if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
                return i;
            }
        </script>


</body>

</html>
