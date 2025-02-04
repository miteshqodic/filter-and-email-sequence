<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card bg-gradient-primary text-white text-center card-shadow-primary">
                <div class="card-body">
                  <h6 class="font-weight-normal">Total invoices</h6>
                  <h2 class="mb-0">28893</h2>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card bg-gradient-danger text-white text-center card-shadow-danger">
                <div class="card-body">
                  <h6 class="font-weight-normal">Total invoices</h6>
                  <h2 class="mb-0">28893</h2>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card bg-gradient-warning text-white text-center card-shadow-warning">
                <div class="card-body">
                  <h6 class="font-weight-normal">Total invoices</h6>
                  <h2 class="mb-0">28893</h2>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card bg-gradient-info text-white text-center card-shadow-info">
                <div class="card-body">
                  <h6 class="font-weight-normal">Total invoices</h6>
                  <h2 class="mb-0">28893</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body pb-0">
                  <h4 class="card-title">Daily Sales</h4>
                  <div class="d-flex justify-content-between justify-content-lg-start flex-wrap">
                    <div class="mr-5 mb-2">
                      <h3 class="text-white">
                        56789
                      </h3>
                      <h6 class="font-weight-normal mb-0">
                        Online sales
                      </h6>
                    </div>
                    <div class="mb-2">
                      <h3 class="text-white">
                        12345
                      </h3>
                      <h6 class="font-weight-normal mb-0">
                        Sales in store
                      </h6>
                    </div>
                  </div>
                </div>
                <div class="card-body d-flex align-items-end p-0">
                  <div class="mt-auto w-100">
                    <div id="sales-legend" class="chartjs-legend mt-2 mb-4"></div>
                    <canvas id="chart-sales"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h6 class="card-title">Activity</h6>
                  </div>
                  <div class="list d-flex align-items-center border-bottom pb-3">
                    <img class="img-sm rounded-circle" src="https://via.placeholder.com/43x43" alt="">
                    <div class="wrapper w-100 ml-3">
                      <p><b>Dobrick </b>published an article</p>
                      <small class="text-muted">2 hours ago</small>
                    </div>
                  </div>
                  <div class="list d-flex align-items-center border-bottom py-3">
                    <img class="img-sm rounded-circle" src="https://via.placeholder.com/43x43" alt="">
                    <div class="wrapper w-100 ml-3">
                      <p><b>Stella </b>created an event</p>
                      <small class="text-muted">3 hours ago</small>                      
                    </div>
                  </div>
                  <div class="list d-flex align-items-center border-bottom py-3">
                    <img class="img-sm rounded-circle" src="https://via.placeholder.com/43x43" alt="">
                    <div class="wrapper w-100 ml-3">
                      <p><b>Peter </b>submitted the reports</p>
                      <small class="text-muted">1 hours ago</small>                      
                    </div>
                  </div>
                  <div class="list d-flex align-items-center border-bottom py-3">
                    <img class="img-sm rounded-circle" src="https://via.placeholder.com/43x43" alt="">
                    <div class="wrapper w-100 ml-3">
                      <p><b>Nateila </b>updated the docs</p>
                      <small class="text-muted">1 hours ago</small>                      
                    </div>
                  </div>
                  <div class="list d-flex align-items-center pt-3">
                    <img class="img-sm rounded-circle" src="https://via.placeholder.com/43x43" alt="">
                    <div class="wrapper w-100 ml-3">
                      <p><b>Tom </b>uploaded the demo</p>
                      <small class="text-muted">3 hours ago</small>                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Traffic</h4>
                  <div class="w-50 mx-auto">
                    <canvas id="traffic-chart" width="100" height="100"></canvas>
                  </div>
                  <div class="text-center mt-5">
                    <h4 class="mb-2">Traffic for the day</h5>
                    <p class="card-description mb-5">Traffic through the sources google and facebook for the day</p>
                  </div>
                  <div id="traffic-chart-legend" class="chartjs-legend traffic-chart-legend"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Order status</h4>
                  <div class="d-flex table-responsive mt-2">
                    <div class="btn-group mr-2">
                      <button class="btn btn-sm btn-primary"><i class="mdi mdi-plus-circle-outline"></i> Add</button>
                    </div>
                    <div class="btn-group mr-2">
                      <button type="button" class="btn btn-light"><i class="mdi mdi-alert-circle-outline"></i></button>
                      <button type="button" class="btn btn-light"><i class="mdi mdi-delete-empty"></i></button>
                    </div>
                    <div class="btn-group mr-2">
                      <button type="button" class="btn btn-light"><i class="mdi mdi-printer"></i></button>
                    </div>
                    <div class="btn-group ml-auto mr-2 border-0 d-none d-md-block">
                      <input type="text" class="form-control" placeholder="Search Here">
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-light"><i class="mdi mdi-cloud"></i></button>
                      <button type="button" class="btn btn-light"><i class="mdi mdi-dots-vertical"></i></button>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table mt-3 border-top">
                      <thead>
                        <tr>
                          <th>Invoice</th>
                          <th>Customer</th>
                          <th>Ship</th>
                          <th>Best Price</th>
                          <th>Purchsed Price</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>50014</td>
                          <td>David Grey</td>
                          <td>Italy</td>
                          <td>$6300</td>
                          <td>$2100</td>
                          <td><div class="badge badge-success badge-fw">Progress</div></td>
                        </tr>
                        <tr>
                          <td>50015</td>
                          <td>Stella Johnson</td>
                          <td>Brazil</td>
                          <td>$4500</td>
                          <td>$4300</td>
                          <td><div class="badge badge-warning badge-fw">Open</div></td>
                        </tr>
                        <tr>
                          <td>50016</td>
                          <td>Marina Michel</td>
                          <td>Japan</td>
                          <td>$4300</td>
                          <td>$6440</td>
                          <td><div class="badge badge-danger badge-fw">On hold</div></td>
                        </tr>
                        <tr>
                          <td>50017</td>
                          <td>John Doe</td>
                          <td>India</td>
                          <td>$6400</td>
                          <td>$2200</td>
                          <td><div class="badge badge-success badge-fw">Progress</div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row mt-4">
                    <p class="mb-3 mb-sm-0">Showing 1 to 20 of 20 entries</p>
                    <nav>
                      <ul class="pagination pagination-primary mb-0">
                        <li class="page-item"><a class="page-link"><i class="mdi mdi-chevron-left"></i></a></li>
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <li class="page-item"><a class="page-link">4</a></li>
                        <li class="page-item"><a class="page-link"><i class="mdi mdi-chevron-right"></i></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Monthly Analytics</h4>
                  <p class="card-description">Products that are creating the most revenue and their sales throughout the year and the variation in behavior of sales.</p>
                  <div id="js-legend" class="chartjs-legend mt-4 mb-5 analytics-legend"></div>
                  <div class="demo-chart">
                    <canvas id="dashboard-monthly-analytics"></canvas>                  
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin grid-margin-md-0">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-flex align-items-center justify-content-start justify-content-sm-center flex-wrap">
                    <img class="img-md rounded" src="https://via.placeholder.com/100x100" alt="">
                    <div class="wrapper ml-4">
                      <p class="font-weight-medium">Tim Cook</p>
                      <p class="text-muted">timcook@gmail.com</p>
                      <p class="text-info mb-0 font-weight-medium">Designer</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin grid-margin-md-0">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-flex align-items-center justify-content-start justify-content-sm-center flex-wrap">
                    <img class="img-md rounded" src="https://via.placeholder.com/100x100" alt="">
                    <div class="wrapper ml-4">
                      <p class="font-weight-medium">Sarah Graves</p>
                      <p class="text-muted">Sarah@gmail.com</p>
                      <p class="text-info mb-0 font-weight-medium">Developer</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-flex align-items-center justify-content-start justify-content-sm-center flex-wrap">
                    <img class="img-md rounded" src="https://via.placeholder.com/100x100" alt="">
                    <div class="wrapper ml-4">
                      <p class="font-weight-medium">David Grey</p>
                      <p class="text-muted">David@gmail.com</p>
                      <p class="text-info mb-0 font-weight-medium">Support Lead</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        
