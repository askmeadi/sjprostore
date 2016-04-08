</section>
<footer></footer>


<!-- modal edit status order -->
<div class="modal fade" id="edit-status" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
        
            <div class="label label-success">
              <strong>Status Order :</strong>
            </div>
            <form class="form-horizontal" action="<?= base_url();?>admin/produk/edit" id="form-statusorder" method="POST">
            <input type="hidden" name="idfaktur" value="">
            <div class="input-group">
               <select class="form-control" name="status">
                  <option value="">-- Pilih --</option>
                  <option value="paid">Paid</option>
                  <option value="expired">Expired</option>
                  <option value="canceled">Canceled</option>
                </select>
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i></button>
              </span>
            </div>
          </form>
  
          </div>
          </div>
</div>
<!-- end -->

<!-- modal edit status order -->
<div class="modal fade" id="edit-statusprod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
        
            <div class="label label-success">
              <strong>Status Produk :</strong>
            </div>
            <form class="form-horizontal" action="<?= base_url();?>admin/produk/edit_statusprod" id="form-statusprod" method="POST">
            <input type="hidden" name="idproduk" value="">
            <div class="input-group">
               <select class="form-control" name="status_produk">
                  <option value="">-- Pilih --</option>
                  <option value="Stok Tersedia">Stok Tersedia</option>
                  <option value="Stok Habis">Stok Habis</option>
                </select>
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i></button>
              </span>
            </div>
          </form>
  
          </div>
          </div>
</div>
<!-- end -->

<!-- modal edit status order -->
<div class="modal fade" id="edit-stok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
        
            <div class="label label-success">
              <strong>Stok Produk :</strong>
            </div>
            <form class="form-horizontal" action="<?= base_url();?>admin/produk/edit_stok" id="form-stok" method="POST">
            <input type="hidden" name="idproduk" value="">
            <div class="input-group">
              <input type="text" class="form-control" name="stok_produk"/>
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i></button>
              </span>
            </div>
          </form>
  
          </div>
          </div>
</div>
<!-- end -->
 

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url() . 'asset/admin/js/jquery.js';?>"></script>
    <script src="<?=base_url() . 'asset/admin/js/jquery.tablesorter.js';?>"></script>
    <script src="<?=base_url() . 'asset/admin/js/bootstrap.min.js';?>"></script>
    <script src="<?=base_url() . 'asset/user/js/bootstrapValidator.min.js';?>"></script>
    <script src="<?=base_url() . 'asset/admin/js/jquery.dcjqaccordion.2.7.js';?>"></script>
    <script src="<?=base_url() . 'asset/admin/js/jquery.scrollTo.min.js';?>"></script>
    <script src="<?=base_url() . 'asset/admin/js/common-scripts.js';?>"></script>
    <script src="<?=base_url() . 'asset/admin/js/icheck.js';?>"></script>

<!-- modal registrasi -->
<script type="text/javascript">
$(document).ready(function(){

var validator = $("#form-tambah").bootstrapValidator({
  // container: 'tooltip',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
  fields:{
  id_produk: {
    validators: {
        notEmpty: {
            message: 'Email tidak boleh kosong'
        }
    }
    },

  nama_produk: {
    validators: {
       notEmpty: {
            message: "kolom tidak boleh kosong"
       },

      stringLength: {
           max: 50,
           message: "Karakter tidak boleh melebihi 40"
       }
     }
    },

    harga_produk: {
    validators: {
       notEmpty: {
            message: "kolom tidak boleh kosong"
       },

      stringLength: {
           max: 40,
           message: "Karakter tidak boleh melebihi 40"
       }
     }
    },

    stok_produk: {
    validators: {
       notEmpty: {
            message: "kolom tidak boleh kosong"
       },

      stringLength: {
           max: 40,
           message: "Karakter tidak boleh melebihi 40"
       }
     }
    },

    status_produk: {
    validators: {
       notEmpty: {
            message: "kolom tidak boleh kosong"
       },

      stringLength: {
           max: 40,
           message: "Karakter tidak boleh melebihi 40"
       }
     }
    },

    userfile: {
    validators: {
       notEmpty: {
            message: "kolom tidak boleh kosong"
       }
     }
    },

   brand: {
    validators: {
       notEmpty: {
            message: "kolom tidak boleh kosong"
       }
     }
    },

    made_produk: {
    validators: {
       notEmpty: {
            message: "kolom tidak boleh kosong"
       },

      stringLength: {
           max: 40,
           message: "Karakter tidak boleh melebihi 40"
       }
     }
    },

    garansi_produk: {
    validators: {
       notEmpty: {
            message: "kolom tidak boleh kosong"
       },

      stringLength: {
           max: 40,
           message: "Karakter tidak boleh melebihi 40"
       }
     }
    },

    jenis_garansi: {
    validators: {
       notEmpty: {
            message: "kolom tidak boleh kosong"
       },

      stringLength: {
           max: 40,
           message: "Karakter tidak boleh melebihi 40"
       }
     }
    },

    deskripsi_produk: {
    validators: {
       notEmpty: {
            message: "kolom tidak boleh kosong"
       }
     }
    },

     photo_format: {
    validators: {
        notEmpty: {
            message: 'Email tidak boleh kosong'
        }
    }
    },

  video_format: {
    validators: {
       notEmpty: {
            message: "kolom tidak boleh kosong"
       },

      stringLength: {
           max: 50,
           message: "Karakter tidak boleh melebihi 40"
       }
     }
    },

    ports: {
    validators: {
       notEmpty: {
            message: "kolom tidak boleh kosong"
       },

      stringLength: {
           max: 40,
           message: "Karakter tidak boleh melebihi 40"
       }
     }
    },

    storage: {
    validators: {
       notEmpty: {
            message: "kolom tidak boleh kosong"
       },

      stringLength: {
           max: 40,
           message: "Karakter tidak boleh melebihi 40"
       }
     }
    },

    baterai: {
    validators: {
       notEmpty: {
            message: "kolom tidak boleh kosong"
       },

      stringLength: {
           max: 40,
           message: "Karakter tidak boleh melebihi 40"
       }
     }
    }
  }

});

});


