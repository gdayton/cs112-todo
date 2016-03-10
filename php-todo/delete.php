<?php
ob_start(); include("db.php");
if(isset($_GET['id'])){
	$data = $db->prepare("DELETE FROM item WHERE id = ?");
	$data->execute(array($_GET['id']));
}
header("Location: /todo");
?>