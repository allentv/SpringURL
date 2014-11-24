<?php
	
?>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="../css/LinkDetail.css"/>
		<script type="text/javascript" src="../js/jquery-1.8.3.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#LinkDetailDataSection").load(
							"http://stackoverflow.com/questions/26167240/jquery-plugin-for-highlighting-words-blocks-on-click-event",
							function() {
								alert("Page Loaded!");
							}
				);
			});
		</script>
	</head>
	<body>
		<div class="BusinessCard">
			<center>
				<table cellpadding="2" cellspacing="0">
					<tr>
						<td nowrap="false">
							E : <a href="mailto:vargheat@tcd.ie">vargheat@tcd.ie</a>
							<br>
							M : (0)89 965 7732
							<br>
							L : <a href="#">ie.linkedin.com/in/allentv</a>
						</td>
						<td><img src="../images/MyPic.jpg" width="100"></td>
					</tr>
				</table>
			</center>
		</div>
		<div id="LinkDetailDataSection" name="LinkDetailDataSection" class="LinkDetailSection">
			<!--
			<iframe  src="http://stackoverflow.com/questions/26167240/jquery-plugin-for-highlighting-words-blocks-on-click-event" width="100%" height="100%"></iframe>
			-->
		</div>
	</body>
</html>
