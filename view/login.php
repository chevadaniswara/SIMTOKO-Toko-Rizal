<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- <link rel="stylesheet" href="reg_style.css"> -->
    <div class="header" id="myHeader">
      <h2><center>SIMTOKO</center></h2>
    </div>
    <style>
        @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
        body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background-color: rgb(255, 255, 255);
        background-size: cover;
        }
        .login-box{
        width: 280px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        color:slategray;
        }
        .login-box h1{
        float: left;
        font-size: 40px;
        border-bottom: 6px solid #49c;
        margin-bottom: 50px;
        padding: 13px 0;
        }
        .textbox{
        width: 100%;
        overflow: hidden;
        font-size: 20px;
        padding: 8px 0;
        margin: 8px 0;
        border-bottom: 1px solid #49c;
        }
        .textbox i{
        width: 26px;
        float: left;
        text-align: center;
        }
        .textbox input{
        border: none;
        outline: none;
        background: none;
        color: rgb(36, 36, 36);
        font-size: 18px;
        width: 80%;
        float: left;
        margin: 0 10px;
        }
        .btn{
        width: 100%;
        background: none;
        border: 2px solid #49c;
        color: black;
        padding: 5px;
        font-size: 18px;
        cursor: pointer;
        margin: 12px 0;
        }

        .header {
        padding: 10px 16px;
        background: #555;
        color: #f1f1f1;
        }
    </style>
  </head>
  <body>
      <form action="" method="POST">
            <!-- texbox login -->
        <div class="login-box">
            <h1>Login</h1>
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" name="tb_username" placeholder="Username">
            </div>
            <!-- textbox password -->
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" name="tb_password" placeholder="Password">
            </div>
            <input type="submit" class="btn" name="btn_login" value="Login">
            <!-- <input type="button" class="btn" name="btn_register" value="Submit"> -->
        </div>
      </form>
  </body>
</html>
<?php
	if(isset($_POST["btn_login"])){ 
		$cl2 = new login_controller();
		$cl2->member_login();
	}
?>