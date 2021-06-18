<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#populasi_laki, #populasi_perempuan").keyup(function() {
      var populasi_laki = $("#populasi_laki").val();
      var populasi_perempuan = $("#populasi_perempuan").val();

      var total_ = parseInt(populasi_laki) + parseInt(populasi_perempuan);
      $("#total_").val(total_);
    });
  });
</script>

<title>Tambah Provinsi</title>
<div id="page-wrapper">
  <div class="row col-lg-18">

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>Tambah Data Provinsi</h3>
      </div>
      <div class="panel-body  ">

        <form name="tambah_profil" action="<?php echo base_url() . 'provinsi/input_prov'; ?>" method="post" enctype="multipart/form-data">
          <fieldset>
            <div class="form-row">
              <div class="col">
                <label for="id_prov">ID PRovinsi</label>
                <input type="text" class="form-control" id="id_prov" value="<?= $id; ?>" name="id_prov" readonly required>
              </div>
              <div class="col">
                <label for="nama_prov">Provinsi</label>
                <input type="text" class="form-control" id="nama_prov" placeholder="Masukan Provinsi " name="nama_prov" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="pulau">Pulau</label>
                <input name="pulau" type="text" class="form-control" id="pulau" placeholder="Masukkan Pulau" required>
              </div>
              <div class="col">
                <label for="ibu_kota">Ibu Kota</label>
                <input name="ibu_kota" type="text" class="form-control" id="ibu_kota" placeholder="Masukkan Ibu Kota" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="tgl_diresmikan">Tanggal Diresmikan</label>
                <input type="date" class="form-control" id="tgl_diresmikan" placeholder="Masukkan Tanggal Diresmikan" name="tgl_diresmikan" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="populasi_laki">Populasi Laki-Laki</label>
                <input type="text" class="form-control" id="populasi_laki" placeholder="Masukkan Populasi" name="populasi_laki" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="populasi_perempuan">Populasi Perempuan</label>
                <input type="text" class="form-control" id="populasi_perempuan" placeholder="Masukkan  Populasi" name="populasi_perempuan" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="total_populasi">Total Populasi</label>
                <input type="text" class="form-control" id="total_populasi" placeholder="Masukkan Total Populasi" name="total_populasi" required>
              </div>
              <div class="col">
                <label for="total_populasi">Total </label>
                <input type="text" class="form-control" id="total_" placeholder="Masukkan Total Populasi" name="total_" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="luas_wilayah">Luas Wilayah</label>
                <input type="text" class="form-control" id="luas_wilayah" placeholder="Masukkan  Luas Wilayah" name="luas_wilayah" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="arti_lambang">Arti lambang</label>
                <textarea class="form-control" id="arti_lambang" name="arti_lambang" rows="8"></textarea>

              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="foto">Lambang Provinsi</label>
                <input name="foto" type="file" class="form-control" id="foto" placeholder="Masukkan Foto" aria-describedby="inputGroupPrepend" required>

              </div>
            </div>

            <div class="btn-group">
              <input class="btn btn-success btn-icon-split" name="Tambah" type="submit" value="Tambah" class="btn">
            </div>
            <a class="small" href="<?php echo base_url('provinsi/index') ?>"><button class="btn btn-primary btn-sm btninsert">Kembali</button></a>


          </fieldset>
        </form>
      </div>
    </div>