<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css
https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css"> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css
https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css"> -->

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            <th>No.</th>
                <th>Date</th>
                <th>Delivered Date</th>
                <th>Due Date</th>
                <th>Invoice No</th>
                <th>Customer</th>
                <th>Tax One</th>
                <th>Tax Delivery</th>
                <th>Total</th>
                <th>Insurace</th>
                <th>PPN</th>
                <th>Down Pay</th>
                <th>Netto</th>
                <th>Paid</th>
                <th>Payment</th>
                <th>Paid Date</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $i=1;?>
            <?php foreach ($invoice as $gaj): ?>
            <tr>
                <td style="text-align:center">
                    <?php echo $i;?>
                </td>
                <td>
                    <?php echo $gaj['date'] ?>
                </td>
                <td>
                    <?php echo $gaj['delivered_date'] ?>
                </td>
                
                <td>
                    <?php echo $gaj['date2'] ?>
                </td>
                <td>
                    <?php echo $gaj['invoice_no'] ?>
                </td>
                <td>
                    <?php echo $gaj['customer'] ?>
                </td>
                <td>
                <?php echo $gaj['tax_no'] ?>
                </td>
                <td>
                    <?php echo $gaj['delivered_date'] ?>
                </td>
                <td>
                    <?php echo $gaj['total'] ?>
                </td>
                <td>
                    <?php echo $gaj['insurance'] ?>
                </td>
                <td>
                    <?php echo $gaj['ppn'] ?>
                </td>
                <td>
                    <?php echo $gaj['down_payment'] ?>
                </td>
                <td>
                    <?php echo $gaj['netto'] ?>
                </td>
                <td>
                    <?php echo $gaj['paid'] ?>
                </td>
                <td>
                    <!-- <?php
                    // echo $gaj['payment_date'] ?> -->
                    Ini diambil dari data Rent
                </td>
                <td>
                    <?php echo $gaj['date'] ?>
                </td>
                
                
                <td style="text-align:center">
                
                <div class="btn-group" >
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu">
                    <a href="<?php echo base_url();?>invoice/edit/<?= $gaj['id'];?>" class="btn btn-success mb-2" style="margin-left:35px;"><i class="fa fa-edit"></i>Edit</i></a>
                    <a href="<?= base_url();?>invoice/hapus/<?= $gaj['id'];?>" class="btn btn-danger mb-2 " style="margin-left:30px;" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
                    </div>
                </div>
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach; ?>
        </tbody>
    </table>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>