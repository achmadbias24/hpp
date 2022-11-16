      <!-- Page Container START -->
      <div class="page-container">


        <!-- Content Wrapper START -->
        <div class="main-content">
          <div class="card">
            <div class="card-body">
              <h3>Bahan Pokok Produksi</h3>
              <form>
                <div class="mb-3">
                  <label for="katun" class="form-label">Kain Katun Biasa Putih</label>
                  <input type="text" class="form-control" id="rupiah" name="katun">
                </div>
                <div class="mb-3">
                  <label for="sutra" class="form-label">Kain Sutra</label>
                  <input type="text" class="form-control" id="rupiah" name="sutra">
                </div>
                <div class="mb-3">
                  <label for="cat" class="form-label">Cat Painting</label>
                  <input type="text" class="form-control" id="rupiah" name="cat">
                </div>
                <div class="mb-3">
                  <label for="pendukung" class="form-label">Benang, Kuas, Tali, Jagang Kayu</label>
                  <input type="text" class="form-control" id="rupiah" name="pendukung">
                </div>
                <div class="mb-3">
                  <label for="tenaga" class="form-label">Tenaga Kerja</label>
                  <input type="text" class="form-control" id="rupiah" name="tenaga">
                </div>
                <div class="mb-3">
                  <label for="jemuran" class="form-label">Jemuran</label>
                  <input type="text" class="form-control" id="rupiah" name="jemuran">
                </div>
                <div class="mb-3">
                  <label for="mika" class="form-label">Mika</label>
                  <input type="text" class="form-control" id="rupiah" name="mika">
                </div>
                <div class="mb-3">
                  <label for="packaging" class="form-label">Packaging Biasa/Daur Ulang</label>
                  <input type="text" class="form-control" id="rupiah" name="packaging">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
        <!-- Content Wrapper END -->
        <script type="text/javascript">
          var rupiah = document.getElementById('rupiah');
          rupiah.addEventListener('keyup', function(e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah.value = formatRupiah(this.value, 'Rp. ');
          });

          /* Fungsi formatRupiah */
          function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
              split = number_string.split(','),
              sisa = split[0].length % 3,
              rupiah = split[0].substr(0, sisa),
              ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
              separator = sisa ? '.' : '';
              rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp' + rupiah : '');
          }
        </script>