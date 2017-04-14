<?php 
require_once('db.php');

$query = "SELECT description, image, text, time, author FROM artical";
$result = mysql_query($query) or die('Failed requset: ' . mysql_error());
$rows = array();  
while ($line = mysql_fetch_array($result, MYSQL_ASSOC) ){
    $rows[] = $lines;
}
//echo json_encode($rows);
?> 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "angular_artical";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("Connection failed: " .mysqli_connecet_error());
}

$showData = "SELECT description, image, text, time, author FROM artical";
$data = array();
$result = mysqli_query($conn, $showData);

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		$data[] = $row;
	}
} else {
	echo "0 results";
};
print json_encode($data);
mysqli_close($conn);
echo($outp);
?>