<style>
    /*
  Credits:
  https://github.com/marcaube/bootstrap-magnify
  */

  .mag {
    width: 50%;
    margin: 0 auto;
    float: none;
  }

  .mag img {
    max-width: 100%;
  }

  .magnify {
    position: relative;
    cursor: none
  }

  .col-xs-2 {
    z-index: -1;
  }

  .magnify-large {
    position: absolute;
    display: none;
    width: 300px;
    height: 300px;

    -webkit-box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 0 0 7px 7px rgba(0, 0, 0, 0.25), inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
    -moz-box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 0 0 7px 7px rgba(0, 0, 0, 0.25), inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
    box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 0 0 7px 7px rgba(0, 0, 0, 0.25), inset 0 0 40px 2px rgba(0, 0, 0, 0.25);

    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%
  }
</style>

<script>
  /*
  Credits:
  https://github.com/marcaube/bootstrap-magnify
  */


  ! function ($) {

    "use strict"; // jshint ;_;


    /* MAGNIFY PUBLIC CLASS DEFINITION
     * =============================== */

    var Magnify = function (element, options) {
      this.init('magnify', element, options)
    }

    Magnify.prototype = {

      constructor: Magnify

        ,
      init: function (type, element, options) {
          var event = 'mousemove',
            eventOut = 'mouseleave';

          this.type = type
          this.$element = $(element)
          this.options = this.getOptions(options)
          this.nativeWidth = 0
          this.nativeHeight = 0

          this.$element.wrap('<div class="magnify" \>');
          this.$element.parent('.magnify').append('<div class="magnify-large" \>');
          this.$element.siblings(".magnify-large").css("background", "url('" + this.$element.attr("src") +
            "') no-repeat");

          this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
          this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
        }

        ,
      getOptions: function (options) {
          options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data())

          if (options.delay && typeof options.delay == 'number') {
            options.delay = {
              show: options.delay,
              hide: options.delay
            }
          }

          return options
        }

        ,
      check: function (e) {
        var container = $(e.currentTarget);
        var self = container.children('img');
        var mag = container.children(".magnify-large");

        // Get the native dimensions of the image
        if (!this.nativeWidth && !this.nativeHeight) {
          var image = new Image();
          image.src = self.attr("src");

          this.nativeWidth = image.width;
          this.nativeHeight = image.height;

        } else {

          var magnifyOffset = container.offset();
          var mx = e.pageX - magnifyOffset.left;
          var my = e.pageY - magnifyOffset.top;

          if (mx < container.width() && my < container.height() && mx > 0 && my > 0) {
            mag.fadeIn(100);
          } else {
            mag.fadeOut(100);
          }

          if (mag.is(":visible")) {
            var rx = Math.round(mx / container.width() * this.nativeWidth - mag.width() / 2) * -1;
            var ry = Math.round(my / container.height() * this.nativeHeight - mag.height() / 2) * -1;
            var bgp = rx + "px " + ry + "px";

            var px = mx - mag.width() / 2;
            var py = my - mag.height() / 2;

            mag.css({
              left: px,
              top: py,
              backgroundPosition: bgp
            });
          }
        }

      }
    }


    /* MAGNIFY PLUGIN DEFINITION
     * ========================= */

    $.fn.magnify = function (option) {
      return this.each(function () {
        var $this = $(this),
          data = $this.data('magnify'),
          options = typeof option == 'object' && option
        if (!data) $this.data('tooltip', (data = new Magnify(this, options)))
        if (typeof option == 'string') data[option]()
      })
    }

    $.fn.magnify.Constructor = Magnify

    $.fn.magnify.defaults = {
      delay: 0
    }


    /* MAGNIFY DATA-API
     * ================ */

    $(window).on('load', function () {
      $('[data-toggle="magnify"]').each(function () {
        var $mag = $(this);
        $mag.magnify()
      })
    })

  }(window.jQuery);
</script>

