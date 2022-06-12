<?php

class Admin {
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "news";
	var $con;

	function __construct () {
		$this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($this->con,$this->db);
	}

	function input ($name, $username, $password) {
		mysqli_query($this->con, "INSERT INTO `admin`(`name`, `username`, `password`) VALUES ('$name', '$username', '$password')");
	}

	function show() {
		$data = mysqli_query($this->con, "SELECT * FROM admin");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}

	function detail($id) {
		$data = mysqli_query($this->con, "SELECT * FROM admin WHERE id = '$id'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function delete($id) {
		mysqli_query($this->con, "DELETE FROM admin WHERE id='$id'");
	}

	function edit($id){
		$data = mysqli_query($this->con, "SELECT * FROM admin WHERE id = '$id'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id, $name, $username, $password) {
		mysqli_query($this->con, "UPDATE `admin` SET `name` = '$name', `username` = '$username', `password` = '$password' WHERE `id` = '$id'");
	}
}