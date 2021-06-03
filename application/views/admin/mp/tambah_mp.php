<div id="wrapper">
        <?php include APPPATH."views/layout/menu_admin.php" ; ?>
        <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Mata Pelajaran</h1> 
                </div>
            </div>
            <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Tambah Mata Pelajaran
                        </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-lg-12">
                    <form role="form" method="POST" action="<?= base_url('admin/insert_mp')?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Mata Pelajaran</label>
                                <input type="text" class="form-control" name="nm_pelajaran">
                            </div>
                            <div class="form-group">
                                <label>Pengajar</label>
                                <select name="id_pengguna" class="form-control">
                                <?php 
                                    $jumlah = count($pengguna);
                                    for($i=0;$i<$jumlah;$i++){
                                    ?>
                                    <option value='<?= $pengguna[$i]['id_pengguna']?>'><?= $pengguna[$i]['nama']?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>