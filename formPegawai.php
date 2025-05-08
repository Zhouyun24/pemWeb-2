<html>
	<center>
	<body>
		<h1>Form Pegawai</h1>
		<hr>
		<form action="prosesPegawai.php" method="POST">
			<table>
				<tr><td>Nama Pegawai</td><td>: <input type="text" name="namaPegawai" required></td></tr>
				<tr>
					<td>Bagian</td>
					<td>
						: <select name="bagian" required>
							<option value="IT" name="IT" >IT</option>
							<option value="PRODUKSI" name="PRODUKSI">PRODUKSI</option>
							<option value="KEUANGAN" name="KEUANGAN">KEUANGAN</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Pendidikan</td>
					<td>
						: 
						<input type="radio" name="pendidikan" value="D3" required>D3
						<input type="radio" name="pendidikan" value="S1">S1  
						<input type="radio" name="pendidikan" value="S2">S2
					</td>
				</tr>
				<tr>
					<td>Tunjangan</td>
					<td>
						: 
						<input type="checkbox" name="MAKAN">MAKAN	
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						:
						<input type="checkbox" name="TRANSPORT">TRANSPORT
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						:
						<input type="checkbox" name="ANAK">ANAK
					</td>
				</tr>
			</table>
			<hr>
			<input type="submit" value="Proses">
			<input type="reset" value="Reset">
		</form>
	</body>
</html>