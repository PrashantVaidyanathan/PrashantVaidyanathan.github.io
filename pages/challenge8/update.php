<?php 
 $File = "LED.txt"; 
 $Handle = fopen($File, 'a');
 $Data = date("Y-m-d H:i:s"); 
 fwrite($Handle, $Data);
 fwrite($Handle, " <- "); 
 fwrite($Handle, $_SERVER['REMOTE_ADDR']);
 $Data = "\n";  
 fwrite($Handle, $Data); 
 fclose($Handle); 
 ?>