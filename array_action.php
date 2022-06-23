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
	#split{
			display: block;
			width: 500px;
			height: 30px;
			font-size: 20px;
			appearance: auto;
		    /*user-select: none;*/
		    white-space: pre;
		    align-items: flex-start;
		    text-align: center;
		    cursor: default;
		    box-sizing: border-box;
		    background-color: #FF2E2E;
		    color: buttontext;
		    padding: 1px 6px;
		    border-width: 2px;
		    /*border-style: dotted;*/
		    border-color: buttonborder;
		    border-radius: 5px;
		    border-image: initial;
		    text-decoration: none;
		
		}
</style>
</body>
</html>
<?php
echo "<center>";
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
		if(strlen($value) > 2){
			echo $value; 
			echo "\n";
		}
	}
	echo "</textarea>";
	

}else{
	echo "<h3>Oh Sorry, Something is Not Working!</h3>";
	
}
echo "<a href='/elghazawy/array_input.php' id='split'>Back to Home Page</a>";
echo "</center>";
?>