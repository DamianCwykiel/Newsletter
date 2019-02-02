<?php

session_start();
	if (isset($_POST['email'])) {
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		if (empty($email)) {
			$_SESSION['given_email'] = $_POST['email'];
			header('Location: index.php');
			//echo $_POST['email']."<br>". $email;
		} else {
			require_once 'database.php';
			$query = $db->prepare('INSERT INTO users VALUES(NULL,:email)');
			$query ->bindValue(':email', $email, PDO::PARAM_STR);
			$query ->execute(); //metoda potrzebne nawiasy okragle
		}
	} else {
	header('Location: index.php');
	exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sign you up to a newsletter</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, shrink-to-fit=yes">
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
				<h1>Well done!</h1>
			</header>
			<main>
				<article>
					<p id="success">Thank you for adding your e-mail to my newsletter <u>e-mail list.</u></br>
					I'll inform you of any kind of news in my projects as they proceed. </p>
					<p><b>Take care and hear you soon!</b></p>
				</article>
				<a href = "index.php">
					<div id="button">Back</div>
				</a>
			</main>
		</div>
	</body>
</html>