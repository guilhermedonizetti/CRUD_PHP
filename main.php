<?php
	
	try{
		$conn = new PDO("mysql:host=localhost;dbname=atividades","root","");
	}
	catch(PDOException $erro){
		echo $erro;
	}