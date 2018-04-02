<?php
	header("Content-Type: text/html; charset=utf-8");
	include("db_connect.php");

	$var_by_employment_date_down=$_POST['var_by_employment_date_down'];

	if(!empty($var_by_employment_date_down))
	{
		echo '
			<tr>
			    <th>Фото</th>
			    <th>ФИО</th>
			    <th>Должность</th>
			    <th>Дата приёма на работу</th>
			    <th>Размер заработной платы</th>
			</tr>';
		$result_by_employment_date_down = mysql_query("SELECT * FROM employees ORDER BY employment_date ASC ",$link);
		while($row_result_by_employment_date_down=mysql_fetch_array($result_by_employment_date_down))
		{
			echo '<tr class="tr_'.$row_result_by_employment_date_down["position_class"].'">
				<td id="'.$row_result_by_employment_date_down["name_surname"].'" class="upload_image"><img src="'.$row_result_by_employment_date_down["photo"].'" alt=""></td>
				<td id="'.$row_result_by_employment_date_down["id"].'" class="'.$row_result_by_employment_date_down["position_class"].'_name_surname"><span id="'.$row_result_by_employment_date_down["id"].'" class="'.$row_result_by_employment_date_down["position_class"].'_name_surname">'.$row_result_by_employment_date_down["name_surname"].'</span></td>
				<td id="'.$row_result_by_employment_date_down["id"].'" class="'.$row_result_by_employment_date_down["position_class"].'_position"><span id="'.$row_result_by_employment_date_down["id"].'" class="'.$row_result_by_employment_date_down["position_class"].'_position">'.$row_result_by_employment_date_down["position"].'</span></td>
				<td id="'.$row_result_by_employment_date_down["id"].'" class="'.$row_result_by_employment_date_down["position_class"].'_employment_date"><span id="'.$row_result_by_employment_date_down["id"].'" class="'.$row_result_by_employment_date_down["position_class"].'_employment_date">'.$row_result_by_employment_date_down["employment_date"].'</span></td>
				<td id="'.$row_result_by_employment_date_down["id"].'" class="'.$row_result_by_employment_date_down["position_class"].'_amount_of_salary"><span id="'.$row_result_by_employment_date_down["id"].'" class="'.$row_result_by_employment_date_down["position_class"].'_amount_of_salary">'.$row_result_by_employment_date_down["amount_of_salary"].'</span></td>
			</tr>';
		}
	}
?>