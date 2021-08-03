<?php 

$isValid= true ;

$type = $value1 = $value2 ="";
$typeErr = $value1Err = $value2Err = "";
 
if($_SERVER['REQUEST_METHOD'] == "POST"){

   
    $type = $_POST['type']; 
    $value1 = $_POST['value1']; 
    $value2 = $_POST['value2']; 
    if(empty($_POST['type'])) {
        $typeErr = "Type can't be empty!";
        $isValid = false;
    }
    if(empty($_POST['value1'])) {
        $value1Err = "value can't be empty!";
        $isValid = false;
    }
    if(empty($_POST['value2'])) {
        $value2Err = "value can't be empty!";
        $isValid = false;
    }
    
    if($isValid) {

    	

    	}

      
   

}

	
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Conversion Site</title>
</head>
<body>

	<h1>Page 3 [Conversion Rate]</h1>
	<br>

	<h1>Convertion Site</h1> <br>
	<a href="home.php">*Home</a>
	
	<a href="conversion-rate.php">*Conversion Rate</a>

	<a href="history.php">*History</a>
<h1>Convertion Rate:</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		<label for="type">Type:</label> 
    		<select id="type" name="type">
    			<option value="fit-to-inch">Fit to Inch</option>
    			<option value="inch-to-fit">Inch to Fit</option>	
    		</select>

		<label for="value1"></label>
		    <input type="text" id="value1" name="value1">
			
			<label for="value2"></label>
		    <input type="text" id="value2" name="value2">

		<input type="submit" name="submit" value="Submit">
	</form>
	<br>
	<script>
		
		function isValid(){
			var flag = true;
			var typeErr = document.getElementById("typeErr");
			var value1Err = document.getElementById("value1Err");
			var value2Err = document.getElementById("value2Err");
			var type = document.forms["convertionRateForm"]["type"].value;
			var value1 = document.forms["convertionRateForm"]["value1"].value;
			var value2 = document.forms["convertionRateForm"]["value2"].value;


            typeErr.innerHTML = "" ;
            value1Err.innerHTML = "" ;
            value2Err.innerHTML = "" ;

            if(type === ""){
           	flag = false;
           	tupeErr.innerHTML = "REQUIRED!" ;
           }
           if(value1 === ""){
           	flag = false;
           	value1Err.innerHTML = "REQUIRED!" ;
           }
           if(value2 === ""){
           	flag = false;
           	value2Err.innerHTML = "REQUIRED!" ;
           }

            return flag;
		}
	</script>

</body>
</html>





