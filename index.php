<!DOCTYPE html>
<html>
<head>
	<title> Bruhndonie's To-Do List </title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="wrap"> <!-- all our tasks will be in a list and our div class wrap will wrap it -->
		<div class="task-list"> 
			<ul>
				<?php require("includes/connect.php"); ?>
			</ul>
		</div>
	<form class="add-new-task" autocomplete="off">
		<input type="text" name="new-task" placeholder="Add new item..."/>
	</form>
	</div>
</body>
</html>