<?php
try {
	require_once 'pdo-connect.php';
	$sql = "SELECT * FROM crud";
	$result = $db->query($sql);
	$errorInfo = $db->errorInfo();
	
	if (isset($errorInfo[2])) {
		$error = $errorInfo[2];
	}
} catch (Exception $e) {
	$error = $e->getMessage();
	
}
if (isset($error)){
	echo " Error :".$error;
}
while ($row = $result->fetch()) {
	echo $row["firstname"]. " ".$row[2]."<br>";
}