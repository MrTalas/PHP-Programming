<?php
	$title = "PHP Variable Title";
	$text = "PHP Variable Text";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
	<meta charset="utf-8">
	<style type="text/css">
		h1{
			color:red;
		}
		p{
			color:blue;
		}
	</style>
</head>
<body>
	<?php
	for($i=0;$i<5;$i++){
		echo "$i";
	}
	?>
	<p style="color:black;"><?="Hello"; ?></p>
	<h1>HTML Title</h1>
	<p>Here is html code</p>
	<h1>
	<?php
		echo "PHP Title !";
	?>
	</h1>
	<p>
	<?php
		echo "PHP paragraph !";
	?>
	</p>
	<h1>
	<?php
		echo "$title";
	?>
	</h1>
	<p>
	<?php
		echo "$text";
	?>
	</p>
	<br>

</body>
</html>