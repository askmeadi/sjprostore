
<!--footer start-->
      <footer>

        <div class="container">
        <div class="col-md-12 site-footer-payment">

        <span>Butuh bantuan ? Hubungi 902347121</span>
        <span class="pull-right"><a href="">syarat & ketentuan </a>|<a href=""> kebijakan privasi</a><br>
          <p>Copyright © 2015 sjprostore.com</p>
        </span>

        </div>
        </div>

      </footer>

      <!-- modal signup -->
<div id="modal-signup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
   
    <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">
    <span aria-hidden="true">×</span>
    <span class="sr-only">Close</span>
    </button>
       <!--  <img src="<?=base_url() . 'asset/user/img/logo-sign.png'?>" class="img-responsive" id="logo-modal-sign"> -->

    </div>


    <div class="modal-body">

       <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#signin" data-toggle="tab">Masuk</a></li>
        <li class=""><a href="#signup" data-toggle="tab">Daftar</a></li>
      </ul>

    <div id="myTabContent" class="tab-content">

    <div class="tab-pane fade active in" id="signin">
     
      <div class="form-signup">
      <form action="<?php echo base_url('user/account/signin');?>" id="form-signin" method="POST">
      <div class="form-group">
        <label for="email">Nama</label>
        <input type="text" class="form-control" name="nama">
      </div>
      <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" class="form-control" name="password">
      </div>

      <div class="form-group">
        <p>Belum punya akun ? <a href="#signup" data-toggle="tab">Daftar Sekarang</a></p>
      </div>

      <div class="form-group">
         <button type="submit" class="btn btn-info" id="btn-login">Masuk</button>
        
          <span class="social-buttons">
                  <a href="" class="btn btn-fb" id="facebook_login"><i class="fa fa-facebook"></i>Masuk dengan akun Facebook</a>
          </span>
      </div>

    </form>
    </div>
    </div>

    <div class="tab-pane fade" id="signup">
    
      <div class="info-item">
        <center>Ayo buruan daftar sekarang di sini. Nikmati berbagai keuntungan yang bisa kamu dapatkan hanya dengan menjadi <b>MEMBER</b> sjprostore.com </center>
      </div>
    
      <div class="form-signup">
      <form action="<?php echo base_url();?>user/account/signup" id="form-signup" >
      <div class="form-group">
        <label for="email">Nama</label>
        <input type="text" class="form-control" name="nama">
      </div>
      <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <div class="form-group">
        <label for="pwd">Ulangi Password</label>
        <input type="password" class="form-control" name="repass">
      </div>
      <div class="form-group">
        <p>Sudah punya akun ? <a href="#signin" data-toggle="tab">Masuk</a></p>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-info" id="btn-registration">Daftar</button>
      </div>
      <div class="form-group">
         <p>Dengan klik <b>Daftar</b>, Anda telah menyetujui <a href="">Syarat & Ketentuan</a></p>
      </div>
      
    </form>
    </div>
    </div>

    </div>
    </div><!-- End of Modal body -->
    </div><!-- End of Modal content -->
    </div><!-- End of Modal dialog -->
</div><!-- End of Modal -->
<!-- end -->


<!-- model detail cart -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal-beli" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">

  <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">
    <span aria-hidden="true">×</span>
    <span class="sr-only">Close</span>
    </button>
        <div class="col-md-pull-12">Barang belanja Anda :</div>
<?php if(!$this->cart->contents()):
    echo '
      <div class="info-item">
        <span><center>Keranjang anda kosong, silahkan tambah produk terlebih dahulu</center></span>
      </div>
      ';
else:
?>
  </div>

  <?php foreach ($produk as $data):?>

  <form action="<?=base_url().'produk/shop_cart/coba/'.$data['id_produk']?>" method="POST">

  <?php endforeach; ?>

      <div class="modal-body">
       
<div class="checkout-item-wrapper">
<?php
$i = 0;
foreach ($this->cart->contents() as $items):
  $i++;
  ?>

   <input class="hidden" name="rowid[]" value="<?= $items['rowid']?>">

      <div class="row checkout-item">

        <div class="col-lg-2 col-md-3 col-sm-4">
          <img src="/sjpro/asset/user/img/produk/<?=$items['image']?>" class="img-responsive"> 
        </div>

        <div class="col-lg-4 col-md-3 col-sm-8">
          <div class="item-detail">
            <a class="item-title"><span><?=$items['name'];?></span></a>
            <div class="form-group ">
              <label class="item-label">jumlah</label>
              <div class="col-md-6">
          <input class="hidden" name="jumlah">
          <input type="number" id="qty" step="1" min="1" name="quantity" value="1" class="form-control" size="1" 
        onchange="update()">
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-2 col-md-2">
        <div class="form-group">
            <div class="label label-success">STOK TERSEDIA</div>
          </div>
      </div>

      <span class="item-price pull-right">Rp.<?=number_format($items['price'], 0, ',', ',')?></span>

      </div>

