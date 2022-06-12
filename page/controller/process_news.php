<?php
include '../model/class_news.php';
include '../model/connection.php';
$news = new News();

$action = $_GET['action'];
if ($action == "add") {
	$cover = $_FILES['cover']['name'];
	$tmp = $_FILES['cover']['tmp_name'];
			$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$nama = $_FILES['cover']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));

			$eks = '.jpg';
			$coverbaru = date('dmYHis').$eks;
			$path = "../../images/".$coverbaru;

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if(move_uploaded_file($tmp, $path)){
					$news->input($_POST['title'], $_POST['content'], $coverbaru, $_POST['author'], $_POST['date']);
				}
			}
			header ("location:../view/index.php");
}
else if($action == "delete"){
	$news->delete($_GET['id']);
	header ("location:../view/index.php");
}
else if($action == "edit") {
	$news->edit($_GET['id']);
	header ("location:../view/index.php");
}
else if($action == "update") {
	$cover = $_FILES['cover']['name'];
	$tmp = $_FILES['cover']['tmp_name'];
			$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$nama = $_FILES['cover']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));

			$eks = '.jpg';
			$coverbaru = date('dmYHis').$eks;
			$path = "../../images/".$coverbaru;

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if(move_uploaded_file($tmp, $path)){
					$news->update($_POST['id'], $_POST['title'], $_POST['content'], $coverbaru, $_POST['author'], $_POST['date']);
				}
			}
			header ("location:../view/index.php");
	
}
?>