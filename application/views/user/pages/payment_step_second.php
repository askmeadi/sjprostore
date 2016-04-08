<div class="container" >
<section id="main-content">
  <section class="wrapper">

 <div class="process">

<div class="row">

<div class="col-md-7">
  <div class="col-payment-data-first">
    <form class="form-horizontal" id="form-check" action="<?= base_url('produk/payment/checkout_data');?>" 
      method="POST">

    <h4 class="colorgraph_title">ALAMAT PENGIRIMAN</h4>
     <div class="form-group">
        <div class="col-lg-12">
     <hr class="colorgraph">
      </div>
      </div>
     
    <div class="form-group">
        <div class="col-lg-8">
          <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
        </div>
      </div>

      <div class="form-group">
        <div class="col-lg-8">
          <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        </div>
      </div>

      <div class="form-group">
        <div class="col-lg-12">
          <textarea class="form-control" rows="3" id="alamat1" name="alamat" placeholder="Alamat"></textarea>
        </div>
      </div>

      <div class="form-group">
        <div class="col-lg-12">
          <div class="checkbox">
          <label>
            <input type="checkbox" name="clases" id="clases"> Pengiriman ke alamat lain
          </label>
          </div>
        </div>
      </div>

      <div class="form-group" id="description">
        <div class="col-lg-12">
          <textarea class="form-control" rows="3" id="alamat2" name="alamat" placeholder="Alamat Lain"></textarea>
        </div>
      </div>

      <div class="form-group">
        <div class="col-lg-8">
<?php
$style_provinsi = 'class="form-control" id="provinsi_id"';
    echo form_dropdown("provinsi_id",$option_provinsi,'',$style_provinsi);
?>
        </div>
      </div>

      <div class="form-group" id="kota">
        <div class="col-lg-8">
<?php
$style_kabupaten = 'class="form-control" disabled="" onChange="tampilKecamatan()"';
    echo form_dropdown("kota_id", array('Pilih Kabupaten'=>'Pilih Propinsi Dahulu'),'', $style_kabupaten);
?>
        </div>
      </div>

      <div class="form-group" id="kecamatan">
        <div class="col-lg-8">
<?php
$style_kecamatan = 'class="form-control" disabled=""';
    echo form_dropdown("kecamatan_id", array('Pilih Kecamatan'=>'Pilih Kabupaten Dahulu'),'', $style_kecamatan);
?>
        </div>
      </div>

     <!--  <div class="form-group" id="kelurahan">
        <div class="col-lg-8">
<?php
$style_kelurahan = 'class="form-control" disabled=""';
    echo form_dropdown("kelurahan_id", array('Pilih Kelurahan'=>'Pilih Kecamatan Dahulu'),'', $style_kelurahan);
?>
        </div>
      </div> -->

      <div class="form-group">
      <div class="col-lg-8">
        <input type="text" class="form-control" name="phoneNumber">
      </div>
      </div>

      <div class="form-group">
        <div class="col-lg-4">
          <button type="submit" class="btn btn-success btn-block" id="btn-checkout-data">Lanjutkan</button>
        </div>
      </div>
  </form>
  </div>
</div>

<div class="col-md-5">

<div class="col-payment-data-detail">
<div class="panel panel-default">
  <div class="panel-heading">Detail Order</div>
  <div class="panel-body">
<?php if(!$this->cart->contents()):
    echo '<div class="row">
      <div class="col-lg-12 info-item">
        <span><center>Keranjang anda kosong, silahkan tambah produk terlebih dahulu <a href="<?=base_url();?>produk/item/">disini</a></center></span>
      </div>
      </div>';
else:?>
           
            <table class="order_scroll_table_header">
            <thead>
              <tr>
                <th class="left_align">Produk </th>
                <th class="qty">Jumlah </th>
                <th class="right_align">Harga </th>
              </tr>
            </thead>
            </table>
            <div class="order_scrollable">

<?php
$i = 0;
foreach ($this->cart->contents() as $items):
  $i++;
  ?>

            <table class="order_scroll_table">
            <tbody>
              <tr>
                <td><?=$items['name'];?></td>
                <td class="qty"><?=$items['qty'];?></td>
                <td class="right_align"><?=$items['price'];?></td>
              </tr>
            </tbody>
            </table>

<?php endforeach;?>

            </div>
            <hr class="order_scrollable_line">

            <div class="order_scrollable">
            <table class="order_scroll_table_header">
            <tbody>
              <tr>
                <th class="left_align">Sub Total </th>
                <th class="right_align">Rp.<?=number_format($this->cart->total(), 0, ',', ','); ?> </th>
              </tr>
            </tbody>
            </table>
            <table class="order_scroll_table_header">
            <tbody>
               <tr>
                 <p class="note_red">(*) Sub total belum termasuk biaya pengiriman</p>
              </tr>
            </tbody>
            </table>
            </div>

<?php endif;
?>
  </div>
</div>
</div>

</div>

</div>
   
</div>



 </section>
</section>
</div>
