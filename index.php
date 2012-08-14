<html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>index</title>
		<meta name="description" content="" />
		<meta name="author" content="wordpress" />

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
</head>
<body id="body">
	<?php
	//1. connect databases;
	$link = mysql_connect('localhost', 'root', 'wordpress');
	if (!$link) {
		echo "<p>not connection</p>";
	} else {
		echo "<p> 연결 connection</p>";
	}
	//2. seletcion db
	mysql_select_db('opentutorials');
	mysql_query("set session character_set_connection=utf8;");
	mysql_query("set session character_set_results=utf8;");
	mysql_query("set session character_set_client=utf8;");
	if (!empty($_GET['id'])) {
		$query = "SELECT * FROM topic where id=" . $_GET['id'];
		$result = mysql_query($query);
		$topic = mysql_fetch_assoc($result);
		echo $result . 'inner<br/>';
	}
	echo $result . 'outer';
	?>
	<div>
		<header>
			<h1>Javascript</h1>
		</header>
		<div id="toolbar">
			<input type="button" value="black" onclick="document.getElementById('body').className='black'" />
			<input type="button" value="white" onclick="document.getElementById('body').className='white'" />
		</div>
		<nav>
			<ul>
				<?php
				$sql = "select id, title from topic";
				$result = mysql_query($sql);
				while ($row = mysql_fetch_assoc($result)) {
					echo "<li><a href=\"?id={$row['id']}\">{$row['title']}</a></li>";
				}
				?>
			</ul>
		</nav>
		<article>
			<h2><?=$topic['title'] ?></h2>
			<div>
				<?=$topic['description'] ?>
			</div>
		</article>
	</div>
</body>
</html>
