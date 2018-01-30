
  <script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("#scroll").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

  <div class="heading">
    <div class="container-fluid">
      <div class="col-md-4 col-md-offset-4 text-center">
        <img class="img-responsive" src="<?php echo base_url('assets/supplier_upload/').$supplier[0]->ProfilImage; ?>">
        <h1><?php echo $supplier[0]->CompanyName; ?></h1>
        <hr style="width:50%;">
        <p><?php echo $supplier[0]->Location; ?></p>
        <p>
          <a href="mailto:someone@example.com?Subject=Hello%20again" target="_top"><?php echo $supplier[0]->Email; ?></a>
        </p>
        <p>
          <a href="tel:555-555-5555"><?php echo $supplier[0]->Phone; ?></a>
        </p>
        <p>
          <i class="fa fa-facebook-square" aria-hidden="true"></i> |
          <i class="fa fa-twitter-square" aria-hidden="true"></i> |
          <i class="fa fa-youtube-square" aria-hidden="true"></i>
        </p>
        <p>
          <a id="scroll" class="btn btn-default btn-block" href="#products"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </p>
      </div>
    </div>
  </div>
  <div id="products" ></div>
  <div class="container top-margin">
    <h2 class="text-center" style="margin-top:20vh">OUR PRODUCTS</h2>
    <hr style="width:50%;">
    <div class="my-container">
      <?php foreach($product as $u){ ?>
      <div>
        <img class="img-responsive" src="<?php echo base_url('assets/supplier_upload/').$u->FileName; ?>" alt="">
        <h4>IDR <?php echo number_format($u->Price, 0, '.', '.'); ?> / <?php echo $u->Unit ; ?> </h4>
        <h5><?php echo $u->Name ; ?></h5>
        <h6><?php echo $u->SupplyAbility ; ?> <?php echo $u->Unit ; ?> (Supply Ability)</h6>
        <h6><?php echo $u->PeriodSupplyAbility ; ?> (Period Ability)</h6>
        <hr>
        <div class="text-center">
          <!-- <h6>Art Silver</h6> -->
          <a href="#" class="btn btn-default">Contact Seller</a>
        </div>
      </div>
    <?php }?>
    </div>
  </div>
