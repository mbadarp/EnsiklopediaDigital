<div class="row">
    <div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit Data Admin</h1>
            </div>
            <?php foreach ($user  as $baris) { ?>
                <form class="user" action="<?php echo base_url('admin/update'); ?>" method="post">
                    <!--aksi diarahkan ke function update di controller mahasiswa -->
                    <div class="form-group">
                        <input type="hidden" name="id_admin" value="<?php echo $baris->id_admin; ?>">
                        <input type="text" class="form-control form-control-user" id="nama_admin" name="nama_admin" placeholder="Masukkan Nama Admin " value="<?php echo $baris->nama_admin; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?php echo $baris->username; ?>" required>
                    </div>

                    <button name="Submit" type="submit" value="update" class="btn btn-primary ">Simpan</button>
                </form>
                <hr>
                <div class="text-center"><a class="small" href="<?php echo base_url('admin') ?>">Kembali</a>
                </div>
        </div>
    </div>
</div><?php } ?>