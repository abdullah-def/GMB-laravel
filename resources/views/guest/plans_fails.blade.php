@extends('layouts.user')

@section('content')

@include('components.guest.nav_faild')




<div class="mt-5">
    

    <div class="">
        
        
        <div class="container-small row flex-center position-relative g-0 ">
            <div class="col-xl-12 col-xxl-9 mb-1" style=" width: 100%; padding: 0; ">
                <form method="GET" action="{{route('plans.show')}}">
                    @csrf
                    <div class="tabs mb-7" id="checkradio">
                        <ul class="nav nav-underline nav-tabs mb-3" id="nav-tab" role="tablist">
                        <li class="nav-item" role="presentation"><button class="nav-link" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab" aria-controls="pills-year" aria-selected="false">Yearly</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link active" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab" aria-controls="pills-month" aria-selected="true">Monthly</button></li>
                        </ul>
                        <input type="hidden" id="price_list" name="slug"  value="{{$plans[0]->slug}}"/>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
                                <div class="row g-3">
                                
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="h-100">
                                            <input class="pricing-plan-radio d-none" type="radio" name="pricingMonthly" value="startupname" checked="checked" id="startup" >
                                            
                                        <div class="position-relative h-100"><label class="stretched-link" for="startup"></label>
                                            
                                            <div class="card h-100 overflow-hidden cursor-pointer">
                                            <div class="bg-holder d-dark-none" style="background-image:url(/assets/img/bg/8.png);background-position:left bottom;background-size:auto;"></div>
                                            <!--/.bg-holder-->
                                            <div class="bg-holder d-light-none" style="background-image:url(/assets/img/bg/8-dark.png);background-position:left bottom;background-size:auto;"></div>
                                            <!--/.bg-holder-->
                                            <div class="card-body d-flex flex-column justify-content-between position-relative">
                                                <div class="d-flex justify-content-between">
                                                <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                                    <div class="d-sm-flex align-items-center mb-3">
                                                    <h3 class="mb-0">Startup</h3>
                                                    </div>
                                                    <p class="fs--1 text-700">For individuals who are interested <br> in giving it a shot first.</p>
                                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                                        <h4 class="fw-bolder me-1">$40</h4>
                                                        <h5 class="fs--1 fw-normal text-700 ms-1">Per month</h5>
                                                    </div>
                                                </div><img class="d-dark-none" src="/assets/img/spot-illustrations/rocket.png" width="54" height="54" alt=""><img class="d-light-none" src="/assets/img/spot-illustrations/rocket-dark.png" width="54" height="54" alt="">
                                                </div>
                                                <div class="row flex-1 justify-content-end">
                                                <div class="col-sm-8 col-md-12">
                                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                                    <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">For 1 Google Business</span></li>
                                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">100 AI Assisted Responses</span></li>
                                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">3 Custom Rules</span></li>
                                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">0.40$ per add. answer</span></li>
                                                    </ul>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
            
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="h-100">
                                            <input class="pricing-plan-radio d-none" type="radio"  name="pricingMonthly"  value="standardname" id="standard">
                                            
                                        <div class="position-relative h-100"><label class="stretched-link" for="standard"></label>
                                            <div class="card h-100 overflow-hidden cursor-pointer">
                                            <div class="bg-holder d-dark-none" style="background-image:url(/assets/img/bg/9.png);background-position:left bottom;background-size:auto;"></div>
                                            <!--/.bg-holder-->
                                            <div class="bg-holder d-light-none" style="background-image:url(/assets/img/bg/9-dark.png);background-position:left bottom;background-size:auto;"></div>
                                            <!--/.bg-holder-->
                                            <div class="card-body d-flex flex-column justify-content-between position-relative">
                                                <div class="d-flex justify-content-between">
                                                <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                                    <div class="d-sm-flex align-items-center mb-3">
                                                    <h3 class="mb-0">Standard</h3>
                                                    </div>
                                                    <p class="fs--1 text-700">For teams that need to create <br> project plans with confidence.</p>
                                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                                    <h4 class="fw-bolder me-1">$70</h4>
                                                    <h5 class="fs--1 fw-normal text-700 ms-1">Per month</h5>
                                                    </div>
                                                </div><img class="d-dark-none" src="/assets/img/spot-illustrations/bag-2.png" width="54" height="54" alt=""><img class="d-light-none" src="/assets/img/spot-illustrations/bag-2-dark.png" width="54" height="54" alt="">
                                                </div>
                                                <div class="row flex-1 justify-content-end">
                                                <div class="col-sm-8 col-md-12">
                                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                                    <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">For 2 Google Business</span></li>
                                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">200 AI Assisted Responses</span></li>
                                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">5 Custom Rules</span></li>
                                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">0.35$ per add. answer</span></li>
                                                    </ul>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
            
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="h-100">
                                            <input class="pricing-plan-radio d-none pricing-plan-recommended" type="radio" name="pricingMonthly" value="businessPlusname" id="businessPlus">
                                            
            
                                        <div class="position-relative h-100"><label class="stretched-link" for="businessPlus"></label>
                                            <div class="card h-100 overflow-hidden cursor-pointer bg-warning-soft border-warning warning-boxshadow pricing-business-plus">
                                            <div class="bg-holder d-dark-none" style="background-image:url(/assets/img/bg/bg-11.png);background-position:left bottom;background-size:auto;"></div>
                                            <!--/.bg-holder-->
                                            <div class="bg-holder d-light-none" style="background-image:url(/assets/img/bg/bg-11-dark.png);background-position:left bottom;background-size:auto;"></div>
                                            <!--/.bg-holder-->
                                            <div class="card-body d-flex flex-column justify-content-between position-relative">
                                                <div class="d-flex justify-content-between">
                                                <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                                    <div class="d-sm-flex d-md-block d-lg-flex align-items-center mb-3">
                                                    <h3 class="mb-0">Business Plus</h3><span class="badge ms-sm-3 ms-md-0 ms-lg-3 text-uppercase fs--2 bg-warning">recommended</span>
                                                    </div>
                                                    <p class="fs--1 text-700">For teams that need to manage <br> work across initiatives.</p>
                                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                                    <h4 class="fw-bolder me-1">$140</h4>
                                                    <h5 class="fs--1 fw-normal text-700 ms-1">Per month</h5>
                                                    </div>
                                                </div><img class="d-dark-none" src="/assets/img/spot-illustrations/star.png" width="54" height="54" alt=""><img class="d-light-none" src="/assets/img/spot-illustrations/star-dark.png" width="54" height="54" alt="">
                                                </div>
                                                <div class="row flex-1 justify-content-end">
                                                <div class="col-sm-8 col-md-12">
                                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                                    <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-warning-300">
                                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">For 5 Google Business</span></li>
                                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">500 AI Assisted Responses</span></li>
                                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">7 Custom Rules</span></li>
                                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">0.28$ per add. answer</span></li>
                                                    </ul>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
            
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="h-100">
                                        <div class="position-relative h-100"><label class="stretched-link" for="enterprise"></label>
                                            <div class="card h-100 overflow-hidden cursor-pointer">
                                            <div class="bg-holder d-dark-none" style="background-image:url(/assets/img/bg/10.png);background-position:left bottom;background-size:auto;"></div>
                                            <!--/.bg-holder-->
                                            <div class="bg-holder d-light-none" style="background-image:url(/assets/img/bg/10-dark.png);background-position:left bottom;background-size:auto;"></div>
                                            <!--/.bg-holder-->
                                            <div class="card-body d-flex flex-column justify-content-between position-relative">
                                                <div class="d-flex justify-content-between">
                                                <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                                    <div class="d-sm-flex align-items-center mb-3">
                                                    <h3 class="mb-0">Enterprise</h3>
                                                    </div>
                                                    <p class="fs--1 text-700">For organizations that need <br> additional security and support.</p>
                                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                                    <h4 class="fw-bolder me-1 ">Custom pricing</h4>
                                                    <h5 class="fs--1 fw-normal text-700 ms-1">Contact Sales</h5>
                                                    </div>
                                                </div><img class="d-dark-none" src="/assets/img/spot-illustrations/shield-2.png" width="54" height="54" alt=""><img class="d-light-none" src="/assets/img/spot-illustrations/shield-2-dark.png" width="54" height="54" alt="">
                                                </div>
                                                <div class="row flex-1 justify-content-end">
                                                <div class="col-sm-8 col-md-12">
                                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                                    <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
            
                                                    </ul>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="pills-tabContentYear">
                            <div class="tab-pane fade" id="pills-year" role="tabpanel" aria-labelledby="pills-year-tab">
                                <div class="row g-3">
            
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="h-100">
                                            <input class="pricing-plan-radio d-none" type="radio" name="pricingMonthly" value="startupYearlyname" id="startupYearly" >
                                            <div class="position-relative h-100"><label class="stretched-link" for="startupYearly"></label>
                                            <div class="card h-100 overflow-hidden cursor-pointer">
                                            <div class="bg-holder d-dark-none" style="background-image:url(/assets/img/bg/8.png);background-position:left bottom;background-size:auto;"></div>
                                            <!--/.bg-holder-->
                                            <div class="bg-holder d-light-none" style="background-image:url(/assets/img/bg/8-dark.png);background-position:left bottom;background-size:auto;"></div>
                                            <!--/.bg-holder-->
                                            <div class="card-body d-flex flex-column justify-content-between position-relative">
                                                <div class="d-flex justify-content-between">
                                                <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                                    <div class="d-sm-flex align-items-center mb-3">
                                                    <h3 class="mb-0">Startup</h3>
                                                    </div>
                                                    <p class="fs--1 text-700">For individuals who are interested <br> in giving it a shot first.</p>
                                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                                        <h4 class="fw-bolder me-1">$35</h4>
                                                        <h5 class="fs--1 fw-normal text-700 ms-1">Per year</h5>
                                                    </div>
                                                </div><img class="d-dark-none" src="/assets/img/spot-illustrations/rocket.png" width="54" height="54" alt=""><img class="d-light-none" src="/assets/img/spot-illustrations/rocket-dark.png" width="54" height="54" alt="">
                                                </div>
                                                <div class="row flex-1 justify-content-end">
                                                <div class="col-sm-8 col-md-12">
                                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                                    <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                                    <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">For 1 Google Business</span></li>
                                                    <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">100 AI Assisted Responses</span></li>
                                                    <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">3 Custom Rules</span></li>
                                                    <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">0.35$ per add. answer</span></li>
                                                    </ul>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
            
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="h-100">
                                            <input class="pricing-plan-radio d-none" type="radio" name="pricingMonthly" value="standardYearlyname" id="standardYearly">
                                            
                                        <div class="position-relative h-100"><label class="stretched-link" for="standardYearly"></label>
                                            <div class="card h-100 overflow-hidden cursor-pointer">
                                            <div class="bg-holder d-dark-none" style="background-image:url(/assets/img/bg/9.png);background-position:left bottom;background-size:auto;"></div>
                                            <!--/.bg-holder-->
                                            <div class="bg-holder d-light-none" style="background-image:url(/assets/img/bg/9-dark.png);background-position:left bottom;background-size:auto;"></div>
                                            <!--/.bg-holder-->
                                            <div class="card-body d-flex flex-column justify-content-between position-relative">
                                                <div class="d-flex justify-content-between">
                                                <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                                    <div class="d-sm-flex align-items-center mb-3">
                                                    <h3 class="mb-0">Standard</h3>
                                                    </div>
                                                    <p class="fs--1 text-700">For teams that need to create <br> project plans with confidence.</p>
                                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                                    <h4 class="fw-bolder me-1">$60</h4>
                                                    <h5 class="fs--1 fw-normal text-700 ms-1">Per year</h5>
                                                    </div>
                                                </div><img class="d-dark-none" src="/assets/img/spot-illustrations/bag-2.png" width="54" height="54" alt=""><img class="d-light-none" src="/assets/img/spot-illustrations/bag-2-dark.png" width="54" height="54" alt="">
                                                </div>
                                                <div class="row flex-1 justify-content-end">
                                                <div class="col-sm-8 col-md-12">
                                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                                    <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                                    <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">For 2 Google Business</span></li>
                                                    <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">200 AI Assisted Responses</span></li>
                                                    <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">5 Custom Rules</span></li>
                                                    <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">0.30$ per add. answer</span></li>
                                                    </ul>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
            
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="h-100">
                                            <input class="pricing-plan-radio d-none pricing-plan-recommended" type="radio" name="pricingMonthly" value="businessPlusYearlyname" id="businessPlusYearly">
                                        
                                            <div class="position-relative h-100"><label class="stretched-link" for="businessPlusYearly"></label>
                                            <div class="card h-100 overflow-hidden cursor-pointer bg-warning-soft border-warning warning-boxshadow pricing-business-plus">
                                            <div class="bg-holder d-dark-none" style="background-image:url(/assets/img/bg/bg-11.png);background-position:left bottom;background-size:auto;"></div>
                                            <!--/.bg-holder-->
                                            <div class="bg-holder d-light-none" style="background-image:url(/assets/img/bg/bg-11-dark.png);background-position:left bottom;background-size:auto;"></div>
                                            <!--/.bg-holder-->
                                            <div class="card-body d-flex flex-column justify-content-between position-relative">
                                                <div class="d-flex justify-content-between">
                                                <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                                    <div class="d-sm-flex align-items-center mb-3">
                                                    <h3 class="mb-0">Business Plus</h3><span class="badge ms-sm-3 text-uppercase fs--2 bg-warning">recommended</span>
                                                    </div>
                                                    <p class="fs--1 text-700">For teams that need to manage <br> work across initiatives.</p>
                                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                                    <h4 class="fw-bolder me-1">$110</h4>
                                                    <h5 class="fs--1 fw-normal text-700 ms-1">Per year</h5>
                                                    </div>
                                                </div><img class="d-dark-none" src="/assets/img/spot-illustrations/star.png" width="54" height="54" alt=""><img class="d-light-none" src="/assets/img/spot-illustrations/star-dark.png" width="54" height="54" alt="">
                                                </div>
                                                <div class="row flex-1 justify-content-end">
                                                <div class="col-sm-8 col-md-12">
                                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                                    <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                                    <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">For 5 Google Business</span></li>
                                                    <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">500 AI Assisted Responses</span></li>
                                                    <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">7 Custom Rules</span></li>
                                                    <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">0.22$ per add. answer</span></li>
                                                    </ul>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
            
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="h-100">
                                        <div class="position-relative h-100"><label class="stretched-link" for="enterprise"></label>
                                            <div class="card h-100 overflow-hidden cursor-pointer">
                                            <div class="bg-holder d-dark-none" style="background-image:url(/assets/img/bg/10.png);background-position:left bottom;background-size:auto;"></div>
                                            <!--/.bg-holder-->
                                            <div class="bg-holder d-light-none" style="background-image:url(/assets/img/bg/10-dark.png);background-position:left bottom;background-size:auto;"></div>
                                            <!--/.bg-holder-->
                                            <div class="card-body d-flex flex-column justify-content-between position-relative">
                                                <div class="d-flex justify-content-between">
                                                <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                                    <div class="d-sm-flex align-items-center mb-3">
                                                    <h3 class="mb-0">Enterprise</h3>
                                                    </div>
                                                    <p class="fs--1 text-700">For organizations that need <br> additional security and support.</p>
                                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                                    <h4 class="fw-bolder me-1 ">Custom pricing</h4>
                                                    <h5 class="fs--1 fw-normal text-700 ms-1">Contact Sales</h5>
                                                    </div>
                                                </div><img class="d-dark-none" src="/assets/img/spot-illustrations/shield-2.png" width="54" height="54" alt=""><img class="d-light-none" src="/assets/img/spot-illustrations/shield-2-dark.png" width="54" height="54" alt="">
                                                </div>
                                                <div class="row flex-1 justify-content-end">
                                                <div class="col-sm-8 col-md-12">
                                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                                    <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                                    
                                                    </ul>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="fw-semi-bold">You can get your money back within 7 days <br class="d-none d-sm-block d-lg-none">after subscribing. </p>
                        <div class="d-grid d-sm-flex">
                            <button type="submit" class="btn btn-lg btn-primary d-sm-flex align-items-center mb-3 mb-sm-0 me-sm-3 px-sm-8">Subscribe Now<span class="fas fa-angle-right ms-1"></span></button></div>
                    </div>
                </form>
            </div>

            {{-- scr --}}
            <script>
            document.getElementById("checkradio").addEventListener('click', function (event) {
                const cars = [
                ['startupname','{{$plans[0]->slug}}'],['standardname','{{$plans[2]->slug}}'],['businessPlusname','{{$plans[4]->slug}}'],
                ['startupYearlyname','{{$plans[1]->slug}}'],['standardYearlyname','{{$plans[3]->slug}}'],['businessPlusYearlyname','{{$plans[5]->slug}}']];

                if ( event.target && event.target.matches("input[type='radio']") ) {
                    if (event.target.value == cars[0][0]){
                        document.getElementById("price_list").value = cars[0][1];
                        
                    }
                    else if (event.target.value == cars[1][0]){
                        document.getElementById("price_list").value = cars[1][1];
                    }
                    else if (event.target.value == cars[2][0]){
                        document.getElementById("price_list").value = cars[2][1];
                    }
                    else if (event.target.value == cars[3][0]){
                        document.getElementById("price_list").value = cars[3][1];
                    }
                    else if (event.target.value == cars[4][0]){
                        document.getElementById("price_list").value = cars[4][1];
                    }
                    else if (event.target.value == cars[5][0]){
                        document.getElementById("price_list").value = cars[5][1];
                    }

                    
                }
            });
            </script>
        </div>
      
    </div>

</div>


@endsection