<?php
	header("Content-Type: text/html; charset=utf-8");
	include("db_connect.php");

	$var_amount_of_salary_up=$_POST['var_amount_of_salary_up'];

	if(!empty($var_amount_of_salary_up))
	{
		echo '
			<tr>
			    <th>Фото</th>
			    <th>ФИО</th>
			    <th>Должность</th>
			    <th>Дата приёма на работу</th>
			    <th>Размер заработной платы</th>
			</tr>';
		$result_amount_of_salary_up = mysql_query("SELECT * FROM employees ORDER BY amount_of_salary DESC ",$link);
		while($row_result_amount_of_salary_up=mysql_fetch_array($result_amount_of_salary_up))
		{
			echo '<tr class="tr_'.$row_result_amount_of_salary_up["position_class"].'">
				<td id="'.$row_result_amount_of_salary_up["name_surname"].'" class="upload_image"><img src="'.$row_result_amount_of_salary_up["photo"].'" alt=""></td>
				<td id="'.$row_result_amount_of_salary_up["id"].'" class="'.$row_result_amount_of_salary_up["position_class"].'_name_surname"><span id="'.$row_result_amount_of_salary_up["id"].'" class="'.$row_result_amount_of_salary_up["position_class"].'_name_surname">'.$row_result_amount_of_salary_up["name_surname"].'</span></td>
				<td id="'.$row_result_amount_of_salary_up["id"].'" class="'.$row_result_amount_of_salary_up["position_class"].'_position"><span id="'.$row_result_amount_of_salary_up["id"].'" class="'.$row_result_amount_of_salary_up["position_class"].'_position">'.$row_result_amount_of_salary_up["position"].'</span></td>
				<td id="'.$row_result_amount_of_salary_up["id"].'" class="'.$row_result_amount_of_salary_up["position_class"].'_employment_date"><span id="'.$row_result_amount_of_salary_up["id"].'" class="'.$row_result_amount_of_salary_up["position_class"].'_employment_date">'.$row_result_amount_of_salary_up["employment_date"].'</span></td>
				<td id="'.$row_result_amount_of_salary_up["id"].'" class="'.$row_result_amount_of_salary_up["position_class"].'_amount_of_salary"><span id="'.$row_result_amount_of_salary_up["id"].'" class="'.$row_result_amount_of_salary_up["position_class"].'_amount_of_salary">'.$row_result_amount_of_salary_up["amount_of_salary"].'</span></td>
			</tr>';
		}
	}
?>