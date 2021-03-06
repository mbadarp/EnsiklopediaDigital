<?php
// $getUser = $this->session->userdata('session_user');
// $getGrup = $this->session->userdata('session_grup');
?>
<title>Data Provinsi</title>
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
        <h6 class="m-0 font-weight-bold text-primary datatable">Data Provinsi</h6>
        <a href="<?php echo base_url('provinsi/tambah') ?>"><button class="btn btn-primary btn-sm btninsert">+ Input Data</button></a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">ID Provinsi</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Pulau</th>
                <th scope="col">Ibu Kota</th>
                <th scope="col">Tgl Diresmikan</th>
                <th scope="col">Pop. Laki-laki</th>
                <th scope="col">Pop. Perempuan</th>
                <th scope="col">Total Populasi</th>
                <th scope="col">Luas Wilayah</th>
                <th scope="col">Arti Lambang</th>
                <th scope="col">Lambang</th>
                <th scope="col">
                  <center><span>Action</span></center>
                </th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">ID Provinsi</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Pulau</th>
                <th scope="col">Ibu Kota</th>
                <th scope="col">Tgl Diresmikan</th>
                <th scope="col">Pop. Laki-laki</th>
                <th scope="col">Pop. Perempuan</th>
                <th scope="col">Total Populasi</th>
                <th scope="col">Luas Wilayah</th>
                <th scope="col">Arti Lambang</th>
                <th scope="col">Lambang</th>
                <th scope="col">
                  <center><span>Action</span></center>
                </th>
              </tr>
            </tfoot>
            <tbody>
              <?php $no = 1;
              foreach ($prov as $baris) {
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $baris->id_prov; ?></td>
                  <td><?php echo $baris->nama_prov; ?></td>
                  <td><?php echo $baris->pulau; ?></td>
                  <td><?php echo $baris->ibu_kota; ?></td>
                  <td><?php echo $baris->tgl_diresmikan; ?></td>
                  <td><?php echo $baris->populasi_laki; ?></td>
                  <td><?php echo $baris->populasi_perempuan; ?></td>
                  <td><?php echo $baris->total_populasi; ?></td>
                  <td><?php echo $baris->luas_wilayah; ?></td>
                  <td><?php echo  substr($baris->arti_lambang, 0, 100); ?></td>
                  <td><img src="<?php echo base_url(); ?>assets/img/lambang/<?php echo $baris->lambang; ?>" width='100' height='100'></td>


                  <td>
                    <?php

                    echo '<a href="' . base_url('provinsi/edit/' . $baris->id_prov) . '" class="btn btn-success btn-icon-split"><i class="fas fa-edit" style="padding: 5px;"></i></a>';
                    echo "  ";
                    echo '<a href="' . base_url('provinsi/hapus/' . $baris->id_prov) . '" class="btn btn-danger btn-icon-split"><i class="fas fa-trash" style="padding: 5px;"></i></a>';

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