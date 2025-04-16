<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('template/backend/head') ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <?php $this->load->view('template/backend/header') ?>
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <?php $this->load->view('template/backend/sidebar') ?>
  </aside><!-- End Sidebar-->

 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Karyawan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <div class="card-header">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
                Tambah Data
              </button>
              </div><br>
             
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">QR Code</th>
                    <th scope="col" class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                     
                    foreach ($qr as $q) {
                    $no =1;
                   ?>
                        <tr>
                          <td><?= $q->id_qr ?></td>
                          <td><?= $q->nama ?></td>
                          <td><img style="width: 100px;" src="<?php echo base_url().'assets/berkas/qr/'.$q->qr_code;?>"></td>
                          <td class="text-center">
                            <a href="<?= base_url () ?>Admin/delete_qr?id_qr=<?= $q->id_qr ?>" id="btn-hapus" class="btn btn-sm btn-danger" title="Hapus"><i class="bi bi-trash"></i></a>
                          </td>
                        </tr>
                        <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <?php $this->load->view('template/backend/script') ?>

</body>
<script>
  var flash = $('#flash').data('flash');
  if (flash) {
    Swal.fire({
      icon: 'success',
      tittle: 'Berhasil',
      text: flash
    })
  }
  $(document).on('click', '#btn-hapus', function(e){
    e.preventDefault();
    var link = $(this).attr('href');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data akan dihapus?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = link; 
        }
})
  })
</script>
<div class="modal fade" id="largeModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url() ?>admin/add_qr" method="POST">
      <div class="modal-body">
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <select class="form-select" name="nama">
                <option value="">--Pilih--</option>
                   <?php foreach ($bio as $b) { ?>
                  <option value="<?= $b->nama ?>"><?= $b->nama ?></option>
                  <?php } ?>
            </select>
          </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Link</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="link" required="" autocomplete="off">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
</html>

