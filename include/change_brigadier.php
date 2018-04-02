<?php
	header("Content-Type: text/html; charset=utf-8");
	include("db_connect.php");

	$tr_brigadier_id=$_POST['tr_brigadier_id'];
	$tr_brigadier_class=$_POST['tr_brigadier_class'];
	$val_input_change_brigadier=$_POST['val_input_change_brigadier'];

	if($tr_brigadier_class == "brigadier_name_surname")
	{
		mysql_query("UPDATE employees SET name_surname='$val_input_change_brigadier' WHERE id='$tr_brigadier_id' ",$link);

		$result_name_surname=mysql_query("SELECT * FROM employees WHERE id='$tr_brigadier_id' ",$link);
		while($row_result_name_surname=mysql_fetch_array($result_name_surname))
		{
			echo '<span id="'.$row_result_name_surname["id"].'" class="brigadier_name_surname">'.$row_result_name_surname["name_surname"].'</span>';
		}
	}

	if($tr_brigadier_class == "brigadier_position")
	{
		mysql_query("UPDATE employees SET position='$val_input_change_brigadier' WHERE id='$tr_brigadier_id' ",$link);

		$result_position=mysql_query("SELECT * FROM employees WHERE id='$tr_brigadier_id' ",$link);
		while($row_result_position=mysql_fetch_array($result_position))
		{
			echo '<span id="'.$row_result_position["id"].'" class="brigadier_position">'.$row_result_position["name_surname"].'</span>';
		}
	}

	if($tr_brigadier_class == "brigadier_employment_date")
	{
		mysql_query("UPDATE employees SET employment_date='$val_input_change_brigadier' WHERE id='$tr_brigadier_id' ",$link);

		$result_employment_date=mysql_query("SELECT * FROM employees WHERE id='$tr_brigadier_id' ",$link);
		while($row_result_employment_date=mysql_fetch_array($result_employment_date))
		{
			echo '<span id="'.$row_result_employment_date["id"].'" class="brigadier_employment_date">'.$row_result_employment_date["name_surname"].'</span>';
		}
	}

	if($tr_brigadier_class == "brigadier_amount_of_salary")
	{
		mysql_query("UPDATE employees SET amount_of_salary='$val_input_change_brigadier' WHERE id='$tr_brigadier_id' ",$link);

		$result_amount_of_salary=mysql_query("SELECT * FROM employees WHERE id='$tr_brigadier_id' ",$link);
		while($row_result_amount_of_salary=mysql_fetch_array($result_amount_of_salary))
		{
			echo '<span id="'.$row_result_amount_of_salary["id"].'" class="brigadier_amount_of_salary">'.$row_result_amount_of_salary["name_surname"].'</span>';
		}
	}
?>