    <!-- Page Container START -->
    <div class="page-container">
      <!-- Content Wrapper START -->
      <div class="main-content">
        <div class="card">
          <div class="card-body">
            <h3>Edit Bahan Pokok Produksi</h3>
            <?php foreach ($detail as $dtl) : ?>
              <form method="POST" action="<?= site_url('hpp/edit'); ?>">
                <div class="mb-3">
                  <label for="barang" class="form-label">Nama Barang</label>
                  <input type="text" class="form-control" id="barang" value="<?= $dtl['NAMA_BARANG']; ?>" disabled>
                </div>
                <input type="hidden" value="<?= $this->uri->segment(3); ?>" name="id_barang">
                <div class="mb-3">
                  <label for="katun" class="form-label">Kain Katun Biasa Putih</label>
                  <input type="text" class="form-control" id="katun" class="katun" name="katun" value="<?= $dtl['KATUN']; ?>">
                </div>
                <div class="mb-3">
                  <label for="sutra" class="form-label">Kain Sutra</label>
                  <input type="text" class="form-control" class="sutra" id="sutra" name="sutra" value="<?= $dtl['SUTRA']; ?>">
                </div>
                <div class="mb-3">
                  <label for="cat" class="form-label">Cat Painting</label>
                  <input type="text" class="form-control" name="cat" id="cat" value="<?= $dtl['CAT']; ?>">
                </div>
                <div class="mb-3">
                  <label for="pendukung" class="form-label">Benang, Kuas, Tali, Jagang Kayu</label>
                  <input type="text" class="form-control" name="pendukung" id="pendukung" value="<?= $dtl['PENDUKUNG']; ?>">
                </div>
                <div class="mb-3">
                  <label for="tenaga" class="form-label">Tenaga Kerja</label>
                  <input type="text" class="form-control" name="tenaga" id="tenaga" value="<?= $dtl['TENAGA']; ?>">
                </div>
                <div class="mb-3">
                  <label for="jemuran" class="form-label">Jemuran</label>
                  <input type="text" class="form-control" name="jemuran" id="jemuran" value="<?= $dtl['JEMURAN']; ?>">
                </div>
                <div class="mb-3">
                  <label for="mika" class="form-label">Mika</label>
                  <input type="text" class="form-control" name="mika" id="mika" value="<?= $dtl['MIKA']; ?>">
                </div>
                <div class="mb-3">
                  <label for="packaging" class="form-label">Packaging Biasa/Daur Ulang</label>
                  <input type="text" class="form-control" name="packaging" id="packaging" value="<?= $dtl['PACKING']; ?>">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <!-- Content Wrapper END -->

      <script type="text/javascript">
        $('#katun').mask('000.000.000.000', {
          reverse: true
        });
        $('#sutra').mask('000.000.000.000', {
          reverse: true
        });
        $('#cat').mask('000.000.000.000', {
          reverse: true
        });
        $('#pendukung').mask('000.000.000.000', {
          reverse: true
        });
        $('#tenaga').mask('000.000.000.000', {
          reverse: true
        });
        $('#jemuran').mask('000.000.000.000', {
          reverse: true
        });
        $('#mika').mask('000.000.000.000', {
          reverse: true
        });
        $('#packaging').mask('000.000.000.000', {
          reverse: true
        });

        $(document).ready(function() {
          $('#barang').select2({
            allowClear: true
          });
        })
      </script>