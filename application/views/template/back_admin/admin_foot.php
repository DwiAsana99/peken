




</div><!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.0
    </div>
    <strong>Copyright &copy; 2017 <a href="http://almsaeedstudio.com">Maxinuos-Bali</a>.</strong> All rights reserved.
</footer>
</div><!-- ./wrapper -->

</footer>
    </body>
</html>
<script src="http://malsup.github.io/jquery.blockUI.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".change").click(function(){
            $.blockUI({ message: '<h4><img src="<?php echo base_url("assets/img/loading.gif") ?>" />  Perubahan Role, Mohon Menunggu</h4>'
        });
 			$.ajax({
				type: "POST",
				url: '<?php echo site_url('Rbac/change_role');?>',
				data: {id_role: $(this).attr("idK")},
				success: function(msg){
					if (msg!="") {
						var response = $.parseJSON(msg);
						 window.location = response.message;

					};
				}
			});
        });

    });
</script>
 <?php $this->load->view('template/back/msg_sukses'); ?>
