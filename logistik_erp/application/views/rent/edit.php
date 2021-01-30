<div class="container">
        <div class="col-md-12">
            <h5>Edit Form Data</h5>
    
            <form action="" method="POST"> 
            <input type="hidden" name="id" name="id" value="<?= $rent['id'];?>">
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date"  value="<?= $rent['date'];?>">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="group_truck">Group Truck</label>
                    <input type="text" class="form-control" id="group_truck" name="group_truck"  value="<?= $rent['group_truck'];?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="driver">Driver</label>
                        <input type="text" class="form-control" id="driver" name="driver"  value="<?= $rent['driver'];?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="rent_no">Rent No</label>
                    <input type="text" class="form-control" id="rent_no" name="rent_no"  value="<?= $rent['rent_no'];?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="truck">Truck</label>
                        <input type="text" class="form-control" id="truck" name="truck"  value="<?= $rent['truck'];?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="kernet">Kernet</label>
                        <input type="text" class="form-control" id="kernet" name="kernet"  value="<?= $rent['kernet'];?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="customer">Customer</label>
                    <input type="text" class="form-control" id="customer" name="customer"  value="<?= $rent['customer'];?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="insurance">Insurance</label>
                        <input type="text" class="form-control" id="insurance" name="insurance"  value="<?= $rent['insurance'];?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="amount">Amount</label>
                        <input type="text" class="form-control" id="amount" name="amount"  value="<?= $rent['amount'];?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="departure">Departure</label>
                        <input type="text" class="form-control" id="departure" placeholder="" name="departure" value="<?= $rent['departure'];?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="arrival">Arrival</label>
                         <input type="text" class="form-control" id="arrival" placeholder="" name="arrival" value="<?= $rent['arrival'];?>">
                    </div>
                    <div class="form-group col-md-2" style="text-align: center;">
                        <label for="late_pickup">Late Pick Up</label>
                         <input type="checkbox" class="form-control" id="late_pickup" placeholder="" name="late_pickup" value="<?= $rent['late_pickup'];?>">
                    </div>
                    <div class="form-group col-md-2" style="text-align: center;">
                        <label for="late_delivered">Late Delivered</label>
                         <input type="checkbox" class="form-control" id="late_deliverd" placeholder="" name="late_delivered" value="<?= $rent['late_delivered'];?>">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      >
                    </div>
                    <div class="form-group col-md-2" style="text-align: center;">
                        <label for="combine">Combine</label>
                         <input type="checkbox" class="form-control" id="combine" placeholder="" name="combine" value="<?= $rent['combine'];?>">
                    </div>
                    <div class="form-group col-md-2" style="text-align: center;">
                        <label for="delivered">Delivered</label>
                         <input type="checkbox" class="form-control" id="delivered" placeholder="" name="delivered" value="<?= $rent['delivered'];?>">
                    </div>
                </div>
                <div class="form-row">
                    
                    <div class="form-group col-md-4">
                    <label for="invoice_no">Invoice No</label>
                    <input type="text" class="form-control" id="invoice_no" name="invoice_no"  value="<?= $rent['invoice_no'];?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="shipping_no">Shipping No</label>
                        <input type="text" class="form-control" id="shipping_no" name="shipping_no" value="<?= $rent['shipping_no'];?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="distance">Distance</label>
                        <input type="text" class="form-control" id="" name="distance" value="<?= $rent['distance'];?>">
                    </div>
                </div>
                
                Cost :
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cost Center</th>
                        <th scope="col">Type</th>
                        <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">#</th>
                        <td><input type="text" class="form-control" id="" name="cost_center"  value="<?= $rent['cost_center'];?>"></td>
                        <td><input type="text" class="form-control" id="" name="type"  value="<?= $rent['type'];?>"></td>
                        <td><input type="text" class="form-control" id="" name="amount_cost"  value="<?= $rent['amount_cost'];?>"></td>
                        </tr>
                        
                    </tbody>
                    </table>
                    Payment :
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                           
                            <th scope="col">amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">#</th>
                            <td><input type="text" class="form-control" id="" name="date_payment"  value="<?= $rent['date_payment'];?>"></td>
                            <td><input type="text" class="form-control" id="" name="amount_payment"  value="<?= $rent['amount_payment'];?>"></td>
                            </tr>
                            
                        </tbody>
                        </table>
                    Other :
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Cost Center</th>
                            <th scope="col">Memo</th>
                            <th scope="col">amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">#</th>
                            <td><input type="date" class="form-control" id="" name="date_other"  value="<?= $rent['date_other'];?>"></td>
                            <td><input type="text" class="form-control" id="" name="cost_center2"  value="<?= $rent['cost_center2'];?>"></td>
                            <td><input type="text" class="form-control" id="" name="memo"  value="<?= $rent['memo'];?>"></td>
                            <td><input type="text" class="form-control" id="amount" name="amount_other"  value="<?= $rent['amount_other'];?>"></td>
                            </tr>
                            
                        </tbody>
                    </table>
                    Claim :
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Cost Center</th>
                            <th scope="col">Memo</th>
                            <th scope="col">amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">#</th>
                            <td><input type="text" class="form-control" id="" name="" readonly></td>
                            <td><input type="text" class="form-control" id="" name="" readonly></td>
                            <td><input type="text" class="form-control" id="" name="" readonly></td>
                            <td><input type="text" class="form-control" id="amount_claim" name="amount_claim"  value="<?= $rent['amount_claim'];?>"></td>
                            </tr>
                            
                        </tbody>
                    </table>
                    Accident :
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Cost Center</th>
                            <th scope="col">Memo</th>
                            <th scope="col">amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">#</th>
                            <td><input type="text" class="form-control" id="" name="" readonly></td>
                            <td><input type="text" class="form-control" id="" name="" readonly></td>
                            <td><input type="text" class="form-control" id="" name="" readonly></td>
                            <td><input type="text" class="form-control" id="amount_accident" name="amount_accident"  value="<?= $rent['amount_accident'];?>"></td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <div class="form-group">
                    <!-- <label for="delivered">Notes</label> -->
                    <textarea name="notes" id="" cols="70" rows="5" placeholder="Notes"><?= $rent['notes'];?></textarea>

                    </div>
                </div>
                    
    
                <button type="submit" class="btn btn-success mb-2">Edit Data</button>
                <a href="<?= base_url('rent');?>" class="btn btn-warning mb-2">Kembali</a>
                </form>
        </div>
    </div>a