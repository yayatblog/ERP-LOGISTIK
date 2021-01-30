<div class="container">
        <div class="col-md-12">
            <h5>Tambah Data Bank</h5>
    
            <form action="" method="POST"> 
               
                    <div class="form-group col-md-6">
                    <label for="city">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputTotal">Atas nama</label>
                    <input type="text" class="form-control" id="atas_nama" name="atas_nama" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="no_rekening">No. Rekening</label>
                    <input type="text" class="form-control" id="no_rekening" name="no_rekening" required>
                    </div>
    
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="<?= base_url('bank');?>" class="btn btn-success">Kembali</a>
                </form>
        </div>
    </div>