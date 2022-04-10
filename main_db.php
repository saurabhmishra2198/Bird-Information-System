<?php
class Connection
{
    //create connection variable
    private $con;

    //Connection function 
    function __construct()
    {
        $dns = "mysql:host=localhost;dbname=birdsInfo;charset:UTF8";
        try
        {
            $this->con = new PDO($dns,"root","");
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        /*if($this->con)
        {
            echo "done";
        }
        else
        {
            echo "not done";
        }*/
    }

    //User Registraction function 
    function signup($name,$email,$phone,$password)
    {
        $query = "INSERT INTO `user_master`(`name`, `email`, `phone`, `password`) VALUES (:a,:b,:c,:d)";
        $stmt = $this->con->prepare($query);
        $stmt->bindParam(":a",$name);
        $stmt->bindParam(":b",$email);
        $stmt->bindParam(":c",$phone);
        $stmt->bindParam(":d",$password);
        try
        {
            $r = $stmt->execute();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return $r;
    }

    //User login function
    function login($email,$pass)
    {
        $query="Select * from user_master where email=:a and password=:b";
        $stmt = $this->con->prepare($query);
        $stmt->bindParam(":a",$email);
        $stmt->bindParam(":b",$pass);
        try
        {
            $stmt->execute();
            $r = $stmt->fetch();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return $r;
    }

    //user contact function
    function contact($name,$email,$msg)
    {
        $query="INSERT INTO `contact`(`name`, `email`, `message`) VALUES (:a,:b,:c)";
        $stmt = $this->con->prepare($query);
        $stmt->bindParam(":a",$name);
        $stmt->bindParam(":b",$email);
        $stmt->bindParam(":c",$msg);
        try
        {
            $r = $stmt->execute();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return $r;
    }

    //Admin side allow insert bird information in database
    function BirdInfo($name,$habitat,$sname,$grange,$img,$cstatus,$msg)
    {
        $query = "INSERT INTO `bird_master`(`bird_name`, `habitat`, `scientific_name`, `geographical_name`, `image`, `c_status`, `about_info`) VALUES (:a,:b,:c,:d,:e,:f,:g)";
        $stmt = $this->con->prepare($query);
        $stmt->bindParam(":a",$name);
        $stmt->bindParam(":b",$habitat);
        $stmt->bindParam(":c",$sname);
        $stmt->bindParam(":d",$grange);
        $stmt->bindParam(":e",$img);
        $stmt->bindParam(":f",$cstatus);
        $stmt->bindParam(":g",$msg);
        try
        {
            $r = $stmt->execute();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return $r;
    }

    //Admin side display user information
    function DisplayUser()
    {
        $query = "select * from user_master";
        $stmt = $this->con->prepare($query);
        try
        {
            $stmt->execute();
            $r = $stmt->fetchAll();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return $r;
    }

    //Admin side or client side both display bird information
    function DisplayBirdInfo()
    {
        $query = "select * from bird_master";
        $stmt = $this->con->prepare($query);
        try
        {
            $stmt->execute();
            $r = $stmt->fetchAll();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return $r;
    }

    //Admin or client side both show at a time only one bird information(useing query string)
    function ShowBirdInfo($sno)
    {
        $query = "select * from bird_master where sno = :a";
        $stmt = $this->con->prepare($query);
        $stmt->bindParam(":a",$sno);
        try
        {
            $stmt->execute();
            $r = $stmt->fetchAll();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return $r;
    }

    //Admin side allow to update bird information
    function BirdUpdate($sno,$name,$habitat,$sname,$grange,$img,$cstatus,$msg)
    {
        $query = "UPDATE `bird_master` SET `bird_name`=:a,`habitat`=:b,`scientific_name`=:c,`geographical_name`=:d,`image`=:e,`c_status`=:f,`about_info`=:g WHERE sno = :h";
        $stmt = $this->con->prepare($query);
        $stmt->bindParam(":a",$name);
        $stmt->bindParam(":b",$habitat);
        $stmt->bindParam(":c",$sname);
        $stmt->bindParam(":d",$grange);
        $stmt->bindParam(":e",$img);
        $stmt->bindParam(":f",$cstatus);
        $stmt->bindParam(":g",$msg);
        $stmt->bindParam(":h",$sno);
        try
        {
            $r = $stmt->execute();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return $r;
    }

    //Admin side allow to delete bird information
    function BirdDelete($e)
    {
        $query = "delete from bird_master where sno = :a";
        $stmt = $this->con->prepare($query);
        $stmt->bindParam(":a",$e);
        try
        {
            $r=$stmt->execute();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return $r;
    }

}

?>