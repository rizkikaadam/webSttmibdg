<?php

include ('header.php');

?>
<br>
<div class="row">
  <div class="large-8 columns" style="border-right: 1px solid #E3E5E8;">
    <?php
    $banyak_artikel=$artikel->hitung_artikel();
    if($banyak_artikel==0)
    {
      echo "
        <a href='#' ><i class='step fi-info size-24'></i>Belum terdapat artikel !!</a>
      " ;
    }
    else
    {
      $tampil_artikel=$artikel->tampil_artikel();
    foreach ($tampil_artikel as $data) {
      ?>
      <div class="blog-post">
        <h3><a href="blog-detail.php?id=<?php echo "$data[artikel_id]";?>&jenis=artikel"><?php echo "$data[artikel_judul]";?></a><br/><small><?php echo "$data[artikel_tanggal]";?></small></h3>
        <img class="thumbnail" src="../admin_sttmibdg/assets/gambar/<?php echo "$data[artikel_foto]";?>">
        <p><?php echo substr("$data[artikel_isi]",0,500);?>
          <a href="blog-detail.php?id=<?php echo "$data[artikel_id]";?>&jenis=artikel">baca selengkapnya ...</a>
        </p>
        <div class="callout">
          <ul class="menu simple">
            <li><a href="#">Author: <?php echo "$data[artikel_penulis]";?></a></li>
            <!--<li><a href="#">Comments: 3</a></li>-->
          </ul>
        </div>
      </div>
      <hr>
      <?php }//akhir menampilkan artikel ?>
      <ul class="pagination text-center" role="navigation" aria-label="Pagination">
        <li class="pagination-previous disabled">Previous</li>
        <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
        <li><a href="#" aria-label="Page 2">2</a></li>
        <li><a href="#" aria-label="Page 3">3</a></li>
        <li><a href="#" aria-label="Page 4">4</a></li>
        <li class="ellipsis"></li>
        <li><a href="#" aria-label="Page 12">12</a></li>
        <li><a href="#" aria-label="Page 13">13</a></li>
        <li class="pagination-next"><a href="#" aria-label="Next page">Next</a></li>
      </ul>
      <?php }//akhir menghitung artikel ?>
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
<br/>
<center><a href="">Lainnya...</a></center>
<hr>
<?php
include ('footer.php');
?>
