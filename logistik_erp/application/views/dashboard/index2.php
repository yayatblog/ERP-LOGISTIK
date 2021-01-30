
      <div class="row">
        <div class="container-fluid">
          <div class="col-md-12">
            <div class="brand-text float-left mt-4">
                <h3>Welcome <span>Admin</span> </h3>
            </div>
            <div class="filter-toggle btn-group">
              <button class="btn btn-secondary date-btn" data-start_date="2021-01-23" data-end_date="2021-01-23">Today</button>
              <button class="btn btn-secondary date-btn" data-start_date="2021-01-16" data-end_date="2021-01-23">Last 7 Days</button>
              <button class="btn btn-secondary date-btn active" data-start_date="2021-01-01" data-end_date="2021-01-23">This Month</button>
              <button class="btn btn-secondary date-btn" data-start_date="2021-01-01" data-end_date="2021-12-31">This Year</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Counts Section -->
      <section class="dashboard-counts">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 form-group">
              <div class="row">
                <!-- Count item widget-->
                <div class="col-sm-3">
                  <div class="wrapper count-title text-center">
                    <div class="icon"><i class="fa fa-user" style="color: #733686"></i></div>
                    <div class="name"><strong style="color: #733686">Customer</strong></div>
                    <div class="count-number revenue-data">4218.00</div>
                  </div>
                </div>
                <!-- Count item widget-->
                <div class="col-sm-3">
                  <div class="wrapper count-title text-center">
                    <div class="icon"><i class="fas fa-fw fa-money-bill-alt" style="color: #ff8952"></i></div>
                    <div class="name" style="margin-left:-10px;"><strong style="color: #ff8952">Rent</strong></div>
                    <div class="count-number return-data">0.00</div>
                  </div>
                </div>
                <!-- Count item widget-->
                <div class="col-sm-3">
                  <div class="wrapper count-title text-center">
                    <div class="icon"><i class="fa fa-truck" style="color: #00c689"></i></div>
                    <div class="name" style="margin-left:-7px;"><strong style="color: #00c689">Driver</strong></div>
                    <div class="count-number purchase_return-data">0.00</div>
                  </div>
                </div>
                <!-- Count item widget-->
                <div class="col-sm-3">
                  <div class="wrapper count-title text-center">
                    <div class="icon"><i class="fa fa-book" style="color: #297ff9"></i></div>
                    <div class="name" style="margin-left:-7px;"><strong style="color: #297ff9">Invoice</strong></div>
                    <div class="count-number profit-data">4218.00</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 mt-4">
              <div class="card line-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h4>Cash Flow</h4>
                </div>
                <div class="card-body">
                                    <canvas id="cashFlow" data-color = "#733686" data-color_rgba = "rgba(115, 54, 134, 0.8)" data-recieved = "[&quot;3753.00&quot;,&quot;25300.00&quot;,&quot;0.00&quot;,&quot;76828.00&quot;,&quot;39515.40&quot;,&quot;300.00&quot;,&quot;2880.00&quot;]" data-sent = "[&quot;630.00&quot;,&quot;14200.00&quot;,&quot;0.00&quot;,&quot;590.00&quot;,&quot;44700.00&quot;,&quot;250.00&quot;,&quot;0.00&quot;]" data-month = "[&quot;July&quot;,&quot;August&quot;,&quot;September&quot;,&quot;October&quot;,&quot;November&quot;,&quot;December&quot;,&quot;January&quot;]" data-label1="Payment Received" data-label2="Payment Sent"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-5 mt-4">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4>January 2021</h4>
                </div>
                <div class="pie-chart mb-2">
                    <canvas id="transactionChart" data-color = "#733686" data-color_rgba = "rgba(115, 54, 134, 0.8)" data-revenue=4218 data-purchase=0 data-expense=0 data-label1="Purchase" data-label2="Revenue" data-label3="Expense" width="100" height="95"> </canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Yearly Report</h4>
                </div>
                <div class="card-body">
                  <canvas id="saleChart" data-sale_chart_value = "[&quot;4218.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;]" data-purchase_chart_value = "[&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;]" data-label1="Purchased Amount" data-label2="Sold Amount"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4>Recent Transaction</h4>
                  <div class="right-column">
                    <div class="badge badge-primary">Latest 5</div>
                  </div>
                </div>
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#sale-latest" role="tab" data-toggle="tab">Sale</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#purchase-latest" role="tab" data-toggle="tab">Purchase</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#quotation-latest" role="tab" data-toggle="tab">Quotation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#payment-latest" role="tab" data-toggle="tab">Payment</a>
                  </li>
                </ul>

                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade show active" id="sale-latest">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Date</th>
                              <th>Reference</th>
                              <th>Customer</th>
                              <th>Status</th>
                              <th>Grand Total</th>
                            </tr>
                          </thead>
                          <tbody>
                                                                                    <tr>
                              <td>12/01/2021</td>
                              <td>posr-20210113-070243</td>
                              <td>walk-in-customer</td>
                                                            <td><div class="badge badge-success">Completed</div></td>
                                                            <td>1556</td>
                            </tr>
                                                                                    <tr>
                              <td>11/01/2021</td>
                              <td>posr-20210111-021625</td>
                              <td>shakalaka</td>
                                                            <td><div class="badge badge-success">Completed</div></td>
                                                            <td>1274</td>
                            </tr>
                                                                                    <tr>
                              <td>11/01/2021</td>
                              <td>sr-20210111-014535</td>
                              <td>dhiman</td>
                                                            <td><div class="badge badge-success">Completed</div></td>
                                                            <td>1388</td>
                            </tr>
                                                                                    <tr>
                              <td>07/12/2020</td>
                              <td>posr-20201208-093957</td>
                              <td>walk-in-customer</td>
                                                            <td><div class="badge badge-success">Completed</div></td>
                                                            <td>440</td>
                            </tr>
                                                                                    <tr>
                              <td>28/11/2020</td>
                              <td>1111</td>
                              <td>dhiman</td>
                                                            <td><div class="badge badge-success">Completed</div></td>
                                                            <td>23000</td>
                            </tr>
                                                      </tbody>
                        </table>
                      </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="purchase-latest">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Date</th>
                              <th>Reference</th>
                              <th>Supplier</th>
                              <th>Status</th>
                              <th>Grand Total</th>
                            </tr>
                          </thead>
                          <tbody>
                                                                                    <tr>
                              <td>17/11/2020</td>
                              <td>pr-20201118-061543</td>
                                                              <td>N/A</td>
                                                                                          <td><div class="badge badge-success">Recieved</div></td>
                                                            <td>33600</td>
                            </tr>
                                                                                    <tr>
                              <td>16/11/2020</td>
                              <td>pr-20201116-030145</td>
                                                              <td>N/A</td>
                                                                                          <td><div class="badge badge-success">Recieved</div></td>
                                                            <td>353</td>
                            </tr>
                                                                                    <tr>
                              <td>01/11/2020</td>
                              <td>pr-20201102-093644</td>
                                                              <td>N/A</td>
                                                                                          <td><div class="badge badge-success">Recieved</div></td>
                                                            <td>352</td>
                            </tr>
                                                                                    <tr>
                              <td>01/11/2020</td>
                              <td>pr-20201102-092952</td>
                                                              <td>N/A</td>
                                                                                          <td><div class="badge badge-success">Recieved</div></td>
                                                            <td>352</td>
                            </tr>
                                                                                    <tr>
                              <td>26/10/2020</td>
                              <td>pr-20201027-045658</td>
                                                              <td>N/A</td>
                                                                                          <td><div class="badge badge-success">Recieved</div></td>
                                                            <td>4</td>
                            </tr>
                                                      </tbody>
                        </table>
                      </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="quotation-latest">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Date</th>
                              <th>Reference</th>
                              <th>Customer</th>
                              <th>Status</th>
                              <th>Grand Total</th>
                            </tr>
                          </thead>
                          <tbody>
                                                                                    <tr>
                              <td>12/01/2021</td>
                              <td>qr-20210112-125803</td>
                              <td>walk-in-customer</td>
                                                            <td><div class="badge badge-danger">Pending</div></td>
                                                            <td>1660</td>
                            </tr>
                                                                                    <tr>
                              <td>09/12/2020</td>
                              <td>qr-20201210-053401</td>
                              <td>shakalaka</td>
                                                            <td><div class="badge badge-danger">Pending</div></td>
                                                            <td>9500</td>
                            </tr>
                                                                                    <tr>
                              <td>23/10/2020</td>
                              <td>qr-20201024-090814</td>
                              <td>dhiman</td>
                                                            <td><div class="badge badge-danger">Pending</div></td>
                                                            <td>23000</td>
                            </tr>
                                                                                    <tr>
                              <td>22/10/2018</td>
                              <td>qr-20181023-061249</td>
                              <td>walk-in-customer</td>
                                                            <td><div class="badge badge-success">Sent</div></td>
                                                            <td>453</td>
                            </tr>
                                                                                    <tr>
                              <td>03/09/2018</td>
                              <td>qr-20180904-040257</td>
                              <td>dhiman</td>
                                                            <td><div class="badge badge-danger">Pending</div></td>
                                                            <td>77.1</td>
                            </tr>
                                                      </tbody>
                        </table>
                      </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="payment-latest">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Date</th>
                              <th>Reference</th>
                              <th>Amount</th>
                              <th>Paid By</th>
                            </tr>
                          </thead>
                          <tbody>
                                                        <tr>
                              <td>12/01/2021</td>
                              <td>spr-20210113-070243</td>
                              <td>1556</td>
                              <td>Cash</td>
                            </tr>
                                                        <tr>
                              <td>11/01/2021</td>
                              <td>spr-20210111-021625</td>
                              <td>1274</td>
                              <td>Cash</td>
                            </tr>
                                                        <tr>
                              <td>06/01/2021</td>
                              <td>spr-20210106-022350</td>
                              <td>50</td>
                              <td>Cash</td>
                            </tr>
                                                        <tr>
                              <td>07/12/2020</td>
                              <td>spr-20201208-094000</td>
                              <td>300</td>
                              <td>Cash</td>
                            </tr>
                                                        <tr>
                              <td>17/11/2020</td>
                              <td>spr-20201118-065242</td>
                              <td>27200</td>
                              <td>Cash</td>
                            </tr>
                                                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4>Best Seller January</h4>
                  <div class="right-column">
                    <div class="badge badge-primary">Top 5</div>
                  </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>SL No</th>
                          <th>Product Details</th>
                          <th>Qty</th>
                        </tr>
                      </thead>
                      <tbody>
                                                                        <tr>
                          <td>1</td>
                          <td>mango<br>[72782608]</td>
                          <td>12</td>
                        </tr>
                                                                        <tr>
                          <td>2</td>
                          <td>Mouse<br>[63920719]</td>
                          <td>4</td>
                        </tr>
                                                                        <tr>
                          <td>3</td>
                          <td>Earphone<br>[85415108]</td>
                          <td>3</td>
                        </tr>
                                                                        <tr>
                          <td>4</td>
                          <td>iphone-X<br>[97103461]</td>
                          <td>1</td>
                        </tr>
                                                                        <tr>
                          <td>5</td>
                          <td>Polo Shirt<br>[53467102]</td>
                          <td>1</td>
                        </tr>
                                              </tbody>
                    </table>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4>Best Seller 2021(Qty)</h4>
                  <div class="right-column">
                    <div class="badge badge-primary">Top 5</div>
                  </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>SL No</th>
                          <th>Product Details</th>
                          <th>Qty</th>
                        </tr>
                      </thead>
                      <tbody>
                                                                        <tr>
                          <td>1</td>
                          <td>mango<br>[72782608]</td>
                          <td>12</td>
                        </tr>
                                                                        <tr>
                          <td>2</td>
                          <td>Mouse<br>[63920719]</td>
                          <td>4</td>
                        </tr>
                                                                        <tr>
                          <td>3</td>
                          <td>Earphone<br>[85415108]</td>
                          <td>3</td>
                        </tr>
                                                                        <tr>
                          <td>4</td>
                          <td>iphone-X<br>[97103461]</td>
                          <td>1</td>
                        </tr>
                                                                        <tr>
                          <td>5</td>
                          <td>Polo Shirt<br>[53467102]</td>
                          <td>1</td>
                        </tr>
                                              </tbody>
                    </table>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4>Best Seller 2021(Price)</h4>
                  <div class="right-column">
                    <div class="badge badge-primary">Top 5</div>
                  </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>SL No</th>
                          <th>Product Details</th>
                          <th>Grand Total</th>
                        </tr>
                      </thead>
                      <tbody>
                                                                        <tr>
                          <td>1</td>
                          <td>Mouse<br>[63920719]</td>
                          <td>1716.00</td>
                        </tr>
                                                                        <tr>
                          <td>2</td>
                          <td>iphone-X<br>[97103461]</td>
                          <td>1100.00</td>
                        </tr>
                                                                        <tr>
                          <td>3</td>
                          <td>Earphone<br>[85415108]</td>
                          <td>750.00</td>
                        </tr>
                                                                        <tr>
                          <td>4</td>
                          <td>mango<br>[72782608]</td>
                          <td>552.00</td>
                        </tr>
                                                                        <tr>
                          <td>5</td>
                          <td>Polo Shirt<br>[53467102]</td>
                          <td>100.00</td>
                        </tr>
                                              </tbody>
                    </table>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
