<?php
	header("Content-Type: text/html; charset=utf-8");
	include("include/db_connect.php");
	session_start();
	include("include/functions.php");
	include("include/auth_cookie.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="block_authorization">
					<?php
						$auth_login=$_SESSION['auth_login'];
						if($_SESSION['auth'] == 'yes_auth')
						{
							echo $auth_login.'<button class="button_logout">Выход</button>';

							echo '<div class="block_filter">
								<p class="p_filters">Фильтр</p>
								<ul class="ul_filters">
									<li class="by_surname">По фамилии</li>
									<li class="by_hierarchy_up">По должности вверх</li>
									<li class="by_hierarchy_down">По должности вниз</li>
									<li class="by_position">Выбрать должность
										<ul class="by_position_ul">
											<li class="filter_top_manager">Директор</li>
											<li class="filter_deputy_director">Заместитель директора</li>
											<li class="filter_foreman">Начальник цеха</li>
											<li class="filter_brigadier">Бригадир</li>
											<li class="filter_worker">Рабочий</li>
										</ul>
									</li>
									<li class="by_employment_date_up">По дате приёма вверх</li>
									<li class="by_employment_date_down">По дате приёма вниз</li>
									<li class="amount_of_salary_up">По размеру заработной платы вверх</li>
									<li class="amount_of_salary_down">По размеру заработной платы вниз</li>
								</ul>
							</div>
							<ul class="list-inline block_search">
								<li class="col-md-3">
									<input type="text" class="search_fio" placeholder="Поиск по ФИО">
								</li>
								<li class="col-md-3">
									<input type="text" class="search_position" placeholder="Поиск по должности">
								</li>
								<li class="col-md-3">
									<input type="text" class="search_employment_date" placeholder="Поиск по дате приёма">
								</li>
								<li class="col-md-3">
									<input type="text" class="search_amount_of_salary" placeholder="Поиск по размеру зарплаты">
								</li>
							</ul>

							<!--<div class="col-md-3 block_toggle_foreman">
								<span class="show_foreman">Показать список начальников цеха / </span><span class="hide_foreman">Скрыть</span>
							</div>|
							<div class="col-md-3 block_toggle_brigadier">
								<span class="show_brigadier">Показать список бригадиров / </span><span class="hide_brigadier">Скрыть</span>
							</div>|
							<div class="col-md-3 block_toggle_worker">
								<span class="show_worker">Показатьсписок рабочих / </span><span class="hide_worker">Скрыть</span>
							</div>-->
							<span class="col-md-3 toggle_foreman">Показать/Скрыть список начальников цеха</span>
							<span class="col-md-3 toggle_brigadier">Показать/Скрыть список бригадиров</span>
							<span class="col-md-3 toggle_worker">Показать/Скрыть список рабочих</span>
							
							<div class="block_upload_image">
								<div id="butUpload_main_image"><span class="span_main_image"><img src="img/upload_image.png" alt=""></span></div>
								<ol id="files_main_image"></ol>
								<input type="text" class="input_fio_upload_image" placeholder="ФИО из таблицы"><button class="button_upload_image">Загрузить</button>
							</div>

							<table class="table table-hover block_table">
								<tr>
								    <th>Фото</th>
								    <th>ФИО</th>
								    <th>Должность</th>
								    <th>Дата приёма на работу</th>
								    <th>Размер заработной платы</th>
								</tr>';
								
								$result_top_manager = mysql_query("SELECT * FROM employees WHERE position='директор' ",$link);
								while($row_result_top_manager=mysql_fetch_array($result_top_manager))
								{
									echo '<tr class="tr_top_manager">
										<td id="'.$row_result_top_manager["name_surname"].'" class="upload_image"><img src="'.$row_result_top_manager["photo"].'" alt=""></td>
										<td id="'.$row_result_top_manager["id"].'" class="top_manager_name_surname"><span id="'.$row_result_top_manager["id"].'" class="top_manager_name_surname">'.$row_result_top_manager["name_surname"].'</span></td>
										<td id="'.$row_result_top_manager["id"].'" class="top_manager_position"><span id="'.$row_result_top_manager["id"].'" class="top_manager_position">'.$row_result_top_manager["position"].'</span></td>
										<td id="'.$row_result_top_manager["id"].'" class="top_manager_employment_date"><span id="'.$row_result_top_manager["id"].'" class="top_manager_employment_date">'.$row_result_top_manager["employment_date"].'</span></td>
										<td id="'.$row_result_top_manager["id"].'" class="top_manager_amount_of_salary"><span id="'.$row_result_top_manager["id"].'" class="top_manager_amount_of_salary">'.$row_result_top_manager["amount_of_salary"].'</span></td>
									</tr>';
								}								
								
								$result_deputy_director = mysql_query("SELECT * FROM employees WHERE position='заместитель директора' ",$link);
								while($row_result_deputy_director=mysql_fetch_array($result_deputy_director))
								{
									echo '<tr class="tr_deputy_director">
										<td id="'.$row_result_deputy_director["name_surname"].'" class="upload_image"><img src="'.$row_result_deputy_director["photo"].'" alt=""></td>
										<td id="'.$row_result_deputy_director["id"].'" class="deputy_director_name_surname"><span id="'.$row_result_deputy_director["id"].'" class="deputy_director_name_surname">'.$row_result_deputy_director["name_surname"].'</span></td>
										<td id="'.$row_result_deputy_director["id"].'" class="deputy_director_position"><span id="'.$row_result_deputy_director["id"].'" class="deputy_director_position">'.$row_result_deputy_director["position"].'</span></td>
										<td id="'.$row_result_deputy_director["id"].'" class="deputy_director_employment_date"><span id="'.$row_result_deputy_director["id"].'" class="deputy_director_employment_date">'.$row_result_deputy_director["employment_date"].'</span></td>
										<td id="'.$row_result_deputy_director["id"].'" class="deputy_director_amount_of_salary"><span id="'.$row_result_deputy_director["id"].'" class="deputy_director_amount_of_salary">'.$row_result_deputy_director["amount_of_salary"].'</span></td>
									</tr>';
								}

								$result_foreman = mysql_query("SELECT * FROM employees WHERE position='начальник цеха' LIMIT 10 ",$link);
								while($row_result_foreman=mysql_fetch_array($result_foreman))
								{
									echo '<tr class="tr_foreman">
										<td id="'.$row_result_foreman["name_surname"].'" class="upload_image"><img src="'.$row_result_foreman["photo"].'" alt=""></td>
										<td id="'.$row_result_foreman["id"].'" class="foreman_name_surname"><span id="'.$row_result_foreman["id"].'" class="foreman_name_surname">'.$row_result_foreman["name_surname"].'</span></td>
										<td id="'.$row_result_foreman["id"].'" class="foreman_position"><span id="'.$row_result_foreman["id"].'" class="foreman_position">'.$row_result_foreman["position"].'</span></td>
										<td id="'.$row_result_foreman["id"].'" class="foreman_employment_date"><span id="'.$row_result_foreman["id"].'" class="foreman_employment_date">'.$row_result_foreman["employment_date"].'</span></td>
										<td id="'.$row_result_foreman["id"].'" class="foreman_amount_of_salary"><span id="'.$row_result_foreman["id"].'" class="foreman_amount_of_salary">'.$row_result_foreman["amount_of_salary"].'</span></td>
									<tr>';
								}
								
								$result_brigadier = mysql_query("SELECT * FROM employees WHERE position='бригадир' LIMIT 10",$link);
								while($row_result_brigadier=mysql_fetch_array($result_brigadier))
								{
									echo '<tr class="tr_brigadier">
										<td id="'.$row_result_brigadier["name_surname"].'" class="upload_image"><img src="'.$row_result_brigadier["photo"].'" alt=""></td>
										<td id="'.$row_result_brigadier["id"].'" class="brigadier_name_surname"><span id="'.$row_result_brigadier["id"].'" class="brigadier_name_surname">'.$row_result_brigadier["name_surname"].'</span></td>
										<td id="'.$row_result_brigadier["id"].'" class="brigadier_position"><span id="'.$row_result_brigadier["id"].'" class="brigadier_position">'.$row_result_brigadier["position"].'</span></td>
										<td id="'.$row_result_brigadier["id"].'" class="brigadier_employment_date"><span id="'.$row_result_brigadier["id"].'" class="brigadier_employment_date">'.$row_result_brigadier["employment_date"].'</span></td>
										<td id="'.$row_result_brigadier["id"].'" class="brigadier_amount_of_salary"><span id="'.$row_result_brigadier["id"].'" class="brigadier_amount_of_salary">'.$row_result_brigadier["amount_of_salary"].'</span></td>
									</tr>';
								}
								
								$result_worker = mysql_query("SELECT * FROM employees WHERE position='рабочий' LIMIT 10",$link);
								while($row_result_worker=mysql_fetch_array($result_worker))
								{
									echo '<tr class="tr_worker">
										<td id="'.$row_result_worker["name_surname"].'" class="upload_image"><img src="'.$row_result_worker["photo"].'" alt=""></td>
										<td id="'.$row_result_worker["id"].'" class="worker_name_surname"><span id="'.$row_result_worker["id"].'" class="worker_name_surname">'.$row_result_worker["name_surname"].'</span></td>
										<td id="'.$row_result_worker["id"].'" class="worker_position"><span id="'.$row_result_worker["id"].'" class="worker_position">'.$row_result_worker["position"].'</span></td>
										<td id="'.$row_result_worker["id"].'" class="worker_employment_date"><span id="'.$row_result_worker["id"].'" class="worker_employment_date">'.$row_result_worker["employment_date"].'</span></td>
										<td id="'.$row_result_worker["id"].'" class="worker_amount_of_salary"><span id="'.$row_result_worker["id"].'" class="worker_amount_of_salary">'.$row_result_worker["amount_of_salary"].'</span></td>
									</tr>';
								}
								
							echo '</table>';
						}else{
							echo '<input type="text" class="login_authorization" placeholder="Логин">
							<input type="text" class="pass_authorization" placeholder="Пароль">
							<input type="checkbox" class="checkbox_authorization">
							<button class="button_authorization">Вход</button> <span id="enter_output"></span>';

							echo '<table class="table table-hover block_table">
								<tr>
								    <th>ФИО</th>
								    <th>Должность</th>
								</tr>';
								
								$result_top_manager = mysql_query("SELECT * FROM employees WHERE position='директор' ",$link);
								while($row_result_top_manager=mysql_fetch_array($result_top_manager))
								{
									echo '<tr><td>'.$row_result_top_manager["name_surname"].'</td><td>'.$row_result_top_manager["position"].'</td></tr>';
								}
								
								
								$result_deputy_director = mysql_query("SELECT * FROM employees WHERE position='заместитель директора' ",$link);
								while($row_result_deputy_director=mysql_fetch_array($result_deputy_director))
								{
									echo '<tr><td>'.$row_result_deputy_director["name_surname"].'</td><td>'.$row_result_deputy_director["position"].'</td></tr>';
								}
								
								$result_foreman = mysql_query("SELECT * FROM employees WHERE position='начальник цеха' ",$link);
								while($row_result_foreman=mysql_fetch_array($result_foreman))
								{
									echo '<tr><td>'.$row_result_foreman["name_surname"].'</td><td>'.$row_result_foreman["position"].'</td><tr>';
								}
								
								$result_brigadier = mysql_query("SELECT * FROM employees WHERE position='бригадир' ",$link);
								while($row_result_brigadier=mysql_fetch_array($result_brigadier))
								{
									echo '<tr><td>'.$row_result_brigadier["name_surname"].'</td><td>'.$row_result_brigadier["position"].'</td></tr>';
								}
								
								$result_worker = mysql_query("SELECT * FROM employees WHERE position='рабочий' ",$link);
								while($row_result_worker=mysql_fetch_array($result_worker))
								{
									echo '<tr><td>'.$row_result_worker["name_surname"].'</td><td>'.$row_result_worker["position"].'</td></tr>';
								}
								
							echo '</table>';
						}
					?>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/ajaxupload.js"></script>
	<script src="js/common.js"></script>
</body>
</html>