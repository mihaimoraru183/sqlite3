<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>



<div class="container"> <!-- Add background -->

<?php

    include('conndb.php');

    $query = "SELECT * FROM user_table";
    $result = $db->query($query);
?>

<div class="row"  style="margin-top:10px; margin-bottom:10px;">

<div class="col-sm-4">
<h4> Insert New User</h4>
    <form action="insert.php" method="post">
        <div class="form-group">
            <label for="uname">User name</label>
            <input type="text" class="form-control" name="uname">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="uemail">
        </div>
        <div align="center">
            <button type="submit" class="btn btn-primary">Insert</button>
        </div>
    </form> 
</div>

<div class="col-sm-8">
<h4> All Users Display in Tabel</h4>
<table class="table table-striped">
    <thead>
      <tr>
        <th>User ID</th>
        <th>User name</th>
        <th>User Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

    <?php
    
    while($row = $result->fetchArray()){
        
    ?>
      <tr>
        <td><?php echo $row['user_id']; ?></td>
        <td><?php echo $row['user_name']; ?></td>
        <td><?php echo $row['user_mail']; ?></td>
        <td>
        <a href="update.php?u_id=<?php echo $row['user_id']; ?>" class="btn btn-info" role="button">Update</a>
        <a href="delete.php?u_id=<?php echo $row['user_id']; ?>" class="btn btn-danger" role="button">Delete</a>
        
        </td>
      </tr>

      <?php
        }

    ?>



    </tbody>
  </table>

        
        
</div>

</div>


</div>

<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html> 