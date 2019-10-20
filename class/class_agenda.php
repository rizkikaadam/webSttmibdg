<?php

class agenda extends koneksi
{

	public function tampil_home(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT agenda_id,agenda_tanggal,agenda_tempat,agenda_judul, SUBSTR(MONTHNAME(agenda_tanggal),1,3) AS bulan,DAYOFMONTH(agenda_tanggal) AS hari,YEAR(agenda_tanggal) AS tahun FROM tbl_agenda ORDER BY agenda_tanggal ASC LIMIT 3");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

	public function tampil_agenda(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_agenda ORDER BY agenda_tanggal desc");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

	public function hitung_agenda(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_agenda");
		while ($jmlh = mysqli_num_rows($sql))
		return $jmlh;
	}

}

?>
