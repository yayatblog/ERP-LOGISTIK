<div class="container">
    <div class="col-md-6">
        <h5>Tambah Data Group Maintenance</h5>

        <form action="" method="POST"> 
                 <input type="hidden" class="form-control" id="id" name="id" value="<?= $maintenance['id'];?>">
                <div class="form-group">
                <label for="city">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $maintenance['name'];?>">
                </div>
                <!-- <div class="form-group">
                <label for="level">Level</label>
                <input type="text" class="form-control" id="level" name="level" required>
                </div> -->
                <!-- <div class="form-group col-md-6">
                <label for="inputTotal">Total</label>
                <input type="text" class="form-control" id="inputTotal" name="jumlah" required>
                </div> -->

            <button type="submit" class="btn btn-success">Edit Data</button>
            <a href="<?= base_url('maintenance');?>" class="btn btn-warning">Kembali</a>
            </form>
    </div>
</div>