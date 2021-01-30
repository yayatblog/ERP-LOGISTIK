<div class="container">
    <div class="col-md-6">
        <h5>Tambah Data Branch</h5>

        <form action="" method="POST"> 
           
                <div class="form-group">
                <label for="city">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <!-- <div class="form-group col-md-6">
                <label for="inputTotal">Total</label>
                <input type="text" class="form-control" id="inputTotal" name="jumlah" required>
                </div> -->

            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="<?= base_url('branch');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>