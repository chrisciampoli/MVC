<html>
<head></head>
	<body>
		<h1>Welcome to Our Website!</h1>
		<hr/>
		<h2>News</h2>
		<h4><?=$data['article']['title'];?></h4>
		<p><?=$data['article']['content'];?></p>
		<p><?echo "<pre>" . print_r($data['test'],true) . "</pre>";?></p>
		<form method="post">
			<input type="text" name="name" id="name"/>
			<input type="text" name="age" id="age"/>
			<input type="submit" name="submit" value="submit"/>
		</form>
	</body>
</html>
