
<div class="large-4 columns">

  <aside>
      <div class="row column">
      <p class="lead">Profil Kampus</p>
    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
    <ul class="orbit-container">
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
      <?php
        $tampil_profil=$profil->tampil();
        foreach ($tampil_profil as $data) {
        }
        ?>
      <li class="orbit-slide">
        <div>
          <h3 class="text-left">Sejarah</h3>
          <p class="text-justify"><?php echo $data[sejarah];?></p>
        </div>
      </li>
        <!--<li class="orbit-slide">
        <div>
          <h3 class="text-left">Alumni</h3>
          <p class="text-center">Sejak didirikannya STTMI telah melahirkan ahli-ahli Geologi dan Pertambangan yang menyebar di berbagai instansi baik Pemerintahan maupun Swasta di Seluruh Nusantara.</p>
        </div>
      </li>
        <li class="orbit-slide">
        <div>
          <h3 class="text-left">Tenaga Pengajar</h3>
          <p class="text-center">Terdiri dari para ahli yang profesional/pakar di bidang Geologi. Pertambangan dan Linkungan serta keahlian berasal dari Perguruan Tinggi terkemuka seperti ITB, UNPAD, Kopertis Wilayah IV, Instansi Pemerintah serta Swasta lainnya.</p>
        </div>
      </li>-->
    </ul>
        <nav class="orbit-bullets">
      <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
      <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
      <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
    </nav>
  </div>
    </div>
    <div class="row column">
      <p class="lead">Program Studi</p>
      <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
       <ul class="orbit-container">
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
      <li class="orbit-slide">
        <div>
          <p><img class="thumbnail" src="images/01.jpg" width="100%" alt="Photo of Uranus.">Teknik Pertambangan meliputi segala hal yang berhubungan dengan penambangan di darat dan di laut seperti metoda, sistem, tahap-tahap penambangan mulai dari penyelidikan umum hingga development</p>
        </div>
      </li>
        <li class="orbit-slide">
        <div>
          <p><img class="thumbnail" src="images/01.jpg" width="100%" alt="Photo of Uranus.">Program Studi Geologi Meliputi bidang kebumian a.l: mempelajari jenis dan sifat bahan termasuk keberadaan dan potensinya serta pembuatan peta geologi untuk penggunaan dalam industri dan aplikasinya</p>
        </div>
      </li>
    </ul>
        <nav class="orbit-bullets">
      <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
      <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
    </nav>
    </div>
      </div>

    <br>

    <div class="row column">
      <p class="lead"><i class="step fi-calendar size-36"></i>AGENDA</p>
      <?php $banyak_agenda=$agenda->hitung_agenda();
      if ($banyak_agenda==0)
      {
        echo "
          <i class='step fi-info size-24'></i>Belum terdapat Agenda !!" ;
      }
      else
      {
      $tampil_agenda=$agenda->tampil_home();
      foreach ($tampil_agenda as $data_agenda) {
         ?>
          <article class="event">

              <div class="event-date">
                <p class="event-month"><?php echo "$data_agenda[bulan]"; ?></p>
                <p class="event-day"><?php echo "$data_agenda[hari]"; ?></p>
              </div>

              <div class="event-desc">
                <h4 class="event-desc-header"><?php echo "$data_agenda[agenda_judul]"; ?></h4>
                <p class="event-desc-detail"><span class="event-desc-time"></span><?php echo "$data_agenda[agenda_tempat]"; ?></p>
                <a data-open="agenda-<?php echo $data_agenda[agenda_id];?>" class="rsvp button">Details</a>
              </div>


            </article>

            <hr>


            <div class='small reveal' id="agenda-<?php echo $data_agenda[agenda_id];?>" data-reveal>
              <h1><?php echo "$data_agenda[agenda_judul]"; ?></h1><hr/>
              <p><?php echo "$data_agenda[agenda_tanggal]"; ?></p>
              <p><?php echo "$data_agenda[agenda_tempat]"; ?></p>
              <p><?php echo "$data_agenda[agenda_Deskripsi]"; ?></p>
              <button class='close-button' data-close aria-label='Close modal' type='button'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>
            <?php }//akhir menampilkan data agenda
          }//akhir menghitung data agenda?>
    </div>

  </aside>

</div>
