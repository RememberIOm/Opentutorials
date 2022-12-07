<?php
	require("config/config.php");
	require("lib/db.php");
	$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
	$result=mysqli_query($conn, "SELECT * FROM topic");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
		<link href="http://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="target">
	<div class="container">
		<header class="jumbotron text-center">
			<img src="https://s3-ap-northeast-1.amazonaws.com/opentutorialsfile/course/94.png" alt="생활코딩" class="img-circle" id="logo">
			<h1><a href="http://localhost/index.php">JavaScript</a></h1>
		</header>
		<div class="row">
			<nav class="col-md-3">
				<ol class="nav nav-pills nav-stacked">
					<?php
						while($row=mysqli_fetch_assoc($result)){
							echo '<li><a href="http://124.28.143.17/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
					}
					?>
				</ol>
			</nav>
			<div class="col-md-9">
					<article>
						<form action="process.php" method="post">
							<p>
								제목 : <input type="text" name="title">
							</p>
							<p>
								작성자 : <input type="text" name="author">
							</p>
							<p>
								본문 : <textarea name="description"></textarea>
							</p>
							<input type="submit" name="name">
						</form>
					</article>
					<hr>
					<div id="control">
						<div class="btn-group" role="group" aria-label="...">
							<input type="button" value="white" onclick="document.getElementById('target').className='white'" class="btn btn-default btn-lg"/>
							<input type="button" value="black" onclick="document.getElementById('target').className='black'" class="btn btn-default btn-lg"/>
						</div>
						<a href="http://localhost/write.php" class="btn btn-success btn-lg">쓰기</a>
					</div>
			</div>
		</div>
	</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>
