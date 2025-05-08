<center>
<hr>
<h1>MENAMPILKAN GAJI PEGAWAI</h1>
<hr>
<table>
	<?php 
		$namaPegawai = $_POST['namaPegawai'];
		$bagian = $_POST['bagian'];
		$pendidikan = $_POST['pendidikan'];
		$makan = isset($_POST['MAKAN']);
		$trasnport = isset($_POST['TRANSPORT']);
		$anak = isset($_POST['ANAK']);
		$tunjangan = 0;
		

		if($pendidikan == "D3"){
			if($bagian == "IT"){
				$gajiPokok = 3000000;
			}elseif($bagian == "PRODUKSI"){
				$gajiPokok = 4000000;
			}elseif($bagian == "KEUANGAN"){
				$gajiPokok = 3500000;
			}
		}
		elseif($pendidikan == "S1") {
			if($bagian == "IT"){
				$gajiPokok = 7000000;
			}elseif($bagian == "PRODUKSI"){
				$gajiPokok = 5000000;
			}elseif($bagian == "KEUANGAN"){
				$gajiPokok = 4500000;
			}
		}
		elseif($pendidikan == "S2") {
			if($bagian == "IT"){
				$gajiPokok = 9000000;
			}elseif($bagian == "PRODUKSI"){
				$gajiPokok = 8000000;
			}elseif($bagian == "KEUANGAN"){
				$gajiPokok = 6000000;
			}
		}

		if($anak){
			$tjAnak = 0.05 * $gajiPokok;
			$tunjangan += $tjAnak; 

		}
		else {
			$tjAnak = "Tunjangan Anak Tidak di Checklis";
		}
		if($makan){
			$tjMakan = 0.10 * $gajiPokok;
			$tunjangan += $tjMakan; 

		}
		else {
			$tjMakan = "Tunjangan Makan Tidak di Checklis";
		}
		if($trasnport){
			$tjTransport = 0.15 * $gajiPokok;
			$tunjangan += $tjTransport; 

		}else {;
			$tjTransport = "Tunjangan Trasnport Tidak di Checklis";
		}

		$gajiTotal = $gajiPokok + $tunjangan;

		echo"
			<tr><td>Nama Pegawai <td>: $namaPegawai
			<tr><td>Bagian <td>: $bagian
			<tr><td>Pendidikan <td>: $pendidikan
			<tr><td colspan=2><hr>
			<tr><td>Gaji Pokok<td>: $gajiPokok
			<tr><td colspan=2><hr>
			<tr><td>Tunjangan
			<tr><td colspan=2><hr>
			<tr><td>Anak <td>: $tjAnak
			<tr><td>Makan <td>: $tjMakan
			<tr><td>Transport <td>: $tjTransport
			<tr><td colspan=2><hr>
			<tr><td>Gaji Total<td>: $gajiTotal

		";

	?>
</table>
