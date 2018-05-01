<!DOCTYPE html>
<html>
<body>
<?php echo "first code";?>

<!-- <?php
//Db connection
$servername="db";
$username="root";
$password="nopoint";
//create new connection
$conn = new mysqli($servername,$username,$password);
//check connection
if($conn->connect_error){
  die("connection failed:".$conn->connect_error);
}
echo "Connected Successfully";
?> -->

<?php
//procedural
$servername="db";
$username="root";
$password="nopoint";

//create connection
$conn = mysqli_connect($servername,$username,$password);

//check connection
if(!$conn){
  die("connection failed:".mysqli_connect_error());
}
echo "Connected";
 ?>
</body>
</html>
