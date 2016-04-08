<div class="container" >
<section id="main-content">
  <section class="wrapper">

 <div class="process">
    <div class="process-row">
        <div class="process-step">
            <button type="button" class="btn btn-info btn-circle" disabled="disabled"><i class="flaticon-write20"></i></button>
            <p>EMAIL ID</p>
        </div>
        <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="flaticon-user158"></i></button>
            <p>PENGIRIMAN</p>
        </div>
         <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="flaticon-tick7"></i></button>
            <p>PEMBAYARAN</p>
        </div> 
    </div>
</div>


<div class="row">

<div class="col-md-9">
	<div class="col-payment-data-first">
		
	</div>
</div>

<div class="col-md-3">

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
