<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">

<!--    Untuk searching -->

    <div class="row mt-3">
    <div class="ml-3">
        <a href="<?= ('truck/tambah');?>" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
            <input type="text" name="keyword" id="" placeholder="Cari Data truck..." class="form-control" autocomplete="off">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
            </div>
        </form>
    </div>
</div>
  

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data truck <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data truck <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
<div class="table-responsive mt-2">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr style="text-align:center">
                <th>No.</th>
                <th>Truck No</th>
                <th>Group Truck</th>
                <th>Driver</th>
                <th>Kernet</th>
                <th>Initial</th>
                <th>Distance</th>
                <th>KIR</th>
                <th>STNK</th>
                <th>Target</th>
                <th>Year</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;?>
            <?php foreach ($truck as $gaj): ?>
            <tr>
                <td style="text-align:center">
                    <?php echo $i;?>
                </td>
                <td>
                    <?php echo $gaj['truck_no'] ?>
                </td>
                <td>
                    <?php echo $gaj['group_truck'] ?>
                </td>
                <td>
                    <?php echo $gaj['driver'] ?>
                </td>
                <td>
                    <?php echo $gaj['kernet'] ?>
                </td>
                <td>
                    <?php echo $gaj['initial'] ?>
                </td>
                <td>
                    <?php echo $gaj['distance'] ?>
                </td>
                <td>
                    <?php echo $gaj['kir'] ?>
                </td>
                <td>
                    <?php echo $gaj['stnk'] ?>
                </td>
                <td>
                    <?php echo $gaj['target'] ?>
                </td>
                <td>
                    <?php echo $gaj['year'] ?>
                </td>
                <td style="text-align:center">
                
                <div class="btn-group" >
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu">
                    <a href="<?php echo base_url();?>truck/edit/<?= $gaj['id'];?>" class="btn btn-success mb-2" style="margin-left:40px;"><i class="fa fa-edit"></i>Edit</i></a>
                    <a href="<?= base_url();?>truck/hapus/<?= $gaj['id'];?>" class="btn btn-danger" style="margin-left:35px;" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
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