<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

<?php if ($this->session->userdata('username')) :  ?>

                  <p class="centered"><img src="/sjpro/asset/admin/img/admin.png" class="img-circle" width="60"></p>
                  <h5 class="centered">Hi, <?= $this->session->userdata('username'); ?></h5>
<?php endif; ?>

<?php if ($this->session->userdata('id_group') == '2') { ?>

                  <li class="sub-menu">
                      <a href="<?= base_url();?>admin/akun/">
                          <i class="glyphicon glyphicon-home"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="" >
                          <i class="glyphicon glyphicon-folder-open"></i>
                          <span>Data</span><i class="glyphicon glyphicon-chevron-right pull-right" id="panah"></i>
                      </a>
                      <ul class="sub">
                          <li><a class="sub-detail" href="<?= base_url();?>admin/penjualan">Penjualan</a></li>
                          <li><a class="sub-detail" href="<?= base_url();?>admin/produk">Produk</a></li>
                          <li><a class="sub-detail" href="<?= base_url();?>admin/akun/pelanggan">Pelanggan</a></li>
                          <li><a class="sub-detail" href="<?= base_url();?>admin/ongkir">Ongkos Kirim</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="" >
                          <i class="glyphicon glyphicon-time"></i>
                          <span>History Data</span><i class="glyphicon glyphicon-chevron-right pull-right" id="panah"></i>
                      </a>
                      <ul class="sub">
                          <li><a class="sub-detail" href="<?= base_url();?>admin/log/penjualan_log">Penjualan</a></li>
                          <li><a class="sub-detail" href="<?= base_url();?>admin/log">Produk</a></li>
                        <!--   <li><a class="sub-detail" href="#">Pelanggan</a></li> -->
                      </ul>
                  </li>

                   <li class="sub-menu">
                      <a href="" >
                          <i class="glyphicon glyphicon-user"></i>
                          <span>Akun</span><i class="glyphicon glyphicon-chevron-right pull-right" id="panah"></i>
                      </a>
                      <ul class="sub">
                          <li><a class="sub-detail" href="<?= base_url();?>admin/akun/admin">Admin</a></li>
                          <!-- <li><a class="sub-detail" href="<?= base_url();?>admin/akun/">Pelanggan</a></li> -->
                      </ul>
                  </li>

<?php } else { ?>

                  <li class="sub-menu">
                      <a href="<?= base_url();?>admin/akun/">
                          <i class="glyphicon glyphicon-home"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="" >
                          <i class="glyphicon glyphicon-folder-open"></i>
                          <span>Data</span><i class="glyphicon glyphicon-chevron-right pull-right" id="panah"></i>
                      </a>
                      <ul class="sub">
                          <li><a class="sub-detail" href="<?= base_url();?>admin/produk/penjualan">Penjualan</a></li>
                          <li><a class="sub-detail" href="<?= base_url();?>admin/produk">Produk</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="" >
                          <i class="glyphicon glyphicon-user"></i>
                          <span>Akun</span><i class="glyphicon glyphicon-chevron-right pull-right" id="panah"></i>
                      </a>
                      <ul class="sub">
                          <li><a class="sub-detail" href="<?= base_url();?>admin/akun/">Pelanggan</a></li>
                      </ul>
                  </li>

<?php } ?>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->