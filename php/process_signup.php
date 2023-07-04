<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $firstName = $_POST["funame"];
        $lastName = $_POST["luname"];
        $email = $_POST["uemail"];
        $phone = $_POST["uphone"];
        $dateOfBirth = $_POST["udate"];
        $password = $_POST["upass"];
        $passpat = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/";
        $_SESSION['valid'] = false;
        $_SESSION['display'] = "Seems like the fields haven't been filled :(";

        if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($phone) && !empty($dateOfBirth) && !empty($password)) {
            if(!is_numeric($firstName) && !is_numeric($lastName) && is_numeric($phone)) {
                if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    if(preg_match($passpat, $password)) {
                        $_SESSION['valid'] = true; 
                        $_SESSION['display'] = "";
                    }
                    else {
                        $_SESSION['display'] = "Seems like your Password is too weak :(";
                    }
                }
                else {
                    $_SESSION['display'] = "Seems like your Email is wrong :(";
                }
            }
            else {
                $_SESSION['display'] = "Seems like your Name or Phone number is wrong :(";
            }
        }


        if($_SESSION['valid']) {
            $conn = mysqli_connect('localhost', 'root', '', 'movie');
        
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO users (first_name, last_name, email, mobile_no, date_of_birth, password)
                VALUES ('$firstName', '$lastName', '$email', $phone, '$dateOfBirth', '$password')";

            // if (mysqli_query($conn, $sql)) {
            //     $_SESSION["message"] = "Registration successful!";
            //     $_SESSION["message_type"] = "success";
            // } else {
            //     $_SESSION["message"] = "Registration failed. Please try again.";
            //     $_SESSION["message_type"] = "error";
            // }

            mysqli_close($conn);
            header("Location:login.php");
        }
        else {
            header("Location:signup.php");
        }
    }
    exit();
?>
