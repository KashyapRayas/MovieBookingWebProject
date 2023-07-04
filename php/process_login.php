<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["uemail"];
    $password = $_POST["upass"];
    $passpat = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/";
    $_SESSION['valid'] = false;
    $_SESSION['display'] = "";

    if(!empty($email) && !empty($password)) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if(preg_match($passpat, $password)) {
                $_SESSION['valid'] = true; 
                $_SESSION['display'] = "";
                $servername = "localhost";
                $username = "root";
                $dbpassword = "";
                $dbname = "movie";

                $conn = new mysqli($servername, $username, $dbpassword, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $_SESSION["email"] = $email; 
                    header("Location: home.php");
                    exit();
                } else {
                    $_SESSION['valid'] = false;
                    $_SESSION['display'] = "Seems like your Email and Password do not match :(";
                    header("Location:login.php");
                    exit();
                }
            }
            else {
                $_SESSION['display'] = "Seems like your Email and Password do not match :(";
                header("Location:login.php");
                exit();
            }
        }
        else {
            $_SESSION['display'] = "Seems like your Email is wrong :(";
            header("Location:login.php");
            exit();
        }
    }
    else {
        $_SESSION['display'] = "Seems like the fields haven't been filled :(";
        header("Location:login.php");
        exit();
    }
}
