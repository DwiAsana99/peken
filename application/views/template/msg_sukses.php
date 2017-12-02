     <?php if($this->session->flashdata('msg')): ?>
      

   <div class="alert alert-success" id="success-alert">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
 <?php echo $this->session->flashdata('msg'); ?>
</div>

      <?php endif; ?>


<script type="text/javascript">

   
   $(document).ready (function(){

                $("#success-alert").alert();
                $("#success-alert").fadeTo(1000, 500).slideUp(500, function(){
               $("#success-alert").slideUp(500);
                  
            });
 });

</script>
