<html>
	<head>
		<title>Eyob Woldeghebriel</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	</head>
	<body>
	<div class="container container-fluid">
		<?php if (@$_SERVER['SSL_CLIENT_S_DN_CN']) {
			$name = $_SERVER['SSL_CLIENT_S_DN_CN'];
			$kerb = substr($_SERVER['SSL_CLIENT_S_DN_Email'], 0, -8);
			$url = 'http://m.mit.edu/apis/people/' . $kerb;
			$contents = file_get_contents($url);
			$deparment = substr($contents, strpos($contents, 'dept')+7, strpos($contents, 'id') - strpos($contents, 'dept') - 10);
		} ?>
		<div class="jumbotron">
			<h2 class="display-4"> Hello, <?php print $name; ?></h2>
			<p class="lead">This is a simple web page to test getting information from certificates.</p>
			<hr class="my-4">
			<div class="card-deck">
				<div class="card">
					<div class="card-block">
						<h4 class="card-title">Kerberos</h4>
						<p class="card-text"><?php print $kerb; ?></p>
					</div>
				</div>
				<div class="card">
					<div class="card-block">
						<h4 class="card-title">Department</h4>
						<p class="card-text"><?php print $deparment; ?></p>
					</div>
				</div>
		</div>
	</div>
	</body>
</html>
