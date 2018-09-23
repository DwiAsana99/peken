
<!-- Content Wrapper. Contains page content -->

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
<!-- Main content -->
    <section class="content">
      <div class="row">
        <h1></h1>

         <!-- ./col -->
         <div class="col-lg-6 col-xs-6">
           <!-- small box -->
           <div class="small-box bg-blue">
             <div class="inner">
               <h3 id="total_supplier">44</h3>

               <p>Total Supplier</p>
             </div>
             <div class="icon">
               <i class="ion-ios-checkmark-outline"></i>
             </div>
             <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
           </div>
         </div>
         <div class="col-lg-6 col-xs-6">
           <!-- small box -->
           <div class="small-box bg-yellow">
             <div class="inner">
               <h3 id="total_buyer">44</h3>

               <p>Total Buyer</p>
             </div>
             <div class="icon">
               <i class="ion-ios-checkmark-outline"></i>
             </div>
             <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
           </div>
         </div>
         <div class="col-lg-6 col-xs-6">
           <!-- small box -->
           <div class="small-box bg-green">
             <div class="inner">
               <h3 id="total_both">44</h3>

               <p>Total Supplier & Buyer</p>
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
               <h3 id="total_member">X</h3>

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
              <li class="active"><a href="#sales-chart" data-toggle="tab">Donut</a></li>
              <!-- <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li> -->
            </ul>
            <div class="tab-content no-padding">
              <div class="chart tab-pane active" id="sales-chart" style="position: relative; height: 300px;"></div>
            </div>
          </div>
    </section>
    <!-- /.content -->
<script type="text/javascript">
function get_user_box_stats()
{
  $("#accepted_quotation").empty();
  $("#rejected_quotation").empty();
  $("#accepted_quotation").empty();
  $("#rejected_quotation").empty();
  $.getJSON( "<?php echo base_url().'Quotation/get_user_box_stats'; ?>", function( data ) {
    console.log(data);
    $("#accepted_quotation").html(data.AcceptedQuotation);
    $("#rejected_quotation").html(data.RejectedQuotation);
  })
}
function get_user_recap() {
  $.ajax({
    url: "<?php echo base_url().'User/get_user_recap/'; ?>",
    dataType: 'JSON',
    type: 'POST',
    data: {get_values: true},
    success: function(response) {
      console.log(response);
      var donut = new Morris.Donut({
        element  : 'sales-chart',
        resize   : true,
        colors   : ['#2758c4', '#f4e542', '#00a65a'],
        data     : response,
        hideHover: 'auto'
      });
    }
  });
}
$(function(){
$(document).ready(function(){
  get_user_recap();
});
});
</script>
