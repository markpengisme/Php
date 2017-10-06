<?php
session_start();
// function check_login() {
//     if (!isset($_SESSION['id'])) {
//         header('location:/login.php');
//         exit();
//     }

//     return get_user_by_id($_SESSION['id']);
// }

function show_error($message) {
    $_SESSION['message'] = $message;
    header('location:/error.php');
    exit();
}

function get_db_connection() {
    $db = new mysqli('localhost', 'root', '', 'teamweb');
    $db->query('SET NAMES utf8;');
    return $db;
}

// function register($email, $password, $name, $tel, $re_password) {

//     if($password != $re_password) {
//          return ['message' => "PASSWORD NOT MATCH"];
//     }

//     $db = get_db_connection();
//     $email = $db->real_escape_string($email);
//     $result = $db->query("SELECT * FROM users WHERE email='$email'");    
//     if ($result->num_rows > 0) {
//         return ['message' => "EMAIL ALREADY EXISTED"];
//     }

//     $statement = $db->prepare("INSERT INTO `users` (email, password, name, tel) VALUES (?, ?, ?, ?)");
//     $statement->bind_param('ssss', $email, $password, $name, $tel);
//     $statement->execute();
//     $statement->bind_result($email, $password, $name, $tel);
//     $user = get_user_by_email($email);    
//     return $user;
// }
function sign_up( $name, $department, $grade, $email, $account, $password, $pass_confirm, $gender, $user_bio) {

    if($password != $pass_confirm) {
         return ['message' => "PASSWORD NOT MATCH"];
    }

    $db = get_db_connection();
    $account = $db->real_escape_string($account);
    $result = $db->query("SELECT * FROM users WHERE account='$account'");    
    if ($result->num_rows > 0) {
        return ['message' => "ACCOUNT ALREADY EXISTED"];
    }

    $statement = $db->prepare("INSERT INTO `users` (name,department,grade,email,account,password,gender, user_bio) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $statement->bind_param('ssssssis', $name, $department, $grade, $email, $account, $password, $gender, $user_bio);
    $statement->execute();
    $statement->bind_result($name, $department, $grade, $email, $account, $password, $gender, $user_bio);
    $user = get_user_by_name($name);    
    return $user;
}
function sign_in($account, $password) {
    $db = get_db_connection();
    $account = $db->real_escape_string($account);
    $password = $db->real_escape_string($password);
    $result = $db->query("SELECT * FROM users WHERE account='$account' AND password='$password'");
    $user = $result->fetch_assoc();
    if ($user == null) {
        return ['message' => "ACCOUNT OR PASSWORD IS WRONG"];
    }
    return $user;
}
// function get_user_by_email($email) {
//     $db = get_db_connection();
//     $email = $db->real_escape_string($email);
//     $result = $db->query("SELECT * FROM users WHERE email='$email'");
//     return $result->fetch_assoc();
// }
function get_course()
{
    $db = get_db_connection();
    $result = $db->query("SELECT * FROM course");
    $array = [];
    while ($row = $result->fetch_assoc()) {
        $array[] = $row;
    }
    return $array;
}
function get_search_course($department,$code,$name,$teacher)
{
    $db = get_db_connection();
    if($department=='ALL'){
        $result = $db->query("SELECT * FROM course WHERE ((course_code
        LIKE '$code%') AND (course_name LIKE '%%$name%%') AND (course_teacher LIKE '%%$teacher%%'))");
    }
    else{
        $result = $db->query("SELECT * FROM course WHERE (department='$department')AND(course_code
        LIKE '$code%') AND (course_name LIKE '%%$name%%') AND (course_teacher LIKE '%%$teacher%%')");
    }
    
    $array = [];
    while ($row = $result->fetch_assoc()) {
        $array[] = $row;
    }
    return $array;;
}
function get_user_by_email($email) {
    $db = get_db_connection();
    $email = $db->real_escape_string($email);
    $result = $db->query("SELECT * FROM users WHERE email='$email'");
    return $result->fetch_assoc();
}

