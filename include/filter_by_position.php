<?php
	header("Content-Type: text/html; charset=utf-8");
	include("db_connect.php");

	$var_filter_by_position=$_POST['var_filter_by_position'];

	if($var_filter_by_position == "filter_top_manager")
	{
		echo '
			<tr>
			    <th>Фото</th>
			    <th>ФИО</th>
			    <th>Должность</th>
			    <th>Дата приёма на работу</th>
			    <th>Размер заработной платы</th>
			</tr>';
		$result_filter_by_position = mysql_query("SELECT * FROM employees WHERE position='директор' ",$link);
		while($row_result_filter_by_position=mysql_fetch_array($result_filter_by_position))
		{
			echo '<tr class="tr_'.$row_result_filter_by_position["position_class"].'">
				<td id="'.$row_result_filter_by_position["name_surname"].'" class="upload_image"><img src="'.$row_result_filter_by_position["photo"].'" alt=""></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_name_surname"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_name_surname">'.$row_result_filter_by_position["name_surname"].'</span></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_position"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_position">'.$row_result_filter_by_position["position"].'</span></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_employment_date"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_employment_date">'.$row_result_filter_by_position["employment_date"].'</span></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_amount_of_salary"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_amount_of_salary">'.$row_result_filter_by_position["amount_of_salary"].'</span></td>
			</tr>';
		}
	}

	if($var_filter_by_position == "filter_deputy_director")
	{
		echo '
			<tr>
			    <th>Фото</th>
			    <th>ФИО</th>
			    <th>Должность</th>
			    <th>Дата приёма на работу</th>
			    <th>Размер заработной платы</th>
			</tr>';
		$result_filter_by_position = mysql_query("SELECT * FROM employees WHERE position='заместитель директора' ",$link);
		while($row_result_filter_by_position=mysql_fetch_array($result_filter_by_position))
		{
			echo '<tr class="tr_'.$row_result_filter_by_position["position_class"].'">
				<td id="'.$row_result_filter_by_position["name_surname"].'" class="upload_image"><img src="'.$row_result_filter_by_position["photo"].'" alt=""></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_name_surname"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_name_surname">'.$row_result_filter_by_position["name_surname"].'</span></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_position"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_position">'.$row_result_filter_by_position["position"].'</span></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_employment_date"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_employment_date">'.$row_result_filter_by_position["employment_date"].'</span></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_amount_of_salary"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_amount_of_salary">'.$row_result_filter_by_position["amount_of_salary"].'</span></td>
			</tr>';
		}
	}

	if($var_filter_by_position == "filter_foreman")
	{
		echo '
			<tr>
			    <th>Фото</th>
			    <th>ФИО</th>
			    <th>Должность</th>
			    <th>Дата приёма на работу</th>
			    <th>Размер заработной платы</th>
			</tr>';
		$result_filter_by_position = mysql_query("SELECT * FROM employees WHERE position='начальник цеха' ",$link);
		while($row_result_filter_by_position=mysql_fetch_array($result_filter_by_position))
		{
			echo '<tr class="tr_'.$row_result_filter_by_position["position_class"].'">
				<td id="'.$row_result_filter_by_position["name_surname"].'" class="upload_image"><img src="'.$row_result_filter_by_position["photo"].'" alt=""></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_name_surname"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_name_surname">'.$row_result_filter_by_position["name_surname"].'</span></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_position"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_position">'.$row_result_filter_by_position["position"].'</span></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_employment_date"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_employment_date">'.$row_result_filter_by_position["employment_date"].'</span></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_amount_of_salary"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_amount_of_salary">'.$row_result_filter_by_position["amount_of_salary"].'</span></td>
			</tr>';
		}
	}

	if($var_filter_by_position == "filter_brigadier")
	{
		echo '
			<tr>
			    <th>Фото</th>
			    <th>ФИО</th>
			    <th>Должность</th>
			    <th>Дата приёма на работу</th>
			    <th>Размер заработной платы</th>
			</tr>';
		$result_filter_by_position = mysql_query("SELECT * FROM employees WHERE position='бригадир' ",$link);
		while($row_result_filter_by_position=mysql_fetch_array($result_filter_by_position))
		{
			echo '<tr class="tr_'.$row_result_filter_by_position["position_class"].'">
				<td id="'.$row_result_filter_by_position["name_surname"].'" class="upload_image"><img src="'.$row_result_filter_by_position["photo"].'" alt=""></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_name_surname"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_name_surname">'.$row_result_filter_by_position["name_surname"].'</span></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_position"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_position">'.$row_result_filter_by_position["position"].'</span></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_employment_date"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_employment_date">'.$row_result_filter_by_position["employment_date"].'</span></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_amount_of_salary"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_amount_of_salary">'.$row_result_filter_by_position["amount_of_salary"].'</span></td>
			</tr>';
		}
	}

	if($var_filter_by_position == "filter_worker")
	{
		echo '
			<tr>
			    <th>Фото</th>
			    <th>ФИО</th>
			    <th>Должность</th>
			    <th>Дата приёма на работу</th>
			    <th>Размер заработной платы</th>
			</tr>';
		$result_filter_by_position = mysql_query("SELECT * FROM employees WHERE position='рабочий' ",$link);
		while($row_result_filter_by_position=mysql_fetch_array($result_filter_by_position))
		{
			echo '<tr class="tr_'.$row_result_filter_by_position["position_class"].'">
				<td id="'.$row_result_filter_by_position["name_surname"].'" class="upload_image"><img src="'.$row_result_filter_by_position["photo"].'" alt=""></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_name_surname"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_name_surname">'.$row_result_filter_by_position["name_surname"].'</span></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_position"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_position">'.$row_result_filter_by_position["position"].'</span></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_employment_date"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_employment_date">'.$row_result_filter_by_position["employment_date"].'</span></td>
				<td id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_amount_of_salary"><span id="'.$row_result_filter_by_position["id"].'" class="'.$row_result_filter_by_position["position_class"].'_amount_of_salary">'.$row_result_filter_by_position["amount_of_salary"].'</span></td>
			</tr>';
		}
	}
?>