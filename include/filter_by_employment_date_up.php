<?php
	header("Content-Type: text/html; charset=utf-8");
	include("db_connect.php");

	$var_by_employment_date_up=$_POST['var_by_employment_date_up'];

	if(!empty($var_by_employment_date_up))
	{
		echo '
			<tr>
			    <th>Фото</th>
			    <th>ФИО</th>
			    <th>Должность</th>
			    <th>Дата приёма на работу</th>
			    <th>Размер заработной платы</th>
			</tr>';
		$result_by_employment_date_up = mysql_query("SELECT * FROM employees ORDER BY employment_date DESC ",$link);
		while($row_result_by_employment_date_up=mysql_fetch_array($result_by_employment_date_up))
		{
			echo '<tr class="tr_'.$row_result_by_employment_date_up["position_class"].'">
				<td id="'.$row_result_by_employment_date_up["name_surname"].'" class="upload_image"><img src="'.$row_result_by_employment_date_up["photo"].'" alt=""></td>
				<td id="'.$row_result_by_employment_date_up["id"].'" class="'.$row_result_by_employment_date_up["position_class"].'_name_surname"><span id="'.$row_result_by_employment_date_up["id"].'" class="'.$row_result_by_employment_date_up["position_class"].'_name_surname">'.$row_result_by_employment_date_up["name_surname"].'</span></td>
				<td id="'.$row_result_by_employment_date_up["id"].'" class="'.$row_result_by_employment_date_up["position_class"].'_position"><span id="'.$row_result_by_employment_date_up["id"].'" class="'.$row_result_by_employment_date_up["position_class"].'_position">'.$row_result_by_employment_date_up["position"].'</span></td>
				<td id="'.$row_result_by_employment_date_up["id"].'" class="'.$row_result_by_employment_date_up["position_class"].'_employment_date"><span id="'.$row_result_by_employment_date_up["id"].'" class="'.$row_result_by_employment_date_up["position_class"].'_employment_date">'.$row_result_by_employment_date_up["employment_date"].'</span></td>
				<td id="'.$row_result_by_employment_date_up["id"].'" class="'.$row_result_by_employment_date_up["position_class"].'_amount_of_salary"><span id="'.$row_result_by_employment_date_up["id"].'" class="'.$row_result_by_employment_date_up["position_class"].'_amount_of_salary">'.$row_result_by_employment_date_up["amount_of_salary"].'</span></td>
			</tr>';
		}
	}
?>