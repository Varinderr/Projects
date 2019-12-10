<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>registed users</title>
</head>

<body>
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
            $con=  mysqli_query($con, "select * from sinup");

       ?>
        <div>
            
            <br><br>
         <table border="1" align="center">
         <tr>
            <th> user name</th>
                    <th>email</th>
                    <th>password</th>
                     <th>reentered password</th>
                    <th>full name</th>

            </tr>

        <?php

             while($row=  mysqli_fetch_array($con))

             {
                 ?>
            <tr>
                <td><?php echo $row['full_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['reenter'] ;?></td>
                <td><?php echo $row['username'] ;?></td>
            </tr>
        <?php
             }
             ?>
             </table>
             
             <table align="center">
             <td>registered users</td>
              </table>
            </div>
</body>
</html>