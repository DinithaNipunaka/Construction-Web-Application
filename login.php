<?php session_start(); ?>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/login.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css?v=<?php echo time(); ?>">
        <style>
.privacy-content {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: #333;
}

.text-justify {
    text-align: justify;
}

.policy-points {
    padding-left: 20px;
}

.policy-points li {
    margin-bottom: 8px;
    position: relative;
    padding-left: 15px;
}

.policy-points li:before {
    content: "•";
    position: absolute;
    left: 0;
    color: #0d6efd;
}

h5 {
    color: #0d6efd;
    font-weight: 600;
}

.modal-body {
    padding: 1.5rem;
}

.modi {
    border: none;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
}
</style>
</head>

<body class="homee">
    <?php
include("connection.php");
include("header.php");

if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($mysqli, $_POST['username']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['password']);

	if($user == "" || $pass == "") {
		echo "<div class='h-100 d-flex align-items-center justify-content-center bgg'><div><p class='text-danger p-5 fs-3 text-uppercase alert alert-danger rounded-5 text-center'><br/>Either username or password field is empty.<br/><br/><a class='btn btn-primary' href='login.php'><i class='bi bi-house-door-fill'></i> Go back</a><br/><br/></p></div></div>";
		
	} else {
		$result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
					or die("Could not execute the select query.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['role'] = $row['role'];
			$_SESSION['email'] = $row['email'];
		} else {
			echo "<div class='h-100 d-flex align-items-center justify-content-center bgg'><div><p class='text-danger p-3 fs-3 text-uppercase alert alert-danger rounded-5 text-center'><br/>Invalid username or password.<br/><br/><a class='btn btn-primary' href='login.php'><i class='bi bi-house-door-fill'></i> Go back</a><br/><br/></p></div></div>";
            
		}
    
		
		if(isset($_SESSION['valid'])) {
        if($_SESSION['role'] == "super_admin") {
			    header('Location: view.php');	
        }else{
			    header('Location: view.php');	
        }		
		}
	}
} else {
?>

    <section class="vh-100" style="background-color: #010439;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card shadow-5-strong" style="border-radius: 1rem;background: hsla(0, 0%, 100%, 0.85);
        backdrop-filter: blur(30px);">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="img/indexbg2.jpg" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form name="form1" method="post" action="">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <!-- <i class="fa-solid fa-house fa-2x me-3" style="color: #ff6162;"></i> -->
                                            <img src="img/logo.png" alt="login form" class="img-fluid" width="80" />
                                            <span class="h2 fw-bold ">Sith Niwasa Construction</span>
                                        </div>
                                        <div class="error"></div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                            account</h5>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="username" class="form-control"
                                                placeholder="Enter Username">
                                            <label>Username</label>
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Enter Password">
                                            <label>Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btnlogin btn-lg btn-block mt-2" type="submit"
                                                name="submit">Login <i
                                                    class="fa-sharp fa-solid fa-arrow-right-to-bracket"></i></button>
                                        </div>

                                        <a class="small text-muted" data-bs-toggle="modal"
                                            data-bs-target="#forgotpassword" href="#!">Forgot password?</a>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a
                                                href="register.php" style="color: #393f81;">Register here</a></p>
                                        <a href="#!" class="small text-muted" data-bs-toggle="modal"
                                            data-bs-target="#terms">Terms of use.</a>
                                        <a href="#!" class="small text-muted" data-bs-toggle="modal"
                                            data-bs-target="#privacy">Privacy policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="forgotpassword" tabindex="-1" aria-labelledby="forgotpassword" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content rounded-2 modi">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="forgotpassword">Forgot Password</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <h1 class=" text-center p-2">Password Reset</h1>
                        <form action="mail/forgot_password_process.php" method="post">
                            <div class="row mb-3 justify-content-center">
                                <div class="col-auto">
                                    <input type="email" name="email" placeholder="Email address" class="form-control">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-success" name="reset">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="terms" tabindex="-1" aria-labelledby="terms" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content rounded-2 modi">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="terms">Terms of Use</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="terms-content text-justify">
                    <p class="mb-4">
                        Welcome to the Sith Niwasaa Construction web application. By accessing or using this system, you agree to comply with the following terms and conditions:
                    </p>
                    
                    <h5 class="mt-4 mb-3">Acceptance of Terms</h5>
                    <p class="mb-4">
                        By using this application, you acknowledge and agree to these Terms of Use. If you do not agree, please refrain from using the system.
                    </p>
                    
                    <h5 class="mt-4 mb-3">Authorized Use</h5>
                    <p class="mb-4">
                        This platform is designed for managing construction projects and related activities. Unauthorized access, data tampering, or misuse of the system is strictly prohibited.
                    </p>
                    
                    <h5 class="mt-4 mb-3">User Responsibilities</h5>
                    <ul class="policy-points mb-4">
                        <li>You are responsible for maintaining the confidentiality of your account credentials.</li>
                        <li>You agree not to upload, share, or distribute any harmful, illegal, or unauthorized content.</li>
                        <li>Any fraudulent or malicious activity will result in immediate account suspension and potential legal action.</li>
                    </ul>
                    
                    <h5 class="mt-4 mb-3">Intellectual Property</h5>
                    <p class="mb-4">
                        All content, including text, images, and software, belongs to Sith Niwasaa Construction and is protected under copyright laws. Unauthorized reproduction or distribution is prohibited.
                    </p>
                    
                    <h5 class="mt-4 mb-3">Limitation of Liability</h5>
                    <p class="mb-4">
                        Sith Niwasaa Construction is not liable for any damages resulting from system downtime, data loss, or unauthorized access. Users must ensure proper data backup and security practices.
                    </p>
                    
                    <h5 class="mt-4 mb-3">Modifications and Termination</h5>
                    <p class="mb-4">
                        We reserve the right to modify these terms or discontinue services at any time without prior notice. Continued use of the system after changes signifies acceptance of the updated terms.
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Accept</button>
            </div>
        </div>
    </div>
</div>

    utified Privacy Policy Modal

<div class="modal fade" id="privacy" tabindex="-1" aria-labelledby="privacy" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content rounded-2 modi">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="privacy">Privacy Policy</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="privacy-content text-justify">
                    <p class="mb-4">
                        Sith Niwasaa Construction is committed to protecting your privacy. This Privacy Policy explains how we collect, use, and safeguard your personal information when you use our web application.
                    </p>
                    
                    <h5 class="mt-4 mb-3">Information We Collect</h5>
                    <ul class="policy-points mb-4">
                        <li>Personal details such as name, email, and contact information provided during registration.</li>
                        <li>Project-related data entered into the system.</li>
                        <li>System usage data, including login activity and interactions within the platform.</li>
                    </ul>
                    
                    <h5 class="mt-4 mb-3">How We Use Your Information</h5>
                    <ul class="policy-points mb-4">
                        <li>To provide and enhance our construction management services.</li>
                        <li>To communicate important updates, security alerts, or support-related information.</li>
                        <li>To ensure system security, prevent fraud, and comply with legal obligations.</li>
                    </ul>
                    
                    <h5 class="mt-4 mb-3">Data Protection & Security</h5>
                    <ul class="policy-points mb-4">
                        <li>We implement industry-standard security measures to protect your data from unauthorized access or breaches.</li>
                        <li>Only authorized personnel have access to sensitive information.</li>
                    </ul>
                    
                    <h5 class="mt-4 mb-3">Information Sharing</h5>
                    <ul class="policy-points mb-4">
                        <li>We do not sell or rent your personal data to third parties.</li>
                        <li>Information may be shared with legal authorities if required by law.</li>
                    </ul>
                    
                    <h5 class="mt-4 mb-3">Cookies & Tracking</h5>
                    <ul class="policy-points mb-4">
                        <li>Our system may use cookies to improve user experience and track usage patterns.</li>
                        <li>You can adjust your browser settings to disable cookies if preferred.</li>
                    </ul>
                    
                    <h5 class="mt-4 mb-3">Your Rights & Control</h5>
                    <ul class="policy-points mb-4">
                        <li>You can update or request the deletion of your personal data by contacting our support team.</li>
                        <li>You have the right to opt out of marketing communications.</li>
                    </ul>
                    
                    <h5 class="mt-4 mb-3">Changes to This Policy</h5>
                    <p class="mb-4">
                        We may update this Privacy Policy as necessary. Continued use of the system after changes indicates your acceptance of the updated terms.
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Accept</button>
            </div>
        </div>
    </div>
</div>

    <?php
}
?>

    <?php
	include("footer.php");
?>
</body>

</html>