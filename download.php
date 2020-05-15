
<?php

$file  = $_GET['file'].".pdf" ;
header("content-disposition: attachment; filename=" .urlencode($file));

$fb = fopen($file, "r");

while(!feof($fb)){
echo fread($fb, 8192);
flush();
}

fclose($fb);

?>

<!--fread(length): " The function will stop at the end of the file or when it reaches the specified length,
 whichever comes first."-->