<div class="container">
        <div class="col-md-12">
            <h5>Edit Data Bank</h5>
    
            <form action="" method="POST"> 
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $bank['id'];?>">
        
                    <div class="form-group col-md-6">
                    <label for="city">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $bank['name'];?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputTotal">Atas nama</label>
                    <input type="text" class="form-control" id="atas_nama" name="atas_nama" value="<?= $bank['atas_nama'];?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputTotal">No. Rekening</label>
                    <input type="text" class="form-control" id="inputTotal" name="no_rekening" value="<?= $bank['no_rekening'];?>">
                    </div>
    
                <button type="submit" class="btn btn-success">Edit Data</button>
                <a href="<?= base_url('bank');?>" class="btn btn-warning">Kembali</a>
                </form>
        </div>
    </div>