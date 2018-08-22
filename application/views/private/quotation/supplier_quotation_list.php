

<link href="<?php echo base_url('assets/email_design/email_table.css') ?>" rel="stylesheet" type="text/css" />
<section class="content-header">
  <div class="btn-group btn-breadcrumb">
    <a href="#" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-home"></i></a>
    <a  class="btn btn-default  btn-xs active">Quotation List</a>
  </div>
</section>
<section class="content">
  <div class="row">


    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Quotation List</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Send</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($quotation as $q){ ?>
                  <tr class="click">
                    <td>
                      <a href="<?php echo base_url().'Quotation/supplier_quotation_detail?quotation_code='.$q->Code; ?>">To:
                        <?php echo $q->CompanyName  ?>
                      </a>
                    </td>
                    <td>Pembelian
                      <?php echo $q->Name  ?>
                    </td>
                    <td>
                      <?php echo trim(substr($q->Content,0,50))." <b>...</b>" ?>
                    </td>
                    <td>
                      <?php echo $q->SendDate  ?>
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
$(document).ready(function () {
  $('#example').DataTable();
  $('.click').click(function () {
    window.location = $(this).find('a').attr('href');
  }).hover(function () {
    $(this).toggleClass('hover');
  });
});
</script>
