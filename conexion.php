<?php

    // Conexion a la base de datos
	define('DB_HOST','crudspaceone.mysql.database.azure.com');
	define('DB_USER','edsonr@crudapp');
	define('DB_PASS','Qwerty123');
    define('DB_NAME','crudapp');
    
    //Database=crudapp;
    //Data Source=crudspaceone-mysqldbserver.mysql.database.azure.com;
    //User Id=edsonr@crudapp;
    //Password=Qwerty123

	# conectare la base de datos
    $con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }

?>
