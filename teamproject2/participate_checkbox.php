<?php session_start(); ?>
<?php
  
  $host="127.0.0.1";
  $user="root";
  $pass="";
  $dbname="register";
  $db= new PDO("mysql::host=$host;dbname=$dbname",$user,$pass);
    if(isset($_POST['bulk_participate_submit'])){
        $idArr = $_POST['checked_id'];
          foreach($idArr as $id){
             $sql="SELECT * FROM user_activity WHERE activity_id =".$id
                            ."&& username ='".$_SESSION['username']."'";
              $participate=($db->query($sql))->rowCount();
              /* 重複參加判斷 */
              if($participate==0)
              {
                $db->exec("INSERT INTO user_activity (username, activity_id) VALUES ('".$_SESSION['username']."',".$id.");");
              }
              }               
          }
        header("Location:activity.php");
    
?>

