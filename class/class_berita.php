<?php
class berita extends koneksi
{

	public function tampil_home(){
		$database =parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_berita ORDER BY berita_tanggal desc limit 5");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

	public function tampil_lainnya(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_berita ORDER BY berita_tanggal desc limit 3");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

	public function tampil_berita(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_berita ORDER BY berita_tanggal");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

	public function tampil_foto($id){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_foto_berita WHERE berita_id='$id'");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

	public function tampil_foto_satu($id){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_foto_berita WHERE berita_id='$id' LIMIT 1");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

	public function hitung_foto_berita($id){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_foto_berita WHERE berita_id='$id' LIMIT 1");
		while ($jmlh = mysqli_num_rows($sql))
		return $jmlh;
	}

	public function pilih_berita($id){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_berita WHERE berita_id='$id'");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

	public function hitung_berita(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_berita");
		while ($jmlh = mysqli_num_rows($sql))
		return $jmlh;
	}
}

?>
