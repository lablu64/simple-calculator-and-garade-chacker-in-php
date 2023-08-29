<?php
$ans =" ";
$num1 =" ";
$num2 =" ";
$error =" ";

if(isset($_POST['sub'])){
	$num1=$_POST['n1'];
	$num2=$_POST['n2'];
	$oprnd=$_POST['sub'];
    
	if($oprnd=="+"){
        $ans=$num1+$num2;
    }else if($oprnd=="-"){
        $ans=$num1-$num2;
    }else if($oprnd=="x"){
        $ans=$num1*$num2;
    }else if($oprnd=="/"){
        $ans=$num1/$num2;
    }else{
        
    }
		
}else{
    $error = "enter Number";
}

?>
<html>
<head>
	<style type="text/css">
		.container
		{
			padding: 56px 23px;
			margin: 42px 263px;
			text-align: center;
			border: 1px solid #5c6c5c;
			width: 592px;
			border-radius: 22px;
			background: #eeffae96;
			
		}
		input, select {
  			width: 40%;
  			padding: 12px 20px;
  			margin: 8px 0;
  			display: inline-block;
  			border: 1px solid #ccc;
  			border-radius: 4px;
  			box-sizing: border-box;
		}

		input[type=submit] {
  			width: 5%;
 		 	background-color: #4CAF50;
  			color: white;
  			padding: 14px 20px;
  			margin: 8px 0;
  			border: none;
	 	 	border-radius: 4px;
  			cursor: pointer;
}
	</style>
</head>
<body>

<div class="container">
<form method="POST" action="<?= $_SERVER['PHP_SELF']?>">
<h1>Simple Calculator</h1>

<br>
<label for="">First Number:</label>
<input name="n1" value=" ">
<br>
<label for="">Second Number:</label>
<input name="n2" value=" ">
<br>
<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/">
<br>
<br>Result: <input type='text' value="<?php echo $ans; ?>"><br>
</form>
	</div>
</body>
</html>