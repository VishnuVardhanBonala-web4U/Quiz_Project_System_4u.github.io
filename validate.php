<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quizproject";

    // Create connection
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the email and password from the user
    $email = $_POST["username"];
    $password = $_POST["password"];

    // Check if the email and password exist in the database
    $query = "SELECT * FROM adminlogin WHERE username='$email' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // If the email and password exist in the database
        header("location: http://localhost/quiz_project_final/MAINPAGE.php");
        // Redirect the user to the next page
    } else {
       echo "<script language='javascript'>";
            echo "alert('I know You Entered Invalid Details')";
            echo "</script>";
            die();
    }

    $conn->close();
?>