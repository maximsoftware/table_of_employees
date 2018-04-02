<?php
	header("Content-Type: text/html; charset=utf-8");
	include("db_connect.php");

	$block_search_li_input=$_POST['block_search_li_input'];
	$block_search_li_input_class=$_POST['block_search_li_input_class'];

	if(strlen($block_search_li_input)>=1)
	{
		if($block_search_li_input_class == 'search_fio')
		{
			$result_block_search_li_input=mysql_query("SELECT * FROM employees WHERE name_surname LIKE '%$block_search_li_input%' ",$link);
			echo '
				<tr>
				    <th>Фото</th>
				    <th>ФИО</th>
				    <th>Должность</th>
				    <th>Дата приёма на работу</th>
				    <th>Размер заработной платы</th>
				</tr>
			';
			while($row_result_block_search_li_input=mysql_fetch_array($result_block_search_li_input))
			{
				echo '<tr class="tr_'.$row_result_block_search_li_input["position_class"].'">
					<td id="'.$row_result_block_search_li_input["name_surname"].'" class="upload_image"><img src="'.$row_result_block_search_li_input["photo"].'" alt=""></td>
					<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_name_surname"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_name_surname">'.$row_result_block_search_li_input["name_surname"].'</span></td>
					<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_position"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_position">'.$row_result_block_search_li_input["position"].'</span></td>
					<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_employment_date"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_employment_date">'.$row_result_block_search_li_input["employment_date"].'</span></td>
					<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_amount_of_salary"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_amount_of_salary">'.$row_result_block_search_li_input["amount_of_salary"].'</span></td>
				</tr>';	
			}
		}

		if($block_search_li_input_class == 'search_position')
		{
			$result_block_search_li_input=mysql_query("SELECT * FROM employees WHERE position LIKE '%$block_search_li_input%' ",$link);
			echo '
				<tr>
				    <th>Фото</th>
				    <th>ФИО</th>
				    <th>Должность</th>
				    <th>Дата приёма на работу</th>
				    <th>Размер заработной платы</th>
				</tr>
			';
			while($row_result_block_search_li_input=mysql_fetch_array($result_block_search_li_input))
			{
				echo '<tr class="tr_'.$row_result_block_search_li_input["position_class"].'">
					<td id="'.$row_result_block_search_li_input["name_surname"].'" class="upload_image"><img src="'.$row_result_block_search_li_input["photo"].'" alt=""></td>
					<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_name_surname"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_name_surname">'.$row_result_block_search_li_input["name_surname"].'</span></td>
					<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_position"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_position">'.$row_result_block_search_li_input["position"].'</span></td>
					<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_employment_date"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_employment_date">'.$row_result_block_search_li_input["employment_date"].'</span></td>
					<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_amount_of_salary"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_amount_of_salary">'.$row_result_block_search_li_input["amount_of_salary"].'</span></td>
				</tr>';	
			}
		}

		if($block_search_li_input_class == 'search_employment_date')
		{
			$result_block_search_li_input=mysql_query("SELECT * FROM employees WHERE employment_date LIKE '%$block_search_li_input%' ",$link);
			echo '
				<tr>
				    <th>Фото</th>
				    <th>ФИО</th>
				    <th>Должность</th>
				    <th>Дата приёма на работу</th>
				    <th>Размер заработной платы</th>
				</tr>
			';
			while($row_result_block_search_li_input=mysql_fetch_array($result_block_search_li_input))
			{
				echo '<tr class="tr_'.$row_result_block_search_li_input["position_class"].'">
					<td id="'.$row_result_block_search_li_input["name_surname"].'" class="upload_image"><img src="'.$row_result_block_search_li_input["photo"].'" alt=""></td>
					<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_name_surname"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_name_surname">'.$row_result_block_search_li_input["name_surname"].'</span></td>
					<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_position"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_position">'.$row_result_block_search_li_input["position"].'</span></td>
					<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_employment_date"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_employment_date">'.$row_result_block_search_li_input["employment_date"].'</span></td>
					<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_amount_of_salary"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_amount_of_salary">'.$row_result_block_search_li_input["amount_of_salary"].'</span></td>
				</tr>';	
			}
		}

		if($block_search_li_input_class == 'search_amount_of_salary')
		{
			$result_block_search_li_input=mysql_query("SELECT * FROM employees WHERE amount_of_salary LIKE '%$block_search_li_input%' ",$link);
			echo '
				<tr>
				    <th>Фото</th>
				    <th>ФИО</th>
				    <th>Должность</th>
				    <th>Дата приёма на работу</th>
				    <th>Размер заработной платы</th>
				</tr>
			';
			while($row_result_block_search_li_input=mysql_fetch_array($result_block_search_li_input))
			{
				echo '<tr class="tr_'.$row_result_block_search_li_input["position_class"].'">
					<td id="'.$row_result_block_search_li_input["name_surname"].'" class="upload_image"><img src="'.$row_result_block_search_li_input["photo"].'" alt=""></td>
					<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_name_surname"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_name_surname">'.$row_result_block_search_li_input["name_surname"].'</span></td>
					<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_position"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_position">'.$row_result_block_search_li_input["position"].'</span></td>
					<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_employment_date"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_employment_date">'.$row_result_block_search_li_input["employment_date"].'</span></td>
					<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_amount_of_salary"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_amount_of_salary">'.$row_result_block_search_li_input["amount_of_salary"].'</span></td>
				</tr>';		
			}
		}
	}else{
		echo '
			<tr>
			    <th>Фото</th>
			    <th>ФИО</th>
			    <th>Должность</th>
			    <th>Дата приёма на работу</th>
			    <th>Размер заработной платы</th>
			</tr>';
		$result_by_surname = mysql_query("SELECT * FROM employees ORDER BY position_id ASC",$link);
		while($row_result_block_search_li_input=mysql_fetch_array($result_by_surname))
		{
			echo '<tr class="tr_'.$row_result_block_search_li_input["position_class"].'">
				<td id="'.$row_result_block_search_li_input["name_surname"].'" class="upload_image"><img src="'.$row_result_block_search_li_input["photo"].'" alt=""></td>
				<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_name_surname"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_name_surname">'.$row_result_block_search_li_input["name_surname"].'</span></td>
				<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_position"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_position">'.$row_result_block_search_li_input["position"].'</span></td>
				<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_employment_date"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_employment_date">'.$row_result_block_search_li_input["employment_date"].'</span></td>
				<td id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_amount_of_salary"><span id="'.$row_result_block_search_li_input["id"].'" class="'.$row_result_block_search_li_input["position_class"].'_amount_of_salary">'.$row_result_block_search_li_input["amount_of_salary"].'</span></td>
			</tr>';	
		}
	}
?>