<?php 

class Conexion{

	static public function connect(){

		$link = new PDO("mysql:host=localhost;dbname=productos", "root","");

		$link->exec("set names utf8");

		return $link;

	}

}
