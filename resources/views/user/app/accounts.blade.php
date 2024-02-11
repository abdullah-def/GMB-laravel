@extends('layouts.user')

@section('content')
{{-- navs --}}
@include('components.user.left_nav')
@include('components.user.nav')

<div class="content">


    <div class="d-flex flex-center content-min-h">
      <div class="text-center py-9">
        <img class="img-fluid mb-7 d-dark-none" src="/assets/img/spot-illustrations/2.png" width="470" alt="">
        <img class="img-fluid mb-7 d-light-none" src="/assets/img/spot-illustrations/dark_2.png" width="470" alt="">
        <h1 class="text-800 fw-normal mb-5">You have no Business Profiles (Google My Business) associated with Ziko.ai.</h1>
        <button class="btn btn-primary me-4" type="button" data-bs-toggle="modal" data-bs-target="#addDealModal" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path></svg><!-- <span class="fas fa-plus me-2"></span> Font Awesome fontawesome.com -->Add account</button>
      </div>
    </div>
    

    <div class="mb-9">
  
      <div class="d-flex mb-5 " id="scrollspyTables"><span class="fa-stack me-2 ms-n1"><svg class="svg-inline--fa fa-circle fa-stack-2x text-primary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z"></path></svg><!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-list fa-inverse fa-stack-1x text-primary-soft" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M88 48C101.3 48 112 58.75 112 72V120C112 133.3 101.3 144 88 144H40C26.75 144 16 133.3 16 120V72C16 58.75 26.75 48 40 48H88zM480 64C497.7 64 512 78.33 512 96C512 113.7 497.7 128 480 128H192C174.3 128 160 113.7 160 96C160 78.33 174.3 64 192 64H480zM480 224C497.7 224 512 238.3 512 256C512 273.7 497.7 288 480 288H192C174.3 288 160 273.7 160 256C160 238.3 174.3 224 192 224H480zM480 384C497.7 384 512 398.3 512 416C512 433.7 497.7 448 480 448H192C174.3 448 160 433.7 160 416C160 398.3 174.3 384 192 384H480zM16 232C16 218.7 26.75 208 40 208H88C101.3 208 112 218.7 112 232V280C112 293.3 101.3 304 88 304H40C26.75 304 16 293.3 16 280V232zM88 368C101.3 368 112 378.7 112 392V440C112 453.3 101.3 464 88 464H40C26.75 464 16 453.3 16 440V392C16 378.7 26.75 368 40 368H88z" transform="translate(-256 -256)"></path></g></g></svg><!-- <i class="fa-inverse fa-stack-1x text-primary-soft fas fa-list" data-fa-transform="shrink-2"></i> Font Awesome fontawesome.com --></span>
        <div class="col">
          <h3 class="mb-1 text-primary position-relative fw-bold"><span class="bg-soft pe-2">Google My Business accounts</span></h3>
          <p class="mb-0 lh-sm mb-0 text-700">To make use of all Ziko.ai features, make sure you connect your Google My Business account to our toolkit and import you locations.</p>
        </div>
        <div class="ml-2">
          <button class="btn btn-primary me-4" type="button" data-bs-toggle="modal" data-bs-target="#addDealModal" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path></svg><!-- <span class="fas fa-plus me-2"></span> Font Awesome fontawesome.com -->Add account</button>
        </div>
      </div>
  
      <div>
  
        <div id="cartTable" data-list="{&quot;valueNames&quot;:[&quot;products&quot;,&quot;color&quot;,&quot;size&quot;,&quot;price&quot;,&quot;quantity&quot;,&quot;total&quot;],&quot;page&quot;:10}">
          <div class="table-responsive scrollbar mx-n1 px-1">
            <table class="table fs--1 mb-0 border-top border-200">
              <thead>
                <tr>
                  <th class="sort white-space-nowrap align-middle" scope="col" >Account type</th>
                  
                  <th class="sort white-space-nowrap align-middle" scope="col" >Email</th>
  
                  <th class="sort white-space-nowrap align-middle" scope="col"></th>
                </tr>
              </thead>
              <tbody class="list" id="cart-table-body">
                
                <tr class="cart-table-row btn-reveal-trigger">
                  <td class="color align-middle white-space-nowrap fs--1 text-900" style="padding-left: 0.5rem;">Google My Business </td>
  
                  <!-- <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$65</td> -->
                  
                  <td class="color align-middle white-space-nowrap fs--1 text-900">abdullahrefatmo@gmail.com</td>
                  <td class="align-middle white-space-nowrap text-end pe-0 ps-3">
                    <button class="btn btn-sm btn-primary" 
                    data-bs-toggle="modal" 
                    data-bs-target="#exampleModal" 
                    aria-haspopup="true" 
                    aria-expanded="false" 
                    data-bs-reference="parent" >Add profile</button>
                    <button class="btn btn-sm text-500 hover-text-600 me-2"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"></path></svg><!-- <span class="fas fa-trash"></span> Font Awesome fontawesome.com --></button>
                  </td>
                </tr>
               
              </tbody>
            </table>
          </div>
        </div>
  
        <div class="card p-3 mb-3 mt-5">
          <div class="card-body pt-5 pb-0">
  
              <div class="border-300 mb-4">
  
                  <div class="row gx-3 mb-6 gy-6 gy-sm-3">
                      <div class="col-12 col-sm-6">
                          <h4 class="mb-4">Profiles</h4>
                          
                      </div>
                      <table class="table">
                        <thead>
                          <tr>
  
                            <th scope="col">Profile</th>
                            <th scope="col">Account</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="padding-left: 0.5rem;">Automaxed</td>
                            <td>abdullahrefatmo@gmail.com</td>
                            <td class="align-middle white-space-nowrap text-end pe-0 ps-3">
                              <button class="btn btn-sm text-500 hover-text-600 me-2"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"></path></svg><!-- <span class="fas fa-trash"></span> Font Awesome fontawesome.com --></button>
                            </td>
                          </tr>
  
                          <tr>
                            <td style="padding-left: 0.5rem;">Demacia</td>
                            <td>abdullahrefatmo@gmail.com</td>
                            <td class="align-middle white-space-nowrap text-end pe-0 ps-3">
                              <button class="btn btn-sm text-500 hover-text-600 me-2"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"></path></svg><!-- <span class="fas fa-trash"></span> Font Awesome fontawesome.com --></button>
                            </td>
                          </tr>
  
                        </tbody>
                      </table>
                  </div>
  
                  
                  
  
              </div>
  
          </div>
        </div>
  
  
        <div class="card p-3 mb-3 mt-5">
          <div class="card-body pt-5 pb-0">
  
              <div class="border-300 mb-4">
  
                  <div class="row gx-3 mb-6 gy-6 gy-sm-3">
                      <div class="col-12 col-sm-6">
                          <h4 class="mb-4">Business</h4>
                          
                      </div>
                      <table class="table">
                        <thead>
                          <tr>
  
                            <th scope="col">Name</th>
                            <th scope="col">Profile</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="padding-left: 0.5rem;">Oneway Lebanese Bakery</td>
                            <td>Oneway Lebanese Bakery</td>
                            <td class="align-middle white-space-nowrap text-end pe-0 ps-3">
                              <button class="btn btn-sm text-500 hover-text-600 me-2"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"></path></svg><!-- <span class="fas fa-trash"></span> Font Awesome fontawesome.com --></button>
                            </td>
                          </tr>
  
                          <tr>
                            <td style="padding-left: 0.5rem;">Automaxed</td>
                            <td>Automaxed</td>
                            <td class="align-middle white-space-nowrap text-end pe-0 ps-3">
                              <button class="btn btn-sm text-500 hover-text-600 me-2"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"></path></svg><!-- <span class="fas fa-trash"></span> Font Awesome fontawesome.com --></button>
                            </td>
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
  
  
  
  <div class="modal fade" id="addDealModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addDealModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content bg-100">
  
        <div class="card flex-column justify-content-center p-3" style=" text-align: center; ">
          <h5 class="mb-4">Permissions for ZIKO.ai</h5>
          <p class="mb-4">ZIKO.ai requires access permissions to your business locations in Google Maps. This is required to help you in locations management.</p>
          <p>In order to give these permissions, check a box when asked for permissions as shown below:</p>
          <img src="/assets/img/gmb.gif" alt="How to check the right box." class="mb-4">
          <!-- 
          data-bs-dismiss="modal" 
          aria-label="Close" 
          -->
          <button class="btn btn-phoenix-secondary w-100 mb-3"   
          data-bs-toggle="modal" 
          data-bs-target="#exampleModal" 
          aria-haspopup="true" 
          aria-expanded="false" 
          data-bs-reference="parent" 
  
          
          ><svg class="svg-inline--fa fa-google text-danger me-2 fs--1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512" data-fa-i2svg=""><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg><!-- <span class="fab fa-google text-danger me-2 fs--1"></span> Font Awesome fontawesome.com -->Google My Business</button>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="exampleModal"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content bg-100">
  
        <div class="card flex-column justify-content-center p-3" style=" text-align: center; ">
          <h5 class="mb-7 mt-2">Choose profile</h5>
          <div class=" mb-5">
            
            <div class="card d-flex mb-2 pt-3 pb-3" style="flex-direction: row; justify-content: space-around; align-items: center;">
              <div style="width: 50%;">
                <p class="mb-0 lh-sm mb-0 text-muted text-700">Oneway Lebanese Bakery</p>
              </div>
              <div style="width: 50%;">
                <button class="btn btn-phoenix-secondary rounded-pill" type="button"
                data-bs-toggle="modal" 
                data-bs-target="#OnewayLebaneseBakery" 
                aria-haspopup="true" 
                aria-expanded="false" 
                data-bs-reference="parent" >Choose </button>
              </div>
              
            </div>
            
            <div class="card d-flex mb-2 pt-3 pb-3" style="flex-direction: row; justify-content: space-around; align-items: center;">
              <div style="width: 50%;">
                <p class="mb-0 lh-sm mb-0 text-muted text-700">Automaxed</p>
              </div>
              <div style="width: 50%;">
                <button class="btn btn-phoenix-secondary rounded-pill" type="button"
                data-bs-toggle="modal" 
                data-bs-target="#Automaxed" 
                aria-haspopup="true" 
                aria-expanded="false" 
                data-bs-reference="parent" >Choose </button>
              </div>
            </div>
  
          </div>
          
          <div>
            <button class="btn btn-phoenix-secondary rounded-pill" type="button" data-bs-dismiss="modal"  aria-label="Close" >Close </button>
          </div>
  
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="modal fade" id="OnewayLebaneseBakery" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="OnewayLebaneseBakery" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-xl  modal-dialog-centered">
      <div class="modal-content bg-100">
        
        <div class="card todo-list h-100">
          <div class="card-header border-bottom-0 pb-0">
            <div class="row justify-content-between align-items-center mb-4">
              <div class="col-auto">
                <h3 class="text-1100">Select locations you would like to import</h3>
              </div>
            </div>
  
          </div>
  
  
          
          <form method="post" action="{% url 'accounts" class="">
            {% csrf_token %} 
            <div class="card-body py-0 scrollbar to-do-list-body">
              <div class="d-flex hover-actions-trigger py-3 border-top border-bottom">
                <input class="form-check-input flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-1" >
                <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1 cursor-pointer" >
                  <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                    <div class="mb-1 mb-md-0 d-flex align-items-center">
                      <label for="checkbox-todo-1" class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900 cursor-pointer">Oneway Lebanese Bakery</label>
                    </div>
                  </div>
                  <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                    <div class="d-flex lh-1 align-items-center">
                      <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">Lalor, VIC 3075</p>
                      <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">store code: 055949465155545</p>
                      
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            
            <div class="d-flex justify-content-between m-3">
              <button class="btn btn-phoenix-secondary rounded-pill" type="button" data-bs-dismiss="modal"  aria-label="Close" >Close </button>
              <button class="btn btn-phoenix-secondary rounded-pill" type="submit"  id="checkBtn">Import selected</button>
            </div>
          </form>
  
  
          <!-- <div class="card-footer border-0"><a class="fw-bold fs--1 mt-4" href="#!"><svg class="svg-inline--fa fa-plus me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path></svg><span class="fas fa-plus me-1"></span> Font Awesome fontawesome.comAdd new task</a></div> -->
        
        </div>
  
  
  
  
        <!-- <div class="card flex-column justify-content-center p-3" >
          <h4>Select locations you would like to import</h4>
        </div> -->
  
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="Automaxed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Automaxed" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-xl  modal-dialog-centered">
      <div class="modal-content bg-100">
        
        <div class="card todo-list h-100">
          <div class="card-header border-bottom-0 pb-0">
            <div class="row justify-content-between align-items-center mb-4">
              <div class="col-auto">
                <h3 class="text-1100">Select locations you would like to import</h3>
              </div>
            </div>
  
          </div>
  
  
          
          <form method="post" action="{% url 'accounts" class="">
            {% csrf_token %} 
            <div class="card-body py-0 scrollbar to-do-list-body">
              <div class="d-flex hover-actions-trigger py-3 border-top border-bottom">
                <input class="form-check-input flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-1" >
                <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1 cursor-pointer" >
                  <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                    <div class="mb-1 mb-md-0 d-flex align-items-center">
                      <label for="checkbox-todo-1" class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900 cursor-pointer">Automaxed</label>
                    </div>
                  </div>
                  <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                    <div class="d-flex lh-1 align-items-center">
                      <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">Consoleya 5 El-Fadl st</p>
                      <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">store code: 055949465155656</p>
                      
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            
            <div class="d-flex justify-content-between m-3">
              <button class="btn btn-phoenix-secondary rounded-pill" type="button" data-bs-dismiss="modal"  aria-label="Close" >Close </button>
              <button class="btn btn-phoenix-secondary rounded-pill" type="submit"  id="checkBtn">Import selected</button>
            </div>
          </form>
  
  
          <!-- <div class="card-footer border-0"><a class="fw-bold fs--1 mt-4" href="#!"><svg class="svg-inline--fa fa-plus me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path></svg><span class="fas fa-plus me-1"></span> Font Awesome fontawesome.comAdd new task</a></div> -->
        
        </div>
  
  
  
  
        <!-- <div class="card flex-column justify-content-center p-3" >
          <h4>Select locations you would like to import</h4>
        </div> -->
  
      </div>
    </div>
</div>
  
@endsection