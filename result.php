<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_POST['username'];
$email = $_POST['email'];

if(empty($name)){
    $name_error = "* Name is Required";
}
if(empty($email)){
    $email_error = "* Email is Required";
}
}
 include("AboutMe_Page.php");
?>