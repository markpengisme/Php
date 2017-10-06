<?php
require($_SERVER['DOCUMENT_ROOT'].'/function.php');
if (!isset($_SESSION['id'])) {
  echo "<script>alert('請先登入'); location.href = '/index.php';</script>";
  exit();
}
if(empty($_GET))
{
  $comments=get_comments();
}
else if( isset($_GET['search_word']))
{
  $comments=get_search_comments($_GET['search_word']);
  
}
else if( isset($_GET['course_name']))
{
  $comments=get_search_comments($_GET['course_name']);
}
?>
<html>
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
      .review_list
      {
        list-style-type: none;
      }
      .review_list > li
      {
        text-align: left;
        display: inline;
        font-size: 18px;
        
      }
      .review_list > li > p
      {
        font-size:20px;
        color:lightgray;
        margin-left: -10px;
      }
      
    </style>

    
</head>
<body>
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

                          <form  method="GET" class="navbar-form navbar-right" role="search">

                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Search" name="search_word">
                            </div>
                            <button type="submit" class="btn btn-default">Search</button>
                          </form>

                            
                    </ul>
                 
            <!-- /.navbar-collapse -->
          
        </div>
        <!-- /.container -->
    </nav>

	<div class="container" align="center">
		<h1 id="white">心得分享區</h1><hr>
	<nav class="navbar navbar-default container" style="background: rgba(30%, 30%, 30%, 0.6);">  
      <?php    
          foreach($comments as $comment) {
          ?>
          <h2 class="white text-left" >
            心得主題:<?= $comment['review_subject'] ?>
            <a href="javascript:showmore('<?=$comment['id']?>');" id='<?=$comment['id']?>' >更多...</a>
          <h2>
          <div id='<?=$comment['id']."content"?>' style="display:none;">
            <ul class="review_list text-left">
              <li class="about_course"><p>課程系所:</p><?=$comment['department']?><li>
              <li class="about_course"><p>課程名稱</p><?= $comment['course_name'] ?><li>
              <li class="about_course"><p>課程老師:</p><?= $comment['course_teacher'] ?><li>
              <br>
              <li class="about_person"><p>留言者:</p><?= $comment['user_name'] ?><li>
              <br>
              <li class="about_content"><p>心得內容:</p><?= $comment['review_content']?><li>
            </ul>
          </div>
        <?
            }
          ?>    
  </nav>
      <hr>
      <center>
        <table style="width:80%">
        <tr>
        <td style="width:40%" valign="top">
        <form  action="/action.php" class="navbar-form navbar-center" role="comment" method="POST">
             <select style="width: 178px; height: 38px" class="form-control" name="department">
             <option>資訊管理系</option>
             <option>工業管理系</option>
             <option>企業管理系</option>
             </select> 
             <br><br>
          <div class="form-group" style="width: 195px; height: 35px">
            <input type="text" class="form-control" placeholder="課名" name="code"><br><br>
            <input type="text" class="form-control" placeholder="教師名" name="teacher"><br><br>
            <input type="text" class="form-control" placeholder="留言主題" name="subject"><br><br>
          </div>
          </td>
          <td style="width:60%">
          <div class="form-group">
          <textarea class="form-control" placeholder="你的留言~" name="review" style="width:500px;height:220px;"></textarea>
          </div>
          </td>
          </tr>
          </table>
          <br><br><button type="submit" class="btn btn-default" name="action" value="review_insert">Submit</button>
        </form>
        </center>
    </div>     
</body>
    <script>
      function showmore(id){
        var link_el=document.getElementById( id );
        link_el.text="更少..."
        link_el.href="javascript:showless('"+id+"')";
        document.getElementById(id+"content").style.display = "block";
      }
      function showless(id){
        var link_el=document.getElementById( id );
        link_el.text="更多..."
        link_el.href="javascript:showmore('"+id+"')";
        document.getElementById(id+"content").style.display = "none";
      }
    </script>  
</html>