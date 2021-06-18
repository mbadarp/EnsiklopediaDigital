<?php
// $getUser = $this->session->userdata('session_user');
// $getGrup = $this->session->userdata('session_grup');
?>
<title><?= $title; ?></title>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-1.7.1.min.js"></script>
</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary datatable"><?= $title; ?></h6>
                <a href="<?php echo base_url('provinsi/tambah_wil') ?>"><button class="btn btn-primary btn-sm btninsert">+ Input Data</button></a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Provinsi</th>
                                <th scope="col">Gunung</th>
                                <th scope="col">Danau</th>
                                <th scope="col">Pantai</th>
                                <th scope="col">
                                    <center><span>Action</span></center>
                                </th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Provinsi</th>
                                <th scope="col">Gunung</th>
                                <th scope="col">Danau</th>
                                <th scope="col">Pantai</th>
                                <th scope="col">
                                    <center><span>Action</span></center>
                                </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $no = 1;
                            foreach ($wilayah as $baris) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $baris->nama_prov; ?></td>
                                    <td><?php echo $baris->gunung; ?></td>
                                    <td><?php echo $baris->danau; ?></td>
                                    <td><?php echo $baris->pantai; ?></td>


                                    <td>
                                        <?php

                                        echo '<a href="' . base_url('admin/edit/' . $baris->id_wil) . '" class="btn btn-success btn-icon-split"><i class="fas fa-edit" style="padding: 5px;"></i></a>';
                                        echo "  ";
                                        echo '<a href="' . base_url('admin/hapus/' . $baris->id_wil) . '" class="btn btn-danger btn-icon-split"><i class="fas fa-trash" style="padding: 5px;"></i></a>';

                                        ?>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->