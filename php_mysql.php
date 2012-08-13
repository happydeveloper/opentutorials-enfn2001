<html>
	<body>
		<?php
		$link = mysql('localhost','root','wordpress');
		mysql_select_db('opentutorials');
		$result = mysql_query('SELECT * from topic');
		echo mysql_result($result,2);
		?>
	</body>
</html>
