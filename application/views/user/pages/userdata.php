<div class="container" >
<section id="main-content">
  <section class="wrapper">

<div class="info-data-diri">
      <div class="col-lg-12 info-item">
        <span><center>Isi data dirimu, dengan begitu kamu bisa melakukan pembelian tanpa harus mengisikan data diri lagi</center></span>
      </div>
</div>

<div class="row">

<div class="col-md-9">
  <div class="col-payment-data-first">
    <form class="form-horizontal col-md-offset-3" id="form-check" action="<?php echo base_url('produk/payment/checkout_data');?>">
    <div class="form-group">
        <div class="col-lg-8">
          <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
        </div>
      </div>

      <div class="form-group">
        <div class="col-lg-8">
          <textarea class="form-control" rows="3" id="alamat" name="alamat" placeholder="Alamat"></textarea>
          
        </div>
      </div>

      <div class="form-group">
        <div class="col-lg-8">
<?php
$style_provinsi = 'class="form-control" id="provinsi_id" name="provinsi"';
    echo form_dropdown("provinsi_id",$option_provinsi,'',$style_provinsi);
?>
        </div>
      </div>

      <div class="form-group" id="kota">
        <div class="col-lg-8">
<?php
$style_kabupaten = 'class="form-control" id="kota_id" name="kota" disabled="" onChange="tampilKecamatan()"';
    echo form_dropdown("kota_id", array('Pilih Kabupaten'=>'Pilih Propinsi Dahulu'),'', $style_kabupaten);
?>
        </div>
      </div>

      <div class="form-group" id="kecamatan">
        <div class="col-lg-8">
<?php
$style_kecamatan = 'class="form-control" name="kecamatan" id="kecamatan_id" disabled=""';
    echo form_dropdown("kecamatan_id", array('Pilih Kecamatan'=>'Pilih Kabupaten Dahulu'),'', $style_kecamatan);
?>
        </div>
      </div>

      <div class="form-group" id="kelurahan">
        <div class="col-lg-8">
<?php
$style_kelurahan = 'class="form-control" name="kelurahan" id="kelurahan_id" disabled=""';
    echo form_dropdown("kelurahan_id", array('Pilih Kelurahan'=>'Pilih Kecamatan Dahulu'),'', $style_kelurahan);
?>
        </div>
      </div>

      <div class="form-group">
      <div class="col-lg-8">
     
        <input type="text" class="form-control" name="phoneNumber">
    </div></div>

      <div class="form-group">
        <div class="col-lg-8">
          <button type="submit" class="btn btn-success btn-block" id="btn-checkout-data">SIMPAN</button>
        </div>
      </div>
  </form>
  </div>
</div>

<div class="col-md-3">

<div class="col-payment-data-detail">
<div class="panel panel-default">
  <div class="panel-heading">Informasi</div>
  <div class="panel-body">
<?php if(!$this->cart->contents()):
    echo '<div class="row">
      <div class="col-lg-12 info-item">
        <span><center>Keranjang anda kosong, silahkan tambah produk terlebih dahulu <a href="<?=base_url();?>produk/item/">disini</a></center></span>
      </div>
      </div>';
else:
?>
<?php
$i = 0;
foreach ($this->cart->contents() as $items):
  $i++;
  ?>
   <table class="col-md-12 ">
      <tbody>
          <tr>
             <td class="h5"><strong>Nama</strong></td>
             <td class="pull-right"><?=$items['name'];?></td>
          </tr>
          <tr>
             <td class="h5"><strong>Harga</strong></td>
             <td class="pull-right">Rp.<?=$items['price'];?></td>
          </tr>
          <tr>
             <td class="h5"><strong>Jumlah</strong></td>
             <td class="pull-right"><?=$items['qty'];?></td>
          </tr>
           <tr>
             <td class="h5"><strong>Total</strong></td>
             <td class="pull-right">Rp.<?=number_format($this->cart->total(), 0, ',', ','); ?></td>
          </tr>
      </tbody>
    </table>

<?php endforeach;?>
<?php endif;
?>
  </div>
</div>
</div>

</div>

</div>

 </section>
</section>
</div>
