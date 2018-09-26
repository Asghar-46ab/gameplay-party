<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>form</title>
	</head>
	<body>
		<form method="post">
			name:<br>
			<input type="text" name="name" value="<?php echo $data['name'];?>"><br>
			phone:<br>
			<input type="text" name="phone" value="<?php echo $data['phone'];?>"><br>
			emails:<br>
			<input type="text" name="email" value="<?php echo $data['email'];?>"><br>
			location:<br>
			<input type="text" name="location" value="<?php echo $data['location'];?>"><br>
			<input type="submit" value="Submit" name="start">
		</form>
	</body>
</html>
