<?php 

$host = "localhost";
$root = "root";
$pass = "";
$dbname = "qualquerum";

$conn = new mysqli();

if($conn->connect_error){
	die "Erro." . $conn->connect_error;
}


include_once "header.php";



?>




<?php 

include_once "footer.php";

?>