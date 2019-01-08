

view();

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

///////////////////////////////////////////////////////////////

// Add tasks
$("#add").click(() => {

	const newTask = $("#addTask").val();

	$.ajax({
		method: 'POST',
		url: 'app/controllers/add.php',
		data: {name: newTask},
	}).done(function() {
		console.log('added task')
	});

	$("#addTask").val("");

	view();

});

// Clear add tasks text box
$("#clear").click(() => {

	$("#addTask").val("");

});


////////////////////////////////////////////////////////////////



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