<?php session_start() ?>
<?php
if(isset($_REQUEST['login']))
{
    if($_REQUEST['uname']=='Admin123' || $_REQUEST['pass']=='admin@123')
    {
        $_SESSION['admin'] = $_REQUEST['uname'];
        header("location:dashboard.php");
    }
    else
    {
        $_SESSION['msg'] = "Invalid username and password! try again";
    }
}
?>
<html>
<head>
    <title>Admin Login</title>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <form action="#" method="POST">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">   
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>
                <?php
                    if(isset($_SESSION['msg']))
                    {
                    echo "<center><p style='color:red;'>".$_SESSION['msg']."</p></center>";
                    }
                    else
                    {
                    echo "<center><p style='color:red;'>Welcome to Birds Information</p></center>";
                    }
                ?>
                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form>
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" name="uname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="pass" class="form-control" i>
                            </div>
 
                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary" name="login">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
    </form>
</div>
</body>
</html>