    <div class="container">
        <div class="col-md-12">
            <!-- <h5>Tambah Data Bank</h5> -->
    
            <form action="" method="POST"> 
                   <input type="hidden" class="form-control" id="id" name="id" value="<?= $payment['id'];?>">

                    <div class="form-group col-md-6">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date"  value="<?= $payment['date'];?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="payment_no">Payment No</label>
                    <input type="text" class="form-control" id="payment_no" name="payment_no" value="<?= $payment['payment_no'];?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="customer">Customer</label>
                    <input type="text" class="form-control" id="customer" name="customer" value="<?= $payment['customer'];?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="payment_type">Payment Type</label>
                    <input type="text" class="form-control" id="payment_type" name="payment_type" value="<?= $payment['payment_type'];?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="payment_type">Total</label>
                    <input type="text" class="form-control" id="total" name="total" name="date" value="<?= $payment['total'];?>">
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
                            <td><input type="date" class="form-control" id="" name="date2" value="<?= $payment['date2'];?>"></td>
                            <td><input type="text" class="form-control" id="" name="customer2" value="<?= $payment['customer2'];?>"></td>
                            <td><input type="text" class="form-control" id="" name="invoice_no" value="<?= $payment['invoice_no'];?>"></td>
                            <td><input type="text" class="form-control" id="" name="amount" value="<?= $payment['amount'];?>"></td>
                            <td><input type="text" class="form-control" id="" name="outstanding" value="<?= $payment['outstanding'];?>"></td> 
                            <td><input type="text" class="form-control" id="" name="payment" value="<?= $payment['payment'];?>"></td>
                            </tr>
                            
                        </tbody>
                        </table>

                    
                <button type="submit" class="btn btn-success mb-2">Edit Data</button>
                <a href="<?= base_url('payment');?>" class="btn btn-warning mb-2">Kembali</a>
                </form>
        </div>
    </div>