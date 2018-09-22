
<!-- Content Wrapper. Contains page content -->

  <!-- Content Header (Page header) -->
  <section class="content-header">
<div class="row">
  <div class="col-md-6">
    <h3 style="margin-top:0px;">
      Dashboard
      <small>Control panel</small>
    </h3>
  </div>

  <div class="col-md-6 text-center">
    <select class="form-control " name="report_year" id="report_year">
      <?php
        $date = date("Y");
        $a = $member_since;
        //echo $date."||".$a;exit();
        while ($a <= $date) {?>
          <option <?php if ($a== $date) { echo "selected";  } ?> value="<?php echo $a; ?>"><?php echo $a; ?></option>
      <?php  $a++;} ?>

    </select>
  </div>
</div>


</section>
    <!-- <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol> -->
<section class="content" style="padding-top:0px;">


    <div class="row">
      <h1></h1>

       <!-- ./col -->
       <div class="col-lg-6 col-xs-6">
         <!-- small box -->
         <div class="small-box bg-green">
           <div class="inner">
             <h3 id="accepted_quotation">44</h3>

             <p>Total Quotation Accepted</p>
           </div>
           <div class="icon">
             <i class="ion-ios-checkmark-outline"></i>
           </div>
           <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
         </div>
       </div>
       <!-- ./col -->
       <div class="col-lg-6 col-xs-6">
         <!-- small box -->
         <div class="small-box bg-red">
           <div class="inner">
             <h3 id="rejected_quotation">65</h3>

             <p>Total Quotation Rejected</p>
           </div>
           <div class="icon">
             <i class="ion-ios-close-outline"></i>
           </div>
           <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
         </div>
       </div>
       <!-- ./col -->
     </div>







    <div class="nav-tabs-custom">
      <!-- Tabs within a box -->
      <ul class="nav nav-tabs pull-right">

        <li class="pull-left header"><i class="fa fa-inbox"></i> Monthly Quotation Recap Report</li>

      </ul>
      <div class="tab-content no-padding">

        <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>

      </div>
    </div>
  </section>



<script type="text/javascript">
function get_supplier_box_stats(reportYear)
{
  $("#accepted_quotation").empty();
  $("#rejected_quotation").empty();
  $.getJSON( "<?php echo base_url().'Quotation/get_supplier_box_stats'; ?>/"+reportYear, function( data ) {
    console.log(data);
    $("#accepted_quotation").html(data.AcceptedQuotation);
    $("#rejected_quotation").html(data.RejectedQuotation);
  })
}
function get_rfq_recap(reportYear) {
  $.ajax({
    url: "<?php echo base_url().'Quotation/get_rfq_recap/'; ?>",
    dataType: 'JSON',
    type: 'POST',
    data: {report_year:reportYear},
    success: function(response) {
      var area = new Morris.Line({
        element   : 'revenue-chart',
        resize    : true,
        data      : response,
        xkey      : 'y',
        ykeys     : ['item1', 'item2'],
        labels    : ['Accept', 'Reject'],
        lineColors: ['#05c10c', '#ed0404'],
        hideHover : 'auto'
      });
    }
  });
}
$(function(){
  $("#report_year").change(function(){
    $("#revenue-chart").empty();
    var report_year=$(this).val();
    get_rfq_recap(report_year);
    get_supplier_box_stats(report_year);
  });
})

$(document).ready(function(){
  get_rfq_recap(<?php echo date("Y"); ?>);
  get_supplier_box_stats(<?php echo date("Y"); ?>);
});
</script>
