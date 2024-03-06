<?php
      $q="SELECT * FROM user";

      $conn=mysqli_connect('localhost','root','','hasnain_db');

      $res=mysqli_query($conn,$q);

?>



<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Action</th>
  </tr>
  <?php

      while ($row=mysqli_fetch_array($res)) { ?>
       
        <tr>
          <td><?php echo $row['id'];?></td>
          <td><?php echo $row['name'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['password'];?></td>
          <td>
            <a href="deluser.php?id=<?php echo $row['id'];?>">Delete</a>
            <a href="edituser.php?id=<?php echo $row['id'];?>">Edit</a>
            </td>
        </tr>
    <?php  } ?>
   
  
</table>