<?php session_start(); ?>
<!-- Header -->
<?php  include '../header.php'?>
<head>
	<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
</head>

<?php
  if ($_SESSION['role'] == 'super_admin' || $_SESSION['role'] == 'admin'){
?>

<h1 class="text-center">User Details</h1>
  <div class="container">
    <table class="table table-primary rounded-4 mt-5 table-hover tablebg">
      <thead class="table-dark">
        <tr>
          <th  scope="col" >ID</th>
          <th  scope="col">Name</th>
          <th  scope="col">Username</th>
          <th  scope="col"> Role</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              if (isset($_GET['user_id'])) {
                  $userid = $_GET['user_id']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM login WHERE id = {$userid} ";  
                  $view_users= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_users))
                  {
                    $id = $row['id'];                
                    $name = $row['name'];        
                    $username = $row['username'];         
                    $role = $row['role'];

                        echo "<tr >";
                        echo " <td >{$id}</td>";
                        echo " <td > {$name}</td>";
                        echo " <td > {$username}</td>";
                        echo " <td >{$role} </td>"; 
                        echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>

   <!-- a BACK Button to go to pervious page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>

  <?php 
    }else {
      header('Location: ../../view.php');
    }
  ?>

<!-- Footer -->
<?php include "../footer.php" ?>