<?php
class artikel extends koneksi
{

	public function tampil_home(){
		$getLink=parent::koneksi_db();
		$sql = mysqli_query($getLink,"SELECT * FROM tbl_artikel ORDER BY artikel_tanggal desc limit 4");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

	public function tampil_lainnya(){
		$getLink=parent::koneksi_db();
		$sql = mysqli_query($getLink,"SELECT * FROM tbl_artikel ORDER BY artikel_tanggal desc limit 3");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

	public function tampil_artikel(){
		$getLink=parent::koneksi_db();
		$sql = mysqli_query($getLink,"SELECT * FROM tbl_artikel ORDER BY artikel_tanggal");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}
	public function hitung_artikel(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_artikel");
		while ($jmlh = mysqli_num_rows($sql))
		return $jmlh;
	}
	public function pilih_artikel($id){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_artikel WHERE artikel_id='$id'");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}
}

?>
