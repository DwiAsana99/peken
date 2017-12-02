

<link href="<?php echo base_url('assets/email_design/email_table.css') ?>" rel="stylesheet" type="text/css" />
<section class="content-header">
 <div class="btn-group btn-breadcrumb">
  <a href="#" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-home"></i></a>
  <a  class="btn btn-default  btn-xs active">Product</a>
 </div>
</section>
<section class="content">
<div class="col-xs-12">
   <div class="box">
      <div class="box-header">
         <h3 class="box-title">Product</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
         <table class="table table-inbox table-hover">
            <h2>Quotation List</h2>
            <tbody>
               <?php foreach($quotation as $q){ ?>

                  <tr class="">
                     <td class="view-message dont-show"><?php echo $q->CompanyName ?> <span class="label label-success ">New</span></td>
                     <td class="view-message view-message"><b><?php echo trim(substr($q->Subject,0,20))." <b>...</b>" ?></b></td>
                     <td class="view-message view-message"><?php echo trim(substr($q->Content,0,50))." <b>...</b>" ?></td>
                     <td class="view-message text-right"><?php echo $q->DateSend ?></td>
                     <td ><a href="<?php echo base_url().'index.php/Quotation/supplier_quotation_detail?id_quotation='.$q->IdQuotation; ?>" class="btn btn-info">quotation detail</a></td>

                  </tr>

               <?php } ?>
            </tbody>
         </table>
      </div>
   </div><!-- /.box-body -->
</div><!-- /.box -->
</section>
