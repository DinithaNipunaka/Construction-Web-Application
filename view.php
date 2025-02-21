<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
// $result = mysqli_query($mysqli, "SELECT * FROM products ORDER BY id ASC");


// $query1 = "SELECT * FROM login WHERE id=".$_SESSION['id'];
// $result2 = $mysqli->query($query1);

// // Fetch data and assign to a PHP variable
// $data1 = $result2->fetch_assoc();
// $role = $data1['role'];
// echo $role;

// Close the connection
// $mysqli->close();
?>

<html>

<head>
    <title>WEB Application for Sith Niwasa Construction</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="css/view.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <?php
	include("header.php");
?>
</head>

<body class="main-container">


    <!-- navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navc">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="view.php">
                <img src="img/logo.png" alt="Logo" width="40" class="d-inline-block align-text-top">
                Sith Niwasa Construction
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa-solid fa-bars" style="color:#fff; font-size:28px;"></i>
                    <!-- <i class="bi bi-list" style="color:#fff; font-size:28px;"></i> -->
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <?php if ($_SESSION['role'] == 'super_admin' || $_SESSION['role'] == 'admin') {
                        echo"<li class='nav-item'>
                        <a class='nav-link text-light' href='admin/includes/home.php'>Admin Dashboard</a>
                    </li>";
                    }?>
                </ul>
                <div class="dropdown">
                    <button class="btn btnprofile dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome <?php echo $_SESSION['name'] ?>
                    </button>
                    <ul class="btnprofiledropdown dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#profile" href="#">Profile
                                <i class="fa-solid fa-user"></i></a></li>
                        <li><a class="dropdown-item" href="logout.php"><span class="btnprofiledropdownlogout">Logout <i
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
                    <img src="img/logo.png" class="img-thumbnail float-end" width="80" alt="...">
                    Full Name : <?php echo $_SESSION['name'] ?><br>
                    User Name : <?php echo $_SESSION['valid'] ?><br>
                    E-Mail : <?php echo $_SESSION['email'] ?><br><br>
                    <div class="text-light rounded-1 modalcost" id="sqftmodal"></div>
                    <div class="text-light rounded-1 modalcost" id="modalcost"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>





    <!-- phase 1 -->
    <div class="container main-container">

        <div class="card mt-5 p1css cardc">
            <div class="card-header">
                <h4 class="text-center">Web Application For NIWAHANA</h4>
            </div>
            <div class="card-body">



                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="btn btnpill active me-2" id="pills-1-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                            aria-selected="true">Main Measures</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class=" btn btnpill me-2" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2"
                            type="button" role="tab" aria-controls="pills-2" aria-selected="false">Secondary
                            Measures</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btnpill me-2" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3"
                            type="button" role="tab" aria-controls="pills-3" aria-selected="false">Architecture
                            Theme</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btnpill me-2" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4"
                            type="button" role="tab" aria-controls="pills-4" aria-selected="false">Design
                            Concepts</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btnpill me-2" id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5"
                            type="button" role="tab" aria-controls="pills-5" aria-selected="false">Type of
                            Lands</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btnpill me-2" id="pills-6-tab" data-bs-toggle="pill" data-bs-target="#pills-6"
                            type="button" role="tab" aria-controls="pills-6" aria-selected="false">Construct
                            Type</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">

                        <section class="sec1 input-group">
                            <div class="input-group-text">Living Room&nbsp;</div>
                            <input type="number" class="form-control" id="i1" placeholder="Quantity">
                            <label for="l1"></label>
                            <input type="number" class="form-control" id="l1" placeholder="Length">
                            <label for="w1"></label>
                            <input type="number" class="form-control" id="w1" placeholder="Width">
                            <p class="ilw1 po" id="ilw1"></p>
                        </section>

                        <section class="sec3 input-group mt-2">
                            <div class="input-group-text">Dining Room</div>
                            <input type="number" class="form-control" id="i2" placeholder="Quantity">
                            <label for="l2"></label>
                            <input type="number" class="form-control" id="l2" placeholder="Length">
                            <label for="w2"></label>
                            <input type="number" class="form-control" id="w2" placeholder="Width">
                            <p class="ilw2 po" id="ilw2"></p>
                        </section>

                        <section class="sec3 input-group mt-2">
                            <div class="input-group-text">Open Pantry&nbsp;</div>
                            <input type="number" class="form-control" id="i3" placeholder="Quantity">
                            <label for="l3"></label>
                            <input type="number" class="form-control" id="l3" placeholder="Length">
                            <label for="w3"></label>
                            <input type="number" class="form-control" id="w3" placeholder="Width">
                            <p class="ilw3 po" id="ilw3"></p>
                        </section>

                        <section class="sec3 input-group mt-2">
                            <div class="input-group-text">
                                Kitchen&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                            <input type="number" class="form-control" id="i4" placeholder="Quantity">
                            <label for="l4"></label>
                            <input type="number" class="form-control" id="l4" placeholder="Length">
                            <label for="w4"></label>
                            <input type="number" class="form-control" id="w4" placeholder="Width">
                            <p class="ilw4 po" id="ilw4"></p>
                        </section>

                        <section class="sec2 input-group mt-2">
                            <div class="input-group-text">Bedroom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                            <input type="number" class="form-control" id="i5" placeholder="Quantity">
                            <label for="l5"></label>
                            <input type="number" class="form-control" id="l5" placeholder="Length">
                            <label for="w5"></label>
                            <input type="number" class="form-control" id="w5" placeholder="Width">
                            <p class="ilw5 po" id="ilw5"></p>
                        </section>



                        <section class="sec4 input-group mt-2">
                            <div class="input-group-text">Bath Room &nbsp;&nbsp;</div>
                            <input type="number" class="form-control" id="i6" placeholder="Quantity">
                            <label for="l6"></label>
                            <input type="number" class="form-control" id="l6" placeholder="Length">
                            <label for="w6"></label>
                            <input type="number" class="form-control" id="w6" placeholder="Width">
                            <p class="ilw6 po" id="ilw6"></p>
                        </section>
                        <!-- <div class="mx-auto p-4 mt-3 me-3 float-end">
                                <input class="btn btnprofile" type="submit" name="submit" value="Enter" />
                            </div> -->
                        <div class="mx-auto p-4 mt-3 me-3 float-end">


                        </div>
                        <div class="text-bg-secondary mt-4 rounded-2">
                            <div class="ms-2" id="sqftgg"></div>
                            <div class="ms-2" id="sqft1gg"></div>
                            <div class="ms-2" id="costgg"></div>
                        </div>
                        <!-- <div class="text-bg-secondary mt-4 rounded-2">
                            <div class="ms-2" >Don't insert empty values.</div>
                            <div class="ms-2" >If you dont have any values</div>
                            <div class="ms-2" >Insert 0</div>
                        </div> -->

                    </div>
                    <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">

                        <section class="sec3 input-group mt-2">
                            <div class="input-group-text">Study Lobby&nbsp;</div>
                            <input type="number" class="form-control" id="i7" placeholder="Quantity">
                            <label for="l7"></label>
                            <input type="number" class="form-control" id="l7" placeholder="Length">
                            <label for="w7"></label>
                            <input type="number" class="form-control" id="w7" placeholder="Width">
                            <p class="ilw7 po" id="ilw7"></p>
                        </section>

                        <section class="sec3 input-group mt-2">
                            <div class="input-group-text">TV Room&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                            <input type="number" class="form-control" id="i8" placeholder="Quantity">
                            <label for="l8"></label>
                            <input type="number" class="form-control" id="l8" placeholder="Length">
                            <label for="w8"></label>
                            <input type="number" class="form-control" id="w8" placeholder="Width">
                            <p class="ilw8 po" id="ilw8"></p>
                        </section>

                        <section class="sec3 input-group mt-2">
                            <div class="input-group-text">Closet Room</div>
                            <input type="number" class="form-control" id="i9" placeholder="Quantity">
                            <label for="l9"></label>
                            <input type="number" class="form-control" id="l9" placeholder="Length">
                            <label for="w9"></label>
                            <input type="number" class="form-control" id="w9" placeholder="Width">
                            <p class="ilw9 po" id="ilw9"></p>
                        </section>

                        <section class="sec3 input-group mt-2">
                            <div class="input-group-text">
                                Garage&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <input type="number" class="form-control" id="i10" placeholder="Quantity">
                            <label for="l10"></label>
                            <input type="number" class="form-control" id="l10" placeholder="Length">
                            <label for="w10"></label>
                            <input type="number" class="form-control" id="w10" placeholder="Width">
                            <p class="ilw10 po" id="ilw10"></p>
                        </section>

                        <section class="sec3 input-group mt-2">
                            <div class="input-group-text">Home Gym&nbsp;&nbsp;</div>
                            <input type="number" class="form-control" id="i11" placeholder="Quantity">
                            <label for="l11"></label>
                            <input type="number" class="form-control" id="l11" placeholder="Length">
                            <label for="w11"></label>
                            <input type="number" class="form-control" id="w11" placeholder="Width">
                            <p class="ilw11 po" id="ilw11"></p>
                        </section>

                        <section class="sec3 input-group mt-2">
                            <div class="input-group-text">
                                Other&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                            <input type="number" class="form-control" id="i12" placeholder="Quantity">
                            <label for="l12"></label>
                            <input type="number" class="form-control" id="l12" placeholder="Length">
                            <label for="w12"></label>
                            <input type="number" class="form-control" id="w12" placeholder="Width">
                            <p class="ilw12 po" id="ilw12"></p>
                        </section>
                        <div class="mx-auto p-4 mt-3 me-3 float-end">
                            <button class="btn btnprofile" id="btn_enter" name="btn_enter">Enter</button>
                        </div>
                        <div class="text-bg-secondary mt-4 rounded-2">
                            <div class="ms-2" id="sqft"></div>
                            <div class="ms-2" id="sqft1"></div>
                            <div class="ms-2" id="cost"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                        <div class="phase2">
                            <div class="row container-fluid">
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <img src="img/2.1.png" width="250" class="img-fluid image-box rounded-4"
                                            alt="Image 1" onclick="updateTotal(0)">
                                        <h4 class="mt-4">Traditional Theme</h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <img src="img/2.2.png" width="250" class="img-fluid image-box rounded-4"
                                            alt="..." onclick="updateTotal(0.2)">
                                        <h4 class="mt-4">Luxury Theme</h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <img src="img/2.3.png" width="250" class="img-fluid image-box rounded-4"
                                            alt="..." onclick="updateTotal(0.4)">
                                        <h4 class="mt-4">Colonial Theme</h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <img src="img/2.4.png" width="250" class="img-fluid image-box rounded-4"
                                            alt="..." onclick="updateTotal(-0.25)">
                                        <h4 class="mt-4">Echo Theme</h4>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-bg-secondary p-2 mt-4 rounded-2">Theme cost : <span
                                            id="fcost">0.00</span></p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                        <div class="phase3">
                            <div class="row container-fluid">
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img src="img/3.1.png" width="250" class="img-fluid image-box rounded-4" alt=""
                                            onclick="updateTotal2(0.3)">
                                        <h4 class="mt-4">Roof</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img src="img/3.2.png" width="250" class="img-fluid image-box rounded-4"
                                            alt="..." onclick="updateTotal2(0)">
                                        <h4 class="mt-4">Box Type</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img src="img/3.3.png" width="250" class="img-fluid image-box rounded-4"
                                            alt="..." onclick="updateTotal2(0.45)">
                                        <h4 class="mt-4">European</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p class="text-bg-secondary p-2 mt-4 rounded-2">Design cost : <span
                                        id="fcost2">0.00</span></p>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
                        <div class="phase3">
                            <div class="row container-fluid">
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img src="img/4.1.png" width="250" class="img-fluid image-box rounded-4" alt=""
                                            onclick="updateTotal3(0.1)">
                                        <h4 class="mt-4">Flat Land</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img src="img/4.2.png" width="250" class="img-fluid image-box rounded-4"
                                            alt="..." onclick="updateTotal3(0.33)">
                                        <h4 class="mt-4">Upper Slope</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img src="img/4.3.png" width="250" class="img-fluid image-box rounded-4"
                                            alt="..." onclick="updateTotal3(0.38)">
                                        <h4 class="mt-4">Lower Slope</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p class="text-bg-secondary p-2 mt-4 rounded-2">Land cost : <span
                                        id="fcost3">0.00</span></p>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-6" role="tabpanel" aria-labelledby="pills-6-tab">
                        <div class="phase4">
                            <div class="container">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-3 mt-2"><label class="radio-inline">
                                                <input type="radio" name="optradio" checked onclick="updateTotal4(0.3)">
                                                <b>Fully Constructions</b><br>
                                                Labour & material is completely provided by architectural firm.

                                            </label></div>
                                        <div class="col-lg-3 mt-2"><label class="radio-inline">
                                                <input type="radio" name="optradio" onclick="updateTotal4(0)">
                                                <b>Labour Constructions
                                                </b><br>
                                                Customers must provide Materials while firm provide the labour cost
                                                during labour construction.

                                            </label></div>
                                        <div class="col-lg-3 mt-2"><label class="radio-inline">
                                                <input type="radio" name="optradio" onclick="updateTotal4(0.1)">
                                                <b>Labour Constructions With Consultation</b> <br>
                                                LCustomer must provide both materials and labour.Firm will only provide
                                                consultation service.
                                            </label>
                                        </div>
                                        <div class="col-lg-3 mt-2"><label class="radio-inline">
                                                <input type="radio" name="optradio" onclick="updateTotal4(0.02)">
                                                <b>Labour Constructions With Supervision</b> <br>
                                                Customer must provide both materials and labour.Firm will only provide
                                                Supervise service.
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <p class="text-bg-secondary p-2 mt-4 rounded-2">Final cost : <span
                                        id="fcost4">0.00</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn" type="button" onclick="multiply()">Calculate</button> -->



            </div>
        </div>




    </div>
    <br><br>









    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="app.js"></script>
    <script src="insert.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

</body>

</html>