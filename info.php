<?php

include ('header.php');

?>

<br>
<div class="row">
  <div class="large-8 columns" style="border-right: 1px solid #E3E5E8;">

      <?php
      $banyak_info=$info->hitung_info();
      if ($banyak_info==0){
        echo "<li class='accordion-item' data-accordion-item>
          <a href='#' class='accordion-title'><i class='step fi-info size-24'></i>Belum Terdapat Info !!</a>
        </li>" ;
      }
      else {
        ?>
          <div class="tabs-panel is-active" id="panel1">
            <div class="row">
              <ul class="accordion" data-accordion>
              <?php
              $tampil_info=$info->tampil_info();
              foreach ($tampil_info as $data) {
              ?>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title"><i class='step fi-download size-24'></i><?php echo "$data[info_judul]"; ?></a>
                  <div class="accordion-content" data-tab-content>
                        <h1><?php echo "$data[info_judul]"; ?></h1><?php echo "$data[info_tanggal]"; ?><br/><hr/>
                        <p><?php echo "$data[info_deskripsi]"; ?></p>
                  </div>
                </li>
              <?php
            }
              ?>
              </ul>
            </div>
          </div>
  <article>
    </article>

    <?php }//akhir perhitungan unduh ?>
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
