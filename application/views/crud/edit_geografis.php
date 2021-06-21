<title>Edit Geografis</title>
<div class="row">
    <div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
            </div>
            <?php foreach ($geo  as $baris) { ?>
                <form class="user" action="<?php echo base_url('geografis/update'); ?>" method="post">

                    <div class="form-group row">
                        <input type="hidden" name="id_geo" value="<?php echo $baris->id_geo; ?>">
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
                    <div class="card-body">
                        <label>Geografis</label>
                        <textarea class="form-control" name="geografis"><?php echo $baris->geografis; ?></textarea>
                    </div>


                    <input class="btn btn-success btn-icon-split" name="Submit" type="submit" value="update" class="btn">
                </form>
                <hr>
                <div class="text-center"><a class="small" href="<?php echo base_url('geografis/index'); ?>">Kembali</a>
                </div>
        </div>
    </div>
</div><?php } ?>
<script>
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })
</script>
<!-- tinyMCE-->
<script type="text/javascript" src="<?php echo base_url('assets/tinymce/tinymce.min.js') ?>"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        plugins: [
            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons template textcolor paste textcolor filemanager"
        ],

        toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
        toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

        menubar: false,
        toolbar_items_size: 'small',
        image_advtab: true,
        style_formats: [{
                title: 'Bold text',
                inline: 'b'
            },
            {
                title: 'Red text',
                inline: 'span',
                styles: {
                    color: '#ff0000'
                }
            },
            {
                title: 'Red header',
                block: 'h1',
                styles: {
                    color: '#ff0000'
                }
            },
            {
                title: 'Example 1',
                inline: 'span',
                classes: 'example1'
            },
            {
                title: 'Example 2',
                inline: 'span',
                classes: 'example2'
            },
            {
                title: 'Table styles'
            },
            {
                title: 'Table row 1',
                selector: 'tr',
                classes: 'tablerow1'
            }
        ],

        templates: [{
                title: 'Test template 1',
                content: 'Test 1'
            },
            {
                title: 'Test template 2',
                content: 'Test 2'
            }
        ]
    });
</script>