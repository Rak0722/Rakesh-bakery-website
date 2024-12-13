<?php
include("config.php");



extract($_POST);
$query = "INSERT INTO `contact` (`firstname`,`lastname`,`email`,`phone_no`,`food`,`how_much`,`address`) VALUES ('.$firstname.','.$lastname.','.$email.','.$phone_no.','.$food.','.$how_much.','.$address.')";
$result = $mysqli->query($query);

if(!$result){
    echo "Something went wrong".$mysql->err;

}
echo '<script> alert("Thank you for submitting your query")</script>';
$mysqli->close();

// print_r($_POST);

?>