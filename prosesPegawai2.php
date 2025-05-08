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
		$transport = isset($_POST['TRANSPORT']);
		$anak = isset($_POST['ANAK']);
		$tunjangan = 0;

		// Gaji Pokok berdasarkan Pendidikan dan Bagian
		$gajiPokok = [
			"D3" => ["IT" => 3000000, "PRODUKSI" => 4000000, "KEUANGAN" => 3500000],
			"S1" => ["IT" => 7000000, "PRODUKSI" => 5000000, "KEUANGAN" => 4500000],
			"S2" => ["IT" => 9000000, "PRODUKSI" => 8000000, "KEUANGAN" => 6000000]
		];

		// Tentukan gaji pokok berdasarkan pendidikan dan bagian
		$gajiPokok = $gajiPokok[$pendidikan][$bagian] ?? 0;

		// Fungsi untuk menghitung tunjangan
		function hitungTunjangan($cek, $persen, $jenis) {
			return $cek ? $persen * $GLOBALS['gajiPokok'] : "$jenis Tidak di Checklis";
		}

		// Hitung tunjangan
		$tjAnak = hitungTunjangan(cek: $anak, persen: 0.05, jenis: "Tunjangan Anak");
		$tjMakan = hitungTunjangan(cek: $makan, persen: 0.10, jenis: "Tunjangan Makan");
		$tjTransport = hitungTunjangan(cek: $transport, persen: 0.15, jenis: "Tunjangan Transport");

		// Jumlahkan tunjangan
		$tunjangan = ($anak ? $tjAnak : 0) + ($makan ? $tjMakan : 0) + ($transport ? $tjTransport : 0);

		$gajiTotal = $gajiPokok + $tunjangan;

		// Tampilkan hasil
		echo "
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
