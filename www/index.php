<html>
<head>
	<title>
		Calculator
	</title>
</head>
<body>
	<h1>Calculator</h1>
	<form action="index.php" method="post">
		<input type="text" name="v1">

		<select name="op">
			<option value="+" selected>+</option>
			<option value="-" >-</option>
			<option value="*" >*</option>
			<option value="/" >/</option>
			<option value="!" >!</option>
		</select>
		<input type="text" name="v2">
		<input type="submit" value="=">
	</form>
</body>
<?php
var_dump($_POST);
$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$option = $_POST['op'];


echo "$v1, $v2, $option ";
switch ($option){
	case '+': {
		$res = $v1 + $v2;
		break;
	}
	case '-': {
		$res = $v1 - $v2;
		break;
	}
	case '*': {
		$res = $v1 * $v2;
		break;
	}
	case '/': {
		if($v2 == 0) {$res = "Eroare! Impartire la 0!";}
		else $res = $v1 + $v2;
		break;
	}
	case '!': {
		$res = 1;
		for ($i=1; $i<=$v1; $i++){
			$res *= $i;
		}
		break;
	}

}
echo "<br>";
echo $res;
?>
