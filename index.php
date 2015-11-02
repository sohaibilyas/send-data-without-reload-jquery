<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Send Data Without Reload</title>
</head>
<body>
	<div id="container">
		<input type="text" id="name" placeholder="Type here and press Enter">
	</div>

	<div id="result"></div>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#name').focus();
			$('#name').keypress(function(event) {
				var key = (event.keyCode ? event.keyCode : event.which);
				if (key == 13) {
					var info = $('#name').val();
					$.ajax({
						method: "POST",
						url: "action.php",
						data: {name: info},
						success: function(status) {
							$('#result').append(status);
							$('#name').val('');
						}
					});
				};
			});
		});
	</script>
</body>
</html>
