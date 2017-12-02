<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/lambang.png') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p style="font-size:10px;" align="center"> ELECTRICAL ENGINERING </p>

                <p style="font-size:10px;" align="center"> INFORMATION SYSTEM</p> 

            </div>
        </div>
        <!-- search form -->
        
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <div class="input-group" style="padding-top:2px; padding-left:3px; padding-right:3px; padding-bottom: 3px; height: 30px;  ">
            <span class="input-group-btn">
                  <button type="button" disabled name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-calendar"></i>
                  </button>
                </span>
            <input disabled type="text" name="q" class="form-control" value="<?= date('l - M d, Y') ?>">
                
          </div>
            <?=
         
        $submenu_fix = implode('', $this->session->userdata('menu_aktif'));
         ?>
            


            

          
          
       
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<script type="text/javascript">
    /** add active class and stay opened when selected */
var url = window.location;


// for sidebar menu entirely but not cover treeview
$('ul.sidebar-menu a').filter(function() {
     return this.href == url;
}).parent().addClass('active');

// for treeview
$('ul.treeview-menu a').filter(function() {
     return this.href == url;
}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
</script>