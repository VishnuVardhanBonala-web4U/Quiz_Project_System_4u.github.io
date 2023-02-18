<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="std.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/quiz_project_final/index.css">
    
    <title>Login Page</title>
</head>
 
<body>
    <form action="http://localhost/quiz_project_final/stdsignupdata.php" method="post">
        <div class="login-box">
            <h2>Student  Sign Up</h2>
             <div class="textbox">
                <i class="fa fa-male" aria-hidden="true"></i>
                <input type="text" placeholder="First Name"
                         name="fname" value="" required>
            </div>
            <div class="textbox">
                <i class="fa fa-male" aria-hidden="true"></i>
                <input type="text" placeholder="Last Name"
                         name="lname" value="" required>
            </div>
 
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username"
                         name="username" value="" required>
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="" required>
            </div>

                        <div class="textbox">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input type="number" placeholder="phone"
                         name="phone" value="" required>
            </div>

 
            <input class="button" type="submit"
                     name="signup" value="Sign Up"></input>

        </div>
    </form>
<div class="sign">
    <a href="http://localhost/quiz_project_final/studentlogin.php">Sign In</a>
</div>
</body>
</body>
 
</html>




