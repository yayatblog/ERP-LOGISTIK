
<div class="container">
    <div class="col-md-6">
            <h5>Edit Data Route</h5>


        <form action="" method="POST"> 
                <input type="hidden" name="id" value="<?= $route['id'];?>">
                <div class="form-group">
                <label for="departure">Departure</label>
                <input type="text" class="form-control" id="departure" name="departure" value="<?= $route['departure'];?>">
                </div>
                <div class="form-group">
                <label for="arrival">Arrival</label>
                <input type="text" class="form-control" id="arrival" name="arrival" value="<?= $route['arrival'];?>">
                </div>
                <div class="form-group">
                <label for="distance">Distance</label>
                <input type="text" class="form-control" id="distance" name="distance" value="<?= $route['distance'];?>">
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
                            <option><?= $route['group_truck'];?></option>   
                            <?php foreach ($grouptruck as $j) :?>
                                <option name="group_truck"><?= $j['name'];?></option>
                            <?php endforeach;?>
                            </select>
                        <!-- </div> -->
                        <td><input type="text" class="form-control" id="amount" name="amount" value="<?= $route['amount'];?>"></td>
                        </tr>
                        
                    </tbody>
                    </table>


            <button type="submit" class="btn btn-success">Ubah Data</button>
            <a href="<?= base_url('route');?>" class="btn btn-warning">Kembali</a>
            </form>
    </div>
</div>