<div class="container">
    <div class="col-md-10">
        <h5>Tambah Data Revenue</h5>

        <form action="" method="POST"> 
            <div class="row">
                <div class="form-group col-md-6">
                <label for="departure">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
                </div>
                </div>
                <div class="form-group">
                <label for="arrival">Revenue No</label>
                <input type="text" class="form-control" id="revenue_no" name="revenue_no" required placeholder="[AUTO]">
                </div>
                <div class="form-group">
                <label for="group_truck">Branch</label>
                <input type="text" class="form-control" id="branch" name="branch" required>
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
                        <td><input type="text" class="form-control" id="cost_center" name="cost_center" required></td>
                        <td><input type="text" class="form-control" id="amount" name="amount" required></td>
                        <td><input type="text" class="form-control" id="amount" name="amount" required></td>
                        <td><input type="text" class="form-control" id="amount" name="amount" required></td>
                        <td><input type="text" class="form-control" id="amount" name="amount" required></td>
                        <td><input type="text" class="form-control" id="amount" name="amount" required></td>
                        </tr>
                        
                    </tbody>
                    </table>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="<?= base_url('revenue');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>