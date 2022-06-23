<?php 
	//echo "test";
	$message = "input";
	if(isset($_COOKIE['name'])){
		$message = $_COOKIE['name'];
	}else{
		echo "<form>";
		echo "<input type='text' name='name'>";
		echo "<input type='submit' name='submitname'>";
		echo "</form>";
	}
	if(isset($_GET['submitname'])){
		setcookie("name", $_GET['name'], time() + (86400 * 30), "/");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $message ?></title>
	<style type="text/css">
		textarea{
			direction: ;
			padding: 10px;
		}
		#split{
			display: block;
			width: 500px;
			height: 50px;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<center>
<form action="array_action.php" method="post">
	<textarea name="keyword" rows="40" cols="100" placeholder="Hi, <?php echo $message; ?> Type Here........."></textarea>
	<input type="submit" id="split" name="submit" value="Split">
</form>
</center>
</body>
</html>