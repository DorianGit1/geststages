<?php

function connexionBDD()
{
	try
	{
            $bdd = new PDO('mysql:host=doriangeststages-server.mysql.database.azure.com;port=3306;dbname=bdd_geststages;charset=utf8', 'rjkjpaplkx', 'hk2$Slp$S4D2fXsM', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $bdd;
	}
	catch(Exception $e)
	{
		$pdo_error = $e->getMessage();
                return false;
	}
    
}

?>
