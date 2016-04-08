  <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

		  		<div class="row mt">
			  	<div class="col-lg-12">
          <div class="form-panel">

        <?= form_open_multipart('admin/produk/create', ['class'=>'form-horizontal', 'id'=>'form-tambah', 'method'=>'post']) ;?>
            <div class="form-group">
              
                    <div class="col-xs-4">
                        <label class="control-label">Kode Produk</label>
                        <input type="text" class="form-control" name="kode_produk" />
                    </div>

                    <div class="col-xs-4">
                        <label class="control-label">Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk" />
                    </div>

                    <div class="col-xs-4">
                        <label class="control-label">Kategori</label>
                         <select class="form-control" name="kategori" 
                         onchange="java_script_:show(this.options[this.selectedIndex].value)">
                            <option value="">-- Pilih --</option>
                            <?php foreach ($kategori as $data):?>
                            <option value="<?= $data->id_kategori ?>"><?= $data->nama_kategori ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
               
            </div>

            <div class="form-group">

                    <div class="col-xs-4">
                        <label class="control-label">Harga Produk</label>
                        <input type="text" class="form-control" name="harga_produk" />
                    </div>

                    <div class="col-xs-4">
                        <label class="control-label">Gambar</label>
                        <input type="file" class="form-control" name="userfile" />
                    </div>

                    <div class="col-xs-4">
                        <label class="control-label">Stok</label>
                        <input type="text" class="form-control" name="stok_produk" />
                    </div>
               
            </div>

            <div class="form-group">

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
                        <input type="text" class="form-control" name="garansi_produk" />
                    </div>

                    <div class="col-xs-4 selectContainer">
                        <label class="control-label">Jenis Garansi</label>
                        <select class="form-control" name="jenis_garansi">
                            <option value="">-- Pilih --</option>
                            <option value="Garansi Internasional">Garansi Internasional</option>
                            <option value="Garansi Distributor">Garansi Distributor</option>
                            <option value="Garansi Toko">Garansi Toko</option>
                        </select>
                    </div>
               
            </div>

              <div class="form-group">

                    <!--   <div class="col-xs-4 selectContainer">
                        <label class="control-label">Status Produk</label>
                        <select class="form-control" name="status_produk">
                            <option value="">-- Pilih --</option>
                            <option value="Stok Tersedia">Stok Tersedia</option>
                            <option value="Stok Habis">Stok Habis</option>
                        </select>
                    </div> -->

                    <div class="col-xs-4">
                        <label class="control-label">Made by</label>
                        <input type="text" class="form-control" name="made_produk" />
                    </div>

            </div>

             <div class="form-group">
             <div class="col-xs-12">
                        <label class="control-label">Deskripsi Produk</label>
                        <textarea class="form-control" name="deskripsi_produk" rows="8"></textarea>
                    </div>
            </div>

            <div id="outputArea-1" class="form-group hidden">
                <div class="col-xs-4">
                    <label class="control-label">Link Video</label>
                    <input type="text" class="form-control" name="link" />
                </div>

                <div class="col-xs-4">
                    <label class="control-label">Photo Format</label>
                    <input type="text" class="form-control" name="photo_format" />
                </div>

                <div class="col-xs-4">
                    <label class="control-label">Video Format</label>
                    <input type="text" class="form-control" name="video_format" />
                </div>
            </div>

            <div id="outputArea-2" class="form-group hidden">

                    <div class="col-xs-4">
                        <label class="control-label">Ports</label>
                        <input type="text" class="form-control" name="ports" />
                    </div>

                    <div class="col-xs-4">
                        <label class="control-label">Storage</label>
                        <input type="text" class="form-control" name="storage" />
                    </div>

                    <div class="col-xs-4">
                        <label class="control-label">Baterai</label>
                        <input type="text" class="form-control" name="baterai" />
                    </div>
               
            </div>

            <button type="submit" class="btn btn-info">Lanjutkan</button>
        </form>

          </div><!-- /content-panel -->
          </div><!-- /col-lg-4 -->
		  	  </div><!-- /row -->

		</section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->


