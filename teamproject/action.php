<?php
require($_SERVER['DOCUMENT_ROOT'].'/function.php');
if (!isset($_SESSION['id'])) {
    $user = [];
    switch($_POST['action']) {
        // case 'log_in':
        //     $user = get_user_by_email_password($_POST['email'], $_POST['password']);
        //     break;
        case 'sign_in':
            $user = sign_in($_POST['account'], $_POST['password']);
            break;
        // case 'register':        
        //     $user = register($_POST['email'], $_POST['password'], $_POST['name'], $_POST['tel'], $_POST['re_password']);
        //   break;
        case 'sign_up':
            $user = sign_up($_POST['name'],$_POST["department"],$_POST["grade"],$_POST["email"],$_POST["account"],$_POST["password"],$_POST["pass_confirm"],$_POST["gender"],$_POST["user_bio"]);
            break;

    }

    if (isset($user['message'])) {
        show_error($user['message']);
    }

    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    header('location:/');
} else {
    $user_id = $_SESSION['id'];
    $user_name = $_SESSION['name'];
    switch($_POST['action']) {
        case 'review_insert':            
            review_insert($user_name, $_POST['department'], $_POST['code'], $_POST['teacher'], $_POST['subject'], $_POST['review']);
            echo "<script>alert('新增成功'); location.href = '/comments.php';</script>";
            die();
            break;
        case 'message_insert':
            message_insert($user_name, $_POST['subject'], $_POST['message']);
            echo "<script>alert('新增成功'); location.href = '/message.php';</script>";
            die();
            break;
        // case 'add_event':
        //     $event = create_event($_POST['name'], $_POST['event_time'], $_POST['cost'], $_POST['content'], $user_id);
        //     break;
        // case 'attend_event':
        //     attend_event($user_id, $_POST['event_id']);
        //     break;

    }

    header('location:/');
}
?>