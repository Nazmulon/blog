@extends('layouts.backend.app')
@section('title', 'Dashboard')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Dashboard</h4>
    </div>
    <div class="row row-cards">
        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
            <div class="card bg-primary shadow-primary">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-right">
                            <i class="mdi mdi-cube text-white icon-size"></i>
                        </div>
                        <div class="float-left">
                            <p class="mb-0 text-left text-white">Company Revenue</p>
                            <div>
                                <h3 class="font-weight-semibold text-left mb-0 text-white">$75,736</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-white mb-0">
                        <i class="mdi mdi-arrow-up-drop-circle text-success mr-1 " aria-hidden="true"></i> <span class="text-white">70% higher growth</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
            <div class="card bg-secondary shadow-secondary">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-right">
                            <i class="mdi mdi-receipt text-white icon-size"></i>
                        </div>
                        <div class="float-left">
                            <p class="mb-0 text-left text-white">Projects</p>
                            <div>
                                <h3 class="font-weight-semibold text-left mb-0 text-white">674</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-white mb-0">
                        <i class="mdi mdi-arrow-down-drop-circle mr-1 text-danger" aria-hidden="true"></i>  Completed Projects
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
            <div class="card bg-info shadow-info">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-right">
                            <i class="mdi mdi-poll-box text-white icon-size"></i>
                        </div>
                        <div class="float-left">
                            <p class="mb-0 text-left text-white">Profits</p>
                            <div>
                                <h3 class="font-weight-semibold text-left mb-0 text-white">$9384</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-white mb-0">
                        <i class="mdi mdi-arrow-up-drop-circle mr-1 text-success" aria-hidden="true"></i> Monthly Profits
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
            <div class="card bg-success shadow-success">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-right">
                            <i class="mdi mdi-account-location text-white icon-size"></i>
                        </div>
                        <div class="float-left">
                            <p class="mb-0 text-left text-white">Employees</p>
                            <div>
                                <h3 class="font-weight-semibold text-left mb-0 text-white">432</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-white  mb-0">
                        <i class="mdi mdi-arrow-down-drop-circle mr-1 text-danger" aria-hidden="true"></i>Employees Growth
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cards">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Company profit</h3>
                </div>
                <div class="card-body">
                    <div class="col-12">
                        <div id="morrisBar2" class="chartsh"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-6 align-self-center">
                            <div class="chart-circle chart-circle-sm" data-value="0.62" data-thickness="6" data-color="#623AA2"><div class="chart-circle-value">50%</div></div>
                        </div>
                        <div class="col-6 align-self-center">
                            <div class="h1 m-0"><strong> 67</strong></div>
                            <div class="text-muted ">Customers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-6 align-self-center">
                            <div class="chart-circle chart-circle-sm" data-value="0.42" data-thickness="6" data-color="#fbc434"><div class="chart-circle-value">42%</div></div>
                        </div>
                        <div class="col-6 align-self-center">
                            <div class="h1 m-0"><strong> 76</strong></div>
                            <div class="text-muted ">Total Sales</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-6 align-self-center">
                            <div class="chart-circle chart-circle-sm" data-value="0.37" data-thickness="6" data-color="#1e63c3"><div class="chart-circle-value">17%</div></div>
                        </div>
                        <div class="col-6 align-self-center">
                            <div class="h1 m-0"><strong> 17</strong></div>
                            <div class="text-muted "> New Orders</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-6 align-self-center">
                            <div class="chart-circle chart-circle-sm" data-value="0.42" data-thickness="6" data-color="#21a544"><div class="chart-circle-value">37%</div></div>
                        </div>
                        <div class="col-6 align-self-center">
                            <div class="h1 m-0"><strong> 38</strong></div>
                            <div class="text-muted "> Invoice</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cards row-deck">
        <div class="col-xs-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">User List</h2>
                </div>
                <div class="table-responsive card-body">
                    <table class="table table-bordered align-items-center mb-0">
                        <thead>
                        <tr>
                            <th>User Id</th>
                            <th>User</th>
                            <th>Role</th>
                            <th>Salary</th>
                            <th>Date</th>
                            <th>Exp</th>
                            <th>Progress</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>#675</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="mr-2 avatar brround cover-image" data-image-src="assets/images/faces/female/12.jpg"></div>
                                    <div>
                                        <h5 class="mb-0 font-16 font-700">Hanna Gover</h5>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0">Web Designer</p>
                            </td>
                            <td class="font-700">$46K</td>
                            <td>Sep 02, 2018</td>
                            <td>3y</td>
                            <td>
                                <div class="progress progress-xs mt-3">
                                    <div class="progress-bar bg-primary" style="width: 70%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#789</td>
                            <td>
                                <div class="d-flex  align-items-center">
                                    <div class="mr-2 avatar brround cover-image" data-image-src="assets/images/faces/female/2.jpg"></div>
                                    <div>
                                        <h5 class="mb-0 font-16 font-700">Daniel Kristeen</h5>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p>Wordpress</p>
                            </td>
                            <td class="font-700">$76K</td>
                            <td>Sep 16, 2018</td>
                            <td>5y</td>
                            <td>
                                <div class="progress progress-xs mt-3">
                                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#234</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="mr-2 avatar brround cover-image" data-image-src="assets/images/faces/female/1.jpg"></div>
                                    <div>
                                        <h5 class="mb-0 font-16 font-700">Julian Josephs</h5>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p>Mobile Apps</p>
                            </td>
                            <td class="font-700">$86K</td>
                            <td>Sep 21, 2018</td>
                            <td>2y</td>
                            <td>
                                <div class="progress progress-xs mt-3">
                                    <div class="progress-bar bg-success" style="width: 40%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#234</td>
                            <td>
                                <div class="d-flex  align-items-center">
                                    <div class="mr-2 avatar brround cover-image" data-image-src="assets/images/faces/female/2.jpg"></div>
                                    <div>
                                        <h5 class="mb-0 font-16 font-700">Jan Petrovic</h5>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p>Content Writing</p>
                            </td>
                            <td class="font-700">$26K</td>
                            <td>Sep 10, 2018</td>
                            <td>1y</td>
                            <td>
                                <div class="progress progress-xs mt-3">
                                    <div class="progress-bar bg-danger" style="width: 20%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#234</td>
                            <td>
                                <div class="d-flex  align-items-center">
                                    <div class="mr-2 avatar brround cover-image" data-image-src="assets/images/faces/female/8.jpg"></div>
                                    <div>
                                        <h5 class="mb-0 font-16 font-700">Petrovic</h5>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p>Developer</p>
                            </td>
                            <td class="font-700">$52K</td>
                            <td>Sep 15, 2018</td>
                            <td>4y</td>
                            <td>
                                <div class="progress progress-xs mt-3">
                                    <div class="progress-bar progress-bar bg-info" style="width: 35%"></div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
