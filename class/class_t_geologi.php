<?php
class t_geologi extends koneksi
{

	public function tampil(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_tekgeo");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

}

?>
