<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">

	<meta http-equiv="X-UA-Compatible" content="IE-Edge">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<title>To-Do List Activity</title>


</head>
<body >

	<div class="container ">

		<h1>To-Do List</h1>

		<div class="box">

			<h4>Add Task</h4>

			<div class="row">

				<div class="input-field col l12">
					<input id="addTask" type="text" name="addTask">
					<label class="active" for="addTask">Task</label>
					
					<button class="btn waves-effect waves-light green darken-4" type="submit" id="add">Add
					  <i class="material-icons right">add</i>
					</button>

					<button class="btn waves-effect waves-light red accent-4" type="submit" id="clear">Clear
					  <i class="material-icons right">clear</i>
					</button>

				</div>

			</div>
		</div>

		<div class="box" id="tasks"></div>

		<div class="box" id="tasksDone"></div>




	</div>


	



	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="assets/js/materialize.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>






</body>
</html>