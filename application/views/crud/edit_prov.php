<div class="row">
  <div class="col-lg-7">
    <div class="p-5">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Edit User</h1>
      </div>
      <?php foreach ($prov  as $baris) { ?>
        <form class="user" action="<?php echo base_url('provinsi/update_provinsi'); ?>" method="post">
          <!--aksi diarahkan ke function update di controller mahasiswa -->
          <fieldset>
            <div class="form-row">
              <div class="col">
                <label for="id_prov">ID PRovinsi</label>
                <input type="text" class="form-control" id="id_prov" value="<?php echo $baris->id_prov; ?>" name="id_prov" readonly required>
              </div>
              <div class="col">
                <label for="nama_prov">Provinsi</label>
                <input type="text" class="form-control" id="nama_prov" value="<?php echo $baris->nama_prov; ?>" placeholder="Masukan Provinsi " name="nama_prov" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="pulau">Pulau</label>
                <input name="pulau" type="text" class="form-control" id="pulau" value="<?php echo $baris->pulau; ?>" placeholder="Masukkan Pulau" required>
              </div>
              <div class="col">
                <label for="ibu_kota">Ibu Kota</label>
                <input name="ibu_kota" type="text" class="form-control" id="ibu_kota" value="<?php echo $baris->ibu_kota; ?>" placeholder="Masukkan Ibu Kota" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="tgl_diresmikan">Tanggal Diresmikan</label>
                <input type="date" class="form-control" id="tgl_diresmikan" value="<?php echo $baris->tgl_diresmikan; ?>" placeholder="Masukkan Tanggal Diresmikan" name="tgl_diresmikan" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="populasi_laki">Populasi Laki-laki</label>
                <input type="text" class="form-control" id="populasi_laki" value="<?php echo $baris->populasi_laki; ?>" placeholder="Masukkan Tanggal Populasi" name="populasi_laki" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="populasi">Populasi</label>
                <input type="text" class="form-control" id="populasi_perempuan" value="<?php echo $baris->populasi_perempuan; ?>" placeholder="Masukkan Tanggal Populasi" name="populasi_perempuan" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="populasi">Populasi</label>
                <input type="text" class="form-control" id="total_populasi" value="<?php echo $baris->total_populasi; ?>" placeholder="Masukkan Tanggal Populasi" name="total_populasi" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="luas_wilayah">Luas Wilayah</label>
                <input type="text" class="form-control" id="luas_wilayah" value="<?php echo $baris->luas_wilayah; ?>" placeholder="Masukkan Tanggal Luas Wilayah" name="luas_wilayah" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="arti_lambang">Arti lambang</label>
                <textarea class="form-control" id="arti_lambang" name="arti_lambang" rows="8"> <?php echo $baris->arti_lambang; ?></textarea>

              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="foto">Lambang Provinsi</label>
                <input name="foto" type="file" class="form-control" id="foto" placeholder="Masukkan Foto" value="<?php echo $baris->lambang; ?>" aria-describedby="inputGroupPrepend" src="<<?php echo base_url(); ?>asset/img/lambang/<?php echo $baris->lambang; ?>" required>

              </div>
            </div>

            <div class="btn-group">
              <input class="btn btn-success btn-icon-split" name="Update" type="submit" value="update" class="btn">
            </div>
            <a class="small" href="<?php echo base_url('provinsi/index') ?>"><button class="btn btn-primary btn-sm btninsert">Kembali</button></a>


          </fieldset>
        </form>
        <hr>
        <div class="text-center"><a class="small" href="<?php echo base_url('admin') ?>">Kembali</a>
        </div><?php } ?>
    </div>
  </div>
</div>