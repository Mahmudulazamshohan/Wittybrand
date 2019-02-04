@extends('layouts.person')
@section('section')
@php
   use Carbon\Carbon;
@endphp
  <div class="row">
                       <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Account Overview</h4>

                                    <div class="row">
                                        <div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
                                                    <input 
                                                    data-plugin="knob" 
                                                    data-width="80" 
                                                    data-height="80" 
                                                    data-linecap=round
                                                    data-fgColor="#0acf97" 
                                                    value="12" 
                                                    data-skin="tron" 
                                                    data-angleOffset="180"
                                                    data-readOnly=true 
                                                    data-thickness=".1"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">Today Earn</p>
                                                    <h3 class="">{{$earn_structure['total_income']}} P</h3>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
                                                    <input 
                                                    data-plugin="knob" 
                                                    data-width="80" 
                                                    data-height="80" 
                                                    data-linecap=round
                                                    data-fgColor="#f9bc0b" 
                                                    value="92" 
                                                    data-skin="tron" 
                                                    data-angleOffset="180"
                                                     data-readOnly=true 
                                                     data-thickness=".1"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">Sales Analytics</p>
                                                    <h3 class="">$0</h3>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
                                                    <input 
                                                    data-plugin="knob" 
                                                    data-width="80" 
                                                    data-height="80" 
                                                    data-linecap=round
                                                    data-fgColor="#512DA8"
                                                    value="14" 
                                                    data-skin="tron" 
                                                    data-angleOffset="180"
                                                    data-readOnly=true 
                                                    data-thickness=".1"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">Withdraw</p>
                                                    <h3 class="">$0</h3>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
                                                    <input 
                                                    data-plugin="knob" 
                                                    data-width="80" 
                                                    data-height="80" 
                                                    data-linecap=round
                                                    data-fgColor="#2d7bf4" 
                                                    value="60" 
                                                    data-skin="tron" 
                                                    data-angleOffset="180"
                                                    data-readOnly=true 
                                                    data-thickness=".1"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">Total Income</p>
                                                    <h3 class="">$0</h3>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                        </div>
                        <!-- end row -->





                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Wallet Balances</h4>

                                    <div class="table-responsive">
                                        <table class="table table-hover table-centered m-0">

                                            <thead>
                                            <tr>
                                                <th>Month</th>
                                                <th>Income Source</th>
                                                <th>Currency</th>
                                                <th>Total</th>
                                                <th>Daily Point ({{date('Y-m-d')}})</th>
                                                <th>View</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                       
                                            <tr>
                                                <td>
                                                    <h5 class="m-0 font-weight-normal">{{Carbon::parse(date('Y-m-d'))->format('F Y')}}</h5>
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">Video Ads</h5>
                                                    <p class="mb-0 text-muted"><small>Member Since {{Carbon::parse(date('Y-m-d'))->format('F Y')}}</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-primary"></i> POINTS
                                                </td>

                                                <td>
                                                   {{$earn_structure['video_earn']}} P
                                                </td>

                                                <td>
                                                    {{$earn_structure['video_daily_earn']}} P
                                                </td>

                                                <td>
                                                    <a href="#" class="btn btn-sm btn-outline-success ">
                                                        <i class="fa fa-eye"></i></a>
                                                   
                                                </td>
                                            </tr>
                                             <tr>
                                                <td>
                                                    <h5 class="m-0 font-weight-normal">{{Carbon::parse(date('Y-m-d'))->format('F Y')}}</h5>
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">Banner Ads</h5>
                                                    <p class="mb-0 text-muted"><small>Member Since {{Carbon::parse(date('Y-m-d'))->format('F Y')}}</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-primary"></i> POINTS
                                                </td>

                                                <td>
                                                   {{$earn_structure['banner_ad']}} P
                                                </td>

                                                <td>
                                                    {{$earn_structure['banner_ad_daily_earn']}} P
                                                </td>

                                                <td>
                                                    <a href="#" class="btn btn-sm btn-outline-success ">
                                                        <i class="fa fa-eye"></i></a>
                                                   
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="m-0 font-weight-normal">{{Carbon::parse(date('Y-m-d'))->format('F Y')}}</h5>
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">Refferal Earn</h5>
                                                    <p class="mb-0 text-muted"><small>Member Since {{Carbon::parse(date('Y-m-d'))->format('F Y')}}</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-primary"></i> POINTS
                                                </td>

                                                <td>
                                                   {{$earn_structure['ad_refferal_income']}} P
                                                </td>

                                                <td>
                                                    {{$earn_structure['ad_refferal_daily']}} P
                                                </td>

                                                <td>
                                                    <a href="#" class="btn btn-sm btn-outline-success ">
                                                        <i class="fa fa-eye"></i></a>
                                                   
                                                </td>
                                            </tr>
                                           {{--  Media and social --}}
                                            <tr>
                                                <td>
                                                    <h5 class="m-0 font-weight-normal">{{Carbon::parse(date('Y-m-d'))->format('F Y')}}</h5>
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">Media and Social Network</h5>
                                                    <p class="mb-0 text-muted"><small>Member Since {{Carbon::parse(date('Y-m-d'))->format('F Y')}}</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-primary"></i> POINTS
                                                </td>

                                                <td>
                                                   0 P
                                                </td>

                                                <td>
                                                    0 P
                                                </td>

                                                <td>
                                                    <a href="#" class="btn btn-sm btn-outline-success ">
                                                        <i class="fa fa-eye"></i></a>
                                                   
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="m-0 font-weight-normal">{{Carbon::parse(date('Y-m-d'))->format('F Y')}}</h5>
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">Shopping</h5>
                                                    <p class="mb-0 text-muted"><small>Member Since {{Carbon::parse(date('Y-m-d'))->format('F Y')}}</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-primary"></i> POINTS
                                                </td>

                                                <td>
                                                   0 P
                                                </td>

                                                <td>
                                                    0 P
                                                </td>

                                                <td>
                                                    <a href="#" class="btn btn-sm btn-outline-success ">
                                                        <i class="fa fa-eye"></i></a>
                                                   
                                                </td>
                                            </tr>

                                             <tr>
                                                <td>
                                                    <h5 class="m-0 font-weight-normal">{{Carbon::parse(date('Y-m-d'))->format('F Y')}}</h5>
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">Microworks</h5>
                                                    <p class="mb-0 text-muted"><small>Member Since {{Carbon::parse(date('Y-m-d'))->format('F Y')}}</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-primary"></i> POINTS
                                                </td>

                                                <td>
                                                   0 P
                                                </td>

                                                <td>
                                                    0 P
                                                </td>

                                                <td>
                                                    <a href="#" class="btn btn-sm btn-outline-success ">
                                                        <i class="fa fa-eye"></i></a>
                                                   
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="m-0 font-weight-normal">{{Carbon::parse(date('Y-m-d'))->format('F Y')}}</h5>
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">Bonus</h5>
                                                    <p class="mb-0 text-muted"><small>Member Since {{Carbon::parse(date('Y-m-d'))->format('F Y')}}</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-primary"></i> POINTS
                                                </td>

                                                <td>
                                                   0 P
                                                </td>

                                                <td>
                                                    0 P
                                                </td>

                                                <td>
                                                    <a href="#" class="btn btn-sm btn-outline-success ">
                                                        <i class="fa fa-eye"></i></a>
                                                   
                                                </td>
                                            </tr>
                                       


                                            </tbody>
                                            <tfoot>
                                                 <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Total</th>
                                                <th>{{$earn_structure['total_income']}} P</th>
                                                <th>0 P</th>
                                                <th></th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                            </div>

                           
                            </div>
                        </div>
                        <!-- end row -->
@endsection
