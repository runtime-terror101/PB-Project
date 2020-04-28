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
//$sql = "INSERT INTO users (uname, email_id, upassword,age) VALUES ('$name','$email','$pwd','$age')";

// $checkemailID = $db -> query("SELECT shortlink FROM test WHERE `shortlink` = $shortlink");

// if ($checkUserID === false) {
//     die($db->error());
// }


//    header("Location: error.php?title=hovsa");
//    exit(0);



$sq2 = "SELECT * FROM users WHERE email_id='$email' ";
$checkemailid = mysqli_query($link, $sq2);

if (mysqli_num_rows($checkemailid) > 0) {
    $message= "User already exists";
    header("Location:index.php?message=$message"); // Link him to the first page where he has option of both
    exit(0);
}
else{

    $sql = "INSERT INTO users (uname, email_id, upassword,age) VALUES ('$name','$email','$pwd','$age')";
    if(mysqli_query($link, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        echo "User exists";
        header('Location:give your url here');
    }

}








?>