      <!-- Page Container START -->
      <div class="page-container">
        <!-- Content Wrapper START -->
        <div class="main-content">
          <div class="card">
            <div class="card-body">
              <h3>Tambah Barang</h3>
              <form method="POST" action="<?= base_url('Barang/addBarang'); ?>">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Barang</label>
                  <input type="text" class="form-control" id="nama" class="nama" name="nama" required>
                </div>
                <div class="mb-3">
                  <label for="jumlah" class="form-label">Jumlah Barang</label>
                  <input type="number" class="form-control" class="jumlah" id="jumlah" name="jumlah" min="1" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
        <!-- Content Wrapper END -->