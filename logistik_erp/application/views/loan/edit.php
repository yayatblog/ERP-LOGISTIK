<div class="container">
    <div class="col-md-10">
        <h5>Edit Data Loan</h5>

        <form action="" method="POST"> 
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $loan['id'];?>">
                <div class="form-group col-6">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="<?= $loan['date'];?>">
                </div>
                <div class="form-group col-10">
                <label for="expense_no">Expense No</label>
                <input type="text" class="form-control" id="expense_no" name="expense_no" value="<?= $loan['expense_no'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="employee_type">Employee Type</label>
                <select type="text" class="form-control" id="employee_type" name="employee_type" value="<?= $loan['employee_type'];?>">
                <option value=""></option>
                <select name="" id="">
                </select> 
                </div>
                <div class="form-group col-md-10">
                <label for="employee">Employee</label>
                <select type="text" class="form-control" id="employee" name="employee" value="<?= $loan['employee'];?>">
                <option value=""></option>
                <select name="" id="">
                </select> 
                </div>
                <div class="form-group col-md-10">
                <label for="arrival">Loan Type</label>
                <select type="text" class="form-control" id="loan_type" name="loan_type" value="<?= $loan['loan_type'];?>">
                <option value=""></option>
                <select name="" id="">
                </select> 
                </div>
                <div class="form-group col-md-6">
                <label for="arrival">Loan</label>
                <select type="text" class="form-control" id="loan" name="loan" value="<?= $loan['loan'];?>">
                <option value=""></option>
                <select name="" id="">
                </select> 
                </div>
                <div class="form-group col-md-6">
                <label for="departure">Total</label>
                <input type="text" class="form-control" id="total" name="total" value="<?= $loan['total'];?>">
                </div>
                <div class="form-group col-md-6">
                <textarea name="" id="" cols="30" rows="10" placeholder=" Notes"></textarea>
                </div>
            <button type="submit" class="btn btn-success mb-2 ml-2">Edit Data</button>
            <a href="<?= base_url('loan');?>" class="btn btn-warning mb-2">Kembali</a>
            </form>
    </div>
</div>