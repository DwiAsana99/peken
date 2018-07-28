<style media="screen">
  $main-color: #f0f0f0;
  $secondary-color: #1d1f20;

  @mixin display-child($n) {
    @for $i from 2 through $n {
      &:nth-child(#{$i}) {
        a {
          display: inline-block;
        }
      }
    }
  }



    /* .container {
  background: lighten($main-color, 5%);
  padding: 1rem;
  margin: 3rem auto;
  border-radius: 0.2rem;
  counter-reset: pagination;
  text-align: center;
  &:after {
    clear: both;
    content: "";
    display: table;
  }
  ul {
    width: 100%;
  }
  } */

  .xlarge {
    width: 65rem;
  }

  .large {
    width: 45rem;
  }

  .middle {
    width: 32rem;
  }

  .small {
    width: 22rem;
  }

  .xsmall {
    width: 14rem;
  }

  ul,
  li {
    list-style: none;
    display: inline;
    padding-left: 0px;
  }

  li {
    counter-increment: pagination;
    &:hover {
      a {
        color: lighten($main-color, 5%);
        background-color: $secondary-color;
        border: solid 1px $secondary-color;
      }
    }
    &.active {
      a {
        color: lighten($main-color, 5%);
        background-color: $secondary-color;
        border: solid 1px $secondary-color;
      }
    }
    &:first-child {
      float: left;
      a {
        &:after {
          content: "Previous";
        }
      }
    }
    &:nth-child(2) {
      counter-reset: pagination;
    }
    &:last-child {
      float: right;
      a {
        &:after {
          content: "Next";
        }
      }
    }
    a {
      border: solid 1px darken($main-color, 10%);
      border-radius: 0.2rem;
      color: darken($main-color, 45%);
      text-decoration: none;
      text-transform: uppercase;
      display: inline-block;
      text-align: center;
      padding: 0.5rem 0.9rem;
    }
    a:after {
      content: " " counter(pagination) " ";
    }
  }

  .large {
    li {
      a {
        display: none;
      }
      &:first-child {
        a {
          display: inline-block;
        }
        a:after {
          content: "Previous";
        }
      }
      @include display-child(8);
      &:last-child {
        a {
          display: inline-block;
        }
        a:after {
          content: "Next";
        }
      }
      &:nth-last-child(2) {
        a {
          display: inline-block;
        }
      }
      &:nth-last-child(3) {
        display: inline-block;
        &:after {
          padding: 0 1rem;
          content: "...";
        }
      }
    }
  }

  .middle {
    li {
      a {
        display: none;
      }
      &:first-child {
        a {
          display: inline-block;
        }
        a:after {
          content: "<";
        }
      }
      &:last-child {
        a {
          display: inline-block;
        }
        a:after {
          content: ">";
        }
      }
      @include display-child(5);
      &:nth-last-child(2) {
        a {
          display: inline-block;
        }
      }
      &:nth-last-child(3) {
        display: inline-block;
        &:after {
          padding: 0 1rem;
          content: "...";
        }
      }
    }
  }

  .small {
    li {
      display: none;
      &:first-child {
        width: 50%;
        display: inline;
        a:after {
          content: "Previous Page";
        }
      }
      &:last-child {
        display: inline;
        a:after {
          content: "Next Page";
        }
      }
    }
  }

  .xsmall {
    li {
      display: none;
      &.active {
        display: inline;
      }
      &:first-child {
        display: inline;
        a:after {
          content: "Prev";
        }
      }
      &:last-child {
        display: inline;
        a:after {
          content: "Next";
        }
      }
    }
  }
</style>
<div class="container">
  <ol class="breadcrumb">
    <?php if (isset($breadcrumb)): ?>
    <?php echo $breadcrumb ?>
    <?php endif; ?>


  </ol>
  <div class="my-container">

    <?php $i = 1; foreach($product as $p){ ?>
    <div class="tes-hover">
      <a href="<?php echo site_url('Product/public_product_detail_view/').$p->ProductId ?>">
        <img class="img-responsive" src="<?php echo base_url('assets/supplier_upload/').$p->FileName?>" alt="">
      </a>
      <h4>US $
        <?php echo number_format($p->MinPrice, 0, '.', '.'); ?> - <?php echo number_format($p->MaxPrice, 0, '.', '.'); ?>
      </h4>
      <h5>
        <?php echo $p->Name; ?>
      </h5>
      <div class="detail-display">
        <h6>
          <?php echo number_format($p->SupplyAbility, 0, '.', '.')." ".$p->Unit; ?> (Supply Ability)</h6>
        <h6>
          <?php echo $p->PeriodSupplyAbility; ?> (Period Ability)</h6>
      </div>
      <hr>
      <div class="text-center">
        <h6>
          <?php echo $p->CompanyName; ?>
        </h6>
        <a href="<?php echo site_url('Quotation/rfq_view?')." product_id=".$p->ProductId." & "."supplier_id=".$p->SupplierId ?>"
          class="btn btn-default">Contact Supplier</a>
      </div>
    </div>
    <?php } ?>

  </div>
  <div class="text-center ">
    <ul class="pagination pagination-large">
      <?php
    // print_r($links);exit();
    foreach ($links as $link) {
      echo $link;
    } ?>
    </ul>
  </div>
</div>