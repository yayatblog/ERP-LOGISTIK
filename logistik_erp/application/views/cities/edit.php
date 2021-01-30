<div class="container">
    <div class="col-md-6">
        <h5>Edit Data Group Truck</h5>

        <form action="" method="POST"> 
            <input type="hidden" id="id" name="id" value="<?= $city['id'];?>">
                <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" value="<?= $city['city'];?>">
                </div>
                <!-- <div class="form-group col-md-6">
                <label for="inputTotal">Total</label>
                <input type="text" class="form-control" id="inputTotal" name="jumlah" required>
                </div> -->

            <button type="submit" class="btn btn-success">Edit Data</button>
            <a href="<?= base_url('cities');?>" class="btn btn-warning">Kembali</a>
            </form>
    </div>
</div>