<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="{{ url('../images/logo.png') }}" style="width: 4rem;">
        </x-slot>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Billing Information') }}
        </h1>

        <x-jet-validation-errors id="post-errors" class="mb-4" />

        <form method="POST" id="payment-form" action="{{ route('checkout') }}">
            @csrf
            <div class="mt-4">
                <x-jet-label for="card-holder-name" value="{{ __('Full Name') }}" />
                <x-jet-input id="card-holder-name" class="block mt-1 w-full" type="text" name="card-holder-name"  required />
            </div>
         
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="line1" value="{{ __('Street Address') }}" />
                <x-jet-input id="line1" class="block mt-1 w-full" type="text" name="line1" :value="old('line1')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="line2" value="{{ __('apartment, suite, unit, or building. (Optional)') }}" />
                <x-jet-input id="line2" class="block mt-1 w-full" type="text" name="line2" :value="old('line2')"/>
            </div>
            <div class="mt-4">
                <x-jet-label for="city" value="{{ __('City') }}" />
                <x-jet-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="state" value="{{ __('State') }}" />
                <x-jet-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')"  maxlength="2" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="postal_code" value="{{ __('Zip') }}" />
                <x-jet-input id="postal_code" class="block mt-1 w-full" type="text" name="postal_code" :value="old('postal_code')"  maxlength="5" required />
            </div>
            <hr>

            <input type="hidden" name="payment-method" id="payment-method">

            <div class="mt-4">
                <div id="card-errors"></div>
                <div id="total" class="mb-4">
                    <h2 class="relative text-base font-bold">Total: ${{ $price }}</h2>
                </div>
                <div class="py-3 px-1 border border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <div id="card-element"></div>
                </div>

                <div class="mt-8 mb-4">
                    <button id="card-button" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" data-secret="{{ $intent->client_secret }}">
                        Subscribe Now!
                    </button> 
                </div>
            </div>
            <!-- <div class="flex items-center justify-end mt-4">
            </div> -->
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe("{{ env('STRIPE_KEY') }}");
 
    const elements = stripe.elements();
    const cardElement = elements.create('card');
 
    cardElement.mount('#card-element');
</script>

<script>
    const cardHolderName = document.getElementById('card-holder-name');
    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret; 
    const paymentForm = document.getElementById('payment-form')

    cardElement.on('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });

    cardButton.addEventListener('click', async (e) => {
        const { setupIntent, error } = await stripe.confirmCardSetup(
            clientSecret, {
                payment_method: {
                    card: cardElement,
                    billing_details: { name: cardHolderName.value }
                }
            }
        ).then(function (result) {
            if (result.error) {
                var errorElement = document.getElementById('post-errors');
                errorElement.textContent = result.error.message;
            } else {
                const paymentMethodInput = document.getElementById('payment-method');
                paymentMethodInput.value = result.setupIntent.payment_method;
                paymentForm.submit();
            }
        }); 
    });
</script>
