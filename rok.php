<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
</head>

<body>

<?php

INCLUDE 'students.php';

$year = [];

foreach($students as $students) {
    #if ('male' !== $students['personal']['gender']) continue;

	while ($date = $students['personal']['dateOfBirth']) {
		
		$year = explode ("-",$date);
		$firstElement = array_shift($year);
		$secendElement = array_shift($year);
		$date++;
	}
	
	#if (isset($years[$year])) $years[$year] = 1; 
        
    #$years[$year]++;
}
	var_dump($year);
?>

</body>
</html>