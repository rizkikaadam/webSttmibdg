<?php

class album extends koneksi
{

	public $album_id;
	public function tampil_album(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_album ORDER BY album_tanggal desc");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}
	public function tampil_foto_album($album_id){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT tbl_foto.`foto_nama`,tbl_foto.`foto_path`,tbl_foto.`foto_tanggal` ,tbl_album.`album_deskripsi`,tbl_foto.`album_id` FROM tbl_album
INNER JOIN tbl_foto ON tbl_album.`album_id`=tbl_foto.`album_id`
WHERE tbl_album.`album_id`='$album_id' LIMIT 1");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

	public function tampil_foto($album_id){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT tbl_foto.`foto_nama`,tbl_foto.`foto_path`,tbl_foto.`foto_id`, tbl_album.`album_deskripsi`,tbl_album.`album_id` FROM tbl_album
INNER JOIN tbl_foto ON tbl_album.`album_id`=tbl_foto.`album_id`
WHERE tbl_album.`album_id`='$album_id'");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

	public function hitung_album(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_album");
		while ($jmlh = mysqli_num_rows($sql))
		return $jmlh;
	}

	public function tampil_foto_home(){
		$database = parent::koneksi_db();
		$sql = mysqli_query($database,"SELECT * FROM tbl_foto ORDER BY foto_tanggal DESC LIMIT 5 ");
		while ($jmlh = mysqli_fetch_array($sql,MYSQLI_ASSOC))
		$data[] = $jmlh;
		return $data;
	}

}

?>
