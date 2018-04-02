<?php
header("Content-Type: text/html; charset=utf-8");
// if($_SERVER["REQUEST_METHOD"] == "POST")
// {
	include("db_connect.php");
    include("functions.php");
    include("auth_cookie.php");
    
    $login_authorization = $_POST["login"];
    $pass_authorization = $_POST["pass"];
    if ($_POST["rememberme"] == "yes")
    {
        setcookie('rememberme',$login_authorization.'+'.$pass_authorization,time()+3600*24*31, "/");
    }

    
       
    $result_authorization = mysql_query("SELECT * FROM reg_user WHERE login = '$login_authorization' AND pass = '$pass_authorization' ",$link);
    If (mysql_num_rows($result_authorization) > 0)
    {
        $row_result_authorization = mysql_fetch_array($result_authorization);
        session_start();
        $_SESSION['auth'] = 'yes_auth';
        $_SESSION['auth_id'] = $row_result_authorization["id"];
        $_SESSION['auth_login'] = $row_result_authorization["login"];
        $_SESSION['auth_pass'] = $row_result_authorization["pass"];
        $_SESSION['auth_email'] = $row_result_authorization["email"];
        $_SESSION['auth_card_number'] = $row_result_authorization["card_number"];
        $_SESSION['auth_country'] = $row_result_authorization["country"];
        $_SESSION['auth_city'] = $row_result_authorization["city"];
        $_SESSION['auth_datetime'] = $row_result_authorization["datetime"];
        $_SESSION['auth_ip'] = $row_result_authorization["ip"];
        echo "yes_auth";
        //echo 'You have entered!';

    }else
    {
        echo "no_auth";
        echo "Login is wrong!";
    }
// }else{
//     echo "Все поля должны быть заполнены.";
// }
?>