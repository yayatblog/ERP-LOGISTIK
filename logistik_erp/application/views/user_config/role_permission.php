<div class="container">
<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Group Permission</h4>
                    </div>
                    <form method="POST" action="http://salepropos.com/role/set_permission" accept-charset="UTF-8"><input name="_token" type="hidden" value="3nEwXut6C5xQytQWqw70uQQffKLa6ilz70FdcLfO">
                    <div class="card-body">
                    	<input type="hidden" name="role_id" value="1">
						<div class="table-responsive">
						    <table class="table table-bordered permission-table">
						        <thead>
						        <tr>
						            <th colspan="5" class="text-center">Admin Group Permission</th>
						        </tr>
						        <tr>
						            <th rowspan="2" class="text-center">Module Name</th>
						            <th colspan="4" class="text-center">
						            	<div class="checkbox">
						            		<input type="checkbox" id="select_all">
						            		<label for="select_all">Permissions</label>
						            	</div>
						            </th>
						        </tr>
						        <tr>
						            <th class="text-center">View</th>
						            <th class="text-center">Add</th>
						            <th class="text-center">Edit</th>
						            <th class="text-center">Delete</th>
						        </tr>
						        </thead>
						        <tbody>
						        <tr>
						            <td>Product</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="products-index" name="products-index" checked="">
								                								                <label for="products-index"></label>
							            	</div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								               	<input type="checkbox" value="1" id="products-add" name="products-add" checked="">
								                								                <label for="products-add"></label>
							                </div>
							            </div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="products-edit" name="products-edit" checked="">
								                								                <label for="products-edit"></label>
							                </div>
							            </div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="products-delete" name="products-delete" checked="">
								                								                <label for="products-delete"></label>
							                </div>
							            </div>
						            </td>
						        </tr>

						        <tr>
						            <td>Purchase</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="purchases-index" name="purchases-index" checked="">
								                								                <label for="purchases-index"></label>
							                </div>
							            </div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="purchases-add" name="purchases-add" checked="">
								                								                <label for="purchases-add"></label>
							                </div>
							            </div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="purchases-edit" name="purchases-edit" checked="">
								                								                <label for="purchases-edit"></label>
							                </div>
							            </div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="purchases-delete" name="purchases-delete" checked="">
								                								                <label for="purchases-delete"></label>
							            	</div>
						            	</div>
						            </td>
						        </tr>

						        <tr>
						            <td>Sale</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="sales-index" name="sales-index" checked="">
								                								                <label for="sales-index"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="sales-add" name="sales-add" checked="">
								                								                <label for="sales-add"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="sales-edit" name="sales-edit" checked="">
								                								                <label for="sales-edit"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="sales-delete" name="sales-delete" checked="">
								                								                <label for="sales-delete"></label>
								            </div>
						            	</div>
						            </td>
						        </tr>

						        <tr>
						            <td>Expense</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="expenses-index" name="expenses-index" checked="">
								                								                <label for="expenses-index"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="expenses-add" name="expenses-add" checked="">
								                								                <label for="expenses-add"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="expenses-edit" name="expenses-edit" checked="">
								                								                <label for="expenses-edit"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="expenses-delete" name="expenses-delete" checked="">
								                								                <label for="expenses-delete"></label>
								            </div>
						            	</div>
						            </td>
						        </tr>

						        <tr>
						            <td>Quotation</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="quotes-index" name="quotes-index" checked="">
								                								                <label for="quotes-index"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="quotes-add" name="quotes-add" checked="">
								                								                <label for="quotes-add"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="quotes-edit" name="quotes-edit" checked="">
								                								                <label for="quotes-edit"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="quotes-delete" name="quotes-delete" checked="">
								                								                <label for="quotes-delete"></label>
								            </div>
						            	</div>
						            </td>
						        </tr>

						        <tr>
						            <td>Transfer</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="transfers-index" name="transfers-index" checked="">
								                								                <label for="transfers-index"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="transfers-add" name="transfers-add" checked="">
								                								                <label for="transfers-add"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="transfers-edit" name="transfers-edit" checked="">
								                								                <label for="transfers-edit"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="transfers-delete" name="transfers-delete" checked="">
								                								                <label for="transfers-delete"></label>
								            </div>
						            	</div>
						            </td>
						        </tr>

						        <tr>
						            <td>Sale Return</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="returns-index" name="returns-index" checked="">
								                								                <label for="returns-index"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="returns-add" name="returns-add" checked="">
								                								                <label for="returns-add"></label>
							                </div>
							            </div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="returns-edit" name="returns-edit" checked="">
								                								                <label for="returns-edit"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="returns-delete" name="returns-delete" checked="">
								                								                <label for="returns-delete"></label>
								            </div>
						            	</div>
						            </td>
						        </tr>

						        <tr>
						            <td>Purchase Return</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="purchase-return-index" name="purchase-return-index" checked="">
								                								                <label for="purchase-return-index"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="purchase-return-add" name="purchase-return-add" checked="">
								                								                <label for="purchase-return-add"></label>
								            </div>
						                </div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="purchase-return-edit" name="purchase-return-edit" checked="">
								                								                <label for="purchase-return-edit"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                	<div class="checkbox">
								                								                <input type="checkbox" value="1" id="purchase-return-delete" name="purchase-return-delete" checked="">
								                								                <label for="purchase-return-delete"></label>
								            </div>
						            	</div>
						            </td>
						        </tr>
						        <tr>
						            <td>Employee</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="employees-index" name="employees-index" checked="">
								                								                <label for="employees-index"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="employees-add" name="employees-add" checked="">
								                								                <label for="employees-add"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="employees-edit" name="employees-edit" checked="">
								                								                <label for="employees-edit"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="employees-delete" name="employees-delete" checked="">
								                								                <label for="employees-delete"></label>
								            </div>
						            	</div>
						            </td>
						        </tr>
						        <tr>
						            <td>User</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="users-index" name="users-index" checked="">
								                								                <label for="users-index"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="users-add" name="users-add" checked="">
								                								                <label for="users-add"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="users-edit" name="users-edit" checked="">
								                								                <label for="users-edit"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="users-delete" name="users-delete" checked="">
								                								                <label for="users-delete"></label>
								            </div>
						            	</div>
						            </td>
						        </tr>
						        <tr>
						            <td>Customer</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="customers-index" name="customers-index" checked="">
								                								                <label for="customers-index"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="customers-add" name="customers-add" checked="">
								                								                <label for="customers-add"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="customers-edit" name="customers-edit" checked="">
								                								                <label for="customers-edit"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="customers-delete" name="customers-delete" checked="">
								                								                <label for="customers-delete"></label>
								            </div>
						            	</div>
						            </td>
						        </tr>
						        <tr>
						            <td>Biller</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="billers-index" name="billers-index" checked="">
								                								                <label for="billers-index"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="billers-add" name="billers-add" checked="">
								                								                <label for="billers-add"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="billers-edit" name="billers-edit" checked="">
								                								                <label for="billers-edit"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="billers-delete" name="billers-delete" checked="">
								                								                <label for="billers-delete"></label>
								            </div>
						            	</div>
						            </td>
						        </tr>
						        <tr>
						            <td>Supplier</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="suppliers-index" name="suppliers-index" checked="">
								                								                <label for="suppliers-index"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="suppliers-add" name="suppliers-add" checked="">
								                								                <label for="suppliers-add"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="suppliers-edit" name="suppliers-edit" checked="">
								                								                <label for="suppliers-edit"></label>
								            </div>
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
							                <div class="checkbox">
								                								                <input type="checkbox" value="1" id="suppliers-delete" name="suppliers-delete" checked="">
								                								                <label for="suppliers-delete"></label>
								            </div>
						            	</div>
						            </td>
						        </tr>
						        						        <tr>
						            <td>Accounting</td>
						            <td class="report-permissions" colspan="5">
						            	<span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="account-index" name="account-index" checked="">
							                    									                    <label for="account-index" class="padding05">Account &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="money-transfer" name="money-transfer" checked="">
							                    									                    <label for="money-transfer" class="padding05">Money Transfer &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="balance-sheet" name="balance-sheet" checked="">
							                    									                    <label for="balance-sheet" class="padding05">Balance Sheet &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
						                    	<div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="account-statement-permission" name="account-statement" checked="">
							                    									                    <label for="account-statement-permission" class="padding05">Account Statement &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						            </td>
						        </tr>
						        <tr>
						            <td>HRM</td>
						            <td class="report-permissions" colspan="5">
						            	<span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="department" name="department" checked="">
							                    									                    <label for="department" class="padding05">Department &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="attendance" name="attendance" checked="">
							                    									                    <label for="attendance" class="padding05">Attendance &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="payroll" name="payroll" checked="">
							                    									                    <label for="payroll" class="padding05">Payroll &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="holiday" name="holiday" checked="">
							                    									                    <label for="holiday" class="padding05">Holiday Approve &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						            </td>
						        </tr>
						        <tr>
						            <td>Reports</td>
						            <td class="report-permissions" colspan="5">
						            	<span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="profit-loss" name="profit-loss" checked="">
							                    									                    <label for="profit-loss" class="padding05">Summary Report &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="best-seller" name="best-seller" checked="">
							                    									                    <label for="best-seller" class="padding05">Best Seller &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="daily-sale" name="daily-sale" checked="">
							                    									                    <label for="daily-sale" class="padding05">Daily Sale &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="monthly-sale" name="monthly-sale" checked="">
							                    									                    <label for="monthly-sale" class="padding05">Monthly Sale &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="daily-purchase" name="daily-purchase" checked="">
							                    									                    <label for="daily-purchase" class="padding05">Daily Purchase &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
						                    	<div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="monthly-purchase" name="monthly-purchase" checked="">
							                    									                    <label for="monthly-purchase" class="padding05">Monthly Purchase &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="product-report" name="product-report" checked="">
							                    									                    <label for="product-report" class="padding05">Product Report &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="payment-report" name="payment-report" checked="">
							                    									                    <label for="payment-report" class="padding05">Payment Report &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="purchase-report" name="purchase-report" checked="">
							                    									                    <label for="purchase-report" class="padding05"> Purchase Report &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="sale-report" name="sale-report" checked="">
							                    									                    <label for="sale-report" class="padding05">Sale Report &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
						                    	<div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="warehouse-report" name="warehouse-report" checked="">
							                    									                    <label for="warehouse-report" class="padding05">Warehouse Report &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
						                    	<div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="warehouse-stock-report" name="warehouse-stock-report" checked="">
							                    									                    <label for="warehouse-stock-report" class="padding05">Warehouse Stock Chart &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
						                    	<div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="product-qty-alert" name="product-qty-alert" checked="">
							                    														<label for="product-qty-alert" class="padding05">Product Quantity Alert &nbsp;&nbsp;</label>
								                </div>
								            </div>
								        </span>
								        <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="user-report" name="user-report" checked="">
							                    									                    <label for="user-report" class="padding05">User Report &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="customer-report" name="customer-report" checked="">
							                    									                    <label for="customer-report" class="padding05">Customer Report &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="supplier-report" name="supplier-report" checked="">
							                    									                    <label for="Supplier-report" class="padding05">Supplier Report &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="due-report" name="due-report" checked="">
							                    									                    <label for="due-report" class="padding05">Due Report &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						            </td>
						        </tr>
						        <tr>
						            <td>Settings</td>
						            <td class="report-permissions" colspan="5">
						            	<span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="send_notification" name="send_notification" checked="">
							                    									                    <label for="send_notification" class="padding05">Send Notification &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						            	<span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="warehouse" name="warehouse" checked="">
							                    									                    <label for="warehouse" class="padding05">Warehouse &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						            	<span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="customer_group" name="customer_group" checked="">
							                    									                    <label for="customer_group" class="padding05">Customer Group &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
								            <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="brand" name="brand" checked="">
							                    									                    <label for="brand" class="padding05">Brand &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
								            <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="unit" name="unit" checked="">
							                    									                    <label for="unit" class="padding05">Unit &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
								            <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="currency" name="currency" checked="">
							                    									                    <label for="currency" class="padding05">Currency &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
								            <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="tax" name="tax" checked="">
							                    									                    <label for="tax" class="padding05">Tax &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="backup_database" name="backup_database" checked="">
							                    									                    <label for="backup_database" class="padding05">Backup Database &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						            	<span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="general_setting" name="general_setting" checked="">
							                    									                    <label for="general_setting" class="padding05">General Setting &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="mail_setting" name="mail_setting" checked="">
							                    									                    <label for="mail_setting" class="padding05">Mail Setting &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="sms_setting" name="sms_setting" checked="">
							                    									                    <label for="sms_setting" class="padding05">SMS Setting &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="create_sms" name="create_sms" checked="">
							                    									                    <label for="create_sms" class="padding05">Create SMS &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="pos_setting" name="pos_setting" checked="">
							                    									                    <label for="pos_setting" class="padding05">POS Setting &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="hrm_setting" name="hrm_setting" checked="">
							                    									                    <label for="hrm_setting" class="padding05">HRM Setting &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						            </td>
						        </tr>
						        <tr>
						            <td>Miscellaneous</td>
						            <td class="report-permissions" colspan="5">
						            	<span>
								            <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="category" name="category" checked="">
							                    									                    <label for="category" class="padding05">Category &nbsp;&nbsp;</label>
								                </div>
								            </div>
						            	</span>
						            	<span>
						            		<div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="delivery" name="delivery" checked="">
							                    									                    <label for="delivery" class="padding05">Delivery &nbsp;&nbsp;</label>
								                </div>
								            </div>
						            	</span>
						            	<span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="stock_count" name="stock_count" checked="">
							                    									                    <label for="stock_count" class="padding05">Stock Count &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="adjustment" name="adjustment" checked="">
							                    									                    <label for="adjustment" class="padding05">Adjustment &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="gift_card" name="gift_card" checked="">
							                    									                    <label for="gift_card" class="padding05">Gift Card &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="coupon" name="coupon" checked="">
							                    									                    <label for="coupon" class="padding05">Coupon &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="print_barcode" name="print_barcode" checked="">
							                    									                    <label for="print_barcode" class="padding05">Print Barcode &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="empty_database" name="empty_database" checked="">
							                    									                    <label for="empty_database" class="padding05">Empty Database &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="today_sale" name="today_sale" checked="">
							                    									                    <label for="today_sale" class="padding05">Today's Sale &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						                <span>
						                    <div aria-checked="false" aria-disabled="false">
								                <div class="checkbox">
							                    								                    	<input type="checkbox" value="1" id="today_profit" name="today_profit" checked="">
							                    									                    <label for="today_profit" class="padding05">Today's Profit &nbsp;&nbsp;</label>
								                </div>
								            </div>
						                </span>
						            </td>
						        </tr>
						        </tbody>
						    </table>
						</div>
						<div class="form-group">
	                        <input type="submit" value="Submit" class="btn btn-primary">
	                    </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</div>