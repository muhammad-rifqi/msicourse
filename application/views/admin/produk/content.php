  <!--  wrapper -->
  <div id="wrapper">
        <!-- navbar top -->
      
  		<?php include APPPATH."views/layout/menu_admin.php" ; ?>

        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">


        <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PRODUK</h1> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"> <a href="<?= base_url('admin/tambah_produk');?>" class="btn btn-primary"> Add Produk </a> </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Produk 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-produk">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Keterangan</th>
                                            <th>Harga</th>
                                            <th>Foto</th>
                                            <th>Pengajar</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $jumlah = count($produk);
                                    for($i=0;$i<$jumlah;$i++){
                                    ?>
                                        <tr class="gradeU">
                                            <td><?= $produk[$i]['judul'];?></td>
                                            <td><?= $produk[$i]['keterangan'];?></td>
                                            <td><?= number_format($produk[$i]['harga']);?></td>
                                            <td class="center"><img src="<?= $produk[$i]['foto'];?>" width="100"></td>
                                            <td class="center"><?= $produk[$i]['id_pengguna'];?></td>
                                            <th><a href="<?= base_url('admin/edit_produk/'.$produk[$i]['id_produk'])?>" class="btn btn-warning">Edit</a></th>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
