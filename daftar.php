<html>

<head>

<title>Form Register</title>

</head>
<form action="proses_daftar.php" method="post">
<body>

<h2>Register here!</h2>

<table>
<tr>
				<td>ID*</td>
				<td><input type="text" name="1"  ></td>
		</tr>
		<tr>
				<td>Username*</td>
				<td><input type="text" name="2" minlength="2"></td>
		</tr>
		<tr>
				<td>Password*</td>
				<td><input type="password" minlength="6" name="3"></td>
		</tr>
		<tr>
				<td>Nama*</td>
				<td><input type="text" name="4"></td>
		</tr>
		<tr>
				<td>Email*</td>
				<td><input type="email" name="5"></td>
		</tr>
		<tr>
				<td>Jenis Kelamin*</td>
				<td>
					<input type="radio" name="6" value="L">Male
					<input type="radio" name="6" value="P">Female
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
			<td>
			Tanda(*) harus di isi
			</td>
		</tr>
		<tr>
				<td><input type="submit" name="submit" value="DAFTAR"></td>
				
		</tr>
</table>
</form>
</body>

</html>


