<style>
table a:not(.btn),
.table a:not(.btn) {
  text-decoration: none;
}

tr.hover {
  cursor: pointer;
  /* whatever other hover styles you want */
}

#example {
  display: block;
  overflow-x: auto;
  white-space: nowrap;
}
</style>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/jquery.dataTables.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/dataTables.bootstrap.min.js') ?>" type="text/javascript"></script>
<div class="container">
  <div class="">
    <h1>Support List</h1>
  </div>
  <ol class="breadcrumb">
    <li>
      <a href="<?php echo site_url('Home/home_view/') ?>">Home</a>
    </li>
    <li class='active'>
      Support List
    </li>
  </ol>
  <div class="text-right">
    <a style="margin-bottom:10px;"  href="<?php echo base_url("index.php/Product_category/product_category_add_view");?>" class="btn btn-primary">
      <i class="glyphicon glyphicon-send"> </i> Request Support
    </a>
  </div>
  <div class="table-responsive">
    <table id="example1" class="table table-striped table-bordered " cellspacing="0" width="100%">
      <thead>
        <tr >
          <th class="text-center">SupportCode</th>
          <th class="text-center">Subject</th>
          <th class="text-center">DateSend</th>
          <th class="text-center">IsClosed</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
      <tbody class="text-center">
      </tbody>
    </table>
  </div>
</div><!-- /.box -->
<script>
// $(function () {
//   $("#example1").DataTable();
//   $('#example2').DataTable({
//     "paging": true,
//     "lengthChange": false,
//     "searching": false,
//     "ordering": true,
//     "info": true,
//     "autoWidth": false
//   });
// });
</script>
<script type="text/javascript">

var save_method; //for save method string
var table;

$(document).ready(function() {
  //datatables
  table = $('#example1').DataTable({
    "processing": true, //Feature control the processing indicator.
    "serverSide": false, //Feature control DataTables' server-side processing mode.
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "order": [], //Initial no order.
    // Load data for the table's content from an Ajax source
    "ajax": {
      "url": '<?php echo site_url('Support/get_buyer_support_json'); ?>',
      "type": "POST"
    },
    //Set column definition initialisation properties.
    "columns": [
      {"data": "SupportCode"},
      {"data": "Subject"},
      {"data": "DateSend"},
      {"data": "IsClosed"},
      {"data": "DetailButton"}
    ],

  });

});
</script>
