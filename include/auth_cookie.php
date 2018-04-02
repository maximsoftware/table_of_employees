<?php
//include("functions.php");
//header("Content-type: text/html; charset=utf-8");
  //defined('myeshop') or die('Доступ запрещён!');
 if ($_SESSION['auth'] != 'yes_auth' && $_COOKIE["rememberme"])
  {
  
  $str = $_COOKIE["rememberme"];
  
  // Вся длина строки
  $all_len = strlen($str);
  // Длина логина
  $login_len = strpos($str,'+'); 
  // Обрезаем строку до Плюса и получаем Логин
  $login = clear_string(substr($str,0,$login_len));
  
  // Получаем пароль 
  $pass = clear_string(substr($str,$login_len+1,$all_len));

$result = mysql_query("SELECT * FROM reg_user WHERE login = '$login' AND pass = '$pass'",$link);
If (mysql_num_rows($result) > 0)
{
    $row = mysql_fetch_array($result);
    session_start();
    $_SESSION['auth'] = 'yes_auth';
    $_SESSION['auth_id'] = $row["id"];
    $_SESSION['auth_login'] = $row["login"];
    $_SESSION['auth_pass'] = $row["pass"];
    $_SESSION['auth_email'] = $row["email"];
    $_SESSION['auth_card_number'] = $row["card_number"];
    $_SESSION['auth_country'] = $row["country"];
    $_SESSION['auth_city'] = $row["city"];
    $_SESSION['auth_datetime'] = $row["datetime"];
    $_SESSION['auth_ip'] = $row["ip"];
  }
}
?>