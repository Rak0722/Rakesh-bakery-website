<?php
include("css\config.php");

extract($_POST);
$query = "INSERT INTO `contact-data` (`firstname`,lastname`,`email`,`phone_no`,`food`,`how_much`,`addresss`) VALUES ('".$firstname."','".$lastname."','".$email."','".$phone_no."','".$food."','".$how_much."','".$addresss."')";
$result = $mysqli->query($query);

if(!result){
    echo "Something went wrong".$mysql->err;

}
echo "Thank you for submitting your query";
$mysqli->close();

print_r($_POST)

?>