    <!-- Page Container START -->
    <div class="page-container">
      <!-- Content Wrapper START -->
      <div class="main-content">
        <div class="card">
          <div class="card-body">
            <h1>OWNER</h1>
            <h3>Bahan Pokok Produksi</h3>
            <div class="mb-3">
              <label for="barang" class="form-label">Nama Barang</label>
              <input type="text" class="form-control" id="barang" value="<?= $brg[0]['NAMA_BARANG']; ?>" disabled>
            </div>
            <form method="POST" action="<?= site_url('hpp/hitung'); ?>">
              <input type="hidden" value="<?= $this->uri->segment(3); ?>" name="id_barang">
              <div class="mb-3">
                <label for="katun" class="form-label">Kain Katun Biasa Putih</label>
                <input type="text" class="form-control" id="katun" class="katun" name="katun">
              </div>
              <div class="mb-3">
                <label for="sutra" class="form-label">Kain Sutra</label>
                <input type="text" class="form-control" class="sutra" id="sutra" name="sutra">
              </div>
              <div class="mb-3">
                <label for="cat" class="form-label">Cat Painting</label>
                <input type="text" class="form-control" name="cat" id="cat">
              </div>
              <div class="mb-3">
                <label for="pendukung" class="form-label">Benang, Kuas, Tali, Jagang Kayu</label>
                <input type="text" class="form-control" name="pendukung" id="pendukung">
              </div>
              <div class="mb-3">
                <label for="tenaga" class="form-label">Tenaga Kerja</label>
                <input type="text" class="form-control" name="tenaga" id="tenaga">
              </div>
              <div class="mb-3">
                <label for="jemuran" class="form-label">Jemuran</label>
                <input type="text" class="form-control" name="jemuran" id="jemuran">
              </div>
              <div class="mb-3">
                <label for="mika" class="form-label">Mika</label>
                <input type="text" class="form-control" name="mika" id="mika">
              </div>
              <div class="mb-3">
                <label for="packaging" class="form-label">Packaging Biasa/Daur Ulang</label>
                <input type="text" class="form-control" name="packaging" id="packaging">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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