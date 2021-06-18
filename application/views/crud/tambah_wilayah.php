<div class="row">
    <div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
            </div>

            <form class="user" action="<?php echo base_url('provinsi/add_wilayah'); ?>" method="post">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label font-weight-bold">Provinsi</label>
                    <div class="col-sm-10">
                        <select name="id_prov" class="custom-select" id="id_prov" name="id_prov" required>
                            <option value="" disabled diselected>-- Pilih Provinsi --</option>
                            <?php
                            foreach ($prov as $row) {
                                echo "<option value='" . $row->id_prov . "'>" . $row->nama_prov . "</option>";
                            }
                            echo "</select>"
                            ?>
                            <?= form_error('description', '<small class="form-text text-danger">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label font-weight-bold">Gunung</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="gunung" name="gunung" rows="3"></textarea>
                        <?= form_error('description', '<small class="form-text text-danger">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label font-weight-bold">Danau</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="danau" name="danau" rows="3"></textarea>
                        <?= form_error('description', '<small class="form-text text-danger">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label font-weight-bold">Pantai</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="pantai" name="pantai" rows="3"></textarea>
                        <?= form_error('description', '<small class="form-text text-danger">', '</small>') ?>
                    </div>
                </div>


                <input class="btn btn-success btn-icon-split" name="Tambah" type="submit" value="Tambah" class="btn">
            </form>
            <hr>
            <div class="text-center"><a class="small" href="<?php echo base_url('provinsi/wilayah_prov'); ?>">Kembali</a>
            </div>
        </div>
    </div>
</div>