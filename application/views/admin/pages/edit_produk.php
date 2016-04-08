<?php
    $id = $produk->id_produk;
    $nama = $produk->nama_produk;
    $harga = $produk->harga_produk;
    $gambar = $produk->gambar;
    $stok = $produk->stok;
    $garansi = $produk->garansi_produk;
    $jenisgaransi = $produk->jenis_garansi;
    $link = $produk->review;

    $made = $produk->made_produk;
    $deskripsi = $produk->deskripsi_produk;
    $photo = $produk->photo_format;
    $video = $produk->video_format;
    $ports = $produk->ports;
    $storage = $produk->storage;
    $baterai = $produk->baterai;
?>

  <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

		  		<div class="row mt">
			  	<div class="col-lg-12">
          <div class="form-panel">

<form action="<?=base_url().'admin/produk/update/'.$id."/".$produk->id_kategori ?>" enctype="multipart/form-data" class="form-horizontal" id="form-edit" method="POST"> 

            <div class="form-group">

                    <div class="col-xs-4">
                        <label class="control-label">Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk" value="<?= $nama ?>"/>
                    </div>

                    <div class="col-xs-4">
                        <label class="control-label">Kategori</label>
                         <select class="form-control" name="kategori" 
                         onchange="java_script_:show(this.options[this.selectedIndex].value)">
                            <?php foreach ($kategori as $data):?>
                            <option value="<?= $data->id_kategori ?>"><?= $data->nama_kategori ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-xs-4">
                        <label class="control-label">Stok</label>
                        <input type="text" class="form-control" name="stok_produk" value="<?= $stok ?>"/>
                    </div>
               
            </div>

            <div class="form-group">

                    <input class="hidden" name="path" value="<?= $gambar ?>">

                    <div class="col-xs-4">
                        <label class="control-label">Gambar</label>
                        <input type="file" class="form-control" name="userfile"/>
                    </div>

                     <div class="col-xs-4 selectContainer">
                        <label class="control-label">Brand</label> 
                        <select class="form-control" name="brand">
                               <?php foreach ($brand as $key):?>
                                   <option value="<?= $key->id_brand ?>"><?= $key->brand ?></option>
                               <?php endforeach; ?>
                        </select>
                    </div>

                     <div class="col-xs-4">
                        <label class="control-label">Garansi Produk</label>
                        <input type="text" class="form-control" name="garansi_produk" value="<?= $garansi ?>"/>
                    </div>

            </div>

            <div class="form-group">

                    <div class="col-xs-4 selectContainer">
                        <label class="control-label">Jenis Garansi</label>
                        <select class="form-control" name="jenis_garansi">
                            <option value="<?= $jenisgaransi ?>"><?= $jenisgaransi ?></option>
                            <option value="Garansi Toko">Garansi Toko</option>
                            <option value="Garansi Distributor">Garansi Distributor</option>
                            <option value="Garansi Internasional">Garansi Internasional</option>
                        </select>
                    </div>

                   <div class="col-xs-4">
                        <label class="control-label">Made by</label>
                        <input type="text" class="form-control" name="made_produk" value="<?= $made ?>"/>
                    </div>


                     <div class="col-xs-4">
                        <label class="control-label">Harga Produk</label>
                        <input type="text" class="form-control" name="harga_produk" value="<?= $harga ?>"/>
                    </div>

                  <!--   <div class="col-xs-4 selectContainer">
                        <label class="control-label">Status Produk</label>
                        <select class="form-control" name="status_produk">
                            <option value="<?= $status ?>"><?= $status ?></option>
                            <option value="Stok Tersedia">Stok Tersedia</option>
                            <option value="Stok Habis">Stok Habis</option>
                        </select>
                    </div> -->
               
            </div>

              <div class="form-group">

                    <div class="col-xs-12">
                        <label class="control-label">Link Video</label>
                        <input type="text" class="form-control" name="link" value="<?= $link ?>"/>
                    </div>

            </div>

             <div class="form-group">
             <div class="col-xs-12">
                        <label class="control-label">Deskripsi Produk</label>
                        <textarea class="form-control" name="deskripsi_produk" rows="8"><?= $deskripsi ?></textarea>
                    </div>
            </div>

            <?php if($produk->nama_kategori == 'kamera'){ ?>

                <div id="outputArea-1" class="form-group">
                <div class="col-xs-6">
                    <label class="control-label">Photo Format</label>
                    <input type="text" class="form-control" name="photo_format" value="<?= $photo ?>"/>
                </div>

                <div class="col-xs-6">
                    <label class="control-label">Video Format</label>
                    <input type="text" class="form-control" name="video_format" value="<?= $video ?>"/>
                </div>
            </div>

            <div id="outputArea-2" class="form-group">

                    <div class="col-xs-4">
                        <label class="control-label">Ports</label>
                        <input type="text" class="form-control" name="ports" value="<?= $ports ?>"/>
                    </div>

                    <div class="col-xs-4">
                        <label class="control-label">Storage</label>
                        <input type="text" class="form-control" name="storage" value="<?= $storage ?>"/>
                    </div>

                    <div class="col-xs-4">
                        <label class="control-label">Baterai</label>
                        <input type="text" class="form-control" name="baterai" value="<?= $baterai ?>"/>
                    </div>
               
            </div>

            <?php } else { ?>

             <div class="form-group hidden">
                <div class="col-xs-6">
                    <label class="control-label">Photo Format</label>
                    <input type="text" class="form-control" name="photo_format" value="<?= $photo ?>"/>
                </div>

                <div class="col-xs-6">
                    <label class="control-label">Video Format</label>
                    <input type="text" class="form-control" name="video_format" value="<?= $video ?>"/>
                </div>
            </div>

            <div class="form-group hidden">

                    <div class="col-xs-4">
                        <label class="control-label">Ports</label>
                        <input type="text" class="form-control" name="ports" value="<?= $ports ?>"/>
                    </div>

                    <div class="col-xs-4">
                        <label class="control-label">Storage</label>
                        <input type="text" class="form-control" name="storage" value="<?= $storage ?>"/>
                    </div>

                    <div class="col-xs-4">
                        <label class="control-label">Baterai</label>
                        <input type="text" class="form-control" name="baterai" value="<?= $baterai ?>"/>
                    </div>
               
            </div>

            <?php } ?>

           

            <button type="submit" class="btn btn-info">Simpan</button>
      </form>

          </div><!-- /content-panel -->
          </div><!-- /col-lg-4 -->
		  	  </div><!-- /row -->

		</section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->


