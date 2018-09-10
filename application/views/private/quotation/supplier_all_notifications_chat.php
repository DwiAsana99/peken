<style media="screen">

.nav-tabs .glyphicon:not(.no-margin) { margin-right:10px; }
.tab-pane .list-group-item:first-child {border-top-right-radius: 0px;border-top-left-radius: 0px;}
.tab-pane .list-group-item:last-child {border-bottom-right-radius: 0px;border-bottom-left-radius: 0px;}
.tab-pane .list-group .checkbox { display: inline-block;margin: 0px; }
.tab-pane .list-group input[type="checkbox"]{ margin-top: 2px; }
.tab-pane .list-group .glyphicon { margin-right:5px; }
.tab-pane .list-group .glyphicon:hover { color:#FFBC00; }
a.list-group-item.read { color: #222;background-color: #F3F3F3; }
hr { margin-top: 5px;margin-bottom: 10px; }
.nav-pills>li>a {padding: 5px 10px;}

.ad { padding: 5px;background: #F5F5F5;color: #222;font-size: 80%;border: 1px solid #E5E5E5; }
.ad a.title {color: #15C;text-decoration: none;font-weight: bold;font-size: 110%;}
.ad a.url {color: #093;text-decoration: none;}
</style>


<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Unread Chat Notifications</h3>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <button type="button" class="btn btn-default" data-toggle="tooltip" title="Refresh">
            <span class="glyphicon glyphicon-refresh"></span>   </button>
            <hr>


            <div class="row">

              <div class="col-sm-12 col-md-12">

                <div class="tab-content">
                  <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
                      <a href="https://github.com/DwiPutraCrotAsana/peken/network" class="list-group-item">
                        <!-- <div class=""> -->
                          <img src="<?php echo base_url().'assets/supplier_upload/'.'344395.png' ?>" alt="" width="25">
                        <!-- </div> -->

                        <span class="name" style="min-width: 120px;
                        display: inline-block;">Bhaumik Patel
                      </span>
                      <span class="">Pembelian</span>
                      <span class="text-muted" style="font-size: 11px;">- Hi hello how r u ?</span>
                      <span class="pull-right">
                        <span class="badge" style='background-color:#3db73d;'>12</span>
                      </span>
                    </a>
                    <a href="#" class="list-group-item">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">
                        </label>
                      </div>
                      <span class="glyphicon glyphicon-star-empty"></span><span class="name" style="min-width: 120px;
                      display: inline-block;">Bhaumik Patel</span> <span class="">This is big title</span>
                      <span class="text-muted" style="font-size: 11px;">- Hi hello how r u ?</span> <span
                      class="badge">12:10 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                      </span></span>
                    </a>
                    <a href="#" class="list-group-item read">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">
                        </label>
                      </div>
                      <span class="glyphicon glyphicon-star"></span><span class="name" style="min-width: 120px;
                      display: inline-block;">Bhaumik Patel</span> <span class="">This is big title</span>
                      <span class="text-muted" style="font-size: 11px;">- Hi hello how r u ?</span> <span
                      class="badge">12:10 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                      </span></span>
                    </a>
                  </div>
                </div>
                <div class="tab-pane fade in" id="profile">
                  <div class="list-group">
                    <div class="list-group-item">
                      <span class="text-center">This tab is empty.</span>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>



        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
  <!-- Modal -->

</section><!-- /.content -->
