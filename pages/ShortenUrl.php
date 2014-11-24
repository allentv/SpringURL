<?php
	$data = $_POST["url"];
	$retVal = "";
	
	if ($data === "1") {
		$retVal = "<a href='http://localhost/springurl/pages/48AyBQp.php'>http://localhost/springurl/pages/48AyBQp.php</a>";
	}
	else if ($data === "2") {
		$retVal = "<a href='http://localhost/springurl/pages/ABCPvtLtd.php'>http://localhost/springurl/pages/ABCPvtLtd.php</a>";
	}
	
	echo $retVal;
?>