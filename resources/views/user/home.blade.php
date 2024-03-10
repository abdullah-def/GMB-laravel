@extends('layouts.user')

@section('content')
{{-- navs --}}
@include('components.user.left_nav')
@include('components.user.nav')

@if (!auth()->user()->settings->business_name)
            
  @include('components.user.required')

@endif
<style type="text/css"> .notify{ z-index: 1000000; margin-top: 30px; } </style>


<div class="content">

    <div class="pb-5">
        <div class="g-4">
          <div class="row mt-5">
            

            
        

            <div class="col-12 col-xl-7 col-xxl-6">
              <div class="row flex-between-center mb-4 g-3">
                <div class="col-auto">
                  <h3>Responses Performance</h3>
                  <p class="text-700 lh-sm mb-0">Number of responses per day</p>
                </div>
                <div class="col-8 col-sm-4">
                  <select onchange="getdataDe(this.value)" class="form-select form-select-sm mt-2" id="reviewsDate">
                    <option value="7">Last 7 Days</option>
                    <option value="14">Last 14 Days</option>
                    <option value="30">Last 30 Days</option>
                    <option value="60">Last 60 Months</option>
                    <option value="90">Last 90 Months</option>
                  </select>
                </div>
              </div>

              <div class="reviews-chart" id="reviews-chart" style="min-height:320px;width:100%"></div>
            </div>


            <div class="col-12 col-xl-7 col-xxl-6 mb-5">
              {{-- <div class="mb-8">
                <h3 class="mb-2">Subscription Information</h3>
                <p class="text-700 lh-sm mb-0">Take control of your membership</p>
              </div> --}}
              
              <style>
                .pulse{
                  position: relative;
                  width: 15px;
                  height: 15px;
                  
                  background: #22c55e;
                  border-radius: 50%;
                }

                .pulse span {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  background: inherit;
                  border-radius: inherit;
                  opacity: .8;
                  animation: pulseAnimate 4s ease-out infinite;
                  animation-delay: calc(1s * var(--i));
                }

                .pulse-y {
                  position: relative;
                  width: 15px;
                  height: 15px;
                  
                  background: #c7c7c7;
                  border-radius: 50%;

                }
                .pulse-y span {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  background: inherit;
                  border-radius: inherit;
                  opacity: .8;
                  animation: pulseAnimate 4s ease-out infinite;
                  animation-delay: calc(1s * var(--i));
                }

                @keyframes pulseAnimate {
                  100% {
                    transform: scale(2);
                    opacity: 0;
                  }
                }

              </style>
              
              <div class="col-12 " style="height: 100%;">
                <div class="card border border-300 h-100 w-100 overflow-hidden">
                  <div class="bg-holder d-block bg-card" style="background-image:url(../assets/img/spot-illustrations/32.png);background-position: top right;"></div>
                  <!--/.bg-holder-->
                  <div class="d-dark-none">
                    <div class="bg-holder d-none d-sm-block d-xl-none d-xxl-block bg-card" style="background-image:url(../assets/img/spot-illustrations/21.png);background-position: bottom right; background-size: auto;"></div>
                    <!--/.bg-holder-->
                  </div>
                  <div class="d-light-none">
                    <div class="bg-holder d-none d-sm-block d-xl-none d-xxl-block bg-card" style="background-image:url(../assets/img/spot-illustrations/dark_21.png);background-position: bottom right; background-size: auto;"></div>
                    <!--/.bg-holder-->
                  </div>

                  <div class="card-body px-5 position-relative">
                    {{-- <div class="badge badge-phoenix fs--2 badge-phoenix-warning mb-4"><span class="fw-bold">Coming soon</span><span class="fa-solid fa-award ms-1"></span></div> --}}
                    <h3 class="mb-2">Subscription Information</h3>
                    <p class="text-700 lh-sm mb-0">Take control of your membership</p>
                   
                    @if (auth()->user()->plan->auto_automation)
                      

                      <div class="border-0 py-0 mt-3" style="display: flex;text-align: left;height: 35px;align-items: center;">
                        
                        <span class="me-3" style="font-weight: bold;">Auto Response Status</span>
                        <div class=" pulse">
                          <span style="--i:0"></span>
                          <span style="--i:1"></span>
                          <span style="--i:2"></span>
                          <span style="--i:3"></span>
                        </div>
                        
                      </div>
                      
                        
                    @else
                      <div class="border-0 py-0 mt-3" style="display: flex;text-align: left;height: 35px;align-items: center;">
                        
                        <span class="me-3" style="font-weight: bold;">Auto Response Status</span>
                        <div class=" pulse-y">
                          <span style="--i:0"></span>
                          <span style="--i:1"></span>
                          <span style="--i:2"></span>
                          <span style="--i:3"></span>
                        </div>
                        
                      </div>
                    @endif

                    <div class="border-0 py-0 mt-1" style="display: flex;text-align: left;align-items: center;">
                        
                      <span class="me-2" style="font-weight: bold;">Remaining Balance: </span><span>{{auth()->user()->plan->responses}} Responses</span>
                      
                      
                    </div>

                    <div class="border-0 py-0 mt-2" style="display: flex;text-align: left;align-items: center;">
                        
                      <span class="me-2" style="font-weight: bold;">Subscription Expiration: </span><span>{{auth()->user()->plan->ended_at}}</span>
                      
                      
                    </div>

                    <div class="border-0 py-0 mt-2" style="display: flex;text-align: left;align-items: center;">
                        
                      <span class="me-2" style="font-weight: bold;">Your Plan: </span><span>{{auth()->user()->plan->plan}}</span>
                      
                      
                    </div>

                    <div class="border-0 py-0 mt-2" style="display: flex;text-align: left;align-items: center;">
                        
                      <span class="me-2" style="font-weight: bold;">Automatic Renewal Status: </span><span>@if($auto_renew) inactive @else Active @endif</span>
                      
                      
                    </div>

                    <div class="border-0 py-0 mt-5" style="display: flex;text-align: left;align-items: flex-start;flex-direction: row;">
                        
                      <a href="{{route('settingssubscription')}}" class="btn btn-primary me-2" type="button" style=" max-width: 370px; ">Subscription Management</a>
                      <button  class="btn btn-primary " type="button" onclick="showExtra()" style=" max-width: 370px; ">Add Extra Credit</button>
                      
                      
                    </div>

                    
                   
                  </div>
                  @include('components.user.extra')




                  {{-- <div class="card-footer border-0 py-0 px-5 z-index-1">
                    <div class="col-12 col-md-auto flex-md-grow-1"></div>
                  </div> --}}
                </div>
              </div>

            </div>
          </div>

        
        </div>
    </div>

    <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-7 border-t border-300" style="  ">
      <div data-list='{"valueNames":["product","customer","rating","review","time"],"page":6}'>
        <div class="row align-items-end justify-content-between pb-5 g-3">
          <div class="col-auto">
            <h3>Latest responses</h3>
            <p class="text-700 lh-sm mb-0">Latest business responses.</p>
          </div>
          <div class="col-12 col-md-auto">
            <div class="row g-2 gy-3">
              <div class="col-auto flex-1">
                
              </div>
              
            </div>
          </div>
        </div>

        @if (count($response) == 0) 
          <div>
            <div class="fi-ta-empty-state px-6 py-12">
                <div class="fi-ta-empty-state-content mx-auto grid max-w-lg justify-items-center text-center" style=" display: flex; flex-direction: column; align-content: center; align-items: center; ">
                    <div class="fi-ta-empty-state-icon-ctn mb-4 rounded-full bg-gray-100 p-3 dark:bg-gray-500/20" style=" background-color:var(--phoenix-gray-500) ;width: 54px;">
                        <svg class="fi-ta-empty-state-icon h-6 w-6 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
                        </svg>        
                      </div>
            
                    <h4 class="fi-ta-empty-state-heading text-base font-semibold leading-6 text-gray-950 dark:text-white">
                      No responses
                    </h4>
            
                </div>
            </div>
          </div>
        @else
            
       
        
        <div class="table-responsive mx-n1 px-1 scrollbar">
          <table class="table fs--1 mb-0 border-top border-200">
            <thead>
              <tr>
                
                
                <th class="sort align-middle" scope="col" data-sort="customer" style="min-width:200px;">NAME</th>
                <th class="sort align-middle" scope="col" data-sort="rating" style="min-width:110px;">RATING</th>
                <th class="sort align-middle" scope="col" style="max-width:350px;" data-sort="review">REVIEW</th>
                <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:350px;" data-sort="product">RESPONSR</th>
                <th class="sort text-end align-middle" scope="col" data-sort="time">TIME</th>

              </tr>
            </thead>
            <style>
              .tbodyt tr:hover{
                  cursor: pointer;
              }
            </style>
            <tbody class="tbodyt">
              
              @foreach ($response as $item)
                  
              
              
              <tr class="hover-actions-trigger btn-reveal-trigger position-static" onclick="viewwidget(2)">
                
                <td class="align-middle customer white-space-nowrap">
                  <div class="d-flex align-items-center text-900" >
                    <div class="avatar avatar-l"><img class="rounded-circle" src="{{$item->avatar}}" alt=""></div>
                    <h6 class="mb-0 ms-3 text-900">{{$item->name}}</h6>
                  </div>
                </td>

                <td class="align-middle rating white-space-nowrap fs--2">

                  @if ($item->stars == 1)
                  <span class="fa fa-star text-warning"></span>
                  <span class="fa-regular fa-star text-warning-300"></span>
                  <span class="fa-regular fa-star text-warning-300"></span>
                  <span class="fa-regular fa-star text-warning-300"></span>
                  <span class="fa-regular fa-star text-warning-300"></span>
                  
                  @elseif($item->stars == 2)
                  <span class="fa fa-star text-warning"></span>
                  <span class="fa fa-star text-warning"></span>
                  <span class="fa-regular fa-star text-warning-300"></span>
                  <span class="fa-regular fa-star text-warning-300"></span>
                  <span class="fa-regular fa-star text-warning-300"></span>

                  @elseif($item->stars == 3)
                  <span class="fa fa-star text-warning"></span>
                  <span class="fa fa-star text-warning"></span>
                  <span class="fa fa-star text-warning"></span>
                  <span class="fa-regular fa-star text-warning-300"></span>
                  <span class="fa-regular fa-star text-warning-300"></span>

                  @elseif($item->stars == 4)
                  <span class="fa fa-star text-warning"></span>
                  <span class="fa fa-star text-warning"></span>
                  <span class="fa fa-star text-warning"></span>
                  <span class="fa fa-star text-warning"></span>
                  <span class="fa-regular fa-star text-warning-300"></span>

                  @elseif($item->stars == 5)
                  <span class="fa fa-star text-warning"></span>
                  <span class="fa fa-star text-warning"></span>
                  <span class="fa fa-star text-warning"></span>
                  <span class="fa fa-star text-warning"></span>
                  <span class="fa fa-star text-warning"></span>
          
                  @endif
                  
                
                </td>
                
                <td class="align-middle review" style="min-width:350px;">
                  <p class="fs--1 fw-semi-bold text-1000 mb-0">{{ \Illuminate\Support\Str::limit($item->review, 100, '...') }}</p>
                </td>
                
                <td class="align-middle product white-space-nowrap"><div class="fw-semi-bold" >{{ \Illuminate\Support\Str::limit($item->response, 100, '...') }}</div></td>

                <td class="align-middle text-end time white-space-nowrap">
                  <div >
                    <h6 class="text-1000 mb-0">{{$item->created_at}}</h6>
                  </div>
                </td>

              </tr>
              <div class="offcanvas offcanvas-end content-offcanvas offcanvas-backdrop-transparent border-start border-300 shadow-none bg-100 "  id="todo2">
                <div class="offcanvas-body p-0">
                  <div class="p-5 p-md-6">
                    <div class="d-flex flex-between-center align-items-start gap-5 mb-4">
                      <h2 class="fw-bold fs-2 mb-0 text-1000">Review</h2>
                      <button class="btn flex-shrink-0 px-0 py-1"  onclick="viewclose(2)" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fa-solid fa-xmark"></span></button>
                    </div>

                    <div class="mb-6">
                      <div class="d-flex align-items-center mb-3">

                        <div class="avatar avatar-l"><img class="rounded-circle" src="{{$item->avatar}}" alt=""></div>
                        <h6 class="mb-0 ms-3 text-900">{{$item->name}}</h6>
                      </div>
                      <p class="text-1000 mb-0">{{$item->review}}</p>
                    </div>
                    <h2 class="fw-bold fs-2 mb-0 text-1000 mb-3">Response</h2>
                    <p class="text-1000 mb-0">{{$item->response}}</p>
                  </div>
                </div>
              </div>

              @endforeach
             
             

              
            </tbody>
          </table>
        </div>


        <style>
          .disabled  span{
              background-color: transparent !important;
          }
        </style>
        <div class="row align-items-center py-1">
          {{ $response->links() }}
        </div>

        @endif

      </div>
    </div>





    <footer class="footer position-absolute">
      <div class="row g-0 justify-content-between align-items-center h-100">
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 mt-2 mt-sm-0 text-900">© 2023-2024 Ziko AI - A brand of <a class="mx-1" href="https://onewaybakery.com.au/"> Oneway Lebanese Bakery</a></p>
        </div>
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 text-600">v1.0</p>
        </div>
      </div>
    </footer>
  
