  <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row mt">

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">

                <span class="info-box-icon bg-aqua"><i class="glyphicon glyphicon-shopping-cart"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">ORDER</span>
                  <span class="info-box-number"><b><?=$order;?></b></span>
                </div><!-- /.info-box-content -->

              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">TOP</span>
                   <?php foreach ($top as $data) {?>
                  <span class="info-box-number"><b><?=$data['nama_produk'];?></b></span>
                    <?php }?>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="glyphicon glyphicon-user"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">MEMBER</span>
                  <span class="info-box-number"><b><?=$member;?></b></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="glyphicon glyphicon-camera"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">PRODUK</span>
                  <span class="info-box-number"><b><?=$produk;?></b></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

              </div><! --/row -->

              <div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
                      <div class="panel-body">
                      <div class="task-content">
                      <ul id="sortable" class="task-list">

                      <table class="table table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th><center>No.</center></th>
                                  <th><center>Produk</center></th>
                                  <th class="numeric"><center>Jumlah</center></th>
                                  <th class="numeric"><center>Biaya</center></th>
                                  <th class="numeric"><center>Status</center></th>
                              </tr>
                              </thead>
                              <tbody>

<?php $i = 1; ?>
<?php foreach ($last_order as $data):?>

                              <tr>
                                  <td><center><?=$i;?></center></td>
                                  <td><center><?=$data['nama_produk'];?></center></td>
                                  <td class="numeric"><center><?=$data['jumlah_produk'];?></center></td>
                                  <td class="numeric"><center><?=$data['harga'];?></center></td>
                                  <td class="numeric"><center><a href="#" class="status_order" data-toggle="modal" 
                                  data-idfaktur="<?= $data['id_faktur'];?>" data-target="#edit-status">
                                <?=$data['status'];?></a></center></td>
                              </tr>

<?php $i++; ?>
<?php endforeach;?>
                            
                              </tbody>
                          </table>

                            <span class="pull-right">
                             <a href="<?= base_url();?>admin/penjualan/" type="button" class="btn btn-success">Detail <i class="glyphicon glyphicon-step-forward"></i>
                             </a>
                            </span>

                          </ul></div></div>                                 
                        
                      </section>
                  </div><!--/col-md-12 -->
              </div><!-- /row -->

          </section>
      </section>
