<div class="container">
    <div class="col-md-6">
        <h5>Edit Data Cost Center</h5>

        <form action="" method="POST"> 
                <input type="hidden" name="id" value="<?= $costcenter['id'];?>">
                <div class="form-group">
                <label for="city">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $costcenter['name'];?>">
                </div>
                <!-- <div class="form-group col-md-6">
                <label for="inputTotal">Total</label>
                <input type="text" class="form-control" id="inputTotal" name="jumlah" required>
                </div> -->

            <button type="submit" class="btn btn-success">Edit Data</button>
            <a href="<?= base_url('cost_center');?>" class="btn btn-warning">Kembali</a>
            </form>
    </div>
</div>