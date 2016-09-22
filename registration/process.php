<?php include 'vendor/include.php'; ?>
<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/21/2016
 * Time: 9:39 PM
 */

if (isset($_POST['register'])){
    $db = new Connect();

    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $password   = $_POST['pass'];
    $password   = md5($password);
    $query = "INSERT INTO users (user_name, email, password) VALUE('$username','$email','$password')";
    if($db->insert($query)){
        $success = '<center><h2>Registration Success</h2></center>';
    }else{
        $success = '<center><h2>Registration Faild</h2></center>';

    }
    header('Location:index.php?success=<center><h2>Registration Success</h2></center>');
}