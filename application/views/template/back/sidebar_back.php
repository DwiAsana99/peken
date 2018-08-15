
<aside class="main-sidebar"  >

<section class="sidebar" >

      <div class="user-panel">
        <div class="pull-left image">

          <img src="<?php if (empty($this->session->userdata('profile_image')) OR $this->session->userdata('profile_image') == "") {
                                    echo base_url().'assets/icon/upload-icon.png';
                                }else{
                                    echo base_url().'assets/supplier_upload/'.$this->session->userdata('profile_image');

                                }?>" width="75" class="img-circle" alt="User Image">



        </div>
        <div class="pull-left info ">
          <h5 class=""><b ><?php echo $this->session->userdata('company_name'); ?></b></h5>
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
        <li><a href="<?php echo base_url().'User/dashboard_supplier_view' ?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
        <li><a href="<?php echo base_url().'Product/product_view' ?>"><i class="glyphicon glyphicon-th-list"></i><span>My Product</span></a></li>
        <li><a href="<?php echo base_url().'Quotation/supplier_quotation_list' ?>"><i class="fa fa-envelope-o"></i><span >Quotation List</span></a></li>
        <li><a href="<?php echo base_url().'User/supplier_account_view' ?>"><i class="fa fa-user"></i> <span>Profil</span></a></li>
        <!-- <li><a href="<?php //echo base_url().'index.php/Support/supplier_support_list_view' ?>"><i class="glyphicon glyphicon-phone-alt"></i> <span>Support</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->


  </aside>
<div class="content-wrapper">
