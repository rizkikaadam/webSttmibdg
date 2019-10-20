<?php

include ('header.php');

?>

<br>

<div class="row">
  <div class="medium-8 columns">
    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
      <ul class="orbit-container">
        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
        <?php
        $tampil_banner=$banner->tampil();
        foreach ($tampil_banner as $data_banner) {

         ?>
        <li class="orbit-slide">
          <img class="orbit-image" style="height:500px;" src="images/<?php echo "$data_banner[banner]";?>" alt="Space">
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="medium-4 columns">
      <h5><i class="step fi-info size-36"></i>Info Penting</h5><hr/>
    <ul class="accordion" data-accordion>
      <?php
      $banyak_info=$info->hitung_info();
      if($banyak_info==0)
      {
        echo "<li class='accordion-item' data-accordion-item>
          <a href='#' class='accordion-title'><i class='step fi-info size-24'></i>Belum terdapat Info Terbaru !!</a>
        </li>" ;
      }
      else
      {
        $tampil_info=$info->tampil_home();
      foreach ($tampil_info as $data_info) {
        echo "<li class='accordion-item' data-accordion-item>
          <a data-open='info-$data_info[info_id]' class='accordion-title'><i class='step fi-info size-24'></i>$data_info[info_judul]</a>
        </li>" ;
        echo"
        <div class='small reveal' id='info-$data_info[info_id]' data-reveal>
          <h1>$data_info[info_judul]</h1><hr/>
          <p>$data_info[info_deskripsi]</p>
          <button class='close-button' data-close aria-label='Close modal' type='button'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>";//popup info
        }
      } ?>
    </ul>

  </div>
  <div class="medium-4 columns">
      <h5><i class="step fi-download size-36"></i>Unduh</h5><hr/>
    <ul class="accordion" data-accordion>
      <?php
      $banyak_unduh=$unduh->hitung_unduh();
      if ($banyak_unduh==0)
      {
        echo "<li class='accordion-item' data-accordion-item>
          <a href='#' class='accordion-title'><i class='step fi-info size-24'></i>Belum terdapat Unduhan !!</a>
        </li>" ;
      }
      else
      {
      $tampil_unduh=$unduh->tampil_home();
      foreach ($tampil_unduh as $data_unduh) {
        echo "<li class='accordion-item' data-accordion-item>
          <a data-open='unduh-$data_unduh[unduh_id]' class='accordion-title'><i class='step fi-download size-24'></i>$data_unduh[judul_unduh]</a>
        </li>" ;
        echo"
        <div class='small reveal' id='unduh-$data_unduh[unduh_id]' data-reveal>
          <h1>$data_unduh[judul_unduh]</h1><hr/>
          <p>$data_unduh[keterangan]</p><hr/>
          <a href='images/$data_unduh[file_unduh]' download><i class='step fi-download size-36'></i>Download Disini</a>
          <button class='close-button' data-close aria-label='Close modal' type='button'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>";//popup unduh
      }
    }//akhir hitung unduhan?>
    </ul>
  </div>
</div>
 <!--
<hr>

<div class="row column">
  <h4 style="margin: 0;" class="text-center">LATEST STORIES</h4>
</div>-->

<hr>

<div class="row">
  <div class="large-8 columns" style="border-right: 1px solid #E3E5E8;">
      <ul class="tabs" data-tabs id="example-tabs">
          <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Berita</a></li>
          <li class="tabs-title"><a href="#panel2">Artikel</a></li>
        </ul>

        <div class="tabs-content" data-tabs-content="example-tabs">
          <div class="tabs-panel is-active" id="panel1">
              <?php
              $banyak_berita=$berita->hitung_berita();
              if($banyak_berita==0)
              {
                echo "
                  <a href='#' ><i class='step fi-info size-24'></i>Belum terdapat Berita !!</a>
                " ;
              }
              else
              {
                $tampil_berita=$berita->tampil_home();
              foreach ($tampil_berita as $data) {
                ?>
            <div class="row">
              <div class="large-6 columns">
                <p><img src="admin/assets/gambar/<?php echo "$data[berita_foto]";?>" alt="<?php echo "$data[berita_judul]";?>"></p>
              </div>
              <div class="large-6 columns">
                <!--<span class="secondary label">Penulis</span> <span class="secondary label"><i class="step fi-comment-quotes size-14" ></i>  &nbsp;&nbsp;Comment</span> <span class="secondary label">Baca</span>-->
                <h5><a href="blog-detail.php?id=<?php echo "$data[berita_id]";?>&jenis=berita"><?php echo "$data[berita_judul]";?></a></h5>
                <p>
                  <span><i class="fi-torso"> &nbsp; <?php echo "$data[penulis]";?></i></span><br/>
                  <span><i class="fi-calendar"> &nbsp; <?php echo "$data[berita_tanggal]";?></i></span>
                  <!--<span><i class="fi-comments"> 6 comments</i></span>-->
                </p>
                <p><?php echo substr("$data[berita_isi]",0,200);?>
                  <a href="blog-detail.php?id=<?php echo "$data[berita_id]";?>&jenis=berita">baca selengkapnya ...</a>
                </p>
                </div>
            </div>
              <hr/>
              <?php }//akhir menampilkan berita ?>
            <?php }//akhir menghitung berita ?>
          </div>
          <div class="tabs-panel" id="panel2">
            <?php
            $banyak_artikel=$artikel->hitung_artikel();
            if($banyak_artikel==0)
            {
              echo "
                <a href='#' ><i class='step fi-info size-24'></i>Belum terdapat Artikel !!</a>
              " ;
            }
            else
            {
              $tampil_artikel=$artikel->tampil_home();
            foreach ($tampil_artikel as $data) {
              ?>
              <div class="row">
                <div class="large-6 columns">
                  <p><img src="admin/assets/gambar/<?php echo "$data[artikel_foto]";?>" alt="<?php echo "$data[artikel_judul]";?>"></p>
                </div>
                <div class="large-6 columns">
                  <!--<span class="secondary label">Penulis</span> <span class="secondary label"><i class="step fi-comment-quotes size-14" ></i>  &nbsp;&nbsp;Comment</span> <span class="secondary label">Baca</span>-->
                  <h5><a href="blog-detail.php?id=<?php echo "$data[artikel_id]";?>&jenis=artikel"><?php echo "$data[artikel_judul]";?></a></h5>
                  <p>
                    <span><i class="fi-torso"> &nbsp; <?php echo "$data[penulis]";?></i></span><br/>
                    <span><i class="fi-calendar"> &nbsp; <?php echo "$data[artikel_tanggal]";?></i></span>
                    <!--<span><i class="fi-comments"> 6 comments</i></span>-->
                  </p>
                  <p><?php echo substr("$data[artikel_isi]",0,500);?>
                    <a href="blog-detail.php?id=<?php echo "$data[artikel_id]";?>&jenis=artikel">baca selengkapnya ...</a>
                  </p>
                  </div>
              </div>
              <hr/>
              <?php }//akhir menampilkan berita ?>
            <?php }//akhir menghitung berita ?>
          </div>
        </div>
  <article>
    </article>

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
