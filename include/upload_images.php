<?php
include("db_connect.php");


  $uploaddir = "uploaded_images/";

  $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
  //$name_of_image=$_FILES['userfile']['name'];
  $name_of_image_iconv=iconv('UTF-8', 'ASCII//TRANSLIT', $uploadfile);

//if(preg_match("|^[A-Z0-9]+$|i", $name_of_image_iconv))
//{
  if (move_uploaded_file($_FILES['userfile']['tmp_name'], $name_of_image_iconv)) {
    echo "success";
    //echo '<img src="$uploadfile" alt="">';
  } else {
    echo "error";
  }
?>