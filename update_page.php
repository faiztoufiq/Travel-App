<?php
    session_start();
    $User_id = $_GET["id"];
    include("connection.php");

    $qry = "SELECT * FROM book_form WHERE  id = '$User_id'";

    $res = mysqli_query($connection, $qry);
    if(mysqli_num_rows($res) == 1)
    {
        $arr = mysqli_fetch_array($res);
    
?>

        <center>
            <h2>Update Record</h2>
            <form action="update_process.php" method="post">
            <table>
            <tr>
                    <td>Id</td>
                    <td><input type="number" name="id" value="<?php echo $arr['id'];?>"></td>
                </tr>
                    
            <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $arr['name'];?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="<?php echo $arr['email'];?>"></td>

                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="number" name="phone" value="<?php echo $arr['phone'];?>"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address" value="<?php echo $arr['address'];?>"></td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td><input type="text" name="location" value="<?php echo $arr['location'];?>"></td>
                </tr>
                <tr>
                    <td>Guests</td>
                    <td><input type="number" name="guests" value="<?php echo $arr['guests'];?>"></td>
                </tr>
                <tr>
                    <td>Arrivals</td>
                    <td><input type="date" name="arrivals" value="<?php echo $arr['arrivals'];?>"></td>
                </tr>
                <tr>
                    <td>Leaving</td>
                    <td><input type="date" name="leaving" value="<?php echo $arr['leaving'];?>"></td>
                </tr>
                
                <tr>
                    <td colspan="2" style="text-align:center; background-color: lightblue;">

                    <input type="hidden" name="user_id" value="<?php echo $User_id; ?>">
                        <input name="button_signup" type="submit" value="Update ">
                    </td>
                </tr>
            </table>
        </form>
        </center>

<?php
    }
?>