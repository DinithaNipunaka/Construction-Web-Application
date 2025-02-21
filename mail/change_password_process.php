<?php
    if(isset($_GET['code'])) {
        $code = $_GET['code'];

        $conn = new mySqli('localhost', 'root', '', 'niwahana');
        if($conn->connect_error) {
            die('Could not connect to the database');
        }

        $verifyQuery = $conn->query("SELECT * FROM login WHERE code = '$code' and update_time >= NOW() - Interval 1 DAY");

        if($verifyQuery->num_rows == 0) {
            header("Location: ../login.php");
            exit();
        }

        if(isset($_POST['change'])) {
            $email = $_POST['email'];
            $new_password = $_POST['new_password'];

            $changeQuery = $conn->query("UPDATE login SET password = md5('$new_password') WHERE email = '$email' and code = '$code' and update_time >= NOW() - INTERVAL 1 DAY");

            if($changeQuery) {
                header("Location: success.php");
            }
        }
        $conn->close();
    }
    else {
        header("Location: ../login.php");
        exit();
    }
?>
