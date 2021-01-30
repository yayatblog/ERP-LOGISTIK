<div class="container">
    <div class="col-md-12">
        <h5>Tambah Data Ekspense</h5>

        <form action="" method="POST"> 
                
                <div class="form-group col-md-6
                ">
                <label for="date">Date</label>
                <input type="date " class="form-control" id="date" name="date" required>
                </div>
                <div class="form-group col-md-6">
                <label for="">Expense No</label>
                <input type="text" class="form-control" id="expense_no" name="expense_no" required>
                </div>
                <div class="form-group col-md-6">
                <label for="branch">Branch</label>
                <input type="text" class="form-control" id="branch" name="branch" required>
                </div>
                <div class="form-group col-md-6">
                <label for="total">Total</label>
                <input type="text" class="form-control" id="total" name="total" required>
                </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Memo</th>
                        <th scope="col">Maintenance</th>
                        <th scope="col">Cost Center</th>
                        <th scope="col">Truck No</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Amount</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">#</th>
                        <td><input type="text" class="form-control" id="memo" name="memo" required></td>
                        <td><input type="text" class="form-control" id="" name="maintenance" required></td>
                        <td><input type="text" class="form-control" id="" name="cost_center" required></td>
                        <td><input type="text" class="form-control" id="" name="truck_no" required></td>
                        <td><input type="text" class="form-control" id="" name="qty" required></td>
                        <td><input type="text" class="form-control" id="" name="amount" required></td>
                        </tr>
                        
                    </tbody>
                    </table>
            <button type="submit" class="btn btn-primary mb-2">Tambah Data</button>
            <a href="<?= base_url('expense');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
    </div>
</div>