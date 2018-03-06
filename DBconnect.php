<?php

$dsn = 'mysql:host=sql2.njit.edu;dbname=accounts';
$username = 'me252';
$password = 'ghtl8xxNm';

try{
	$db = new PDO($dsn, $username, $password);
	echo '<p>Connected successfully</p><br>';
} catch{
	$error_message = $e->getMessage();
	echo "<p>An error occurred while connecting to the database: $error_message </p><br>";
}

$query = 'SELECT * FROM accounts WHERE id < 6';
$statement = $db->prepare($query);
$statement->execute();

while ($row = $statement->fetch()){
	echo "<tr><td>".$row["id"]."</td> <td>" . $row["email"]."</td> <td>" . $row["fname"]."</td> <td>" .$row["lname"]."</td> <td>" .$row["phone"]."</td> <td>" .$row["birthday"]."</td> <td>" .$row["gender"]."</td> <td>" .$row["password"]."</td></tr>"."<br>";
}

$statement->closeCursor();








?>
