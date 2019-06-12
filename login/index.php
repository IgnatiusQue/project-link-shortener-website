<?php
include('login.php');//includes login script
?>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="main">
<h1>PHP Login Session Example</h1>
<div id="login">
<h2>Login Form</h2>
<hr/>
<form action="" method="post">
<label>UserName  :</label>
<input type="text" name="username" id="name" placeholder="username"/><br /><br />
<label>Password  :</label>
<input type="password" name="password" id="password" placeholder="**********"/><br/><br />
<input type="submit" value=" Login " name="submit"/><br />
<span><?php echo $error; ?></span>
</form>
</div>
<!-- Right side div -->
<div id="formget">
<a href=http://www.formget.com/app><img src="formget.jpg" alt="Online Form Builder"/></a>
</div>

</div>

</body>
</html>
