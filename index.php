<html>
<body>
	<?php
		//1. connect databases;
		$link = mysql_connect('localhost','root','wordpress');
		if(!$link){
			echo   "<p>not connection</p>";
		}else{
			echo   "<p>connection</p>";
		}
	?>
</body>
</html>
