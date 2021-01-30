<div class="container">
    <div class="col-md-10">
        <h5>Tambah Data Loan</h5>

        <form action="" method="POST"> 
                
        <div class="form-group col-6">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <div class="form-group col-10">
                <label for="expense_no">Expense No</label>
                <input type="text" class="form-control" id="expense_no" name="expense_no" required>
                </div>
                <div class="form-group col-md-6">
                <label for="employee_type">Employee Type</label>
                <select type="text" class="form-control" id="employee_type" name="employee_type" required>
                <option value=""></option>
                <select name="" id="">
                </select> 
                </div>
                <div class="form-group col-md-10">
                <label for="employee">Employee</label>
                <select type="text" class="form-control" id="employee" name="employee" required>
                <option value=""></option>
                <select name="" id="">
                </select> 
                </div>
                <div class="form-group col-md-10">
                <label for="arrival">Loan Type</label>
                <select type="text" class="form-control" id="loan_type" name="loan_type" required>
                <option value=""></option>
                <select name="" id="">
                </select> 
                </div>
                <div class="form-group col-md-6">
                <label for="arrival">Loan</label>
                <select type="text" class="form-control" id="loan" name="loan" required>
                <option value=""></option>
                <select name="" id="">
                </select> 
                </div>
                <div class="form-group col-md-6">
                <label for="departure">Total</label>
                <input type="text" class="form-control" id="total" name="total" required>
                </div>
                <div class="form-group col-md-6">
                <textarea name="" id="" cols="30" rows="10" placeholder=" Notes"></textarea>
                </div>
            <button type="submit" class="btn btn-primary mb-2 ml-2">Tambah Data</button>
            <a href="<?= base_url('loan');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
    </div>
</div>