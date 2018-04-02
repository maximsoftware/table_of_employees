<?php
	header("Content-Type: text/html; charset=utf-8");
	include("include/db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<script src="js/jquery.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<ul>
					<?php
					$result_top_manager = mysql_query("SELECT * FROM employees WHERE position='директор' ",$link);
					while($row_result_top_manager=mysql_fetch_array($result_top_manager))
					{
						echo '<li><span>'.$row_result_top_manager["name_surname"].'</span> | <span>'.$row_result_top_manager["position"].'</span></li>';
					}
					?>
					<ul>
						<?php
						$result_deputy_director = mysql_query("SELECT * FROM employees WHERE position='заместитель директора' ",$link);
						while($row_result_deputy_director=mysql_fetch_array($result_deputy_director))
						{
							echo '<li><span>'.$row_result_deputy_director["name_surname"].'</span> | <span>'.$row_result_deputy_director["position"].'</span></li>';
						}
						?>
						<ul>
							<?php
							$result_foreman = mysql_query("SELECT * FROM employees WHERE position='начальник цеха' ",$link);
							while($row_result_foreman=mysql_fetch_array($result_foreman))
							{
								echo '<li><span>'.$row_result_foreman["name_surname"].'</span> | <span>'.$row_result_foreman["position"].'</span></li>';
							}
							?>
							<ul>
								<?php
								$result_brigadier = mysql_query("SELECT * FROM employees WHERE position='бригадир' ",$link);
								while($row_result_brigadier=mysql_fetch_array($result_brigadier))
								{
									echo '<li><span>'.$row_result_brigadier["name_surname"].'</span> | <span>'.$row_result_brigadier["position"].'</span></li>';
								}
								?>
								<ul>
									<?php
									$result_worker = mysql_query("SELECT * FROM employees WHERE position='рабочий' ",$link);
									while($row_result_worker=mysql_fetch_array($result_worker))
									{
										echo '<li><span>'.$row_result_worker["name_surname"].'</span> | <span>'.$row_result_worker["position"].'</span></li>';
									}
									?>
								</ul>
							</ul>
						</ul>
					</ul>
				</ul>
			</div>
		</div>
	</div>

</body>
</html>