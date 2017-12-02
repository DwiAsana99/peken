<?php
$this->load->view('template/front/head_front');
?>
<div class="uk-container-center uk-margin-top" style="background:#ddd;">
  <nav class="uk-navbar"></nav>
<div class=" uk-grid uk-container-center tm-grid-truncate"  style="padding-top:30px; width: 1300px;" data-uk-grid-margin>
  <div class="uk-width-1-1 " style="background:#fff;padding-top:30px;padding-bottom: 30px;"  data-uk-grid-margin>
    <div class="uk-container">


<table class="uk-table uk-table-hover">

<?php foreach($quotation as $q){ ?>
  <tr>
<td><?php echo $q->DateSend  ?></td>
<td><?php echo $q->Name  ?></td>
<td><?php echo $q->CompanyName  ?></td>
<td><?php echo $q->Qty  ?></td>
  </tr>
  <?php } ?>
  </table>
  </div>
  </div>
  </div>
  </div>


<?php

$this->load->view('template/front/Foot_front');

?>
