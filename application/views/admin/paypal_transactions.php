<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?= SITE_TITLE ?> Paypal Transactions</h5>
                    <div class="ibox-tools">
                        <a class="btn btn-primary btn-xs" href="http://localhost/shearcircle-services/admin/categories/add">
                            <i class="fa fa-plus" aria-hidden="true"></i> Category 
                        </a>
                    </div>

                </div>
                <div class="ibox-content">

                    <form role="form" class="form-inline" method="get">
                        <div class="form-group">
                            <label for="exampleInputEmail2" class="sr-only">From Date</label>
                            <input placeholder="From Date" name="from_date" value="<?= $this->input->get_post('from_date') ?>"
                                   class="form-control datepicker">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2" class="sr-only">To Date</label>
                            <input placeholder="To Date" name="to_date" value="<?= $this->input->get_post('to_date') ?>"
                                   class="form-control datepicker">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2" class="sr-only">Transaction Type</label>
                            <select class="form-control" name="type">
                                <option value="All">All</option>
                                <option value="Sent">Sent</option>
                                <option value="Received">Received</option>
                                <option value="FundsAdded">Funds Added</option>
                                <option value="FundsWithdrawn">Funds Withdrawn</option>
                                <option value="Subscription">Subscription</option>
                                <option value="Refund">Refund</option>
                            </select>
                        </div>
                        <button class="btn btn-info" type="submit">Submit</button>
                        OR
                        <div class="form-group">
                            <label for="exampleInputEmail2" class="sr-only">Transaction ID</label>
                            <input placeholder="Txn ID" name="transaction_id" value="<?= $this->input->get_post('by_txn') == "true" ? $this->input->get_post('transaction_id') : "" ?>"
                                   class="form-control">
                        </div>
                        <button class="btn btn-info" type="submit" name="by_txn" value="true">Get</button>
                    </form>

                    <br/>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Time</th>
                                    <th>Type</th>
                                    <th>By</th>
                                    <th>Txn ID</th>
                                    <th>Payment Status</th>
                                    <th>Amount</th>
                                    <th>Paypal Charge</th>
                                    <th>Net Amount</th>                           
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_grid as $key => $item) { ?>

                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $item[0] . " " . $item[1] ?></td>
                                        <td><?= $item[2] ?></td>
                                        <td><?= $item[3] ?></td>
                                        <td><?= $item[4] ?></td>
                                        <td><?= $item[5] ?></td>
                                        <td><?= $item[6] ?> <?= $item[7] ?></td>
                                        <td><?= $item[8] ?> <?= $item[7] ?></td>
                                        <td><?= $item[9] ?> <?= $item[7] ?></td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page-Level Scripts -->
<script>
    $(document).ready(function () {
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                {extend: 'copy'},
                {extend: 'excel', title: ' Categories'},
                {extend: 'pdf', title: ' Categories'},

                {extend: 'print',
                    customize: function (win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                    }
                }
            ]

        });
    });
</script>