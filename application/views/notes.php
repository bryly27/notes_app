<html>
<head>
	<title>Notes</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<script type="text/javascript" src='/assets/js/jquery.js'></script>
</head>
<body>
	<div class='container'>
		<div class='row'>

			<div class='col-md-6 col-sm-6 col-xs-6'>
				<h1>Notes App</h1>
			</div>

			<div class='create_note col-md-6 col-sm-6 col-xs-6'>
				<h1>Create a note</h1>
				<form action='/notes/create' method='post'>
					<input id='title' type='text' name='title'>
					<input type='submit' value='Create Note'>
				</form>
			</div>

		</div>
	</div>
	
	<div class='response container'>
		<?php require_once('partial_index.php') ?>
	</div>

	

</body>
</html>