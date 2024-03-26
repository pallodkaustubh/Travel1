<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
function makeconnection()
{
	$host = 'travel1.mysql.database.azure.com';
     $username = 'traveladmin@travel1';
     $password = 'server@123';
     $db_name = 'travel';
     
	try {

		//Initializes MySQLi
			$cn = mysqli_init();
		
			mysqli_ssl_set($cn,NULL,NULL, "DigiCertGlobalRootG2.crt.pem", NULL, NULL);
			
		
			// Establish the connection
			mysqli_real_connect($cn, $host, $username, $password, $db_name, 3306, NULL, MYSQLI_CLIENT_SSL);
			mysqli_set_charset($cn, "utf8");
			//If connection failed, show the error
			if (mysqli_connect_errno())
			{
				die('Failed to connect to MySQL: '.mysqli_connect_error());
			}
		}
		catch (mysqli_sql_exception $e) {
			throw new Exception("MySQL Connection Error: " . $e->getMessage());
		}







	return $cn;
}
 
$host = 'travel1.mysql.database.azure.com';
     $username = 'traveladmin@travel1';
     $password = 'server@123';
     $db_name = 'travel';
     


//$cn=mysqli_connect("localhost","root","","travel");

$cn=mysqli_connect($host, $username, $password, $db_name);

?>
</body>
</html>

