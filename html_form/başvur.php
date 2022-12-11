<?php
	error_reporting(0);
	if($_POST){
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$lessons = $_POST['lessons'];
		$time = $_POST['time'];
		if(empty($gender)){
			echo "Cinsiyet Boş bırakılmamalıdır !";
		}
		else if(empty($lessons)){
			echo "Eğitim Seçimi Boş bırakılmamalıdır !";
		}
		else{
			echo "Kayıt Başarılı ! <br>";
			echo "Ad-soyad : $name  <br>";
			echo "Cinsiyet : $gender  <br>";
			echo "Alınacak Ders :";
			foreach ($lessons as $key => $value) {
				echo $value;
			}
			echo "<br>";
			echo "Zaman : $time";
		}


		
	}
	else{

	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Başvuru Formu</title>
	<meta charset="utf-8">
</head>
<body style="text-align:center">
	<h1>Başvuru Formu</h1>
	<hr>
	<form method="POST" action="">
		<h2>Youtube Başvuru Yap</h2>
		<h3>Ad-soyad</h3>
		<input type="text" name ="name" placeholder="Ad-soyad" minlength="5" maxlength="20" required>
		<h3>Cinsiyet</h3>
		<input type="radio" name="gender" value="Bay">Bay
		<input type="radio" name="gender" value="Bayan">Bayan
		<h3>Eğitim Seçimi</h3>
		<input type="checkbox" name="lessons[]" value="HTML">HTML
		<input type="checkbox" name="lessons[]" value="CSS">CSS
		<input type="checkbox" name="lessons[]" value="PHP">PHP
		<br><br>
		<select name="time">
			<option value="morning">Morning</option>
			<option value="afternoon">Afternoon</option>
		</select>
		<hr>
		<input type="submit" value="Gönder">
	</form>
</body>
</hmtl>