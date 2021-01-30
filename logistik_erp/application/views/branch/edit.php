<div class="container">
    <div class="col-md-6">
        <h5>Edit Data Branch</h5>

        <form action="" method="POST"> 
                <input type="hidden" class="form-control" id="id" name="id" value="<?=$branch['id'];?>">
                <div class="form-group">
                <label for="city">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?=$branch['name'];?>">
                </div>
                

            <button type="submit" class="btn btn-success">Edit Data</button>
            <a href="<?= base_url('branch');?>" class="btn btn-warning">Kembali</a>
            </form>
    </div>
</div>