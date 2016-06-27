      <form class="form-horizontal">
      <div class="row">
        <div class="span8">
            <?php $this->load->view('register/data-pribadi') ?>
       </div>
        <div class="span3 alert">
          <h2>Bantuan layanan</h2>
          <p>Untuk pertanyaan lebih lanjut segera hubungi kami :</p>
          <i class="icon-home"></i> Gedung A Ruang 102.<br />
          <i class="icon-envelope"></i> help [at] safeparking [dot] com<br />
          <abbr title="Phone">P:</abbr> (123) 456-7890
       </div>
      </div>
      <div class="row">
        <div class="span8">
          <?php $this->load->view('register/data-kendaraan') ?>
      </div>
      <div class="row">
        <div class="span8">
          <legend>Berkas</legend>
          <div class="control-group">
              <label class="control-label">Kartu Pengenal</label>
              <div class="controls"> <input type="file" /></div>
          </div>
          <div class="control-group">
              <label class="control-label">STNK</label>
              <div class="controls"> <input type="file" /></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span8">
          <legend>Konfirmasi</legend>
          <div class="form-actions">
            <label class="checkbox">
              <input type="checkbox" value="">
              Saya bertanggung jawab terhadap Data Pribadi dan Data Kendaraan yang Saya sertakan pada halaman ini serta tunduk pada peraturan SafeParking.
            </label>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-danger">Batal</button>
          </div>
        </div>
      </div>
      </form>