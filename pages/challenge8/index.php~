<!DOCTYPE html>
<html>
	<head>
	
	
	<script type='text/javascript' src='//code.jquery.com/jquery-1.10.1.js'>
	</script>
	<script type='text/javascript'>
		function writeToFile()
		{
			alert("Button Clicked");
		}
	</script>
	<title>
		EC 544 Group C
    </title>
	</head>
    

    <body>
	
		<?php 
		//if(isset($_POST['submit']))
		//{
		if(isset($_POST['ledNumber']) && isset($_POST['ledColor'])){
			$File = "directions.txt";
			$Handle = fopen($File, 'w');
			$LEDnumber = $_POST['ledNumber'];  // Storing Selected Value In Variable
			$LEDcolor = $_POST['ledColor'];
			//echo "You have selected :" .$LEDnumber;  // Displaying Selected Value
			//$LEDnumber = "1";
			$newLine = "\n";
			//$LEDcolor = "r";
			fwrite($Handle, $LEDnumber);
			fwrite($Handle, $newLine);
			fwrite($Handle, $LEDcolor);
			fclose($Handle);
			}
			else
			{
				echo "<script type='text/javascript'>alert('Please make sure you select an LED button and color.');</script>";	
			}
		//}
			 
		?>
        <div align="center">
            <h1 style="font-family:Arial, Helvetica, sans-serif;">EC544</h1>
			
            
			<form action="<?php $_PHP_SELF ?>" method="POST">
			<label style="font-size:20px;margin-right:15px"> Choose the LED you would like to trigger</label>
			<br>
			<input  type="radio" value="1" name="ledNumber" id="n1" > <label style="font-size:20px;margin-right:15px">1</label>
            <input  type="radio" value="2" name="ledNumber" id="n2" > <label style="font-size:20px;margin-right:15px">2</label>
            <input  type="radio" value="3" name="ledNumber" id="n3" > <label style="font-size:20px;margin-right:15px">3</label>
            <input  type="radio" value="4" name="ledNumber" id="n4" > <label style="font-size:20px;margin-right:15px">4</label>
            <input  type="radio" value="5" name="ledNumber" id="n5" > <label style="font-size:20px;margin-right:15px">5</label>
            <input  type="radio" value="6" name="ledNumber" id="n6" > <label style="font-size:20px;margin-right:15px">6</label>
            <input  type="radio" value="7" name="ledNumber" id="n7" > <label style="font-size:20px;margin-right:15px">7</label>
            <input  type="radio" value="8" name="ledNumber" id="n8" > <label style="font-size:20px;margin-right:15px">8</label>
			<br>
			<br>
			<label style="font-size:20px;margin-right:15px"> Choose the color.</label>
			<br>
			
			<select name="ledColor">
				<option value="r">Red</option>
				<option value="g">Green</option>
				<option value="b">Blue</option>
				<option value="w">White</option>
			</select>
			<br>
			<br>
			<input type="submit" value="Trigger LED"/>
			</form>

        </div>

    </body>
</html>
