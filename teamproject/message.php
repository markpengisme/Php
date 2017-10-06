<?php
require($_SERVER['DOCUMENT_ROOT'].'/function.php');
if (!isset($_SESSION['id'])) {
  echo "<script>alert('請先登入'); location.href = '/index.php';</script>";
  exit();
}
$messages=get_message();
?>
<!DOCTYPE html>
<html>
<head>
 <title>Message Board</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <style>
    
    .message_box > h2 > a
    {
      color:red;
    }
    </style>
</head>
<body>
<br><br><br><br>
<div class="container">
<br><h1 align="center"><a href="\index.php" style="color:gray">回到首頁</a></h1>
 <h3 class="text-left">隨便聊</h3>
 <br>
 <hr>

 <div class="list-group">
<?php  

      foreach($messages as $message) {
      ?>
      <a href="javascript:showmore('<?=$message['id']?>','<?=$message['message_subject']?>');" id='<?=$message['id']?>' class="small list-group-item">
       <h2 class="black text-left" >
            <?= $message['id']?>.主題:<?=$message['message_subject']?>
            更多...</h2></a>
          <div id='<?=$message['id']."content"?>' style="display:none" class="well" ">
              <p class="lead">發文者 : <?= $message['user_name'] ?></p>
              <p class= "lead"><?= $message['message_content']?></p>        
          </div>
    <?
        }
      ?>
  </div>
 <hr>
 <div class="container col-md-8">
 <p class="pull-center">以 <?php echo $_SESSION["name"]; ?> 的身份發文</p>
 <h4>新增主題</h4>
 <form  class="" action="/action.php" method="POST">
    <input type="text" class="form-control" placeholder="主題" name="subject" style="width: 195px; height: 35px"><br>
    <textarea class="form-control" rows="5" name="message" placeholder="內容..." style="width:100%;size:2em;"></textarea>
    <br>
    <button type="submit" class="btn btn-primary btn-sm pull-left" name="action" value="message_insert">Submit</button>
 </form>
<br><br>
<div>
</div>
</body>
 <script>
      function showmore(id,message_subject){
        var link_el=document.getElementById( id );
        
        link_el.innerHTML="<h2 class='black text-left'>"+id+".主題:"+message_subject+" 更少...</h2>"
        link_el.href="javascript:showless('"+id+"'"+",'"+message_subject+"')";
        document.getElementById(id+"content").style.display = "block";
      }
      function showless(id,message_subject){
        var link_el=document.getElementById( id );
        link_el.innerHTML="<h2 class='black text-left'>"+id+".主題:"+message_subject+" 更多...</h2>"
        link_el.href="javascript:showmore('"+id+"'"+",'"+message_subject+"')";
        document.getElementById(id+"content").style.display = "none";
      }
    </script>  
</html>