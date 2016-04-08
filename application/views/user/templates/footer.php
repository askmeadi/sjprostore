
<!--footer start-->
     <footer class="site-footer">

        <a href="#" class="go-top">
          <div class="btn-go-top"><i class="glyphicon glyphicon-chevron-up"></i></div>
        </a>
        <div class="container" >
        <div class="wrapper" id="wrapFooter">
            <div class="row" id="rowFooter">

              <div class="col-md-2">
                 <p id="titleFooter-ext"> CUSTOMER SERVICE</p>
                 <a href="<?=base_url();?>produk/rent/location">
                  <img src="/sjpro/asset/user/img/call-center.png" class="img-responsive">
                  </a>
             
              </div>


               <div class="col-md-1">
                
              </div>


              <div class="col-md-2">
                 <p id="titleFooter"> BANTUAN</p>
                    <ul>
                        <li> <a href="<?php echo base_url();?>info/panduan/"> Cara Belanja </a> </li>
                        <li> <a href="<?php echo base_url();?>info/panduan/"> Status Pesanan </a> </li>
                        <li> <a href="<?php echo base_url();?>info/panduan/term"> Kebijakan privasi </a> </li>
                    </ul>
              </div>

              <div class="col-md-1">
                
              </div>

               <div class="col-md-2">
                <p id="titleFooter"> LAYANAN</p>
                    <ul>
                        <li> <a href="<?php echo base_url();?>info/panduan/"> COD</a></li>
                        <li> <a href="<?=base_url();?>produk/rent/"> Sewa Kamera</a></li>
                    </ul>
              </div>

              <div class="col-md-1">
                
              </div>

              <div class="col-md-3">
                <p id="titleFooter"> SJPRO STORE</p>
                <a href="#" class="btn btn-primary btn-md btn-block">Tentang Kami</a>
                <a href="#" class="btn btn-primary btn-md btn-block">Blog</a>
                <a href="<?=base_url();?>produk/rent/location" class="btn btn-primary btn-md btn-block">Lokasi</a>
              </div>

            </div>
          
        </div>
   
    <hr>

<div class="block-footer-second">

    <div class="social-icon">
      <b class="social-links__label">Temukan Kami di :</b>
      <ul class="social-links__list">
        <li class="social-links__item">
          <a class="social-links__link social-links__link--facebook" href=""></a>
        </li>
         <li class="social-links__item">
          <a class="social-links__link social-links__link--twitter" href=""></a>
        </li>
        <li class="social-links__item">
          <a class="social-links__link social-links__link--youtube" href=""></a>
        </li>
        <li class="social-links__item">
          <a class="social-links__link social-links__link--instagram" href=""></a>
        </li>
      </ul>
    </div>

    <div class="subs-block">
    
      <div class="input-group">
      <input type="text" class="form-control">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Subscribe</button>
      </span>
      </div>
   
    </div>

</div>
   
    </div>

      </footer>
      <div class="col-lg-12" id="footer-tambahan">
        <div class="row">
       <div class="container" >
       
        <p>Copyright © 2015 sjprostore.com toko online kamera terpercaya pilihan anda. All Rights Reserved.<br/>
          <a href="">syarat & ketentuan </a>|<a href=""> kebijakan privasi</a></p>
    
      </div>
      </div>
      </div>
      <!--footer end-->


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

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url() . 'asset/user/js/jquery.js';?>"></script>
    <script src="<?=base_url() . 'asset/user/js/jquery-ui.js';?>"></script>
    <script src="<?=base_url() . 'asset/user/js/jquery.zoomtoo.js';?>"></script>
    <script src="<?=base_url() . 'asset/user/js/bootstrap.min.js';?>"></script>
    <script src="<?=base_url() . 'asset/user/js/bootstrapValidator.min.js';?>"></script>
    <script src="<?=base_url() . 'asset/user/js/nprogress.js';?>"></script>
    <script src="<?=base_url() . 'asset/user/js/spin.min.js';?>"></script>
    <script src="<?=base_url() . 'asset/user/js/isotope.pkgd.min.js';?>"></script>
    <!--script for this page-->

<!--autocomplete search-->
<script type="text/javascript">
$(function(){

  var oldFn = $.ui.autocomplete.prototype._renderItem;

          $.ui.autocomplete.prototype._renderItem = function( ul, item) {

              var t = String(item.value).replace(
                new RegExp(this.term, "gi"),
                "<span class='ui-state-highlight'>$&</span>");

              return $( "<li></li>" )
                  .data( "item.autocomplete", item )
                  .append( "<a>" + t + "</a>" )
                  .appendTo( ul );
          };

  $("#keyword").autocomplete({
    source: "<?= site_url('produk/autocomplete/GetDataProduk');?>", // path to the get_birds method
    minLength : 3,
        dataType:'JSON',
        type:'POST',

  });
});
</script>
<!-- end -->

