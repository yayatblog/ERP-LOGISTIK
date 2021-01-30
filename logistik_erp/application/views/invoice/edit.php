<div class="container">
        <div class="col-md-12">
            <h5>Edit Form Data</h5>
    
            <form action="" method="POST"> 
                <input type="hidden" name="id" value="<?= $invoice['id'];?>">    
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="<?= $invoice['date'];?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="invoice_no">Invoice No</label>
                        <input type="text" class="form-control" value="<?= $invoice['invoice_no'];?>"" placeholder="[AUTO]" name="invoice_no">
                    </div>
                </div>
                <div class="form-group">
                    <label for="customer">Customer</label>
                    <input type="text" class="form-control" id="customer" value="<?= $invoice['customer'];?>" name="customer">
                    <!-- <select name="" id="" name="customer" class="form-control">
                        <option value=""></option>
                        <option value="">Jemi</option>
                        <option value="">Sindi</option>
                    </select> -->
                </div>
               
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="tax_one">Tax No</label>
                    <input type="text" class="form-control" id="tax_no" name="tax_no" value="<?= $invoice['tax_no'];?>">
                    </div>
         
                    <div class="form-group col-md-6">
                    <label for="tax_date">Tax Date</label>
                    <input type="text" class="form-control" id="tax_date" name="tax_date" value="<?= $invoice['tax_date'];?>">
                    
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="delivered_date">Delivered Date</label>
                    <input type="text" class="form-control" id="delivered_date" name="delivered_date" value="<?= $invoice['delivered_date'];?>">
                    <!-- <select name="" id="" name="delivered_date" class="form-control">
                        <option value=""></option>
                        <option value="">0111111</option>
                        <option value="">0111112</option>
                    </select> -->
                    </div>
                    <div class="form-group col-md-6">
                    <label for="bank">Bank</label>
                    <input type="text" class="form-control" id="bank" name="bank" value="<?= $invoice['bank'];?>">

                        </div>
                </div>
                <div class="form-row">
                    
                    <div class="form-group col-md-6">
                    <label for="total">Total</label>
                    <input type="text" class="form-control" id="total" name="total" value="<?= $invoice['total'];?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="insurance">Insurance</label>
                        <input type="text" class="form-control" id="insurance" name="insurance" value="<?= $invoice['insurance'];?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="down_payment">Down Payment</label>
                    <input type="text" class="form-control" id="down_payment" name="down_payment" value="<?= $invoice['down_payment'];?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ppn">PPN</label>
                        <input type="text" class="form-control" id="ppn" name="ppn" value="<?= $invoice['ppn'];?>">
                        </div>
                    
                </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="netto">Netto</label>
                            <input type="text" class="form-control" id="netto" name="netto" value="<?= $invoice['netto'];?>">
                            </div>
                    <div class="form-group col-md-6">
                    <label for="paid">Paid</label>
                    <input type="text" class="form-control" id="paid" name="paid" value="<?= $invoice['paid'];?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ppn2">PPN</label>
                        <input type="checkbox" class="form-control" id="ppn2" name="ppn2" value="<?= $invoice['ppn2'];?>">
                        </div>
                    <div class="form-group col-md-6">
                    <label for="insurance2">Insurance</label>
                    <input type="checkbox" class="form-control" id="insurance2" name="insurance2" value="<?= $invoice['insurance2'];?>">
                    </div>
                </div>
                    <div class="form-group">
                        <!-- <label for="delivered">Notes</label> -->
                        <textarea name="notes" id="" cols="70" rows="5" placeholder="Notes"><?= $invoice['notes'];?></textarea>
    
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
                                <td><input type="date" class="form-control" id="" name="date2" value="<?= $invoice['date2'];?>"></td>
                                <td><input type="text" class="form-control" id="" name="rent_no" value="<?= $invoice['rent_no'];?>"></td>
                                <td><input type="text" class="form-control" id="" name="customer2" value="<?= $invoice['customer2'];?>"></td>
                                <td><input type="text" class="form-control" id="" name="departure" value="<?= $invoice['departure'];?>"></td>
                                <td><input type="text" class="form-control" id="" name="arrival" value="<?= $invoice['arrival'];?>"></td>
                                <td><input type="text" class="form-control" id="" name="group_truck" value="<?= $invoice['group_truck'];?>"></td>
                                <td><input type="text" class="form-control" id="" name="truck" value="<?= $invoice['truck'];?>"></td>
                                <td><input type="text" class="form-control" id="" name="insurance3" value="<?= $invoice['insurance3'];?>"></td>
                                <td><input type="text" class="form-control" id="" name="amount" value="<?= $invoice['amount'];?>"></td>
                                </tr>
                                
                            </tbody>
                            </table>
                </div>
    
                <button type="submit" class="btn btn-success mb-2">Edit Data</button>
                <a href="<?= base_url('invoice');?>" class="btn btn-warning mb-2">Kembali</a>
                </form>
        </div>
    </div>