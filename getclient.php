 <?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");
//Database operations
//db_createaccount
$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
//$connection = new mysqli("localhost","root","","db_createaccount");
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database<br>");
}

$sql = "SELECT * from client";
$result = $connection->query($sql);
$data=array();
if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		print json_encode($row);
        //echo "{\"client\"<br>id : " . $row["id_client"]. " - Name: " . $row["prenom_client"]. " " . $row["nom_client"]. "<br>";
		
    }
	print json_encode($data);
} else {
    echo "0 results";
}
$connection->close();
?> 
