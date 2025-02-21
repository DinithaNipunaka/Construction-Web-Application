<?php include ('change_password_process.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link href="../css/login.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" media="screen">
</head>

<body>

    <section class="vh-100" style="background-color: #010439;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card shadow-5-strong" style="border-radius: 1rem;background: hsla(0, 0%, 100%, 0.85);
        backdrop-filter: blur(30px);">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="../img/indexbg2.jpg" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="" method="post">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <!-- <i class="fa-solid fa-house fa-2x me-3" style="color: #ff6162;"></i> -->
                                            <img src="../img/logo.png" alt="login form" class="img-fluid" width="80" />
                                            <span class="h2 fw-bold ">Sith Niwasa Construction</span>
                                        </div>
                                        <div class="error"></div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Change Your
                                            Password</h5>

                                        <div class="form-floating mt-2">
                                            <input type="email" name="email" id="inputEmail" class="form-control"
                                                required placeholder="Enter Username">
                                            <label>Email</label>
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="password" name="new_password" id="inputPassword"
                                                class="form-control" required placeholder="Enter Password">
                                            <label>Password</label>
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <button class="btn btnlogin btn-lg btn-block mt-2" type="submit"
                                                name="change">Change <i
                                                    class="fa-sharp fa-solid fa-arrow-right-to-bracket"></i></button>
                                            <a href="../index.php" class="btn btnlogin btn-lg btn-block mt-2 ">
                                                Go Back to Login <i class="fa-solid fa-backward fa-beat"></i>
                                            </a>
                                        </div>


                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- <form action="" method="post">
            <div class="row mb-3 justify-content-md-center">
                <label for="inputEmail" class="col-4 col-form-label">Email</label>
                <div class="col-lg-auto">
                    <input type="email" name="email" id="inputEmail" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3 justify-content-md-center">
                <label for="inputPassword" class="col-4 col-form-label">New Password</label>
                <div class="col-lg-auto">
                    <input type="password" name="new_password" id="inputPassword" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3 justify-content-md-center">
                <div class="col-8">
                    <button type="submit" class="btn btn-primary" name="change">Change</button>
                </div>
            </div>
        </form> -->

</body>

</html>