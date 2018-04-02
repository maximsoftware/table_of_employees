<?php
	include("include/db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		/*for($i=0; $i<1000; $i++)
		{
			mysql_query("INSERT INTO employees (name_surname,position,employment_date,amount_of_salary) VALUES ('Иванов Иван Иванович','рабочий',NOW(),'20000 руб.') ",$link);
		}*/
		/*for($i=0; $i<1000; $i++)
		{
			mysql_query("INSERT INTO employees (name_surname,position,employment_date,amount_of_salary) VALUES ('Петров Пётр Петрович','бригадир',NOW(),'25000 руб.') ",$link);
		}
		for($i=0; $i<1000; $i++)
		{
			mysql_query("INSERT INTO employees (name_surname,position,employment_date,amount_of_salary) VALUES ('Васильев Василий Василиевич','начальник цеха',NOW(),'30000 руб.') ",$link);
		}
		for($i=0; $i<2; $i++)
		{
			mysql_query("INSERT INTO employees (name_surname,position,employment_date,amount_of_salary) VALUES ('Михайлов Михаил Михаилович','заместитель директора',NOW(),'35000 руб.') ",$link);
		}
		for($i=0; $i<1; $i++)
		{
			mysql_query("INSERT INTO employees (name_surname,position,employment_date,amount_of_salary) VALUES ('Николаев Николай Николаевич','директор',NOW(),'40000 руб.') ",$link);
		}*/

		/*mysql_query("UPDATE employees SET position_id='5' WHERE position='рабочий' ",$link);*/

		mysql_query("UPDATE employees SET position_class='worker' WHERE position='рабочий' ",$link);
	?>
</body>
</html>