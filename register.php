<html>
<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="css/login.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --primary-color: #010439;
            --secondary-color: #4e73df;
            --accent-color: #36b9cc;
            --gradient-start: #4e54c8;
            --gradient-end: #8f94fb;
        }
        
        body.homee {
            background-color: var(--primary-color);
            font-family: 'Poppins', sans-serif;
        }
        
        .card {
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
        }
        
        .card-body {
            position: relative;
            z-index: 1;
        }
        
        .card-body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at top right, rgba(78, 115, 223, 0.1), transparent);
            z-index: -1;
        }
        
        .form-floating input {
            border-radius: 10px;
            border: 1px solid #e0e0e0;
            padding: 1.2rem 1rem;
            transition: all 0.3s;
            box-shadow: 0 0 0 transparent;
        }
        
        .form-floating input:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 10px rgba(78, 115, 223, 0.2);
            transform: translateY(-2px);
        }
        
        .form-floating label {
            padding: 1rem;
            color: #6c757d;
        }
        
        .btnlogin {
            background: linear-gradient(to right, var(--gradient-start), var(--gradient-end));
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 25px;
            font-weight: bold;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(78, 115, 223, 0.3);
            z-index: 1;
        }
        
        .btnlogin:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, var(--gradient-end), var(--gradient-start));
            transition: all 0.4s ease-in-out;
            z-index: -1;
        }
        
        .btnlogin:hover:before {
            left: 0;
        }
        
        .btnlogin:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(78, 115, 223, 0.4);
        }
        
        .btn-link {
            color: var(--secondary-color);
            transition: all 0.3s;
        }
        
        .btn-link:hover {
            color: var(--accent-color);
            transform: translateY(-3px);
        }
        
        .bg-image {
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .bg-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(1, 4, 57, 0.7), rgba(1, 4, 57, 0.9));
        }
        
        .social-icon {
            font-size: 1.2rem;
            transition: all 0.3s;
        }
        
        .social-icon:hover {
            transform: scale(1.2);
        }
        
        /* Animations for form elements */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-form-item {
            animation: fadeInUp 0.5s forwards;
            opacity: 0;
        }
        
        .form-floating:nth-child(1) {
            animation-delay: 0.1s;
        }
        
        .form-floating:nth-child(2) {
            animation-delay: 0.2s;
        }
        
        .form-floating:nth-child(3) {
            animation-delay: 0.3s;
        }
        
        .form-floating:nth-child(4) {
            animation-delay: 0.4s;
        }
        
        /* Modal styling */
        .modal-content {
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }
        
        .modal-header {
            background: linear-gradient(to right, var(--gradient-start), var(--gradient-end));
            color: white;
            border-bottom: none;
        }
        
        .modal-footer {
            border-top: none;
        }
        
        .policy-points li {
            margin-bottom: 10px;
            position: relative;
            padding-left: 20px;
        }
        
        .policy-points li:before {
            content: "\f058";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            color: var(--secondary-color);
            position: absolute;
            left: 0;
            top: 2px;
        }
        
        /* Alert styling */
        .alert {
            border: none;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }
        
        .alert:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
        }
        
        .alert-success:before {
            background: linear-gradient(to bottom, #28a745, #20c997);
        }
        
        .alert-danger:before {
            background: linear-gradient(to bottom, #dc3545, #e74a3b);
        }
        
        /* Pulse animation for form feedback */
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(78, 115, 223, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(78, 115, 223, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(78, 115, 223, 0);
            }
        }
        
        .form-floating input:focus {
            animation: pulse 2s infinite;
        }
    </style>
</head>

<body class="homee">
    <?php
include("connection.php");
include("header.php");

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	if($user == "" || $pass == "" || $name == "" || $email == "") {
		echo "<div class='h-100 d-flex align-items-center justify-content-center bgg'>
                <div class='animate__animated animate__fadeIn'>
                    <div class='alert alert-danger rounded-5 text-center p-4 shadow-lg'>
                        <i class='bi bi-exclamation-triangle-fill fs-1 d-block mb-3 text-danger'></i>
                        <p class='text-danger fs-3 text-uppercase mb-4'>All fields should be filled. Either one or many fields are empty.</p>
                        <a class='btn btnlogin px-4 py-2' href='register.php'>
                            <i class='bi bi-house-door-fill me-2'></i> Go back
                        </a>
                    </div>
                </div>
              </div>";
	
	} else {
		mysqli_query($mysqli, "INSERT INTO login(name, email, username, password) VALUES('$name', '$email', '$user', md5('$pass'))")
			or die("Could not execute the insert query.");
			
		echo "<div class='h-100 d-flex align-items-center justify-content-center bgg'>
                <div class='animate__animated animate__fadeIn'>
                    <div class='alert alert-success rounded-5 text-center p-4 shadow-lg'>
                        <i class='bi bi-check-circle-fill fs-1 d-block mb-3 text-success'></i>
                        <p class='text-success fs-3 text-uppercase mb-4'>Registration successfully</p>
                        <a class='btn btnlogin px-4 py-2' href='login.php'>
                            Login <i class='fa-sharp fa-solid fa-arrow-right-to-bracket ms-2'></i>
                        </a>
                    </div>
                </div>
              </div>";
	}
} else {
?>

    <!-- Section: Design Block -->
    <section class="text-center animate__animated animate__fadeIn">
        <!-- Background image -->
        <div class="p-5 bg-image" style="
        background-image: url('img/indexbg.jpg');
        height: 300px;
        "></div>
        <!-- Background image -->

        <div class="card mx-4 mx-md-5 shadow-5-strong animate__animated animate__zoomIn" style="
        margin-top: -170px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5 animate__animated animate__fadeInDown">
                            <i class="bi bi-person-plus-fill me-2 text-primary"></i>Sign up now
                        </h2>
                        <form name="form1" method="post" action="">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="form-floating mt-2 animate-form-item">
                                <input type="text" name="name" class="form-control" placeholder="Enter Username">
                                <label><i class="bi bi-person-fill me-2"></i>Full Name</label>
                            </div>

                            <div class="form-floating mt-2 animate-form-item">
                                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                <label><i class="bi bi-envelope-fill me-2"></i>Email</label>
                            </div>
                            <div class="form-floating mt-2 animate-form-item">
                                <input type="text" name="username" class="form-control" placeholder="Enter Username">
                                <label><i class="bi bi-person-badge-fill me-2"></i>User Name</label>
                            </div>
                            <div class="form-floating mt-2 animate-form-item">
                                <input type="password" name="password" class="form-control"
                                    placeholder="Enter Password">
                                <label><i class="bi bi-key-fill me-2"></i>Password</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mt-3 mb-4 animate__animated animate__fadeIn" style="animation-delay: 0.5s;">
                                <a href="#!" style="text-decoration: none;" class="btnlogin btn-sm px-3 py-1" data-bs-toggle="modal"
                                    data-bs-target="#privacy">
                                    <i class="bi bi-shield-lock me-1"></i> Read Agreement
                                </a>
                            </div>
                            <br>
                            <!-- Submit button -->
                            <button type="submit" name="submit" class="btn btnlogin btn-block mt-4 mb-4 px-5 py-2 animate__animated animate__fadeIn" style="animation-delay: 0.6s;">
                                Sign up <i class="fa-sharp fa-solid fa-arrow-right-to-bracket ms-2"></i>
                            </button>
                            <a href="index.php" class="btn btnlogin btn-block mt-4 mb-4 ms-3 px-5 py-2 animate__animated animate__fadeIn" style="animation-delay: 0.7s;">
                                Go Back to Login <i class="fa-solid fa-backward fa-beat ms-2"></i>
                            </a>

                            <!-- Register buttons -->
                            <div class="text-center mt-4 animate__animated animate__fadeIn" style="animation-delay: 0.8s;">
                                <p>or sign up with:</p>
                                <div class="d-flex justify-content-center gap-3 mt-3">
                                <button type="button" class="btn btn-link btn-floating mx-1 social-icon" style="color: #1877F2;" onclick="window.open('https://www.facebook.com/', '_blank')">
    <i class="bi bi-facebook fs-4"></i>
</button>

<button type="button" class="btn btn-link btn-floating mx-1 social-icon" style="color: #DB4437;" onclick="window.open('https://www.google.com/', '_blank')">
    <i class="bi bi-google fs-4"></i>
</button>

<button type="button" class="btn btn-link btn-floating mx-1 social-icon" style="color: #1DA1F2;" onclick="window.open('https://twitter.com/', '_blank')">
    <i class="bi bi-twitter fs-4"></i>
</button>

<button type="button" class="btn btn-link btn-floating mx-1 social-icon" style="color: #333;" onclick="window.open('https://github.com/', '_blank')">
    <i class="bi bi-github fs-4"></i>
</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->

    <div class="modal fade" id="privacy" tabindex="-1" aria-labelledby="privacy" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="privacy">
                        <i class="bi bi-shield-lock me-2"></i>Privacy policy
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                    </p> <br><br>
                    <div class="form-check">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" />
                        <label class="form-check-label" for="form2Example33">
                            Accept
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-2"></i>Close
                    </button>
                    <!-- <button type="button" class="btn btn-primary">Accept</button> -->
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>
</html>