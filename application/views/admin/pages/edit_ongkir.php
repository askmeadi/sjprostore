<?php
    $id = $ongkir->id_ongkir_jne;
    $kode = $ongkir->city_code;
    $kabupaten = $ongkir->kota_kabupaten;
    $biaya = $ongkir->reguler;
    $estimasi = $ongkir->etd_reguler;
?>

  <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

		  		<div class="row mt">
			  	<div class="col-lg-12">
          <div class="form-panel">

       <form action="<?=base_url().'admin/ongkir/update/'.$id ?>" class="form-horizontal" id="form-edit" method="POST">

            <div class="form-group">

                    <div class="col-xs-6">
                        <label class="control-label">Kode Kota/Kabupaten</label>
                        <input type="text" class="form-control" name="kode" value="<?= $kode ?>"/>
                    </div>

                    <div class="col-xs-6">
                        <label class="control-label">Nama Kota/Kabupaten</label>
                        <input type="text" class="form-control" name="daerah" value="<?= $kabupaten ?>"/>
                    </div>
               
            </div>

            <div class="form-group">

                     <div class="col-xs-6">
                        <label class="control-label">Ongkos Kirim</label>
                        <input type="text" class="form-control" name="biaya" value="<?= $biaya ?>"/>
                    </div>

                     <div class="col-xs-6">
                        <label class="control-label">Estimasi</label>
                        <input type="text" class="form-control" name="estimasi" value="<?= $estimasi ?>"/>
                    </div>

            </div>           

            <button type="submit" class="btn btn-info">Simpan</button>
        </form>

          </div><!-- /content-panel -->
          </div><!-- /col-lg-4 -->
		  	  </div><!-- /row -->

		</section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->


