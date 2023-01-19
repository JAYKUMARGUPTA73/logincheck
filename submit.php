<?php
$connection = mysqli_connect('localhost','root');
if($connection){
    echo "connection is eastablished.";
}
else {
    echo "error!! while connecting.";
}
    mysqli_select_db($connection, 'webaero');
    $email=$_POST['email'];
    $pass=$_POST['passwd'];

    $data ="INSERT INTO  table2(email,passwd) values('$email','$pass')";
    mysqli_query($connection,$data);
    header('location: signupsscfl.php');



?>