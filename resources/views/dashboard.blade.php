@extends('layouts.admin')
@section('content')
    <div class="content">

        <h3 class="text-900 mb-3" data-anchor="" id="example">Dashboard</h3>

        <div class="col-12 col-xxl-6">
            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <div class="card border border-200 shadow-none h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5 class="mb-1">New Subscriptions<span class="badge badge-light-warning rounded-pill fs--1 ms-2"></span></h5>
                                    <h6 class="text-700">Last 7 days</h6>
                                </div>
                                <h4>{{ \App\Stats::subscriptionCount('last week') }}</h4>
                            </div>
                            <div class="d-flex justify-content-center px-4 py-6">
                                {{--                                    <div class="echart-total-orders" style="height: 85px; width: 115px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" data-echarts="{&quot;tooltip&quot;:{&quot;show&quot;:false},&quot;series&quot;:[{&quot;type&quot;:&quot;bar&quot;,&quot;barWidth&quot;:&quot;5px&quot;,&quot;data&quot;:[120,200,150,80,70,110,120],&quot;showBackground&quot;:true,&quot;symbol&quot;:&quot;none&quot;,&quot;itemStyle&quot;:{&quot;borderRadius&quot;:10},&quot;backgroundStyle&quot;:{&quot;borderRadius&quot;:10}}],&quot;grid&quot;:{&quot;right&quot;:10,&quot;left&quot;:10,&quot;bottom&quot;:0,&quot;top&quot;:0}}" _echarts_instance_="ec_1648574158623"><div style="position: relative; width: 115px; height: 85px; padding: 0px; margin: 0px; border-width: 0px; cursor: pointer;"><canvas data-zr-dom-id="zr_0" width="115" height="85" style="position: absolute; left: 0px; top: 0px; width: 115px; height: 85px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>--}}
                            </div>
                            <div class="mt-2">
                                {{--                                    <div class="d-flex align-items-center mb-2">--}}
                                {{--                                        <div class="bullet-item bg-primary me-2"></div>--}}
                                {{--                                        <h6 class="text-900 fw-semi-bold flex-1 mb-0">Completed</h6>--}}
                                {{--                                        <h6 class="text-900 fw-semi-bold mb-0">52%</h6>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="d-flex align-items-center">--}}
                                {{--                                        <div class="bullet-item bg-light-primary me-2"></div>--}}
                                {{--                                        <h6 class="text-900 fw-semi-bold flex-1 mb-0">Pending payment</h6>--}}
                                {{--                                        <h6 class="text-900 fw-semi-bold mb-0">48%</h6>--}}
                                {{--                                    </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card border border-200 shadow-none h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5 class="mb-1">Total Subsciptions<span class="badge badge-light-warning rounded-pill fs--1 ms-2"></span></h5>
                                    <h6 class="text-700">Since beginning</h6>
                                </div>
                                <h4>{{ \App\Stats::subscriptionCount('all') }}</h4>
                            </div>
                            <div class="pb-0 pt-4">
                                {{--                                    <div class="echarts-new-customers" style="height: 180px; width: 100%; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1648574158713"><div style="position: relative; width: 283px; height: 180px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="283" height="180" style="position: absolute; left: 0px; top: 0px; width: 283px; height: 180px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
{{--                    <div class="card border border-200 shadow-none h-100">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex justify-content-between">--}}
{{--                                <div>--}}
{{--                                    <h5 class="mb-2">Paying vs non paying</h5>--}}
{{--                                    <h6 class="text-700">Last 7 days</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-center pt-3">--}}
{{--                                --}}{{--                                    <div style="height:145px;width:140px"><canvas id="payingCustomerChart" width="140" height="140" style="display: block; box-sizing: border-box; height: 140px; width: 140px;"></canvas></div>--}}
{{--                            </div>--}}
{{--                            <div class="mt-3">--}}
{{--                                <div class="d-flex align-items-center mb-2">--}}
{{--                                    <div class="bullet-item bg-primary me-2"></div>--}}
{{--                                    <h6 class="text-900 fw-semi-bold flex-1 mb-0">Paying customer</h6>--}}
{{--                                    <h6 class="text-900 fw-semi-bold mb-0">30%</h6>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="bullet-item bg-light-primary me-2"></div>--}}
{{--                                    <h6 class="text-900 fw-semi-bold flex-1 mb-0">Non-paying customer</h6>--}}
{{--                                    <h6 class="text-900 fw-semi-bold mb-0">70%</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
