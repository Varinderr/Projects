<html>
    <head>
        <meta charset="UTF-8">
        <title>LoginDB</title>
    </head><br>
<style>
.table th 
{
    text-align: center;
}
.table {
    border-radius: 5px;
    width: 50%;
    margin: 0 auto;
    float: none;
}
</style>

    <body>

        <?php
        $con=  mysqli_connect("localhost", "root", "", "boom");

        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select * from contactus");

       ?>
        <div>
            
            <br><br>
         <table border="1" align="center">
         
            <th> First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                     <th>Phone No.</th>
                    <th>Message</th>

            </tr>

        <?php

             while($row=  mysqli_fetch_array($con))

             {
                 ?>
            <tr>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone'] ;?></td>
                <td><?php echo $row['message'] ;?></td>
            </tr>
        <?php
             }
             ?>
             </table>
             <td>people trying to contact us</td>
             <table align="right">
              </table>
            </div>
    </body>
</html>