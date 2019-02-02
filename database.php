<?
$config = require_once 'config.php';	//$db = new PDO(1,2,3,4)
try {
	$db = new PDO("mysql:host={$config['host']}; dbname={$config['database']}; charset=utf8", $config['user'], $config['password'], [
	PDO::ATTR_EMULATE_PREPARES =>false,
	PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION
	]);
} 
catch (PDOException $error) {
	echo $error->getMessage();
	exit('Database error');
}
?>