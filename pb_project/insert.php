<?php

$age=$_GET['age'];
$name=$_GET['name'];
$email=$_GET['email'];
$pwd=$_GET['pwd'];

echo $age;
echo $name;
echo $email;
echo $pwd;

$link = mysqli_connect("localhost", "root", "", "stay_at_home");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO users (uname, email_id, upassword,age) VALUES ('$name','$email','$pwd','$age')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}




?>