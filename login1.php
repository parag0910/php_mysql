<?php
/*ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);*/
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>

    <style>
        table{
            border=solid;
        }
        .to{
            margin-top: 20%;
            margin-right:30%;
            margin-left:10%;
        }
        .is{
            margin-bottom:5%;
        }
        .are{
            margin-bottom: 5%;
            margin-top: -97px;
        }
        .am{
            border: 2px solid crimson;
            /*margin-top:5%;*/
            /*margin-right:20%;*/
            /*margin-bottom:5%;*/
            /*margin-left:20%;*/

                    }
        .hf {
            margin-left: 5em;
            margin-bottom: 25em;
            font-size: 150%;
        }
        div
        {
        margin-left:5em;

        }
    </style>

</head>
<body class="am">
<?php
require('connect.php');
session_start();

if(isset($_POST['submit'])) {

    $userid = $_POST['userid'];
    $password = $_POST['password'];

    $query = "SELECT * FROM register WHERE userid='$userid' && password='$password'";
    $result = mysql_query($query);
    $rows = mysql_fetch_row($result);
    if ($rows != NULL) {
           $_SESSION['userid'] = $userid;
    //echo"you are entered successfully";
    //
        echo"<h1>hello you are logged in successfully</h1>"; // Redirect user to index.php
        echo" <a href=start.php>Back_To_Home</a>";
    } else {
        echo "<h1>Userid/password is incorrect.</h1><br/>Click here to <a href='login1.php'><h2>Login</h2></a>";
          //header("Location: login1.php");
    }
}
else{

?>

<div >
<h1 align="center" style="mso-foreground: blue" class="to">Log_In</h1>
<form name="login" method="post" action="" >
  <div> <table align="center" class="are">
    <tr><td><input type="number" placeholder="UserID" class ="is" style="background-color: bisque" size="20" name="userid" required> </td></tr><br><br>
    <tr><td><input type="password" placeholder="Password" class="is" style="background-color: bisque" size="20" name="password"  required></td></tr> <br><br>
    <tr><td><input type="submit" value="Submit" name="submit"/> </td></tr><br>
        <td>Not Registered?<a href="register.php">Register yourself</a></td><br><br></div>
        <td><a href="start.php" class="hf">Back_to_Home</a></td></tr>
</table>

    </form>
    </div>
<?php } ?>
</body>
</html>

