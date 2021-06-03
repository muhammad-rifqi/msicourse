<!--  wrapper -->
<div id="wrapper">
        <!-- navbar top -->

        <?php include APPPATH."views/layout/menu_admin.php" ; ?>

        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">


        <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Mata Pelajaran</h1> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"> <a href="<?= base_url('admin/tambah_mp');?>" class="btn btn-primary"> Add Mata Pelajaran </a> </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Mata Pelajaran 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-mp">
                                    <thead>
                                        <tr>
                                            <th>Nama Pelajaran</th>
                                            <th>Pengajar</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $jumlah = count($mp);
                                    for($i=0;$i<$jumlah;$i++){
                                    ?>
                                        <tr class="gradeU">
                                            <td><?= $mp[$i]['nm_pelajaran'];?></td>
                                            <td class="center"><?= $mp[$i]['id_pengguna'];?></td>
                                            <th><a href="<?= base_url('admin/edit_mp/'.$mp[$i]['id_mp'])?>" class="btn btn-warning">Edit</a></th>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
