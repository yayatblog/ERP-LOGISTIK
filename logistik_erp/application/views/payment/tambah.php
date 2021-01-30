<div class="container">
        <div class="col-md-12">
            <!-- <h5>Tambah Data Bank</h5> -->
    
            <form action="" method="POST"> 
                     <div class="form-group col-md-6">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="payment_no">Payment No</label>
                    <input type="text" class="form-control" id="payment_no" name="payment_no" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="customer">Customer</label>
                    <!-- <select name="" id="" name="customer" class="form-control">
                        <option value=""></option>
                    </select> -->
                    <input type="text" class="form-control" id="customer" name="customer" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="payment_type">Payment Type</label>
                    <input type="text" class="form-control" id="payment_type" name="payment_type" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="payment_type">Total</label>
                    <input type="text" class="form-control" id="total" name="total" required>
                    </div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Invoice No</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Outstanding</th>
                            <th scope="col">Payment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row"><input type="checkbox" name="" id=""></th>
                            <td><input type="date" class="form-control" id="" name="date2" required></td>
                            <td><input type="text" class="form-control" id="" name="customer2" required></td>
                            <td><input type="text" class="form-control" id="" name="invoice_no" required></td>
                            <td><input type="text" class="form-control" id="" name="amount" required></td>
                            <td><input type="text" class="form-control" id="" name="outstanding" required></td> 
                            <td><input type="text" class="form-control" id="" name="payment" required></td>
                            </tr>
                            
                        </tbody>
                        </table>

                    
                <button type="submit" class="btn btn-primary mb-2">Tambah Data</button>
                <a href="<?= base_url('payment');?>" class="btn btn-success mb-2">Kembali</a>
                </form>
        </div>
    </div>