<?php
    session_start();
    $id = $_GET["id"];
    include("connection.php");

    $qry = "DELETE FROM book_form WHERE id = '$id'";
    $res = mysqli_query($connection, $qry);

     if(isset($res) && $res != ""){
         $_SESSION["msg"] = "Record deleted";
         header("location: Show_data.php");
     }
     else{
         $_SESSION['msg'] = "Sorry, Some error in deletion";
         header("location: Show_data.php");
     }
?>