<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link href="../css/login.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            font-family: 'Poppins', sans-serif;
        }
        
        .success-container {
            max-width: 550px;
            transition: all 0.3s ease;
        }
        
        .success-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(225, 4, 199, 0.94);
        }
        
        .success-card {
            background: white;
            border-radius: 20px;
            border: none;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }
        
        .success-header {
            background: linear-gradient(135deg,rgb(10, 238, 59) 0%, #191654 100%);
            padding: 2.5rem 0;
            text-align: center;
        }
        
        .success-icon {
            font-size: 3.5rem;
            color: white;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
        }
        
        .success-body {
            padding: 2.5rem 2rem;
            text-align: center;
        }
        
        .success-message {
            color: #4a5568;
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }
        
        .btn-success-primary {
            background: linear-gradient(135deg,rgb(6, 170, 25) 0%, #191654 100%);
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            color: white;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn-success-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            background: linear-gradient(135deg, #191654 0%,rgb(9, 193, 34) 100%);
        }
        
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }
        
        .pulse-animation {
            animation: pulse 2s infinite ease-in-out;
        }
        
        @keyframes slideInFromBottom {
            0% {
                transform: translateY(50px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        .slide-in-animation {
            animation: slideInFromBottom 0.8s forwards;
        }
    </style>
</head>
<body style="height: 100vh;">
    
    <?php
    echo "<div class='h-100 d-flex align-items-center justify-content-center bgg'>
            <div class='success-container animate__animated animate__fadeInUp'>
                <div class='success-card'>
                    <div class='success-header'>
                        <div class='success-icon pulse-animation'>
                            <i class='fas fa-check'></i>
                        </div>
                    </div>
                    <div class='success-body slide-in-animation'>
                        <h2 class='mb-4'>Success!</h2>
                        <p class='success-message'>Your password has been successfully changed.</p>
                        <a class='btn btn-success-primary mt-3' href='../login.php'>
                            Login 
                            <i class='fa-sharp fa-solid fa-arrow-right-to-bracket ms-2'></i>
                        </a>
                    </div>
                </div>
            </div>
          </div>";
    ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>