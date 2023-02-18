<?php

require 'sconnect.php';         

if(isset($_POST['signup']))



         {

            $name1=$_POST['fname'];
            $name2=$_POST['lname'];
            $user=$_POST['username'];
            $pass=$_POST['password'];
            $phone=$_POST['phone'];
            

$res ="INSERT INTO studentlogin (`FIRSTNAME`,`LASTNAME`,`USERNAME`,`PASSWORD`,`PHONE`)

  values ('$name1','$name2','$user','$pass','$phone')";

if(mysqli_query($conn,$res))

{
   echo "<h2 style='color: red'> connection succesfull</h2>";

 header("Location: http://localhost/quiz_project_final/smenu.php"); 
 
}

else{

    echo "<h2 style='color:red'>connection Lost</h2>";
}

          
 }

?>