<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Particulas</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="formulario2.css">
    <link href='https://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="Valet_Logo.png"> 
    
</head>
<body>
    <div id="particles-js">
    <?php
        $exist=$_GET['exist'];
        if (isset($exist)){
            echo "<h1>No lo haga compa</h1>";
        }
    ?>
    <form id="signup" action='insertar.php' method="post">
            <div id="header">
            SIGN UP FREE!
                <a href="https://www.facebook.com/"><img id="fb" src="fb_login.png"/></a>
            </div>
            <div id="form">
                <h4>OR<br>Create a New One</h4>
                <input type="text" placeholder="&#128100;First Name" name="fName" required>
                <input type="text" placeholder="&#128100;Last Name" name="lName" required>
                <input type="text" placeholder="📧email" name="email" required>
                <input type="text" placeholder="&#128100;Username" name="username" required>
                <input type="password" placeholder="&#128274;Password" name="clave" required>
                <input type="submit" value="Sign In" required>
                <div id="check"><input type="checkbox" name="RememberAccount" value="Agree" required><p>I agree to the terms and conditions</p></div>
            </div>
    </form>
    
    </div>
    
		
	<script src='particles.js'></script>
    <script src="particulas.js"></script>
</body>
</html>