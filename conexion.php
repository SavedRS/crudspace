<?php

    // Conexion a la base de datos
	define('DB_HOST','crudspac.mysql.database.azure.com');
	define('DB_USER','edson@crudspac');
	define('DB_PASS','qwerty&16');
    define('DB_NAME','crudspac');
    
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
