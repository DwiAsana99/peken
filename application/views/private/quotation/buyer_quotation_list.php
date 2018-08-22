<style>
    table a:not(.btn),
    .table a:not(.btn) {
        text-decoration: none;
    }

    tr.hover {
        cursor: pointer;
        /* whatever other hover styles you want */
    }

    #example {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
    }
</style>

<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/jquery.dataTables.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/dataTables.bootstrap.min.js') ?>" type="text/javascript"></script>

<div class="container">
    <h1>Quotation List</h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo site_url('Home/home_view/') ?>">Home</a>
        </li>
        <li class='active'>
            Quotation List
        </li>
    </ol>

    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Send</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($quotation as $q){ ?>
            <tr class="click">
                <td>
                    <a href="<?php echo base_url().'index.php/Quotation/buyer_quotation_detail?quotation_code='.$q->Code; ?>">To:
                        <?php echo $q->CompanyName  ?>
                    </a>
                </td>
                <td>Pembelian
                    <?php echo $q->Name  ?>
                </td>
                <td>
                    <?php echo trim(substr($q->Content,0,50))." <b>...</b>" ?>
                </td>
                <td>
                    <?php echo $q->SendDate  ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
        $('.click').click(function () {
            window.location = $(this).find('a').attr('href');
        }).hover(function () {
            $(this).toggleClass('hover');
        });
    });
</script>