function get_user_by_id($id) {
    $db = get_db_connection();
    $id = $db->real_escape_string($id);
    $result = $db->query("SELECT * FROM users WHERE id='$id'");
    return $result->fetch_assoc();
}

function get_user_by_name($name) {
    $db = get_db_connection();
    $name = $db->real_escape_string($name);
    $result = $db->query("SELECT * FROM users WHERE name='$name'");
    return $result->fetch_assoc();
}

// function update_userinfo($id, $name, $tel) {
//     $db = get_db_connection();
//     $statement = $db->prepare("UPDATE users SET name=?, tel=? WHERE id=?");
//     $statement->bind_param('ssi', $name, $tel, $id);
//     $statement->execute();
// }
function review_insert($user_name, $department, $course_name, $course_teacher, $review_subject, $review_content) {
    $db = get_db_connection();
    $statement = $db->prepare("INSERT INTO `review` (user_name, department, course_name, course_teacher, review_subject,review_content) VALUES (?, ?, ?, ?, ?, ?)");
    $statement->bind_param('ssssss', $user_name, $department, $course_name, $course_teacher, $review_subject,$review_content);
    $statement->execute();
}

function message_insert($user_name,$message_subject, $message_content) {
    $db = get_db_connection();
    $statement = $db->prepare("INSERT INTO `message` (user_name,message_subject,message_content) VALUES (?, ?, ?)");
    $statement->bind_param('sss', $user_name,$message_subject,$message_content);
    $statement->execute();
}

function create_event($name, $event_time, $cost, $content, $created_by) {
    $db = get_db_connection();
    $statement = $db->prepare("INSERT INTO `events` (name, event_time, cost, content, created_by) VALUES (?, ?, ?, ?, ?)");
    $statement->bind_param('ssisi', $name, $event_time, $cost, $content, $created_by);
    $statement->execute();
    $id = $statement->insert_id;
    return $db->query("SELECT * FROM events WHERE id='$id'")->fetch_assoc();
}

// function get_event_list($login_user_id) {
//     $db = get_db_connection();
//     $get_host_sql = "SELECT name FROM users WHERE id=created_by";
//     $get_count_sql = "SELECT COUNT(*) FROM user_event WHERE event_id=events.id";
//     $has_attend_sql = "SELECT COUNT(*) FROM user_event WHERE event_id=events.id AND user_id=$login_user_id";
//     $result = $db->query("SELECT *, ($get_host_sql) as host, ($get_count_sql) as count, ($has_attend_sql) as has_attend FROM events ORDER BY id DESC;");

//     $array = [];
//     while ($row = $result->fetch_assoc()) {
//         $array[] = $row;
//     }

//     return $array;
// }


function get_message() {
    $db = get_db_connection();
    $result = $db->query("SELECT * FROM message");
    $array = [];
    while ($row = $result->fetch_assoc()) {
        $array[] = $row;
    }
    return $array;
}
function get_comments() {
    $db = get_db_connection();
    $result = $db->query("SELECT * FROM review");
    $array = [];
    while ($row = $result->fetch_assoc()) {
        $array[] = $row;
    }
    return $array;
}
function get_search_comments($search_word)
{
    $db = get_db_connection();
    $result = $db->query("SELECT * FROM review WHERE (user_name LIKE '%%$search_word%%') 
        OR (department ='$search_word') OR( review_subject LIKE '%%$search_word%%') OR (course_name LIKE '%%$search_word%%') OR (course_teacher LIKE '%%$search_word%%')");
    
    $array = [];
    while ($row = $result->fetch_assoc()) {
        $array[] = $row;
    }
    return $array;;
}

function attend_event($user_id, $event_id) {
    $db = get_db_connection();
    $statement = $db->prepare("INSERT INTO `user_event` (user_id, event_id) VALUES (?, ?)");
    $statement->bind_param('ii', $user_id, $event_id);
    $statement->execute();   
}
?>