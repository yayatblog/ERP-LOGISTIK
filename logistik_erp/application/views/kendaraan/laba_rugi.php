<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">

<!--    Untuk searching -->

    <div class="row mt-3">
    <div class="ml-3">
        <a href="<?= ('invoice/tambah');?>" class="btn btn-primary">Tambah Data</a>
        <a href="<?= ('invoice/print');?>" class="btn btn-danger">Print Data</a>
    </div>
    <!-- <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
            <input type="text" name="keyword" id="" placeholder="Cari Data invoice..." class="form-control" autocomplete="off">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
            </div>
        </form>
    </div> -->
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
<div class="">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="example" class="table-responsive table table-hover" cellspacing="0" width="" style="font-size: small;">

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
    </div>
</div>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>