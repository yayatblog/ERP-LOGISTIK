<div class="container">
    <div class="col-md-6">
        <h5>Edit Data Cost</h5>

        <form action="" method="POST"> 
        <input type="hidden" name="id" value="<?= $cost['id'];?>">
                <div class="form-group">
                <label for="departure">Departure</label>
                <input type="text" class="form-control" id="departure" name="departure" value="<?= $cost['departure'];?>">
                </div>
                <div class="form-group">
                <label for="arrival">Arrival</label>
                <input type="text" class="form-control" id="arrival" name="arrival" value="<?= $cost['arrival'];?>">
                </div>
                <div class="form-group">
                <label for="group_truck">Group Truck</label>
                 <!-- <div class="form-group col-md-8"> -->
                        <select class="form-control" name="group_truck" id="group_truck">
                            <option><?= $cost['group_truck'];?></option>
                            <?php foreach ($group_truck as $j) :?>
                                <option name="group_truck"><?= $j['name'];?></option>
                            <?php endforeach;?>
                        </select>
                        <!-- </div> -->
                </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cost Center</th>
                        <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">#</th>
                        <td>
                        
                            <!-- <div class="form-group col-md-8"> -->
                            <select class="form-control" name="cost_center" id="cost_center">
                            <option><?= $cost['cost_center'];?>"</option>
                            <?php foreach ($cost_center as $j) :?>
                                <option name="cost_center"><?= $j['name'];?></option>
                            <?php endforeach;?>
                            </select>
                        <!-- </div> -->
                        <td><input type="text" class="form-control" id="amount" name="amount" value="<?= $cost['amount'];?>"></td>
                        </tr>
                        
                    </tbody>
                    </table>
            <button type="submit" class="btn btn-success">Edit Data</button>
            <a href="<?= base_url('cost');?>" class="btn btn-warning">Kembali</a>
            </form>
    </div>
</div>