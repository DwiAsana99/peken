
<aside class="main-sidebar"  >

<section class="sidebar" >

      <div class="user-panel text-center">
        <div class="image">

          <img src="<?php echo base_url('assets/supplier_upload/').$this->session->userdata('profil_image') ?>" width="160"  class="img-circle" alt="User Image">
          <h4 style="color:white;"><b><?php echo $this->session->userdata('company_name'); ?></b></h4>

        </div>

      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu " data-widget="tree">
        <li class="header ">MAIN NAVIGATION</li>
        <!-- <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php //echo base_url().'index.php/Supplier/index' ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li> -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

          </ul>
        </li> -->
        <li><a href="<?php echo base_url().'index.php/Product/product_view' ?>"><i class="fa fa-circle-o"></i><span>My Product</span></a></li>
        <li><a href="<?php echo base_url().'index.php/Quotation/supplier_quotation_list' ?>"><i class="fa fa-envelope-o"></i><span >Quotation List <i class="label label-success badge">4</i></span></a></li>
        <li><a href="<?php echo base_url().'index.php/Supplier/supplier_account_view' ?>"><i class="fa fa-user"></i> <span>Profil</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->


  </aside>
<div class="content-wrapper">
