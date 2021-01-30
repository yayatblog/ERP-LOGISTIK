<div class="container">
        <div class="col-md-10">
            <h5>Form Tambah Data</h5>
    
            <form action="" method="POST"> 
            <input type="hidden" name="id" value="<?= $customer['id'];?>">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="nama">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $customer['name'];?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="code">Contact Person</label>
                    <input type="text" class="form-control" id="contact_person" name="contact_person" value="<?= $customer['contact_person'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">Address 1</label>
                    <input type="text" class="form-control" id="address" name="address" value="<?= $customer['address'];?>">
                </div>
                <div class="form-group">
                    <label for="phone">Address 2</label>
                    <input type="text" class="form-control" id="address2" name="address2" value="<?= $customer['address2'];?>">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="phone">Phone#1</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?= $customer['phone'];?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="phone2">Fax</label>
                    <input type="text" class="form-control" id="fax" name="fax" value="<?= $customer['fax'];?>">
                    </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phone3">Phone#2</label>
                    <input type="text" class="form-control" id="phone2" placeholder="" name="phone2" value="<?= $customer['phone2'];?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="phone3">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="" name="email" value="<?= $customer['email'];?>">
                </div>
            </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone3">Phone#3</label>
                        <input type="text" class="form-control" id="phone3" placeholder="" name="phone3" value="<?= $customer['phone3'];?>">
                    </div>
                    <div class="form-group col-md-6">
                        <!-- <label for="phone3">Email</label> -->
                        <!-- <input type="text" class="form-control" id="max_ritase" placeholder="" name="max_ritase" value="<?= $customer['tax_name'];?>"> -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">Tax Name</label>
                    <input type="text" class="form-control" id="tax_name" name="tax_name" value="<?= $customer['tax_name'];?>">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone3">NPWP</label>
                        <input type="text" class="form-control" id="npwp" placeholder="" name="npwp" value="<?= $customer['npwp'];?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone3">NPPKP</label>
                        <input type="text" class="form-control" id="nppkp" placeholder="" name="nppkp" value="<?= $customer['nppkp'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">Tax Address 1</label>
                    <input type="text" class="form-control" id="tax_address" name="tax_address" value="<?= $customer['tax_address'];?>">
                </div>
                <div class="form-group">
                    <label for="phone">Tax Address 2</label>
                    <input type="text" class="form-control" id="tax_address2" name="tax_address2" value="<?= $customer['tax_address2'];?>">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="phone3">Max Rittase</label>
                        <input type="text" class="form-control" id="max_rittase" placeholder="" name="max_rittase" value="<?= $customer['max_rittase'];?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone3">Max Amount</label>
                        <input type="text" class="form-control" id="max_amount" placeholder="" name="max_amount" value="<?= $customer['max_amount'];?>">
                    </div>
                    <div class="form-group col-md-">
                        <label for="phone3" style="text-align: center;">Delivered</label>
                        <input type="checkbox" class="form-control" id="delivered" placeholder="" name="delivered" value="<?= $customer['delivered'];?>">
                    </div>
                </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Departure</th>
                        <th scope="col">Arrival</th>
                        <th scope="col">group truck</th>
                        <th scope="col">Ammount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">#</th>
                        <td><input type="text" class="form-control" id="" name="departure" value="<?= $customer['departure'];?>"></td>
                        <td><input type="text" class="form-control" id="" name="arrival" value="<?= $customer['arrival'];?>"></td>
                        <td><input type="text" class="form-control" id="" name="group_truck" value="<?= $customer['group_truck'];?>"></td>
                        <td><input type="text" class="form-control" id="amount" name="amount" value="<?= $customer['amount'];?>"></td>
                        </tr>
                        
                    </tbody>
                    </table>
                </div>
                <button type="submit" class="btn btn-success mb-2">Edit Data</button>
                <a href="<?= base_url('customer');?>" class="btn btn-warning mb-2">Kembali</a>
                </form>
        </div>
    </div>