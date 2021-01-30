<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">

<!-- <ol class=""> -->
<!-- <h2>
    Menu Data Produk
    <div class="row mt-3">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
            <input type="text" name="keyword" id="" placeholder="Cari Data Produk..." class="form-control" autocomplete="off">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
            </div>
        </form>
    </div>
</div>
</h2> -->

  

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Produk <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Produk <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
<!-- <div class="btn-group"> -->
<a href="<?= base_url('barang/tambah');?>" class="btn btn-info mb-2">Tambah Data</a>
<a href="<?= base_url('barang/laporan_pdf');?>" class="btn btn-danger mb-2">Export PDF</a>
<a href="<?= base_url('barang/excel');?>" class="btn btn-success mb-2">Export Excel</a>
<!-- </div> -->
<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr >
                <th>No.</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Manager</th>
                <th>Gudang</th>
                <th>QTY</th>
                <th>Unit Bagus</th>
                <th>Unit Rusak</th>
                <th>HPP</th>
                <th>Harga Sebelum Pajak</th>
                <th>PPN</th>
                <th>Harga Setelah Pajak</th>
                <th>Harga Setoran</th>
                <th>Jumlah Modal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;?>
            <?php foreach ($produk as $erp): ?>
            <tr>
                <td width="">
                    <?php echo $i;?>
                </td>
                <td>
                    <?php echo $erp['kode'] ?>
                </td>
                <td width="">
                    <?php echo $erp['nama'] ?>
                </td>
                <td>
                    <?php echo $erp['name'] ?>
                </td>
                <td>
                    <?php echo $erp['manager'] ?>
                </td>
                <td>
                    <?php echo $erp['gudang'] ?>
                </td>
                <td class="">
                    <?php echo $erp['qty']?>
                </td>
                <td class="">
                    <?php echo $erp['unitbagus']?>
                </td>
                <td class="">
                    <?php echo $erp['unitrusak']?>
                </td>
                <td class="">
                    <?php echo $erp['hpp']?>
                </td>
                <td class="">
                    <?php echo $erp['sebelumpajak']?>
                </td>
                <td class="">
                    <?php echo $erp['ppn']?>
                </td>
                <td class="">
                    <?php echo $erp['setelahpajak']?>
                </td>
                <td class="">
                    <?php echo $erp['hargasetoran']?>
                </td>
                <td class="">
                    <?php echo $erp['jumlah']?>
                </td>
                <td>
                
                <div class="btn-group" >
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu">
                    <a href="<?php echo base_url();?>barang/edit/<?= $erp['id'];?>" class="btn btn-success" style="margin-left:42px"><i class="fa fa-edit"></i>Edit</i></a>
                    <a href="<?= base_url();?>barang/hapus/<?= $erp['id'];?>" class="btn btn-danger mt-2" style="margin-left:35px" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
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