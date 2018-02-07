<?php

$myRange_1=$_POST<'myRange_1'>;
$myRange_2=$_POST<'myRange_2'>;
$data=$myRange_1.",".$myRange_2;


$file="malayalam.csv";


file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
print "<h1 align=center>Thank you for submitting your email address!</h1>";


?>
<html>
<head>
<title>ThankYou Page</title>    
</head>
<body>
<h1><a href="Familiarity_Ratings_for_Malayalam_Words.html">GO BACK</a> </h1>    
    
</body>




</html>