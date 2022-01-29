@extends('backend.layouts.app')

@section('content')
    <section class="dashboard-page">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <h2 class="font-weight-bolder mb-0">551</h2>
                            <p class="card-text">Subscribers</p>
                        </div>
                        <div class="avatar bg-light-primary p-50 m-0">
                            <div class="avatar-content">
                                <i data-feather='users'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <h2 class="font-weight-bolder mb-0">376</h2>
                            <p class="card-text">Domain Request</p>
                        </div>
                        <div class="avatar bg-light-success p-50 m-0">
                            <div class="avatar-content">
                                <i data-feather='link'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <h2 class="font-weight-bolder mb-0">$11,500</h2>
                            <p class="card-text">Total Earnings</p>
                        </div>
                        <div class="avatar bg-light-danger p-50 m-0">
                            <div class="avatar-content">
                                <i data-feather='dollar-sign'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <h2 class="font-weight-bolder mb-0">346</h2>
                            <p class="card-text">Expired Subscriptions</p>
                        </div>
                        <div class="avatar bg-light-warning p-50 m-0">
                            <div class="avatar-content">
                                <i data-feather='user-x'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex flex-sm-row flex-column justify-content-md-between align-items-start justify-content-start">
                        <div>
                            <h4 class="card-title">Order Statistics</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="order-statistics-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header align-items-start">
                        <div>
                            <h4 class="card-title mb-25">Sales</h4>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div id="sales-line-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header align-items-start">
                        <div>
                            <h4 class="card-title mb-25">Orders</h4>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div id="orders-line-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header align-items-start">
                        <div>
                            <h4 class="card-title mb-25">Shop</h4>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div id="shop-line-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card card-browser-states">
                    <div class="card-header">
                        <h4 class="card-title">Browser States</h4>
                    </div>
                    <div class="card-body">
                        <div class="browser-states">
                            <div class="media">
                                <img src="{{static_asset('assets/images/icons/google-chrome.png')}}" class="rounded mr-1" height="30" alt="Google Chrome">
                                <h6 class="align-self-center mb-0">Chrome</h6>
                            </div>
                            <div class="d-flex align-items-center" style="position: relative;">
                                <div class="font-weight-bold text-body-heading mr-1">54.4%</div>
                            </div>
                        </div>
                        <div class="browser-states">
                            <div class="media">
                                <img src="{{static_asset('assets/images/icons/mozila-firefox.png')}}" class="rounded mr-1" height="30" alt="Mozila Firefox">
                                <h6 class="align-self-center mb-0">Firefox</h6>
                            </div>
                            <div class="d-flex align-items-center" style="position: relative;">
                                <div class="font-weight-bold text-body-heading mr-1">6.1%</div>
                            </div>
                        </div>
                        <div class="browser-states">
                            <div class="media">
                                <img src="{{static_asset('assets/images/icons/apple-safari.png')}}" class="rounded mr-1" height="30" alt="Apple Safari">
                                <h6 class="align-self-center mb-0">Safari</h6>
                            </div>
                            <div class="d-flex align-items-center" style="position: relative;">
                                <div class="font-weight-bold text-body-heading mr-1">14.6%</div>
                            </div>
                        </div>
                        <div class="browser-states">
                            <div class="media">
                                <img src="{{static_asset('assets/images/icons/internet-explorer.png')}}" class="rounded mr-1" height="30" alt="Edge">
                                <h6 class="align-self-center mb-0">Edge</h6>
                            </div>
                            <div class="d-flex align-items-center" style="position: relative;">
                                <div class="font-weight-bold text-body-heading mr-1">4.2%</div>
                            </div>
                        </div>
                        <div class="browser-states">
                            <div class="media">
                                <img src="{{static_asset('assets/images/icons/opera.png')}}" class="rounded mr-1" height="30" alt="Opera Mini">
                                <h6 class="align-self-center mb-0">Opera</h6>
                            </div>
                            <div class="d-flex align-items-center" style="position: relative;">
                                <div class="font-weight-bold text-body-heading mr-1">8.4%</div>
                            </div>
                        </div>
                        <div class="browser-states">
                            <div class="media">
                                <img src="{{static_asset('assets/images/icons/android-webview.png')}}" class="rounded mr-1" height="30" alt="Android Webview">
                                <h6 class="align-self-center mb-0">Andriod Webview</h6>
                            </div>
                            <div class="d-flex align-items-center" style="position: relative;">
                                <div class="font-weight-bold text-body-heading mr-1">8.4%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-end">
                        <h4>Sessions By Device</h4>
                    </div>
                    <div class="card-body">
                        <div id="session-chart" class="my-1"></div>
                        <div class="d-flex justify-content-between mb-1">
                            <div class="d-flex align-items-center">
                                <i data-feather="monitor" class="font-medium-2 text-primary"></i>
                                <span class="font-weight-bold ml-75 mr-25">Desktop</span>
                                <span>- 58.6%</span>
                            </div>
                            <div>
                                <span>2%</span>
                                <i data-feather="arrow-up" class="text-success"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mb-1">
                            <div class="d-flex align-items-center">
                                <i data-feather="tablet" class="font-medium-2 text-warning"></i>
                                <span class="font-weight-bold ml-75 mr-25">Mobile</span>
                                <span>- 34.9%</span>
                            </div>
                            <div>
                                <span>8%</span>
                                <i data-feather="arrow-up" class="text-success"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <i data-feather="tablet" class="font-medium-2 text-danger"></i>
                                <span class="font-weight-bold ml-75 mr-25">Tablet</span>
                                <span>- 6.5%</span>
                            </div>
                            <div>
                                <span>-5%</span>
                                <i data-feather="arrow-down" class="text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Referral URL</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center justify-content-between mb-1">
                                <span>(direct)</span>
                                <span>5000</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between mb-1">
                                <span>google</span>
                                <span>4000</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between mb-1">
                                <span>codecanyon.net/</span>
                                <span>3000</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between mb-1">
                                <span>facebook.com/</span>
                                <span>2000</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between mb-1">
                                <span>bing</span>
                                <span>1000</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        var areaChartEl = document.querySelector('#order-statistics-chart'),
        areaChartConfig = {
            chart: {
                height: 400,
                type: 'area',
                parentHeightOffset: 0,
                toolbar: {
                    show: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: false,
                curve: 'straight'
            },
            legend: {
                show: true,
                position: 'top',
                horizontalAlign: 'start'
            },
            grid: {
                xaxis: {
                    lines: {
                        show: true
                    }
                }
            },
            colors: ['#ff9f43', '#28c76f', '#ea5455'],
            series: [
                {
                    name: 'Pending',
                    data: [100, 150, 90, 170, 130, 160, 140, 240, 220, 180, 270, 280, 375]
                },
                {
                    name: 'Completed',
                    data: [120, 150, 70, 110, 80, 100, 90, 180, 160, 140, 200, 220, 275]
                },
                {
                    name: 'Expired',
                    data: [80, 150, 30, 70, 40, 60, 50, 140, 120, 100, 140, 180, 220]
                }
            ],
            xaxis: {
                categories: [
                    '7/12',
                    '8/12',
                    '9/12',
                    '10/12',
                    '11/12',
                    '12/12',
                    '13/12',
                    '14/12',
                    '15/12',
                    '16/12',
                    '17/12',
                    '18/12',
                    '19/12',
                    '20/12'
                ]
            },
            fill: {
                opacity: 1,
                type: 'solid'
            },
            tooltip: {
                shared: false
            },
        };
        var areaChart = new ApexCharts(areaChartEl, areaChartConfig);
        areaChart.render();

        var $salesLineChart = document.querySelector('#sales-line-chart');
        salesLineChartOptions = {
            chart: {
                height: 240,
                toolbar: { show: false },
                zoom: { enabled: false },
                type: 'line',
                dropShadow: {
                    enabled: true,
                    top: 18,
                    left: 2,
                    blur: 5,
                    opacity: 0.2
                },
                offsetX: -10
            },
            stroke: {
                curve: 'smooth',
                width: 4
            },
            grid: {
                borderColor: '#ebe9f1',
                padding: {
                    top: -20,
                    bottom: 5,
                    left: 20
                }
            },
            legend: {
                show: false
            },
            colors: ['#df87f2'],
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    inverseColors: false,
                    gradientToColors: [window.colors.solid.primary],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100, 100, 100]
                }
            },
            markers: {
                size: 0,
                hover: {
                    size: 5
                }
            },
            xaxis: {
                labels: {
                    offsetY: 5,
                    style: {
                        colors: '#b9b9c3',
                        fontSize: '0.857rem'
                    }
                },
                axisTicks: {
                    show: false
                },
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                axisBorder: {
                    show: false
                },
                tickPlacement: 'on'
            },
            yaxis: {
                tickAmount: 5,
                labels: {
                    style: {
                        colors: '#b9b9c3',
                        fontSize: '0.857rem'
                    },
                    formatter: function (val) {
                        return val > 999 ? (val / 1000).toFixed(1) + 'k' : val;
                    }
                }
            },
            tooltip: {
                x: { show: false }
            },
            series: [
                {
                    name: 'Sales',
                    data: [140, 180, 150, 205, 160, 295, 125, 255, 205, 305, 240, 295]
                }
            ]
        };
        salesLineChart = new ApexCharts($salesLineChart, salesLineChartOptions);
        salesLineChart.render();

        var $salesLineChart2 = document.querySelector('#orders-line-chart');
        salesLineChartOptions2 = {
            chart: {
                height: 240,
                toolbar: { show: false },
                zoom: { enabled: false },
                type: 'line',
                dropShadow: {
                    enabled: true,
                    top: 18,
                    left: 2,
                    blur: 5,
                    opacity: 0.2
                },
                offsetX: -10
            },
            stroke: {
                curve: 'smooth',
                width: 4
            },
            grid: {
                borderColor: '#ebe9f1',
                padding: {
                    top: -20,
                    bottom: 5,
                    left: 20
                }
            },
            legend: {
                show: false
            },
            colors: ['#48da89'],
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    inverseColors: false,
                    gradientToColors: [window.colors.solid.primary],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100, 100, 100]
                }
            },
            markers: {
                size: 0,
                hover: {
                    size: 5
                }
            },
            xaxis: {
                labels: {
                    offsetY: 5,
                    style: {
                        colors: '#b9b9c3',
                        fontSize: '0.857rem'
                    }
                },
                axisTicks: {
                    show: false
                },
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                axisBorder: {
                    show: false
                },
                tickPlacement: 'on'
            },
            yaxis: {
                tickAmount: 5,
                labels: {
                    style: {
                        colors: '#b9b9c3',
                        fontSize: '0.857rem'
                    },
                    formatter: function (val) {
                        return val > 999 ? (val / 1000).toFixed(1) + 'k' : val;
                    }
                }
            },
            tooltip: {
                x: { show: false }
            },
            series: [
                {
                    name: 'Orders',
                    data: [140, 180, 150, 205, 160, 295, 125, 255, 205, 305, 240, 295]
                }
            ]
        };
        salesLineChart2 = new ApexCharts($salesLineChart2, salesLineChartOptions2);
        salesLineChart2.render();

        var $salesLineChart3 = document.querySelector('#shop-line-chart');
        salesLineChartOptions3 = {
            chart: {
                height: 240,
                toolbar: { show: false },
                zoom: { enabled: false },
                type: 'line',
                dropShadow: {
                    enabled: true,
                    top: 18,
                    left: 2,
                    blur: 5,
                    opacity: 0.2
                },
                offsetX: -10
            },
            stroke: {
                curve: 'smooth',
                width: 4
            },
            grid: {
                borderColor: '#ebe9f1',
                padding: {
                    top: -20,
                    bottom: 5,
                    left: 20
                }
            },
            legend: {
                show: false
            },
            colors: ['#9e95f5'],
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    inverseColors: false,
                    gradientToColors: [window.colors.solid.primary],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100, 100, 100]
                }
            },
            markers: {
                size: 0,
                hover: {
                    size: 5
                }
            },
            xaxis: {
                labels: {
                    offsetY: 5,
                    style: {
                        colors: '#b9b9c3',
                        fontSize: '0.857rem'
                    }
                },
                axisTicks: {
                    show: false
                },
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                axisBorder: {
                    show: false
                },
                tickPlacement: 'on'
            },
            yaxis: {
                tickAmount: 5,
                labels: {
                    style: {
                        colors: '#b9b9c3',
                        fontSize: '0.857rem'
                    },
                    formatter: function (val) {
                        return val > 999 ? (val / 1000).toFixed(1) + 'k' : val;
                    }
                }
            },
            tooltip: {
                x: { show: false }
            },
            series: [
                {
                    name: 'Shop',
                    data: [140, 180, 150, 205, 160, 295, 125, 255, 205, 305, 240, 295]
                }
            ]
        };
        salesLineChart3 = new ApexCharts($salesLineChart3, salesLineChartOptions3);
        salesLineChart3.render();

        var $sessionChart = document.querySelector('#session-chart');
        sessionChartOptions = {
            chart: {
                type: 'donut',
                height: 300,
                toolbar: {
                    show: false
                }
            },
            dataLabels: {
                enabled: false
            },
            series: [58.6, 34.9, 6.5],
            legend: { show: false },
            comparedResult: [2, -3, 8],
            labels: ['Desktop', 'Mobile', 'Tablet'],
            stroke: { width: 0 },
            colors: [window.colors.solid.primary, window.colors.solid.warning, window.colors.solid.danger]
        };
        sessionChart = new ApexCharts($sessionChart, sessionChartOptions);
        sessionChart.render();
    </script>
@endsection
