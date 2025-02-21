<?php session_start(); ?>
<!-- Footer -->
<?php include "../header.php"; ?>

<?php
  if ($_SESSION['role'] == 'super_admin' || $_SESSION['role'] == 'admin') {

      if (isset($_GET['delete'])) {
          $userid = $_GET['delete'];

          // SQL query to delete data from details table where id = $userid
          $query = "DELETE FROM details WHERE id = {$userid}";
          $delete_query = mysqli_query($conn, $query);

          if ($delete_query) {
              header("Location: home.php");
              exit();
          } else {
              echo "Error deleting user: " . mysqli_error($conn);
          }
      }
  } else {
      header('Location: ../../view.php');
      exit();
  }
?>

<!-- Footer -->
<?php include "footer.php"; ?>
