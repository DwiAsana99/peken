
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
    <div class="nav-tabs-custom">
      <!-- Tabs within a box -->
      <ul class="nav nav-tabs pull-right">
        <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
        <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
        <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
      </ul>
      <div class="tab-content no-padding">
        <!-- Morris chart - Sales -->
        <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
        <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
      </div>
    </div>
  </section>




<script type="text/javascript">
$(function () {
/* Morris.js Charts */
// Sales chart
var area = new Morris.Line({
element   : 'revenue-chart',
resize    : true,
data      : [
  { y: '2011-01', item1: 2666, item2: 2666 },
  { y: '2011-02', item1: 2778, item2: 2294 },
  { y: '2011-03', item1: 4912, item2: 1969 },
  { y: '2011-04', item1: 3767, item2: 3597 },
  { y: '2011-05', item1: 30000, item2: 1914 },
  { y: '2011-06', item1: 5670, item2: 4293 },
  { y: '2011-07', item1: 4820, item2: 3795 },
  { y: '2011-08', item1: 15073, item2: 40000 },
  { y: '2011-09', item1: 10687, item2: 4460 },
  { y: '2011-10', item1: 10687, item2: 4460 },
  { y: '2011-11', item1: 10687, item2: 4460 },
  { y: '2011-12', item1: 8432, item2: 5713 }
],
xkey      : 'y',
ykeys     : ['item1', 'item2'],
  labels    : ['Accept', 'Reject'],
lineColors: ['#05c10c', '#ed0404'],
hideHover : 'auto'
});
});
</script>
