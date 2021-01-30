
<html lang="en">
<head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Data Invoice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head><body>
    <h1 style="text-align:center">Daftar Invoice</h1>
    <div class="table table-bordered">
    <table id="mytable" class="" cellspacing="0" width="" style="font-size: small;" border="1">

    <div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">

<!--    Untuk searching -->

    <div class="row mt-3">
    
    
</div>
  

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data invoice <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data invoice <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
<div class="table-responsive mt-2">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-hover" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr style="text-align:center">
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
                
                
                
            </tr>
            <?php $i++;?>
            <?php endforeach; ?>

        </tbody>
    </table>
    </div>
</div>

        </tbody>
    </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body></html>
