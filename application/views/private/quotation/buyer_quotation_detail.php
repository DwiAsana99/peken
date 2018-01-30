
  <div class="container">
    <h1>Pembelian Necklace Bahla</h1>
    <ol class="breadcrumb">
      <li>
        <a href="#">Home</a>
      </li>
      <li>
        <a>Quotation Detail</a>
      </li>
    </ol>
    <div class="row">
      <div class="col-md-7 detail">
        <div class="block cover-container">
          <?php foreach($product as $p){ ?>

          <img src="<?php echo base_url('assets/supplier_upload/').$p->FileName;?>" alt="">
          <?php } ?>
        </div>
<br><br><br><br><br><br><br><br>
Quotation id  : 1 <br>
Supplier Name : <?php echo $quotation[0]->CompanyName; ?><br>
Product Name  : <?php echo $quotation[0]->Name; ?><br>
Qty           : 10 <br><br>

        <p><?php echo $quotation[0]->Content; ?></p>
      </div>


      <div class="col-md-5">
        <div class="panel panel-default">
          <div class="panel-heading">
            <span class="glyphicon glyphicon-comment"></span> Chat

            <div class="panel-body" >
              <ul class="chat" >
                <?php foreach ($quotation_detail as $qd): ?>
                  <?php if ($this->session->userdata('id_buyer') == $qd->IdMember): ?>
                    <li class="right clearfix"><span class="chat-img pull-right">
                      <img src="<?php echo base_url('assets/supplier_upload/').$qd->ProfilImage ?>" alt="User Avatar" width="60" class="img-circle" />
                    </span>
                    <div class="chat-body clearfix">
                      <div class="header">
                        <small class=" text-muted"><span class="glyphicon glyphicon-time"></span><?php echo $qd->DateSend; ?></small>
                        <strong class="pull-right primary-font"><?php echo $qd->CompanyName; ?></strong>
                      </div>
                      <p>
                        <?php echo $qd->Message; ?>
                      </p>
                    </div>
                  </li>
                  <?php else: ?>
                    <li class="left clearfix"><span class="chat-img pull-left">
                      <img src="<?php echo base_url('assets/supplier_upload/').$qd->ProfilImage ?>" width="55" class="img-circle" />
                    </span>
                    <div class="chat-body clearfix">
                      <div class="header">
                        <strong class="primary-font"><?php echo $qd->CompanyName; ?></strong> <small class="pull-right text-muted">
                          <span class="glyphicon glyphicon-time"></span><?php echo $qd->DateSend; ?></small>
                        </div>
                        <p>
                          <?php echo $qd->Message; ?>
                        </p>
                      </div>
                    </li>
                  <?php endif; ?>
                <?php endforeach; ?>
                <div class="badan_chat">

                </div>


          </ul>
        </div>
        <div class="panel-footer">
          <!-- <form class="" id="Simpan" action="<?php //echo base_url().'index.php/Quotation/add_quotation_detail'; ?>" method="post" > -->
          <div class="input-group">
              <input type="hidden" name="id_member" value="<?php echo $this->session->userdata('id_supplier'); ?>">
              <input type="hidden" name="id_quotation" value="<?php echo $quotation[0]->IdQuotation;; ?>">
            <input onkeypress="return runScript(event)" type="text"  name="message" class="form-control input-sm" placeholder="Type your message here..." />
            <span class="input-group-btn">
              <a type="submit" id="addPesan" class="btn btn-warning btn-sm" id="btn-chat" >
                Send</a>
              </span>

            </div>
            <!-- </form> -->
          </div>
        </div>
      </div>
    </div>
      <!-- CHAT DESIGN DETA -->
      <!-- <div class="col-md-4 col-md-offset-1 chat">
        <h2>Chat</h2>
        <div class="chat-room scrollbar" id="scrollbar-custom">
          <div class="buyer">
            <div class="left">
              <span>
                <img class="img-responsive img-circle" src="./assets/img/minisite.jpg" alt="" srcset=""> <b>Deta</b></span>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam nulla quia nobis! Dicta temporibus atque modi asperiores placeat,
                veritatis in aut blanditiis soluta repudiandae hipsam voluptates minima adipisci exercitationem autem!
              </p>
              <div style="font-size: 0.8em;text-align: center;word-spacing: 9px;">11/12/2018 09:10AM</div>
            </div>
          </div>
          <div class="seller">
            <div class="right">
              <span style="float:right">
              <b>Deta</b> <img class="img-responsive img-circle" src="./assets/img/necklace.jpg">
              </span>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam nulla quia nobis! Dicta temporibus atque modi
                asperiores placeat, veritatis in aut blanditiis soluta repudiandae ipsam voluptates minima adipisci exercitationem
                autem!
              </p>
              <div style="font-size: 0.8em;text-align: center;word-spacing: 9px;">11/12/2018 09:10AM</div>
            </div>
          </div>
          <div class="buyer">
            <div class="left">
              <span>
                <img class="img-responsive img-circle" src="./assets/img/minisite.jpg" alt="" srcset=""> <b>Deta</b></span>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              </p>
              <div style="font-size: 0.8em;text-align: center;word-spacing: 9px;">11/12/2018 09:10AM</div>
            </div>
          </div>
          <div class="seller">
            <div class="right">
              <span style="float:right">
              <b>Deta</b> <img class="img-responsive img-circle" src="./assets/img/necklace.jpg">
              </span>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                autem!
              </p>
              <div style="font-size: 0.8em;text-align: center;word-spacing: 9px;">11/12/2018 09:10AM</div>
            </div>
          </div>
          <div class="buyer">
            <div class="left">
              <span>
                <img class="img-responsive img-circle" src="./assets/img/minisite.jpg" alt="" srcset=""> <b>Deta</b></span>
              <p>
                Lorem
              </p>
              <div style="font-size: 0.8em;text-align: center;word-spacing: 9px;">11/12/2018 09:10AM</div>
            </div>
          </div>
          <div class="seller">
            <div class="right">
              <span style="float:right">
              <b>Deta</b> <img class="img-responsive img-circle" src="./assets/img/necklace.jpg">
              </span>
              <p>Lorem
              </p>
              <div style="font-size: 0.8em;text-align: center;word-spacing: 9px;">11/12/2018 09:10AM</div>
            </div>
          </div>
        </div>
        <div class="input-group message">
          <input type="text" class="form-control">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Send</button>
          </span>
        </div>
      </div> -->
    </div>
  </div>
  <script>
    $(document).ready(function () {
      var a = $(".chat-room")[0].scrollHeight;
      $(".chat-room").delay(800).animate({
        scrollTop: a
      }, 500);
    });
  </script>
