<?php
require($_SERVER['DOCUMENT_ROOT'].'/function.php');
if(empty($_GET))
{
  $courses=get_course();
}
else{
  $courses=get_search_course($_GET['department'],$_GET['code'],$_GET['name'],$_GET['teacher']);
  $_GET=array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>課後心得分享平台</title>
    
    <!-- 最新編譯和最佳化的 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- 選擇性佈景主題 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <!-- 最新編譯和最佳化的 JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> 

    <style>

    .course_search{
        background: white;
        font-family: arial, sans-serif;
        border-collapse: collapse;
        margin: auto;
        width: 90%;
    }

    td, th {
        border: 0.5px solid #dddddd;
        text-align: left;
        padding: 8px;

    }

   /* tr:nth-child(even) {
        background-color: #dddddd;
    }*/
    .th_time
    {
      width: 10%;
    }
    body{
      height:100vh;
    }
    .gobackindex
    {

    }
    </style>

</head>
<body>
    <!-- jQuery (Bootstrap 所有外掛均需要使用) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
    <script src="js/bootstrap.min.js"></script>


    
    <br><h1 align="center"><a href="\index.php" style="color:white">回到首頁</a></h1>

    <div class="container">
      <hr>
  
      <div class="col-md-12" align="right">
        <form class="navbar-form navbar-center" role="search" method="GET">
          <div class="form-group">
            <select style="width: 195px; height: 35px" class="form-control" name="department"  >
             <option>ALL</option>
             <option>資訊管理系</option>
             <option>工業管理系</option>
             <option>企業管理系</option>
            </select>
          </div>
          <div class="form-group" style="width: 195px; height: 35px">
            <input type="text" class="form-control" placeholder="課程代碼" name="code">
          </div>
          <div class="form-group" style="width: 195px; height: 35px">
            <input type="text" class="form-control" placeholder="課程名稱" name="name">
          </div>
          <div class="form-group" style="width: 195px; height: 35px">
            <input type="text" class="form-control" placeholder="教師名" name="teacher">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
      <div class="col-md-12">
        
      </div>
    </div>
    </div>
    <table class="course_search">
        <tr>
          <th>科系</th>
          <th>課程代碼</th>
          <th>課程名稱</th>
          <th>教師姓名</th>
          <th class="th_time">時間</th>
          <th>必選修</th>
          <th>學分</th>
        </tr>
        <?php    
          foreach($courses as $course) {
          ?>
            <tr>
                <td><?= $course['department'] ?></td>
                <td><?= $course['course_code'] ?></td>
                <td>
                  <form action="/comments.php" method="GET">
                    <input type="hidden" name="course_name" value= <?= $course['course_name']?>>
                    <a href="#" onclick="this.parentNode.submit()"><?= $course['course_name'] ?></a>
                  </form>
                </td>
                <td><?= $course['course_teacher'] ?></td>
                <td><?= $course['course_time'] ?></td>
                <td><?echo ($course['course_compulsory']==1)? ( "必修" ) : ( "選修" );?></td>
                <td><?= $course['course_credit'] ?></td>
            </tr>
        <?
            }
          ?>
      </table>

      <footer>
        <!-- 留白 -->
      </footer>
</body>
</html>