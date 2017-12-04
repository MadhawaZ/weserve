<?php
/**
 * Created by IntelliJ IDEA.
 * User: wathsala_w
 * Date: 11/27/2017
 * Time: 10:27 PM
 */

require $_SERVER['DOCUMENT_ROOT']."/weserve/repository/user_repo.php";

$username =  $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $pass = test_input($_POST["pass"]);
    $user = mysqli_fetch_array(login($username,$pass));
    $userRole = $user['role_name'];

    if($userRole != null) {
        session_start();
        $_SESSION['login'] = true;
        header("location:../partials/".$userRole."/overview.php");
    }else{
        header("location:../login.php");
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

