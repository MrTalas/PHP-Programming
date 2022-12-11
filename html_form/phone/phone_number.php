<?php
	if($_POST){
		echo "Post var ! <hr>";
		$phone = $_POST['phone_number'];
		if(!is_numeric($phone)){
			echo "Telefon numarası hatalı !";
			header("Refresh:2");
		}
		else{
			echo "Telefon numarası doğru !";
		}
	}
	else{
		echo "Post yok ! <hr>";

		?>


		<!DOCTYPE html>
		<html>
		<head>
			<title>Başlık</title>
			<meta charset="utf-8">
		</head>
		<body>
			<form method="POST" action="">
				<input type="text" name="phone_number" placeholder="Örn:(5553332222)" required maxlength="10" minlength="10">
				<input type="submit" value="Gönder">
			</form>
		</body>
		</html>



		<?php
	}


?>