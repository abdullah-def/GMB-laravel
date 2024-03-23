<div class="modal fade" id='extra'  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addDealModal" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content bg-100 p-6">
        <div class="modal-header border-0 p-0 mb-2">
          <h3 class="mb-2">Add Extra Credit</h3>
          <button class="btn btn-sm btn-phoenix-secondary" onclick="disappeareExtra()" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times text-danger"></span></button>
        </div>
        <p class=" lh-sm mb-0 mb-4" style="max-width: 500px;">This balance will be valid until the subscription end date.</p>
        <div class="row g-7 ">

            <div class="col-12 col-sm-6 col-xxl-4">
              <img class="mb-4 d-dark-none" src="../../assets/img/spot-illustrations/13.png" alt="" width="120" height="96"  style="width: 120px; height: 96px;">
              <img class="mb-4 d-light-none" src="../../assets/img/spot-illustrations/dark_13.png" alt="" width="120" height="96" style="width: 120px; height: 96px;">
              <div class="mb-sm-5 pricing-column-title-box">
                <h3 class="mb-2">Starter</h3>
                <p class="text-800 mb-0 pe-3">Add 10 responses extra</p>
                
              </div>
              <div class="d-flex align-items-center mb-4">
                <h3 class="display-3 fw-bolder">$4.99</h3>
              </div>

              <form method="GET" action="{{route('extra.show')}}">
                @csrf
                <input type="hidden" name="slug" value="Startup_monthly_extra" >
                <button class="btn btn-lg w-100 mb-6 btn-primary">Buy</button>

              </form>

            </div>

            <div class="col-12 col-sm-6 col-xxl-4"><img class="mb-4 d-dark-none" src="../../assets/img/spot-illustrations/14.png" alt="" width="120" height="96"  style="width: 120px; height: 96px;">
              <img class="mb-4 d-light-none" src="../../assets/img/spot-illustrations/dark_14.png" alt="" width="120" height="96" style="width: 120px; height: 96px;">
              <div class="mb-sm-5 pricing-column-title-box">
                <h3 class="mb-2">Standard</h3>
                <p class="text-800 mb-0 pe-3">Add 40 responses extra</p>
              </div>
              <div class="d-flex align-items-center mb-4">
                <h3 class="display-3 fw-bolder">$10.99</h3>

              </div>


              <form method="GET" action="{{route('extra.show')}}">
                @csrf
                <input type="hidden" name="slug" value="Standard_monthly_extra" >
                <button class="btn btn-lg w-100 mb-6 btn-primary">Buy</button>

              </form>
            </div>

            <div class="col-12 col-sm-6 col-xxl-4"><img class="mb-4 d-dark-none" src="../../assets/img/spot-illustrations/15.png" alt="" width="120" height="96"  style="width: 120px; height: 96px;">
              <img class="mb-4 d-light-none" src="../../assets/img/spot-illustrations/dark_15.png" alt="" width="120" height="96" style="width: 120px; height: 96px;">
              <div class="mb-sm-5 pricing-column-title-box">
                <h3 class="mb-2">Business</h3>
                <p class="text-800 mb-0 pe-3">Add 100 responses extra</p>
              </div>
              <div class="d-flex align-items-center mb-4">
                <h3 class="display-3 fw-bolder">$19.99</h3> 

              </div>


              <form method="GET" action="{{route('extra.show')}}">
                @csrf
                <input type="hidden" name="slug" value="Business_Plus_monthly_extra" >
                <button class="btn btn-lg w-100 mb-6 btn-primary">Buy</button>

              </form>
            </div>
           
          </div>
        </div>
    </div>
</div>
<div  id='extra-back'></div>

{{-- 



--}}

<script>
    function showExtra(){
        let extra = document.getElementById('extra');
        let extra_back = document.getElementById('extra-back');
        extra_back.classList.add("modal-backdrop");
        extra_back.classList.add("fade");
        extra_back.classList.add("show");
        extra.classList.add("show");
  
        extra.style.display = 'block';
  
       
    }


    function disappeareExtra(){
        let extra = document.getElementById('extra');
        let extra_back = document.getElementById('extra-back');
        extra_back.classList.remove("modal-backdrop");
        extra_back.classList.remove("fade");
        extra_back.classList.remove("show");
        extra.classList.remove("show");
  
        extra.style.display = 'none';
  
       
    }

  </script>