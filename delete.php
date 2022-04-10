<?php
require 'main_db.php';
if(isset($_SESSION['name']))
{
    $mail = $_GET['email'];
    $obj = new Connection();
    $r = $obj->UserDelete($mail);
    if($r)
    {
        $_SESSION['msg'] = "User deleted successful";
        header("location:users.php");
    }
    else
    {
        $_SESSION['msg'] = "User not deleted! Try again";
    }
}
?>