<?php endforeach;?>
</div>
      <div class="subtotal-item">
        <span class="pull-left"><a href="<?= base_url().'produk/shop_cart/clear_cart/' ?>">
        <span class="assets-trash-black pull-left"></span></a></span>
        <span class="subtotal-text">Total Belanja :</span>
        <span class="subtotal-amount" id="total">Rp.<?=number_format($this->cart->total(), 0, ',', ','); ?></span>
      </div>
 
     
      <div class="info-item">
        <span><center>Nikmati program cicilan jika total Keranjang Anda sudah melebihi Nikmati program cicilan jika total Keranjang Anda sudah melebihi <strong>Rp 500,000</strong></center></span>
      </div>
      

     
      <div class="button-checkout-sec">
       
       
          <span class="nav-cart"><a href="<?= base_url().'produk/item/' ?>">Belanja Lagi</a></span>
      
          <span><input type="submit" name="action" class="btn btn-success" value="CHECKOUT"></span>
        
      </div>
      </div>
   
    <?php endif;
?>
</form>

</div>
</div>
</div>
<!-- end -->

      <!--footer end-->


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url() . 'asset/user/js/jquery.js';?>"></script>
    <script src="<?=base_url() . 'asset/user/js/jquery-ui.js';?>"></script>
    <script src="<?=base_url() . 'asset/user/js/jquery.zoomtoo.js';?>"></script>
    <script src="<?=base_url() . 'asset/user/js/bootstrap.min.js';?>"></script>
    <script src="<?=base_url() . 'asset/user/js/bootstrapValidator.min.js';?>"></script>
     <script src="<?=base_url() . 'asset/user/js/nprogress.js';?>"></script>
    <script src="<?=base_url() . 'asset/user/js/intlTelInput.js';?>"></script>
    <script src="<?=base_url() . 'asset/user/js/spin.min.js';?>"></script>
    <!--script for this page-->

<!--checkout kedua -->
<script type="text/javascript">
$(document).ready(function(){

$('#form-edit-user')
        .find('[name="phoneNumber"]')
            .intlTelInput({
                utilsScript: '<?=base_url() . 'asset/user/js/utils.js';?>',
                autoPlaceholder: true,
                preferredCountries: ['id']
            });

var validator = $("#form-edit-user").bootstrapValidator({
  // container: 'tooltip',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
  fields:{
  nama: {
    validators: {
         notEmpty: {
          message: 'Masukkan nama anda'
          },
          stringLength: {
              min: 3,
              max: 30,
              message: 'Nama maksimal terdiri dari 30 huruf'
          }
          }
    },

  email: {
        validators: {
            notEmpty: {
                message: 'Masukkan email anda'
            },
            emailAddress: {
                message: 'Format email salah'
            }
        }
      },

  alamat: {
    validators: {
       notEmpty: {
            message: "Masukkan alamat anda"
       }
     }
    },

  provinsi: {
    validators: {
       notEmpty: {
            message: "Masukkan alamat anda"
       }
     }
    },

  kota: {
    validators: {
       notEmpty: {
            message: "Masukkan alamat anda"
       }
     }
    },

  kecamatan: {
    validators: {
       notEmpty: {
            message: "Masukkan alamat anda"
       }
     }
    },

  kelurahan: {
    validators: {
       notEmpty: {
            message: "Masukkan alamat anda"
       }
     }
    },

   phoneNumber: {
            validators: {
                callback: {
                    message: 'The phone number is not valid',
                    callback: function(value, validator, $field) {
                        return value === '' || $field.intlTelInput('isValidNumber');
                    }
                }
            }
        }
    }


});
});


</script>
<!-- end -->

<script type="text/javascript">
$(document).ready(function(){

$('#form-check')
        .find('[name="phoneNumber"]')
            .intlTelInput({
                utilsScript: '<?=base_url() . 'asset/user/js/utils.js';?>',
                autoPlaceholder: true,
                preferredCountries: ['id']
            });

var validator = $("#form-check").bootstrapValidator({
  // container: 'tooltip',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
  fields:{
  nama: {
    validators: {
         notEmpty: {
          message: 'Masukkan nama anda'
          },
          stringLength: {
              min: 3,
              max: 30,
              message: 'Nama maksimal terdiri dari 30 huruf'
          }
          }
    },

   email: {
        validators: {
            notEmpty: {
                message: 'Masukkan email anda'
            },
            emailAddress: {
                message: 'Format email salah'
            }
        }
      },

  alamat: {
    validators: {
       notEmpty: {
            message: "Masukkan alamat anda"
       }
     }
    },

  provinsi_id: {
    validators: {
       notEmpty: {
            message: "Masukkan alamat anda"
       }
     }
    },

  kota_id: {
    validators: {
       notEmpty: {
            message: "Masukkan alamat anda"
       }
     }
    },

  kecamatan_id: {
    validators: {
       notEmpty: {
            message: "Masukkan alamat anda"
       }
     }
    },

  kelurahan_id: {
    validators: {
       notEmpty: {
            message: "Masukkan alamat anda"
       }
     }
    },

   phoneNumber: {
            validators: {
                callback: {
                    message: 'Nomor telepon tidak valid',
                    callback: function(value, validator, $field) {
                        return value === '' || $field.intlTelInput('isValidNumber');
                    }
                }
            }
        }
    }


});
});


