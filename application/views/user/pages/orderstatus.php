
    <div class="row">
        <div class="col-sm-12 col-md-12">
          
                    <?php if (empty($results)) {
echo '
 
   <div id="panel-notfound" class="alert alert-danger"> <h4>Oopsss...</h4><p>Maaf, data order yang anda cari tidak di temukan.</p></div>';
} else {?>
  <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Jumlah</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Status</th>
                       
                    </tr>
                </thead>
                <tbody>
<?php foreach ($results as $row) {?>

                    <tr>
                        <td class="col-sm-8 col-md-6 text-center"><?=$row->nama_produk;?></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                            <?=$row->jumlah_produk;?>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><?=$row->harga;?></td>
                        <td class="col-sm-1 col-md-1 text-center"><span class="label label-danger"><?=$row->status;?></span></td>
                        <td class="col-sm-1 col-md-1">
                       
                    </tr>
                    
<?php }}
?>
                </tbody>
            </table>

            <div class="pull-right">
                <a href="<?= base_url()."produk/itemcollection"; ?>" type="button" class="btn btn-danger"><i class="glyphicon glyphicon-step-backward"></i> Back</a>
            </div>

        </div>
    </div>
</div>

</section>
</section>
