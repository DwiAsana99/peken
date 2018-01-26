<?php $title['tit']  = "Dinilaku"; $this->load->view('template/front/head_front',$title); ?>
    <style>
        table a:not(.btn),
        .table a:not(.btn) {
            text-decoration: none;
        }

        tr.hover {
            cursor: pointer;
            /* whatever other hover styles you want */
        }
    </style>
<?php $this->load->view('template/front/navigation'); ?>
    <div class="container">
        <h1>Quotation List</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a>Quotation List</a>
            </li>
        </ol>

        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for.." title="Type in a name">

        <table id="myTable">
          <?php foreach($quotation as $q){ ?>
            <tr>
                <td>
                    <a href="<?php echo base_url().'index.php/Quotation/supplier_quotation_detail?id_quotation='.$q->IdQuotation; ?>">To: <?php echo $q->CompanyName  ?></a>
                </td>
                <td>Pembelian <?php echo $q->Name  ?></td>
                <td><?php echo trim(substr($q->Content,0,50))." <b>...</b>" ?></td>
                <td><?php echo $q->DateSend  ?></td>
            </tr>
            <?php } ?>
            <!-- <tr>
                <td>To: Art Silver</td>
                </a>
                <td>Pembelian Necklace</td>
                </a>
                <td>Lorem Ipsum dolor sit amet...</td>
                </a>
                <td>19 / 01 / 2018</td>
                </a>
            </tr>
            <tr>
                <td>To: Art Silver</td>
                <td>Pembelian Necklace</td>
                <td>Lorem Ipsum dolor sit amet...</td>
                <td>19 / 01 / 2018</td>
            </tr>
            <tr>
                <td>To: Art Silver</td>
                <td>Pembelian Necklace</td>
                <td>Lorem Ipsum dolor sit amet...</td>
                <td>19 / 01 / 2018</td>
            </tr> -->
        </table>
    </div>
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        $('tr').click(function () {
            window.location = $(this).find('a').attr('href');
        }).hover(function () {
            $(this).toggleClass('hover');
        });
    </script>
<?php $this->load->view('template/front/foot_front'); ?>
