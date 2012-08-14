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
		//2. seletcion db
		mysql_select_db('opentutorials');
		mysql_query("set session character_set_connect=utf8");
		mysql_query("set session character_set_results=utf8");
		mysql_query("set session character_set_client=utf8");
		if(!empty($_GET['id'])){
			$query = "SELECT * FROM topic where id=".$_GET['id'];
			$result = mysql_query($query);
			$topic = mysql_fetch_assoc($result);
			echo $result.'inner<br/>';
		}
		echo $result.'outer';
	?>
</body>
</html>
