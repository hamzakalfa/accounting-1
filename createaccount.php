<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("sampledb");
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
//$nom_Client=$_GET["nom"];
//$prenom_Client=$_GET["prenom"];
//$email=$_GET["email"];
//$address=$_GET["address"];
//$phone_number=$_GET["tel"];
//$decision=$_GET["decision"];
//$dateofBirth=$_GET["daten"];
//$zipcode=$_GET["zipcode"];
//$education=$_GET["education"];
//$status=$_GET["status"];
//$conditionsAcceptance=$_GET["ca"];

$sql = "INSERT INTO `client`(`conditions_acceptance`, `dateof_birth`, `decision`, `education`, `status`, `zipcode`, `address`, `email`,`nom_client`, `phone_number`, `prenom_client`) VALUES (true,'2019-05-14T22:00:00.000+0000','decision','education','celib',666666,'addr','hhh@hhhh.com','nom12344455','0678869500','prenom');
";


if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
$connection->close();
?>
