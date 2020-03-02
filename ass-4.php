<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!-- <table align="center" border="1"> -->
		
		<form method="post">
			Enter the Number:<input type="text" name="txtnum1" required="">
			<br>
			<br>
			<input type="submit" name="btnprime" value="Prime">&nbsp;&nbsp;
			<input type="submit" name="btnrev" value="Reverse">&nbsp;&nbsp;
			<input type="submit" name="btnfact" value="Factorial">&nbsp;&nbsp;
			<input type="submit" name="btnoe" value="Odd or Even">&nbsp;&nbsp;
		</form>
<?php 

	if(isset($_POST['btnprime'])){
		
		$input=$_POST['txtnum1'];  
    	$flag = primeCheck($input); 
		if ($flag == 1) 
    		echo "<h2> $input is Prime </h2>"; 
		else
    		echo "<h2> $input is Not Prime </h2>";
	}
	if(isset($_POST['btnrev'])){
		
		$number = $_POST['txtnum1'];
		$num = (string) $number;  
		$revstr = strrev($num);  
		$reverse = (int) $revstr;  
		echo "<h2> Revrse of $number is $reverse </h2>"; 
	}
	if(isset($_POST['btnfact'])){

		$number = $_POST['txtnum1'];
		$fact = Factorial($number); 
			echo "<h2> Factorial of $number is $fact </h2>"; 
	}
	if(isset($_POST['btnoe'])){

		$number = $_POST['txtnum1'];
		if($number % 2 == 0){ 
        	echo "<h2> $number is Even Number </h2>";  
    	}else{ 
        	echo "<h2> $number is Odd Number </h2>"; 
        } 

	}

function primeCheck($number){ 

    if ($number == 1) {
    	return 0; 
    }
    for ($i = 2; $i <= $number/2; $i++){ 
        if ($number % $i == 0) {
            return 0; 
        }
    } 
    return 1; 
} 

function Factorial($number){ 
    $factorial = 1; 
    for ($i = 1; $i <= $number; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 

 ?>

</body>
</html>

