<?php
    require "config.inc.php";
	class Database
	{

	var $host     = DB_SERVER; //database server
	var $user     = DB_USER; //database login name
	var $pass     = DB_PASS; //database login password
	var $database = DB_DATABASE; //database name

	public $link;

	public function Database()
	{
			$this->link = new mysqli($this->host,$this->user,$this->pass,$this->database);
			if (mysqli_connect_error())
			{
				echo mysqli_connect_error();
				exit();
			}	
	}
	}
?>