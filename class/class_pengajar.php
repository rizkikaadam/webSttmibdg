<?php
class pengajar extends koneksi
{

	public function tampil_tetap(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_dosen WHERE status='tetap'");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

	public function tampil_lb(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_dosen WHERE status='luar biasa'");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

	public function banyak_dosen(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_dosen");
		$jmlh = mysqli_num_rows($sql);
		return $jmlh;
	}
}

?>
