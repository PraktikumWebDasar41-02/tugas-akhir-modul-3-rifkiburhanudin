
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="out.php" method="post" enctype="multipart/form-data">

		
		Foto : <input type="file" name="file"><br>
		<input type="submit" name="Update">

		
	</form>

</body>
</html>
 
<?php
 include "db.php";
 
 $nama = $_POST['nama'];
 $password = $_POST['password'];
 $file = $_FILES['file']['name'];

 $conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
 $mysqli = "INSERT INTO table_form (Nama, password, Foto) VALUES ('$nama', '$password', '$file')";
 $result = mysqli_query($conn, $mysqli);
 echo "Data Berhasil di Inputkan<br><br>";
 mysqli_close($conn);

 
echo "Nama : $nama <br> NIM : $password <br> Foto : $file";
echo "<img src = 'foto/k1.jpg'>";
echo "<img src = 'foto/k2.jpg'>";
echo "<img src = 'foto/".$file."'>";
?>
