<?php
$isValid= true ;

$type = $value ="";
$typeErr = $valueErr = "";
 
if($_SERVER['REQUEST_METHOD'] == "POST"){

   
    $type = $_POST['type']; 
    $value = $_POST['value']; 
     
    if(empty($_POST['type'])) {
        $typeErr = "Type can't be empty!";
        $isValid = false;
    }
    if(empty($_POST['value'])) {
        $valueErr = "value can't be empty!";
        $isValid = false;
    }
    
    if($isValid) {

    	$result= 12*$value;
    	if($result){

    	}

      
    }

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Conversion Site</title>
</head>
<body>

	<h1>Page 1 [Home]</h1>
	<br>


	<a href="home.php">*Home</a>
	
	<a href="conversion-rate.php">*Conversion Rate</a>

	<a href="history.php">*History</a>

	<h1>Converter:</h1>

	<br><br>


	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		<label for="type">Type:</label> 
    		<select id="type" name="type">
    			<option value="fit-to-inch">Fit to Inch</option>
    			<option value="inch-to-fit">Inch to Fit</option>	
    		</select>

		<br><br>

		<label for="value">Value:</label>
		    <input type="text" id="value" name="value">
			<br><br>

		<input type="submit" value="Result">
	</form>
	<?php echo $result ?>
	
	<br>

	<script>
		
		function isValid(){
			var flag = true;
			var typeErr = document.getElementById("typeErr");
			var valueErr = document.getElementById("valueErr");
			var type = document.forms["converterForm"]["type"].value;
			var value = document.forms["converterForm"]["value"].value;


            typeErr.innerHTML = "" ;
            valueErr.innerHTML = "" ;

            if(type === ""){
           	flag = false;
           	tupeErr.innerHTML = "REQUIRED!" ;
           }
           if(value === ""){
           	flag = false;
           	valueErr.innerHTML = "REQUIRED!" ;
           }

            return flag;
		}
	</script>
	

</body>
</html>