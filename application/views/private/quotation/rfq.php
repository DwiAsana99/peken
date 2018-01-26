<?php $title['tit']  = "Dinilaku"; $this->load->view('template/front/head_front',$title); ?>

  <style>
     #info {
        margin-bottom: 15vh;
      }
    @media screen and (max-width: 480px) {
      #info {
        text-align: center;
        margin-bottom: 15vh;
      }
      #info img {
        margin: 0 auto;
      }
    }
  </style>
  <script>
    $(document).ready(function () {
      $('#summernote').summernote({
        height: 300, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: true // set focus to editable area after initializing summernote
      });
    });
  </script>
<?php $this->load->view('template/front/navigation'); ?>
  <div id="info" class="container">
  <ol class="breadcrumb">
      <li>
        <a href="#">Home</a>
      </li>
      <li>
        <a>Request Quotation</a>
      </li>
    </ol>
    <div class="col-md-4">
      <img class="img-responsive" src="<?php echo base_url('assets/supplier_upload/').$product[0]->FileName;?>" alt="" srcset="">
    </div>
    <div class="col-md-4">
      <h2><?php echo $product[0]->Name; ?></h2>
      <h5><?php echo $supplier[0]->CompanyName; ?></h5>
      <br>
      <div class="form-group">
        <label for="qty">Quantity</label>
        <input type="number" class="form-control" id="qty">
      </div>
      <div class="form-group">
        <label for="unit">Unit:</label>
        <select class="form-control" id="unit">
          <option>Pcs</option>
          <option>Dozen</option>
        </select>
      </div>
    </div>
  </div>

    <div class="container">
      <form action="">
        <div id="summernote"></div>
        <button class="btn btn-warning pull-right" type="submit">Send RFQ</button>
      </form>
    </div>
<?php $this->load->view('template/front/foot_front'); ?>
