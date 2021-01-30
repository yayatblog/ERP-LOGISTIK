<div class="container">
    <div class="col-md-12">
        <h5>Tambah Data City</h5>

        <form action="" method="POST"> 
           
                <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" required>
                </div>
                <!-- <div class="form-group col-md-6">
                <label for="inputTotal">Total</label>
                <input type="text" class="form-control" id="inputTotal" name="jumlah" required>
                </div> -->

            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="<?= base_url('cities');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>