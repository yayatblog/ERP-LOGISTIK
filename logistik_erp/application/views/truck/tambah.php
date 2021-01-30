<div class="container">
    <div class="col-md-10">
        <h5>Tambah Form Data</h5>

        <form action="" method="POST"> 
            <div class="form-row">
            <div class="form-group col-md-6">
                 <label for="group_truck">No Truck</label>
                <input type="text" class="form-control" id="truck_no" name="truck_no" required>
                </div>
                <div class="form-group col-md-6">
                 <label for="group_truck">Group Truck</label>
                <!-- <div class="form-group col-md-8"> -->
                <select class="form-control" name="group_truck" id="group_truck">
                            <option value="">-- Pilih --</option>
                            <?php foreach ($group_truck as $j) :?>
                                <option name="group_truck"><?= $j['name'];?></option>
                            <?php endforeach;?>
                        </select>
                        <!-- </div> -->
                <!-- <input type="text" class="form-control" id="group_truck" name="group_truck" required> -->
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="driver">Driver</label>
                <!-- <div class="form-group col-md-8"> -->
                        <select class="form-control" name="driver" id="driver">
                            <option value="">-- Pilih --</option>
                            <?php foreach ($driver as $j) :?>
                                <option name="driver"><?= $j['nama'];?></option>
                            <?php endforeach;?>
                        </select>
                        <!-- </div> -->
                <!-- <input type="text" class="form-control" id="driver" placeholder="" name="driver"> -->
            </div>
            <div class="form-group col-md-6">
                <label for="driver">Kernet</label>
                <!-- <div class="form-group col-md-8"> -->
                <select class="form-control" name="kernet" id="kernet">
                            <option value="">-- Pilih --</option>
                            <?php foreach ($kernet as $j) :?>
                                <option name="kernet"><?= $j['nama'];?></option>
                            <?php endforeach;?>
                        </select>
                        <!-- </div> -->
                <!-- <input type="text" class="form-control" id="driver" placeholder="" name="driver"> -->
            </div>
            </div>
            
            
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="initial">Initial</label>
                <input type="text" class="form-control" id="initial" placeholder="" name="initial" required>
            </div>
            <div class="form-group col-md-6">
                <label for="distance">Distance</label>
                <input type="text" class="form-control" id="distance" name="distance" required>
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="kir">KIR</label>
                <!-- <select name="driver" id="" class="form-control">
                    <option value=""></option>
                    <option value="">001</option>
                    <option value="">002</option>
                </select> -->
                <input type="text" class="form-control" id="kir" placeholder="" name="kir">
            </div>
            <div class="form-group col-md-6">
                <label for="stnk">STNK</label>
                <!-- <select name="kernet" id="" class="form-control">
                    <option value=""></option>
                    <option value="">2200111111111</option>
                    <option value="">2300111111111</option>
                </select> -->
                <input type="text" class="form-control" id="stnk" placeholder="" name="stnk">
            </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="target">Target</label>
                <input type="text" class="form-control" id="target" name="target" required>
                </div>
                <div class="form-group col-md-6">
                <label for="year">Year</label>
                <input type="text" class="form-control" id="year" name="year" required>
                </div>
            </div>
            
            <div class="form-group">
                 <label for="memo">Memo</label>
                <input type="text" class="form-control" id="memo" name="memo" required>
                <!-- </div> -->
            </div>
            <table class="table">
                    <thead class="thead-dark">
                        <tr style="text-align:center;">
                        <th scope="col">#</th>
                        <th scope="col">Maintenance</th>
                        <th scope="col">Maximum</th>
                        <th scope="col">Current</th>
                        <th scope="col">Last</th>
                        <th scope="col">Date</th>
                        <th scope="col">Memo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">#</th>
                        <td><input type="text" class="form-control" id="maintenance" name="maintenance" required></td>
                        <td><input type="text" class="form-control" id="maximum" name="maximum" required></td>
                        <td><input type="text" class="form-control" id="current" name="current" required></td>
                        <td><input type="text" class="form-control" id="last" name="last" required></td>
                        <td><input type="text" class="form-control" id="date" name="date" required></td>
                        <td><input type="text" class="form-control" id="memo2" name="memo2" required></td>
                        </tr>
                        
                    </tbody>
                    </table>
            <button type="submit" class="btn btn-primary mb-2">Tambah Data</button>
            <a href="<?= base_url('truck');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
    </div>
</div>