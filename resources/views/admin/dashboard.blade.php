@extends('layouts.admin_layout.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row g-6">
                <!-- View sales -->
                <div class="col-xl-4">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-7">
                                <div class="card-body text-nowrap">
                                    <h5 class="card-title mb-0">Congratulations John! 🎉</h5>
                                    <p class="mb-2">Best seller of the month</p>
                                    <h4 class="text-primary mb-1">$48.9k</h4>
                                    <a href="javascript:;" class="btn btn-primary waves-effect waves-light">View Sales</a>
                                </div>
                            </div>
                            <div class="col-5 text-center text-sm-left">
                                <div class="card-body pb-0 px-0 px-md-4">
                                    <img src="../../assets/img/illustrations/card-advance-sale.png" height="140"
                                        alt="view sales">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- View sales -->

                <!-- Statistics -->
                <div class="col-xl-8 col-md-12">
                    <div class="card h-100">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title mb-0">Statistics</h5>
                            <small class="text-body-secondary">Updated 1 month ago</small>
                        </div>
                        <div class="card-body d-flex align-items-end">
                            <div class="w-100">
                                <div class="row gy-3">
                                    <div class="col-md-3 col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="badge rounded bg-label-primary me-4 p-2"><i
                                                    class="icon-base ti tabler-chart-pie-2 icon-lg"></i></div>
                                            <div class="card-info">
                                                <h5 class="mb-0">230k</h5>
                                                <small>Sales</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="badge rounded bg-label-info me-4 p-2"><i
                                                    class="icon-base ti tabler-users icon-lg"></i></div>
                                            <div class="card-info">
                                                <h5 class="mb-0">8.549k</h5>
                                                <small>Customers</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="badge rounded bg-label-danger me-4 p-2"><i
                                                    class="icon-base ti tabler-shopping-cart icon-lg"></i></div>
                                            <div class="card-info">
                                                <h5 class="mb-0">1.423k</h5>
                                                <small>Products</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="badge rounded bg-label-success me-4 p-2"><i
                                                    class="icon-base ti tabler-currency-dollar icon-lg"></i></div>
                                            <div class="card-info">
                                                <h5 class="mb-0">$9745</h5>
                                                <small>Revenue</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Statistics -->

                <div class="col-xxl-4 col-12">
                    <div class="row g-6">
                        <!-- Profit last month -->
                        <div class="col-xl-6 col-sm-6">
                            <div class="card h-100">
                                <div class="card-header pb-0">
                                    <h5 class="card-title mb-1">Profit</h5>
                                    <p class="card-subtitle">Last Month</p>
                                </div>
                                <div class="card-body">
                                    <div id="profitLastMonth" style="min-height: 110px;">
                                        <div id="apexchartspoyy0y6fg"
                                            class="apexcharts-canvas apexchartspoyy0y6fg apexcharts-theme-"
                                            style="width: 164px; height: 110px;"><svg xmlns="http://www.w3.org/2000/svg"
                                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)" width="164" height="110">
                                                <foreignObject x="0" y="0" width="164" height="110">
                                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                        style="max-height: 55px;"></div>
                                                    <style type="text/css">
                                                        .apexcharts-flip-y {
                                                            transform: scaleY(-1) translateY(-100%);
                                                            transform-origin: top;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-flip-x {
                                                            transform: scaleX(-1);
                                                            transform-origin: center;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }

                                                        .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                            flex-direction: column;
                                                        }

                                                        .apexcharts-legend-group {
                                                            display: flex;
                                                        }

                                                        .apexcharts-legend-group-vertical {
                                                            flex-direction: column-reverse;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom,
                                                        .apexcharts-legend.apx-legend-position-top {
                                                            flex-wrap: wrap
                                                        }

                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            justify-content: flex-start;
                                                            align-items: flex-start;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                            align-items: flex-end;
                                                        }

                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }

                                                        .apexcharts-legend-text *,
                                                        .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }

                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                            cursor: pointer;
                                                            margin-right: 1px;
                                                        }

                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }

                                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }

                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }
                                                    </style>
                                                </foreignObject>
                                                <rect width="0" height="0" x="0" y="0" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)">
                                                </g>
                                                <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)">
                                                </g>
                                                <g class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                                                    <g class="apexcharts-yaxis-texts-g"></g>
                                                </g>
                                                <g class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(6, 12)">
                                                    <defs>
                                                        <clipPath id="gridRectMaskpoyy0y6fg">
                                                            <rect width="151" height="93" x="0" y="0" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff">
                                                            </rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectBarMaskpoyy0y6fg">
                                                            <rect width="157" height="99" x="-3" y="-3"
                                                                rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMaskpoyy0y6fg">
                                                            <rect width="162" height="104" x="-5.5" y="-5.5"
                                                                rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskpoyy0y6fg"></clipPath>
                                                        <clipPath id="nonForecastMaskpoyy0y6fg"></clipPath>
                                                    </defs>
                                                    <line x1="0" y1="0" x2="0" y2="93"
                                                        stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                        height="93" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                        stroke-width="1"></line>
                                                    <g class="apexcharts-grid">
                                                        <g class="apexcharts-gridlines-horizontal"></g>
                                                        <g class="apexcharts-gridlines-vertical">
                                                            <line x1="0" y1="0" x2="0"
                                                                y2="93" stroke="var(--bs-border-color)"
                                                                stroke-dasharray="6" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line x1="30.2" y1="0" x2="30.2"
                                                                y2="93" stroke="var(--bs-border-color)"
                                                                stroke-dasharray="6" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line x1="60.4" y1="0" x2="60.4"
                                                                y2="93" stroke="var(--bs-border-color)"
                                                                stroke-dasharray="6" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line x1="90.6" y1="0" x2="90.6"
                                                                y2="93" stroke="var(--bs-border-color)"
                                                                stroke-dasharray="6" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line x1="120.8" y1="0" x2="120.8"
                                                                y2="93" stroke="var(--bs-border-color)"
                                                                stroke-dasharray="6" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line x1="151" y1="0" x2="151"
                                                                y2="93" stroke="var(--bs-border-color)"
                                                                stroke-dasharray="6" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <line x1="0" y1="93" x2="151"
                                                            y2="93" stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                        <line x1="0" y1="1" x2="0"
                                                            y2="93" stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                    </g>
                                                    <g class="apexcharts-grid-borders"></g>
                                                    <g class="apexcharts-line-series apexcharts-plot-series">
                                                        <g class="apexcharts-series" zIndex="0" seriesName="series-1"
                                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                                            <path
                                                                d="M 0 93 L 30.2 55.8 L 60.4 79.05 L 90.6 32.55 L 120.8 55.8 L 151 9.299999999999997"
                                                                fill="none" fill-opacity="1" stroke="var(--bs-info)"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-line"
                                                                index="0" clip-path="url(#gridRectMaskpoyy0y6fg)"
                                                                pathTo="M 0 93 L 30.2 55.8 L 60.4 79.05 L 90.6 32.55 L 120.8 55.8 L 151 9.299999999999997"
                                                                pathFrom="M 0 93 L 0 93 L 30.2 93 L 60.4 93 L 90.6 93 L 120.8 93 L 151 93"
                                                                fill-rule="evenodd"></path>
                                                            <g class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                data:realIndex="0">
                                                                <g class=""
                                                                    clip-path="url(#gridRectMarkerMaskpoyy0y6fg)">
                                                                    <path d="M -1, 93
               m -3.5, 0
               a 3.5,3.5 0 1,0 7,0
               a 3.5,3.5 0 1,0 -7,0" fill="var(--bs-info)" fill-opacity="1" stroke="transparent" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="3.2"
                                                                        stroke-dasharray="0" cx="-1"
                                                                        cy="93" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events w7iqiv7pw"
                                                                        rel="0" j="0" index="0"
                                                                        default-marker-size="3.5"></path>
                                                                    <path d="M 29.2, 55.8
               m -3.5, 0
               a 3.5,3.5 0 1,0 7,0
               a 3.5,3.5 0 1,0 -7,0" fill="var(--bs-info)" fill-opacity="1" stroke="transparent" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="3.2"
                                                                        stroke-dasharray="0" cx="29.2"
                                                                        cy="55.8" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events wrm25ho7p"
                                                                        rel="1" j="1" index="0"
                                                                        default-marker-size="3.5"></path>
                                                                </g>
                                                                <g class=""
                                                                    clip-path="url(#gridRectMarkerMaskpoyy0y6fg)">
                                                                    <path d="M 59.4, 79.05
               m -3.5, 0
               a 3.5,3.5 0 1,0 7,0
               a 3.5,3.5 0 1,0 -7,0" fill="var(--bs-info)" fill-opacity="1" stroke="transparent" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="3.2"
                                                                        stroke-dasharray="0" cx="59.4"
                                                                        cy="79.05" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events wem56n7cuj"
                                                                        rel="2" j="2" index="0"
                                                                        default-marker-size="3.5"></path>
                                                                </g>
                                                                <g class=""
                                                                    clip-path="url(#gridRectMarkerMaskpoyy0y6fg)">
                                                                    <path d="M 89.6, 32.55
               m -3.5, 0
               a 3.5,3.5 0 1,0 7,0
               a 3.5,3.5 0 1,0 -7,0" fill="var(--bs-info)" fill-opacity="1" stroke="transparent" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="3.2"
                                                                        stroke-dasharray="0" cx="89.6"
                                                                        cy="32.55" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events wjpoyatcp"
                                                                        rel="3" j="3" index="0"
                                                                        default-marker-size="3.5"></path>
                                                                </g>
                                                                <g class=""
                                                                    clip-path="url(#gridRectMarkerMaskpoyy0y6fg)">
                                                                    <path d="M 119.8, 55.8
               m -3.5, 0
               a 3.5,3.5 0 1,0 7,0
               a 3.5,3.5 0 1,0 -7,0" fill="var(--bs-info)" fill-opacity="1" stroke="transparent" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="3.2"
                                                                        stroke-dasharray="0" cx="119.8"
                                                                        cy="55.8" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events w9iyesg2s"
                                                                        rel="4" j="4" index="0"
                                                                        default-marker-size="3.5"></path>
                                                                </g>
                                                                <g class=""
                                                                    clip-path="url(#gridRectMarkerMaskpoyy0y6fg)">
                                                                    <path d="M 150, 9.299999999999997
               m -4.5, 0
               a 4.5,4.5 0 1,0 9,0
               a 4.5,4.5 0 1,0 -9,0" fill="var(--bs-paper-bg)" fill-opacity="1" stroke="var(--bs-info)"
                                                                        stroke-opacity="0.9" stroke-linecap="butt"
                                                                        stroke-width="3.2" stroke-dasharray="0"
                                                                        cx="150" cy="9.299999999999997"
                                                                        shape="circle"
                                                                        class="apexcharts-marker no-pointer-events w7wa8jgch"
                                                                        rel="5" j="5" index="0"
                                                                        default-marker-size="4.5"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g class="apexcharts-datalabels" data:realIndex="0"></g>
                                                    </g>
                                                    <line x1="0" y1="0" x2="151" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line x1="0" y1="0" x2="151" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">
                                                    </line>
                                                    <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                                        <g class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                                        </g>
                                                    </g>
                                                    <g class="apexcharts-yaxis-annotations"></g>
                                                    <g class="apexcharts-xaxis-annotations"></g>
                                                    <g class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect width="0" height="0" x="0" y="0" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect">
                                                </rect>
                                                <rect width="0" height="0" x="0" y="0" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fefefe"
                                                    class="apexcharts-selection-rect"></rect>
                                            </svg></div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                                        <h4 class="mb-0">624k</h4>
                                        <small class="text-success">+8.24%</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Profit last month -->

                        <!-- Expenses -->
                        <div class="col-xl-6 col-sm-6">
                            <div class="card h-100">
                                <div class="card-header pb-2">
                                    <h5 class="card-title mb-1">82.5k</h5>
                                    <p class="card-subtitle">Expenses</p>
                                </div>
                                <div class="card-body">
                                    <div id="expensesChart" style="min-height: 89px;">
                                        <div id="apexchartsboulvvfm"
                                            class="apexcharts-canvas apexchartsboulvvfm apexcharts-theme-"
                                            style="width: 164px; height: 89px;"><svg xmlns="http://www.w3.org/2000/svg"
                                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)" width="164" height="89">
                                                <foreignObject x="0" y="0" width="164" height="89">
                                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml">
                                                    </div>
                                                    <style type="text/css">
                                                        .apexcharts-flip-y {
                                                            transform: scaleY(-1) translateY(-100%);
                                                            transform-origin: top;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-flip-x {
                                                            transform: scaleX(-1);
                                                            transform-origin: center;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }

                                                        .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                            flex-direction: column;
                                                        }

                                                        .apexcharts-legend-group {
                                                            display: flex;
                                                        }

                                                        .apexcharts-legend-group-vertical {
                                                            flex-direction: column-reverse;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom,
                                                        .apexcharts-legend.apx-legend-position-top {
                                                            flex-wrap: wrap
                                                        }

                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            justify-content: flex-start;
                                                            align-items: flex-start;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                            align-items: flex-end;
                                                        }

                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }

                                                        .apexcharts-legend-text *,
                                                        .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }

                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                            cursor: pointer;
                                                            margin-right: 1px;
                                                        }

                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }

                                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }

                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }
                                                    </style>
                                                </foreignObject>
                                                <g class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 1)">
                                                    <defs>
                                                        <clipPath id="gridRectMaskboulvvfm">
                                                            <rect width="164" height="164" x="0" y="0"
                                                                rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectBarMaskboulvvfm">
                                                            <rect width="170" height="170" x="-3" y="-3"
                                                                rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMaskboulvvfm">
                                                            <rect width="164" height="164" x="0" y="0"
                                                                rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskboulvvfm"></clipPath>
                                                        <clipPath id="nonForecastMaskboulvvfm"></clipPath>
                                                    </defs>
                                                    <g class="apexcharts-radialbar">
                                                        <g>
                                                            <g class="apexcharts-tracks">
                                                                <g class="apexcharts-radialbar-track apexcharts-track"
                                                                    rel="1">
                                                                    <path
                                                                        d="M 20.5 81.99999999999999 A 61.5 61.5 0 0 1 143.5 82 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="var(--bs-border-color)" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="4.05"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area"
                                                                        id="apexcharts-radialbarTrack-0"
                                                                        data:pathOrig="M 20.5 81.99999999999999 A 61.5 61.5 0 0 1 143.5 82 ">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g class="apexcharts-series apexcharts-radial-series"
                                                                    seriesName="Progress" rel="1"
                                                                    data:realIndex="0">
                                                                    <path
                                                                        d="M 20.5 81.99999999999999 A 61.5 61.5 0 0 1 129.11173325181716 42.468562004277835 "
                                                                        fill="none" fill-opacity="0.85"
                                                                        stroke="var(--bs-warning)" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="9"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                        data:angle="140" data:value="78" index="0"
                                                                        j="0"
                                                                        data:pathOrig="M 20.5 81.99999999999999 A 61.5 61.5 0 0 1 129.11173325181716 42.468562004277835 ">
                                                                    </path>
                                                                </g>
                                                                <circle r="54.475" cx="82" cy="82"
                                                                    class="apexcharts-radialbar-hollow"
                                                                    fill="transparent"></circle>
                                                                <g class="apexcharts-datalabels-group"
                                                                    transform="translate(0, 0) scale(1)"
                                                                    style="opacity: 1;"><text x="82" y="77"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="24px"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        font-weight="500" fill="var(--bs-heading-color)"
                                                                        class="apexcharts-text apexcharts-datalabel-value"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">78%</text>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line x1="0" y1="0" x2="164" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line x1="0" y1="0" x2="164" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">
                                                    </line>
                                                </g>
                                                <g class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"></g>
                                            </svg></div>
                                    </div>
                                    <div class="mt-3 text-center">
                                        <small class="text-body-secondary mt-3">$21k Expenses more than last month</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Expenses -->

                        <!-- Generated Leads -->
                        <div class="col-xl-12">
                            <div class="card h-100">
                                <div class="card-body d-flex justify-content-between">
                                    <div class="d-flex flex-column">
                                        <div class="card-title mb-auto">
                                            <h5 class="mb-0 text-nowrap">Generated Leads</h5>
                                            <p class="mb-0">Monthly Report</p>
                                        </div>
                                        <div class="chart-statistics">
                                            <h3 class="card-title mb-0">4,350</h3>
                                            <p class="text-success text-nowrap mb-0"><i
                                                    class="icon-base ti tabler-chevron-up me-1"></i> 15.8%</p>
                                        </div>
                                    </div>
                                    <div id="generatedLeadsChart" style="min-height: 132px;">
                                        <div id="apexchartslczjnetd"
                                            class="apexcharts-canvas apexchartslczjnetd apexcharts-theme-"
                                            style="width: 120px; height: 132px;"><svg xmlns="http://www.w3.org/2000/svg"
                                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)" width="120" height="132">
                                                <foreignObject x="0" y="0" width="120" height="132">
                                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml">
                                                    </div>
                                                    <style type="text/css">
                                                        .apexcharts-flip-y {
                                                            transform: scaleY(-1) translateY(-100%);
                                                            transform-origin: top;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-flip-x {
                                                            transform: scaleX(-1);
                                                            transform-origin: center;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }

                                                        .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                            flex-direction: column;
                                                        }

                                                        .apexcharts-legend-group {
                                                            display: flex;
                                                        }

                                                        .apexcharts-legend-group-vertical {
                                                            flex-direction: column-reverse;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom,
                                                        .apexcharts-legend.apx-legend-position-top {
                                                            flex-wrap: wrap
                                                        }

                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            justify-content: flex-start;
                                                            align-items: flex-start;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                            align-items: flex-end;
                                                        }

                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }

                                                        .apexcharts-legend-text *,
                                                        .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }

                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                            cursor: pointer;
                                                            margin-right: 1px;
                                                        }

                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }

                                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }

                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }
                                                    </style>
                                                </foreignObject>
                                                <g class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(-20, 15)">
                                                    <defs>
                                                        <clipPath id="gridRectMasklczjnetd">
                                                            <rect width="160" height="110" x="0" y="0"
                                                                rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectBarMasklczjnetd">
                                                            <rect width="164" height="114" x="-2" y="-2"
                                                                rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMasklczjnetd">
                                                            <rect width="160" height="110" x="0" y="0"
                                                                rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMasklczjnetd"></clipPath>
                                                        <clipPath id="nonForecastMasklczjnetd"></clipPath>
                                                    </defs>
                                                    <g class="apexcharts-pie">
                                                        <g transform="translate(0, 0) scale(1)">
                                                            <circle r="34.7609756097561" cx="80" cy="55"
                                                                fill="transparent"></circle>
                                                            <g class="apexcharts-slices">
                                                                <g class="apexcharts-series apexcharts-pie-series"
                                                                    seriesName="Electronic" rel="1"
                                                                    data:realIndex="0">
                                                                    <path
                                                                        d="M 80 5.341463414634141 A 49.65853658536586 49.65853658536586 0 0 1 129.64207316729613 53.72139628776691 L 114.74945121710729 54.104977401436834 A 34.7609756097561 34.7609756097561 0 0 0 80 20.239024390243898 L 80 5.341463414634141 z "
                                                                        fill="rgba(36,179,100,1)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                        index="0" j="0"
                                                                        data:angle="88.52459016393442" data:startAngle="0"
                                                                        data:strokeWidth="0" data:value="45"
                                                                        data:pathOrig="M 80 5.341463414634141 A 49.65853658536586 49.65853658536586 0 0 1 129.64207316729613 53.72139628776691 L 114.74945121710729 54.104977401436834 A 34.7609756097561 34.7609756097561 0 0 0 80 20.239024390243898 L 80 5.341463414634141 z ">
                                                                    </path>
                                                                </g>
                                                                <g class="apexcharts-series apexcharts-pie-series"
                                                                    seriesName="Sports" rel="2"
                                                                    data:realIndex="1">
                                                                    <path
                                                                        d="M 129.64207316729613 53.72139628776691 A 49.65853658536586 49.65853658536586 0 0 1 60.89809407308648 100.8376204199069 L 66.62866585116053 87.08633429393483 A 34.7609756097561 34.7609756097561 0 0 0 114.74945121710729 54.104977401436834 L 129.64207316729613 53.72139628776691 z "
                                                                        fill="rgba(83,210,140,1)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                        index="0" j="1"
                                                                        data:angle="114.09836065573771"
                                                                        data:startAngle="88.52459016393442"
                                                                        data:strokeWidth="0" data:value="58"
                                                                        data:pathOrig="M 129.64207316729613 53.72139628776691 A 49.65853658536586 49.65853658536586 0 0 1 60.89809407308648 100.8376204199069 L 66.62866585116053 87.08633429393483 A 34.7609756097561 34.7609756097561 0 0 0 114.74945121710729 54.104977401436834 L 129.64207316729613 53.72139628776691 z ">
                                                                    </path>
                                                                </g>
                                                                <g class="apexcharts-series apexcharts-pie-series"
                                                                    seriesName="Decor" rel="3" data:realIndex="2">
                                                                    <path
                                                                        d="M 60.89809407308648 100.8376204199069 A 49.65853658536586 49.65853658536586 0 0 1 30.869213831510372 62.220533655227136 L 45.60844968205726 60.054373558658995 A 34.7609756097561 34.7609756097561 0 0 0 66.62866585116053 87.08633429393483 L 60.89809407308648 100.8376204199069 z "
                                                                        fill="rgba(126,221,169,1)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                        index="0" j="2"
                                                                        data:angle="59.016393442622956"
                                                                        data:startAngle="202.62295081967213"
                                                                        data:strokeWidth="0" data:value="30"
                                                                        data:pathOrig="M 60.89809407308648 100.8376204199069 A 49.65853658536586 49.65853658536586 0 0 1 30.869213831510372 62.220533655227136 L 45.60844968205726 60.054373558658995 A 34.7609756097561 34.7609756097561 0 0 0 66.62866585116053 87.08633429393483 L 60.89809407308648 100.8376204199069 z ">
                                                                    </path>
                                                                </g>
                                                                <g class="apexcharts-series apexcharts-pie-series"
                                                                    seriesName="Fashion" rel="4"
                                                                    data:realIndex="3">
                                                                    <path
                                                                        d="M 30.869213831510372 62.220533655227136 A 49.65853658536586 49.65853658536586 0 0 1 79.99133295039263 5.341464170976899 L 79.99393306527485 20.23902491968383 A 34.7609756097561 34.7609756097561 0 0 0 45.60844968205726 60.054373558658995 L 30.869213831510372 62.220533655227136 z "
                                                                        fill="rgba(169,233,197,1)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                                        index="0" j="3"
                                                                        data:angle="98.36065573770492"
                                                                        data:startAngle="261.6393442622951"
                                                                        data:strokeWidth="0" data:value="50"
                                                                        data:pathOrig="M 30.869213831510372 62.220533655227136 A 49.65853658536586 49.65853658536586 0 0 1 79.99133295039263 5.341464170976899 L 79.99393306527485 20.23902491968383 A 34.7609756097561 34.7609756097561 0 0 0 45.60844968205726 60.054373558658995 L 30.869213831510372 62.220533655227136 z ">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g class="apexcharts-datalabels-group"
                                                            transform="translate(0, 0) scale(1)"><text x="80" y="75"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size=".8125rem" font-family="fontFamily"
                                                                font-weight="400" fill="var(--bs-success)"
                                                                class="apexcharts-text apexcharts-datalabel-label"
                                                                style="font-family: fontFamily;">Total</text><text x="80"
                                                                y="56" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="1.5rem" font-family="fontFamily"
                                                                font-weight="500" fill="var(--bs-heading-color)"
                                                                class="apexcharts-text apexcharts-datalabel-value"
                                                                style="font-family: fontFamily;">184</text></g>
                                                    </g>
                                                    <line x1="0" y1="0" x2="160" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line x1="0" y1="0" x2="160" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">
                                                    </line>
                                                </g>
                                                <g class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"></g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-false">
                                                <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0"
                                                    style="order: 1;"><span class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(36, 179, 100);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-1"
                                                    style="order: 2;"><span class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(83, 210, 140);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-2"
                                                    style="order: 3;"><span class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(126, 221, 169);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-3"
                                                    style="order: 4;"><span class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(169, 233, 197);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Generated Leads -->
                    </div>
                </div>

                <!-- Revenue Report -->
                <div class="col-xxl-8">
                    <div class="card h-100">
                        <div class="card-body p-0">
                            <div class="row row-bordered g-0">
                                <div class="col-md-8 position-relative p-6">
                                    <div class="card-header d-inline-block p-0 text-wrap position-absolute">
                                        <h5 class="m-0 card-title">Revenue Report</h5>
                                    </div>
                                    <div id="totalRevenueChart" class="mt-n1" style="min-height: 413px;">
                                        <div id="apexcharts185w5ow4k"
                                            class="apexcharts-canvas apexcharts185w5ow4k apexcharts-theme-"
                                            style="width: 565px; height: 413px;"><svg xmlns="http://www.w3.org/2000/svg"
                                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)" width="565" height="413">
                                                <foreignObject x="0" y="0" width="565" height="413">
                                                    <div class="apexcharts-legend apexcharts-align-right apx-legend-position-top"
                                                        xmlns="http://www.w3.org/1999/xhtml"
                                                        style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 206.5px;">
                                                        <div class="apexcharts-legend-series" rel="1"
                                                            seriesname="Earning" data:collapsed="false"
                                                            style="margin: 2px 10px;"><span
                                                                class="apexcharts-legend-marker" rel="1"
                                                                data:collapsed="false"
                                                                style="height: 12px; width: 12px; left: 0px; top: 0px;"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="100%" height="100%">
                                                                    <path d="M 0, 0
               m -6, 0
               a 6,6 0 1,0 12,0
               a 6,6 0 1,0 -12,0" fill="var(--bs-primary)" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="round" stroke-width="0"
                                                                        stroke-dasharray="0" cx="0"
                                                                        cy="0" shape="circle"
                                                                        class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                        style="transform: translate(50%, 50%);"></path>
                                                                </svg></span><span class="apexcharts-legend-text"
                                                                rel="1" i="0" data:default-text="Earning"
                                                                data:collapsed="false"
                                                                style="color: var(--bs-heading-color); font-size: 13px; font-weight: 400; font-family: var(--bs-font-family-base);">Earning</span>
                                                        </div>
                                                        <div class="apexcharts-legend-series" rel="2"
                                                            seriesname="Expense" data:collapsed="false"
                                                            style="margin: 2px 10px;"><span
                                                                class="apexcharts-legend-marker" rel="2"
                                                                data:collapsed="false"
                                                                style="height: 12px; width: 12px; left: 0px; top: 0px;"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="100%" height="100%">
                                                                    <path d="M 0, 0
               m -6, 0
               a 6,6 0 1,0 12,0
               a 6,6 0 1,0 -12,0" fill="var(--bs-warning)" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="round" stroke-width="0"
                                                                        stroke-dasharray="0" cx="0"
                                                                        cy="0" shape="circle"
                                                                        class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                        style="transform: translate(50%, 50%);"></path>
                                                                </svg></span><span class="apexcharts-legend-text"
                                                                rel="2" i="1" data:default-text="Expense"
                                                                data:collapsed="false"
                                                                style="color: var(--bs-heading-color); font-size: 13px; font-weight: 400; font-family: var(--bs-font-family-base);">Expense</span>
                                                        </div>
                                                    </div>
                                                    <style type="text/css">
                                                        .apexcharts-flip-y {
                                                            transform: scaleY(-1) translateY(-100%);
                                                            transform-origin: top;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-flip-x {
                                                            transform: scaleX(-1);
                                                            transform-origin: center;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }

                                                        .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                            flex-direction: column;
                                                        }

                                                        .apexcharts-legend-group {
                                                            display: flex;
                                                        }

                                                        .apexcharts-legend-group-vertical {
                                                            flex-direction: column-reverse;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom,
                                                        .apexcharts-legend.apx-legend-position-top {
                                                            flex-wrap: wrap
                                                        }

                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            justify-content: flex-start;
                                                            align-items: flex-start;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                            align-items: flex-end;
                                                        }

                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }

                                                        .apexcharts-legend-text *,
                                                        .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }

                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                            cursor: pointer;
                                                            margin-right: 1px;
                                                        }

                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }

                                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }

                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }
                                                    </style>
                                                </foreignObject>
                                                <g class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"></g>
                                                <g class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"></g>
                                                <g class="apexcharts-yaxis" rel="0"
                                                    transform="translate(6.086034774780273, 0)">
                                                    <g class="apexcharts-yaxis-texts-g"><text x="20" y="73.33333333333333"
                                                            text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                            font-family="var(--bs-font-family-base)" font-weight="400"
                                                            fill="var(--bs-secondary-color)"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: var(--bs-font-family-base);">
                                                            <tspan>300</tspan>
                                                            <title>300</title>
                                                        </text><text x="20" y="136.07349314816793" text-anchor="end"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-family="var(--bs-font-family-base)" font-weight="400"
                                                            fill="var(--bs-secondary-color)"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: var(--bs-font-family-base);">
                                                            <tspan>200</tspan>
                                                            <title>200</title>
                                                        </text><text x="20" y="198.81365296300254" text-anchor="end"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-family="var(--bs-font-family-base)" font-weight="400"
                                                            fill="var(--bs-secondary-color)"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: var(--bs-font-family-base);">
                                                            <tspan>100</tspan>
                                                            <title>100</title>
                                                        </text><text x="20" y="261.55381277783715" text-anchor="end"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-family="var(--bs-font-family-base)" font-weight="400"
                                                            fill="var(--bs-secondary-color)"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: var(--bs-font-family-base);">
                                                            <tspan>0</tspan>
                                                            <title>0</title>
                                                        </text><text x="20" y="324.29397259267176" text-anchor="end"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-family="var(--bs-font-family-base)" font-weight="400"
                                                            fill="var(--bs-secondary-color)"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: var(--bs-font-family-base);">
                                                            <tspan>-100</tspan>
                                                            <title>-100</title>
                                                        </text><text x="20" y="387.0341324075064" text-anchor="end"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-family="var(--bs-font-family-base)" font-weight="400"
                                                            fill="var(--bs-secondary-color)"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: var(--bs-font-family-base);">
                                                            <tspan>-200</tspan>
                                                            <title>-200</title>
                                                        </text></g>
                                                </g>
                                                <g class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(52.08603477478027, 69)">
                                                    <defs>
                                                        <linearGradient x1="0" y1="0" x2="0"
                                                            y2="1" id="SvgjsLinearGradient1006">
                                                            <stop stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)"
                                                                offset="0"></stop>
                                                            <stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                                                offset="1"></stop>
                                                            <stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                                                offset="1"></stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMask185w5ow4k">
                                                            <rect width="500.34521484375" height="313.700799074173" x="0"
                                                                y="0" rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectBarMask185w5ow4k">
                                                            <rect width="510.34521484375" height="323.700799074173" x="-5"
                                                                y="-5" rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask185w5ow4k">
                                                            <rect width="500.34521484375" height="313.700799074173" x="0"
                                                                y="0" rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask185w5ow4k"></clipPath>
                                                        <clipPath id="nonForecastMask185w5ow4k"></clipPath>
                                                    </defs>
                                                    <rect width="0" height="313.700799074173" x="0" y="0"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="#b6b6b6" stroke-dasharray="3"
                                                        fill="url(#SvgjsLinearGradient1006)"
                                                        class="apexcharts-xcrosshairs" y2="313.700799074173"
                                                        filter="none" fill-opacity="0.9"></rect>
                                                    <g class="apexcharts-grid">
                                                        <g class="apexcharts-gridlines-horizontal" style="display: none;">
                                                            <line x1="0" y1="0" x2="500.34521484375"
                                                                y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line x1="0" y1="62.7401598148346"
                                                                x2="500.34521484375" y2="62.7401598148346"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line x1="0" y1="125.4803196296692"
                                                                x2="500.34521484375" y2="125.4803196296692"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line x1="0" y1="188.22047944450378"
                                                                x2="500.34521484375" y2="188.22047944450378"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line x1="0" y1="250.9606392593384"
                                                                x2="500.34521484375" y2="250.9606392593384"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line x1="0" y1="313.700799074173"
                                                                x2="500.34521484375" y2="313.700799074173"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g class="apexcharts-gridlines-vertical" style="display: none;">
                                                        </g>
                                                        <line x1="0" y1="313.700799074173" x2="500.34521484375"
                                                            y2="313.700799074173" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line x1="0" y1="1" x2="0"
                                                            y2="313.700799074173" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g class="apexcharts-grid-borders" style="display: none;"></g>
                                                    <g class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g class="apexcharts-series" seriesName="Earning"
                                                            rel="1" data:realIndex="0">
                                                            <path
                                                                d="M 18.84426513671875 178.2214794445038 L 18.84426513671875 28.82304794445039 C 18.84426513671875 25.32304794445039 22.34426513671875 21.82304794445039 25.84426513671875 21.82304794445039 L 29.74964762369791 21.82304794445039 C 33.24964762369791 21.82304794445039 36.74964762369791 25.32304794445039 36.74964762369791 28.82304794445039 L 36.74964762369791 178.2214794445038 C 36.74964762369791 181.7214794445038 33.24964762369791 185.2214794445038 29.74964762369791 185.2214794445038 L 25.84426513671875 185.2214794445038 C 22.34426513671875 185.2214794445038 18.84426513671875 181.7214794445038 18.84426513671875 178.2214794445038 Z "
                                                                fill="var(--bs-primary)" fill-opacity="1"
                                                                stroke="var(--bs-paper-bg)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="6"
                                                                stroke-dasharray="0" class="apexcharts-bar-area "
                                                                index="0"
                                                                clip-path="url(#gridRectBarMask185w5ow4k)"
                                                                pathTo="M 18.84426513671875 178.2214794445038 L 18.84426513671875 28.82304794445039 C 18.84426513671875 25.32304794445039 22.34426513671875 21.82304794445039 25.84426513671875 21.82304794445039 L 29.74964762369791 21.82304794445039 C 33.24964762369791 21.82304794445039 36.74964762369791 25.32304794445039 36.74964762369791 28.82304794445039 L 36.74964762369791 178.2214794445038 C 36.74964762369791 181.7214794445038 33.24964762369791 185.2214794445038 29.74964762369791 185.2214794445038 L 25.84426513671875 185.2214794445038 C 22.34426513671875 185.2214794445038 18.84426513671875 181.7214794445038 18.84426513671875 178.2214794445038 Z "
                                                                pathFrom="M 18.84426513671875 185.2214794445038 L 18.84426513671875 185.2214794445038 L 36.74964762369791 185.2214794445038 L 36.74964762369791 185.2214794445038 L 36.74964762369791 185.2214794445038 L 36.74964762369791 185.2214794445038 L 36.74964762369791 185.2214794445038 L 18.84426513671875 185.2214794445038 Z"
                                                                cy="18.82204794445039" cx="68.43817789713542" j="0"
                                                                val="270" barHeight="169.39843150005342"
                                                                barWidth="23.905382486979164"></path>
                                                            <path
                                                                d="M 74.43817789713542 178.2214794445038 L 74.43817789713542 66.46714383335114 C 74.43817789713542 62.967143833351145 77.93817789713542 59.46714383335114 81.43817789713542 59.46714383335114 L 85.34356038411458 59.46714383335114 C 88.84356038411458 59.46714383335114 92.34356038411458 62.967143833351145 92.34356038411458 66.46714383335114 L 92.34356038411458 178.2214794445038 C 92.34356038411458 181.7214794445038 88.84356038411458 185.2214794445038 85.34356038411458 185.2214794445038 L 81.43817789713542 185.2214794445038 C 77.93817789713542 185.2214794445038 74.43817789713542 181.7214794445038 74.43817789713542 178.2214794445038 Z "
                                                                fill="var(--bs-primary)" fill-opacity="1"
                                                                stroke="var(--bs-paper-bg)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="6"
                                                                stroke-dasharray="0" class="apexcharts-bar-area "
                                                                index="0"
                                                                clip-path="url(#gridRectBarMask185w5ow4k)"
                                                                pathTo="M 74.43817789713542 178.2214794445038 L 74.43817789713542 66.46714383335114 C 74.43817789713542 62.967143833351145 77.93817789713542 59.46714383335114 81.43817789713542 59.46714383335114 L 85.34356038411458 59.46714383335114 C 88.84356038411458 59.46714383335114 92.34356038411458 62.967143833351145 92.34356038411458 66.46714383335114 L 92.34356038411458 178.2214794445038 C 92.34356038411458 181.7214794445038 88.84356038411458 185.2214794445038 85.34356038411458 185.2214794445038 L 81.43817789713542 185.2214794445038 C 77.93817789713542 185.2214794445038 74.43817789713542 181.7214794445038 74.43817789713542 178.2214794445038 Z "
                                                                pathFrom="M 74.43817789713542 185.2214794445038 L 74.43817789713542 185.2214794445038 L 92.34356038411458 185.2214794445038 L 92.34356038411458 185.2214794445038 L 92.34356038411458 185.2214794445038 L 92.34356038411458 185.2214794445038 L 92.34356038411458 185.2214794445038 L 74.43817789713542 185.2214794445038 Z"
                                                                cy="56.46614383335114" cx="124.03209065755209" j="1"
                                                                val="210" barHeight="131.75433561115267"
                                                                barWidth="23.905382486979164"></path>
                                                            <path
                                                                d="M 130.0320906575521 178.2214794445038 L 130.0320906575521 85.28919177780153 C 130.0320906575521 81.78919177780153 133.5320906575521 78.28919177780153 137.0320906575521 78.28919177780153 L 140.93747314453125 78.28919177780153 C 144.43747314453125 78.28919177780153 147.93747314453125 81.78919177780153 147.93747314453125 85.28919177780153 L 147.93747314453125 178.2214794445038 C 147.93747314453125 181.7214794445038 144.43747314453125 185.2214794445038 140.93747314453125 185.2214794445038 L 137.0320906575521 185.2214794445038 C 133.5320906575521 185.2214794445038 130.0320906575521 181.7214794445038 130.0320906575521 178.2214794445038 Z "
                                                                fill="var(--bs-primary)" fill-opacity="1"
                                                                stroke="var(--bs-paper-bg)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="6"
                                                                stroke-dasharray="0" class="apexcharts-bar-area "
                                                                index="0"
                                                                clip-path="url(#gridRectBarMask185w5ow4k)"
                                                                pathTo="M 130.0320906575521 178.2214794445038 L 130.0320906575521 85.28919177780153 C 130.0320906575521 81.78919177780153 133.5320906575521 78.28919177780153 137.0320906575521 78.28919177780153 L 140.93747314453125 78.28919177780153 C 144.43747314453125 78.28919177780153 147.93747314453125 81.78919177780153 147.93747314453125 85.28919177780153 L 147.93747314453125 178.2214794445038 C 147.93747314453125 181.7214794445038 144.43747314453125 185.2214794445038 140.93747314453125 185.2214794445038 L 137.0320906575521 185.2214794445038 C 133.5320906575521 185.2214794445038 130.0320906575521 181.7214794445038 130.0320906575521 178.2214794445038 Z "
                                                                pathFrom="M 130.0320906575521 185.2214794445038 L 130.0320906575521 185.2214794445038 L 147.93747314453125 185.2214794445038 L 147.93747314453125 185.2214794445038 L 147.93747314453125 185.2214794445038 L 147.93747314453125 185.2214794445038 L 147.93747314453125 185.2214794445038 L 130.0320906575521 185.2214794445038 Z"
                                                                cy="75.28819177780153" cx="179.62600341796875" j="2"
                                                                val="180" barHeight="112.93228766670228"
                                                                barWidth="23.905382486979164"></path>
                                                            <path
                                                                d="M 185.62600341796875 178.2214794445038 L 185.62600341796875 72.74115981483462 C 185.62600341796875 69.24115981483462 189.12600341796875 65.74115981483462 192.62600341796875 65.74115981483462 L 196.5313859049479 65.74115981483462 C 200.0313859049479 65.74115981483462 203.5313859049479 69.24115981483462 203.5313859049479 72.74115981483462 L 203.5313859049479 178.2214794445038 C 203.5313859049479 181.7214794445038 200.0313859049479 185.2214794445038 196.5313859049479 185.2214794445038 L 192.62600341796875 185.2214794445038 C 189.12600341796875 185.2214794445038 185.62600341796875 181.7214794445038 185.62600341796875 178.2214794445038 Z "
                                                                fill="var(--bs-primary)" fill-opacity="1"
                                                                stroke="var(--bs-paper-bg)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="6"
                                                                stroke-dasharray="0" class="apexcharts-bar-area "
                                                                index="0"
                                                                clip-path="url(#gridRectBarMask185w5ow4k)"
                                                                pathTo="M 185.62600341796875 178.2214794445038 L 185.62600341796875 72.74115981483462 C 185.62600341796875 69.24115981483462 189.12600341796875 65.74115981483462 192.62600341796875 65.74115981483462 L 196.5313859049479 65.74115981483462 C 200.0313859049479 65.74115981483462 203.5313859049479 69.24115981483462 203.5313859049479 72.74115981483462 L 203.5313859049479 178.2214794445038 C 203.5313859049479 181.7214794445038 200.0313859049479 185.2214794445038 196.5313859049479 185.2214794445038 L 192.62600341796875 185.2214794445038 C 189.12600341796875 185.2214794445038 185.62600341796875 181.7214794445038 185.62600341796875 178.2214794445038 Z "
                                                                pathFrom="M 185.62600341796875 185.2214794445038 L 185.62600341796875 185.2214794445038 L 203.5313859049479 185.2214794445038 L 203.5313859049479 185.2214794445038 L 203.5313859049479 185.2214794445038 L 203.5313859049479 185.2214794445038 L 203.5313859049479 185.2214794445038 L 185.62600341796875 185.2214794445038 Z"
                                                                cy="62.74015981483461" cx="235.2199161783854" j="3"
                                                                val="200" barHeight="125.4803196296692"
                                                                barWidth="23.905382486979164"></path>
                                                            <path
                                                                d="M 241.2199161783854 178.2214794445038 L 241.2199161783854 41.371079907417304 C 241.2199161783854 37.871079907417304 244.7199161783854 34.371079907417304 248.2199161783854 34.371079907417304 L 252.12529866536454 34.371079907417304 C 255.62529866536454 34.371079907417304 259.12529866536454 37.871079907417304 259.12529866536454 41.371079907417304 L 259.12529866536454 178.2214794445038 C 259.12529866536454 181.7214794445038 255.62529866536454 185.2214794445038 252.12529866536454 185.2214794445038 L 248.2199161783854 185.2214794445038 C 244.7199161783854 185.2214794445038 241.2199161783854 181.7214794445038 241.2199161783854 178.2214794445038 Z "
                                                                fill="var(--bs-primary)" fill-opacity="1"
                                                                stroke="var(--bs-paper-bg)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="6"
                                                                stroke-dasharray="0" class="apexcharts-bar-area "
                                                                index="0"
                                                                clip-path="url(#gridRectBarMask185w5ow4k)"
                                                                pathTo="M 241.2199161783854 178.2214794445038 L 241.2199161783854 41.371079907417304 C 241.2199161783854 37.871079907417304 244.7199161783854 34.371079907417304 248.2199161783854 34.371079907417304 L 252.12529866536454 34.371079907417304 C 255.62529866536454 34.371079907417304 259.12529866536454 37.871079907417304 259.12529866536454 41.371079907417304 L 259.12529866536454 178.2214794445038 C 259.12529866536454 181.7214794445038 255.62529866536454 185.2214794445038 252.12529866536454 185.2214794445038 L 248.2199161783854 185.2214794445038 C 244.7199161783854 185.2214794445038 241.2199161783854 181.7214794445038 241.2199161783854 178.2214794445038 Z "
                                                                pathFrom="M 241.2199161783854 185.2214794445038 L 241.2199161783854 185.2214794445038 L 259.12529866536454 185.2214794445038 L 259.12529866536454 185.2214794445038 L 259.12529866536454 185.2214794445038 L 259.12529866536454 185.2214794445038 L 259.12529866536454 185.2214794445038 L 241.2199161783854 185.2214794445038 Z"
                                                                cy="31.370079907417306" cx="290.8138289388021" j="4"
                                                                val="250" barHeight="156.8503995370865"
                                                                barWidth="23.905382486979164"></path>
                                                            <path
                                                                d="M 296.8138289388021 178.2214794445038 L 296.8138289388021 22.549031962966914 C 296.8138289388021 19.049031962966914 300.3138289388021 15.549031962966916 303.8138289388021 15.549031962966916 L 307.7192114257813 15.549031962966916 C 311.2192114257813 15.549031962966916 314.7192114257813 19.049031962966914 314.7192114257813 22.549031962966914 L 314.7192114257813 178.2214794445038 C 314.7192114257813 181.7214794445038 311.2192114257813 185.2214794445038 307.7192114257813 185.2214794445038 L 303.8138289388021 185.2214794445038 C 300.3138289388021 185.2214794445038 296.8138289388021 181.7214794445038 296.8138289388021 178.2214794445038 Z "
                                                                fill="var(--bs-primary)" fill-opacity="1"
                                                                stroke="var(--bs-paper-bg)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="6"
                                                                stroke-dasharray="0" class="apexcharts-bar-area "
                                                                index="0"
                                                                clip-path="url(#gridRectBarMask185w5ow4k)"
                                                                pathTo="M 296.8138289388021 178.2214794445038 L 296.8138289388021 22.549031962966914 C 296.8138289388021 19.049031962966914 300.3138289388021 15.549031962966916 303.8138289388021 15.549031962966916 L 307.7192114257813 15.549031962966916 C 311.2192114257813 15.549031962966916 314.7192114257813 19.049031962966914 314.7192114257813 22.549031962966914 L 314.7192114257813 178.2214794445038 C 314.7192114257813 181.7214794445038 311.2192114257813 185.2214794445038 307.7192114257813 185.2214794445038 L 303.8138289388021 185.2214794445038 C 300.3138289388021 185.2214794445038 296.8138289388021 181.7214794445038 296.8138289388021 178.2214794445038 Z "
                                                                pathFrom="M 296.8138289388021 185.2214794445038 L 296.8138289388021 185.2214794445038 L 314.7192114257813 185.2214794445038 L 314.7192114257813 185.2214794445038 L 314.7192114257813 185.2214794445038 L 314.7192114257813 185.2214794445038 L 314.7192114257813 185.2214794445038 L 296.8138289388021 185.2214794445038 Z"
                                                                cy="12.548031962966917" cx="346.4077416992188" j="5"
                                                                val="280" barHeight="175.6724474815369"
                                                                barWidth="23.905382486979164"></path>
                                                            <path
                                                                d="M 352.4077416992188 178.2214794445038 L 352.4077416992188 41.371079907417304 C 352.4077416992188 37.871079907417304 355.9077416992188 34.371079907417304 359.4077416992188 34.371079907417304 L 363.3131241861979 34.371079907417304 C 366.8131241861979 34.371079907417304 370.3131241861979 37.871079907417304 370.3131241861979 41.371079907417304 L 370.3131241861979 178.2214794445038 C 370.3131241861979 181.7214794445038 366.8131241861979 185.2214794445038 363.3131241861979 185.2214794445038 L 359.4077416992188 185.2214794445038 C 355.9077416992188 185.2214794445038 352.4077416992188 181.7214794445038 352.4077416992188 178.2214794445038 Z "
                                                                fill="var(--bs-primary)" fill-opacity="1"
                                                                stroke="var(--bs-paper-bg)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="6"
                                                                stroke-dasharray="0" class="apexcharts-bar-area "
                                                                index="0"
                                                                clip-path="url(#gridRectBarMask185w5ow4k)"
                                                                pathTo="M 352.4077416992188 178.2214794445038 L 352.4077416992188 41.371079907417304 C 352.4077416992188 37.871079907417304 355.9077416992188 34.371079907417304 359.4077416992188 34.371079907417304 L 363.3131241861979 34.371079907417304 C 366.8131241861979 34.371079907417304 370.3131241861979 37.871079907417304 370.3131241861979 41.371079907417304 L 370.3131241861979 178.2214794445038 C 370.3131241861979 181.7214794445038 366.8131241861979 185.2214794445038 363.3131241861979 185.2214794445038 L 359.4077416992188 185.2214794445038 C 355.9077416992188 185.2214794445038 352.4077416992188 181.7214794445038 352.4077416992188 178.2214794445038 Z "
                                                                pathFrom="M 352.4077416992188 185.2214794445038 L 352.4077416992188 185.2214794445038 L 370.3131241861979 185.2214794445038 L 370.3131241861979 185.2214794445038 L 370.3131241861979 185.2214794445038 L 370.3131241861979 185.2214794445038 L 370.3131241861979 185.2214794445038 L 352.4077416992188 185.2214794445038 Z"
                                                                cy="31.370079907417306" cx="402.00165445963546" j="6"
                                                                val="250" barHeight="156.8503995370865"
                                                                barWidth="23.905382486979164"></path>
                                                            <path
                                                                d="M 408.00165445963546 178.2214794445038 L 408.00165445963546 28.82304794445039 C 408.00165445963546 25.32304794445039 411.50165445963546 21.82304794445039 415.00165445963546 21.82304794445039 L 418.90703694661465 21.82304794445039 C 422.40703694661465 21.82304794445039 425.90703694661465 25.32304794445039 425.90703694661465 28.82304794445039 L 425.90703694661465 178.2214794445038 C 425.90703694661465 181.7214794445038 422.40703694661465 185.2214794445038 418.90703694661465 185.2214794445038 L 415.00165445963546 185.2214794445038 C 411.50165445963546 185.2214794445038 408.00165445963546 181.7214794445038 408.00165445963546 178.2214794445038 Z "
                                                                fill="var(--bs-primary)" fill-opacity="1"
                                                                stroke="var(--bs-paper-bg)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="6"
                                                                stroke-dasharray="0" class="apexcharts-bar-area "
                                                                index="0"
                                                                clip-path="url(#gridRectBarMask185w5ow4k)"
                                                                pathTo="M 408.00165445963546 178.2214794445038 L 408.00165445963546 28.82304794445039 C 408.00165445963546 25.32304794445039 411.50165445963546 21.82304794445039 415.00165445963546 21.82304794445039 L 418.90703694661465 21.82304794445039 C 422.40703694661465 21.82304794445039 425.90703694661465 25.32304794445039 425.90703694661465 28.82304794445039 L 425.90703694661465 178.2214794445038 C 425.90703694661465 181.7214794445038 422.40703694661465 185.2214794445038 418.90703694661465 185.2214794445038 L 415.00165445963546 185.2214794445038 C 411.50165445963546 185.2214794445038 408.00165445963546 181.7214794445038 408.00165445963546 178.2214794445038 Z "
                                                                pathFrom="M 408.00165445963546 185.2214794445038 L 408.00165445963546 185.2214794445038 L 425.90703694661465 185.2214794445038 L 425.90703694661465 185.2214794445038 L 425.90703694661465 185.2214794445038 L 425.90703694661465 185.2214794445038 L 425.90703694661465 185.2214794445038 L 408.00165445963546 185.2214794445038 Z"
                                                                cy="18.82204794445039" cx="457.59556722005215" j="7"
                                                                val="270" barHeight="169.39843150005342"
                                                                barWidth="23.905382486979164"></path>
                                                            <path
                                                                d="M 463.59556722005215 178.2214794445038 L 463.59556722005215 104.11123972225191 C 463.59556722005215 100.61123972225191 467.09556722005215 97.11123972225191 470.59556722005215 97.11123972225191 L 474.5009497070313 97.11123972225191 C 478.0009497070313 97.11123972225191 481.5009497070313 100.61123972225191 481.5009497070313 104.11123972225191 L 481.5009497070313 178.2214794445038 C 481.5009497070313 181.7214794445038 478.0009497070313 185.2214794445038 474.5009497070313 185.2214794445038 L 470.59556722005215 185.2214794445038 C 467.09556722005215 185.2214794445038 463.59556722005215 181.7214794445038 463.59556722005215 178.2214794445038 Z "
                                                                fill="var(--bs-primary)" fill-opacity="1"
                                                                stroke="var(--bs-paper-bg)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="6"
                                                                stroke-dasharray="0" class="apexcharts-bar-area "
                                                                index="0"
                                                                clip-path="url(#gridRectBarMask185w5ow4k)"
                                                                pathTo="M 463.59556722005215 178.2214794445038 L 463.59556722005215 104.11123972225191 C 463.59556722005215 100.61123972225191 467.09556722005215 97.11123972225191 470.59556722005215 97.11123972225191 L 474.5009497070313 97.11123972225191 C 478.0009497070313 97.11123972225191 481.5009497070313 100.61123972225191 481.5009497070313 104.11123972225191 L 481.5009497070313 178.2214794445038 C 481.5009497070313 181.7214794445038 478.0009497070313 185.2214794445038 474.5009497070313 185.2214794445038 L 470.59556722005215 185.2214794445038 C 467.09556722005215 185.2214794445038 463.59556722005215 181.7214794445038 463.59556722005215 178.2214794445038 Z "
                                                                pathFrom="M 463.59556722005215 185.2214794445038 L 463.59556722005215 185.2214794445038 L 481.5009497070313 185.2214794445038 L 481.5009497070313 185.2214794445038 L 481.5009497070313 185.2214794445038 L 481.5009497070313 185.2214794445038 L 481.5009497070313 185.2214794445038 L 463.59556722005215 185.2214794445038 Z"
                                                                cy="94.1102397222519" cx="513.1894799804688" j="8"
                                                                val="150" barHeight="94.1102397222519"
                                                                barWidth="23.905382486979164"></path>
                                                            <g class="apexcharts-bar-goals-markers">
                                                                <g className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask185w5ow4k)"></g>
                                                                <g className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask185w5ow4k)"></g>
                                                                <g className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask185w5ow4k)"></g>
                                                                <g className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask185w5ow4k)"></g>
                                                                <g className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask185w5ow4k)"></g>
                                                                <g className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask185w5ow4k)"></g>
                                                                <g className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask185w5ow4k)"></g>
                                                                <g className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask185w5ow4k)"></g>
                                                                <g className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask185w5ow4k)"></g>
                                                            </g>
                                                        </g>
                                                        <g class="apexcharts-series" seriesName="Expense"
                                                            rel="2" data:realIndex="1">
                                                            <path
                                                                d="M 18.84426513671875 198.22247944450382 L 18.84426513671875 266.05870318527224 C 18.84426513671875 269.55870318527224 22.34426513671875 273.05870318527224 25.84426513671875 273.05870318527224 L 29.74964762369791 273.05870318527224 C 33.24964762369791 273.05870318527224 36.74964762369791 269.55870318527224 36.74964762369791 266.05870318527224 L 36.74964762369791 198.22247944450382 C 36.74964762369791 194.72247944450382 33.24964762369791 191.22247944450382 29.74964762369791 191.22247944450382 L 25.84426513671875 191.22247944450382 C 22.34426513671875 191.22247944450382 18.84426513671875 194.72247944450382 18.84426513671875 198.22247944450382 Z "
                                                                fill="var(--bs-warning)" fill-opacity="1"
                                                                stroke="var(--bs-paper-bg)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="6"
                                                                stroke-dasharray="0" class="apexcharts-bar-area "
                                                                index="1"
                                                                clip-path="url(#gridRectBarMask185w5ow4k)"
                                                                pathTo="M 18.84426513671875 198.22247944450382 L 18.84426513671875 266.05870318527224 C 18.84426513671875 269.55870318527224 22.34426513671875 273.05870318527224 25.84426513671875 273.05870318527224 L 29.74964762369791 273.05870318527224 C 33.24964762369791 273.05870318527224 36.74964762369791 269.55870318527224 36.74964762369791 266.05870318527224 L 36.74964762369791 198.22247944450382 C 36.74964762369791 194.72247944450382 33.24964762369791 191.22247944450382 29.74964762369791 191.22247944450382 L 25.84426513671875 191.22247944450382 C 22.34426513671875 191.22247944450382 18.84426513671875 194.72247944450382 18.84426513671875 198.22247944450382 Z "
                                                                pathFrom="M 18.84426513671875 191.22247944450382 L 18.84426513671875 191.22247944450382 L 36.74964762369791 191.22247944450382 L 36.74964762369791 191.22247944450382 L 36.74964762369791 191.22247944450382 L 36.74964762369791 191.22247944450382 L 36.74964762369791 191.22247944450382 L 18.84426513671875 191.22247944450382 Z"
                                                                cy="276.05770318527226" cx="68.43817789713542" j="0"
                                                                val="-140" barHeight="-87.83622374076845"
                                                                barWidth="23.905382486979164"></path>
                                                            <path
                                                                d="M 74.43817789713542 198.22247944450382 L 74.43817789713542 278.6067351482392 C 74.43817789713542 282.1067351482392 77.93817789713542 285.6067351482392 81.43817789713542 285.6067351482392 L 85.34356038411458 285.6067351482392 C 88.84356038411458 285.6067351482392 92.34356038411458 282.1067351482392 92.34356038411458 278.6067351482392 L 92.34356038411458 198.22247944450382 C 92.34356038411458 194.72247944450382 88.84356038411458 191.22247944450382 85.34356038411458 191.22247944450382 L 81.43817789713542 191.22247944450382 C 77.93817789713542 191.22247944450382 74.43817789713542 194.72247944450382 74.43817789713542 198.22247944450382 Z "
                                                                fill="var(--bs-warning)" fill-opacity="1"
                                                                stroke="var(--bs-paper-bg)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="6"
                                                                stroke-dasharray="0" class="apexcharts-bar-area "
                                                                index="1"
                                                                clip-path="url(#gridRectBarMask185w5ow4k)"
                                                                pathTo="M 74.43817789713542 198.22247944450382 L 74.43817789713542 278.6067351482392 C 74.43817789713542 282.1067351482392 77.93817789713542 285.6067351482392 81.43817789713542 285.6067351482392 L 85.34356038411458 285.6067351482392 C 88.84356038411458 285.6067351482392 92.34356038411458 282.1067351482392 92.34356038411458 278.6067351482392 L 92.34356038411458 198.22247944450382 C 92.34356038411458 194.72247944450382 88.84356038411458 191.22247944450382 85.34356038411458 191.22247944450382 L 81.43817789713542 191.22247944450382 C 77.93817789713542 191.22247944450382 74.43817789713542 194.72247944450382 74.43817789713542 198.22247944450382 Z "
                                                                pathFrom="M 74.43817789713542 191.22247944450382 L 74.43817789713542 191.22247944450382 L 92.34356038411458 191.22247944450382 L 92.34356038411458 191.22247944450382 L 92.34356038411458 191.22247944450382 L 92.34356038411458 191.22247944450382 L 92.34356038411458 191.22247944450382 L 74.43817789713542 191.22247944450382 Z"
                                                                cy="288.6057351482392" cx="124.03209065755209" j="1"
                                                                val="-160" barHeight="-100.38425570373536"
                                                                barWidth="23.905382486979164"></path>
                                                            <path
                                                                d="M 130.0320906575521 198.22247944450382 L 130.0320906575521 291.15476711120607 C 130.0320906575521 294.65476711120607 133.5320906575521 298.15476711120607 137.0320906575521 298.15476711120607 L 140.93747314453125 298.15476711120607 C 144.43747314453125 298.15476711120607 147.93747314453125 294.65476711120607 147.93747314453125 291.15476711120607 L 147.93747314453125 198.22247944450382 C 147.93747314453125 194.72247944450382 144.43747314453125 191.22247944450382 140.93747314453125 191.22247944450382 L 137.0320906575521 191.22247944450382 C 133.5320906575521 191.22247944450382 130.0320906575521 194.72247944450382 130.0320906575521 198.22247944450382 Z "
                                                                fill="var(--bs-warning)" fill-opacity="1"
                                                                stroke="var(--bs-paper-bg)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="6"
                                                                stroke-dasharray="0" class="apexcharts-bar-area "
                                                                index="1"
                                                                clip-path="url(#gridRectBarMask185w5ow4k)"
                                                                pathTo="M 130.0320906575521 198.22247944450382 L 130.0320906575521 291.15476711120607 C 130.0320906575521 294.65476711120607 133.5320906575521 298.15476711120607 137.0320906575521 298.15476711120607 L 140.93747314453125 298.15476711120607 C 144.43747314453125 298.15476711120607 147.93747314453125 294.65476711120607 147.93747314453125 291.15476711120607 L 147.93747314453125 198.22247944450382 C 147.93747314453125 194.72247944450382 144.43747314453125 191.22247944450382 140.93747314453125 191.22247944450382 L 137.0320906575521 191.22247944450382 C 133.5320906575521 191.22247944450382 130.0320906575521 194.72247944450382 130.0320906575521 198.22247944450382 Z "
                                                                pathFrom="M 130.0320906575521 191.22247944450382 L 130.0320906575521 191.22247944450382 L 147.93747314453125 191.22247944450382 L 147.93747314453125 191.22247944450382 L 147.93747314453125 191.22247944450382 L 147.93747314453125 191.22247944450382 L 147.93747314453125 191.22247944450382 L 130.0320906575521 191.22247944450382 Z"
                                                                cy="301.1537671112061" cx="179.62600341796875" j="2"
                                                                val="-180" barHeight="-112.93228766670228"
                                                                barWidth="23.905382486979164"></path>
                                                            <path
                                                                d="M 185.62600341796875 198.22247944450382 L 185.62600341796875 272.3327191667557 C 185.62600341796875 275.8327191667557 189.12600341796875 279.3327191667557 192.62600341796875 279.3327191667557 L 196.5313859049479 279.3327191667557 C 200.0313859049479 279.3327191667557 203.5313859049479 275.8327191667557 203.5313859049479 272.3327191667557 L 203.5313859049479 198.22247944450382 C 203.5313859049479 194.72247944450382 200.0313859049479 191.22247944450382 196.5313859049479 191.22247944450382 L 192.62600341796875 191.22247944450382 C 189.12600341796875 191.22247944450382 185.62600341796875 194.72247944450382 185.62600341796875 198.22247944450382 Z "
                                                                fill="var(--bs-warning)" fill-opacity="1"
                                                                stroke="var(--bs-paper-bg)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="6"
                                                                stroke-dasharray="0" class="apexcharts-bar-area "
                                                                index="1"
                                                                clip-path="url(#gridRectBarMask185w5ow4k)"
                                                                pathTo="M 185.62600341796875 198.22247944450382 L 185.62600341796875 272.3327191667557 C 185.62600341796875 275.8327191667557 189.12600341796875 279.3327191667557 192.62600341796875 279.3327191667557 L 196.5313859049479 279.3327191667557 C 200.0313859049479 279.3327191667557 203.5313859049479 275.8327191667557 203.5313859049479 272.3327191667557 L 203.5313859049479 198.22247944450382 C 203.5313859049479 194.72247944450382 200.0313859049479 191.22247944450382 196.5313859049479 191.22247944450382 L 192.62600341796875 191.22247944450382 C 189.12600341796875 191.22247944450382 185.62600341796875 194.72247944450382 185.62600341796875 198.22247944450382 Z "
                                                                pathFrom="M 185.62600341796875 191.22247944450382 L 185.62600341796875 191.22247944450382 L 203.5313859049479 191.22247944450382 L 203.5313859049479 191.22247944450382 L 203.5313859049479 191.22247944450382 L 203.5313859049479 191.22247944450382 L 203.5313859049479 191.22247944450382 L 185.62600341796875 191.22247944450382 Z"
                                                                cy="282.3317191667557" cx="235.2199161783854" j="3"
                                                                val="-150" barHeight="-94.1102397222519"
                                                                barWidth="23.905382486979164"></path>
                                                            <path
                                                                d="M 241.2199161783854 198.22247944450382 L 241.2199161783854 240.96263925933843 C 241.2199161783854 244.46263925933843 244.7199161783854 247.96263925933843 248.2199161783854 247.96263925933843 L 252.12529866536454 247.96263925933843 C 255.62529866536454 247.96263925933843 259.12529866536454 244.46263925933843 259.12529866536454 240.96263925933843 L 259.12529866536454 198.22247944450382 C 259.12529866536454 194.72247944450382 255.62529866536454 191.22247944450382 252.12529866536454 191.22247944450382 L 248.2199161783854 191.22247944450382 C 244.7199161783854 191.22247944450382 241.2199161783854 194.72247944450382 241.2199161783854 198.22247944450382 Z "
                                                                fill="var(--bs-warning)" fill-opacity="1"
                                                                stroke="var(--bs-paper-bg)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="6"
                                                                stroke-dasharray="0" class="apexcharts-bar-area "
                                                                index="1"
                                                                clip-path="url(#gridRectBarMask185w5ow4k)"
                                                                pathTo="M 241.2199161783854 198.22247944450382 L 241.2199161783854 240.96263925933843 C 241.2199161783854 244.46263925933843 244.7199161783854 247.96263925933843 248.2199161783854 247.96263925933843 L 252.12529866536454 247.96263925933843 C 255.62529866536454 247.96263925933843 259.12529866536454 244.46263925933843 259.12529866536454 240.96263925933843 L 259.12529866536454 198.22247944450382 C 259.12529866536454 194.72247944450382 255.62529866536454 191.22247944450382 252.12529866536454 191.22247944450382 L 248.2199161783854 191.22247944450382 C 244.7199161783854 191.22247944450382 241.2199161783854 194.72247944450382 241.2199161783854 198.22247944450382 Z "
                                                                pathFrom="M 241.2199161783854 191.22247944450382 L 241.2199161783854 191.22247944450382 L 259.12529866536454 191.22247944450382 L 259.12529866536454 191.22247944450382 L 259.12529866536454 191.22247944450382 L 259.12529866536454 191.22247944450382 L 259.12529866536454 191.22247944450382 L 241.2199161783854 191.22247944450382 Z"
                                                                cy="250.96163925933843" cx="290.8138289388021" j="4"
                                                                val="-100" barHeight="-62.7401598148346"
                                                                barWidth="23.905382486979164"></path>
                                                            <path
                                                                d="M 296.8138289388021 198.22247944450382 L 296.8138289388021 215.86657533340457 C 296.8138289388021 219.36657533340457 300.3138289388021 222.86657533340457 303.8138289388021 222.86657533340457 L 307.7192114257813 222.86657533340457 C 311.2192114257813 222.86657533340457 314.7192114257813 219.36657533340457 314.7192114257813 215.86657533340457 L 314.7192114257813 198.22247944450382 C 314.7192114257813 194.72247944450382 311.2192114257813 191.22247944450382 307.7192114257813 191.22247944450382 L 303.8138289388021 191.22247944450382 C 300.3138289388021 191.22247944450382 296.8138289388021 194.72247944450382 296.8138289388021 198.22247944450382 Z "
                                                                fill="var(--bs-warning)" fill-opacity="1"
                                                                stroke="var(--bs-paper-bg)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="6"
                                                                stroke-dasharray="0" class="apexcharts-bar-area "
                                                                index="1"
                                                                clip-path="url(#gridRectBarMask185w5ow4k)"
                                                                pathTo="M 296.8138289388021 198.22247944450382 L 296.8138289388021 215.86657533340457 C 296.8138289388021 219.36657533340457 300.3138289388021 222.86657533340457 303.8138289388021 222.86657533340457 L 307.7192114257813 222.86657533340457 C 311.2192114257813 222.86657533340457 314.7192114257813 219.36657533340457 314.7192114257813 215.86657533340457 L 314.7192114257813 198.22247944450382 C 314.7192114257813 194.72247944450382 311.2192114257813 191.22247944450382 307.7192114257813 191.22247944450382 L 303.8138289388021 191.22247944450382 C 300.3138289388021 191.22247944450382 296.8138289388021 194.72247944450382 296.8138289388021 198.22247944450382 Z "
                                                                pathFrom="M 296.8138289388021 191.22247944450382 L 296.8138289388021 191.22247944450382 L 314.7192114257813 191.22247944450382 L 314.7192114257813 191.22247944450382 L 314.7192114257813 191.22247944450382 L 314.7192114257813 191.22247944450382 L 314.7192114257813 191.22247944450382 L 296.8138289388021 191.22247944450382 Z"
                                                                cy="225.86557533340456" cx="346.4077416992188" j="5"
                                                                val="-60" barHeight="-37.64409588890076"
                                                                barWidth="23.905382486979164"></path>
                                                            <path
                                                                d="M 352.4077416992188 198.22247944450382 L 352.4077416992188 228.41460729637149 C 352.4077416992188 231.91460729637149 355.9077416992188 235.41460729637149 359.4077416992188 235.41460729637149 L 363.3131241861979 235.41460729637149 C 366.8131241861979 235.41460729637149 370.3131241861979 231.91460729637149 370.3131241861979 228.41460729637149 L 370.3131241861979 198.22247944450382 C 370.3131241861979 194.72247944450382 366.8131241861979 191.22247944450382 363.3131241861979 191.22247944450382 L 359.4077416992188 191.22247944450382 C 355.9077416992188 191.22247944450382 352.4077416992188 194.72247944450382 352.4077416992188 198.22247944450382 Z "
                                                                fill="var(--bs-warning)" fill-opacity="1"
                                                                stroke="var(--bs-paper-bg)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="6"
                                                                stroke-dasharray="0" class="apexcharts-bar-area "
                                                                index="1"
                                                                clip-path="url(#gridRectBarMask185w5ow4k)"
                                                                pathTo="M 352.4077416992188 198.22247944450382 L 352.4077416992188 228.41460729637149 C 352.4077416992188 231.91460729637149 355.9077416992188 235.41460729637149 359.4077416992188 235.41460729637149 L 363.3131241861979 235.41460729637149 C 366.8131241861979 235.41460729637149 370.3131241861979 231.91460729637149 370.3131241861979 228.41460729637149 L 370.3131241861979 198.22247944450382 C 370.3131241861979 194.72247944450382 366.8131241861979 191.22247944450382 363.3131241861979 191.22247944450382 L 359.4077416992188 191.22247944450382 C 355.9077416992188 191.22247944450382 352.4077416992188 194.72247944450382 352.4077416992188 198.22247944450382 Z "
                                                                pathFrom="M 352.4077416992188 191.22247944450382 L 352.4077416992188 191.22247944450382 L 370.3131241861979 191.22247944450382 L 370.3131241861979 191.22247944450382 L 370.3131241861979 191.22247944450382 L 370.3131241861979 191.22247944450382 L 370.3131241861979 191.22247944450382 L 352.4077416992188 191.22247944450382 Z"
                                                                cy="238.41360729637148" cx="402.00165445963546" j="6"
                                                                val="-80" barHeight="-50.19212785186768"
                                                                barWidth="23.905382486979164"></path>
                                                            <path
                                                                d="M 408.00165445963546 198.22247944450382 L 408.00165445963546 240.96263925933843 C 408.00165445963546 244.46263925933843 411.50165445963546 247.96263925933843 415.00165445963546 247.96263925933843 L 418.90703694661465 247.96263925933843 C 422.40703694661465 247.96263925933843 425.90703694661465 244.46263925933843 425.90703694661465 240.96263925933843 L 425.90703694661465 198.22247944450382 C 425.90703694661465 194.72247944450382 422.40703694661465 191.22247944450382 418.90703694661465 191.22247944450382 L 415.00165445963546 191.22247944450382 C 411.50165445963546 191.22247944450382 408.00165445963546 194.72247944450382 408.00165445963546 198.22247944450382 Z "
                                                                fill="var(--bs-warning)" fill-opacity="1"
                                                                stroke="var(--bs-paper-bg)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="6"
                                                                stroke-dasharray="0" class="apexcharts-bar-area "
                                                                index="1"
                                                                clip-path="url(#gridRectBarMask185w5ow4k)"
                                                                pathTo="M 408.00165445963546 198.22247944450382 L 408.00165445963546 240.96263925933843 C 408.00165445963546 244.46263925933843 411.50165445963546 247.96263925933843 415.00165445963546 247.96263925933843 L 418.90703694661465 247.96263925933843 C 422.40703694661465 247.96263925933843 425.90703694661465 244.46263925933843 425.90703694661465 240.96263925933843 L 425.90703694661465 198.22247944450382 C 425.90703694661465 194.72247944450382 422.40703694661465 191.22247944450382 418.90703694661465 191.22247944450382 L 415.00165445963546 191.22247944450382 C 411.50165445963546 191.22247944450382 408.00165445963546 194.72247944450382 408.00165445963546 198.22247944450382 Z "
                                                                pathFrom="M 408.00165445963546 191.22247944450382 L 408.00165445963546 191.22247944450382 L 425.90703694661465 191.22247944450382 L 425.90703694661465 191.22247944450382 L 425.90703694661465 191.22247944450382 L 425.90703694661465 191.22247944450382 L 425.90703694661465 191.22247944450382 L 408.00165445963546 191.22247944450382 Z"
                                                                cy="250.96163925933843" cx="457.59556722005215" j="7"
                                                                val="-100" barHeight="-62.7401598148346"
                                                                barWidth="23.905382486979164"></path>
                                                            <path
                                                                d="M 463.59556722005215 198.22247944450382 L 463.59556722005215 291.15476711120607 C 463.59556722005215 294.65476711120607 467.09556722005215 298.15476711120607 470.59556722005215 298.15476711120607 L 474.5009497070313 298.15476711120607 C 478.0009497070313 298.15476711120607 481.5009497070313 294.65476711120607 481.5009497070313 291.15476711120607 L 481.5009497070313 198.22247944450382 C 481.5009497070313 194.72247944450382 478.0009497070313 191.22247944450382 474.5009497070313 191.22247944450382 L 470.59556722005215 191.22247944450382 C 467.09556722005215 191.22247944450382 463.59556722005215 194.72247944450382 463.59556722005215 198.22247944450382 Z "
                                                                fill="var(--bs-warning)" fill-opacity="1"
                                                                stroke="var(--bs-paper-bg)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="6"
                                                                stroke-dasharray="0" class="apexcharts-bar-area "
                                                                index="1"
                                                                clip-path="url(#gridRectBarMask185w5ow4k)"
                                                                pathTo="M 463.59556722005215 198.22247944450382 L 463.59556722005215 291.15476711120607 C 463.59556722005215 294.65476711120607 467.09556722005215 298.15476711120607 470.59556722005215 298.15476711120607 L 474.5009497070313 298.15476711120607 C 478.0009497070313 298.15476711120607 481.5009497070313 294.65476711120607 481.5009497070313 291.15476711120607 L 481.5009497070313 198.22247944450382 C 481.5009497070313 194.72247944450382 478.0009497070313 191.22247944450382 474.5009497070313 191.22247944450382 L 470.59556722005215 191.22247944450382 C 467.09556722005215 191.22247944450382 463.59556722005215 194.72247944450382 463.59556722005215 198.22247944450382 Z "
                                                                pathFrom="M 463.59556722005215 191.22247944450382 L 463.59556722005215 191.22247944450382 L 481.5009497070313 191.22247944450382 L 481.5009497070313 191.22247944450382 L 481.5009497070313 191.22247944450382 L 481.5009497070313 191.22247944450382 L 481.5009497070313 191.22247944450382 L 463.59556722005215 191.22247944450382 Z"
                                                                cy="301.1537671112061" cx="513.1894799804688" j="8"
                                                                val="-180" barHeight="-112.93228766670228"
                                                                barWidth="23.905382486979164"></path>
                                                            <g class="apexcharts-bar-goals-markers">
                                                                <g className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask185w5ow4k)"></g>
                                                                <g className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask185w5ow4k)"></g>
                                                                <g className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask185w5ow4k)"></g>
                                                                <g className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask185w5ow4k)"></g>
                                                                <g className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask185w5ow4k)"></g>
                                                                <g className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask185w5ow4k)"></g>
                                                                <g className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask185w5ow4k)"></g>
                                                                <g className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask185w5ow4k)"></g>
                                                                <g className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask185w5ow4k)"></g>
                                                            </g>
                                                        </g>
                                                        <g class="apexcharts-datalabels" data:realIndex="0"></g>
                                                        <g class="apexcharts-datalabels" data:realIndex="1"></g>
                                                    </g>
                                                    <line x1="0" y1="0" x2="500.34521484375"
                                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                        stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line x1="0" y1="0" x2="500.34521484375"
                                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                                        <g class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"><text x="27.796956380208332"
                                                                y="341.700799074173" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-family="var(--bs-font-family-base)"
                                                                font-weight="400" fill="var(--bs-secondary-color)"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: var(--bs-font-family-base);">
                                                                <tspan>Jan</tspan>
                                                                <title>Jan</title>
                                                            </text><text x="83.390869140625" y="341.700799074173"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px"
                                                                font-family="var(--bs-font-family-base)"
                                                                font-weight="400" fill="var(--bs-secondary-color)"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: var(--bs-font-family-base);">
                                                                <tspan>Feb</tspan>
                                                                <title>Feb</title>
                                                            </text><text x="138.98478190104166" y="341.700799074173"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px"
                                                                font-family="var(--bs-font-family-base)"
                                                                font-weight="400" fill="var(--bs-secondary-color)"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: var(--bs-font-family-base);">
                                                                <tspan>Mar</tspan>
                                                                <title>Mar</title>
                                                            </text><text x="194.57869466145831" y="341.700799074173"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px"
                                                                font-family="var(--bs-font-family-base)"
                                                                font-weight="400" fill="var(--bs-secondary-color)"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: var(--bs-font-family-base);">
                                                                <tspan>Apr</tspan>
                                                                <title>Apr</title>
                                                            </text><text x="250.17260742187497" y="341.700799074173"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px"
                                                                font-family="var(--bs-font-family-base)"
                                                                font-weight="400" fill="var(--bs-secondary-color)"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: var(--bs-font-family-base);">
                                                                <tspan>May</tspan>
                                                                <title>May</title>
                                                            </text><text x="305.7665201822917" y="341.700799074173"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px"
                                                                font-family="var(--bs-font-family-base)"
                                                                font-weight="400" fill="var(--bs-secondary-color)"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: var(--bs-font-family-base);">
                                                                <tspan>Jun</tspan>
                                                                <title>Jun</title>
                                                            </text><text x="361.36043294270837" y="341.700799074173"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px"
                                                                font-family="var(--bs-font-family-base)"
                                                                font-weight="400" fill="var(--bs-secondary-color)"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: var(--bs-font-family-base);">
                                                                <tspan>Jul</tspan>
                                                                <title>Jul</title>
                                                            </text><text x="416.95434570312506" y="341.700799074173"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px"
                                                                font-family="var(--bs-font-family-base)"
                                                                font-weight="400" fill="var(--bs-secondary-color)"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: var(--bs-font-family-base);">
                                                                <tspan>Aug</tspan>
                                                                <title>Aug</title>
                                                            </text><text x="472.54825846354174" y="341.700799074173"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px"
                                                                font-family="var(--bs-font-family-base)"
                                                                font-weight="400" fill="var(--bs-secondary-color)"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: var(--bs-font-family-base);">
                                                                <tspan>Sep</tspan>
                                                                <title>Sep</title>
                                                            </text></g>
                                                    </g>
                                                    <g class="apexcharts-yaxis-annotations"></g>
                                                    <g class="apexcharts-xaxis-annotations"></g>
                                                    <g class="apexcharts-point-annotations"></g>
                                                </g>
                                            </svg></div>
                                    </div>
                                </div>
                                <div class="col-md-4 p-4">
                                    <div class="text-center mt-5">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-label-primary dropdown-toggle waves-effect"
                                                type="button" id="budgetId" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" fdprocessedid="vuq3as">
                                                <script>
                                                    document.write(new Date().getFullYear());
                                                </script>2025
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="budgetId">
                                                <a class="dropdown-item prev-year1 waves-effect"
                                                    href="javascript:void(0);">
                                                    <script>
                                                        document.write(new Date().getFullYear() - 1);
                                                    </script>2024
                                                </a>
                                                <a class="dropdown-item prev-year2 waves-effect"
                                                    href="javascript:void(0);">
                                                    <script>
                                                        document.write(new Date().getFullYear() - 2);
                                                    </script>2023
                                                </a>
                                                <a class="dropdown-item prev-year3 waves-effect"
                                                    href="javascript:void(0);">
                                                    <script>
                                                        document.write(new Date().getFullYear() - 3);
                                                    </script>2022
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="text-center pt-8 mb-0">$25,825</h3>
                                    <p class="mb-8 text-center"><span class="fw-medium text-heading">Budget:
                                        </span>56,800</p>
                                    <div class="px-3">
                                        <div id="budgetChart" style="min-height: 115px;">
                                            <div id="apexcharts5u1e91ir"
                                                class="apexcharts-canvas apexcharts5u1e91ir apexcharts-theme-"
                                                style="width: 251px; height: 100px;"><svg
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    width="251" height="100">
                                                    <foreignObject x="0" y="0" width="251" height="100">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="max-height: 50px;"></div>
                                                        <style type="text/css">
                                                            .apexcharts-flip-y {
                                                                transform: scaleY(-1) translateY(-100%);
                                                                transform-origin: top;
                                                                transform-box: fill-box;
                                                            }

                                                            .apexcharts-flip-x {
                                                                transform: scaleX(-1);
                                                                transform-origin: center;
                                                                transform-box: fill-box;
                                                            }

                                                            .apexcharts-legend {
                                                                display: flex;
                                                                overflow: auto;
                                                                padding: 0 10px;
                                                            }

                                                            .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                                flex-direction: column;
                                                            }

                                                            .apexcharts-legend-group {
                                                                display: flex;
                                                            }

                                                            .apexcharts-legend-group-vertical {
                                                                flex-direction: column-reverse;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom,
                                                            .apexcharts-legend.apx-legend-position-top {
                                                                flex-wrap: wrap
                                                            }

                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                flex-direction: column;
                                                                bottom: 0;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                justify-content: flex-start;
                                                                align-items: flex-start;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                                justify-content: center;
                                                                align-items: center;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                                justify-content: flex-end;
                                                                align-items: flex-end;
                                                            }

                                                            .apexcharts-legend-series {
                                                                cursor: pointer;
                                                                line-height: normal;
                                                                display: flex;
                                                                align-items: center;
                                                            }

                                                            .apexcharts-legend-text {
                                                                position: relative;
                                                                font-size: 14px;
                                                            }

                                                            .apexcharts-legend-text *,
                                                            .apexcharts-legend-marker * {
                                                                pointer-events: none;
                                                            }

                                                            .apexcharts-legend-marker {
                                                                position: relative;
                                                                display: flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                                cursor: pointer;
                                                                margin-right: 1px;
                                                            }

                                                            .apexcharts-legend-series.apexcharts-no-click {
                                                                cursor: auto;
                                                            }

                                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                                display: none !important;
                                                            }

                                                            .apexcharts-inactive-legend {
                                                                opacity: 0.45;
                                                            }
                                                        </style>
                                                    </foreignObject>
                                                    <rect width="0" height="0" x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)"></g>
                                                    <g class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)"></g>
                                                    <g class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-18, 0)"></g>
                                                    <g class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(25, 0)">
                                                        <defs>
                                                            <clipPath id="gridRectMask5u1e91ir">
                                                                <rect width="216" height="100" x="0" y="0"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectBarMask5u1e91ir">
                                                                <rect width="222" height="106" x="-3" y="-3"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMask5u1e91ir">
                                                                <rect width="216" height="100" x="0" y="0"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMask5u1e91ir"></clipPath>
                                                            <clipPath id="nonForecastMask5u1e91ir"></clipPath>
                                                        </defs>
                                                        <line x1="0" y1="0" x2="0"
                                                            y2="100" stroke="#b6b6b6" stroke-dasharray="3"
                                                            stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0"
                                                            y="0" width="1" height="100" fill="#b1b9c4"
                                                            filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                        <g class="apexcharts-grid">
                                                            <g class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line x1="0" y1="0" x2="216"
                                                                    y2="0" stroke="var(--bs-border-color)"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line x1="0" y1="50" x2="216"
                                                                    y2="50" stroke="var(--bs-border-color)"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line x1="0" y1="100" x2="216"
                                                                    y2="100" stroke="var(--bs-border-color)"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line x1="0" y1="100" x2="216"
                                                                y2="100" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line x1="0" y1="1" x2="0"
                                                                y2="100" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g class="apexcharts-grid-borders" style="display: none;"></g>
                                                        <g class="apexcharts-line-series apexcharts-plot-series">
                                                            <g class="apexcharts-series" zIndex="0"
                                                                seriesName="LastxMonth" data:longestSeries="true"
                                                                rel="1" data:realIndex="0">
                                                                <path
                                                                    d="M 0 80C 7.56 80 14.040000000000003 90 21.6 90C 29.16 90 35.64 70 43.2 70C 50.76 70 57.24 84 64.8 84C 72.36 84 78.84 76 86.4 76C 93.96000000000001 76 100.44 95 108 95C 115.56 95 122.03999999999999 60 129.6 60C 137.16 60 143.64000000000001 77 151.20000000000002 77C 158.76000000000002 77 165.24 72 172.8 72C 180.36 72 186.84 95 194.4 95C 201.96 95 208.44 70 216 70"
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="var(--bs-border-color)" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="1"
                                                                    stroke-dasharray="5" class="apexcharts-line"
                                                                    index="0"
                                                                    clip-path="url(#gridRectMask5u1e91ir)"
                                                                    pathTo="M 0 80C 7.56 80 14.040000000000003 90 21.6 90C 29.16 90 35.64 70 43.2 70C 50.76 70 57.24 84 64.8 84C 72.36 84 78.84 76 86.4 76C 93.96000000000001 76 100.44 95 108 95C 115.56 95 122.03999999999999 60 129.6 60C 137.16 60 143.64000000000001 77 151.20000000000002 77C 158.76000000000002 77 165.24 72 172.8 72C 180.36 72 186.84 95 194.4 95C 201.96 95 208.44 70 216 70"
                                                                    pathFrom="M 0 100 L 0 100 L 21.6 100 L 43.2 100 L 64.8 100 L 86.4 100 L 108 100 L 129.6 100 L 151.20000000000002 100 L 172.8 100 L 194.4 100 L 216 100"
                                                                    fill-rule="evenodd"></path>
                                                                <g class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <g class="apexcharts-series" zIndex="1"
                                                                seriesName="ThisxMonth" data:longestSeries="true"
                                                                rel="2" data:realIndex="1">
                                                                <path
                                                                    d="M 0 50C 7.56 50 14.040000000000003 60 21.6 60C 29.16 60 35.64 40 43.2 40C 50.76 40 57.24 54 64.8 54C 72.36 54 78.84 46 86.4 46C 93.96000000000001 46 100.44 65 108 65C 115.56 65 122.03999999999999 30 129.6 30C 137.16 30 143.64000000000001 47 151.20000000000002 47C 158.76000000000002 47 165.24 42 172.8 42C 180.36 42 186.84 65 194.4 65C 201.96 65 208.44 40 216 40"
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="var(--bs-primary)" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="2"
                                                                    stroke-dasharray="0" class="apexcharts-line"
                                                                    index="1"
                                                                    clip-path="url(#gridRectMask5u1e91ir)"
                                                                    pathTo="M 0 50C 7.56 50 14.040000000000003 60 21.6 60C 29.16 60 35.64 40 43.2 40C 50.76 40 57.24 54 64.8 54C 72.36 54 78.84 46 86.4 46C 93.96000000000001 46 100.44 65 108 65C 115.56 65 122.03999999999999 30 129.6 30C 137.16 30 143.64000000000001 47 151.20000000000002 47C 158.76000000000002 47 165.24 42 172.8 42C 180.36 42 186.84 65 194.4 65C 201.96 65 208.44 40 216 40"
                                                                    pathFrom="M 0 100 L 0 100 L 21.6 100 L 43.2 100 L 64.8 100 L 86.4 100 L 108 100 L 129.6 100 L 151.20000000000002 100 L 172.8 100 L 194.4 100 L 216 100"
                                                                    fill-rule="evenodd"></path>
                                                                <g class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="1"></g>
                                                            </g>
                                                            <g class="apexcharts-datalabels" data:realIndex="0"></g>
                                                            <g class="apexcharts-datalabels" data:realIndex="1"></g>
                                                        </g>
                                                        <line x1="0" y1="0" x2="216"
                                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                            stroke-width="1" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line x1="0" y1="0" x2="216"
                                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"></g>
                                                        </g>
                                                        <g class="apexcharts-yaxis-annotations"></g>
                                                        <g class="apexcharts-xaxis-annotations"></g>
                                                        <g class="apexcharts-point-annotations"></g>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-8">
                                        <button type="button" class="btn btn-primary waves-effect waves-light"
                                            fdprocessedid="xmrme2">Increase Button</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Revenue Report -->

                <!-- Earning Reports -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-title mb-0">
                                <h5 class="mb-1">Earning Reports</h5>
                                <p class="card-subtitle">Weekly Earnings Overview</p>
                            </div>
                            <div class="dropdown">
                                <button
                                    class="btn btn-text-secondary rounded-pill text-body-secondary border-0 p-2 me-n1 waves-effect"
                                    type="button" id="earningReports" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" fdprocessedid="8c7gd">
                                    <i class="icon-base ti tabler-dots-vertical icon-md text-body-secondary"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReports">
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Download</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pb-0">
                            <ul class="p-0 m-0">
                                <li class="d-flex align-items-center mb-5">
                                    <div class="me-4">
                                        <span class="badge bg-label-primary rounded p-1_5"><i
                                                class="icon-base ti tabler-chart-pie-2 icon-md"></i></span>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Net Profit</h6>
                                            <small class="text-body">12.4k Sales</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-4">
                                            <small>$1,619</small>
                                            <div class="d-flex align-items-center gap-1">
                                                <i class="icon-base ti tabler-chevron-up text-success"></i>
                                                <small class="text-body-secondary">18.6%</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-5">
                                    <div class="me-4">
                                        <span class="badge bg-label-success rounded p-1_5"><i
                                                class="icon-base ti tabler-currency-dollar icon-md"></i></span>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Total Income</h6>
                                            <small class="text-body">Sales, Affiliation</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-4">
                                            <small>$3,571</small>
                                            <div class="d-flex align-items-center gap-1">
                                                <i class="icon-base ti tabler-chevron-up text-success"></i>
                                                <small class="text-body-secondary">39.6%</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-5">
                                    <div class="me-4">
                                        <span class="badge bg-label-secondary text-body rounded p-1_5"><i
                                                class="icon-base ti tabler-credit-card icon-md"></i></span>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Total Expenses</h6>
                                            <small class="text-body">ADVT, Marketing</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-4">
                                            <small>$430</small>
                                            <div class="d-flex align-items-center gap-1">
                                                <i class="icon-base ti tabler-chevron-up text-success"></i>
                                                <small class="text-body-secondary">52.8%</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div id="reportBarChart" style="min-height: 245px;">
                                <div id="apexcharts3ud9gll2"
                                    class="apexcharts-canvas apexcharts3ud9gll2 apexcharts-theme-"
                                    style="width: 400px; height: 230px;"><svg xmlns="http://www.w3.org/2000/svg"
                                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        width="400" height="230">
                                        <foreignObject x="0" y="0" width="400" height="230">
                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                style="max-height: 115px;"></div>
                                            <style type="text/css">
                                                .apexcharts-flip-y {
                                                    transform: scaleY(-1) translateY(-100%);
                                                    transform-origin: top;
                                                    transform-box: fill-box;
                                                }

                                                .apexcharts-flip-x {
                                                    transform: scaleX(-1);
                                                    transform-origin: center;
                                                    transform-box: fill-box;
                                                }

                                                .apexcharts-legend {
                                                    display: flex;
                                                    overflow: auto;
                                                    padding: 0 10px;
                                                }

                                                .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                    flex-direction: column;
                                                }

                                                .apexcharts-legend-group {
                                                    display: flex;
                                                }

                                                .apexcharts-legend-group-vertical {
                                                    flex-direction: column-reverse;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom,
                                                .apexcharts-legend.apx-legend-position-top {
                                                    flex-wrap: wrap
                                                }

                                                .apexcharts-legend.apx-legend-position-right,
                                                .apexcharts-legend.apx-legend-position-left {
                                                    flex-direction: column;
                                                    bottom: 0;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                .apexcharts-legend.apx-legend-position-right,
                                                .apexcharts-legend.apx-legend-position-left {
                                                    justify-content: flex-start;
                                                    align-items: flex-start;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                    justify-content: center;
                                                    align-items: center;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                    justify-content: flex-end;
                                                    align-items: flex-end;
                                                }

                                                .apexcharts-legend-series {
                                                    cursor: pointer;
                                                    line-height: normal;
                                                    display: flex;
                                                    align-items: center;
                                                }

                                                .apexcharts-legend-text {
                                                    position: relative;
                                                    font-size: 14px;
                                                }

                                                .apexcharts-legend-text *,
                                                .apexcharts-legend-marker * {
                                                    pointer-events: none;
                                                }

                                                .apexcharts-legend-marker {
                                                    position: relative;
                                                    display: flex;
                                                    align-items: center;
                                                    justify-content: center;
                                                    cursor: pointer;
                                                    margin-right: 1px;
                                                }

                                                .apexcharts-legend-series.apexcharts-no-click {
                                                    cursor: auto;
                                                }

                                                .apexcharts-legend .apexcharts-hidden-zero-series,
                                                .apexcharts-legend .apexcharts-hidden-null-series {
                                                    display: none !important;
                                                }

                                                .apexcharts-inactive-legend {
                                                    opacity: 0.45;
                                                }
                                            </style>
                                        </foreignObject>
                                        <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                        <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                        <g class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                                            <g class="apexcharts-yaxis-texts-g"></g>
                                        </g>
                                        <g class="apexcharts-inner apexcharts-graphical" transform="translate(0, 10)">
                                            <defs>
                                                <linearGradient x1="0" y1="0" x2="0"
                                                    y2="1" id="SvgjsLinearGradient1007">
                                                    <stop stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)"
                                                        offset="0"></stop>
                                                    <stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                                        offset="1"></stop>
                                                    <stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                                        offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMask3ud9gll2">
                                                    <rect width="401.04374980926514" height="181.70079907417298" x="0"
                                                        y="0" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectBarMask3ud9gll2">
                                                    <rect width="405.04374980926514" height="185.70079907417298" x="-2"
                                                        y="-2" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMask3ud9gll2">
                                                    <rect width="401.04374980926514" height="181.70079907417298" x="0"
                                                        y="0" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask3ud9gll2"></clipPath>
                                                <clipPath id="nonForecastMask3ud9gll2"></clipPath>
                                            </defs>
                                            <rect width="34.37517855507987" height="181.70079907417298" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="#b6b6b6" stroke-dasharray="3"
                                                fill="url(#SvgjsLinearGradient1007)" class="apexcharts-xcrosshairs"
                                                y2="181.70079907417298" filter="none" fill-opacity="0.9"></rect>
                                            <g class="apexcharts-grid">
                                                <g class="apexcharts-gridlines-horizontal" style="display: none;">
                                                    <line x1="0" y1="0" x2="401.04374980926514"
                                                        y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line x1="0" y1="36.34015981483459"
                                                        x2="401.04374980926514" y2="36.34015981483459"
                                                        stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line x1="0" y1="72.68031962966919"
                                                        x2="401.04374980926514" y2="72.68031962966919"
                                                        stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line x1="0" y1="109.02047944450378"
                                                        x2="401.04374980926514" y2="109.02047944450378"
                                                        stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line x1="0" y1="145.36063925933837"
                                                        x2="401.04374980926514" y2="145.36063925933837"
                                                        stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line x1="0" y1="181.70079907417295"
                                                        x2="401.04374980926514" y2="181.70079907417295"
                                                        stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                <line x1="0" y1="181.70079907417298" x2="401.04374980926514"
                                                    y2="181.70079907417298" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                                <line x1="0" y1="1" x2="0"
                                                    y2="181.70079907417298" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                            </g>
                                            <g class="apexcharts-grid-borders" style="display: none;"></g>
                                            <g class="apexcharts-bar-series apexcharts-plot-series">
                                                <g class="apexcharts-series" rel="1" seriesName="series-1"
                                                    data:realIndex="0">
                                                    <path
                                                        d="M 11.45839285169329 177.70179907417298 L 11.45839285169329 113.0214794445038 C 11.45839285169329 111.0214794445038 13.45839285169329 109.0214794445038 15.45839285169329 109.0214794445038 L 41.83357140677316 109.0214794445038 C 43.83357140677316 109.0214794445038 45.83357140677316 111.0214794445038 45.83357140677316 113.0214794445038 L 45.83357140677316 177.70179907417298 C 45.83357140677316 179.70179907417298 43.83357140677316 181.70179907417298 41.83357140677316 181.70179907417298 L 15.45839285169329 181.70179907417298 C 13.45839285169329 181.70179907417298 11.45839285169329 179.70179907417298 11.45839285169329 177.70179907417298 Z "
                                                        fill="var(--bs-primary-bg-subtle)" fill-opacity="1"
                                                        stroke="var(--bs-primary-bg-subtle)" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area undefined" index="0"
                                                        clip-path="url(#gridRectBarMask3ud9gll2)"
                                                        pathTo="M 11.45839285169329 177.70179907417298 L 11.45839285169329 113.0214794445038 C 11.45839285169329 111.0214794445038 13.45839285169329 109.0214794445038 15.45839285169329 109.0214794445038 L 41.83357140677316 109.0214794445038 C 43.83357140677316 109.0214794445038 45.83357140677316 111.0214794445038 45.83357140677316 113.0214794445038 L 45.83357140677316 177.70179907417298 C 45.83357140677316 179.70179907417298 43.83357140677316 181.70179907417298 41.83357140677316 181.70179907417298 L 15.45839285169329 181.70179907417298 C 13.45839285169329 181.70179907417298 11.45839285169329 179.70179907417298 11.45839285169329 177.70179907417298 Z "
                                                        pathFrom="M 11.45839285169329 181.70179907417298 L 11.45839285169329 181.70179907417298 L 45.83357140677316 181.70179907417298 L 45.83357140677316 181.70179907417298 L 45.83357140677316 181.70179907417298 L 45.83357140677316 181.70179907417298 L 45.83357140677316 181.70179907417298 L 11.45839285169329 181.70179907417298 Z"
                                                        cy="109.02047944450379" cx="68.75035711015974" j="0"
                                                        val="40" barHeight="72.68031962966919"
                                                        barWidth="34.37517855507987"></path>
                                                    <path
                                                        d="M 68.75035711015974 177.70179907417298 L 68.75035711015974 13.086039953708644 C 68.75035711015974 11.086039953708644 70.75035711015974 9.086039953708644 72.75035711015974 9.086039953708644 L 99.12553566523961 9.086039953708644 C 101.12553566523961 9.086039953708644 103.12553566523961 11.086039953708644 103.12553566523961 13.086039953708644 L 103.12553566523961 177.70179907417298 C 103.12553566523961 179.70179907417298 101.12553566523961 181.70179907417298 99.12553566523961 181.70179907417298 L 72.75035711015974 181.70179907417298 C 70.75035711015974 181.70179907417298 68.75035711015974 179.70179907417298 68.75035711015974 177.70179907417298 Z "
                                                        fill="var(--bs-primary-bg-subtle)" fill-opacity="1"
                                                        stroke="var(--bs-primary-bg-subtle)" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area undefined" index="0"
                                                        clip-path="url(#gridRectBarMask3ud9gll2)"
                                                        pathTo="M 68.75035711015974 177.70179907417298 L 68.75035711015974 13.086039953708644 C 68.75035711015974 11.086039953708644 70.75035711015974 9.086039953708644 72.75035711015974 9.086039953708644 L 99.12553566523961 9.086039953708644 C 101.12553566523961 9.086039953708644 103.12553566523961 11.086039953708644 103.12553566523961 13.086039953708644 L 103.12553566523961 177.70179907417298 C 103.12553566523961 179.70179907417298 101.12553566523961 181.70179907417298 99.12553566523961 181.70179907417298 L 72.75035711015974 181.70179907417298 C 70.75035711015974 181.70179907417298 68.75035711015974 179.70179907417298 68.75035711015974 177.70179907417298 Z "
                                                        pathFrom="M 68.75035711015974 181.70179907417298 L 68.75035711015974 181.70179907417298 L 103.12553566523961 181.70179907417298 L 103.12553566523961 181.70179907417298 L 103.12553566523961 181.70179907417298 L 103.12553566523961 181.70179907417298 L 103.12553566523961 181.70179907417298 L 68.75035711015974 181.70179907417298 Z"
                                                        cy="9.085039953708645" cx="126.04232136862619" j="1"
                                                        val="95" barHeight="172.61575912046433"
                                                        barWidth="34.37517855507987"></path>
                                                    <path
                                                        d="M 126.04232136862619 177.70179907417298 L 126.04232136862619 76.6813196296692 C 126.04232136862619 74.6813196296692 128.04232136862618 72.6813196296692 130.04232136862618 72.6813196296692 L 156.41749992370606 72.6813196296692 C 158.41749992370606 72.6813196296692 160.41749992370606 74.6813196296692 160.41749992370606 76.6813196296692 L 160.41749992370606 177.70179907417298 C 160.41749992370606 179.70179907417298 158.41749992370606 181.70179907417298 156.41749992370606 181.70179907417298 L 130.04232136862618 181.70179907417298 C 128.04232136862618 181.70179907417298 126.04232136862619 179.70179907417298 126.04232136862619 177.70179907417298 Z "
                                                        fill="var(--bs-primary-bg-subtle)" fill-opacity="1"
                                                        stroke="var(--bs-primary-bg-subtle)" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area undefined" index="0"
                                                        clip-path="url(#gridRectBarMask3ud9gll2)"
                                                        pathTo="M 126.04232136862619 177.70179907417298 L 126.04232136862619 76.6813196296692 C 126.04232136862619 74.6813196296692 128.04232136862618 72.6813196296692 130.04232136862618 72.6813196296692 L 156.41749992370606 72.6813196296692 C 158.41749992370606 72.6813196296692 160.41749992370606 74.6813196296692 160.41749992370606 76.6813196296692 L 160.41749992370606 177.70179907417298 C 160.41749992370606 179.70179907417298 158.41749992370606 181.70179907417298 156.41749992370606 181.70179907417298 L 130.04232136862618 181.70179907417298 C 128.04232136862618 181.70179907417298 126.04232136862619 179.70179907417298 126.04232136862619 177.70179907417298 Z "
                                                        pathFrom="M 126.04232136862619 181.70179907417298 L 126.04232136862619 181.70179907417298 L 160.41749992370606 181.70179907417298 L 160.41749992370606 181.70179907417298 L 160.41749992370606 181.70179907417298 L 160.41749992370606 181.70179907417298 L 160.41749992370606 181.70179907417298 L 126.04232136862619 181.70179907417298 Z"
                                                        cy="72.6803196296692" cx="183.33428562709264" j="2"
                                                        val="60" barHeight="109.02047944450378"
                                                        barWidth="34.37517855507987"></path>
                                                    <path
                                                        d="M 183.33428562709264 177.70179907417298 L 183.33428562709264 103.93643949079515 C 183.33428562709264 101.93643949079515 185.33428562709264 99.93643949079515 187.33428562709264 99.93643949079515 L 213.7094641821725 99.93643949079515 C 215.7094641821725 99.93643949079515 217.7094641821725 101.93643949079515 217.7094641821725 103.93643949079515 L 217.7094641821725 177.70179907417298 C 217.7094641821725 179.70179907417298 215.7094641821725 181.70179907417298 213.7094641821725 181.70179907417298 L 187.33428562709264 181.70179907417298 C 185.33428562709264 181.70179907417298 183.33428562709264 179.70179907417298 183.33428562709264 177.70179907417298 Z "
                                                        fill="var(--bs-primary-bg-subtle)" fill-opacity="1"
                                                        stroke="var(--bs-primary-bg-subtle)" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area undefined" index="0"
                                                        clip-path="url(#gridRectBarMask3ud9gll2)"
                                                        pathTo="M 183.33428562709264 177.70179907417298 L 183.33428562709264 103.93643949079515 C 183.33428562709264 101.93643949079515 185.33428562709264 99.93643949079515 187.33428562709264 99.93643949079515 L 213.7094641821725 99.93643949079515 C 215.7094641821725 99.93643949079515 217.7094641821725 101.93643949079515 217.7094641821725 103.93643949079515 L 217.7094641821725 177.70179907417298 C 217.7094641821725 179.70179907417298 215.7094641821725 181.70179907417298 213.7094641821725 181.70179907417298 L 187.33428562709264 181.70179907417298 C 185.33428562709264 181.70179907417298 183.33428562709264 179.70179907417298 183.33428562709264 177.70179907417298 Z "
                                                        pathFrom="M 183.33428562709264 181.70179907417298 L 183.33428562709264 181.70179907417298 L 217.7094641821725 181.70179907417298 L 217.7094641821725 181.70179907417298 L 217.7094641821725 181.70179907417298 L 217.7094641821725 181.70179907417298 L 217.7094641821725 181.70179907417298 L 183.33428562709264 181.70179907417298 Z"
                                                        cy="99.93543949079515" cx="240.6262498855591" j="3"
                                                        val="45" barHeight="81.76535958337783"
                                                        barWidth="34.37517855507987"></path>
                                                    <path
                                                        d="M 240.6262498855591 177.70179907417298 L 240.6262498855591 22.17107990741732 C 240.6262498855591 20.17107990741732 242.6262498855591 18.17107990741732 244.6262498855591 18.17107990741732 L 271.00142844063896 18.17107990741732 C 273.00142844063896 18.17107990741732 275.00142844063896 20.17107990741732 275.00142844063896 22.17107990741732 L 275.00142844063896 177.70179907417298 C 275.00142844063896 179.70179907417298 273.00142844063896 181.70179907417298 271.00142844063896 181.70179907417298 L 244.6262498855591 181.70179907417298 C 242.6262498855591 181.70179907417298 240.6262498855591 179.70179907417298 240.6262498855591 177.70179907417298 Z "
                                                        fill="var(--bs-primary)" fill-opacity="1"
                                                        stroke="var(--bs-primary)" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area undefined" index="0"
                                                        clip-path="url(#gridRectBarMask3ud9gll2)"
                                                        pathTo="M 240.6262498855591 177.70179907417298 L 240.6262498855591 22.17107990741732 C 240.6262498855591 20.17107990741732 242.6262498855591 18.17107990741732 244.6262498855591 18.17107990741732 L 271.00142844063896 18.17107990741732 C 273.00142844063896 18.17107990741732 275.00142844063896 20.17107990741732 275.00142844063896 22.17107990741732 L 275.00142844063896 177.70179907417298 C 275.00142844063896 179.70179907417298 273.00142844063896 181.70179907417298 271.00142844063896 181.70179907417298 L 244.6262498855591 181.70179907417298 C 242.6262498855591 181.70179907417298 240.6262498855591 179.70179907417298 240.6262498855591 177.70179907417298 Z "
                                                        pathFrom="M 240.6262498855591 181.70179907417298 L 240.6262498855591 181.70179907417298 L 275.00142844063896 181.70179907417298 L 275.00142844063896 181.70179907417298 L 275.00142844063896 181.70179907417298 L 275.00142844063896 181.70179907417298 L 275.00142844063896 181.70179907417298 L 240.6262498855591 181.70179907417298 Z"
                                                        cy="18.170079907417318" cx="297.91821414402557" j="4"
                                                        val="90" barHeight="163.53071916675566"
                                                        barWidth="34.37517855507987"></path>
                                                    <path
                                                        d="M 297.91821414402557 177.70179907417298 L 297.91821414402557 94.8513995370865 C 297.91821414402557 92.8513995370865 299.91821414402557 90.8513995370865 301.91821414402557 90.8513995370865 L 328.2933926991054 90.8513995370865 C 330.2933926991054 90.8513995370865 332.2933926991054 92.8513995370865 332.2933926991054 94.8513995370865 L 332.2933926991054 177.70179907417298 C 332.2933926991054 179.70179907417298 330.2933926991054 181.70179907417298 328.2933926991054 181.70179907417298 L 301.91821414402557 181.70179907417298 C 299.91821414402557 181.70179907417298 297.91821414402557 179.70179907417298 297.91821414402557 177.70179907417298 Z "
                                                        fill="var(--bs-primary-bg-subtle)" fill-opacity="1"
                                                        stroke="var(--bs-primary-bg-subtle)" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area undefined" index="0"
                                                        clip-path="url(#gridRectBarMask3ud9gll2)"
                                                        pathTo="M 297.91821414402557 177.70179907417298 L 297.91821414402557 94.8513995370865 C 297.91821414402557 92.8513995370865 299.91821414402557 90.8513995370865 301.91821414402557 90.8513995370865 L 328.2933926991054 90.8513995370865 C 330.2933926991054 90.8513995370865 332.2933926991054 92.8513995370865 332.2933926991054 94.8513995370865 L 332.2933926991054 177.70179907417298 C 332.2933926991054 179.70179907417298 330.2933926991054 181.70179907417298 328.2933926991054 181.70179907417298 L 301.91821414402557 181.70179907417298 C 299.91821414402557 181.70179907417298 297.91821414402557 179.70179907417298 297.91821414402557 177.70179907417298 Z "
                                                        pathFrom="M 297.91821414402557 181.70179907417298 L 297.91821414402557 181.70179907417298 L 332.2933926991054 181.70179907417298 L 332.2933926991054 181.70179907417298 L 332.2933926991054 181.70179907417298 L 332.2933926991054 181.70179907417298 L 332.2933926991054 181.70179907417298 L 297.91821414402557 181.70179907417298 Z"
                                                        cy="90.85039953708649" cx="355.21017840249203" j="5"
                                                        val="50" barHeight="90.85039953708649"
                                                        barWidth="34.37517855507987"></path>
                                                    <path
                                                        d="M 355.21017840249203 177.70179907417298 L 355.21017840249203 49.42619976854325 C 355.21017840249203 47.42619976854325 357.21017840249203 45.42619976854325 359.21017840249203 45.42619976854325 L 385.5853569575719 45.42619976854325 C 387.5853569575719 45.42619976854325 389.5853569575719 47.42619976854325 389.5853569575719 49.42619976854325 L 389.5853569575719 177.70179907417298 C 389.5853569575719 179.70179907417298 387.5853569575719 181.70179907417298 385.5853569575719 181.70179907417298 L 359.21017840249203 181.70179907417298 C 357.21017840249203 181.70179907417298 355.21017840249203 179.70179907417298 355.21017840249203 177.70179907417298 Z "
                                                        fill="var(--bs-primary-bg-subtle)" fill-opacity="1"
                                                        stroke="var(--bs-primary-bg-subtle)" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area undefined" index="0"
                                                        clip-path="url(#gridRectBarMask3ud9gll2)"
                                                        pathTo="M 355.21017840249203 177.70179907417298 L 355.21017840249203 49.42619976854325 C 355.21017840249203 47.42619976854325 357.21017840249203 45.42619976854325 359.21017840249203 45.42619976854325 L 385.5853569575719 45.42619976854325 C 387.5853569575719 45.42619976854325 389.5853569575719 47.42619976854325 389.5853569575719 49.42619976854325 L 389.5853569575719 177.70179907417298 C 389.5853569575719 179.70179907417298 387.5853569575719 181.70179907417298 385.5853569575719 181.70179907417298 L 359.21017840249203 181.70179907417298 C 357.21017840249203 181.70179907417298 355.21017840249203 179.70179907417298 355.21017840249203 177.70179907417298 Z "
                                                        pathFrom="M 355.21017840249203 181.70179907417298 L 355.21017840249203 181.70179907417298 L 389.5853569575719 181.70179907417298 L 389.5853569575719 181.70179907417298 L 389.5853569575719 181.70179907417298 L 389.5853569575719 181.70179907417298 L 389.5853569575719 181.70179907417298 L 355.21017840249203 181.70179907417298 Z"
                                                        cy="45.42519976854325" cx="412.5021426609585" j="6"
                                                        val="75" barHeight="136.27559930562973"
                                                        barWidth="34.37517855507987"></path>
                                                    <g class="apexcharts-bar-goals-markers">
                                                        <g className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMask3ud9gll2)"></g>
                                                        <g className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMask3ud9gll2)"></g>
                                                        <g className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMask3ud9gll2)"></g>
                                                        <g className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMask3ud9gll2)"></g>
                                                        <g className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMask3ud9gll2)"></g>
                                                        <g className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMask3ud9gll2)"></g>
                                                        <g className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMask3ud9gll2)"></g>
                                                    </g>
                                                    <g class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                                </g>
                                                <g class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                    data:realIndex="0"></g>
                                            </g>
                                            <line x1="0" y1="0" x2="401.04374980926514"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line x1="0" y1="0" x2="401.04374980926514"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text
                                                        x="28.645982129233225" y="209.70079907417298" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px"
                                                        font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                        fill="var(--bs-secondary-color)"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan>Mo</tspan>
                                                        <title>Mo</title>
                                                    </text><text x="85.93794638769967" y="209.70079907417298"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                        font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                        fill="var(--bs-secondary-color)"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan>Tu</tspan>
                                                        <title>Tu</title>
                                                    </text><text x="143.2299106461661" y="209.70079907417298"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                        font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                        fill="var(--bs-secondary-color)"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan>We</tspan>
                                                        <title>We</title>
                                                    </text><text x="200.52187490463257" y="209.70079907417298"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                        font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                        fill="var(--bs-secondary-color)"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan>Th</tspan>
                                                        <title>Th</title>
                                                    </text><text x="257.81383916309903" y="209.70079907417298"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                        font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                        fill="var(--bs-secondary-color)"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan>Fr</tspan>
                                                        <title>Fr</title>
                                                    </text><text x="315.1058034215655" y="209.70079907417298"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                        font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                        fill="var(--bs-secondary-color)"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan>Sa</tspan>
                                                        <title>Sa</title>
                                                    </text><text x="372.39776768003196" y="209.70079907417298"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                        font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                        fill="var(--bs-secondary-color)"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan>Su</tspan>
                                                        <title>Su</title>
                                                    </text></g>
                                            </g>
                                            <g class="apexcharts-yaxis-annotations"></g>
                                            <g class="apexcharts-xaxis-annotations"></g>
                                            <g class="apexcharts-point-annotations"></g>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0"
                                            style="order: 1;"><span class="apexcharts-tooltip-marker"
                                                style="background-color: var(--bs-primary-bg-subtle);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Earning Reports -->

                <!-- Popular Product -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-title m-0 me-2">
                                <h5 class="mb-1">Popular Products</h5>
                                <p class="card-subtitle">Total 10.4k Visitors</p>
                            </div>
                            <div class="dropdown">
                                <button
                                    class="btn btn-text-secondary rounded-pill text-body-secondary border-0 p-2 me-n1 waves-effect"
                                    type="button" id="popularProduct" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" fdprocessedid="3p66kr">
                                    <i class="icon-base ti tabler-dots-vertical icon-md text-body-secondary"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="popularProduct">
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Last 28 Days</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Last Month</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Last Year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="p-0 m-0">
                                <li class="d-flex mb-6">
                                    <div class="me-4">
                                        <img src="../../assets/img/products/iphone.png" alt="User" class="rounded"
                                            width="46">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Apple iPhone 13</h6>
                                            <small class="text-body d-block">Item: #FXZ-4567</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <p class="mb-0">$999.29</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-6">
                                    <div class="me-4">
                                        <img src="../../assets/img/products/nike-air-jordan.png" alt="User"
                                            class="rounded" width="46">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Nike Air Jordan</h6>
                                            <small class="text-body d-block">Item: #FXZ-3456</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <p class="mb-0">$72.40</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-6">
                                    <div class="me-4">
                                        <img src="../../assets/img/products/headphones.png" alt="User"
                                            class="rounded" width="46">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Beats Studio 2</h6>
                                            <small class="text-body d-block">Item: #FXZ-9485</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <p class="mb-0">$99</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-6">
                                    <div class="me-4">
                                        <img src="../../assets/img/products/apple-watch.png" alt="User"
                                            class="rounded" width="46">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Apple Watch Series 7</h6>
                                            <small class="text-body d-block">Item: #FXZ-2345</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <p class="mb-0">$249.99</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-6">
                                    <div class="me-4">
                                        <img src="../../assets/img/products/amazon-echo.png" alt="User"
                                            class="rounded" width="46">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Amazon Echo Dot</h6>
                                            <small class="text-body d-block">Item: #FXZ-8959</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <p class="mb-0">$79.40</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="me-4">
                                        <img src="../../assets/img/products/play-station.png" alt="User"
                                            class="rounded" width="46">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Play Station Console</h6>
                                            <small class="text-body d-block">Item: #FXZ-7892</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <p class="mb-0">$129.48</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/ Popular Product -->

                <!-- Sales by Countries tabs-->
                <div class="col-xxl-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div class="card-title mb-0">
                                <h5 class="mb-1">Orders by Countries</h5>
                                <p class="card-subtitle">62 deliveries in progress</p>
                            </div>
                            <div class="dropdown">
                                <button
                                    class="btn btn-text-secondary rounded-pill text-body-secondary border-0 p-2 me-n1 waves-effect"
                                    type="button" id="salesByCountryTabs" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" fdprocessedid="v4kf68">
                                    <i class="icon-base ti tabler-dots-vertical icon-md text-body-secondary"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountryTabs">
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Select All</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="nav-align-top">
                                <ul class="nav nav-tabs nav-fill rounded-0 timeline-indicator-advanced" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button type="button" class="nav-link active waves-effect" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-justified-new"
                                            aria-controls="navs-justified-new" aria-selected="true"
                                            fdprocessedid="r1siw">New</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button type="button" class="nav-link waves-effect" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-justified-link-preparing"
                                            aria-controls="navs-justified-link-preparing" aria-selected="false"
                                            tabindex="-1">Preparing</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button type="button" class="nav-link waves-effect" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-justified-link-shipping"
                                            aria-controls="navs-justified-link-shipping" aria-selected="false"
                                            tabindex="-1">Shipping</button>
                                    </li>
                                </ul>
                                <div class="tab-content border-0  mx-1">
                                    <div class="tab-pane fade show active" id="navs-justified-new" role="tabpanel">
                                        <ul class="timeline mb-0">
                                            <li class="timeline-item ps-6">
                                                <span
                                                    class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                    <i class="icon-base ti tabler-circle-check"></i>
                                                </span>
                                                <div class="timeline-event ps-1">
                                                    <div class="timeline-header">
                                                        <small class="text-success text-uppercase">sender</small>
                                                    </div>
                                                    <h6 class="my-50">Myrtle Ullrich</h6>
                                                    <p class="text-body mb-0">101 Boulder, California(CA), 95959</p>
                                                </div>
                                            </li>
                                            <li class="timeline-item ps-6 border-0">
                                                <span
                                                    class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                                    <i class="icon-base ti tabler-map-pin"></i>
                                                </span>
                                                <div class="timeline-event ps-1">
                                                    <div class="timeline-header">
                                                        <small class="text-primary text-uppercase">Receiver</small>
                                                    </div>
                                                    <h6 class="my-50">Barry Schowalter</h6>
                                                    <p class="text-body mb-0">939 Orange, California(CA), 92118</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="border-1 border-light my-4"></div>
                                        <ul class="timeline mb-0">
                                            <li class="timeline-item ps-6">
                                                <span
                                                    class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                    <i class="icon-base ti tabler-circle-check"></i>
                                                </span>
                                                <div class="timeline-event ps-1">
                                                    <div class="timeline-header">
                                                        <small class="text-success text-uppercase">sender</small>
                                                    </div>
                                                    <h6 class="my-50">Veronica Herman</h6>
                                                    <p class="text-body mb-0">162 Windsor, California(CA), 95492</p>
                                                </div>
                                            </li>
                                            <li class="timeline-item ps-6 border-0">
                                                <span
                                                    class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                                    <i class="icon-base ti tabler-map-pin"></i>
                                                </span>
                                                <div class="timeline-event ps-1">
                                                    <div class="timeline-header">
                                                        <small class="text-primary text-uppercase">Receiver</small>
                                                    </div>
                                                    <h6 class="my-50">Helen Jacobs</h6>
                                                    <p class="text-body mb-0">487 Sunset, California(CA), 94043</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="navs-justified-link-preparing" role="tabpanel">
                                        <ul class="timeline mb-0">
                                            <li class="timeline-item ps-6">
                                                <span
                                                    class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                    <i class="icon-base ti tabler-circle-check"></i>
                                                </span>
                                                <div class="timeline-event ps-1">
                                                    <div class="timeline-header">
                                                        <small class="text-success text-uppercase">sender</small>
                                                    </div>
                                                    <h6 class="my-50">Barry Schowalter</h6>
                                                    <p class="text-body mb-0">939 Orange, California(CA), 92118</p>
                                                </div>
                                            </li>
                                            <li class="timeline-item ps-6 border-0">
                                                <span
                                                    class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                                    <i class="icon-base ti tabler-map-pin"></i>
                                                </span>
                                                <div class="timeline-event ps-1">
                                                    <div class="timeline-header">
                                                        <small class="text-primary text-uppercase">Receiver</small>
                                                    </div>
                                                    <h6 class="my-50">Myrtle Ullrich</h6>
                                                    <p class="text-body mb-0">101 Boulder, California(CA), 95959</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="border-1 border-light my-4"></div>
                                        <ul class="timeline mb-0">
                                            <li class="timeline-item ps-6">
                                                <span
                                                    class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                    <i class="icon-base ti tabler-circle-check"></i>
                                                </span>
                                                <div class="timeline-event ps-1">
                                                    <div class="timeline-header">
                                                        <small class="text-success text-uppercase">sender</small>
                                                    </div>
                                                    <h6 class="my-50">Veronica Herman</h6>
                                                    <p class="text-body mb-0">162 Windsor, California(CA), 95492</p>
                                                </div>
                                            </li>
                                            <li class="timeline-item ps-6 border-0">
                                                <span
                                                    class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                                    <i class="icon-base ti tabler-map-pin"></i>
                                                </span>
                                                <div class="timeline-event ps-1">
                                                    <div class="timeline-header">
                                                        <small class="text-primary text-uppercase">Receiver</small>
                                                    </div>
                                                    <h6 class="my-50">Helen Jacobs</h6>
                                                    <p class="text-body mb-0">487 Sunset, California(CA), 94043</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="navs-justified-link-shipping" role="tabpanel">
                                        <ul class="timeline mb-0">
                                            <li class="timeline-item ps-6">
                                                <span
                                                    class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                    <i class="icon-base ti tabler-circle-check"></i>
                                                </span>
                                                <div class="timeline-event ps-1">
                                                    <div class="timeline-header">
                                                        <small class="text-success text-uppercase">sender</small>
                                                    </div>
                                                    <h6 class="my-50">Veronica Herman</h6>
                                                    <p class="text-body mb-0">101 Boulder, California(CA), 95959</p>
                                                </div>
                                            </li>
                                            <li class="timeline-item ps-6 border-0">
                                                <span
                                                    class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                                    <i class="icon-base ti tabler-map-pin"></i>
                                                </span>
                                                <div class="timeline-event ps-1">
                                                    <div class="timeline-header">
                                                        <small class="text-primary text-uppercase">Receiver</small>
                                                    </div>
                                                    <h6 class="my-50">Barry Schowalter</h6>
                                                    <p class="text-body mb-0">939 Orange, California(CA), 92118</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="border-1 border-light my-4"></div>
                                        <ul class="timeline mb-0">
                                            <li class="timeline-item ps-6">
                                                <span
                                                    class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                                    <i class="icon-base ti tabler-circle-check"></i>
                                                </span>
                                                <div class="timeline-event ps-1">
                                                    <div class="timeline-header">
                                                        <small class="text-success text-uppercase">sender</small>
                                                    </div>
                                                    <h6 class="my-50">Myrtle Ullrich</h6>
                                                    <p class="text-body mb-0">162 Windsor, California(CA), 95492</p>
                                                </div>
                                            </li>
                                            <li class="timeline-item ps-6 border-0">
                                                <span
                                                    class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                                    <i class="icon-base ti tabler-map-pin"></i>
                                                </span>
                                                <div class="timeline-event ps-1">
                                                    <div class="timeline-header">
                                                        <small class="text-primary text-uppercase">Receiver</small>
                                                    </div>
                                                    <h6 class="my-50">Helen Jacobs</h6>
                                                    <p class="text-body mb-0">487 Sunset, California(CA), 94043</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Sales by Countries tabs -->

                <!-- Transactions -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-title m-0 me-2">
                                <h5 class="mb-1">Transactions</h5>
                                <p class="card-subtitle">Total 58 Transactions done in this Month</p>
                            </div>
                            <div class="dropdown">
                                <button
                                    class="btn btn-text-secondary rounded-pill text-body-secondary border-0 p-2 me-n1 waves-effect"
                                    type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" fdprocessedid="rwk5cr">
                                    <i class="icon-base ti tabler-dots-vertical icon-md text-body-secondary"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Last 28 Days</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Last Month</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Last Year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="p-0 m-0">
                                <li class="d-flex mb-3 pb-1 align-items-center">
                                    <div class="badge bg-label-primary me-4 rounded p-1_5">
                                        <i class="icon-base ti tabler-wallet icon-md"></i>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Wallet</h6>
                                            <small class="text-body d-block">Starbucks</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0 text-danger">-$75</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-3 pb-1 align-items-center">
                                    <div class="badge bg-label-success me-4 rounded p-1_5">
                                        <i class="icon-base ti tabler-browser-check icon-md"></i>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Bank Transfer</h6>
                                            <small class="text-body d-block">Add Money</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0 text-success">+$480</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-3 pb-1 align-items-center">
                                    <div class="badge bg-label-danger me-4 rounded p-1_5">
                                        <i class="icon-base ti tabler-brand-paypal icon-md"></i>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Paypal</h6>
                                            <small class="text-body d-block">Client Payment</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0 text-success">+$268</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-3 pb-1 align-items-center">
                                    <div class="badge bg-label-secondary me-4 rounded p-1_5">
                                        <i class="icon-base ti tabler-credit-card icon-md"></i>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Master Card</h6>
                                            <small class="text-body d-block">Ordered iPhone 13</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0 text-danger">-$699</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-3 pb-1 align-items-center">
                                    <div class="badge bg-label-info me-4 rounded p-1_5">
                                        <i class="icon-base ti tabler-currency-dollar icon-md"></i>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Bank Transactions</h6>
                                            <small class="text-body d-block">Refund</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0 text-success">+$98</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-3 pb-1 align-items-center">
                                    <div class="badge bg-label-danger me-4 rounded p-1_5">
                                        <i class="icon-base ti tabler-brand-paypal icon-md"></i>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Paypal</h6>
                                            <small class="text-body d-block">Client Payment</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0 text-success">+$126</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="badge bg-label-success me-4 rounded p-1_5">
                                        <i class="icon-base ti tabler-building-bank icon-md"></i>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Bank Transfer</h6>
                                            <small class="text-body d-block">Pay Office Rent</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0 text-danger">-$1290</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/ Transactions -->

                <!-- Invoice table -->
                <div class="col-xxl-8">
                    <div class="card">
                        <div class="card-datatable table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
                                <div class="row mx-3 justify-content-between">
                                    <div
                                        class="align-items-center dt-layout-start col-md-auto col-12 d-flex justify-content-center justify-content-md-start gap-2">
                                        <div class="dt-length me-0 mb-md-6 mb-6"><label
                                                for="dt-length-0">Show</label><select name="DataTables_Table_0_length"
                                                aria-controls="DataTables_Table_0" class="form-select"
                                                id="dt-length-0" fdprocessedid="8crd">
                                                <option value="6">6</option>
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select></div>
                                        <div class="dt-buttons btn-group flex-wrap mb-0"><button class="btn btn-primary"
                                                tabindex="0" aria-controls="DataTables_Table_0" type="button"
                                                fdprocessedid="w08t6q"><span><i
                                                        class="icon-base icon-16px ti tabler-plus me-md-2"></i><span
                                                        class="d-md-inline-block d-none">Create
                                                        Invoice</span></span></button> </div>
                                    </div>
                                    <div
                                        class="d-md-flex align-items-center dt-layout-end col-md-auto justify-content-md-between justify-content-center d-flex flex-wrap gap-4 mb-sm-0 mb-4 mt-0">
                                        <div class="dt-search"><input type="search" class="form-control"
                                                id="dt-search-0" placeholder="Search Invoice"
                                                aria-controls="DataTables_Table_0"><label for="dt-search-0"></label>
                                        </div>
                                        <div class="invoice_status"><select id="UserRole" class="form-select"
                                                fdprocessedid="xhcmw">
                                                <option value=""> Invoice Status </option>
                                                <option value="Downloaded" class="text-capitalize">Downloaded</option>
                                                <option value="Draft" class="text-capitalize">Draft</option>
                                                <option value="Paid" class="text-capitalize">Paid</option>
                                                <option value="Partial Payment" class="text-capitalize">Partial Payment
                                                </option>
                                                <option value="Past Due" class="text-capitalize">Past Due</option>
                                                <option value="Sent" class="text-capitalize">Sent</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="justify-content-between dt-layout-table">
                                    <div
                                        class="d-md-flex justify-content-between align-items-center dt-layout-full table-responsive">
                                        <table class="table table-sm datatable-invoice border-top dataTable dtr-column"
                                            id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info"
                                            style="width: 100%;">
                                            <colgroup>
                                                <col data-dt-column="1" style="width: 81.9px;">
                                                <col data-dt-column="2" style="width: 131.538px;">
                                                <col data-dt-column="3" style="width: 137.1px;">
                                                <col data-dt-column="4" style="width: 130.963px;">
                                                <col data-dt-column="5" style="width: 204.825px;">
                                                <col data-dt-column="7" style="width: 233.663px;">
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th data-dt-column="0"
                                                        class="control dt-orderable-asc dt-orderable-desc dtr-hidden"
                                                        rowspan="1" colspan="1" aria-label=": Activate to sort"
                                                        tabindex="0" style="display: none;"><span
                                                            class="dt-column-title" role="button"></span><span
                                                            class="dt-column-order"></span></th>
                                                    <th data-dt-column="1" rowspan="1" colspan="1"
                                                        class="dt-select dt-orderable-none" aria-label=""><span
                                                            class="dt-column-title"></span><span
                                                            class="dt-column-order"></span><input
                                                            class="form-check-input" type="checkbox"
                                                            aria-label="Select all rows"></th>
                                                    <th data-dt-column="2" rowspan="1" colspan="1"
                                                        class="dt-orderable-asc dt-orderable-desc dt-ordering-desc"
                                                        aria-sort="descending"
                                                        aria-label="#: Activate to remove sorting" tabindex="0"><span
                                                            class="dt-column-title" role="button">#</span><span
                                                            class="dt-column-order"></span></th>
                                                    <th data-dt-column="3" rowspan="1" colspan="1"
                                                        class="dt-orderable-asc dt-orderable-desc"
                                                        aria-label="Status: Activate to sort" tabindex="0"><span
                                                            class="dt-column-title" role="button">Status</span><span
                                                            class="dt-column-order"></span></th>
                                                    <th data-dt-column="4" rowspan="1" colspan="1"
                                                        class="dt-orderable-asc dt-orderable-desc dt-type-numeric"
                                                        aria-label="Total: Activate to sort" tabindex="0"><span
                                                            class="dt-column-title" role="button">Total</span><span
                                                            class="dt-column-order"></span></th>
                                                    <th data-dt-column="5" rowspan="1" colspan="1"
                                                        class="dt-orderable-asc dt-orderable-desc"
                                                        aria-label="Issued Date: Activate to sort" tabindex="0"><span
                                                            class="dt-column-title" role="button">Issued
                                                            Date</span><span class="dt-column-order"></span></th>
                                                    <th data-dt-column="7" rowspan="1" colspan="1"
                                                        class="dt-orderable-none" aria-label="Actions"><span
                                                            class="dt-column-title">Actions</span><span
                                                            class="dt-column-order"></span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="control dtr-hidden" tabindex="0"
                                                        style="display: none;"></td>
                                                    <td class="dt-select"><input aria-label="Select row"
                                                            class="form-check-input" type="checkbox"></td>
                                                    <td class="sorting_1"><a href="#">#5089</a>
                                                    </td>
                                                    <td>
                                                        <span class="d-inline-block" data-bs-toggle="tooltip"
                                                            data-bs-html="true"
                                                            aria-label="&lt;span&gt;
              Sent&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Balance:&lt;/span&gt; 0&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Due Date:&lt;/span&gt; 05/09/2020
            "
                                                            data-bs-original-title="&lt;span&gt;
              Sent&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Balance:&lt;/span&gt; 0&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Due Date:&lt;/span&gt; 05/09/2020
            ">
                                                            <span class="badge p-1_5 rounded-pill bg-label-secondary"><i
                                                                    class="icon-base icon-16px ti tabler-circle-check"></i></span>
                                                        </span>

                                                    </td>
                                                    <td class="dt-type-numeric"><span class="d-none">3077</span>$3077
                                                    </td>
                                                    <td>
                                                        <span class="d-none">20200508</span>
                                                        09 May 2020
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center"><a href="javascript:;"
                                                                data-bs-toggle="tooltip"
                                                                class="btn btn-icon delete-record"
                                                                data-bs-placement="top" aria-label="Delete"
                                                                data-bs-original-title="Delete"><i
                                                                    class="icon-base ti tabler-trash icon-md"></i></a><a
                                                                href="#" data-bs-toggle="tooltip"
                                                                class="btn btn-icon" data-bs-placement="top"
                                                                aria-label="Preview Invoice"
                                                                data-bs-original-title="Preview Invoice"><i
                                                                    class="icon-base ti tabler-eye icon-md"></i></a>
                                                            <div class="dropdown"><a href="javascript:;"
                                                                    class="btn dropdown-toggle hide-arrow btn-icon p-0"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="icon-base ti tabler-dots-vertical icon-md"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end"><a
                                                                        href="javascript:;"
                                                                        class="dropdown-item">Download</a><a
                                                                        href="#"
                                                                        class="dropdown-item">Edit</a><a
                                                                        href="javascript:;"
                                                                        class="dropdown-item">Duplicate</a></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="control dtr-hidden" tabindex="0"
                                                        style="display: none;"></td>
                                                    <td class="dt-select"><input aria-label="Select row"
                                                            class="form-check-input" type="checkbox"></td>
                                                    <td class="sorting_1"><a href="#">#5041</a>
                                                    </td>
                                                    <td>
                                                        <span class="d-inline-block" data-bs-toggle="tooltip"
                                                            data-bs-html="true"
                                                            aria-label="&lt;span&gt;
              Sent&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Balance:&lt;/span&gt; 0&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Due Date:&lt;/span&gt; 11/19/2020
            "
                                                            data-bs-original-title="&lt;span&gt;
              Sent&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Balance:&lt;/span&gt; 0&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Due Date:&lt;/span&gt; 11/19/2020
            ">
                                                            <span class="badge p-1_5 rounded-pill bg-label-secondary"><i
                                                                    class="icon-base icon-16px ti tabler-circle-check"></i></span>
                                                        </span>

                                                    </td>
                                                    <td class="dt-type-numeric"><span class="d-none">2230</span>$2230
                                                    </td>
                                                    <td>
                                                        <span class="d-none">20201118</span>
                                                        19 Nov 2020
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center"><a href="javascript:;"
                                                                data-bs-toggle="tooltip"
                                                                class="btn btn-icon delete-record"
                                                                data-bs-placement="top" aria-label="Delete"
                                                                data-bs-original-title="Delete"><i
                                                                    class="icon-base ti tabler-trash icon-md"></i></a><a
                                                                href="#" data-bs-toggle="tooltip"
                                                                class="btn btn-icon" data-bs-placement="top"
                                                                aria-label="Preview Invoice"
                                                                data-bs-original-title="Preview Invoice"><i
                                                                    class="icon-base ti tabler-eye icon-md"></i></a>
                                                            <div class="dropdown"><a href="javascript:;"
                                                                    class="btn dropdown-toggle hide-arrow btn-icon p-0"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="icon-base ti tabler-dots-vertical icon-md"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end"><a
                                                                        href="javascript:;"
                                                                        class="dropdown-item">Download</a><a
                                                                        href="#"
                                                                        class="dropdown-item">Edit</a><a
                                                                        href="javascript:;"
                                                                        class="dropdown-item">Duplicate</a></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="control dtr-hidden" tabindex="0"
                                                        style="display: none;"></td>
                                                    <td class="dt-select"><input aria-label="Select row"
                                                            class="form-check-input" type="checkbox"></td>
                                                    <td class="sorting_1"><a href="#">#5027</a>
                                                    </td>
                                                    <td>
                                                        <span class="d-inline-block" data-bs-toggle="tooltip"
                                                            data-bs-html="true"
                                                            aria-label="&lt;span&gt;
              Partial Payment&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Balance:&lt;/span&gt; 0&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Due Date:&lt;/span&gt; 09/25/2020
            "
                                                            data-bs-original-title="&lt;span&gt;
              Partial Payment&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Balance:&lt;/span&gt; 0&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Due Date:&lt;/span&gt; 09/25/2020
            ">
                                                            <span class="badge p-1_5 rounded-pill bg-label-success"><i
                                                                    class="icon-base icon-16px ti tabler-circle-half-2"></i></span>
                                                        </span>

                                                    </td>
                                                    <td class="dt-type-numeric"><span class="d-none">2787</span>$2787
                                                    </td>
                                                    <td>
                                                        <span class="d-none">20200924</span>
                                                        25 Sept 2020
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center"><a href="javascript:;"
                                                                data-bs-toggle="tooltip"
                                                                class="btn btn-icon delete-record"
                                                                data-bs-placement="top" aria-label="Delete"
                                                                data-bs-original-title="Delete"><i
                                                                    class="icon-base ti tabler-trash icon-md"></i></a><a
                                                                href="#" data-bs-toggle="tooltip"
                                                                class="btn btn-icon" data-bs-placement="top"
                                                                aria-label="Preview Invoice"
                                                                data-bs-original-title="Preview Invoice"><i
                                                                    class="icon-base ti tabler-eye icon-md"></i></a>
                                                            <div class="dropdown"><a href="javascript:;"
                                                                    class="btn dropdown-toggle hide-arrow btn-icon p-0"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="icon-base ti tabler-dots-vertical icon-md"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end"><a
                                                                        href="javascript:;"
                                                                        class="dropdown-item">Download</a><a
                                                                        href="#"
                                                                        class="dropdown-item">Edit</a><a
                                                                        href="javascript:;"
                                                                        class="dropdown-item">Duplicate</a></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="control dtr-hidden" tabindex="0"
                                                        style="display: none;"></td>
                                                    <td class="dt-select"><input aria-label="Select row"
                                                            class="form-check-input" type="checkbox"></td>
                                                    <td class="sorting_1"><a href="#">#5024</a>
                                                    </td>
                                                    <td>
                                                        <span class="d-inline-block" data-bs-toggle="tooltip"
                                                            data-bs-html="true"
                                                            aria-label="&lt;span&gt;
              Partial Payment&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Balance:&lt;/span&gt; -$202&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Due Date:&lt;/span&gt; 08/02/2020
            "
                                                            data-bs-original-title="&lt;span&gt;
              Partial Payment&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Balance:&lt;/span&gt; -$202&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Due Date:&lt;/span&gt; 08/02/2020
            ">
                                                            <span class="badge p-1_5 rounded-pill bg-label-success"><i
                                                                    class="icon-base icon-16px ti tabler-circle-half-2"></i></span>
                                                        </span>

                                                    </td>
                                                    <td class="dt-type-numeric"><span class="d-none">5285</span>$5285
                                                    </td>
                                                    <td>
                                                        <span class="d-none">20200801</span>
                                                        02 Aug 2020
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center"><a href="javascript:;"
                                                                data-bs-toggle="tooltip"
                                                                class="btn btn-icon delete-record"
                                                                data-bs-placement="top" aria-label="Delete"
                                                                data-bs-original-title="Delete"><i
                                                                    class="icon-base ti tabler-trash icon-md"></i></a><a
                                                                href="#" data-bs-toggle="tooltip"
                                                                class="btn btn-icon" data-bs-placement="top"
                                                                aria-label="Preview Invoice"
                                                                data-bs-original-title="Preview Invoice"><i
                                                                    class="icon-base ti tabler-eye icon-md"></i></a>
                                                            <div class="dropdown"><a href="javascript:;"
                                                                    class="btn dropdown-toggle hide-arrow btn-icon p-0"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="icon-base ti tabler-dots-vertical icon-md"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end"><a
                                                                        href="javascript:;"
                                                                        class="dropdown-item">Download</a><a
                                                                        href="#"
                                                                        class="dropdown-item">Edit</a><a
                                                                        href="javascript:;"
                                                                        class="dropdown-item">Duplicate</a></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="control dtr-hidden" tabindex="0"
                                                        style="display: none;"></td>
                                                    <td class="dt-select"><input aria-label="Select row"
                                                            class="form-check-input" type="checkbox"></td>
                                                    <td class="sorting_1"><a href="#">#5020</a>
                                                    </td>
                                                    <td>
                                                        <span class="d-inline-block" data-bs-toggle="tooltip"
                                                            data-bs-html="true"
                                                            aria-label="&lt;span&gt;
              Downloaded&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Balance:&lt;/span&gt; 0&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Due Date:&lt;/span&gt; 12/15/2020
            "
                                                            data-bs-original-title="&lt;span&gt;
              Downloaded&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Balance:&lt;/span&gt; 0&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Due Date:&lt;/span&gt; 12/15/2020
            ">
                                                            <span class="badge p-1_5 rounded-pill bg-label-info"><i
                                                                    class="icon-base icon-16px ti tabler-arrow-down-circle"></i></span>
                                                        </span>

                                                    </td>
                                                    <td class="dt-type-numeric"><span class="d-none">5219</span>$5219
                                                    </td>
                                                    <td>
                                                        <span class="d-none">20201214</span>
                                                        15 Dec 2020
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center"><a href="javascript:;"
                                                                data-bs-toggle="tooltip"
                                                                class="btn btn-icon delete-record"
                                                                data-bs-placement="top" aria-label="Delete"
                                                                data-bs-original-title="Delete"><i
                                                                    class="icon-base ti tabler-trash icon-md"></i></a><a
                                                                href="#" data-bs-toggle="tooltip"
                                                                class="btn btn-icon" data-bs-placement="top"
                                                                aria-label="Preview Invoice"
                                                                data-bs-original-title="Preview Invoice"><i
                                                                    class="icon-base ti tabler-eye icon-md"></i></a>
                                                            <div class="dropdown"><a href="javascript:;"
                                                                    class="btn dropdown-toggle hide-arrow btn-icon p-0"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="icon-base ti tabler-dots-vertical icon-md"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end"><a
                                                                        href="javascript:;"
                                                                        class="dropdown-item">Download</a><a
                                                                        href="#"
                                                                        class="dropdown-item">Edit</a><a
                                                                        href="javascript:;"
                                                                        class="dropdown-item">Duplicate</a></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="control dtr-hidden" tabindex="0"
                                                        style="display: none;"></td>
                                                    <td class="dt-select"><input aria-label="Select row"
                                                            class="form-check-input" type="checkbox"></td>
                                                    <td class="sorting_1"><a href="#">#4995</a>
                                                    </td>
                                                    <td>
                                                        <span class="d-inline-block" data-bs-toggle="tooltip"
                                                            data-bs-html="true"
                                                            aria-label="&lt;span&gt;
              Partial Payment&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Balance:&lt;/span&gt; 0&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Due Date:&lt;/span&gt; 06/09/2020
            "
                                                            data-bs-original-title="&lt;span&gt;
              Partial Payment&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Balance:&lt;/span&gt; 0&lt;br&gt;
              &lt;span class=&quot;fw-medium&quot;&gt;Due Date:&lt;/span&gt; 06/09/2020
            ">
                                                            <span class="badge p-1_5 rounded-pill bg-label-success"><i
                                                                    class="icon-base icon-16px ti tabler-circle-half-2"></i></span>
                                                        </span>

                                                    </td>
                                                    <td class="dt-type-numeric"><span class="d-none">3313</span>$3313
                                                    </td>
                                                    <td>
                                                        <span class="d-none">20200608</span>
                                                        09 Jun 2020
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center"><a href="javascript:;"
                                                                data-bs-toggle="tooltip"
                                                                class="btn btn-icon delete-record"
                                                                data-bs-placement="top" aria-label="Delete"
                                                                data-bs-original-title="Delete"><i
                                                                    class="icon-base ti tabler-trash icon-md"></i></a><a
                                                                href="#" data-bs-toggle="tooltip"
                                                                class="btn btn-icon" data-bs-placement="top"
                                                                aria-label="Preview Invoice"
                                                                data-bs-original-title="Preview Invoice"><i
                                                                    class="icon-base ti tabler-eye icon-md"></i></a>
                                                            <div class="dropdown"><a href="javascript:;"
                                                                    class="btn dropdown-toggle hide-arrow btn-icon p-0"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="icon-base ti tabler-dots-vertical icon-md"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end"><a
                                                                        href="javascript:;"
                                                                        class="dropdown-item">Download</a><a
                                                                        href="#"
                                                                        class="dropdown-item">Edit</a><a
                                                                        href="javascript:;"
                                                                        class="dropdown-item">Duplicate</a></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot></tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="row mx-3 justify-content-between">
                                    <div
                                        class="align-items-center dt-layout-start col-md-auto col-12 d-flex justify-content-center justify-content-md-start gap-2">
                                        <div class="dt-info" aria-live="polite" id="DataTables_Table_0_info"
                                            role="status">Showing 1 to 6 of 50 entries</div>
                                    </div>
                                    <div
                                        class="d-md-flex align-items-center dt-layout-end col-md-auto justify-content-md-between justify-content-center d-flex flex-wrap gap-4 mb-sm-0 mb-4 mt-0">
                                        <div class="dt-paging">
                                            <nav aria-label="pagination">
                                                <ul class="pagination">
                                                    <li class="dt-paging-button page-item disabled"><button
                                                            class="page-link first" role="link" type="button"
                                                            aria-controls="DataTables_Table_0" aria-disabled="true"
                                                            aria-label="First" data-dt-idx="first" tabindex="-1"><i
                                                                class="icon-base ti tabler-chevrons-left scaleX-n1-rtl icon-18px"></i></button>
                                                    </li>
                                                    <li class="dt-paging-button page-item disabled"><button
                                                            class="page-link previous" role="link" type="button"
                                                            aria-controls="DataTables_Table_0" aria-disabled="true"
                                                            aria-label="Previous" data-dt-idx="previous"
                                                            tabindex="-1"><i
                                                                class="icon-base ti tabler-chevron-left scaleX-n1-rtl icon-18px"></i></button>
                                                    </li>
                                                    <li class="dt-paging-button page-item active"><button
                                                            class="page-link" role="link" type="button"
                                                            aria-controls="DataTables_Table_0" aria-current="page"
                                                            data-dt-idx="0" fdprocessedid="9w8r58">1</button></li>
                                                    <li class="dt-paging-button page-item"><button class="page-link"
                                                            role="link" type="button"
                                                            aria-controls="DataTables_Table_0" data-dt-idx="1"
                                                            fdprocessedid="ig2pa">2</button></li>
                                                    <li class="dt-paging-button page-item"><button class="page-link"
                                                            role="link" type="button"
                                                            aria-controls="DataTables_Table_0" data-dt-idx="2"
                                                            fdprocessedid="4m5t77">3</button></li>
                                                    <li class="dt-paging-button page-item"><button class="page-link"
                                                            role="link" type="button"
                                                            aria-controls="DataTables_Table_0" data-dt-idx="3"
                                                            fdprocessedid="shwx6f">4</button></li>
                                                    <li class="dt-paging-button page-item"><button class="page-link"
                                                            role="link" type="button"
                                                            aria-controls="DataTables_Table_0" data-dt-idx="4"
                                                            fdprocessedid="n8qou">5</button></li>
                                                    <li class="dt-paging-button page-item disabled"><button
                                                            class="page-link ellipsis" role="link" type="button"
                                                            aria-controls="DataTables_Table_0" aria-disabled="true"
                                                            data-dt-idx="ellipsis" tabindex="-1">…</button></li>
                                                    <li class="dt-paging-button page-item"><button class="page-link"
                                                            role="link" type="button"
                                                            aria-controls="DataTables_Table_0" data-dt-idx="8"
                                                            fdprocessedid="1krbte">9</button></li>
                                                    <li class="dt-paging-button page-item"><button
                                                            class="page-link next" role="link" type="button"
                                                            aria-controls="DataTables_Table_0" aria-label="Next"
                                                            data-dt-idx="next" fdprocessedid="cay48"><i
                                                                class="icon-base ti tabler-chevron-right scaleX-n1-rtl icon-18px"></i></button>
                                                    </li>
                                                    <li class="dt-paging-button page-item"><button
                                                            class="page-link last" role="link" type="button"
                                                            aria-controls="DataTables_Table_0" aria-label="Last"
                                                            data-dt-idx="last" fdprocessedid="auxre"><i
                                                                class="icon-base ti tabler-chevrons-right scaleX-n1-rtl icon-18px"></i></button>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Invoice table -->
            </div>
        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
    </div>
@endsection
@section('script')
@endsection
