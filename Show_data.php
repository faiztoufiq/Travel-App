<?php
    session_start();
?>
<html>
    <head>
        <title>Display Records</title>
    
    </head>

    
    <bodY>
    <center>
   

</style>

    <h1> Custommer Records </h1>

            <?php
            include("connection.php");
            $qry = "SELECT * FROM book_form";
            $res = mysqli_query($connection, $qry);
            if (isset($res) && $res != "") 
            {
            ?>
            <table border="1">

            <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Location</th>
                    <th>Guests</th>
                    <th>Arrivals</th>
                    <th>Leaving</th>
                    <th>Delete Operations </th>
                    <th>Update Operations </th>
                    <th>Log Out</th>
                                   </tr>
                <?php
                while ($arr = mysqli_fetch_array($res)) {
                    ?>
                <tr>
                    <td><?php echo $arr['name']; ?></td>
                    <td><?php echo $arr['email']; ?></td>
                    <td><?php echo $arr['phone']; ?></td>
                    <td><?php echo $arr['address']; ?></td>
                    <td><?php echo $arr['location']; ?></td>
                    <td><?php echo $arr['guests']; ?></td>
                    <td><?php echo $arr['arrivals']; ?></td>
                    <td><?php echo $arr['leaving']; ?></td>
<td>
    <a href='delete.php?id=<?php echo $arr['id']; ?>'>Delete</a>
</td>
<td>
    <a href='update_page.php?id=<?php echo $arr['id']; ?>' >Update</a>
</td>
<td>
    <a href='login_form.php?id=<?php echo $arr['id']; ?>'>Log Out</a>
</td>

                </tr>
                <?php
                }
                ?>
            </table>
            <?php
            }
            else{
                echo "Some error";
            }
            ?>

</center>
    </bodY>
</html>
