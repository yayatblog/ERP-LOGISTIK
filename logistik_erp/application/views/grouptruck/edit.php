<div class="container">
    <div class="col-md-6">
        <h5>Tambah Data Group Truck</h5>

        <form action="" method="POST"> 
        <input type="hidden" class="form-control" id="id" name="id" value="<?= $group['id'];?>">
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $group['name'];?>">
                </div>
                <div class="form-group">
                <label for="level">Level</label>
                <input type="text" class="form-control" id="level" name="level" value="<?= $group['level'];?>">
                </div>
                <!-- <div class="form-group col-md-6">
                <label for="inputTotal">Total</label>
                <input type="text" class="form-control" id="inputTotal" name="jumlah" required>
                </div> -->

            <button type="submit" class="btn btn-success">Edit Data</button>
            <a href="<?= base_url('group_truck');?>" class="btn btn-warning">Kembali</a>
            </form>
    </div>
</div>