<?php
 
include('connection.php');
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $user= test_input($_POST["username"]);
    $pass = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM studentsignup");
    $stmt->execute();
    $users = $stmt->fetchAll();
  
    foreach($users as $user) {
         
        if(($user['username'] == $username) &&
            ($user['password'] == $password)) {
        	
        header("location: http://localhost/quiz_project_final/MAINPAGE.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('I know You Entered Invalid Details')";
            echo "</script>";
            die();
        }
    }
}
 
?>