<div class="container">
  <ol class="breadcrumb">
    <?php if (isset($breadcrumb)): ?>
    <?php echo $breadcrumb ?>
    <?php endif; ?>
  </ol>
  <div id="detail">
    <div class="contain_obj">
      <div class="mag">
        <?php $i = 1; foreach($product as $p){
        if ($i == 1 ) { ?>
        <img data-toggle="magnify" src="<?php echo base_url('assets/supplier_upload/').$p->FileName;?>" id="image<?php echo $i ?>"
          class="image-toggle">
        <?php } elseif($i > 1 AND $i < 6) {?>
        <img data-toggle="magnify" src="<?php echo base_url('assets/supplier_upload/').$p->FileName;?>" title="image 2" alt="image 2"
          id="image<?php echo $i ?>" class="image-toggle" style="display:none;">
        <?php }
        $i++;
        }
      ?>
      </div>
      <hr>
      <?php $i = 1; foreach($product as $p){ ?>
      <div class="col-xs-2 padding_0">
        <img class="img-responsive image-toggler" data-image-id="#image<?php echo $i ?>" src="<?php echo base_url('assets/supplier_upload/').$p->FileName;?>"
        />
      </div>
      <?php $i++;  } ?>
    </div>
    <div>
      <h1>
        <?php echo $product[0]->Name; ?>
      </h1>
      <h2>Rp.
        <?php echo number_format($product[0]->MinPrice, 0, '.', '.'); ?>
      </h2>
      <p>Category :
        <?php echo $product[0]->ProductCategory; ?>
      </p>
      <p>Sub Category :
        <?php echo $product[0]->ProductSubCategory; ?>
      </p>
      <p>Supply Ability :
        <?php echo $product[0]->SupplyAbility; ?>
      </p>
      <p>Period Supply Ability :
        <?php echo $product[0]->PeriodSupplyAbility; ?>
      </p>
      <?php if ($product[0]->IsPublished == 1): ?>
      <a class="btn btn-primary contact" href="<?php echo site_url('Quotation/rfq_view?')." product_id=".$product[0]->ProductId."
        & "."supplier_id=".$p->SupplierId ?>">Contact Supplier
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
      </a>
      <?php else: ?>
      <p>
        <b>This product no longer available</b>
      </p>
      <?php endif; ?>
    </div>
  </div>
  <ul class="nav nav-tabs">
    <li class="active">
      <a href="#1a" data-toggle="tab">Description</a>
    </li>
    <li>
      <a href="#2a" data-toggle="tab">Seller</a>
    </li>
  </ul>
  <div class="tab-content clearfix">
    <div class="tab-pane active" id="1a">
      <div style="margin-top:20px">
        <?php echo $product[0]->ProductDescription; ?>
      </div>
    </div>
    <div class="tab-pane seller_detail" id="2a">
      <br>
      <a href="<?php echo site_url('User/supplier_mini_site_view?')."supplier_id=".$p->SupplierId ?>">
        <p>
          <img class=" img-responsive seller_img" src="<?php echo base_url('assets/supplier_upload/').$p->ProfileImage;  ?>" width="100"
            height="100" alt="">
        </p>
        <p>
          <?php echo $p->CompanyName; ?>
        </p>
      </a>
      <div>kfc@gmail.com</div>
      <div>Ngurah rai street no 23</div>
      <div>081234567890</div>
      <div>This is static description</div>
    </div>
  </div>
  <h2>Related products</h2>
  <div class="my-container">
    <div>
      <img class="img-responsive" src="https://img10.jd.id/Indonesia/s800x800_/nHBfsgAABwAAAAYAJwAZ9QAAy9I.jpg?_ga=2.31647994.598327110.1516764553-1000888939.1509532365"
        alt="">
      <h4>IDR Rp1.200.000 / pcs</h4>
      <h5>Kesslers Diamonds</h5>
      <h6>10 pcs (Supply Ability)</h6>
      <h6>Daily (Period Ability)</h6>
      <hr>
      <div class="text-center">
        <h6>Art Silver</h6>
        <a href="#" class="btn btn-default">Contact Seller</a>
      </div>
    </div>
    <div>
      <img class="img-responsive" src="https://img10.jd.id/Indonesia/s800x800_/nHBfsgAABwAAAAYAJwAZ9QAAy9I.jpg?_ga=2.31647994.598327110.1516764553-1000888939.1509532365"
        alt="">
      <h4>IDR Rp1.200.000 / pcs</h4>
      <h5>Kesslers Diamonds</h5>
      <h6>10 pcs (Supply Ability)</h6>
      <h6>Daily (Period Ability)</h6>
      <hr>
      <div class="text-center">
        <h6>Art Silver</h6>
        <a href="#" class="btn btn-default">Contact Seller</a>
      </div>
    </div>
    <div>
      <img class="img-responsive" src="https://img10.jd.id/Indonesia/s800x800_/nHBfsgAABwAAAAYAJwAZ9QAAy9I.jpg?_ga=2.31647994.598327110.1516764553-1000888939.1509532365"
        alt="">
      <h4>IDR Rp1.200.000 / pcs</h4>
      <h5>Kesslers Diamonds</h5>
      <h6>10 pcs (Supply Ability)</h6>
      <h6>Daily (Period Ability)</h6>
      <hr>
      <div class="text-center">
        <h6>Art Silver</h6>
        <a href="#" class="btn btn-default">Contact Seller</a>
      </div>
    </div>
    <div>
      <img class="img-responsive" src="https://img10.jd.id/Indonesia/s800x800_/nHBfsgAABwAAAAYAJwAZ9QAAy9I.jpg?_ga=2.31647994.598327110.1516764553-1000888939.1509532365"
        alt="">
      <h4>IDR Rp1.200.000 / pcs</h4>
      <h5>Kesslers Diamonds</h5>
      <h6>10 pcs (Supply Ability)</h6>
      <h6>Daily (Period Ability)</h6>
      <hr>
      <div class="text-center">
        <h6>Art Silver</h6>
        <a href="#" class="btn btn-default">Contact Seller</a>
      </div>
    </div>
  </div>
</div>


<script>
  $('.image-toggler').click(function () {
    $('.image-toggle').hide();
    $($(this).attr('data-image-id')).show();
  });
</script>