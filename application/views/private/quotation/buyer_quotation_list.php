<style>
/* table a:not(.btn),
.table a:not(.btn) {
text-decoration: none;
}

tr.hover {
cursor: pointer; */
/* whatever other hover styles you want */
/* } */

/* #example {
display: block;
overflow-x: auto;
white-space: nowrap;
} */
</style>

<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/jquery.dataTables.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/dataTables.bootstrap.min.js') ?>" type="text/javascript"></script>

<div class="container">
  <h1>Request for Quotation List</h1>
  <ol class="breadcrumb">
    <li>
      <a href="<?php echo site_url('Home/home_view/') ?>">Home</a>
    </li>
    <li class='active'>
      Request for Quotation List
    </li>
  </ol>

  <div class="table-responsive">
    <table id="example1" class="table table-striped table-bordered" >
      <thead class="text-center">
        <tr>
          <th>Send To</th>
          <th>Subject</th>
          <th>Date</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($quotation as $q){ ?>
          <tr class="click">
            <td>
              <a href="<?php echo base_url().'Quotation/buyer_quotation_detail/'.$q->Code; ?>">
                <?php echo $q->CompanyName  ?>
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
<script>
$(function () {
  $("#example1").DataTable();
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": true
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
