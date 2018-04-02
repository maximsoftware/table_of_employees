<?php
	header("Content-Type: text/html; charset=utf-8");
	include("db_connect.php");

	$val_button_upload_image=$_POST['val_button_upload_image'];
	$var_upload_main_images_li=$_POST['var_upload_main_images_li'];

	$way_image="include/uploaded_images/".$var_upload_main_images_li;

	mysql_query("UPDATE employees SET photo='$way_image' WHERE name_surname='$val_button_upload_image' ",$link);

	$result_upload_image = mysql_query("SELECT * FROM employees WHERE name_surname='$val_button_upload_image' ",$link);
	while($row_result_upload_image=mysql_fetch_array($result_upload_image))
	{
		echo '
			<img src="'.$row_result_upload_image["photo"].'" alt="">
		';
	}
?>