
<html>
<head>
	<meta charset="UTF-8">
	<title>day of week</title>
<body>
<?php
	$dayofweek=date("w");
	//echo $dayofweek;

	switch($dayofweek){
		case 1: echo "Monday"; break;
		case 2: echo "Tuesday"; break;
		case 3: echo "Wednesday"; break;
		case 4: echo "Thursday"; break;
		case 5: echo "Friday"; break;
		case 6: echo "Saturday"; break;
		case 7: echo "Sunday"; break;
	}
?>
</body>
</head>
</html>