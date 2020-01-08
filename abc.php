<?php 
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'resume');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));  
}

if((isset($_POST['name'])) && (isset($_POST['email'])))
{

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];


$sql="INSERT INTO `feedback` (`name`, `email`, `comment`) VALUES ('$name','$email', '$comment');";
$result = mysqli_query($connection, $sql);

if($result){
echo "Thank you! We will get in touch with you soon";
}
else{
    echo "Submission failed!";
}    
}

?>