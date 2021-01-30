<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">

<!--    Untuk searching -->

    <div class="row mt-3">
    <div class="ml-3">
        <a href="<?= ('driver/tambah');?>" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
            <input type="text" name="keyword" id="" placeholder="Cari Data driver..." class="form-control" autocomplete="off">
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
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data driver <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data driver <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
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
                <th>Name</th>
                <th>Code</th>
                <th>Phone 1</th>
                <th>Phone 2</th>
                <th>Join Date</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;?>
            <?php foreach ($driver as $gaj): ?>
            <tr>
                <td style="text-align:center">
                    <?php echo $i;?>
                </td>
                <td>
                    <?php echo $gaj['nama'] ?>
                </td>
                <td>
                    <?php echo $gaj['code'] ?>
                </td>
                <td>
                    <?php echo $gaj['phone'] ?>
                </td>
                <td>
                    <?php echo $gaj['phone2'] ?>
                </td>
                <td>
                    <?php echo $gaj['phone3'] ?>
                </td>
                <td>
                    <?php echo $gaj['join_date'] ?>
                </td>
                <td>
                    <?php echo $gaj['address'] ?>
                </td>
                <td style="text-align:center">
                
                <div class="btn-group" >
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu">
                    <a href="<?php echo base_url();?>driver/edit/<?= $gaj['id'];?>" class="btn btn-success mb-2" style="margin-left:40px;"><i class="fa fa-edit"></i>Edit</i></a>
                    <a href="<?= base_url();?>driver/hapus/<?= $gaj['id'];?>" class="btn btn-danger" style="margin-left:35px;" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
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