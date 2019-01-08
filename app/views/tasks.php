

	<h4>Tasks</h4>

	<?php
		require_once("../controllers/connection.php");

		$sql = "SELECT * FROM todolist WHERE status = 'pending'";

		$result = mysqli_query($conn,$sql);
	?>

		<ul class="collection with-header">


	<?
		while ($row = mysqli_fetch_array($result)) {
	?>

			<li class="collection-item">
				<div>
					<?php echo $row['task'] ?>

					<div class="secondary-content">
						<button href="#" class="done" value="<? echo $row['id'] ?>">
							<i class="material-icons">check</i>
						</button>

						<button href="#" class="delete" value="<?php echo $row['id'] ?>">
							<i class="material-icons">delete</i>
						</button>
					</div>
				</div>
				
			</li>
	<?php
		}

		mysqli_close($conn);
	?>
		</ul>


<script type="text/javascript">
	
	$('.secondary-content').on('click', '.done', function() {
			

		const doneTask = $(this).val();

		$.ajax({
			method: 'POST',
			url: 'app/controllers/done.php',
			data: {id: doneTask},
		}).done(function() {
			console.log('added task')
		});


		view();

	});

	$('.secondary-content').on('click', '.delete', function() {
			

		const deleteTask = $(this).val();

		$.ajax({
			method: 'POST',
			url: 'app/controllers/delete.php',
			data: {id: deleteTask},
		}).done(function() {
			console.log('added task')
		});


		view();

	});







		// Display of tasks
		function view(){
			$.post({
				url: 'app/views/tasks.php',
				success: function(result){
					$('#tasks').html(result);
				}
			});

			$.post({
				url: 'app/views/tasks-done.php',
				success: function(result){
					$('#tasksDone').html(result);
				}
			});
		}
		


</script>






