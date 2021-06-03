<div id="wrapper">
        <?php include APPPATH."views/layout/menu_admin.php" ; ?>
        <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PRODUK</h1> 
                </div>
            </div>
            <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Edit Produk
                        </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-lg-12">
                    <form role="form" method="POST" action="<?= base_url('admin/update_produk')?>" enctype="multipart/form-data">
                            <input type="hidden" name='id_produk' value='<?= $produk[0]['id_produk']?>'>
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="judul" value='<?= $produk[0]['judul']?>'>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" rows="3" name="keterangan"><?= $produk[0]['keterangan']?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Foto</label><br>
                                <img src="<?= $produk[0]['foto']?>" width="100">
                            </div>
                            <div class="form-group">
                                <label>Upload</label>
                                <input type="file" name="foto">
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" class="form-control" name="harga" value='<?= $produk[0]['harga']?>'>
                            </div>
                            <div class="form-group">
                                <label>Pengajar</label>
                                <select name="id_pengguna" class="form-control">
                                <?php 
                                    $jumlah = count($pengguna);
                                    for($i=0;$i<$jumlah;$i++){
                                    if($pengguna[$i]['id_pengguna'] == $produk[0]['id_pengguna']){
                                    ?>
                                    <option value='<?= $pengguna[$i]['id_pengguna']?>' selected><?= $pengguna[$i]['nama']?></option>
                                    <?php
                                    }else{
                                    ?>
                                    <option value='<?= $pengguna[$i]['id_pengguna']?>'><?= $pengguna[$i]['nama']?></option>
                                    <?php
                                    }
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