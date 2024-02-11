@extends('layouts.user')


@section('content')
@include('components.guest.nav_faild')


<div class="container-fluid bg-300 dark__bg-1200">
    <div class="bg-holder bg-auth-card-overlay" style="background-image:url(/assets/img/bg/37.png);"></div>
    <!--/.bg-holder-->
    <div class="row flex-center position-relative g-0 py-5" style=" min-height: 93vh !important; ">
        <div class="col-11 col-sm-10 col-xl-8">
            <div class="">
                <div class="card-body pe-md-0">
                    <div class="row align-items-center gx-0 gy-7">
                        
                        <h2 class="mb-5">Check out</h2>
                        <div class="row justify-content-between">
                        
                        <div class="col-lg-7 col-xl-7 mb-5" style=" display: flex; align-items: center; justify-content: center; ">
                            <form id="payment-form" action="{{ route('subscription.create') }}" method="POST">
                                @csrf
						        <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">
                                
                                            
                                <h3 class="mb-5">Payment Method</h3>
                                <div id="card-errors" role="alert" class="mb-2"></div>
                                <div class="d-flex">
                                <div class="mb-2">
                                    <label class="form-check-label fs-0 text-900 me-3" for="creditCard">Credit card</label></div>
                                    <img class="h-100 me-2 ms-4 ms-md-0" src="/assets/img/logos/visa.png" alt="">
                                    <img class="h-100 me-2" src="/assets/img/logos/discover.png" alt="">
                                    <img class="h-100 me-2" src="/assets/img/logos/mastercard.png" alt="">
                                    <img class="h-100" src="/assets/img/logos/american_express.png" alt="">
                                </div>
                                <div class="row g-4 mb-3">
                                    
                                    <div class="col-md-6">
                                        <label class="form-label fs-0 text-1000 ps-0 text-none" for="selectCard">Name</label>
                                        <input class="form-control" id="card-holder-name" type="text" placeholder="Ansolo Lazinatov" name="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fs-0 text-1000 ps-0 text-none" for="selectCard">Email</label>
                                        <input class="form-control" id="card-holder-email" type="email" name="email" placeholder="example@example.com" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fs-0 text-1000 ps-0 text-none" for="inputName">Credit Card</label>
        
                                        <div id="card-element"></div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" id="gridCheck" type="checkbox" checked>
                                            <label class="form-check-label text-black fs-0" for="gridCheck">Save As Default Payment Method</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 mb-5 mb-lg-0">
                                    <div class=" d-grid"><button class="btn btn-primary" type="submit" id="card-button" data-secret="{{ $intent->client_secret }}">Pay ${{$plan->price}}</button></div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-5 col-xl-4">
                            <div class="card mt-3 mt-lg-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                <h3 class="mb-0">Summary</h3>
                                </div>
                                <div class="border-dashed border-bottom mt-4">
                                    <div class="ms-n2">
                                        <div class="row align-items-center mb-2 g-3">

                                            <div class="col-8 col-md-7 col-lg-8">
                                                <div class="d-flex align-items-center">
                                                    <h5 class="fw-semi-bold text-1000 lh-base">{{$plan->name}}</h5>
                                                </div>
                                            </div>

                                            <div class="col-2 col-md-3 col-lg-2">
                                                <h6 class="fs--2 mb-0">{{$plan->period}}</h6>
                                            </div>

                                            <div class="col-2 ps-0">
                                                <h5 class="mb-0 fw-semi-bold text-end">${{$plan->one}}</h5>
                                            </div>

                                        </div>

                                        @php
                                        {{$array = preg_split ("/\,/", $plan->description);  }}
                                        @endphp
                                        @foreach ($array as $des)

                                        <div class="row align-items-center mb-1 g-3">
                                            <div class="col-8 col-md-7 col-lg-8">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="ms-2 fw-semi-bold text-1000 lh-base">{{$des}}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                        
                                        

                                    </div>
                                </div>

                                <div class="border-dashed border-bottom mt-4">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h5 class="text-900 fw-semi-bold">Items subtotal: </h5>
                                        <h5 class="text-900 fw-semi-bold">${{$plan->total_befor}}</h5>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <h5 class="text-900 fw-semi-bold">Discount: </h5>
                                        <h5 class="text-900 fw-semi-bol">{{$plan->discount}}</h5>
                                    </div>
                                
                                    <div class="d-flex justify-content-between mb-2">
                                        <h5 class="text-900 fw-semi-bold">Subtotal </h5>
                                        <h5 class="text-900 fw-semi-bold">${{$plan->price}}</h5>
                                    </div>
                                    
                                </div>
                                <div class="d-flex justify-content-between border-dashed-y pt-3">
                                <h4 class="mb-0">Total :</h4>
                                <h4 class="mb-0">${{$plan->price}}</h4>
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

<style>
    .spacer {
        margin-bottom: 24px;
    }

    /**
     * The CSS shown here will not be introduced in the Quickstart guide, but shows
     * how you can use CSS to style your Element's container.
     */
    .StripeElement {
      background-color: white;
      padding: 10px 12px;
      border-radius: 4px;
      border: 1px solid #ccd0d2;
      box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
      -webkit-transition: box-shadow 150ms ease;
      transition: box-shadow 150ms ease;
    }

    .StripeElement--focus {
      box-shadow: 0 1px 3px 0 #cfd7df;
    }

    .StripeElement--invalid {
      border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
      background-color: #fefde5 !important;
    }

    #card-errors {
        color: #fa755a;
    }
</style>
<script src="https://js.stripe.com/v3/"></script>
<script>

	const stripe = Stripe('{{ env('STRIPE_KEY') }}')	
	const elements = stripe.elements()

    var style = {
          base: {
            color: '#32325d',
            lineHeight: '18px',
            fontFamily: '"Raleway", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
              color: '#aab7c4'
            }
          },
          invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
          }
    };

	const cardElement = elements.create('card', {
            style: style,
            hidePostalCode: true
        });

	cardElement.mount('#card-element')

    // Handle real-time validation errors from the card Element.
    cardElement.addEventListener('change', function(event) {
          var displayError = document.getElementById('card-errors');
          if (event.error) {
            displayError.textContent = event.error.message;
            return;
          } else {
            displayError.textContent = '';
          }
    });
    console.log(1);

	const cardHolderName = document.getElementById('card-holder-name')
    const cardHolderEmail = document.getElementById('card-holder-email')
	const cardBtn = document.getElementById('card-button')
    
    const form = document.getElementById('payment-form')	
	form.addEventListener('submit', async (e) => {
	    e.preventDefault()	
	    // cardBtn.disabled = true
	    const { setupIntent, error } = await stripe.confirmCardSetup(
	        cardBtn.dataset.secret, {
	            payment_method: {
	                card: cardElement,
	                billing_details: {
	                    name: cardHolderName.value,
                        email: cardHolderEmail.value
	                }   
	            }
	        }
	    )
	    if(error) {	
            var displayError = document.getElementById('card-errors');
            displayError.textContent = error.message;
	        // cardBtn.disable = false
            console.log(error);

	    } else {
	        let token = document.createElement('input')
            
	        token.setAttribute('type', 'hidden')
	        token.setAttribute('name', 'token')
	        token.setAttribute('value', setupIntent.payment_method)
            form.appendChild(token)

            


	        form.submit();

	    }
	})
	
</script>




@endsection
