<html>
<head>
<title></title>

<link rel="stylesheet" type="text/css" href="style.css">
<\head>

<body>

<div id="main">
<?php 
if(isset($_POST["submit"])){


	$getName = $_POST["name"];
	$getEmail = $_POST["email"];
	$getSub = $_POST["subject"];
	$getMsg = $_POST["message"];
	
	echo "<fieldset>";
	"Your Form is Submited";
	echo "</fieldset>"

	

}
</div>

</body>
</html>