<?php
$connection=mysqli_connect('localhost','root','','user');
if($connection==false)
{
    echo "connection error";
}if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * from login Where username='".$username."' AND password='".$password."' ";
    $result=mysqli_query($connection,$sql);
    $row=mysqli_fetch_array($result);
    if($row["usertype"]=="user")
    {
        header("location:home.php");
    }
    elseif($row["usertype"]=="admin")
    {
        header("location:Show_data.php");
    }
    else  
    {
        echo "User Name and Password Incorrect";
    }
    

}
?>


<!doctype html>
<html >
<head>
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <br><br><br>
        <h1>Log in Form</h1>
        <br><br><br>
        <form action="#" method="POST">
    <div style="background-color:grey;width: 500px;">    
    <br><br>
    <div>
        <label>username</label>
        <input type="text" name="username"  required>
    </div>
    <br><br>
    <div>
        <label >password</label>
        <input type="password" name="password"  required>
    </div>
    <br><br>
    <div>
        
        <input type="submit" value="Login" class="btn"required>
    </div>
    </form> 
    <br><br>   
</div>
    </center>
</body>
</html>