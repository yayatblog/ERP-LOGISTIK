<div class="container">
    <div class="col-md-12">
        <h5>Edit Data Ekspense</h5>

        <form action="" method="POST"> 
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $expense['id'];?>">     
                <div class="form-group col-md-6">
                <label for="date">Date</label>
                <input type="date " class="form-control" id="date" name="date" value="<?= $expense['date'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="">Expense No</label>
                <input type="text" class="form-control" id="expense_no" name="expense_no" value="<?= $expense['expense_no'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="branch">Branch</label>
                <input type="text" class="form-control" id="branch" name="branch" value="<?= $expense['branch'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="total">Total</label>
                <input type="text" class="form-control" id="total" name="total" value="<?= $expense['total'];?>">
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
                        <td><input type="text" class="form-control" id="memo" name="memo" value="<?= $expense['memo'];?>"></td>
                        <td><input type="text" class="form-control" id="" name="maintenance" value="<?= $expense['maintenance'];?>"></td>
                        <td><input type="text" class="form-control" id="" name="cost_center" value="<?= $expense['cost_center'];?>"></td>
                        <td><input type="text" class="form-control" id="" name="truck_no" value="<?= $expense['truck_no'];?>"></td>
                        <td><input type="text" class="form-control" id="" name="qty" value="<?= $expense['qty'];?>"></td>
                        <td><input type="text" class="form-control" id="" name="amount" value="<?= $expense['amount'];?>"></td>
                        </tr>
                        
                    </tbody>
                    </table>
                    <button type="submit" class="btn btn-success mb-2">Edit Data</button>
                    <a href="<?= base_url('expense');?>" class="btn btn-warning mb-2">Kembali</a>
            </form>
    </div>
</div>