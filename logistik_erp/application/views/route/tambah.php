<div class="container">
    <div class="col-md-6">
        <h5>Tambah Data Route</h5>

        <form action="" method="POST"> 
           
                <div class="form-group">
                <label for="departure">Departure</label>
                <input type="text" class="form-control" id="departure" name="departure" required>
                </div>
                <div class="form-group">
                <label for="arrival">Arrival</label>
                <input type="text" class="form-control" id="arrival" name="arrival" required>
                </div>
                <div class="form-group">
                <label for="distance">Distance</label>
                <input type="text" class="form-control" id="distance" name="distance" required>
                </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th style="text-align:center;">Group Truck</th>
                        <th style="text-align:center;">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">#</th>
                        <td>
                        
                            <!-- <div class="form-group col-md-8"> -->
                            <select class="form-control" name="group_truck" id="group_truck">
                            <option value="">-- Pilih --</option>
                            <?php foreach ($grouptruck as $j) :?>
                                <option name="group_truck"><?= $j['name'];?></option>
                            <?php endforeach;?>
                            </select>
                        <!-- </div> -->
                        <td><input type="text" class="form-control" id="amount" name="amount" required></td>
                        </tr>
                        
                    </tbody>
                    </table>


            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="<?= base_url('route');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>