<?php

include ('header.php');
$jenis=$_GET[jenis];
$id=$_GET[id];
$berita_tampil=$berita->pilih_berita($id);
$artikel_tampil=$artikel->pilih_artikel($id);
if ($jenis == "berita") {
  foreach ($berita_tampil as $data_berita) {
    $judul = $data_berita[berita_judul];
    $tanggal = $data_berita[berita_tanggal];
    $isi = $data_berita[berita_isi];
    $foto = $data_berita[berita_foto];
    $path = $data_berita[berita_path];
    $penulis = $data_berita[penulis];
  }
}
elseif ($jenis == "artikel") {
  foreach ($artikel_tampil as $data_artikel) {
    $judul = $data_artikel[artikel_judul];
    $tanggal = $data_artikel[artikel_tanggal];
    $isi = $data_artikel[artikel_isi];
    $foto = $data_artikel[artikel_foto];
    $path = $data_artikel[artikel_path];
    $penulis = $data_artikel[penulis];
  }
}

?>

<br>
<div class="row">
  <div class="large-8 columns" style="border-right: 1px solid #E3E5E8;">
      <div class="blog-post">
        <h3><?php echo $judul; ?> <small><?php echo $tanggal; ?> </small></h3>
        <?php 
        if ($jenis == "berita"){ ?>
      <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
      <ul class="orbit-container">
        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
        <?php
          $tampil_foto=$berita->tampil_foto($id);
        foreach ($tampil_foto as $data_foto) {

         ?>
        <li class="orbit-slide">
          <img class="orbit-image" style="height:500px;" src="../admin_sttmibdg/assets/gambar/<?php echo "$data_foto[foto_berita]";?>" alt="Space">
        </li>
        <?php } ?>
      </ul>
    </div>
        <?php 
      }
        elseif ($jenis == "artikel")
        {
          echo "<img class='thumbnail' src='../admin_sttmibdg/assets/gambar/".$foto."'>";
        }
         ?>
        <p><?php echo $isi; ?></p>
        <div class="callout">
          <ul class="menu simple">
            <li><a href="#">Author: <?php echo $penulis; ?></a></li>
            <!--<li><a href="#">Comments: 3</a></li>-->
          </ul>
        </div>
      </div>
      <hr/>
  </div>

  <?php include 'right.php'; ?>
</div>

<hr>

<div class="row column">
  <h4 style="margin: 0;" class="text-center"><i class="step fi-photo size-36"></i>Galeri</h4>
</div>

<hr>

<div class="row small-up-3 medium-up-4 large-up-5">
  <?php
  include('galeri_home.php');
   ?>
</div>
<hr>


<?php
include ('footer.php');
?>
