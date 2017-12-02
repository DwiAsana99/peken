<?php
$this->load->view('template/back/head_back');
$this->load->view('template/back/sidebar_back');
?>

<section class="content-header">
    <div class="btn-group btn-breadcrumb">
      <a href="#" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-home"></i></a>
      <a  class="btn btn-default  btn-xs active">Product Category</a>
    </div>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Product Category</h3>
          <a style="float:right"  href="<?php echo base_url('index.php/Product_category/product_category_add_view');?>" class="btn btn-primary">
            <i class="glyphicon glyphicon-saved"></i>
            Add Product Category
          </a>
        </div>
    <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr >
                      <th>No</th>
                      <th>ID</th>
                      <th>Category</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach($product_category as $u){?>
                        <tr  class='odd gradeX context'>
                          <td><?php  echo $i++; ?></td>
                          <td><?php echo $u->IdProductCategory ?></td>
                          <td><?php echo $u->ProductCategory?></td>
                          <td>
                            <a class="btn btn-primary"   href="<?php echo base_url('index.php/Product_category/product_category_edit_view/'.$u->IdProductCategory);?>">  <span class="fa fa-fw fa-edit" ></span> </a>
                            <!-- <input type="hidden" id="btnhapus" value="<?php //echo $u->category ?>" > -->
                          </td>
                        </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->

<?php $this->load->view('template/back/foot_back'); ?>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
