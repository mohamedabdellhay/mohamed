<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php 
	if($_SERVER['REQUEST_METHOD'] =='POST'){
		$hello = $_COOKIE['name'];
	}else{
		$hello = "Hello | User";
	}
	?>
	<title><?php echo $hello; ?></title>
</head>
<body>
<style type="text/css">
	textarea{
		padding: 10px;
		direction: rtl;
	}
</style>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] =='POST'){
	$keyword = $_POST['keyword'];
	/*
	echo "<pre>";
	print_r($keyword);
	echo "</pre>";
	*/
	$newkeyword = explode(' ', $keyword);
	echo "<p>words you entered: " . count($newkeyword) . "</p>";
	/*
	echo "<pre>";
	print_r($newkeyword);
	echo "</pre>";
	*/
	$nk = array_unique($newkeyword);
	echo "<p>words after filtering: " . count($nk) . "</p>";
	/*
	echo "<pre>";
	print_r(array_unique($newkeyword));
	echo "</pre>";
	*/

	//echo "<h3>". $_COOKIE['name'] ."</h3>";
	echo "<h4>Now We are Process Your Request</h4>";
	//echo"<br />";
	echo "<textarea rows='35' cols='100'>";
	foreach ($nk as $value){
		echo $value; 
		echo "\n";
	}
	echo "</textarea>";

}else{
	echo "<h3>Oh Sorry Something Not Working!</h3>";
	
}
echo "<a href='/elghazawy/array_input.php'><h2>Go to Home Page</h2></a>";

?>