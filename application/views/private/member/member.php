<section class="content-header">
  <div class="btn-group btn-breadcrumb">
    <a href="#" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-home"></i></a>
    <a  class="btn btn-default  btn-xs active">Supplier</a>
  </div>
</section>
<style>
  .dataTables_wrapper .dataTables_filter {
  float: right;
  text-align: right;
  visibility: hidden;
  }
</style>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Supplier</h3>
          <!-- <a style="float:right"  href="<?php ?>" class="btn btn-primary">
            <i class="glyphicon glyphicon-saved"></i>
            Add Supplier
          </a> -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
          

          <!--  -->
          <style>

                .dropdown.dropdown-lg .dropdown-menu {
                    margin-top: -1px;
                    padding: 6px 20px;
                }
                .input-group-btn .btn-group {
                    display: flex !important;
                }
                .btn-group .btn {
                    border-radius: 0;
                    margin-left: -1px;
                }
                .btn-group .btn:last-child {
                    border-top-right-radius: 4px;
                    border-bottom-right-radius: 4px;
                }
                .btn-group .form-horizontal .btn[type="submit"] {
                  border-top-left-radius: 4px;
                  border-bottom-left-radius: 4px;
                }
                .form-horizontal .form-group {
                    margin-left: 0;
                    margin-right: 0;
                }
                .form-group .form-control:last-child {
                    border-top-left-radius: 4px;
                    border-bottom-left-radius: 4px;
                }
            @media screen and (min-width: 768px) {
                  #adv-search {
                      width: 275px;
                      margin: 0 auto;
                  }
                  .dropdown.dropdown-lg {
                      position: static !important;
                  }
                  .dropdown.dropdown-lg .dropdown-menu {
                      min-width: 275px;
                  }
              }
          </style>
          <div class="input-group" style="float:right" id="adv-search">
                <input type="text" class="form-control" placeholder="Search for snippets" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                    <label for="filter">Filter by</label>
                                    <select class="form-control">
                                        <option value="0" selected>All Snippets</option>
                                        <option value="1">Featured</option>
                                        <option value="2">Most popular</option>
                                        <option value="3">Top rated</option>
                                        <option value="4">Most commented</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Author</label>
                                    <input class="form-control" type="text" />
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Contains the words</label>
                                    <input class="form-control" type="text" />
                                  </div>
                                  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </form>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
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
                  <th>City</th>
                  <th>State</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody class="text-center">

              </tbody>
            </table>
          </div>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->

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
      "url": '<?php echo site_url('User/get_member_json'); ?>',
      "type": "POST"
    },
    //Set column definition initialisation properties.
    "columns": [
      {"data": "CompanyName"},
      {"data": "Email"},
      {"data": "Phone"},
      {"data": "City"},
      {"data": "State"},
      {"data": "DetailButton"}
    ],

  });

});
</script>
