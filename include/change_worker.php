<?php
	header("Content-Type: text/html; charset=utf-8");
	include("db_connect.php");

	$tr_worker_id=$_POST['tr_worker_id'];
	$tr_worker_class=$_POST['tr_worker_class'];
	$val_input_change_worker=$_POST['val_input_change_worker'];

	if($tr_worker_class == "worker_name_surname")
	{
		mysql_query("UPDATE employees SET name_surname='$val_input_change_worker' WHERE id='$tr_worker_id' ",$link);

		$result_name_surname=mysql_query("SELECT * FROM employees WHERE id='$tr_worker_id' ",$link);
		while($row_result_name_surname=mysql_fetch_array($result_name_surname))
		{
			echo '<span id="'.$row_result_name_surname["id"].'" class="worker_name_surname">'.$row_result_name_surname["name_surname"].'</span>';
		}
	}

	if($tr_worker_class == "worker_position")
	{
		mysql_query("UPDATE employees SET position='$val_input_change_worker' WHERE id='$tr_worker_id' ",$link);

		$result_position=mysql_query("SELECT * FROM employees WHERE id='$tr_worker_id' ",$link);
		while($row_result_position=mysql_fetch_array($result_position))
		{
			echo '<span id="'.$row_result_position["id"].'" class="worker_position">'.$row_result_position["name_surname"].'</span>';
		}
	}

	if($tr_worker_class == "worker_employment_date")
	{
		mysql_query("UPDATE employees SET employment_date='$val_input_change_worker' WHERE id='$tr_worker_id' ",$link);

		$result_employment_date=mysql_query("SELECT * FROM employees WHERE id='$tr_worker_id' ",$link);
		while($row_result_employment_date=mysql_fetch_array($result_employment_date))
		{
			echo '<span id="'.$row_result_employment_date["id"].'" class="worker_employment_date">'.$row_result_employment_date["name_surname"].'</span>';
		}
	}

	if($tr_worker_class == "worker_amount_of_salary")
	{
		mysql_query("UPDATE employees SET amount_of_salary='$val_input_change_worker' WHERE id='$tr_worker_id' ",$link);

		$result_amount_of_salary=mysql_query("SELECT * FROM employees WHERE id='$tr_worker_id' ",$link);
		while($row_result_amount_of_salary=mysql_fetch_array($result_amount_of_salary))
		{
			echo '<span id="'.$row_result_amount_of_salary["id"].'" class="worker_amount_of_salary">'.$row_result_amount_of_salary["name_surname"].'</span>';
		}
	}
?>