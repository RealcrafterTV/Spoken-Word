<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="stylesheets/logreg.css">
<link rel="stylesheet" href="stylesheets/navigation.css">
</head>
<body>
    <div class="nav">    
<iframe src="navigation.html">
   <a href="navigation.html" target="_parent">Navigationsleiste </a>
   </iframe>
          </div>
<!--     <div class="texte">    
<iframe src="randomtext.php">
   <a href="randomtext.php" target="_parent">Zufälliger Text </a>
   </iframe>
        </div>
    !-->
    <?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		$trn_date = date("DD-MM-YY H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '" . md5($password) . "', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Du hast dich erfolgreich Registriert.</h3><br/>Klicke hier <a href='login.php'>Login</a></div>";
        } else 
            {
             echo "Es ist ein Fehler aufgetreten!";
            }
    }else{
?>
<div class="form">
    <div class="title">
        <h1>Registration</h1>
    </div>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" />
<input type="password" name="password" placeholder="Password" required/>
<input type="submit" name="submit" value="Register" />
</form>
<br /><br />
</div>
<?php } ?>
</body>
</html>
