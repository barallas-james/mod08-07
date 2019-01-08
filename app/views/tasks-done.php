	<h4>Tasks Done</h4>

	<?php
		require_once("../controllers/connection.php");

		$sql = "SELECT * FROM todolist WHERE status = 'done'";

		$result = mysqli_query($conn,$sql);
	?>

		<ul class="collection with-header">

	<?
		while ($row = mysqli_fetch_array($result)) {
	?>

			<li class="collection-item">
				<div>
					<?php echo $row['task'] ?>

					
				</div>
				
			</li>
	<?php
		}

		mysqli_close($conn);
	?>

		</ul>