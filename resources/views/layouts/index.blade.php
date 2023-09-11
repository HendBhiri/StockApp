@extends('master')

@section('content')
<div class="section-body mt-3">
            <div class="container-fluid">
                
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="mb-4">
                            <h2>Welcome Jason Porter!</h2>                            
                            <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></small>
                        </div>                        
                    </div>
                </div>
                <div class="row clearfix row-deck">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">My Balance</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    <div class="item-action dropdown ml-2">
                                        <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <span>Balance</span>
                                <h4>$<span class="counter">20,508</span></h4>
                                <div id="apexspark1" class="mb-4"></div>
                                <div class="form-group">
                                    <label class="d-block">Bank of America <span class="float-right">$<span class="counter">15,025</span></span></label>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-azure" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">RBC Bank <span class="float-right">$<span class="counter">1,843</span></span></label>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Frost Bank <span class="float-right">$<span class="counter">3,641</span></span></label>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="javascript:void(0)" class="btn btn-block btn-info btn-sm">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Product Valuation</h3>
                                <div class="card-options">
                                    <label class="custom-switch m-0">
                                        <input type="checkbox" value="1" class="custom-switch-input" checked="">
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chart-bar" style="height: 350px"></div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between">
                                    <a href="javascript:void(0)" class="btn btn-info btn-sm w200">Generate Report</a>
                                    <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></small>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-body">
            <div class="container-fluid">
                <div class="row clearfix row-deck">
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Sales Statistics</h3>
                                <div class="card-options">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" placeholder="Search something..." name="s">
                                            <span class="input-group-btn ml-2"><button class="btn btn-sm btn-default" type="submit"><span class="fe fe-search"></span></button></span>
                                        </div>
                                    </form>
                                    <div class="item-action dropdown ml-2">
                                        <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                        <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card bg-none b-none">
                                            <div class="card-body p-2">
                                                <div class="card-value float-right">
                                                    <span class="statistics_chart">5,2,3,6,9,8,4,1,2,8</span>
                                                </div>
                                                <h3 class="mb-1">$20,504</h3>
                                                <div>Total income</div>
                                                <div class="mt-2">
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" style="width: 84%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card bg-none b-none">
                                            <div class="card-body p-2">
                                                <div class="card-value float-right">
                                                    <span class="statistics_chart">5,2,3,6,9,8,4,1,2,8</span>
                                                </div>
                                                <h3 class="mb-1">$20,504</h3>
                                                <div>Total Expense</div>
                                                <div class="mt-2">
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-danger" style="width: 20%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card bg-none b-none">
                                            <div class="card-body p-2">
                                                <div class="card-value float-right">
                                                    <span class="statistics_chart">5,2,3,6,9,8,4,1,2,8</span>
                                                </div>
                                                <h3 class="mb-1">$20,504</h3>
                                                <div>Total Growth</div>
                                                <div class="mt-2">
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-green" style="width: 27%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="flotChart" class="flot-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Sales Revenue</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    <div class="item-action dropdown ml-2">
                                        <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <div class="mt-4">
                                    <input type="text" class="knob" value="34" data-width="147" data-height="147" data-thickness="0.07" data-bgColor="#3f454a" data-fgColor="#395bb6">
                                </div>
                                <h3 class="mb-0 mt-3 font300">24,301 <span class="text-green font-15">+3.7%</span></h3>
                                <small>Lorem Ipsum is simply dummy text <br> <a href="#">Read more</a> </small>
                                <div class="mt-4">
                                    <span class="chart_3">2,5,8,3,6,9,4,5,6,3</span>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="javascript:void(0)" class="btn btn-block btn-success btn-sm">Send Report</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix row-deck">
                    <div class="col-lg-8 col-md-12">
                        <div class="card visitors-map">
                            <div class="card-header">
                                <h3 class="card-title">Revenue By Location</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    <div class="item-action dropdown ml-2">
                                        <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-lg-7 col-md-12">
                                        <div id="world-map-markers" style="height:300px;"></div>
                                    </div>
                                    <div class="col-lg-5 col-md-12">
                                        <span>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></span>
                                        <ul class="list-group mt-3">
                                            <li class="list-group-item">
                                                <div class="clearfix">
                                                    <div class="float-left"><strong>35%</strong></div>
                                                    <div class="float-right"><small class="text-muted">America</small></div>
                                                </div>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-azure" role="progressbar" style="width: 35%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="clearfix">
                                                    <div class="float-left"><strong>25%</strong></div>
                                                    <div class="float-right"><small class="text-muted">India</small></div>
                                                </div>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-green" role="progressbar" style="width: 25%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="clearfix">
                                                    <div class="float-left"><strong>15%</strong></div>
                                                    <div class="float-right"><small class="text-muted">australia</small></div>
                                                </div>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-orange" role="progressbar" style="width: 15%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="clearfix">
                                                    <div class="float-left"><strong>20%</strong></div>
                                                    <div class="float-right"><small class="text-muted">UK</small></div>
                                                </div>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-indigo" role="progressbar" style="width: 20%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="clearfix">
                                                    <div class="float-left"><strong>11%</strong></div>
                                                    <div class="float-right"><small class="text-muted">UAE</small></div>
                                                </div>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-pink" role="progressbar" style="width: 11%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Order status</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    <div class="item-action dropdown ml-2">
                                        <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <div id="Order_status" style="height: 268px"></div>
                            </div>
                            <div class="card-footer text-center">
                                <div class="row clearfix">
                                    <div class="col-6">
                                        <h6 class="mb-0">$3,095</h6>
                                        <small class="text-muted">Last Month</small>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="mb-0">$2,763</h6>
                                        <small class="text-muted">This Month</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="row clearfix">
                    <div class="col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Product Summary</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-plus"></i></a>
                                    <div class="item-action dropdown ml-2">
                                        <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped mb-0 text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>#No</th>
                                                <th>Client Name</th>
                                                <th>Product ID</th>
                                                <th>Product</th>
                                                <th>Product Cost</th>
                                                <th>Payment Mode</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#01</td>
                                                <td>Sean Black</td>
                                                <td>PRO12345</td>
                                                <td>Mi LED Smart TV 4A 80</td>
                                                <td>$14,500</td>
                                                <td>Online Payment</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                            </tr>
                                            <tr>
                                                <td>#02</td>
                                                <td>Evan Rees</td>
                                                <td>PRO8765</td>
                                                <td>Thomson R9 122cm (48 inch) Full HD LED TV </td>
                                                <td>$30,000</td>
                                                <td>Cash on delivered</td>
                                                <td><span class="badge badge-primary">Add Cart</span></td>
                                            </tr>
                                            <tr>
                                                <td>#03</td>
                                                <td>David Wallace</td>
                                                <td>PRO54321</td>
                                                <td>Vu 80cm (32 inch) HD Ready LED TV</td>
                                                <td>$13,200</td>
                                                <td>Online Payment</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>#04</td>
                                                <td>Julia Bower</td>
                                                <td>PRO97654</td>
                                                <td>Micromax 81cm (32 inch) HD Ready LED TV</td>
                                                <td>$15,100</td>
                                                <td>Cash on delivered</td>
                                                <td><span class="badge badge-secondary">Delivering</span></td>
                                            </tr>
                                            <tr>
                                                <td>#05</td>
                                                <td>Kevin James</td>
                                                <td>PRO4532</td>
                                                <td>HP 200 Mouse &amp; Wireless Laptop Keyboard </td>
                                                <td>$5,987</td>
                                                <td>Online Payment</td>
                                                <td><span class="badge badge-danger">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <td>#06</td>
                                                <td>Theresa Wright</td>
                                                <td>PRO6789</td>
                                                <td>Digisol DG-HR3400 Router </td>
                                                <td>$11,987</td>
                                                <td>Cash on delivered</td>
                                                <td><span class="badge badge-success">Delivering</span></td>
                                            </tr>
                                            <tr>
                                                <td>#07</td>
                                                <td>Sebastian Black</td>
                                                <td>PRO4567</td>
                                                <td>Dell WM118 Wireless Optical Mouse</td>
                                                <td>$4,700</td>
                                                <td>Online Payment</td>
                                                <td><span class="badge badge-secondary">Add to Cart</span></td>
                                            </tr>
                                            <tr>
                                                <td>#08</td>
                                                <td>Kevin Glover</td>
                                                <td>PRO32156</td>
                                                <td>Dell 16 inch Laptop Backpack </td>
                                                <td>$678</td>
                                                <td>Cash On delivered</td>
                                                <td><span class="badge badge-cyan">Delivered</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection