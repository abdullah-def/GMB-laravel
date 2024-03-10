<div class="modal fade show"  style="display: block" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addDealModal" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content bg-100 p-6">
      <div class="border-0 p-0 mb-2">
        <h3 class="mb-2">Business Information</h3>
        <p class=" lh-sm mb-0 mb-4" style="max-width: 500px;">Please note, this information will be used by artificial intelligence to better understand your company’s activities and provide more accurate responses.
        </p>
      </div>
      <form method="POST" action="{{route('business')}}">
        @csrf
        <div class="modal-body px-0">
          <div class="row g-4">
            <div class="col-lg-6">

              
              
              <style>
                .required:after {
                  content:" *";
                  color: red;
                }
              </style>
              

              <div class="mb-4"><label class=" required text-1000 fw-bold mb-2">Business Name  </label><input class="form-control" name="BUSINESSNAME" required type="text" placeholder="Enter Business Name"></div>
              <div class="mb-4"><label class="text-1000 fw-bold mb-2">Business Address</label><input class="form-control" name="BUSINESSADDRESS" type="text" placeholder="Enter Business Address"></div>
              <div class="mb-4"><label class="text-1000 fw-bold mb-2">Business Email</label><input class="form-control" name="BUSINESSEMAIL" type="text" placeholder="Enter Business Email"></div>
              <div class="mb-4"><label class="text-1000 fw-bold mb-2">Main Product</label><input class="form-control" name="BUSINESSPRODUCT" type="text" placeholder="Enter Main Product"></div>
 
            </div>

            <div class="col-lg-6">
              
              
              
              
              

              <div class="mb-4"><label class="text-1000 fw-bold mb-2">Business Website</label><input class="form-control" name="BUSINESSWEBSITE" type="text" placeholder="Enter Business Website"></div>
              <div class="mb-4"><label class="text-1000 fw-bold mb-2">Business Phone</label><input class="form-control" name="BUSINESSPHONE" type="text" placeholder="Enter Business Phone"></div>
              <div class="mb-4"><label class="text-1000 fw-bold mb-2">Business Industry</label><input class="form-control" name="BUSINESSINDUSTRY" type="text" placeholder="Enter Business Industry"></div>
              

            </div>
          </div>
        </div>
        <div class="modal-footer border-0 pt-6 px-0 pb-0">

          <button type="submit" class="btn btn-primary my-0">Save Information</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal-backdrop fade show"></div>