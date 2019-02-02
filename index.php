<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=0.8, shrink-to-fit=yes">
		<title>My_Newsletter</title>
		<meta name="description" content="Use PDO - save to MySQL database">
		<meta name="keywords" content="php, MySQL, PDO">
		<link rel="stylesheet" href="main.css">
		<link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
		<link rel="icon" href="icon/favicon.ico">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	</head>

	<body>
		<div class="container">
			<header>
				<h1>Why not to get a Newsletter?</h1>
			</header>
			<main>
				<article>
					<form method="post" action="save.php">
						<label>Enter your e-mail address.
							<input type="email" name="email" <?= isset($_SESSION['given_email']) ? 'value="'.$_SESSION['given_email'].'"' : '' ?>>
						</label>
						<input type="submit" value="Sign up!">
						<?php
						if (isset($_SESSION['given_email'])){
							echo '<p id="error">That e-mail address is not correct!<br>Please, try it again.</p>';
							unset($_SESSION['given_email']);
						}
						?>	
					</form>
				</article>
			</main>
		</div>
	</body>
</html>