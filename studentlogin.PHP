<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="teacherlogin.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/quiz_project_final/std.css">
    
    <title>Login Page</title>
</head>
 
<body>
    <div>
    <form action="http://localhost/quiz_project_final/stdvalidate.php" method="post">
        <div class="login-box">
            <h2>Student  Login</h2>
 
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username"
                         name="username" autocomplete="off">
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
 
            <input class="button" type="submit"
                     name="login" value="Sign In" value=""></input></div>
    </form>
</div>

 
</html>
