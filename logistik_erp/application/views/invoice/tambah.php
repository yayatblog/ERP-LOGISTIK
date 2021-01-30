<div class="container">
        <div class="col-md-12">
            <h5>Tambah Form Data</h5>
    
            <form action="" method="POST"> 
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="invoice_no">Invoice No</label>
                        <input type="text" class="form-control" id="invoice_no" placeholder="[AUTO]" name="invoice_no">
                    </div>
                </div>
                <div class="form-group">
                    <label for="customer">Customer</label>
                    <input type="text" class="form-control" id="customer" placeholder="" name="customer">
                    <!-- <select name="" id="" name="customer" class="form-control">
                        <option value=""></option>
                        <option value="">Jemi</option>
                        <option value="">Sindi</option>
                    </select> -->
                </div>
               
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="tax_one">Tax No</label>
                    <input type="text" class="form-control" id="tax_no" name="tax_no" required>
                    </div>
         
                    <div class="form-group col-md-6">
                    <label for="tax_date">Tax Date</label>
                    <input type="text" class="form-control" id="tax_date" name="tax_date" required>
                    
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="delivered_date">Delivered Date</label>
                    <input type="text" class="form-control" id="delivered_date" name="delivered_date" required>
                    <!-- <select name="" id="" name="delivered_date" class="form-control">
                        <option value=""></option>
                        <option value="">0111111</option>
                        <option value="">0111112</option>
                    </select> -->
                    </div>
                    <div class="form-group col-md-6">
                    <label for="bank">Bank</label>
                    <input type="text" class="form-control" id="bank" name="bank" required>

                        </div>
                </div>
                <div class="form-row">
                    
                    <div class="form-group col-md-6">
                    <label for="total">Total</label>
                    <input type="text" class="form-control" id="total" name="total" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="insurance">Insurance</label>
                        <input type="text" class="form-control" id="insurance" name="insurance" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="down_payment">Down Payment</label>
                    <input type="text" class="form-control" id="down_payment" name="down_payment" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ppn">PPN</label>
                        <input type="text" class="form-control" id="ppn" name="ppn" required>
                        </div>
                    
                </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="netto">Netto</label>
                            <input type="text" class="form-control" id="netto" name="netto" required>
                            </div>
                    <div class="form-group col-md-6">
                    <label for="paid">Paid</label>
                    <input type="text" class="form-control" id="paid" name="paid" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ppn2">PPN</label>
                        <input type="checkbox" class="form-control" id="ppn2" name="ppn2" required>
                        </div>
                    <div class="form-group col-md-6">
                    <label for="insurance2">Insurance</label>
                    <input type="checkbox" class="form-control" id="insurance2" name="insurance2" required>
                    </div>
                </div>
                    <div class="form-group">
                        <!-- <label for="delivered">Notes</label> -->
                        <textarea name="notes" id="" cols="70" rows="5" placeholder="Notes"></textarea>
    
                        </div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date</th>
                                <th scope="col">Rent_No</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Departure</th>
                                <th scope="col">Arrival</th>
                                <th scope="col">group truck</th>
                                <th scope="col">Truck</th>
                                <th scope="col">Insurace</th>
                                <th scope="col">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row"><input type="checkbox" name="" id=""></th>
                                <td><input type="date" class="form-control" id="" name="date2" required></td>
                                <td><input type="text" class="form-control" id="" name="rent_no" required></td>
                                <td><input type="text" class="form-control" id="" name="customer2" required></td>
                                <td><input type="text" class="form-control" id="" name="departure" required></td>
                                <td><input type="text" class="form-control" id="" name="arrival" required></td>
                                <td><input type="text" class="form-control" id="" name="group_truck" required></td>
                                <td><input type="text" class="form-control" id="" name="truck" required></td>
                                <td><input type="text" class="form-control" id="" name="insurance3" required></td>
                                <td><input type="text" class="form-control" id="" name="amount" required></td>
                                </tr>
                                
                            </tbody>
                            </table>
                </div>
    
                <button type="submit" class="btn btn-primary mb-2">Tambah Data</button>
                <a href="<?= base_url('invoice');?>" class="btn btn-success mb-2">Kembali</a>
                </form>
        </div>
    </div>