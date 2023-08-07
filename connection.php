<?php
$connection=mysqli_connect('localhost','root','','book_db');
if($connection)
{
    echo "connection done";
}else{
    echo "connection failed";
}
?>