</script>
<!-- end -->

<!--chain dropdwon wilayah dengan ajax -->
<script type="text/javascript">
      $("#provinsi_id").change(function(){
          var selectValues = $("#provinsi_id").val();
          if (selectValues == 0){
            var msg = "Kota / Kabupaten :<br><select name=\"kota_id\" disabled><option value=\"Pilih Kota / Kabupaten\">Pilih Propinsi Dahulu</option></select>";
            $('#kota').html(msg);
          }else{
            var provinsi_id = {provinsi_id:$("#provinsi_id").val()};
            $('#kota_id').attr("disabled",true);
            $.ajax({
              type: "POST",
              url : "<?php echo site_url('produk/payment/select_kota')?>",
              data: provinsi_id,
              success: function(msg){
                $('#kota').html(msg);
              }
            });
          }
      });
</script>

<script type="text/javascript">
     function tampilKecamatan(){
      var selectValues = $("#kota_id").val();
          if (selectValues == 0){
            var msg = "Kota / Kabupaten :<br><select name=\"kota_id\" disabled><option value=\"Pilih Kota / Kabupaten\">Pilih Kabupaten Dahulu</option></select>";
            $('#kecamatan').html(msg);
          }else{
            var kota_id = {kota_id:$("#kota_id").val()};
            $('#kecamatan_id').attr("disabled",true);
            $.ajax({
              type: "POST",
              url : "<?php echo site_url('produk/payment/select_kec')?>",
              data: kota_id,
              success: function(msg){
                $('#kecamatan').html(msg);
              }
            });
          }
     }

      function tampilKelurahan(){
      var selectValues = $("#kecamatan_id").val();
          if (selectValues == 0){
            var msg = "Kota / Kabupaten :<br><select name=\"kota_id\" disabled><option value=\"Pilih Kota / Kabupaten\">Pilih Kecamatan Dahulu</option></select>";
            $('#kelurahan').html(msg);
          }else{
            var kecamatan_id = {kecamatan_id:$("#kecamatan_id").val()};
            $('#kelurahan_id').attr("disabled",true);
            $.ajax({
              type: "POST",
              url : "<?php echo site_url('produk/payment/select_kel')?>",
              data: kecamatan_id,
              success: function(msg){
                $('#kelurahan').html(msg);
              }
            });
          }
     }
</script>


<!-- disable textbox pake radio button -->
<script type="text/javascript">
  function undisable(){
    document.getElementById("inputPass").disabled = false;
  }

  function disable(){
    document.getElementById("inputPass").disabled = true;
  }
</script>

<!-- script edit data user -->
<script type="text/javascript">
   $('#modal-userinfo').on('shown.bs.modal', function(e) {
              var userid = $(e.relatedTarget).data('id');
              $(e.currentTarget).find('input[name="userid"]').val(userid);
              var nama = $(e.relatedTarget).data('nama');
              $(e.currentTarget).find('input[name="nama"]').val(nama);
              var email = $(e.relatedTarget).data('email');
              $(e.currentTarget).find('input[name="email"]').val(email);
              var alamat = $(e.relatedTarget).data('alamat');
              $(e.currentTarget).find('input[name="alamat"]').val(alamat);
              var provinsi = $(e.relatedTarget).data('provinsi');
              $(e.currentTarget).find('input[name="provinsi"]').val(provinsi);
              var kota = $(e.relatedTarget).data('kabupaten');
              $(e.currentTarget).find('input[name="kota"]').val(kota);
              var kecamatan = $(e.relatedTarget).data('kecamatan');
              $(e.currentTarget).find('input[name="kecamatan"]').val(kecamatan);
              var kelurahan = $(e.relatedTarget).data('kelurahan');
              $(e.currentTarget).find('input[name="kelurahan"]').val(kelurahan);
              var telepon = $(e.relatedTarget).data('telepon');
              $(e.currentTarget).find('input[name="phoneNumber"]').val(telepon);
            });
</script>
<!-- end -->


<script type="text/javascript">
$(document).ready(function(){
    $("#description").hide();
    $('#alamat2').prop('disabled', true);
    $('#clases').change(function(){
        if(this.checked)
            $('#description').show('slow'),
            $('#alamat2').prop('disabled', false),
            $('#alamat1').prop('disabled', true);
        else
            $('#description').toggle('slow'),
          $('#alamat2').prop('disabled', true),
            $('#alamat1').prop('disabled', false);
    });
});
</script>
<!-- end -->

<script type="text/javascript">
NProgress.configure({ easing: 'ease', speed: 500 });
NProgress.configure({ trickleRate: 0.02, trickleSpeed: 800 });

$(document).ready(function() {
    NProgress.start();
});
$(window).load(function() {
    //setTimout() for 2 seconds progress stop delay
    setTimeout(function(){NProgress.done()},2000);
});
</script>

  </body>
</html>