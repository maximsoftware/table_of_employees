<?php
	header("Content-Type: text/html; charset=utf-8");
	include("db_connect.php");

	$var_by_surname=$_POST['var_by_surname'];

	if(!empty($var_by_surname))
	{
		echo '
			<tr>
			    <th>Фото</th>
			    <th>ФИО</th>
			    <th>Должность</th>
			    <th>Дата приёма на работу</th>
			    <th>Размер заработной платы</th>
			</tr>';
		$result_by_surname = mysql_query("SELECT * FROM employees ORDER BY name_surname ASC ",$link);
		while($row_result_by_surname=mysql_fetch_array($result_by_surname))
		{
			echo '<tr class="tr_'.$row_result_by_surname["position_class"].'">
				<td id="'.$row_result_by_surname["name_surname"].'" class="upload_image"><img src="'.$row_result_by_surname["photo"].'" alt=""></td>
				<td id="'.$row_result_by_surname["id"].'" class="'.$row_result_by_surname["position_class"].'_name_surname"><span id="'.$row_result_by_surname["id"].'" class="'.$row_result_by_surname["position_class"].'_name_surname">'.$row_result_by_surname["name_surname"].'</span></td>
				<td id="'.$row_result_by_surname["id"].'" class="'.$row_result_by_surname["position_class"].'_position"><span id="'.$row_result_by_surname["id"].'" class="'.$row_result_by_surname["position_class"].'_position">'.$row_result_by_surname["position"].'</span></td>
				<td id="'.$row_result_by_surname["id"].'" class="'.$row_result_by_surname["position_class"].'_employment_date"><span id="'.$row_result_by_surname["id"].'" class="'.$row_result_by_surname["position_class"].'_employment_date">'.$row_result_by_surname["employment_date"].'</span></td>
				<td id="'.$row_result_by_surname["id"].'" class="'.$row_result_by_surname["position_class"].'_amount_of_salary"><span id="'.$row_result_by_surname["id"].'" class="'.$row_result_by_surname["position_class"].'_amount_of_salary">'.$row_result_by_surname["amount_of_salary"].'</span></td>
			</tr>';
		}
	}
?>