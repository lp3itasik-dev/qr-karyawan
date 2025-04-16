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
      <h1>Data Matakuliah</h1>
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
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Matakuliah</h5>
                <form action="<?= base_url() ?>Admin/add_matkul" method="POST">
                      <label for="inputName5" class="form-label">Kode Matakuliah</label>
                      <input type="text" class="form-control" name="kode_matkul" required="" autocomplete="off"><br>

                      <label for="inputName5" class="form-label">Nama Matakuliah</label>
                      <input type="text" class="form-control" name="nama_matkul" required="" autocomplete="off"><br>

                      <label for="inputName5" class="form-label">SKS</label>
                      <input type="number" class="form-control" name="sks" required="" autocomplete="off"><br>

                      <label for="inputName5" class="form-label">Hari Matakuliah</label>
                      <select class="form-select" name="hari_matkul">
                        <option value="">--Pilih--</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>

                      </select>

                      <label for="inputName5" class="form-label">Jam Mulai</label>
                      <input type="time" class="form-control" name="jam_mulai" required="" autocomplete="off"><br>

                      <label for="inputName5" class="form-label">Jam Selesai</label>
                      <input type="time" class="form-control" name="jam_selesai" required="" autocomplete="off"><br>

                      <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
              </div>
          </div>
        </div>   
        
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body"><br>
             
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Matkul</th>
                    <th scope="col">Nama Matkul</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Hari Matkul</th>
                    <th scope="col">Jam Mulai</th>
                    <th scope="col">Jam Selesai</th>
                    <th scope="col" class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                     
                    foreach ($matkul as $m) {
                    $no =1;
                   ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $m->kode_matkul ?></td>
                          <td><?= $m->nama_matkul?></td>
                          <td><?= $m->sks?></td>
                          <td><?= $m->hari_matkul ?></td>
                          <td><?= $m->jam_mulai?></td>
                          <td><?= $m->jam_selesai ?></td>
                          <td class="text-center">
                            <a href="" class="btn btn-sm btn-secondary" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="" id="btn-hapus" class="btn btn-sm btn-danger" title="Hapus"><i class="bi bi-trash"></i></a>
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
</html>

