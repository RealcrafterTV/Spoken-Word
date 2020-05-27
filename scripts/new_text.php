<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Neuer Text</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$text = stripslashes($_REQUEST['password']);
		$text = mysqli_real_escape_string($con,$password);
        $query = "INSERT into `texte` (username, text,) VALUES ('$username', '$text',)";
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
<h1>Registration</h1>
<form name="new_text" action="" method="post">
<input type="text" name="text" placeholder="Text" required />
<input type="user" name="user" placeholder="Benutername"/>
<input type="submit" name="submit" value="Erstellen" />
</form>
<br /><br />
</div>
<?php } ?>
</body>
</html>
