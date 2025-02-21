<?php session_start(); ?>
<!-- Footer -->
<?php include "../header.php"; ?>

<?php
   if(isset($_GET['user_id'])) {
      $userid = $_GET['user_id']; 
   }
   
   // SQL query to select all the data from the table where id = $userid
   $query = "SELECT * FROM login WHERE id = $userid";
   $view_users = mysqli_query($conn, $query);
   $row = mysqli_fetch_assoc($view_users);

   if ($row) {
       $id = $row['id'];                
       $name = $row['name'];        
       $username = $row['username'];         
       $role = $row['role'];
   }
   
   //Processing form data when form is submitted
   if(isset($_POST['update'])) {
      if ($_SESSION['role'] == 'admin' && $role == 'super_admin') {
          echo "<script type='text/javascript'>alert('You have no access to edit super_admin details');</script>";
      } else {
          $id = $_POST['id'];
          $name = $_POST['name'];
          $username = $_POST['username'];
          $new_role = $_POST['role'];
          
          // SQL query to update the data in user table where the id = $userid 
          $query = "UPDATE login SET id = '{$id}' , name = '{$name}' , username = '{$username}' , role = '{$new_role}' WHERE id = $userid";
          $update_user = mysqli_query($conn, $query);
          
          if ($update_user) {
              echo "<script type='text/javascript'>alert('User data updated successfully!');</script>";
          } else {
              echo "<script type='text/javascript'>alert('Error updating user: " . mysqli_error($conn) . "');</script>";
          }
      }
   }             
?>

<?php
  if ($_SESSION['role'] == 'super_admin' || ($_SESSION['role'] == 'admin' && $role != 'super_admin')) {
?>

<h1 class="text-center">Update User Details</h1>
<div class="container ">
    <form action="" method="post">
        <div class="form-group">
            <label for="user">ID</label>
            <input type="number" name="id" class="form-control" value="<?php echo $id ?>">
        </div>

        <div class="form-group">
            <label for="user">Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $name ?>">
        </div>

        <div class="form-group">
            <label for="email">Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $username ?>">
        </div>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

        <div class="form-group">
            <label for="pass">Role</label>
            <input type="text" name="role" class="form-control" value="<?php echo $role ?>">
        </div>
        
        <div class="form-group">
            <input type="submit" name="update" class="btn btn-primary mt-2" value="update">
        </div>
    </form>
</div>

<!-- a BACK button to go to the home page -->
<div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
</div>

<?php 
    } else {
      header('Location: ../../view.php');
      exit();
    }
?>

<!-- Footer -->
<?php include "../footer.php"; ?>
