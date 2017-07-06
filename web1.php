<html>
<head>
   <title>Web</title>
</head>
</body>
   <h2><u>BUKU TAMU</u></h2>
<form action="web2.php" method="get">
   <table border=0>
     <tr>
	    <td><b>Nama</b></td>
		<td><input type="text" name="nama"></td>
	 </tr>
     <tr>
	    <td><b>Jenis Kelamin</b></td>
		<td><input type="radio" checked name="jkel" value="L">Laki laki
			<input type="radio" name="jkel" value="P">Perempuan</td>
	 </tr>
	 <tr>
	    <td><b>Email</b></td>
		<td><input type="text" name="email"></td>
	 </tr>
	 <tr>
	    <td><b>Nama</b></td>
		<td><input type="checkbox" name="minat1">Refreshing
		<input type="checkbox" name="minat2">Mancing
		<input type="checkbox" name="minat3">Camping
		<input type="checkbox" name="minat4">Shopping</td>
	 </tr>
	 <tr>
	    <td><b>Komentar</b></td>
		<td><textarea rows="4" cols="40" name="komentar"></textarea></td>
	 </tr>
	 
	 </table>
	 <input type="submit" value="simpan">
</form>
</body>
</html>