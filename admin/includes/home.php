<?php session_start(); ?>
<!-- Header -->
<?php include "../header.php"?>

<body class="main-container">


    <?php
  if ($_SESSION['role'] == 'super_admin' || $_SESSION['role'] == 'admin'){
?>

    <!-- navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navc">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="../../view.php">
                <img src="../../img/logo.png" alt="Logo" width="40" class="d-inline-block align-text-top">
                Sith Niwasa Construction
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText1"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa-solid fa-bars" style="color:#fff; font-size:28px;"></i>
                    <!-- <i class="bi bi-list" style="color:#fff; font-size:28px;"></i> -->
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText1">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                    <li class="nav-item">
                        <a class="nav-link text-light" href="../../register.php">Register a user</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <button class="btn btnprofile dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome <?php echo $_SESSION['name'] ?>
                    </button>
                    <ul class="btnprofiledropdown dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#profile" href="#">Profile
                                <i class="fa-solid fa-user"></i></a></li>
                        <li><a class="dropdown-item" href="../../logout.php"><span
                                    class="btnprofiledropdownlogout">Logout <i
                                        class="fa-solid fa-arrow-right-from-bracket"></i></span> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-2 modi">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $_SESSION['name'] ?>'s Profile <i
                            class="fa-solid fa-user"></i></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../../img/logo.png" class="img-thumbnail float-end" width="80" alt="...">
                    Full Name : <?php echo $_SESSION['name'] ?><br>
                    User Name : <?php echo $_SESSION['valid'] ?><br>
                    E-Mail : <?php echo $_SESSION['email'] ?><br><br>
                    <div class="text-light rounded-1 modalcost" id="sqftmodal"></div>
                    <div class="text-light rounded-1 modalcost" id="modalcost"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btnclose" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table rounded-4 mt-5 table-hover tablerole">
            <thead>
                <tr class="tablebg1">
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Role</th>
                    <th scope="col" colspan="3" class="text-center">Operations</th>
                </tr>
            </thead>
            <tbody>
                <tr styl>

                    <?php
            $query="SELECT * FROM login";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $name = $row['name'];        
              $username = $row['username'];         
              $role = $row['role'];        

              echo "<tr class='tablebg2'>";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$name}</td>";
              echo " <td > {$username}</td>";
              echo " <td >{$role} </td>";

              echo " <td class=''> <a href='view.php?user_id={$id}' class='btn btn-sm btn-outline-secondary'> <i class='bi bi-eye'></i> </a> </td>";

              echo " <td class='' > <a href='update.php?edit&user_id={$id}' class='btn btn-sm btn-outline-warning'><i class='bi bi-pencil'></i> </a> </td>";

              echo " <td  class=''>  <a href='delete.php?delete={$id}'\" onClick=\"return confirm('Are you sure you want to delete?')\" class='btn btn-sm btn-outline-danger'> <i class='bi bi-trash'></i> </a> </td>";
              echo " </tr> ";
                  }  
                ?>
                </tr>
            </tbody>
        </table>

        <table class="table rounded-4 mt-5 table-hover tabledata">
            <thead>
                <tr class="tablebg1">
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Living Room</th>
                    <th scope="col">SqFt</th>
                    <!-- <th scope="col">Width1</th> -->
                    <th scope="col" class="text-center">Operations</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <?php
            $query="SELECT * FROM details";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $name = $row['Name'];        
              $email = $row['email'];         
              $i1 = $row['LivingRooms'];        
              $lw1 = $row['LivingRoomSqFt'];        
            //   $Width1 = $row['Width1'];        

              echo "<tr class='tablebg2'>";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$name}</td>";
              echo " <td > <a href = 'mailto:{$email}'>{$email}</a></td>";
              echo " <td >{$i1} </td>";
              echo " <td >{$lw1} </td>";
            //   echo " <td >{$Width1} </td>";
              echo " <td  class=''>  <a href='delete2.php?delete={$id}'\" onClick=\"return confirm('Are you sure you want to delete?')\" class='btn btn-sm btn-outline-danger text-center'> <i class='bi bi-trash'></i> </a> </td>";


              // echo " <td class=''> <a href='view.php?user_id={$id}' class='btn btn-sm btn-outline-success'> <i class='bi bi-eye'></i> </a> </td>";

              // echo " <td class='' > <a href='update.php?edit&user_id={$id}' class='btn btn-sm btn-outline-secondary'><i class='bi bi-pencil'></i> </a> </td>";

              // echo " <td  class=''>  <a href='delete.php?delete={$id}'\" onClick=\"return confirm('Are you sure you want to delete?')\" class='btn btn-sm btn-outline-danger'> <i class='bi bi-trash'></i> </a> </td>";
              // echo " </tr> ";
                  }  
                ?>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
    <!-- a BACK button to go to the index page -->

    <?php 
    }else {
      header('Location: ../../view.php');
    }
  ?>

    <!-- Footer -->
    <?php include "../footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>