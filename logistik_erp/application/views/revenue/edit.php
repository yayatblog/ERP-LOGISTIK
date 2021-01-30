<div class="container">
    <div class="col-md-10">
        <h5>Edit Data Revenue</h5>

        <form action="" method="POST"> 
        <input type="hidden" name="id" value="<?= $revenue['id'];?>">
            <div class="row">
                <div class="form-group col-md-6">
                <label for="departure">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="<?= $revenue['date'];?>">
                </div>
                </div>
                <div class="form-group">
                <label for="arrival">Revenue No</label>
                <input type="text" class="form-control" id="revenue_no" name="revenue_no" value="<?= $revenue['revenue_no'];?>" placeholder="[AUTO]">
                </div>
                <div class="form-group">
                <label for="group_truck">Branch</label>
                <input type="text" class="form-control" id="branch" name="branch" value="<?= $revenue['branch'];?>">
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
                        <td><input type="text" class="form-control" id="cost_center" name="cost_center" value="<?= $revenue['memo'];?>"></td>
                        <td><input type="text" class="form-control" id="amount" name="amount" value="<?= $revenue['maintenance'];?>"></td>
                        <td><input type="text" class="form-control" id="amount" name="amount" value="<?= $revenue['cost_center'];?>"></td>
                        <td><input type="text" class="form-control" id="amount" name="amount" value="<?= $revenue['truck_no'];?>"></td>
                        <td><input type="text" class="form-control" id="amount" name="amount" value="<?= $revenue['qty'];?>"></td>
                        <td><input type="text" class="form-control" id="amount" name="amount" value="<?= $revenue['amount'];?>"></td>
                        </tr>
                        
                    </tbody>
                    </table>
            <button type="submit" class="btn btn-primary">Edit Data</button>
            <a href="<?= base_url('revenue');?>" class="btn btn-warning">Kembali</a>
            </form>
    </div>
</div>