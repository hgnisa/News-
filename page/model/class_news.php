<?php

class News {
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "news";
	var $con;

	function __construct () {
		$this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($this->con,$this->db);
	}

	function input ($title, $content, $cover, $author, $date) {
		mysqli_query($this->con, "INSERT INTO `news`(`title`, `content`, `cover`, `author`,`date`) VALUES ('$title', '$content', '$cover', '$author', '$date')");
	}

	function show() {
		$data = mysqli_query($this->con, "SELECT * FROM news ORDER BY date DESC");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}

	function detail($id) {
		$data = mysqli_query($this->con, "SELECT * FROM news WHERE id = '$id'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function delete($id) {
		mysqli_query($this->con, "DELETE FROM news WHERE id='$id'");
	}

	function edit($id){
		$data = mysqli_query($this->con, "SELECT * FROM news WHERE id = '$id'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id, $title, $content, $cover, $author, $date) {
		mysqli_query($this->con, "UPDATE `news` SET `title` = '$title', `content` = '$content', `cover` = '$cover', `author` = '$author', `date` = '$date' WHERE `id` = '$id'");
	}
}
?>