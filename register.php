<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
?>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Details</title>
</head>
<style>
    div{
        margin-top: 0px;

    }
    table tr td{
        font-family: Franklin  ;
        font-style: oblique;
        font-size:200%
        

    }
    input{
        display: block;
    }

    /*a{*/
        /*border: solid;*/
        /*border-color: blueviolet;*/
        /*align-content: center;*/
    /*}*/
    .cen{
        align-items: center;
    }
    input{
        box-sizing: content-box;
        background-size:150%;
        font-family: verdana;
        font-size:100%;
    }
    
    a:hover{
        color: darkred;
        margin-right:150%;
    }
    #sub{
        margin-left: 800px;
        height:5%;
        width:5%
    }
</style>


<body bgcolor="#f0f8ff" style="border: 2px solid palevioletred ">
<h1 align="center" style="background-color: hotpink">Registration</h1>
<?php
require('connect.php');
session_start();
if(isset($_POST['submit'])) {

    $userid = $_POST['userid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "INSERT into register(userid,email,name,password) VALUES('$userid','$email','$name','$password')";
    $result = mysql_query($query);
    //$rows = mysql_fetch_row($result);
    if ($result) {
        echo "you are registered successfully";
        echo" <a href=start.php>Back_To_Home</a>";

    }

}else{
    ?>

<form name="register" action=""  method="post">
    <div>
    <table align="center">
        <tr><td>Userid</td>
            <td><input type="number" name="userid"  placeholder="userid" required/></td></tr><br><br><br>
        <tr><td>Name:</td>
            <td><input type="text" name="name" size="20" placeholder="name" required/></td></tr><br><br><br>
        <tr><td>Email_Id</td>
            <td><input type="email" name="email" size="20" placeholder="ram@example.com" required/></td></tr><br><br><br>
        <tr><td>Password:</td>
            <td><input type="password" name="password" size="20" placeholder="password" required/></td></tr><br><br><br>
<!--        <tr><td></td></tr>-->
        </table>
        <tr><td><a href="start.php" style="margin-right: 2em; float: right" >Back_to_Home</a></td></tr>
        </div>
    <input type="submit" name="submit" value="submit" id="sub"/>

</form>
<?php } ?>
</body>
</html>