<div class="container">
        <div class="col-md-10">
            <h5>Form Tambah Data</h5>
    
            <form action="" method="POST"> 
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="nama">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="code">Contact Person</label>
                    <input type="text" class="form-control" id="contact_person" name="contact_person" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">Address 1</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="phone">Address 2</label>
                    <input type="text" class="form-control" id="address2" name="address2" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="phone">Phone#1</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="phone2">Fax</label>
                    <input type="text" class="form-control" id="fax" name="fax" required>
                    </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phone3">Phone#2</label>
                    <input type="text" class="form-control" id="phone2" placeholder="" name="phone2" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="phone3">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="" name="email" required>
                </div>
            </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone3">Phone#3</label>
                        <input type="text" class="form-control" id="phone3" placeholder="" name="phone3" required>
                    </div>
                    <div class="form-group col-md-6">
                        <!-- <label for="phone3">Email</label> -->
                        <!-- <input type="text" class="form-control" id="max_ritase" placeholder="" name="max_ritase" required> -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">Tax Name</label>
                    <input type="text" class="form-control" id="tax_name" name="tax_name" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone3">NPWP</label>
                        <input type="text" class="form-control" id="npwp" placeholder="" name="npwp" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone3">NPPKP</label>
                        <input type="text" class="form-control" id="nppkp" placeholder="" name="nppkp" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">Tax Address 1</label>
                    <input type="text" class="form-control" id="tax_address" name="tax_address" required>
                </div>
                <div class="form-group">
                    <label for="phone">Tax Address 2</label>
                    <input type="text" class="form-control" id="tax_address2" name="tax_address2" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="phone3">Max Rittase</label>
                        <input type="text" class="form-control" id="max_rittase" placeholder="" name="max_rittase" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone3">Max Amount</label>
                        <input type="text" class="form-control" id="max_amount" placeholder="" name="max_amount" required>
                    </div>
                    <div class="form-group col-md-">
                        <label for="phone3" style="text-align: center;">Delivered</label>
                        <input type="checkbox" class="form-control" id="delivered" placeholder="" name="delivered" required>
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
                        <td><input type="text" class="form-control" id="" name="departure" required></td>
                        <td><input type="text" class="form-control" id="" name="arrival" required></td>
                        <td><input type="text" class="form-control" id="" name="group_truck" required></td>
                        <td><input type="text" class="form-control" id="amount" name="amount" required></td>
                        </tr>
                        
                    </tbody>
                    </table>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Tambah Data</button>
                <a href="<?= base_url('customer');?>" class="btn btn-success mb-2">Kembali</a>
                </form>
        </div>
    </div>