<!DOCTYPE html>
<html>
<head>
		<title>UPDATE ACCOUNT</title>
		<link rel="stylesheet" href="assets/css/main.css" />
		<?php
		require 'koneksi.php';
	
		if (isset($_POST['submit'])) {
				$id 					= $_POST['0'];
				$username			 	= $_POST['1'];
				$password 				= $_POST['2'];
				$nama					= $_POST['3'];
				$email					= $_POST['4'];
				$jk 					= $_POST['5'];
				$usia					= $_POST['6'];
				$alamat					= $_POST['7'];
				$regional				= $_POST['8'];
				$privilage 				= $_POST['9'];
				$quer = mysql_query("UPDATE regiter SET 
					username='$username', 
					nama='$nama', 
					email='$email', 
					jk='$jk', 
					usia='$usia', 
					alamat='$alamat, 
					regional='$regional', 
					privilage='$privilage' WHERE 
					id='$id'");
			if($quer){
					header('location: ./read_user.php');
			} else{
				echo "Gagal Update";
			}
			}
			
		if (isset($_GET['id'])) {
				$id = $_GET['id'];
		$query = mysql_query("SELECT * FROM regiter WHERE id ='$id'");
			$hasil = mysql_fetch_array($query);
			?>
		</head>
		<body>
		<u>Edit Data Berita</u>
		<form method="POST">
				<input type="hidden" name="0" value="<?php echo $hasil[0] ?>">
<table>
		<tr>
				<td>ID*</td>
				<td><input type="text" name="1"></td>
		</tr>
		<tr>
				<td>Username*</td>
				<td><input type="text" name="2"></td>
		</tr>
		<tr>
				<td>Password*</td>
				<td><input type="password" maxlength="10" name="3"></td>
		</tr>
		<tr>
				<td>Nama*</td>
				<td><input type="text" name="4"></td>
		</tr>
		<tr>
				<td>Email*</td>
				<td><input type="text" name="5"></td>
		</tr>
		<tr>
				<td>Jenis Kelamin*</td>
				<td>
					<input type="radio" name="6" value="Male">Male
					<input type="radio" name="6" value="Female">Female
				</td>
		</tr>
		<tr>
				<td>Usia</td>
				<td><input type="text" name="7"></td>
		</tr>
		<tr>
				<td>Alamat</td>
				<td><input type="text" name="8"></td>
		</tr>
		
		<tr>
				<td>Regional</td>
				<td>
					<select name="9">
						<option value="Jawa Tengah">Jawa Tengah</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Barat">Jawa Barat</option>
						<option value="Yogyakarta">Yogyakarta</option>
						<option value="Jakarta">Jakarta</option>
					</select>
				</td>
		</tr>
		<tr>

				<td>Hak Akses</td>
				<td>
					<select name="10">
						<option value="0">User</option>
						<option value="1">Admin</option>
					</select>
				</td>
		</tr>
		<tr>
				<td>Kata Mutiara</td>
				<td><textarea type="text" cols ="25" rows="7" name="8" value="<?php echo $hasil[8] ?>"></textarea></td>
		</tr>
		<tr>
			<td>
			Tanda(*) harus di isi
			</td>
		</tr>

<tr>
		<td><input type="submit" name="submit" value="UPDATE"></td>
</tr>
							</table>
							<?php }?>
		</form>
		</body>
		</html>