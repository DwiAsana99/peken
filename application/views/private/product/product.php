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
     <a style="float:right"  href="<?php echo base_url('Product/product_add_view');?>" class="btn btn-primary">
      <i class="glyphicon glyphicon-saved"></i>
      Add Product
     </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
     <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped">
       <thead class="text-center">
        <tr >
           <th style="display:none;"></th>
         <th></th>

         <th>Name</th>
         <th>Product <br> Category</th>
         <th>Product Sub <br> Category</th>
         <th>Unit</th>
         <th>Min Price</th>
         <th>Max Price</th>

         <th>Action</th>

        </tr>
       </thead>
       <tbody class="text-center">
        <?php $i = 1; foreach($product as $u){?>
         <tr  class='odd gradeX context'>
           <td class="idk" style="display:none;"><?php echo $u->ProductId?></td>
          <td><img src="<?php echo base_url().'assets/supplier_upload/'.$u->FileName ?>" alt="" height="30"></td>

          <td><?php echo $u->Name?></td>
          <td><?php echo $u->ProductCategory?></td>
          <td><?php echo $u->ProductSubCategory?></td>
          <td><?php echo $u->Unit?></td>
          <td class="text-right"><?php echo number_format($u->MinPrice, 2, '.', ',')?></td>
          <td class="text-right"><?php echo number_format($u->MaxPrice, 2, '.', ',')?></td>


          <td>
           <a class="btn btn-warning" style="padding: 0px 0px;"  href="<?php echo base_url('Product/product_edit_view/').$u->ProductId;?>" data-toggle="tooltip"
              data-placement="bottom" title="Edit Product">
            <span class="fa fa-fw fa-edit" >
            </span>
           </a>
           <a style="padding: 0px 0px;"  id="id_detail" class="btn btn-info id_detail" ><span class="fa fa-fw fa-search" data-toggle="tooltip"
              data-placement="bottom" title="Product Detail">
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
   url: "<?php echo base_url('Product/show_product_detail_modal') ?>",
   data:{product_id:value},
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




<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
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


<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Product Detail</h4>
      </div>
      <div class="modal-body" id="modal_product_detail">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div> -->
