<div class="container">
    <div class="col-md-6">
        <h5>Form Tambah Data</h5>

        <form action="" method="POST"> 
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="nama">Name</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group col-md-6">
                <label for="code">Code</label>
                <input type="text" class="form-control" id="code" name="code" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="phone">Phone#1</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="form-group col-md-6">
                <label for="phone2">Phone#2</label>
                <input type="text" class="form-control" id="phone2" name="phone2" required>
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="phone3">Phone#3</label>
                <input type="text" class="form-control" id="phone3" placeholder="" name="phone3" required>
            </div>
            <div class="form-group col-md-6">
                <label for="phone3">Join Date</label>
                <input type="date" class="form-control" id="join_date" placeholder="" name="join_date" required>
            </div>
            
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea type="text" class="form-control" id="address" name="address" required></textarea>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="<?= base_url('kernet');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>