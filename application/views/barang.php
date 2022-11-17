<!-- page css -->
<link href="<?= base_url('assets/vendors/datatables/dataTables.bootstrap.min.css'); ?>" rel="stylesheet">

<!-- Page Container START -->
<div class="page-container">


  <!-- Content Wrapper START -->
  <div class="main-content">
    <div class="page-header">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <h4>Tabel Barang</h4>
            </div>
            <div class="col-md-6 text-right">
              <a href="barang/tambah" class="btn btn-primary">Tambah Barang</a>
            </div>
          </div>
          <div class="m-t-25">
            <table id="data-table" class="table">
              <thead>
                <tr>
                  <th>ID_Barang</th>
                  <th>Nama Barang</th>
                  <th>Jumlah Barang</th>
                  <th>HPP</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($brg as $barang) :
                ?>
                  <tr>
                    <td><?= $barang['ID_BARANG']; ?></td>
                    <td><?= $barang['NAMA_BARANG']; ?></td>
                    <td><?= $barang['JUMLAH_BARANG']; ?></td>
                    <td><?= $barang['HPP_BARANG']; ?></td>
                    <td><a href="<?= site_url('hpp/index/') . $barang['ID_BARANG']; ?>" class="btn btn-primary">Hitung HPP</a></td>
                  </tr>
                <?php endforeach; ?>
                </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Content Wrapper END -->


    <!-- Core Vendors JS -->
    <script src="<?= base_url('assets/js/vendors.min.js'); ?>"></script>

    <!-- page js -->
    <script src="<?= base_url('assets/vendors/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/datatables/dataTables.bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/pages/datatables.js'); ?>"></script>