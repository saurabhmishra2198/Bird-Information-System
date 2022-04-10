<?php session_start() ?>
<?php
require 'main_db.php';
if(isset($_SESSION['admin']))
{
    $sno = $_GET['sno'];
    $obj = new Connection();

    $res = $obj->BirdDelete($sno);
    if($res)
    {
        $_SESSION['msg'] = "Information Deleted Successfuly";
        header('location:BirdDetail.php');
    }
    else
    {
        $_SESSION['msg'] = "Information Deleted not Successfuly";
    }
}
?>