<?php
class unduh extends koneksi
{

	public function tampil_home(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_unduh ORDER BY tanggal_unduh desc limit 3");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

	public function tampil_unduh_materi(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_unduh WHERE jenis='materi' ORDER BY tanggal_unduh DESC");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

	public function tampil_unduh_tugas(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_unduh WHERE jenis='tugas' ORDER BY tanggal_unduh DESC");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

	public function tampil_unduh_lainnya(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_unduh WHERE jenis='lainnya' ORDER BY tanggal_unduh DESC");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

	public function hitung_unduh(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_unduh");
		while ($jmlh = mysqli_num_rows($sql))
		return $jmlh;
	}

	public function hitung_materi(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_unduh WHERE jenis='materi'");
		while ($jmlh = mysqli_num_rows($sql))
		return $jmlh;
	}

	public function hitung_tugas(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_unduh WHERE jenis='tugas'");
		while ($jmlh = mysqli_num_rows($sql))
		return $jmlh;
	}

	public function hitung_lainnya(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_unduh WHERE jenis='lainnya'");
		while ($jmlh = mysqli_num_rows($sql))
		return $jmlh;
	}

}

?>
