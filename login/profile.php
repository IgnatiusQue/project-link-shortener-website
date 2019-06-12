<?php
include('session.php');
?>
<html>
<head>
<title>Your Home Page </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>
