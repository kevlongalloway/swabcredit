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
            <input type="hidden" name="service_id" id="payment-method" value="{{ $service_id }}">

            <div class="mt-4">
                <div id="card-errors"></div>

                <div class="py-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                     <form id="payment-form">
                        <div id="google-pay-button"></div>
                       <div id="card-container"></div>
                     </form>
                     <div id="payment-status-container"></div>
                </div>

                <div id="total" class="mb-4">
                    <h2 class="relative text-base font-bold">Total: ${{ $price }}</h2>
                </div>

                <div class="mt-8 mb-4">
                    <button id="card-button" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        Subscribe Now!
                    </button> 
                </div>
            </div>
            <!-- <div class="flex items-center justify-end mt-4">
            </div> -->
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
<script src="https://sandbox.web.squarecdn.com/v1/square.js"></script>
<script type="text/javascript">
    const appId = "{{ env('SQUARE_APPLICATION_ID') }}";
    const locationId = "{{ env('SQUARE_LOCATION') }}"; 


    

      async function initializeCard(payments) {
        const card = await payments.card();
        await card.attach('#card-container');

        return card;
      }

      function buildPaymentRequest(payments) {
        // Checkpoint 1
        const defaultShippingOptions = [
          {
            amount: '0.00',
            id: 'shipping-option-1',
            label: 'Free',
          },
          {
            amount: '10.00',
            id: 'shipping-option-2',
            label: 'Expedited',
          },
        ];

        let lineItems = [
          { amount: "{{ $price }}", label: 'Item Cost' },
          { amount: '0.00', label: 'Shipping' },
          { amount: '0.00', label: 'Tax' },
        ];

        let total = calculateTotal(lineItems);

        const paymentRequestDetails = {
          countryCode: 'US',
          currencyCode: 'USD',
          lineItems,
          requestBillingContact: true,
          requestShippingContact: true,
          shippingOptions: defaultShippingOptions,
          total,
        };

        const req = payments.paymentRequest(paymentRequestDetails);

        // Checkpoint 2
        req.addEventListener('shippingoptionchanged', (option) => {
          // Add your business logic here.
          // This tells you the shipping options selected by the buyer, and allows you to update
          // totals based on the pricing of each shipping option.
          const newLineItems = updateOrAddLineItems(lineItems, {
            Shipping: option.amount,
          });
          const total = calculateTotal(newLineItems);

          // We want to update the line items it can be referenced later in other eventListener calls.
          lineItems = newLineItems;

          return {
            lineItems,
            total,
          };
        });

        // Checkpoint 3
        req.addEventListener('shippingcontactchanged', (contact) => {
          // Add your business logic here.
          // This tells you the address of the buyer, and allows you to update your shipping options
          // and pricing based on their location.
          const isCA = contact.state === 'CA';

          const newShippingOptions = isCA
            ? defaultShippingOptions
            : [
                {
                  id: 'shipping-options-3',
                  label: 'Standard Shipping',
                  amount: '15.00',
                },
                {
                  id: 'shipping-options-4',
                  label: 'Express Shipping',
                  amount: '25.00',
                },
              ];

          const taxableItem = lineItems.find((lineItem) => {
            return lineItem.label === 'Item Cost';
          });

          const tax = calculateTax(taxableItem.amount, contact.state);
          // Whenever the shipping contact is changed, the shipping option defaults to the
          // first option. This will lead to the shippingoptionchanged event being emitted for
          // each contact change when if shipping address is required.
          const newLineItems = updateOrAddLineItems(lineItems, { Tax: tax });

          total = calculateTotal(newLineItems);
          lineItems = newLineItems;

          return {
            lineItems: newLineItems,
            shippingOptions: newShippingOptions,
            total,
          };
        });

        return req;
      }

      function calculateTotal(lineItems) {
        const amount = lineItems
          .reduce((total, lineItem) => {
            return total + parseFloat(lineItem.amount);
          }, 0.0)
          .toFixed(2);

        return { amount, label: 'Total' };
      }

      // newAmountByLabel will be in the format of { labelName: amount }, e.g. { 'Shipping':'10.00', 'Tax':'3.00' }
      function updateOrAddLineItems(currentLineItems, newAmountsByLabel) {
        // A list  of which newAmounts labels exist in the current line items.
        const updatedLineItem = new Set();

        // set the new amount for the line items that need to be updated.
        const newLineItems = currentLineItems.map((lineItem) => {
          updatedLineItem.add(lineItem.label);
          if (newAmountsByLabel[lineItem.label] !== undefined) {
            return Object.assign({}, lineItem, {
              amount: newAmountsByLabel[lineItem.label],
            });
          }
          return lineItem;
        });

        // for line items that were not updated, add them to the new lineItem list.
        Object.entries(newAmountsByLabel).forEach(([label, amount]) => {
          if (!updatedLineItem.has(label)) {
            newLineItems.push({ label, amount, pending: false });
          }
        });

        return newLineItems;
      }

      function calculateTax(amount, state) {
        let taxPercent = 0.06;
        // These are not accurate and are used just for example purposes.
        switch (state) {
          case 'CA':
            taxPercent = 0.1;
            break;
          case 'GA':
            taxPercent = 0.075;
            break;
          case 'MI':
            taxPercent = 0.05;
            break;
        }

        const taxAmount = parseFloat(amount) * taxPercent;
        // returns a string that truncates to 2 digits, matching the format of '1.25'
        return taxAmount.toFixed(2);
      }

      async function initializeGooglePay(payments) {
        const paymentRequest = buildPaymentRequest(payments);

        const googlePay = await payments.googlePay(paymentRequest);
        await googlePay.attach('#google-pay-button');

        return googlePay;
      }

      async function createPayment(token) {
        const body = JSON.stringify({
          locationId,
          sourceId: token,
          serviceId: 2
        });

        const paymentResponse = await fetch('/payment', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body,
        });
        console.log(paymentResponse);
        if (paymentResponse.ok) {
          return paymentResponse.json();
        }

        const errorBody = await paymentResponse.text();
        throw new Error(errorBody);
      }

      async function tokenize(paymentMethod) {
        const tokenResult = await paymentMethod.tokenize();
        if (tokenResult.status === 'OK') {
          return tokenResult.token;
        } else {
          let errorMessage = `Tokenization failed with status: ${tokenResult.status}`;
          if (tokenResult.errors) {
            errorMessage += ` and errors: ${JSON.stringify(
              tokenResult.errors
            )}`;
          }

          throw new Error(errorMessage);
        }
      }

      // status is either SUCCESS or FAILURE;
      function displayPaymentResults(status) {
        const statusContainer = document.getElementById(
          'payment-status-container'
        );
        if (status === 'SUCCESS') {
          statusContainer.classList.remove('is-failure');
          statusContainer.classList.add('is-success');
        } else {
          statusContainer.classList.remove('is-success');
          statusContainer.classList.add('is-failure');
        }

        statusContainer.style.visibility = 'visible';
      }

      document.addEventListener('DOMContentLoaded', async function () {
        if (!window.Square) {
          throw new Error('Square.js failed to load properly');
        }

        let payments;
        try {
          payments = window.Square.payments(appId, locationId);
        } catch {
          const statusContainer = document.getElementById(
            'payment-status-container'
          );
          statusContainer.className = 'missing-credentials';
          statusContainer.style.visibility = 'visible';
          return;
        }

        let card;
        try {
          card = await initializeCard(payments);
        } catch (e) {
          console.error('Initializing Card failed', e);
          return;
        }

        let googlePay;
        try {
          googlePay = await initializeGooglePay(payments);
        } catch (e) {
          console.error('Initializing Google Pay failed', e);
          // There are a number of reason why Google Pay may not be supported
          // (e.g. Browser Support, Device Support, Account). Therefore you should handle
          // initialization failures, while still loading other applicable payment methods.
        }

        async function handlePaymentMethodSubmission(event, paymentMethod) {
          event.preventDefault();

          try {
            // disable the submit button as we await tokenization and make a payment request.
            cardButton.disabled = true;
            const token = await tokenize(paymentMethod);
            const paymentResults = await createPayment(token);
            displayPaymentResults('SUCCESS');

            console.debug('Payment Success', paymentResults);
          } catch (e) {
            cardButton.disabled = false;
            displayPaymentResults('FAILURE');
            console.error(e.message);
          }
        }

        const cardButton = document.getElementById('card-button');
        cardButton.addEventListener('click', async function (event) {
          await handlePaymentMethodSubmission(event, card);
        });

        // Checkpoint 2.
        if (googlePay !== undefined) {
          const googlePayButton = document.getElementById('google-pay-button');
          googlePayButton.addEventListener('click', async function (event) {
            await handlePaymentMethodSubmission(event, googlePay);
          });
        }
      });
  </script>
