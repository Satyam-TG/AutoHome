<?php
$state = $_GET["state"]; // Declares the request as a variable
$textfile = "status3.tgf";
 
if($state == '1' || $state == '0') //checks for valid GET parameters
{
 if($state == '1')
  { $fh = fopen($textfile, 'w');
	fwrite($fh, $state);
    fclose($fh);
	header("Location: d30.html"); // Return to frontend (on.html)
  }
  if($state == '0')
  { $fh = fopen($textfile, 'w');
	fwrite($fh, $state);
    fclose($fh);
	header("Location: d31.html"); // Return to frontend (off.html)
  }
  
}
?>