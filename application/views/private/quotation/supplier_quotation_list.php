

<link href="<?php echo base_url('assets/email_design/email_table.css') ?>" rel="stylesheet" type="text/css" />
<section class="content-header">
  <div class="btn-group btn-breadcrumb">
    <a href="<?php echo base_url().'User/supplier_dashboard_view' ?>" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-home"></i></a>
    <a  class="btn btn-default  btn-xs active">Request for Quotation List</a>
  </div>
</section>
<section class="content">
  <div class="row">


    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Request for Quotation List</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Send From</th>
                  <th>Subject</th>
                  <th>Date</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($quotation as $q){ ?>
                  <tr class="click">
                    <td>
                      <a  href="<?php echo base_url().'Quotation/supplier_quotation_detail?quotation_code='.$q->Code; ?>">
                        <?php echo $q->LastName  ?>
                      </a>
                    </td>
                    <td>
                      <?php echo $q->Subject  ?>
                    </td>

                    <td>
                      <?php echo $q->SendDate  ?>
                    </td>
                    <td>
                      <?php
                      if ($q->IsAccepted == -1) {
                        echo "Waiting";
                      }
                        if ($q->IsAccepted == 0) {
                          echo "Rejected";
                        }
                        if ($q->IsAccepted == 1) {
                          echo "Accepted";
                        }
                      ?>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</section>
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
<script>
// $(document).ready(function () {
//   $('#example').DataTable();
//   $('.click').click(function () {
//     window.location = $(this).find('a').attr('href');
//   }).hover(function () {
//     $(this).toggleClass('hover');
//   });
// });
</script>
