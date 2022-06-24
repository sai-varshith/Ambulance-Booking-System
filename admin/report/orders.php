<style>
    table td,table th{
        padding: 3px !important;
    }
</style>
<?php 
$date_start = isset($_GET['date_start']) ? $_GET['date_start'] :  date("Y-m-d",strtotime(date("Y-m-d")." -7 days")) ;
$date_end = isset($_GET['date_end']) ? $_GET['date_end'] :  date("Y-m-d") ;
?>
<div class="card card-warning card-outline">
    <div class="card-header">
        <h5 class="card-title">Vehicle Service Requests Report</h5>
    </div>
    <div class="card-body">
        <form id="filter-form">
            <div class="row align-items-end">
                <div class="form-group col-md-3">
                    <label for="date_start">Date Start</label>
                    <input type="date" class="form-control form-control-sm" name="date_start" value="<?php echo date("Y-m-d",strtotime($date_start)) ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="date_start">Date End</label>
                    <input type="date" class="form-control form-control-sm" name="date_end" value="<?php echo date("Y-m-d",strtotime($date_end)) ?>">
                </div>
                <div class="form-group col-md-1">
                    <button class="btn btn-flat btn-block btn-primary btn-sm"><i class="fa fa-filter"></i> Filter</button>
                </div>
                <div class="form-group col-md-1">
                    <button class="btn btn-flat btn-block btn-success btn-sm" type="button" id="printBTN"><i class="fa fa-print"></i> Print</button>
                </div>
            </div>
        </form>
        <hr>
        <div id="printable">
            <div>
                <h4 class="text-center m-0"><?php echo $_settings->info('name') ?></h4>
                <h3 class="text-center m-0"><b>Order Report</b></h3>
                <p class="text-center m-0">Date Between <?php echo $date_start ?> and <?php echo $date_end ?></p>
                <hr>
            </div>
            <table class="table table-bordered">
                <colgroup>
                    <col width="5%">
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                    <col width="15%">
                    <col width="20%">
                </colgroup>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date Time</th>
                        <th>Ref. Code</th>
                        <th>Client Name</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i = 1;
                        $mechanic = $conn->query("SELECT * FROM mechanics_list");
                        $result = $mechanic->fetch_all(MYSQLI_ASSOC);
                        $mech_arr = array_column($result,'name','id');
                        $where = "where date(o.date_created) between '{$date_start}' and '{$date_end}'";
                        $qry = $conn->query("SELECT o.*,CONCAT(c.lastname,', ',c.firstname,' ',c.middlename) as fullname from order_list o inner join client_list c on o.client_id = c.id {$where} order by unix_timestamp(o.date_created) desc");
                        while($row = $qry->fetch_assoc()):
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $i++ ?></td>
                        <td><?php echo $row['date_created'] ?></td>
                        <td><?php echo $row['ref_code'] ?></td>
                        <td><?php echo $row['fullname'] ?></td>
                        <td class="text-right"><?= number_format($row['total_amount'],2) ?></td>
                        <td class='text-center'>
                            <?php if($row['status'] == 0): ?>
                                <span class="badge badge-secondary px-3 rounded-pill">Pending</span>
                            <?php elseif($row['status'] == 1): ?>
                                <span class="badge badge-primary px-3 rounded-pill">Packed</span>
                            <?php elseif($row['status'] == 2): ?>
                                <span class="badge badge-success px-3 rounded-pill">For Delivery</span>
                            <?php elseif($row['status'] == 3): ?>
                                <span class="badge badge-warning px-3 rounded-pill">On the Way</span>
                            <?php elseif($row['status'] == 4): ?>
                                <span class="badge badge-default bg-gradient-teal px-3 rounded-pill">Delivered</span>
                            <?php else: ?>
                                <span class="badge badge-danger px-3 rounded-pill">Cancelled</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                    <?php if($qry->num_rows <= 0): ?>
                    <tr>
                        <td class="text-center" colspan="6">No Data...</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<noscript>
    <style>
        .m-0{
            margin:0;
        }
        .text-center{
            text-align:center;
        }
        .text-right{
            text-align:right;
        }
        .table{
            border-collapse:collapse;
            width: 100%
        }
        .table tr,.table td,.table th{
            border:1px solid gray;
        }
    </style>
</noscript>
<script>
    $(function(){
        $('#filter-form').submit(function(e){
            e.preventDefault()
            location.href = "./?page=report/orders&date_start="+$('[name="date_start"]').val()+"&date_end="+$('[name="date_end"]').val()
        })

        $('#printBTN').click(function(){
            var rep = $('#printable').clone();
            var ns = $('noscript').clone().html();
            start_loader()
            rep.prepend(ns)
            var nw = window.document.open('','_blank','width=900,height=600')
                nw.document.write(rep.html())
                nw.document.close()
                nw.print()
                setTimeout(function(){
                    nw.close()
                    end_loader()
                },500)
        })
    })
</script>