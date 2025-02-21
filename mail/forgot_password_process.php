<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" media="screen">
    <link href="../css/login.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --primary-color: #4e73df;
            --success-color: #1cc88a;
            --danger-color: #e74a3b;
            --dark-color: #5a5c69;
        }
        
        body {
            background: linear-gradient(120deg, #f8f9fc, #e2e6f3);
            height: 100vh;
            font-family: 'Nunito', sans-serif;
        }

        .message-container {
            max-width: 600px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transform: translateY(0);
            transition: transform 0.3s ease-in-out;
        }

        .message-container:hover {
            transform: translateY(-5px);
        }

        .success-message {
            border-left: 6px solid var(--success-color);
        }

        .error-message {
            border-left: 6px solid var(--danger-color);
        }

        .message-header {
            padding: 1.5rem;
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
        }

        .message-body {
            padding: 2rem;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background-color: #2e59d9;
            border-color: #2e59d9;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .icon-large {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .success-icon {
            color: var(--success-color);
        }

        .error-icon {
            color: var(--danger-color);
        }

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

        .animate-fadeInUp {
            animation: fadeInUp 0.5s ease-out;
        }
    </style>
</head>
<body>
    <?php
if(isset($_POST['reset'])) {
    $email = $_POST['email'];
}
else {
    exit();
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'dinithanipunaka181@gmail.com';                     // SMTP username
    $mail->Password   = 'tiyabktaitjaucqq';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    //Recipients
    $mail->setFrom('dinithanipunaka181@gmail.com', 'Admin');
    $mail->addAddress($email);     // Add a recipient
    $code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'),0,10);
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Password Reset';
    $mail->Body    = 'To reset your password click <a href="http://localhost/Construction-Web-Application/mail/change_password.php?code='.$code.'">here </a>. </br>Reset your password in a day.';
    $conn = new mySqli('localhost', 'root', '', 'niwahana');
    if($conn->connect_error) {
        die('Could not connect to the database.');
    }
    $verifyQuery = $conn->query("SELECT * FROM login WHERE email = '$email'");
    if($verifyQuery->num_rows) {
        $codeQuery = $conn->query("UPDATE login SET code = '$code' WHERE email = '$email'");
           
        $mail->send();
        echo "<div class='h-100 d-flex align-items-center justify-content-center'>
                <div class='message-container success-message animate-fadeInUp animate__animated animate__fadeIn'>
                    <div class='message-header text-center'>
                        <i class='bi bi-check-circle-fill icon-large success-icon'></i>
                        <h2 class='mb-0'>Success!</h2>
                    </div>
                    <div class='message-body text-center'>
                        <p class='fs-5 mb-4'>Password reset instructions have been sent to your email.</p>
                        <p class='text-muted mb-4'>Please check your inbox and follow the instructions to reset your password.</p>
                        <a class='btn btn-primary' href='../login.php'>
                            <i class='bi bi-house-door-fill me-2'></i>Back to Login
                        </a>
                    </div>
                </div>
              </div>";
    } else {
        echo "<div class='h-100 d-flex align-items-center justify-content-center'>
                <div class='message-container error-message animate-fadeInUp animate__animated animate__fadeIn'>
                    <div class='message-header text-center'>
                        <i class='bi bi-exclamation-triangle-fill icon-large error-icon'></i>
                        <h2 class='mb-0'>Email Not Found</h2>
                    </div>
                    <div class='message-body text-center'>
                        <p class='fs-5 mb-4'>We couldn't find this email in our database.</p>
                        <p class='text-muted mb-4'>Please make sure you've entered the correct email address or contact support for assistance.</p>
                        <a class='btn btn-primary' href='../login.php'>
                            <i class='bi bi-house-door-fill me-2'></i>Try Again
                        </a>
                    </div>
                </div>
              </div>";
        $conn->close();
    }
   
} catch (Exception $e) {
    echo "<div class='h-100 d-flex align-items-center justify-content-center'>
            <div class='message-container error-message animate-fadeInUp animate__animated animate__fadeIn'>
                <div class='message-header text-center'>
                    <i class='bi bi-x-circle-fill icon-large error-icon'></i>
                    <h2 class='mb-0'>Error</h2>
                </div>
                <div class='message-body text-center'>
                    <p class='fs-5 mb-4'>Message could not be sent.</p>
                    <p class='text-muted mb-4'>Error: {$mail->ErrorInfo}</p>
                    <a class='btn btn-primary' href='../login.php'>
                        <i class='bi bi-house-door-fill me-2'></i>Try Again
                    </a>
                </div>
            </div>
          </div>";
}    
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>