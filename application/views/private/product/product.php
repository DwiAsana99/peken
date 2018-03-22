<section class="content-header">
 <div class="btn-group btn-breadcrumb">
  <a href="#" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-home"></i></a>
  <a  class="btn btn-default  btn-xs active">Product</a>
 </div>
</section>

<!-- Main content -->
<section class="content">
 <div class="row">
  <div class="col-xs-12">
   <div class="box">
    <div class="box-header">
     <h3 class="box-title">Product</h3>
     <a style="float:right"  href="<?php echo base_url('index.php/Product/product_add_view');?>" class="btn btn-primary">
      <i class="glyphicon glyphicon-saved"></i>
      Add Product
     </a>
    </div>
    <!-- _______________________________________________________' -->
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eni
      m ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute ir
      ure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paria
      tur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eni
      m ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute ir
      ure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paria
      tur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <!--  _________________________________________________________-->
    <!-- /.box-header -->
    <div class="box-body">
     <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped">
       <thead class="text-center">
        <tr >
           <th style="display:none;"></th>
         <th>No</th>

         <th>Name</th>
         <th>Product <br> Category</th>
         <th>Product Sub <br> Category</th>
         <th>Unit</th>
         <th>Price</th>
         <th>Supply Abilty</th>
         <th>Period Supply <br> Ability</th>
         <th>Action</th>

        </tr>
       </thead>
       <tbody class="text-center">
        <?php $i = 1; foreach($product as $u){?>
         <tr  class='odd gradeX context'>
           <td class="idk" style="display:none;"><?php echo $u->IdProduct?></td>
          <td><?php  echo $i++; ?></td>

          <td><?php echo $u->Name?></td>
          <td><?php echo $u->ProductCategory?></td>
          <td><?php echo $u->ProductSubCategory?></td>
          <td><?php echo $u->Unit?></td>
          <td><?php echo $u->Price?></td>
          <td><?php echo $u->SupplyAbility?></td>
          <td><?php echo $u->PeriodSupplyAbility?></td>

          <td>
           <a class="btn btn-warning"   href="<?php echo base_url('index.php/Product/product_edit_view/').$u->IdProduct;?>">
            <span class="fa fa-fw fa-edit" >
            </span>
           </a>
           <a   id="id_detail" class="btn btn-info id_detail" ><span class="fa fa-fw fa-search" >
           </span></a>
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
 <!-- Modal -->

</section><!-- /.content -->

<script type="text/javascript">
$(function(){
 $('.id_detail').click(function(event){
  var value= $(this).closest('tr').children('td.idk').text()
  //alert(value);
  $.ajax({
   type:"POST",
   url: "<?php echo base_url('index.php/Product/show_product_detail_modal') ?>",
   data:{id_product:value},
   success: function(respond){
    //  $("#modal_product_detail").empty();
    //  console.log(value);
    $('#myModal').modal('show');
    $("#modal_product_detail").html(respond);

   }
  })
 });
})
</script>

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
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body" id="modal_product_detail">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
