<div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <h1><a>Adminduk</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
     
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?= base_url() ?>Dashboard/index">Home</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url() ?>Dashboard/faq">F.A.Q</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url() ?>Dashboard/kontak">Kontak</a></li>
           <?php if($this->session->userdata('akses') == 'user') {?>
          <li class="dropdown"><a href="#"><span>Download</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php
              foreach ($form as $r) { ?>
              <li><a href="<?= base_url() ?>User/download_file/<?= $r->id_formulir; ?>"><?= $r->nama_formulir?></a></li>
              <?php } ?>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Kependudukan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>KTP</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="<?= base_url() ?>User/ktp_perubahan">KTP Perubahan</a></li>
                  <li><a href="<?= base_url() ?>User/ktp_hilang">KTP Hilang</a></li>
                  <li><a href="<?= base_url() ?>User/ktp_rusak">KTP Rusak</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Kartu Keluarga</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="<?= base_url() ?>User/kk_baru">KK Baru</a></li>
                  <li><a href="<?= base_url() ?>User/kk_perubahan">KK Perubahan</a></li>
                  <li><a href="<?= base_url() ?>User/kk_hilang">KK Hilang</a></li>
                  <li><a href="<?= base_url() ?>User/kk_rusak">KK Rusak</a></li>
                </ul>
              </li>
              <li><a href="<?= base_url() ?>User/kia">KIA</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Pencatatan Sipil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url() ?>User/akta_kelahiran">Akta Kelahiran</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"> <span>Akun | <?=$this->session->userdata('nama')  ?></span> <i class="bi bi-people"></i></a>
            <ul>
              <li><a href="<?=base_url()?>User/akun_saya">Akun Saya</a></li>
              <li><a href="<?=base_url()?>User/pengajuan_saya">Pengajuan Saya</a></li>
              <li><a href="<?= base_url() ?>Logs/logout" class="nav-link" id="btn-logout">Keluar</a></li>
            </ul>
          </li>
          <?php }else{ ?>
             <li><a class="getstarted scrollto" href="<?= base_url() ?>dashboard/login">Login</a></li>
          <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>