</div>
<script>
    function viewwidget(x) {
      var todo =document.getElementById(`todo`+x);
      todo.classList.add("show");
      
    }

    function viewclose(x){
      var todo =document.getElementById(`todo`+x);
      todo.classList.remove("show");
    }




  getOptionChart = async (value) => {
    try {
        const response = await fetch(  "{{route('get_chart_reviews')}}" + "?value="+ value );
        return await response.json();
    } catch (ex) {
        alert(ex);
    } 
  };

  getOptionChartNun = async () => {
    try {
        const response = await fetch(  domain + "api/get_chart_reviews_response_nun");
        return await response.json();
    } catch (ex) {
        alert(ex);
    } 
  };


  getOptionChartResponse = async () => {
    try {
        const response = await fetch(  domain + "api/get_chart_reviews_response");
        return await response.json();
    } catch (ex) {
        alert(ex);
    } 
  };
  getOptionChartStars = async () => {
    try {
        const response = await fetch(  domain + "api/get_chart_reviews_stars");
        return await response.json();
    } catch (ex) {
        alert(ex);
    } 
  };

  
  async function getdataDe (value)  {
      const myChart = echarts.init(document.getElementById('reviews-chart'));
      var data_chart = await getOptionChart(value);
      myChart.setOption({
        
        'grid': {
            'right':2,'left':5,'bottom':"20px",'top':"2%",'containLabel':true
        },
        'tooltip': {
            'show':true,
            'trigger': "axis",
            'axisPointer':{'type':"none"}

        },
        'xAxis':[
            {
                'type':"category",
                'data': data_chart[0],

                'splitNumber': 15,
                'splitLine': {
                    'show':true,
                    //  'interval':0,
                    'lineStyle': {
                        'color': ["#525b75"],
                    
                    },
                },
                
                
            }
        ],
        'yAxis':[
            {
                'type':"value",
                'splitLine': {
                    'show':false,
                    'lineStyle': {
                            'color': ["#525b75"],

                    },

                }
            }
        ],
        'series':[
            {
                'data':data_chart[1],
                'type': 'line',
                
            }
        ]

    });
  };
  



  async function initChart () {
   
      const myChart = echarts.init(document.getElementById('reviews-chart'));
      // const myChartTotalReviews = echarts.init(document.getElementById('total-reviews'));
      // const myChartTotalResponse = echarts.init(document.getElementById('response-reviews'));
      // const myChartTotalStars = echarts.init(document.getElementById('reviews-stars'));
      // const myChartTotalnun = echarts.init(document.getElementById('reviews-nun'));

      
      window.addEventListener('resize', function() {
        myChart.resize();
        // myChartTotalResponse.resize();
        // myChartTotalReviews.resize();
        // myChartTotalStars.resize();
        // myChartTotalnun.resize();
      });
      
      var data_chart = await getOptionChart(7);
      console.log(data_chart);
      myChart.setOption({
        
        'grid': {
            'right':2,'left':5,'bottom':"20px",'top':"2%",'containLabel':true
        },
        'tooltip': {
            'show':true,
            'trigger': "axis",
            'axisPointer':{'type':"none"}

        },
        'xAxis':[
            {
                'type':"category",
                'data': data_chart[0],

                'splitNumber': 15,
                'splitLine': {
                    'show':true,
                    //  'interval':0,
                    'lineStyle': {
                        'color': ["#525b75"],
                    
                    },
                },
                
                
            }
        ],
        'yAxis':[
            {
                'type':"value",
                'splitLine': {
                    'show':false,
                    'lineStyle': {
                            'color': ["#525b75"],

                    },

                }
            }
        ],
        'series':[
            {
                'data':data_chart[1],
                'type': 'line',
                
            }
        ]

      });




      
      // myChartTotalStars.setOption(await getOptionChartStars());
      // myChartTotalnun.setOption(await getOptionChartNun());


      
  
    };
  
  window.addEventListener("load",()=>{
  
       initChart();
  });

</script>

@endsection