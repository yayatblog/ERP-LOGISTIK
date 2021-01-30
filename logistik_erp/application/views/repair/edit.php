<div class="container">
    <div class="col-md-12">
        <h5>Edit Data Repair</h5>

        <form action="" method="POST"> 
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $repair['id'];?>">
                
                <div class="form-group col-md-6">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="<?= $repair['date'];?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="repair_no">Repair No</label>
                    <input type="text" class="form-control" id="repair_no" name="repair_no" placeholder="" value="<?= $repair['repair_no'];?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="truck">Truck</label>
                    <input type="text" class="form-control" id="truck" name="truck" value="<?= $repair['truck'];?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="total">Total</label>
                    <input type="text" class="form-control" id="total" name="total" value="<?= $repair['total'];?>">
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
                        <td><input type="text" class="form-control" id="" name="maintenance" value="<?= $repair['maintenance'];?>"></td>
                        <td><input type="text" class="form-control" id="" name="cost_center" value="<?= $repair['cost_center'];?>"></td>
                        <td><input type="text" class="form-control" id="" name="memo" value="<?= $repair['memo'];?>"></td>
                        <td><input type="text" class="form-control" id="" name="qty" value="<?= $repair['qty'];?>"></td>
                        <td><input type="text" class="form-control" id="" name="amount" value="<?= $repair['amount'];?>"></td>
                        </tr>
                        
                    </tbody>
                    </table>

            <button type="submit" class="btn btn-success ml-2 mb-2">Edit Data</button>
            <a href="<?= base_url('repair');?>" class="btn btn-warning mb-2">Kembali</a>
            </form>
    </div>
</div>