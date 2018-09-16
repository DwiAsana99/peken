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


<div class="container">
  <h3>Unread Chat Notifications</h3>
          <button type="button" style="border-radius: 5px" class="btn btn-default" data-toggle="tooltip" id="BtnRefresh" title="Refresh">
            <span class="glyphicon glyphicon-refresh"></span>   
          </button>
            <hr>


            <div class="row">

              <div class="col-sm-12 col-md-12">

                <div class="tab-content">
                  <div class="tab-pane fade in active" id="home">
                    <div class="list-group" id="notif_list">

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

</div>
<script type="text/javascript">

  function get_buyer_all_notifications_chat(){
    $.getJSON( "<?php echo base_url().'Quotation/get_buyer_all_notifications_chat_json/'; ?>", function( data ) {
      $("#notif_list").empty();
      for (var key in data) {
        var notif =
        "<a id='anchor"+data[key].QuotationCode+"' href='"+data[key].Link+"' class='list-group-item' target='_newtab'>"+
        "<span class='name' style='min-width: 50px;display: inline-block;'>"+
        "<img src='"+data[key].ProfileImage+"' alt='' width='25'>"+
        "</span>"+
        "<span class='name' style='min-width: 120px;display: inline-block;'>"+data[key].QuotationCode+"</span>"+
        "<span class='name' style='min-width: 120px;display: inline-block;'>"+data[key].LastName+"</span>"+
        "<span class=''>"+data[key].Subject+"</span>"+
        "<span class='pull-right'>"+
        "<span class='badge' style='background-color:#3db73d;'>"+data[key].UnreadCount+"</span>"+
        "</span>"+
        "</a>";

        $("#notif_list").append(notif);
        // console.log(data[key].Code);
      }
    })
  }
  $(document).ready(function () {
    get_buyer_all_notifications_chat();
    setInterval(get_buyer_all_notifications_chat, 60000);
  });
  $(function(){
    $("#BtnRefresh").click(function(event){
      $("#notif_list").empty();
      get_buyer_all_notifications_chat();
    });
  });
  $(document).on('click', 'a', function () {
    $("#"+this.id).remove();
  });

</script>
