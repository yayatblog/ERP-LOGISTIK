<div class="container">
        <div class="col-md-12">
            <h5>Tambah Data Repair</h5>
    
            <form action="" method="POST"> 
                    
                    <div class="form-group col-md-6">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="repair_no">Repair No</label>
                    <input type="text" class="form-control" id="repair_no" name="repair_no" placeholder="[AUTO]" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="truck">Truck</label>
                    <input type="text" class="form-control" id="truck" name="truck" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="total">Total</label>
                    <input type="text" class="form-control" id="total" name="total" required>
                    </div>
                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Maintenance</th>
                        <th scope="col">Cost Center</th>
                        <th scope="col">Memo</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row"><input type="checkbox" name="" id=""></th>
                        <td><input type="text" class="form-control" id="" name="maintenance" required></td>
                        <td><input type="text" class="form-control" id="" name="cost_center" required></td>
                        <td><input type="text" class="form-control" id="" name="memo" required></td>
                        <td><input type="text" class="form-control" id="amount" name="qty" required></td>
                        <td><input type="text" class="form-control" id="amount" name="amount" required></td>
                        </tr>
                        
                    </tbody>
                    </table>
                <button type="submit" class="btn btn-primary mb-2">Tambah Data</button>
                <a href="<?= base_url('repair');?>" class="btn btn-success mb-2">Kembali</a>
                </form>
        </div>
    </div>