<?php session_start(); ?>
<!-- Footer -->
<?php include "../header.php"; ?>

<?php
  if (isset($_SESSION['role']) && isset($_GET['delete'])) {
      $userid = $_GET['delete'];
      
      // Fetch the role of the user to be deleted
      $query = "SELECT role FROM login WHERE id = {$userid}";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_assoc($result);
      $userRoleToDelete = $row['role'];
      
      if ($_SESSION['role'] == 'super_admin' && ($userRoleToDelete == 'admin' || $userRoleToDelete == 'user')) {
          // Super Admin can delete Admins and Users
          $deleteQuery = "DELETE FROM login WHERE id = {$userid}";
          $delete_result = mysqli_query($conn, $deleteQuery);
      } elseif ($_SESSION['role'] == 'admin' && $userRoleToDelete == 'user') {
          // Admin can only delete Users
          $deleteQuery = "DELETE FROM login WHERE id = {$userid}";
          $delete_result = mysqli_query($conn, $deleteQuery);
      } else {
          header("Location: home.php");
          exit();
      }

      if ($delete_result) {
          header("Location: home.php");
          exit();
      } else {
          echo "Error deleting user: " . mysqli_error($conn);
      }
  } else {
      header('Location: ../../view.php');
      exit();
  }
?>

<!-- Footer -->
<?php include "footer.php"; ?>
