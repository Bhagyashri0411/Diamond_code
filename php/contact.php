<?php
include './db.php';
if (isset($_POST['submit'])) {

$name = $_POST['namefeild'];
$phone = $_POST['phonefelid'];
$mail = $_POST['emailfeild'];
$message = $_POST['message'];

if (empty($name) || empty($phone) || empty($mail) || empty($message) ) {
    echo  "fill";
}
else{

$sqlnsert = mysqli_query($conn, "INSERT INTO tableinfo(name,email,phone,message) VALUES('$name','$mail', '$phone', '$message')");
if ($sqlnsert) {
    echo  'success';
}    
                   
}
}

?>