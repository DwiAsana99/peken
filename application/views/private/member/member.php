<section class="content-header">
  <div class="btn-group btn-breadcrumb">
    <a href="#" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-home"></i></a>
    <a  class="btn btn-default  btn-xs active">Member List</a>
  </div>
</section>
<style>
/* .dataTables_wrapper .dataTables_filter {
float: right;
text-align: right;
visibility: hidden;
} */
</style>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Member List</h3>
          <button type="button" style="float:right" class="btn btn-info " data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-filter"></span> Add Filter <span  class="badge"><?php echo $filter_num ?></span></button>
          <!-- <a style="float:right"  href="" class="btn btn-primary">
          <i class="glyphicon glyphicon-saved"></i>
          Add Supplier
        </a> -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="table-responsive">

          <!--  -->
          <!-- Button trigger modal -->


          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Add Filter</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="filter">Company Name</label>
                    <input type="text" class="form-control"  id="search_company_name" placeholder="Search for company name" value="<?php echo $search_company_name = isset($search_company_name) ? $search_company_name : "" ;  ?>" />
                  </div>

                  <div class="form-group">
                    <label for="filter">Filter by member category</label>
                    <select class="form-control" name="user_level" id="user_level">
                      <?php if ($user_level == 1){ ?>
                        <option value="-1" >All Category</option>
                        <option value="1" selected>Supplier</option>
                        <option value="2" >Buyer</option>
                        <option value="3">Both</option>
                      <?php }elseif($user_level == 2){ ?>
                        <option value="-1" >All Category</option>
                        <option value="1" >Supplier</option>
                        <option value="2" selected>Buyer</option>
                        <option value="3">Both</option>
                      <?php }elseif($user_level == 3){ ?>
                        <option value="-1" >All Category</option>
                        <option value="1" >Supplier</option>
                        <option value="2" >Buyer</option>
                        <option value="3" selected>Both</option>
                      <?php }elseif($user_level == -1){ ?>
                        <option value="-1" selected>All Category</option>
                        <option value="1" >Supplier</option>
                        <option value="2" >Buyer</option>
                        <option value="3">Both</option>
                      <?php }else{ ?>
                        <option value="-1" selected>All Category</option>
                        <option value="1" >Supplier</option>
                        <option value="2" >Buyer</option>
                        <option value="3">Both</option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <a id="search_btn" href=""   class="btn btn-primary">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    Search
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!--  -->

          <table id="example1" class="table table-bordered table-striped">
            <thead class="text-center">
              <tr>
                <th>Company Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Province</th>
                <th>State</th>
                <th>Member Level</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <?php foreach($member as $m){?>
                <tr  class='odd gradeX context'>
                  <td><?php echo $m->CompanyName?></td>
                  <td><?php echo $m->Email?></td>
                  <td><?php echo $m->Phone?></td>
                  <td><?php echo $m->Province?></td>
                  <td><?php echo $m->State?></td>
                  <?php if ($m->UserLevel == 1): ?>
                    <td>Supplier Only</td>
                  <?php elseif ($m->UserLevel == 2): ?>
                    <td>Buyer Only</td>
                  <?php elseif ($m->UserLevel == 3): ?>
                    <td>Supplier & Buyer</td>
                  <?php endif; ?>

                  <td>
                    <?php if ($m->UserLevel == 1 || $m->UserLevel == 3): ?>
                      <a target="_blank" class="btn btn-info" href="<?php echo site_url('User/edit_member_account_view/').$m->Id ?>" style="padding: 0px 0px;" data-toggle="tooltip"
                         data-placement="bottom" title="Edit Member Account">
                        <span class="glyphicon glyphicon-edit" style="padding-right: 5px; padding-left: 5px;"> </span>
                      </a>
                      <a target="_blank" class="btn btn-success" href="<?php echo site_url('User/supplier_verification_view/').$m->Id ?>"
                         style="padding: 0px 0px;" data-toggle="tooltip" data-placement="bottom" title="Supplier Verification">
                        <span class="glyphicon glyphicon-certificate" style="padding-right: 5px; padding-left: 5px;"> </span>
                      </a>
                    <?php else: ?>
                      <a target="_blank" class="btn btn-info" href="<?php echo site_url('User/edit_member_account_view/').$m->Id ?>" style="padding: 0px 0px;" data-toggle="tooltip" data-placement="bottom" title="Edit Member Account">
                        <span class="glyphicon glyphicon-edit" style="padding-right: 5px; padding-left: 5px;"></span>
                      </a>
                    <?php endif; ?>
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



<script type="text/javascript">
var search_btn = document.getElementById('search_btn');
var search_company_name = document.getElementById('search_company_name');
var user_level = document.getElementById('user_level');
function get_member() {
  user_level = "user_level="+user_level.value;
  search_company_name = "search_company_name="+search_company_name.value;
  search_btn.setAttribute("href","<?php echo site_url('User/member_view?'); ?>"+user_level+"&"+search_company_name);
}
search_btn.addEventListener("click", get_member);
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
<script type="text/javascript">

// var save_method; //for save method string
// var table;

// $(document).ready(function() {
//   //datatables
//   table = $('#example1').DataTable({
//     "processing": true, //Feature control the processing indicator.
//     "serverSide": false, //Feature control DataTables' server-side processing mode.
//     "paging": true,
//     "lengthChange": true,
//     "searching": false,
//     "ordering": true,
//     "info": true,
//     "autoWidth": false,
//     "order": [], //Initial no order.
//     // Load data for the table's content from an Ajax source
//     "ajax": {
//       "url": '<?php// echo site_url('User/get_member_json'); ?>',
//       "type": "POST"
//     },
//     //Set column definition initialisation properties.
//     "columns": [
//       {"data": "CompanyName"},
//       {"data": "Email"},
//       {"data": "Phone"},
//       {"data": "City"},
//       {"data": "State"},
//       {"data": "DetailButton"}
//     ],

//   });

// });
</script>
