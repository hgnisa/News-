<?php
include '../model/class_admin.php';
include '../model/connection.php';
$adm = new Admin();

$action = $_GET['action'];
if ($action == "add") {
    $adm->input($_POST['name'], $_POST['username'], $_POST['password']);
	header ("location:../view/admin.php");
}
else if($action == "delete"){
	$adm->delete($_GET['id']);
	header ("location:../view/admin.php");
}
else if($action == "edit") {
	$adm->edit($_GET['id']);
	header ("location:../view/admin.php");
}
else if($action == "update") {
    $adm->update($_POST['id'], $_POST['name'], $_POST['username'], $_POST['password']);
	header ("location:../view/admin.php");
}

?>