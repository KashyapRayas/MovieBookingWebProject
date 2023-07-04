<?php

    session_start();

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        var_dump($_POST);
        $email = $_SESSION['email'];

        $newFirstName = $_POST['funame'];
        $newLastName = $_POST['luname'];
        $newPhone = $_POST['uphone'];
        $newDateOfBirth = $_POST['udate'];
        $db_host = 'localhost';
        $db_username = 'root';
        $db_password = '';
        $db_name = 'movie';

        echo "
            <script>
                console.log('$newFirstName')
            </script>
        ";

        $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
        if (!$conn) { 
            die("Database connection failed: " . mysqli_connect_error());
        }
        
        $sql = "UPDATE users SET first_name = '$newFirstName', last_name = '$newLastName', mobile_no = '$newPhone', date_of_birth = '$newDateOfBirth' WHERE email = '$email'";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location:profile.php");
            exit();
        } else {
            echo "Error updating user details: " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

?>
