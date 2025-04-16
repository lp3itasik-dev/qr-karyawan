<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('template/backend/head') ?>
</head>

<body style="background-color: #00426D;">
 <main id="main" class="main">
    <section class="section profile">
      <div class="row" style="margin-top: 100px;">
        <div class="col-xl-2">
          
        </div>
        <div class="col-xl-5">
          <center>
          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center" style="border-radius: 15px;">
              <?php foreach($bio as $b){}
              ?>
              <img src="<?php echo base_url().'assets/berkas/foto/'.$b->foto;?>" alt="Profile" class="rounded-circle">
              <h2><?= $b->nik ?></h2>
              <h2><?= $b->nama ?></h2>
              <h3><?= $b->jabatan ?></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
            <div><img src="<?php echo base_url().'assets/berkas/bg.jpeg' ?>" class="img-fluid" height="200px" width="270px" style="float: right;"></div>
          </div>
          </center>
        </div>
      </div>
    </section>
 </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  

  <!-- Vendor JS Files -->
  <?php $this->load->view('template/backend/script') ?>

</body>
</html>

