
<?php 

     $conn = mysqli_connect('localhost','root','','testhungha');
	mysqli_set_charset($conn,'utf8');

	if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>