</script>
<!-- end -->
<!-- end -->

    <!-- Ini JS buat hide icon menu -->
    <script type="text/javascript">
      $('.sub-menu').click(function(){
      // toggle icon
      $(this).find("#panah").toggleClass("glyphicon glyphicon-chevron-right glyphicon glyphicon-chevron-down");
    });
    </script>


    <script type="text/javascript">
    $(document).ready(function() {
      $("input[name='cekbox']").click(function() {
        var checked = $(this).attr("checked");
        $("#myTable tr td input:checkbox").attr("checked", checked);
      });
    });
  </script>

  <!-- alert -->
    <script type="text/javascript">
        $("#alert").alert();
        window.setTimeout(function() {
        $("#alert").fadeOut(); }, 4000);
    </script>

    <!-- alert -->
    <script type="text/javascript">
        $(".alert").alert();
        window.setTimeout(function() {
        $(".alert").fadeOut(); }, 4000);
    </script>

    <!-- sorting tabel -->
    <script type="text/javascript">
    $(function(){
      $("#myTable").tablesorter();
    });
    </script>
    <!-- end -->

<script type="text/javascript">
    var url = window.location.href;
   $('.sidebar-menu li a[href="'+ url +'"]').addClass('active');
</script>

<script type="text/javascript">
  function hapus(id){
    $('#modalDeleteProduk #hapusprodukid').val('id');
  }
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#edit_produk").click(function(){
        var id = $(this).data('id_produk');

        $("#inputId").val(id);
      
    });
  });
</script>

<!-- icheck plugin -->
<script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_square-blue',
    radioClass: 'iradio_square',
    increaseArea: '20%' // optional
  });
});
</script>
<!-- end -->

<!-- ajax post form tambah admin  -->
<script type="text/javascript">
$(document).ready(function(){

var validator = $("#formtambahadmin").bootstrapValidator({
  container: 'tooltip',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
  fields:{

  nama: {
    validators: {
       notEmpty: {
            message: "kolom tidak boleh kosong"
       },

      stringLength: {
           max: 50,
           message: "Karakter tidak boleh melebihi 40"
       }
     }
    },

    password: {
    validators: {
       notEmpty: {
            message: "kolom tidak boleh kosong"
       },

      regexp: {
            regexp: /^[a-zA-Z0-9]+$/i,
            message: 'Hanya boleh menggunakan huruf dan angka'
        },

      stringLength: {
           max: 40,
           message: "Karakter tidak boleh melebihi 40"
       }
     }
    }
  
  }

});
});
</script>
<!-- end -->

<script type="text/javascript">
  $('#edit-status').on('shown.bs.modal', function(e) {
  var idfaktur = $(e.relatedTarget).data('idfaktur');
  $(e.currentTarget).find('input[name="idfaktur"]').val(idfaktur);
  });
</script>

<script type="text/javascript">
  $('#edit-statusprod').on('shown.bs.modal', function(e) {
  var idproduk = $(e.relatedTarget).data('idproduk');
  $(e.currentTarget).find('input[name="idproduk"]').val(idproduk);
  });
</script>

<script type="text/javascript">
  $('#edit-ongkir').on('shown.bs.modal', function(e) {
  var idongkir = $(e.relatedTarget).data('idongkir');
  $(e.currentTarget).find('input[name="idongkir"]').val(idongkir);
  });
</script>

<!-- add dynamic -->
  <script type="text/javascript">
    function show(aval) {
    if (aval == "sjp1") {
      $("#outputArea-1, #outputArea-2").removeClass('hidden');
      // $("#outputArea-2").removeClass('hidden');
    } 
    else{
      $("#outputArea-1, #outputArea-2").addClass('hidden');
      // $("#outputArea-2").addClass('hidden');
    }
  }
  </script>
<!-- end -->

<!-- collapse panel  -->
<script type="text/javascript">
$(document).on('click', '.panel-heading span.clickable', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('click', '.panel div.clickable', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).ready(function () {
    $('.panel-heading span.clickable').click();
    $('.panel div.clickable').click();
});
</script>
<!-- end -->

  </body>
</html>