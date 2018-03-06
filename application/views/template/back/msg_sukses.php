     <?php if($this->session->flashdata('msg')): ?>
      
<script type="text/javascript">
  new PNotify({
          title: 'Success!',
          text: ' <?php echo $this->session->flashdata('msg'); ?>',
           delay: 2000,
          type: 'success'
        });
</script>

      <?php endif; ?>