<!-- modal registrasi -->
<script type="text/javascript">
$(document).ready(function(){

var validator = $("#form-signup").bootstrapValidator({
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
            message: 'Nama tidak boleh kosong'
        },
        different: {
            field: 'password',
            message: 'Nama tidak boleh sama denga password'
        },
        regexp: {
            regexp: /^[a-zA-Z]+$/i,
            message: 'Nama hanya boleh menggunakan huruf alphabet'
        }
    }
    },

  password: {
    validators: {
       notEmpty: {
            message: "kolom tidak boleh kosong"
       },

     different: {
            field : "nama",
            message : "email & password tidak boleh sama"
       },
      stringLength: {
           max: 20,
           message: "Karakter tidak boleh melebihi 20"
       }
     }
    },

    repass: {
    validators: {
       notEmpty: {
            message: "kolom tidak boleh kosong"
       },

     identical: {
             field: "password",
             message: "Kolom harus sama dengan password sebelumnya"
       },
      stringLength: {
           max: 40,
           message: "Karakter tidak boleh melebihi 40"
       }
     }
    }
  }

}).on('success.form.bv', function(e) {
            // Prevent form submission
            e.preventDefault();

            var $form = $(e.target),
                bv    = $form.data('bootstrapValidator');

var form = $("#form-signup");
// $("#btn-registration").click(function(){
$.ajax({
        type:"POST",
        url:form.attr("action"),
        data:form.serialize(),

        success: function(msg){
        $("#modal-signup").html(msg)
        $("#form-content").modal('hide');
        window.location.reload(true);
         },
        error: function(){
        alert("failure");
        }
    });
});
});


</script>
<!-- end -->

<!-- tabs vertical -->
<script type="text/javascript">
$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>
<!-- end -->


    <!-- alert -->
    <script type="text/javascript">
        $("#alert").alert();
        window.setTimeout(function() {
        $("#alert").fadeOut(); }, 4000);
    </script>


<!-- button scroll top -->
<script type="text/javascript">
    $(document).ready(function(){

    $(window).scroll(function(){
        if ($(this).scrollTop() > 500) {
            $('.go-top').fadeIn('slow');
        } else {
            $('.go-top').fadeOut('slow');
        }
    });

    $('.go-top').click(function(){
        $('html, body').animate({scrollTop : 0}, 1000);
        return false;
    });

});
</script>


<!-- slider product catalog -->
<script type="text/javascript">
  $('#myCarousel').carousel({
  interval: 4000
})

$('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }

    next.children(':first-child').clone().appendTo($(this));
  }
});
</script>


<script type="text/javascript">
$("#demo").zoomToo({

// duration in ms
showDuration: 500,
moveDuration: 500,

// initial zoom level

magnify: 1,

// width / height of the lens

lensWidth: 50,

lensHeight: 50
});

</script>

<script type="text/javascript">
  function update(){
    var harga = <?php foreach ($produk as $data) {
	echo $data['harga_produk'];
}
?>;
  var kuantitas = $('#qty').val();
  // alert();
  var total = harga*kuantitas;
    $('#modal-beli #total').html('Rp.'+total);
  }
</script>

<!-- alert hide otomatis -->
<script type="text/javascript">
    $(".alert").alert();
    window.setTimeout(function() {
    $(".alert").fadeOut(); }, 3000);
</script>
<!-- end -->

<!-- isotope plugin sorting -->
<script type="text/javascript">
var $grid = $('.grid').isotope({
  getSortData: {
    name: '.name',
    number: '.number parseFloat',
    category: '[data-category]'
  }
   
});

$grid.isotope({
  sortAscending: {
    name: true,
    number: false
  }
});

// sort items on button click
$('.sort-by-button-group').on( 'click', 'button', function() {
  var sortByValue = $(this).attr('data-sort-by');
  $grid.isotope({ sortBy: sortByValue });
});
</script>
<!-- end -->

<!-- email subscribe -->
<script type="text/javascript">
$(document).ready(function() {
    $('#form-subscribe').submit(function() {
        $('#response').html('Mengirim email...');
        $.getJSON('<?=base_url();?>user/data/ajax_subscribe', {
                'email-subscribe':$('#email-subscribe').val(),
            }, function(data){
            if (data.success == true){
                $("input").val('');
            }
            $('#response').html(data.message);
            $('#response').delay(5000).fadeOut('slow');
        });
        return false;
    });
});
</script>
<!-- end -->

<!-- analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64788622-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- end -->



<!-- coba -->
<script type="text/javascript">
  $('.bcheck').change(function(){
    var checked = $(this).is(':checked');

    //get checkbox value
      var brandarray = new Array();   
      $('input[name="bcheck"]:checked').each(function(){      
        brandarray.push($(this).val());   
      });
      var brand_checklist = "&bcheck="+brandarray;
      var main_string = brand_checklist;
      main_string = main_string.substring(1, main_string.length)

    if(checked){  
            
      //if checked
      $.ajax({
        url: "<?=base_url();?>produk/filter/filter_produk",
        type: "POST",
        data: main_string, 
        // data: {jenis:val},
        cache: false,
          success: function(html){
            $("#coba").html(html);    
            $("#coba").css("opacity",1);
            $("#loader").css("opacity",0);
          },
          error:function(html){
            alert("error");
          }
        });

  }else{

      //if unchecked
      $.ajax({
        url: "<?=base_url();?>produk/filter/uncheck",
        type: "POST",
        data: main_string, 
        cache: false,
          success: function(html){
            $("#coba").html(html);    
            $("#coba").css("opacity",1);
            $("#loader").css("opacity",0);
          },
          error:function(html){
            alert("error");
          }
        });
  }

  })

</script>

<script type="text/javascript">
$(function(){
    var lastScrollTop = 0, delta = 5;
    $(window).scroll(function(event){
       var st = $(this).scrollTop();
       
       if(Math.abs(lastScrollTop - st) <= delta)
          return;
       
if (st > lastScrollTop){
       // downscroll code
    $("#header").css("top","-120px")
       .hover(
           function() {
               $("#header").css("top","0px");
           }
       )
   } else {
      // upscroll code
      $("#header").css("top","0px");
   }
       lastScrollTop = st;
    });
});
</script>

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